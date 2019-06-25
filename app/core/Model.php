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
	* Example: $this->selectRow('SELECT column FROM table WHERE id = ?', ['2']);	
	*
	* @param $sql string
	* @param $bindings array
	* @return sql statement with data
	*/ 
	protected function selectRow($sql, $bindings = [])
	{
		$stmt = $this->db->prepare($sql);
		$stmt->execute($bindings);
		return $stmt->fetchAll();
	}

	/**
	* In this case you can use INSERT, UPDATE, DELETE
	* queries. All you need it's just sql statement, and
	* if you have parametres you can create an array and pass
	* there values
	*
	* Example: $this->customizeTable(INSERT INTO column (column1, ...) 
	*			VALUES(?, ...), ['1',...]);
	*
	* @param $sql string
	* @param $bindings array
	* @return result of sql statement
	*/ 
	protected function customizeTable($sql, $bindings = [])
	{
		$stmt = $this->db->prepare($sql);
		return $stmt->execute($bindings);
	}

}