<?php
require './controller/routing/router.php';
require './controller/routing/route.php';

require './controller/group.controller.php';
require './controller/net.controller.php';



$URL_DEV = '/amordecristo.com.co';
echo $_SERVER["REQUEST_METHOD"];

//echo $ruta[count($ruta)-1];

$router = new Router($_SERVER['REQUEST_URI']);

$router->add($URL_DEV.'/static/:type/:file', function($type, $file){
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
		case 'png':
			header("Content-type: image/*");
			break;
		case 'mp4':
			header("Content-type: video/mp4");
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

$router->add($URL_DEV.'/', function (){
	return require ('./views/landing.php');
});


// API

$router->add($URL_DEV.'/groups', 'GroupController::getAlls');

$router->add($URL_DEV.'/nets', 'NetController::getAlls');

$router->run();