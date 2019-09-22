<?php 
namespace Phillton\Controllers;

use Phillton\Core\Controller;
use Phillton\Models\{
	Form,
	User,
	Work
};

class HomeController extends Controller
{ 
	/**
	* @var Form object Phillton\Models\Form
	*/ 
	private $form = null;

	/**
	* @var User object Phillton\Models\User
	*/ 
	private $user = null;

	/**
	* @var Work object Phillton\Models\Work 
	*/ 
	private $work = null;

	/**
	* @return setted new objects
	*/ 
	public function __construct()
	{
		parent::__construct();
		$this->form = new Form();
		$this->user = new User();
		$this->work = new Work();
	}

	/**
	* @return home page
	*/ 
	public function index()
	{
		$title = 'Phillton - прогрессивная веб студия';
		$works = $this->work->getThreeLastWorks();
		return $this->view->render('home', compact('title', 'works'));
	}

	/**
	* Send email from contact form on the
	* home page
	*
	* @return sent email
	*/ 
	public function contact()
	{
		$this->form->sendEmail($_POST);
		return header('Location: /home/index');
	}

	/**
	* Login
	*
	* @return login page
	*/ 
	public function auth()
	{
		$title = 'Войти | Регистрация';
		return $this->view->render('auth', compact('title'));
	}

	/**
	* Authorization process
	*
	* @return redirect on admin page
	* if user have permissions
	*/ 
	public function login()
	{
		if ($this->user->login()) {
			return header('Location: /panel/index');
		}
	}

	/**
	* Registration proccess
	*
	* @return redirect on login page
	*/ 
	public function registration()
	{
		if ($this->user->registration()) {
			return header('Location: /home/auth');
		}
	}

	/**
	* Delete session and redirect on home
	* page
	*
	* @return redirect on home page 
	*/ 
	public function logout()
	{
		if (isset($_SESSION['user'])) {
			unset($_SESSION['user']);
			return header('Location: /home/index');
		}
	}
}