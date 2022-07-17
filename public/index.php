<?php

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\EstateController;

$router = new Router;

$router->get('/admin', [EstateController::class, 'index']);
$router->get('/propiedades/crear', [EstateController::class, 'create']);
$router->post('/propiedades/crear', [EstateController::class, 'create']);
$router->get('/propiedades/actualizar', [EstateController::class, 'update']);
$router->post('/propiedades/actualizar', [EstateController::class, 'update']);
$router->post('/propiedades/eliminar', [EstateController::class, 'delete']);
$router->checkRoutes();
