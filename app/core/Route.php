<?php 
namespace Phillton\Core;

class Route
{
	/**
	* @var string
	*/ 
	private $route = '';

	/**
	* @var string
	*/ 
	private $controller = '';

	/**
	* @var string
	*/ 
	private $method = '';

	public function __construct()
	{
		$this->routeHandler();
	}

	/**
	* This method give first word in uri and compare
	* with controller name. Then we just give seccond
	* word and compare with method name in controller.
	* If all properties was compared, we call controller
	* method
	*
	* @return Called action controller
	*/ 
	private function routeHandler()
	{
		$this->route = $this->parse($_GET['url']);
		
		if (isset($this->route['0'])) {
			$this->controller = 'Phillton\Controllers\\' . ucfirst($this->route['0']) . 'Controller';
			$this->controller = new $this->controller;
		} else {
			die('Controller: ' . $this->controller . ' doesn\'t exists');
		}

		if (isset($this->route['1'])) {
			$this->method = $this->route['1'];
		}

		call_user_func([$this->controller, $this->method]);
	}

	/**
	* @param string $url
	*
	* @return Parsed url
	*/ 
	private function parse($url)
	{
		if (isset($url)) {
			return explode('/', rtrim($url, '/'));
		}
	}
}