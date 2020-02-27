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
require 'Controller/ProfileController.php';


if (isset($_GET['page']) && $_GET['page'] === 'homepage') {
    $homePageController = new HomePageController();
    $homePageController->render();
} elseif (isset($_GET) || $_GET['page'] === 'login') {
    $profileController = new ProfileController();
    $profileController->render();
}
/*
if (!isset($_GET['page'])) {
        $homePageController = new HomePageController();
        $homePageController->render();
    } else {
    $profileController = new ProfileController();
    $profileController->render();
}
*/




