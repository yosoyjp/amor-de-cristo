<?php
require './controller/routing/router.php';
require './controller/routing/route.php';

require './controller/group.controller.php';
require './controller/net.controller.php';
require './model/database.class.php';


$URL_DEV = '/amordecristo.com.co';
//echo $_SERVER["REQUEST_METHOD"];

$router = new Router($_SERVER['REQUEST_URI']);

//Server file statics;
$router->get($URL_DEV.'/static/:type/:file', function($type, $file){
	$ruta = explode('/', $_SERVER['REQUEST_URI']);

	$fileArray = explode('.', $file);
	$extension = $fileArray[count($fileArray)-1];

	switch ($extension) {
		case 'js':
			header("Content-type: text/javascript");
			break;
		case 'html':
			header("Content-type: text/html");
			break;
		case 'css':
			header("Content-type: text/css");
			break;
		case 'jpg':
			header("Content-type: image/*");
			break;
		case 'gif':
			header("Content-type: image/*");
			break;
		case 'jpeg':
			header("Content-type: image/*");
			break;
		case 'svg':
			header("Content-type: image/svg+xml");
			break;
		case 'png':
			header("Content-type: image/*");
			break;
		case 'mp4':
			header("Content-type: video/mp4");
			break;
		case 'webm':
			header("Content-type: video/webm");
			break;
		case 'ttf':
			header("Content-type: font/ttf");
			break;
		default:
			return null;
			break;
	}

	return readfile('./views/static/'.$type.'/'.$file);
});

$router->get($URL_DEV.'/', function (){
	return require ('./views/landing.php');
});

$router->get($URL_DEV.'/description', function (){
	return require ('./views/description.php');
});


// API

$router->get($URL_DEV.'/groups', 'GroupController::getAlls');
$router->post($URL_DEV.'/group', 'GroupController::newGroup');
$router->put($URL_DEV.'/group', 'GroupController::updateGroup');
$router->delete($URL_DEV.'/group', 'GroupController::deleteGroup');


$router->get($URL_DEV.'/nets', 'NetController::getAlls');
$router->post($URL_DEV.'/net', 'NetController::newNet');
$router->put($URL_DEV.'/net', 'NetController::updateNet');
$router->delete($URL_DEV.'/net', 'NetController::deleteNet');

$router->run($_SERVER["REQUEST_METHOD"]);