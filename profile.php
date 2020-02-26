<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// main model
require 'Model/connection.php';
require 'Model/User.php';

//profile controller
require 'Controller/ProfileController.php';

$profileController = new ProfileController();
$profileController->render();
?>

