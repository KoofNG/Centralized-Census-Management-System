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

    
    try {
        $conn = new PDO('mysql:host='.$host . ';dbname=' .$dbName,$user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt1 = $conn->prepare('SELECT * FROM ' . $table . ' WHERE gender = "Male"');
        $stmt2 = $conn->prepare('SELECT * FROM ' . $table . ' WHERE gender = "female"');

        $stmt1->execute();
        $stmt2->execute();

        $result1 = $stmt1->rowCount();
        $result2 = $stmt2->rowCount();
    } catch (PDOException $e) {
        echo 'Connection Unsuccessful: ' . $e->getMessage();
    }    

    $data = array(
        'male' => $result1,
        'female' => $result2,
    ); 
    print_r(json_encode($data));
?>