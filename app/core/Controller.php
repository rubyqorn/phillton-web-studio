<?php 
namespace Phillton\Core;

use Phillton\Core\View;

abstract class Controller
{
	/**
	* Return view object
	*
	* @var object 
	*/ 
	protected $view;

	/**
	* @return basic objects which we will use
	* in children classes
	*/ 
	public function __construct()
	{
		$this->view = new View();
	}
}