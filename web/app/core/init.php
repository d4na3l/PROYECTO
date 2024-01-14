<?php
// Ejecuta por orden cada uno de los archivos dentro de Core, para que funcionen

spl_autoload_register(function ($classname) {
    // Básicamente, llamar a las clases dentro de Model cuando son instanciadas.
    require $filename = "../app/models/" . ucfirst($classname) . ".php";
});

require 'config.php';
require 'functions.php';
require 'Database.php';
require 'Model.php';
require 'Controller.php';
require 'Auth.php';
require 'App.php';
