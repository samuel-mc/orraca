<?php

require 'flight/Flight.php';

# Debug errors
Flight::set('flight.log_errors', true);
# Root route
define('__ROOT__', "http://localhost/orraca");


Flight::route('/', function () {
    Flight::render('index.php', array('title' => 'Inicio', 'isNavAbsolute' => true));
});

Flight::route('/nuestros-restaurantes', function () {
    Flight::render('nuestrosRestaurantes.php', array('title' => 'Nuestros restaurantes'));
});

#404
Flight::map('notFound', function () {
    // Display custom 404 page
    Flight::render('404.php');
});

Flight::start();
