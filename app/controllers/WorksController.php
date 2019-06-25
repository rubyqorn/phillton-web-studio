<?php 
namespace Phillton\Controllers;

use Phillton\Core\Controller;

class WorksController extends Controller
{
	public function index()
	{
		$title = 'Наши работы';
		return $this->view->render('works', compact('title'));
	}
}