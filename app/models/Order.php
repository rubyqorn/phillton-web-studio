<?php 
namespace Phillton\Models;

use Phillton\Core\Model;
use Phillton\Models\Form;

class Order extends Model
{
	/**
	* @var Form object Phillton\Models\Form
	*/ 
	private $form = null;

	/**
	* Register new models which will be using
	* in this class
	*
	* @return new objects 
	*/
	public function __construct()
	{
		parent::__construct();
		$this->form = new Form();
	}

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


	/**
	* Update availabel fields 
	*
	* @param $id int|string
	*
	* @return updated field
	*/ 
	public function updateRecord($id)
	{	
		if (isset($id)) {
			return $this->customizeTable(
				'UPDATE orders SET status_id = ? WHERE id = ?',
				[$_POST['status'], $id]
			);
		}
	}

}