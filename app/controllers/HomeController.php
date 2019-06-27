<?php 
namespace Phillton\Controllers;

use Phillton\Core\Controller;

class HomeController extends Controller
{ 
	/**
	* @return home page
	*/ 
	public function index()
	{
		$title = 'Phillton - прогрессивная веб студия';
		return $this->view->render('home', compact('title', 'data'));
	}
}