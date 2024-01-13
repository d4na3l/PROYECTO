<?php

session_start();
// El archivo INIT.php contiene todos los archivos principales a ser ejecutados para echar a andar la apliación.
require '../app/core/init.php';

// Llamamos a la clase App y su método routing, para activar el servicio de routing que acabo de rehacer.
$app = new App;
$app->routing();
