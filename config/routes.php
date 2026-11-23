<?php
/** LISTA BLANCA DE RUTAS */

use Core\Router;
use Controllers\HomeController;
use Controllers\AnimalController;

//Nada más abrir la página te redirije al controlador principal
Router::add('get', '/', [HomeController::class, 'index']);

//Cuando quieres ir a animales te redirije al controlador de animales
Router::add('get', 'animales', [AnimalController::class, 'index']);

//Redirijir al controlador del animal según especie
Router::add('get', 'animales/especie/:especie', [AnimalController::class, 'porEspecie']);

//Redirijir al controlador del animal con el id que se le pasa como parámetro
Router::add('get', 'animales/:id', [AnimalController::class, 'show']);



// Añade aquí las rutas que necesites


