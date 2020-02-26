<?php

declare(strict_types = 1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class ProfileController
{
    public function render() {
        $callConnection = new Connection;
        $pdo = $callConnection->openConnection();
        $link = $_GET['user'];

        $stmt = $pdo->prepare("SELECT * FROM student WHERE id=:id");
        $stmt->execute(['id' => $link]);
        $fetch = $stmt->fetch();

        require 'View/Profilepage.php';
    }


}