<?php


session_start();

// El archivo INIT.php contiene todos los archivos principales a ser ejecutados para ehcar a andar la apliación.
require '../app/core/init.php';

// Llamamos a la clase App y su método Cargar controlador, para activar la aplicación y enseñar la primera vista.
$app = new App;
$app->loadController();
