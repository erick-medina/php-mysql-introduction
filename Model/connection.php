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

        try {
            $dataElements = 'mysql:host='.$this->dbhost. ';db='. $this->db;
            $pdo = new PDO($dataElements, $this->dbuser , $this->dbpass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

    }
}

/*
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
*/