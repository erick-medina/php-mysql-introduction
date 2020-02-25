<?php

function openConnection() {
    // Try to figure out what these should be for you
    $dbhost    = "localhost";
    $dbuser    = "erick";
    $dbpass    = "kcirE";
    $db        = "becode";
   //phpinfo(); exit();
    // Try to understand what happens here
    $pdo = new PDO('mysql:host='. $dbhost . ';dbname='. $db, $dbuser, $dbpass);

 // Why we do this here
 return $pdo;
}
