<?php 
namespace Phillton\Controllers;

use Phillton\Core\Controller;
use Phillton\Models\Form;

class HomeController extends Controller
{ 
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
		$validation = new Form();
		$validation->sendEmail($_POST);
		return header('Location: /home/index');
	}

	/**
	* Get admin main page if is set
	* user session 
	*
	* @return admin page
	*/ 
	public function admin()
	{
		if (isset($_SESSION['user'])) {
			$title = 'Панель администрирования';
			return $this->view->render('admin/dashboard', compact('title'));
		}

		header('Location: /home/login');
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
	* Register
	*
	* @return register page
	*/ 
	public function register()
	{
		$title = 'Зарегистрироваться';
		return $this->view->render('register', compact('title'));
	}
}