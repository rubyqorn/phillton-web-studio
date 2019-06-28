<?php 
namespace Phillton\Models;

use Phillton\Core\Model;
use Phillton\Models\Form;

class Service extends Model 
{
	/**
	* @var Form object Phillton\Models\Form
	*/ 
	private $form = null;

	/**
	* @return objects which we will
	* using in this class
	*/ 
	public function __construct()
	{
		parent::__construct();
		$this->form = new Form();
	}

	/**
	* @return data from database
	*/ 
	public function getServices()
	{
		return $this->selectAll('SELECT * FROM services');
	}

	/**
	* @param $id string 
	*
	* @return data by id
	*/ 
	public function getServiceById($id)
	{
		return $this->selectRow('SELECT title, image, preview_text, description FROM services WHERE id = ?', [$id]);
	}

	/**
	* Checking for validation form was successfully.
	* If we are getting true, it means we can insert
	* data from order form. And consequently we are 
	* getting success message which contain in order
	* variable
	*
	* @return inserted order in 
	* database
	*/ 
	public function orderHandler()
	{
		$order = $this->form->sendOrder($_POST);
		
		if ($order !== FALSE) {
			
			$query = $this->customizeTable(
				'INSERT INTO orders (email, phone_number, customer) VALUES (?,?,?)',
				[$_POST['email'], $_POST['phone'], $_POST['name']]
			);

			if ($query == TRUE) {
				return $order;
			}

		}
	}
}