<?php
if ($_SERVER['SERVER_NAME']  == 'localhost') {
    /**database config */
    define('DB_NAME', 'project_u');
    define('DB_HOST', 'db');
    define('DB_PORT', '5432');
    define('DB_USER', 'root');
    define('DB_PSW', 'root');
    define('DB_DRIVER', '');


    define('ROOT', 'http://localhost/public');
} else {
    define('ROOT', 'http://www.youwebsite.com');
}
