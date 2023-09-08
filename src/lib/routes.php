<?php

session_start();

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

$router = new \Bramus\Router\Router();

$router->get('/', function() {
    echo "Hola";
});


$router->run();