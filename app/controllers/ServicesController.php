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
}