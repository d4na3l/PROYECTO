<?php
if($_SERVER['SERVER_NAME']  == 'localhost')
{
    define('ROOT', 'http://localhost/public');
}else
{
    define('ROOT', 'http://www.youwebsite.com');
}

define('DB_HOST', 'localhost:5432');
define('DB_NAME', 'project_u');
define('DB_USER', 'root');
define('DB_PASS', 'root');
