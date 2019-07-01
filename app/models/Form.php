<?php 
namespace Phillton\Models;

use Phillton\Core\Model;
use Phillton\Auth\Validator;

class Form extends Validator
{
	/**
	* @var object
	*/ 
	private $validate = null;
	
	/**
	* @var string
	*/ 
	public $message = 'Что-то пошло не так';


	/**
	* Email sending if validate property doesn't equal
	* null
	*
	* @param $fields array $_POST
	*
	* @return successfully sent email and message text 
	*/
	public function sendEmail(array $fields)
	{
		$this->validateContactForm($fields);

		if ($this->validate !== null) {
			$this->message = 'Ваше письмо отправлено успешно';
			return mail('phillton_info@gmail.com', $fields['subject'], $fields['message']);
		}

		return $this->message;
	}


	/**
	* Validate contact form
	*
	* @param $fields array $_POST
	*
	* @return contact form validation
	*/ 
	private function validateContactForm($fields)
	{
		if (!empty($fields) && is_array($fields)) {
			if (isset($fields['submit'])) {
				$this->validate = $this->field->checkEmailField($fields['email']);
				$this->validate = $this->field->checkTextField($fields['subject'], 'input');
				$this->validate = $this->field->checkTextField($fields['message'], 'textarea');
				return $this->validate;
			}
		}
	}


	/**
	* Return success message if validate property
	* doesn't equal null
	*
	* @param $fields array $_POST
	*
	* @return $this->message
	*/ 
	public function sendOrder(array $fields)
	{
		$this->validateOrderForm($fields);

		if ($this->validate !== null) {
			return $this->message = 'Ваш заказ обрабатывается. Ожидайте ответа в течение 24 часов';
		}

		return $this->message;
	}


	/**
	* Order form validation
	*
	* @param $fields array $_POST
	*
	* @return validated fields
	*/ 
	private function validateOrderForm($fields)
	{
		if (!empty($fields) && is_array($fields)) {
			if (isset($fields['send-order'])) {
				$this->validate = $this->field->checkEmailField($fields['email']);
				$this->validate = $this->field->checkPhoneField($fields['phone']);
				$this->validate = $this->field->checkTextField($fields['name'], 'input');
				return $this->validate;
			}
		}
	}


	/**
	* Return success message if validated fields
	* don't equal false. And default message if
	* validated fields returned false
	*
	* @param $fields array $_POST
	*
	* @return success
	*/ 
	public function registrationProcess(array $fields)
	{
		$this->validateRegitrationForm($fields);

		if ($this->validate !== FALSE) {
			return $this->message = 'Вы успешно зарегистрированны';
		}

		return $this->message;
	}


	/**
	* Checking passed fields 
	*
	* @param $fields array
	*
	* @return validated fields
	*/ 
	private function validateRegitrationForm($fields)
	{
		if (!empty($fields) && is_array($fields)) {
			if (isset($fields['registration'])) {
				$this->validate = $this->field->checkTextField($fields['name'], 'input');
				$this->validate = $this->field->checkEmailField($fields['email']);
				$this->validate = $this->field->checkPasswordField($fields['password']);
				return $this->validate;
			}
		}
	}

	/**
	* Check for fields was not empty and 
	* user data was introduced correctly
	*
	* @param $fields array $_POST
	*
	* @return error or success message
	*/ 
	public function authorizationProcess(array $fields)
	{
		$this->validateLoginForm($fields);

		if ($this->validate == FALSE) {
			return $this->message;
		}

		return $this->message = 'Вы успешно вошли в свой аккаунт';
	}

	/**
	* Fields validation
	*
	* @param $fields array
	*
	* @return validated fields
	*/ 
	private function validateLoginForm($fields)
	{
		if (!empty($fields) && is_array($fields)) {
			if (isset($fields['login'])) {
				$this->validate = $this->field->checkEmailField($fields['email']);
				$this->validate = $this->field->checkPasswordField($fields['password']);
				return $this->validate;
			}
		}
	}

	/**
	* Return success message if validation fields
	* was successful
	*
	* @param $fields array
	*
	* @return error or success message
	*/  
	public function updateUsersForm(array $fields)
	{
		$this->validateUpdateUsersForm($fields);

		if ($this->validate == null) {
			return $this->message;
		}

		return $this->message = 'Поля успешно прошли проверку';
	}

	/**
	* Fields validation
	*
	* @param $fields array
	*
	* @return validated fields
	*/ 
	private function validateUpdateUsersForm($fields)
	{
		if (!empty($fields) && is_array($fields)) {
			if (isset($fields['edit'])) {
				$this->validate = $this->field->checkTextField($fields['name'], 'input');
				$this->validate = $this->field->checkEmailField($fields['email']);
				return $this->validate;
			}
		}
	}
}