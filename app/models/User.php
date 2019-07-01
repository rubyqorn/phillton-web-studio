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

			$queryForCheck = $this->selectAll('SELECT email FROM users');
			
			for ($i = 0; $i <= count($queryForCheck); $i++) { 
				if (in_array($_POST['email'], $queryForCheck[$i])) {
					die('Пользователь с такой почтой уже существует');
				} 
			}
			
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
					die('У вас нет привелегий находиться в этой директории');
				} else {
					return $_SESSION['user'] = $query['0']['name'];
				}
			} else {
				die('Неправильная почта или пароль');
			}
			
		}
	}

	/**
	* Get all users from db table
	*
	* @return array with users
	*/ 
	public function getUsers()
	{
		return $this->selectAll('SELECT * FROM users');
	}

	/**
	* Get limited users for pagination
	*
	* @return limited users
	*/ 
	public function limitedUsers()
	{
		return $this->selectAll(
			$this->paginator->calculateRecordsPerPage(5, 'users')
		); 
	}

	/**
	* Get page links for pagination
	*
	* @param $recordsPerPage int
	*
	* @return counted pages
	*/ 
	public function links($recordsPerPage)
	{
		return $this->paginator->run($recordsPerPage, $this->getUsers());
	}

	/**
	* Update users fields if its match
	* validation rules
	*
	* @param $id int|string
	*
	* @return updated record 
	*/ 
	public function updateRecord($id)
	{
		$usersFormValidation = $this->form->updateUsersForm($_POST);

		if (isset($id) && $usersFormValidation !== FALSE) {
			
			$query = $this->customizeTable(
				'UPDATE users SET role_id = ?, name = ?, email = ? WHERE id = ?',
				[$_POST['privelegies'], $_POST['name'], $_POST['email'], $id]
			);

			if ($query == TRUE) {
				return $usersFormValidation;
			}
		}

		die('Проблема с обработкой формы');
	}

	/**
	* Delete users by id from db table
	*
	* @return deleted user
	*/ 
	public function deleteRecord($id)
	{
		if (isset($id) && isset($_POST['delete'])) {
			return $this->customizeTable(
				'DELETE FROM users WHERE id = ?',
				[$id]
			);
		}
	}

	public function debug($str)
	{
		echo "<pre>";
		print_r($str);
		echo "</pre>";
	}

}