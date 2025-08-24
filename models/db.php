<?php
    session_start(); // Start the session i.e. active sessions if any, or create a new one
    $sql = "";  // all statements to be executed will be stored in this variable

    class db {
        // servername, database, username, password, characterset
        private $servername;
        private $databasename;
        private $username;
        private $password;
        private $charset;

        // PDO - PHP Data Objects - used to connect to the database. reason for use is 
        // that it provides a consistent interface for accessing databases in PHP.
        
        // connect to the database
        function connect() {
            $this->servername = "localhost";
            $this->databasename = "expediaflights";
            $this->username = "root";
            $this->password = "";
            $this->charset = "utf8mb4";

            try {
                $dsn = "mysql:host=".$this->servername.";dbname=".$this->databasename.";charset=".$this->charset;
                $pdo = new PDO($dsn, $this->username, $this->password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;
            }catch(PDOException $e) {

                // Handle the exception, e.g., log or display an error message
                echo "Connection failed".$e->getMessage();
            }
        }

        // returns query execution result
        // save something on the db
        function getData($sql) {
            return $this->connect()->query($sql);
        }

        // stores data on the rst and converts it to JSON format
        // extract something and output it on the browser or rest apii
        function getJSON($sql) {
            $rst =$this-> getData($sql);
            return json_encode($rst->fetchAll(PDO::FETCH_ASSOC));
        }
    }
?>