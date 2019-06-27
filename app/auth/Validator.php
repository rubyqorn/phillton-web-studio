<?php 
namespace Phillton\Auth;

use Phillton\Auth\FieldChecker;

abstract class Validator
{
	/**
	* @var object Phillton\Auth\FieldChecker
	*/ 
	protected $field;

	/**
	* @return established properties
	*/ 
	public function __construct()
	{
		$this->field = $this->setFieldChecker();
	} 

	/**
	* @return set Phillton\Auth\FieldChecker
	* for field property
	*/ 
	private function setFieldChecker()
	{
		return $this->field = new FieldChecker();
	}
}