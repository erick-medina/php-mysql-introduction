<?php

declare(strict_types = 1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class HomePageController
{
    public function render() {

        // calling connection object
        $callConnection = new Connection;
        $callConnection->openConnection();
    }


}

require 'View/Homepage.php';