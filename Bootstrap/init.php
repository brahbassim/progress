<?php

/**
 * Composer
 */
require dirname(__DIR__) . '/vendor/autoload.php';

/**
 * Load dotenv
 */
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__) );
$dotenv->load();