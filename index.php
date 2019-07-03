<?php
require './controller/routing/router.php';
require './controller/routing/route.php';

// require 'ProductsController.php';

$router = new Router($_SERVER['REQUEST_URI']);
$router->add('/', function ()
{
	required ('./views/index.html');
});

// $router->add('/productos', 'ProductsController::index');
// $router->add('/productos/:name', 'ProductsController::show');

// /ruta/con/un/monton/de/parametros
$router->add('/:a/:b/:c/:d/:e/:f', function ($a, $b, $c, $d, $e, $f)
{
	return "$a<br>$b<br>$c<br>$d<br>$e<br>$f";
});

$router->run();