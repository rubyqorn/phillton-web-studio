<?php 
namespace Phillton\Controllers;

use Phillton\Core\Controller;
use Phillton\Models\{
	Form,
	User
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
	* @return setted new objects
	*/ 
	public function __construct()
	{
		parent::__construct();
		$this->form = new Form();
		$this->user = new User();
	}

	/**
	* @return home page
	*/ 
	public function index()
	{
		$title = 'Phillton - прогрессивная веб студия';
		return $this->view->render('home', compact('title'));
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
	public function login()
	{
		$title = 'Войти';
		return $this->view->render('login', compact('title'));
	}

	/**
	* Authorization process
	*
	* @return redirect on admin page
	* if user have permissions
	*/ 
	public function auth()
	{
		if ($this->user->login() == TRUE) {
			return header('Location: /panel/index');
		}
	}
	
	/**
	* Register
	*
	* @return register page
	*/ 
	public function register()
	{
		$title = 'Зарегистрироваться';
		return $this->view->render('register', compact('title'));
	}

	/**
	* Registration proccess
	*
	* @return redirect on login page
	*/ 
	public function registration()
	{
		if ($this->user->registration() == TRUE) {
			return header('Location: /home/login');
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