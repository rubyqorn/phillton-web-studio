<?php 
namespace Phillton\Models;

use Phillton\Core\Model;

class Work extends Model
{
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

}