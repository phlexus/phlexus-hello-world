<?php declare(strict_types=1);

use Phalcon\Mvc\Router\Group as RouterGroup;

$routes = new RouterGroup([
    'module' => 'HelloWorld',
    'controller' => 'IndexController',
    'action' => 'index',
    'namespace' => 'Phlexus\Modules\HelloWorld\Controllers',
]);

$routes->add('/', [
    'controller' => 1,
    'action' => 2,
]);

return $routes;
