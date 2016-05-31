<?php
// Require Dependencies


require_once '../vendor/autoload.php';


// Instantiate app?
$routeDefinitionCallback = function (\FastRoute\RouteCollector $r) {
    $routes = include('routes.php');
    foreach ($routes as $route) {
        $r->addRoute($route[0], $route[1], $route[2]);
    }
};

$dispatcher = \FastRoute\simpleDispatcher($routeDefinitionCallback);
