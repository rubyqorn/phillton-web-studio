<?php 
namespace Phillton\Controllers;

use Phillton\Core\Controller;
use Phillton\Models\Work;

class WorksController extends Controller
{
	/**
	* @var Work model object
	*/ 
	protected $model = null;

	/**
	* @return new object model
	*/ 
	public function __construct()
	{
		parent::__construct();
		$this->model = new Work();
	}

	/**
	* @return works page
	*/
	public function index()
	{
		$links = $this->model->links(5);
		$works = $this->model->getWorks();
		$title = 'Наши работы';
		return $this->view->render('works', compact('title', 'works', 'links'));
	}
}