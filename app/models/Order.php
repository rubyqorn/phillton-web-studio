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

	/**
	* Count all registered users
	*
	* @return quantity of registered users
	*/ 
	public function countOrders()
	{
		return $this->selectAll(
			'SELECT COUNT(*) AS orders FROM orders'
		);
	}

	/**
	* Get 5 last registered users
	*
	* @return 5 registered users 
	*/ 
	public function lastOrders()
	{
		return $this->selectAll(
			'SELECT statuses.name AS status, orders.email, orders.customer 
				FROM orders INNER JOIN statuses
				WHERE statuses.status_id = orders.status_id 
				ORDER BY created_at DESC LIMIT 5'
		);
	}

	/**
	* Calculate persent of ready orders
	*
	* @return persent of ready orders
	*/ 
	public function persentOfFinishedOrders()
	{
		$quantityOfOrders = $this->countOrders();

		if (!empty($quantityOfOrders)) {
			$quantityOfReadyOrders = $this->selectAll(
				'SELECT COUNT(*) AS orders FROM orders WHERE status_id = 1'
			);

			foreach ($quantityOfOrders as $fullQuantity) {
				foreach ($quantityOfReadyOrders as $readyOrders) {
					$calculatePersent = $fullQuantity['orders'] / 100;
					$persentOfReadyOrders = $readyOrders['orders'] / $calculatePersent;
					return $persentOfReadyOrders;
				}
			}

		}
	}

	/**
	* Calculate present of prepare orders
	*
	* @return persent of prepare orders
	*/ 
	public function persentOfPrepareOrders()
	{
		$quantityOfOrders = $this->countOrders();

		if (!empty($quantityOfOrders)) {
			$quantityOfPrepareOrders = $this->selectAll(
				'SELECT COUNT(*) AS orders FROM orders WHERE status_id = 2'
			);

			foreach ($quantityOfOrders as $fullQuantity) {
				foreach ($quantityOfPrepareOrders as $prepareOrders) {
					$calculatePersent = $fullQuantity['orders'] / 100;
					$persentOfPrepareOrders = $prepareOrders['orders'] / $calculatePersent;
					return $persentOfPrepareOrders;
				}
			}
		}
	}

}