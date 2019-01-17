<?php

    class RegisteredUsers{
        //DB STUFF
        private $conn;
        private $table = 'tbl_registered_citizens';

        //USER Properties
        //public $userId;
        public $fullName;
        public $dob;
        public $age;
        public $gender; 
        public $ethnicGroup;
        public $stateOfOrigin;
        public $lga;
        public $hometown;
        public $stateOfResidence;
        public $lgaOfResidence;
        public $religion;
        public $occupation; 
        public $phoneNumber;
        public $email;
        public $profilePicture;

        //Constructor with DB
        public function __construct($db){
            $this->conn = $db;
        }

        //Read Users
        public function readUsers(){
            //Create Query
            $query = 'SELECT * FROM '. $this->table .' '; 
            //Prepare Statement
            $stmt = $this->conn->prepare($query);
            //Execute Query
            $stmt->execute();
            return $stmt;
        }
        
        //Get Single User
        public function readSingleUser(){
            $query = 'SELECT * FROM '. $this->table .' WHERE userId = ? LIMIT 0,1';
             //Prepare Statement
             $stmt = $this->conn->prepare($query);
             //Bind ID
             $stmt->bindParam(1, $this->userId);
             //Execute Query
             $stmt->execute(); 
             $row = $stmt->fetch(PDO::FETCH_ASSOC);


             //Set Properties
            $this->userId = $row['userId'];
            $this->fullName = $row['fullName'];
            $this->dob = $row['dob'];
            $this->age = $row['age'];
            $this->gender = $row['gender'];
            $this->ethnicGroup = $row['ethnicGroup'];
            $this->stateOfOrigin = $row['stateOfOrigin'];
            $this->lga = $row['lga'];
            $this->hometown = $row['hometown'];
            $this->stateOfResidence = $row['stateOfResidence'];
            $this->lgaOfResidence = $row['lgaOfResidence'];
            $this->religion = $row['religion'];
            $this->occupation = $row['occupation'];
            $this->phoneNumber = $row['phoneNumber'];
            $this->email = $row['email'];
            $this->profilePicture = $row['profilePicture'];
        }

        //Register a User
        public function createUser(){
            //Create Query
            $query = 'INSERT INTO ' .$this->table . '
              SET 
               fullName = :fullName,
               dob = :dob,
               age = :age,
               gender = :gender, 
               ethnicGroup = :ethnicGroup,
               stateOfOrigin = :stateOfOrigin,
               lga = :lga,
               hometown = :hometown,
               stateOfResidence = :stateOfResidence,
               lgaOfResidence = :lgaOfResidence,
               religion = :religion,
               occupation = :occupation, 
               phoneNumber = :phoneNumber,
               email = :email';

            //Prepare Statement
            $stmt = $this->conn->prepare($query);

            //Clean Data
            $this->fullName = htmlspecialchars(strip_tags($this->fullName));
            $this->dob = htmlspecialchars(strip_tags($this->dob));
            $this->age = htmlspecialchars(strip_tags($this->age));
            $this->gender = htmlspecialchars(strip_tags($this->gender));
            $this->ethnicGroup = htmlspecialchars(strip_tags($this->ethnicGroup));
            $this->stateOfOrigin = htmlspecialchars(strip_tags($this->stateOfOrigin));
            $this->lga = htmlspecialchars(strip_tags($this->lga));
            $this->hometown = htmlspecialchars(strip_tags($this->hometown));
            $this->stateOfResidence = htmlspecialchars(strip_tags($this->stateOfResidence));
            $this->lgaOfResidence = htmlspecialchars(strip_tags($this->lgaOfResidence));
            $this->religion = htmlspecialchars(strip_tags($this->religion));
            $this->occupation = htmlspecialchars(strip_tags($this->occupation));
            $this->phoneNumber = htmlspecialchars(strip_tags($this->phoneNumber));
            $this->email = htmlspecialchars(strip_tags($this->email));
            //$this->profilePicture = htmlspecialchars(strip_tags($this->profilePicture));

            //Bind Data
            $stmt->bindParam(':fullName', $this->fullName);
            $stmt->bindParam(':dob', $this->dob);
            $stmt->bindParam(':age', $this->age);
            $stmt->bindParam(':gender', $this->gender);
            $stmt->bindParam(':ethnicGroup', $this->ethnicGroup);
            $stmt->bindParam(':stateOfOrigin', $this->stateOfOrigin);
            $stmt->bindParam(':lga', $this->lga);
            $stmt->bindParam(':hometown', $this->hometown);
            $stmt->bindParam(':stateOfResidence', $this->stateOfResidence);
            $stmt->bindParam(':lgaOfResidence', $this->lgaOfResidence);
            $stmt->bindParam(':religion', $this->religion);
            $stmt->bindParam(':occupation', $this->occupation);
            $stmt->bindParam(':phoneNumber', $this->phoneNumber);
            $stmt->bindParam(':email', $this->email);
            //$stmt->bindParam(':profilePicture', $this->profilePicture);

            //Execute Query

            if($stmt->execute()){
                return true;
            } 
            printf("Error: %s.\n", $stmt->error);
            return false;            
        }

        //Update Post
        public function UpdateUser(){
            //Create Query
            $query = 'UPDATE ' .$this->table . '
              SET 
               fullName = :fullName,
               dob = :dob,
               age = :age,
               gender = :gender, 
               ethnicGroup = :ethnicGroup,
               stateOfOrigin = :stateOfOrigin,
               lga = :lga,
               hometown = :hometown,
               stateOfResidence = :stateOfResidence,
               lgaOfResidence = :lgaOfResidence,
               religion = :religion,
               occupation = :occupation, 
               phoneNumber = :phoneNumber,
               email = :email,
               profilePicture = :profilePicture
            WHERE userId = :userId';

            //Prepare Statement
            $stmt = $this->conn->prepare($query);

            //Clean Data
            $this->fullName = htmlspecialchars(strip_tags($this->fullName));
            $this->dob = htmlspecialchars(strip_tags($this->dob));
            $this->age = htmlspecialchars(strip_tags($this->age));
            $this->gender = htmlspecialchars(strip_tags($this->gender));
            $this->ethnicGroup = htmlspecialchars(strip_tags($this->ethnicGroup));
            $this->stateOfOrigin = htmlspecialchars(strip_tags($this->stateOfOrigin));
            $this->lga = htmlspecialchars(strip_tags($this->lga));
            $this->hometown = htmlspecialchars(strip_tags($this->hometown));
            $this->stateOfResidence = htmlspecialchars(strip_tags($this->stateOfResidence));
            $this->lgaOfResidence = htmlspecialchars(strip_tags($this->lgaOfResidence));
            $this->religion = htmlspecialchars(strip_tags($this->religion));
            $this->occupation = htmlspecialchars(strip_tags($this->occupation));
            $this->phoneNumber = htmlspecialchars(strip_tags($this->phoneNumber));
            $this->email = htmlspecialchars(strip_tags($this->email));
            $this->profilePicture = htmlspecialchars(strip_tags($this->profilePicture));
            $this->userId = htmlspecialchars(strip_tags($this->userId));


            //Bind Data
            $stmt->bindParam(':fullName', $this->fullName);
            $stmt->bindParam(':dob', $this->dob);
            $stmt->bindParam(':age', $this->age);
            $stmt->bindParam(':gender', $this->gender);
            $stmt->bindParam(':ethnicGroup', $this->ethnicGroup);
            $stmt->bindParam(':stateOfOrigin', $this->stateOfOrigin);
            $stmt->bindParam(':lga', $this->lga);
            $stmt->bindParam(':hometown', $this->hometown);
            $stmt->bindParam(':stateOfResidence', $this->stateOfResidence);
            $stmt->bindParam(':lgaOfResidence', $this->lgaOfResidence);
            $stmt->bindParam(':religion', $this->religion);
            $stmt->bindParam(':occupation', $this->occupation);
            $stmt->bindParam(':phoneNumber', $this->phoneNumber);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':profilePicture', $this->profilePicture);
            $stmt->bindParam(':userId', $this->userId);

            //Execute Query

            if($stmt->execute()){
                return true;
            }
            printf("Error: %s.\n", $stmt->error);
            return false;
            
        }
    }
?>
