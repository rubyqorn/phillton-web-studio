<?php 
namespace Phillton\Auth\Interfaces;

interface CheckFields
{
	/**
	* @param $field string
	*
	* @return checked email field or error message
	*/ 
	public function checkEmailField($field);

	/**
	* @param $field string
	*
	* @return checked phone field or error message
	*/ 
	public function checkPhoneField($field);

	/**
	* @param $field string
	* @param $type string
	*
	* @return checked text field or error message
	*/ 
	public function checkTextField($field, $type);
	
	/**
	* @param $field string
	*
	* @return field name
	*/ 
	public function getFieldName($field);
}