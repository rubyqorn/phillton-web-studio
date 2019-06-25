<?php 
namespace Phillton\Core;

use Phillton\Core\Database;

abstract class Model extends Database
{
	/**
	* Access Database construct method
	* for creating own sql statement
	*/ 
	public function __construct()
	{
		parent::__construct();
	}

	/**
	* Select all data from database table
	*
	* @param $sql string
	* @return sql statement with data
	*/ 
	protected function selectAll($sql)
	{
		$stmt = $this->db->query($sql);
		return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}

	/**
	* Select data with prepare statement
	*	
	* @param $sql string
	* @param $bindings array
	* @return sql statement with data
	*/ 
	protected function selectRow($sql, $bindings = [])
	{
		// $stmt = $this->db->prepare($sql);
		// return $stmt->execute($bindings);
	}
}