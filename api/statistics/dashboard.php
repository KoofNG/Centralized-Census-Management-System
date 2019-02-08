<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization, X-Requested-With');

    $host = 'localhost';
    $dbName = 'ccmsdb';
    $table = 'tbl_registered_citizens';
    $user = 'root';
    $password = '';
    $conn;

    $userID;
    $fullName;
    $age;
    $profilePicture;
    $gender;
    $stateOfOrigin;
    $lga;

    
    try {
        $conn = new PDO('mysql:host='.$host . ';dbname=' .$dbName,$user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt1 = $conn->prepare('SELECT * FROM ' . $table .'');
        $LastRegistered = $conn->prepare('SELECT * FROM ' . $table . ' ORDER BY userId DESC LIMIT 1');

        $stmt1->execute();
        $LastRegistered->execute();

        $result1 = $stmt1->rowCount();
        $row = $LastRegistered->fetch(PDO::FETCH_ASSOC);

        $userID = $row['userId'];
        $fullName = $row['fullName'];
        $age = $row['age'];
        $gender = $row['gender'];
        $stateOfOrigin = $row['stateOfOrigin'];
        $lga = $row['lga'];
        $profilePicture = $row['profilePicture'];
    } catch (PDOException $e) {
        echo 'Connection Unsuccessful: ' . $e->getMessage();
    }    

    $newUser = array(
        'userId' => $userID,
        'fullName' => $fullName,
        'age' => $age,
        'gender' => $gender,
        'stateOfOrigin' => $stateOfOrigin,
        'lga' => $lga,
        'profilePicture' => $profilePicture,
    ); 


    $data = array(
        'Student' => $result1,
        'newUser' => $newUser
    ); 

    print_r(json_encode($data));
?>
