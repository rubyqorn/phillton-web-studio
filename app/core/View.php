<?php 
namespace Phillton\Core;

class View
{
	/**
	* @var string
	*/ 
	private const BASE_DIR = '../views/';

	/**
	* @var string
	*/ 
	private const DEFAULT_LAYOUT = '../views/errors/404.php';

	/**
	* @param $template string
	* @param $data array
	*
	* @return View with variables
	*/ 
	public function render(string $template, $data = [])
	{
		$path = self::BASE_DIR . $template . '.php';

		if (file_exists($path)) {
			if ($data !== null) {
				ob_start();
				extract($data);
				ob_get_clean();
			}

			require_once $path;

		} else {
			require self::DEFAULT_LAYOUT;
		}
	}
}