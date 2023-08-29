<?php

// Variables globales tanto para cuando se trabaja con localhost como para cuando tenga su propio dominio
if ($_SERVER['SERVER_NAME']  == 'localhost') {
    /* CONFIGURACION DE LA BASE DE DATOS */
    define('DB_NAME', 'project_u');
    define('DB_HOST', 'db');
    define('DB_PORT', '5432');
    define('DB_USER', 'root');
    define('DB_PSW', 'root');
    define('DB_DRIVER', '');

    // Aqui se refine el routing a agregar en los archivos de caracter src.
    define('ROOT', 'http://localhost/public');
} else {
    /* CONFIGURACION DE LA BASE DE DATOS */
    define('DB_NAME', 'project_u');
    define('DB_HOST', 'db');
    define('DB_PORT', '5432');
    define('DB_USER', 'root');
    define('DB_PSW', 'root');
    define('DB_DRIVER', '');

    // Aqui se refine el routing a agregar en los archivos de caracter src.
    define('ROOT', 'http://192.168.1.36/public');
}
