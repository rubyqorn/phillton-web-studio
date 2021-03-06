<?php 
namespace Phillton\Controllers;

use Phillton\Core\Controller;
use Phillton\Models\{
	Work,
	Service,
	User,
	Order,
};

class PanelController extends Controller
{
	/**
	* @var Work object Phillton\Models\Work
	*/ 
	private $work;

	/**
	* @var Services object Phillton\Models\Service
	*/ 
	private $service;

	/**
	* @var User object Phillton\Models\User
	*/ 
	private $user;

	/**
	* @var Order object Phillton\Models\Order
	*/ 
	private $order;

	/**
	* Create models object
	*
	* @return models object
	*/ 
	public function __construct()
	{
		parent::__construct();

		$this->work = new Work();
		$this->service = new Service();
		$this->user = new User();
		$this->order = new Order();
	}

	/**
	* Get admin main page if is set
	* user session 
	*
	* @return admin page
	*/ 
	public function index()
	{
		$countedUsers = $this->user->countUsers();
		$lastUsers = $this->user->lastRegisteredUsers();
		$countedOrders = $this->order->countOrders();
		$lastOrders = $this->order->lastOrders();
		$persentOfReadyOrders = $this->order->persentOfFinishedOrders();
		$prepareOrders = $this->order->persentOfPrepareOrders();

		if (isset($_SESSION['user'])) {
			$title = 'Панель администрирования';
			return $this->view->render('admin/dashboard', compact(
				'title', 'countedUsers', 'countedOrders', 'lastUsers',
				'lastOrders', 'persentOfReadyOrders', 'prepareOrders'
			));
		}

		return header('Location: /home/login');
	}

	/**
	* Orders table
	*
	* @return table with orders
	*/ 
	public function orders()
	{
		$orders = $this->order->limitedOrders();
		$links = $this->order->links(5);

		if (isset($_SESSION['user'])) {
			$title = 'Таблицы заказов';
			return $this->view->render('admin/orders-table', compact('title', 'links', 'orders'));
		}
		
		return header('Location: /home/login');
	}

	/**
	* Users table
	*
	* @return table with users
	*/ 
	public function users()
	{
		$users = $this->user->limitedUsers();
		$links = $this->user->links(5);

		if (isset($_SESSION['user'])) {
			$title = 'Таблица пользователей';
			return $this->view->render('admin/users-table', compact('title', 'links', 'users'));
		}

		return header('Location: /home/login');
		
	}

	/**
	* Services table
	*
	* @return table with services
	*/ 
	public function services()
	{
		$services = $this->service->limitedServices();
		$links = $this->service->links(5);

		if (isset($_SESSION['user'])) {
			$title = 'Таблица услуг';
			return $this->view->render('admin/services-table', compact('title', 'services', 'links'));
		}

		return header('Location: /home/login');
	}

	/**
	* Works table with pagination
	*
	* @return table with works
	*/ 
	public function works()
	{
		$works = $this->work->limitedWorks();
		$pageLinks = $this->work->links(5);

		if (isset($_SESSION['user'])) {
			$title = 'Таблица с работами';
			return $this->view->render('admin/works-table', compact('title', 'works', 'pageLinks'));
		}

		return header('Location: /home/login');
		
	}

}