<?php

use App\Router\Dispatcher;
use Controller\HomeController;
use App\Router\Router;

Router::get('/teste', HomeController::class, 'show');

Router::get('/teste/show', HomeController::class, 'index');

Router::post('/teste/post', HomeController::class, 'store');


Dispatcher::dispatch(Router::$getRoutes);
Dispatcher::dispatch(Router::$postRoutes);