<?php 
namespace Phillton\Controllers;

use Phillton\Core\Controller;

class PanelController extends Controller
{
	/**
	* Get admin main page if is set
	* user session 
	*
	* @return admin page
	*/ 
	public function index()
	{
		if (isset($_SESSION['user'])) {
			$title = 'Панель администрирования';
			return $this->view->render('admin/dashboard', compact('title'));
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
		if (isset($_SESSION['user'])) {
			$title = 'Таблицы заказов';
			return $this->view->render('admin/orders-table', compact('title'));
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
		if (isset($_SESSION['user'])) {
			$title = 'Таблица пользователей';
			return $this->view->render('admin/users-table', compact('title'));
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
		if (isset($_SESSION['user'])) {
			$title = 'Таблица услуг';
			return $this->view->render('admin/services-table', compact('title'));
		}

		return header('Location: /home/login');
		
	}

	/**
	* Works table
	*
	* @return table with works
	*/ 
	public function works()
	{
		if (isset($_SESSION['user'])) {
			$title = 'Таблица с работами';
			return $this->view->render('admin/works-table', compact('title'));
		}

		return header('Location: /home/login');
		
	}
}