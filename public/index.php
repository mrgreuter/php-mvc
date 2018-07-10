<?php

/**
 * Front controller
 *
 * PHP version 7.0
 */

/**
 * Composer
 */
require dirname(__DIR__) . '/vendor/autoload.php';


/**
 * Error and Exception handling
 */
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');


/**
 * Routing
 */
$model = new Core\Model();
$router = new Core\Router($model);

// Add the routes
$router->add(array('home' => 'getHome'));

$router->dispatch($_SERVER['QUERY_STRING']);
