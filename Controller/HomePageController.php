<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class HomePageController
{
    public function render()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['submit'])) {
                $users = new User($_POST['firstName'], $_POST['lastName'], $_POST['username'],
                    $_POST['linkedin'], $_POST['github'], $_POST['email'], $_POST['language'],
                    $_POST['avatar'], $_POST['video'], $_POST['quote'], $_POST['quoteAuthor']);
                var_dump($users);

                // calling objects
                $callConnection = new Connection;
                $pdo = $callConnection->openConnection();
                $stmt = $callConnection->insertData();

                // prepared statement to sanitize input
                $pdo->prepare($stmt)->execute([
                    'firstName' =>  $users->getFirstName(),
                    'lastName' =>   $users->getLastName(),
                    'username' =>   $users->getUsername(),
                    'linkedin' =>   $users->getLinkedin(),
                    'github' =>     $users->getGithub(),
                    'email' =>      $users->getEmail(),
                    'language' =>   $users->getLanguage(),
                    'avatar' =>     $users->getAvatar(),
                    'video' =>      $users->getVideo(),
                    'quote' =>      $users->getQuote(),
                    'quoteAuthor' =>$users->getQuoteAuthor()
                ]);
            }
        }
        require 'View/Homepage.php';
    }

}

