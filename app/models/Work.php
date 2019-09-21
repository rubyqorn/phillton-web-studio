<?php 
namespace Phillton\Models;

use Phillton\Core\Model;
use Phillton\Models\Form;

class Work extends Model
{
	private $form = null;

	public function __construct()
	{
		parent::__construct();
		$this->form = new Form();
	}

	/**
	* @return data from database
	*/ 
	public function getWorks()
	{
		return $this->selectAll('SELECT * FROM works');
	}

	/**
	* Return limited records which will be using
	* with pagination
	*
	* @return records
	*/ 
	public function limitedWorks()
	{
		$sql = $this->paginator->calculateRecordsPerPage(5, 'works');
		return $this->selectAll($sql);
	}

	/**
	* Get three last records
	* @return Phillton\Models\Work 
	*/ 
	public function getThreeLastWorks() 
	{
		return $this->selectAll('SELECT * FROM works ORDER BY created_at DESC LIMIT 3');
	}

	/**
	* Return counted pages which we will use
	* on the page
	*
	* @param $recordsPerPage int
	* 
	* @return counted pages
	*/ 
	public function links($recordsPerPage)
	{
		return $this->paginator->run($recordsPerPage, $this->getWorks());  
	}

	/**
	* Get validated fields and insert theme 
	* values into db table. Also we get file
	* which we will pass into /img folder
	*
	* @return new inserted record
	*/ 
	public function addRecord()
	{	
		$validation = $this->form->analyzeWorksForm($_POST);

		if ($validation !== FALSE) {
			$uploadFile = '../public/img/'. $_FILES['image']['name'];

			if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
				return $this->customizeTable(
					'INSERT INTO works (title, image, created_at) VALUES (?,?,?)',
					[$_POST['title'], $uploadFile, date('Y-m-d')]
				);
			}
		}
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
		$validation = $this->form->analyzeWorksForm($_POST);

		if ($validation !== FALSE) {
			$uploadFile = '../public/img/' . $_FILES['image']['name'];

			if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
				return $this->customizeTable(
					'UPDATE works SET title = ?, image = ?, created_at = ? WHERE id = ?',
					[$_POST['title'], $uploadFile, date('Y-m-d'), $id]
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
				'DELETE FROM works WHERE id = ?',
				[$id]
			);
		}
	}

}