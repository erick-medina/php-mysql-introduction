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
            $validateEmail= true;
            $email = $_POST['email'];

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // check if email is correct
                echo 'Invalid email format';
                $validateEmail = false;
            }
            $validatePassword = true;
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirmPassword'];
            if ($password = $confirmPassword) {
                echo 'Passwords are equal';
            }
            if (isset($_POST['submit']) && $validateEmail) {
                $users = new User($_POST['firstName'], $_POST['lastName'], $_POST['username'], $_POST['password'],
                    $_POST['confirmPassword'], $_POST['linkedin'], $_POST['github'], $email, $_POST['language'],
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
                    'password' =>   $users->getConfirmPassword(),
                    'passwordConfirm' => $users->getConfirmPassword(),
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

