<?php 
namespace Phillton\Core;

class Paginator
{
	/**
	* Run pagination on page. Count records from 
	* database also we get number of records on per
	* page and then devide counted records from db
	* on records for per page. And finally round up
	* the result
	*
	* @param $recordsPerPage int
	* @param $data array
	*
	* @return counted result which we have to
	* go through with "for" cycle
	*/ 
	public function run($recordsPerPage, $data)
	{	
		if (is_int($recordsPerPage) && is_array($data)) {
			if (!empty($data)) {
				$countedRecords = count($data);
				return $countPages = ceil($countedRecords / $recordsPerPage);
			} else {
				die('Записей не найдено');
			}
			
		}			
	}

	/**
	* Check for get parametr was passed. If it's not
	* page variable equal 1. Calculate page property
	* and return sql which will be using in the model.
	*
	* @param $recordsPerPage int
	* @param $table string
	*
	* @return sql statement
	*/ 
	public function calculateRecordsPerPage($recordsPerPage, $table)
	{
		if (is_int($recordsPerPage)) {

			if (isset($_GET['page'])) {
				$page = $_GET['page'];
			} else {
				$page - 1;
			}

			$calculateRecords = ($page - 1) * $recordsPerPage;

			return "SELECT * FROM $table LIMIT $calculateRecords, $recordsPerPage";

		} else {
			die('Неверное значения');
		}
		
	}
}