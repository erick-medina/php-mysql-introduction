<?php
declare(strict_types=1);

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


