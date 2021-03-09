<?php

/**
 * Front controller
 *
 * PHP version 7.0
 */

/**
 * Bootstrap application (Require composer autoloader and dotenv)
 */
require dirname(__DIR__) . '/Bootstrap/init.php';

/**
 * Error and Exception handling
 */
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');


/**
 * Routing
 */
$router = new Core\Router();

echo getenv('DB_HOST');

/**
 * Load all routes
 */
require dirname(__DIR__) . '/Routes/web.php';
require dirname(__DIR__) . '/Routes/api.php';

/**
 * Dispatch all routes  
 */    
$router->dispatch($_SERVER['QUERY_STRING']);