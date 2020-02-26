<?php

class Connection
{
    private $dbhost;
    private $dbuser;
    private $dbpass;
    private $db;

    public function openConnection()
    {
        $this->dbhost = "localhost";
        $this->dbuser = "erick";
        $this->dbpass = "kcirE";
        $this->db = "becode";

        try { // check if there's a connection to the database
            $dataElements = 'mysql:host=' . $this->dbhost . ';dbname=' . $this->db;
            $pdo = new PDO($dataElements, $this->dbuser, $this->dbpass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function insertData(): string
    {
        return 'INSERT INTO student(first_name, last_name, username, linkedin, github, email, preferred_language, avatar, video, quote, quote_author) 
                VALUES(:firstName, :lastName, :username, :linkedin, :github, :email, :language, :avatar, :video, :quote, :quoteAuthor)';
    }
}
