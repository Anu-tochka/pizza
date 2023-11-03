<?php
use Pecee\SimpleRouter\SimpleRouter as Router;

require_once __DIR__ . '\vendor\autoload.php';
require_once __DIR__ . '\config\routes.php';
    
Router::start();
//$request = $_SERVER['REQUEST_URI'];
