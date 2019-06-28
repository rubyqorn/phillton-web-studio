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
	public $message = '';


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

		return $this->message = 'Что-то пошло не так';
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
	* @return $this->message
	*/ 
	public function sendOrder(array $fields)
	{
		$this->validateOrderForm($fields);

		if ($this->validate !== null) {
			return $this->message = 'Ваш заказ обрабатывается. Ожидайте ответа в течение 24 часов';
		}

		return $this->message = 'Что-то пошло не так';
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
}