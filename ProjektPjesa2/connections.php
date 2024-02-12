<?php

if (!class_exists('Database')) {
    class Database {
        private $servername = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname = "projektdb";
        private $conn;
    
        public function __construct() {
            $this->connect();
        }
    
        private function connect() {
            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
        }
    
        public function getConnection() {
            return $this->conn;
        }
    
        public function __destruct() {
            if ($this->conn) {
                $this->conn->close();
            }
        }
    }
}



$database = new Database();

$conn = $database->getConnection();


?>