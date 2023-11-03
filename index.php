<?php
use Pecee\SimpleRouter\SimpleRouter as Router;

require_once __DIR__ . '\vendor\autoload.php';
require_once __DIR__ . '\config\routes.php';
    
Router::start();
/*
namespace Pizza\Pizza;

require __DIR__ . '/vendor/autoload.php';
//require_once '../vendor/autoload.php';
require __DIR__ . '/config/router.php';
//require __DIR__ . '/src/index.php';
//Twig_Autoloader::register();
//chef

//use Twig\Loader\FilesystemLoader as FilesystemLoader;
//use Twig\Environment as Environment;
/*
$loader = new Twig\Loader\FilesystemLoader('/public');
$twig = new Twig\Environment($loader);*/
$request = $_SERVER['REQUEST_URI'];
//$router = file_get_contents('src/router.json');
//$router = json_decode($json);
/*
$rout = UserController->index();

foreach($router as $r) {
	if (preg_match($r['rout'], $request, $matches) > 0) {
        $controllerName = "Pizza\\Pizza\\Controller\\" . $r['controller'];
        $actionName = $r['action'];
	//	echo 'controller ' . $controllerName . ', action ' . $actionName;
        break;

    }
};

$controller = new $controllerName();
$controller->$actionName();

//echo var_dump($matches);
/*
switch ($request) {
	 case '/views/users':
    	require __DIR__ . '/views/users.php';
        
     case '/views/department':
    	require __DIR__ . '/views/dep.php';
}
*/

