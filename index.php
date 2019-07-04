<?php
require './controller/routing/router.php';
require './controller/routing/route.php';

// require 'ProductsController.php';



$URL_DEV = '/amordecristo.com.co';


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

$router->add($URL_DEV.'/', function ()
{
	return require ('./views/landing.php');
});

// $router->add('/productos', 'ProductsController::index');
// $router->add('/productos/:name', 'ProductsController::show');

// /ruta/con/un/monton/de/parametros
$router->add('/:a/:b/:c/:d/:e/:f', function ($a, $b, $c, $d, $e, $f)
{
	return "$a<br>$b<br>$c<br>$d<br>$e<br>$f";
});

$router->run();