<?php 
namespace Phillton\Controllers;

use Phillton\Core\Controller;
use Phillton\Models\Order;

class OrdersController extends Controller 
{
	/**
	* @var Order object Phillton\Models\Order
	*/ 
	protected $order = null;

	/**
	* Register all objects which will be
	* using in this class
	*
	* @return new objects 
	*/ 
	public function __construct()
	{
		$this->order = new Order();
	}

	/**
	* Update record and redirect on
	* orders table
	*
	* @return redirect on orders table
	*/ 
	public function update()
	{
		if (!$this->order->updateRecord($_GET['id'])) {
			die('Форма заполнена в неправильном формате');
		}

		return header('Location: /panel/orders?page=1');
	}
}