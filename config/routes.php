<?php

use Phalcon\Mvc\Router\Group as RouterGroup;

$routes = new RouterGroup([
    'module' => 'hello-world',
    'controller' => 'HelloWorld',
    'action' => 'index',
    'namespace' => 'Phlexus\Modules\HelloWorld\Controllers',
]);

$routes->add('/hello-world', [
    'controller' => 1,
    'action' => 2,
]);

return $routes;
