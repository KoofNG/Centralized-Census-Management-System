<?php
    class Database{
        //DB Params
        private $host = 'localhost';
        private $dbname = 'ccmsdb';
        private $user = 'root';
        private $password = '';
        private $conn;

        /* DB Connection */
        public function connect(){
            $this->conn = null;

            try {
                //code...
                $this->conn = new PDO('mysql:host='.$this->host . ';dbname=' .$this->dbname,$this->user, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'Connection Unsuccesful: ' . $e->getMessage();
            }
            return $this->conn;
        }
    }


?>