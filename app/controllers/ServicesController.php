<?php 
namespace Phillton\Controllers;

use Phillton\Core\Controller;

class ServicesController extends Controller
{
	public function index()
	{
		$title = 'Наши услуги';
		return $this->view->render('services', compact('title'));
	}
}