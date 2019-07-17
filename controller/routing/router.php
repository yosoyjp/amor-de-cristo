<?php
class Router {
	protected $requestUri;
	protected $postroutes;
	protected $getroutes;
	protected $putroutes;
	protected $deleteroutes;

	const GET_PARAMS_DELIMITER = '?';
	public function __construct($requestUri)
	{
		$this->postRoutes = [];
		$this->getRoutes = [];
		$this->putRoutes = [];
		$this->deleteRoutes = [];
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

	public function put($uri, $closure){
		$route = new Route($uri, $closure, false);
		array_push($this->putRoutes, $route);
	}

	public function delete($uri, $closure){
		$route = new Route($uri, $closure, false);
		array_push($this->deleteRoutes, $route);
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
			case 'PUT':
				foreach ($this->putRoutes as $route){
					if ($route->checkIfMatch($requestUri)){
						$response = $route->execute();
						break;
					}
				}
				break;
			case 'DELETE':
				foreach ($this->deleteRoutes as $route){
					if ($route->checkIfMatch($requestUri)){
						$response = $route->execute();
						break;
					}
				}
				break;
			default:
				header("HTTP/1.0 404 Not Found");
				//exit('404');
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
				//ESTA DEVOLVIENDO 404 CUANDO EL JSON ESTA VACIO
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