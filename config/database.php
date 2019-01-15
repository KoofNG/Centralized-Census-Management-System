<?php
    class Database{
        //DB Params
        private $host = 'localhost';
        private $dbName = 'ccmsdb';
        private $user = 'root';
        private $password = '';
        private $conn;

        /* DB Connection */
        public function connect(){
            $this->conn = null;
            try {
                //code...
                $this->conn = new PDO('mysql:host='.$this->host . ';dbname=' .$this->dbName,$this->user, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'Connection Unsuccessful: ' . $e->getMessage();
            }
            return $this->conn;
        }
    }
?>