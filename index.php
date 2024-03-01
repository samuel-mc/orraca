<?php

require 'flight/Flight.php';

# Debug errors
Flight::set('flight.log_errors', true);
# Root route
#define('__ROOT__', "http://localhost/orraca");
define('__ROOT__', "http://localhost:5000/Trabajo/Freelancer/Samuel/orraca");


Flight::route('/', function () {
    Flight::render('index.php', array('title' => 'Inicio', 'isNavAbsolute' => true));
});

Flight::route('/nuestros-restaurantes', function () {
    Flight::render('nuestrosRestaurantes.php', array('title' => 'Nuestros restaurantes'));
});

Flight::route('/unete', function () {
    Flight::render('uneteEquipo.php', array('title' => 'Unete a nuestro equipo'));
});

Flight::route('/acerca', function () {
    Flight::render('acerca.php', array('title' => 'Acerca'));
});

Flight::route('/contacto', function () {
    Flight::render('contacto.php', array('title' => 'Contacto'));
});

#404
Flight::map('notFound', function () {
    // Display custom 404 page
    Flight::render('404.php');
});

Flight::start();
