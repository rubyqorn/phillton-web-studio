<?php 
namespace Phillton\Controllers;

use Phillton\Core\Controller;

class AboutController extends Controller
{
	/**
	* @return about page
	*/ 
	public function index()
	{
		$title = 'Больше информации о нас';
		return $this->view->render('about', compact('title'));
	}
}