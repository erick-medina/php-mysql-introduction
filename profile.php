<?php

declare(strict_types = 1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'Model/connection.php';
require 'Model/User.php';

$callConnection = new Connection;
$pdo = $callConnection->openConnection();
$link = $_GET['user'];

$stmt = $pdo->prepare("SELECT * FROM student WHERE id=:id");
$stmt->execute(['id'=>$link]);
$fetch = $stmt->fetch();

?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blackjack PHP</title>
</head>

<body>
<?php



?>

<style>

</style>
</body>

</html>
