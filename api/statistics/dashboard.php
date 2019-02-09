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
        $indigene = $conn->prepare('SELECT * FROM ' . $table . ' WHERE stateOfOrigin = "ondo"');
        $nonIndigene = $conn->prepare('SELECT * FROM ' . $table . ' WHERE stateOfOrigin != "ondo"');
        
        $stmt1->execute();
        $LastRegistered->execute();
        $indigene->execute();
        $nonIndigene->execute();

        $result1 = $stmt1->rowCount();
        $in = $indigene->rowCount();
        $non = $nonIndigene->rowCount();
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
        'totalRegistered' => $result1,
        'indigene' => $in,
        'nonIndigene' => $non,
        'newUser' => $newUser
    ); 

    print_r(json_encode($data));
?>
