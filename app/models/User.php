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
				[$_POST['name'], $_POST['email'], password_hash($_POST['password'], PASSWORD_DEFAULT)]
			);

			if ($query == TRUE) {
				return $register;
			}

		}
	}

	/**
	* Check authorization process. If authorization
	* not equal false we can select all user data
	* by email which was passed in email input. Also
	* we do compare password from db table and password 
	* from input. If $verify is true and user role id 
	* doesn't equal 2 we can create a user session.
	*
	* @return user session 
	*/ 
	public function login()
	{
		$login = $this->form->authorizationProcess($_POST);

		if ($login !== FALSE) {
			
			$query = $this->selectRow(
				'SELECT * FROM users WHERE email = ?',
				[$_POST['email']]
			);

			$verify = password_verify($_POST['password'], $query['0']['password']);

			if ($verify == TRUE) {
				if ($query['0']['role_id'] == 2) {
					die('У вас нет привелегий находиться в этой дирректории');
				} else {
					return $_SESSION['user'] = $query['0']['name'];
				}
			} else {
				die('Неправильная почта или пароль');
			}
			
		}
	}

}