<?php 
namespace Phillton\Models;

use Phillton\Core\Model;

class Order extends Model
{
	/**
	* @return all orders from db table
	*/ 
	public function getOrders()
	{
		return $this->selectRow(
			'SELECT statuses.name, orders.email, orders.phone_number, orders.customer
			 FROM orders INNER JOIN statuses WHERE statuses.status_id = orders.status_id'
		);
	}

	// 
	public function limitedOrders()
	{
		return $this->selectAll(
			$this->paginator->calculateRecordsPerPage(5, 'orders')
		);
	}

	public function links($recordsPerPage)
	{
		return $this->paginator->run($recordsPerPage, $this->getOrders());
	}
}