<?php

session_start();

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

$router = new \Bramus\Router\Router();

$router->get('/', function() {
    echo "Hola";
});

$router->get('/.*', function() {
    echo "404 Not Found";
});


$router->run();