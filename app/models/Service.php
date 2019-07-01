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

	/**
	* Return limited services
	*
	* @return sql statement with limit records
	*/ 
	public function limitedServices()
	{
		return $this->selectAll(
			$this->paginator->calculateRecordsPerPage(5, 'services')
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
		return $this->paginator->run($recordsPerPage, $this->getServices());
	}

	/**
	* Get validated fields and insert into db table. 
	* Also we get file which we upload and replace into
	* /img folder
	*
	* @return inserted record
	*/ 
	public function addRecord()
	{
		$validation = $this->form->analyzeServiceForm($_POST);

		if ($validation !== FALSE) {
			$uploadFile = '../public/img/'. $_FILES['image']['name'];

			if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
			 	return $this->customizeTable(
			 		'INSERT INTO services (title, description, preview_text, image)
			 			VALUES (?,?,?,?)',
			 		[$_POST['title'], $_POST['description'], $_POST['preview'], $uploadFile]
			 	);	
			} else {
				die('Проблемы с загрузкой файла');
			}			
		}

		die($validation);
	}

	/**
	* Get validated fields and update record
	* by id. Also we get file which will be
	* upload into /img folder
	*
	* @param $id int|string
	*
	* @return updated record
	*/ 
	public function updateRecord($id)
	{
		$validation = $this->form->analyzeServiceForm($_POST);

		if ($validation !== FALSE) {
			$uploadFile = '../public/img/' . $_FILES['image']['name'];

			if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
				return $this->customizeTable(
					'UPDATE services SET title = ?, description = ?, preview_text = ?, image = ?
						 WHERE id = ?',
					[$_POST['title'], $_POST['description'], $_POST['preview'], $uploadFile, $id]
				);
			}
		}
	}

	/**
	* Delete record by id
	*
	* @param $id int|string
	*
	* @return deleted record
	*/ 
	public function deleteRecord($id)
	{
		if (isset($id)) {
			return $this->customizeTable(
				'DELETE FROM services WHERE id = ?',
				[$id]
			);
		}
	}

}