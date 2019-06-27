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
	* Validate contact form and send mail
	*
	* @return contact form validation
	*/ 
	public function validateContactForm(array $fields)
	{
		if (!empty($fields) && is_array($fields)) {
			if (isset($fields['submit'])) {
				$this->validate = $this->field->checkEmailField($fields['email']);
				$this->validate = $this->field->checkTextField($fields['subject'], 'input');
				$this->validate = $this->field->checkTextField($fields['message'], 'textarea');

				if ($this->validate !== null) {
					mail('phillton_info@gmail.com', $fields['subject'], $fields['message']);
				}
			}
		}
	}
}