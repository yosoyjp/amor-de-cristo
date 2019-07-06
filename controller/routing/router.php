<?php
class Router {
	protected $requestUri;
	protected $postroutes;
	protected $getroutes;

	const GET_PARAMS_DELIMITER = '?';
	public function __construct($requestUri)
	{
		$this->postRoutes = [];
		$this->getRoutes = [];
		$this->setRequestUri($requestUri);
	}
	public function setRequestUri($requestUri)
	{
		if (strpos($requestUri, self::GET_PARAMS_DELIMITER))
		{
			$requestUri = strstr($requestUri, self::GET_PARAMS_DELIMITER, true);
		}
		$this->requestUri = $requestUri;
	}
	public function getRequestUri(){
		return $this->requestUri;
	}

	public function get($uri, $closure){
		$route = new Route($uri, $closure, false);
		array_push($this->getRoutes, $route);
	}

	public function post($uri, $closure){
		$route = new Route($uri, $closure, false);
		array_push($this->postRoutes, $route);
	}

	public function run($method){
		$response = false;
		$requestUri = $this->getRequestUri();

		//Verificamos el metodo de la ruta solicitada
		switch ($method) {
			case 'GET':
				foreach ($this->getRoutes as $route){
					if ($route->checkIfMatch($requestUri)){
						$response = $route->execute();
						break;
					}
				}
				break;
			case 'POST':
				foreach ($this->postRoutes as $route){
					if ($route->checkIfMatch($requestUri)){
						$response = $route->execute();
						break;
					}
				}
				break;
			default:
				header("HTTP/1.0 404 Not Found");
				exit('404');
				break;
		}
		$this->sendResponse($response);
	}

	public function sendResponse($response){
		if($response){
			if (is_string($response)){
				echo $response;
			}
			else if (is_array($response) OR is_object($response)){
				header("Content-Type: application/json; charset=UTF-8");
				echo json_encode($response);
			}
			else if ($response instanceof Response)
			{
				$response->execute();
			}
		}
		else
		{
			header("HTTP/1.0 404 Not Found");
			exit('404');
		}
	}
}