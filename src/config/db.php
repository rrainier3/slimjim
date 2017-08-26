<?php
    class db{

        $this_string = "Testing 12344";

        echo $this_string;

        $dbhost = getenv("DB_HOST");

        echo $dbhost;

        // Get Env Vars

        private $dbuser = getenv('DB_USER');
        private $dbpass = getenv('DB_PASSWORD');
        private $dbname = getenv('DB_DATABASE');

        // Properties
        // private $dbhost = 'localhost';
        // private $dbuser = 'root';
        // private $dbpass = '123456';
        // private $dbname = 'slimapp';

        // Connect
        public function connect(){
            $mysql_connect_str = "mysql:host=$this->dbhost;dbname=$this->dbname";
            $dbConnection = new PDO($mysql_connect_str, $this->dbuser, $this->dbpass);
            $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbConnection;
        }
    }
