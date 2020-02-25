<?php
declare(strict_types = 1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// model files
require 'Model/connection.php';
require 'Model/User.php';

// controller files
require 'Controller/HomePageController.php';

$controller = new HomePageController();
$controller->render();




/*
try {
    $open_connection = openConnection();
    //$conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    // set the PDO error mode to exception
    $open_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
*/