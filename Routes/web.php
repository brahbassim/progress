<?php


$router->add('', ['controller' => 'HomeController', 'action' => 'index']);
$router->add('{controller}/{action}');