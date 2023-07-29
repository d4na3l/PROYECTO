<?php
$password = "root";
$user = "root";
$dbname = "project_u";
$host = "127.0.0.1";
$port = "5432";


$string = 'psql:host=$host;port=$port;dbname=$dbname';

try {
    $con = new PDO($string, $user, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo 'Failure to connect to db: ' . $e->getMessage();
}
