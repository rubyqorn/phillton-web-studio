<?php 
namespace Phillton\Auth;

use Phillton\Auth\Interfaces\CheckFields;

class FieldChecker implements CheckFields
{
	/**
	* Check email field for similarity with regular
	* expression
	*
	* @param $field string
	*
	* @return checked email field
	*/ 
	public function checkEmailField($field)
	{
		$email = $this->getFieldName(htmlspecialchars(trim($field)));

		if (preg_match('#([a-zA-Z0-9_])@(yandex|mail|gmail)\.(ru|com|io)#', $email)) {
			return $email;
		} else {
			die('Поле почты заполнено в неправильном формате');
		}
	}

	/**
	* Check phone field for similarity with regular
	* expression
	*
	* @param $field string
	*
	* @return checked phone field
	*/
	public function checkPhoneField($field)
	{
		$phone = $this->getFieldName(htmlspecialchars(trim($field)));

		if (preg_match('#(\+[0-9]{1}\([0-9]{3}\)[0-9]{3}-[0-9]{2}-[0-9]{2})#', $phone)) {
			echo $phone;
		} else {
			die('Поле телефонного номера заполнено в неправильном формате');
		}
	}

	/**
	* In this method we are checking length text field.
	* Also in this method we have two types of field. It's
	* input and textarea which you have to pass like seccond
	* argument 
	*
	* @param $field string
	* @param $type string
	*
	* @return checked text field
	*/ 
	public function checkTextField($field, $type)
	{
		$text = $this->getFieldName(htmlspecialchars(strlen(trim($field))));

		if ($type == 'input') {
			if ($text < 6 || $text > 20) {
				die('Поле текста не должно быть меньше 6 и больше 20 символов');
			} else {
				return $text;
			} 
		}

		if ($type == 'textarea') {
			if ($text < 100 || $text > 200) {
				die('Поле текста не должно быть меньше 100 и больше 200 символов');
			} else {
				return $text;
			}
		}
	}

	/**
	* Get email field and empty field check
	*
	* @param $field string
	*
	* @return field value  
	*/ 
	public function getFieldName($field)
	{
		if ($field !== null) {
		 	return trim($field);
		} 
	}
}