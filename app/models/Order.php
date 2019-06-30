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
		return $this->selectAll("SELECT * FROM orders");
	}

	/**
	* Return limited services
	*
	* @return sql statement with limit records
	*/ 
	public function limitedOrders()
	{
		return $this->selectAll(
			$this->paginator->calculateRecordsPerPage(5, 'orders')
		);
	}

	/**
	* Return page links
	*
	* @param $recordsPerPage int
	*
	* @return counted pages
	*/ 
	public function links($recordsPerPage)
	{
		return $this->paginator->run($recordsPerPage, $this->getOrders());
	}
}