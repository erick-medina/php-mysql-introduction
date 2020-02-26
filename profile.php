<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'Model/connection.php';
require 'Model/User.php';

$callConnection = new Connection;
$pdo = $callConnection->openConnection();
$link = $_GET['user'];

$stmt = $pdo->prepare("SELECT * FROM student WHERE id=:id");
$stmt->execute(['id' => $link]);
$fetch = $stmt->fetch();

?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal profile</title>
</head>

<body>
<h1><?php echo $fetch['first_name'] . ' ' . $fetch['last_name'] ?></h1>
<p>Username: <?php echo $fetch['username'] ?></p>
<p>LinkedIn: <?php echo $fetch['linkedin'] ?></p>
<p>Github: <?php echo $fetch['github'] ?></p>
<p>Email: <?php echo $fetch['email'] ?></p>
<p>Preferred language: <?php echo $fetch['preferred_language'] ?></p>
<p>Avatar: <?php echo $fetch['avatar'] ?></p>
<p>Video: <?php echo $fetch['video'] ?></p>
<p>Quote: <?php echo $fetch['quote'] ?></p>
<p>Quote author: <?php echo $fetch['quote_author'] ?></p>

<style>

</style>
</body>

</html>
