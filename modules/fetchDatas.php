<?php

    class FetchData {
        private $conn;
        private $stateTable = 'tbl_state';
        private $lgaTable = 'tbl_lga';

        public $Id_State;
        public $LGA;
        public $State;

        public function __construct($db){
            $this->conn = $db;
        }

        public function fetchState() {
            $query = 'SELECT * FROM ' . $this->stateTable .' ';
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt;
        }

        public function fetchStateLGA() {
            $query = $this->conn->prepare('    SELECT * FROM '.$this->lgaTable.' WHERE ID_State :StateId      ');
            $query->bindParam(':StateId', $this->Id_State);
            $query->execute();
            return $query;
       }
    }
?> 