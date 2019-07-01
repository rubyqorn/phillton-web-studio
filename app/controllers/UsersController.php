<?php 
namespace Phillton\Controllers;

use Phillton\Core\Controller;
use Phillton\Models\User;

class UsersController extends Controller
{ 
	/**
	* @var User object Phillton\Models\User
	*/ 
	private $user = null;

	/**
	* Register new objects which
	* will be using in this class
	*
	* @return new objects
	*/ 
	public function __construct()
	{
		parent::__construct();

		$this->user = new User();
	}

	/**
	* Update users infromation
	*
	* @return redirect on users table
	*/ 
	public function update()
	{
		if ($this->user->updateRecord($_GET['id'])) {
			return header('Location: /panel/users?page=1');
		}
	}

	/**
	* Delete users information
	*
	* @return redirect on users table
	*/ 
	public function delete()
	{
		if ($this->user->deleteRecord($_GET['id'])) {
			return header('Location: /panel/users?page=1');
		}
	}
}