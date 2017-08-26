<?php
    class db{

        // Get Env Properties
        protected $dbhost = null;
        protected $dbuser = null;
        protected $dbpass = null;
        protected $dbname = null;

        function __construct() {

            $this->$dbhost = getenv('DB_HOST');
            $this->$dbuser = getenv('DB_USER');
            $this->$dbpass = getenv('DB_PASSWORD');
            $this->$dbname = getenv('DB_DATABASE');
        }

        echo getenv('DB_HOST');

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
