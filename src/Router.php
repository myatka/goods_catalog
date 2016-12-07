<?php
/**
* 
*/
class Router
{
	
	function __construct()
	{
		# code...
	}

	public function process()
	{
		$requestUri = $_SERVER['REQUEST_URI'];
		$requestUri = trim($requestUri, '/');
		$requestArray = explode('/', $requestUri);
		
		if (count($requestArray) != 2) {
			echo "Invalid Request";
			return;
		}

		$controller = $requestArray[0];
		$method = $requestArray[1];
		require "controllers/$controller.php";
		$controllerObject = new $controller;

		if (is_numeric($method)){
			$controllerObject->one();

		} else {
			if (method_exists($controllerObject, $method)){
				$controllerObject->$method();
			} else {
				echo "Metod not exist";
			}

		}
	}
}
