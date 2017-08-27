<?php
    class db{

        protected $dbhost = null;
        protected $dbuser = null;
        protected $dbpass = null;
        protected $dbname = null;

        function __construct() {
            $this->$dbhost = getenv('DB_HOST');
            $this->$dbuser = getenv('DB_USERNAME');
            $this->$dbpass = getenv('DB_PASSWORD');
            $this->$dbname = getenv('DB_DATABASE');
        }

        // Connect
        public function connect(){
            $mysql_connect_str = "mysql:host=$this->dbhost;dbname=$this->dbname";
            $dbConnection = new PDO($mysql_connect_str, $this->dbuser, $this->dbpass);
            $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbConnection;
        }
    }