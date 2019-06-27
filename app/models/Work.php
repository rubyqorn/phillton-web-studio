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
}