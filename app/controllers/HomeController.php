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
		$validation->validateContactForm($_POST);
		return header('Location: /home/index');
	}
}