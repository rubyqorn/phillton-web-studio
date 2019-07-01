<?php 
namespace Phillton\Controllers;

use Phillton\Core\Controller;
use Phillton\Models\Service;

class ServicesController extends Controller
{
	/**
	* @var Service object
	*/ 
	protected $model = null;

	/**
	* @return new object 
	*/ 
	public function __construct()
	{
		parent::__construct();
		$this->model = new Service();
	}

	/**
	* @return services page
	*/ 
	public function index()
	{
		$services = $this->model->getServices();
		$title = 'Наши услуги';
		return $this->view->render('services', compact('title', 'services'));
	}

	/**
	* @return single service page
	*/ 
	public function service()
	{
		$title = 'Услуга';
		$services = $this->model->getServiceById($_GET['id']);
		return $this->view->render('service', compact('title', 'services'));
	}

	/**
	* @return success message and redirect
	* on a home page
	*/ 
	public function order()
	{
		$order = $this->model->orderHandler();
		return header('Location: /home/index');	
	}

	/**
	* Add new record in db table and redirect
	* on services table page
	*
	* @return redirect on services table page
	*/ 
	public function add()
	{
		if ($this->model->addRecord()) {
			return header('Location: /panel/services?page=1');
		}
	}
	
	/**
	* Update record by id and redirect
	* on services table page
	*
	* @return redirect on services table page
	*/ 
	public function update()
	{
		if ($this->model->updateRecord($_GET['id'])) {
			return header('Location: /panel/services?page=1');
		}
	}
	
	/**
	* Delete service from db by id
	*
	* @return redirect on services table page
	*/ 
	public function delete()
	{
		if ($this->model->deleteRecord($_GET['id'])) {
			return header('Location: /panel/services?page=1');
		}
	}
}