<?php 
namespace Phillton\Models;

use Phillton\Core\Model;

class Service extends Model 
{
	/**
	* @return data from database
	*/ 
	public function getServices()
	{
		return $this->selectAll('SELECT * FROM services');
	}

	public function getServiceById($id)
	{
		return $this->selectRow('SELECT title, image, preview_text, description FROM services WHERE id = ?', [$id]);
	}
}