<?php 
namespace Phillton\Models;

use Phillton\Core\Model;
use Phillton\Models\Form;

class User extends Model
{
	/**
	* @var Form object Phillton\Models\Form
	*/ 
	private $form = null;

	/**
	* @return new object which we will
	* in this class 
	*/ 
	public function __construct()
	{
		parent::__construct();
		$this->form = new Form();
	}

	/**
	* Checking register process. If all ok 
	* we can insert data in database and get 
	* success message
	*
	* @return success message
	*/ 
	public function registration()
	{
		$register = $this->form->registrationProcess($_POST);

		if ($register !== FALSE) {
			
			$query = $this->customizeTable(
				'INSERT INTO users (name, email, password) VALUES (?,?,?)',
				[$_POST['name'], $_POST['email'], md5($_POST['password'])]
			);

			if ($query == TRUE) {
				return $register;
			}

		}
	}
}