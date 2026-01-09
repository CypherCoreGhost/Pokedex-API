<?php

use App\Router\Dispatcher;
use App\HomeController;
use App\Router\Router;

Router::get('/api/signin', HomeController::class, 'show');

Router::post('/api/signup', HomeController::class, 'index');


Dispatcher::dispatch(Router::$getRoutes);
