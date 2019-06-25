<?php 
namespace Phillton\Core;

use PDO;

class Database
{
	/**
	* @var array
	*/ 
	private $properties = [];

	/**
	* @var PDO object
	*/ 
	protected $pdo;

	/**
	* @return private connection method
	*/ 
	public function __construct()
	{
		return $this->connection();
	}

	/**
	* Access file with db properties
	*
	* @return data from config file
	*/ 
	private function dbPropertiesHandler()
	{
		$this->properties = '../db.php';
		
		if (file_exists($this->properties) && !empty($this->properties)) {
			return require $this->properties;
		}
	}

	/**
	* Access dbPropertiesHandler method.
	* Create new PDO object which contain 
	* accessed data from called earlier method 
	*
	* @return database connection
	*/ 
	private function connection()
	{
		$handler = $this->dbPropertiesHandler();
		
		try {

            $options = [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ];

            $this->db = new PDO(
                    'mysql:host=' . $handler['host'] .
                    ';dbname=' . $handler['db_name'] . ';charset=utf8',
                    $handler['username'],
                    $handler['password'], $options);
        } catch (Exception $e) {
        	die('Connection failed: ' . $e->getMessage());
        }

        return $this->db;

	}
}