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

	/**
	* Add new record into db table and 
	* redirect on works table page
	*
	* @return redirect on works table page
	*/ 
	public function add()
	{
		if ($this->model->addRecord()) {
			return header('Location: /panel/works?page=1');
		}
	}

	/**
	* Update record by id and redirect 
	* on works table page
	*
	* @return redirect on works table page
	*/ 
	public function update()
	{
		if ($this->model->updateRecord($_GET['id'])) {
			return header('Location: /panel/works?page=1');
		}
	}

	/**
	* Delete record by id and redirect
	* on works table page
	*
	* @return redirect on works table page
	*/ 
	public function delete()
	{
		if ($this->model->deleteRecord($_GET['id'])) {
			return header('Location: /panel/works?page=1');
		}
	}
}