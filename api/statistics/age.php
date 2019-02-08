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

        $stmt1 = $conn->prepare('SELECT * FROM ' . $table . ' WHERE age BETWEEN 0 AND 17');
        $stmt2 = $conn->prepare('SELECT * FROM ' . $table . ' WHERE age BETWEEN 18 AND 34');
        $stmt3 = $conn->prepare('SELECT * FROM ' . $table . ' WHERE age BETWEEN 35 AND 45');
        $stmt4 = $conn->prepare('SELECT * FROM ' . $table . ' WHERE age > 45');

        $stmt1->execute();
        $stmt2->execute();
        $stmt3->execute();
        $stmt4->execute();

        $result1 = $stmt1->rowCount();
        $result2 = $stmt2->rowCount();
        $result3 = $stmt3->rowCount();
        $result4 = $stmt4->rowCount();
    } catch (PDOException $e) {
        echo 'Connection Unsuccessful: ' . $e->getMessage();
    }    

    $data = array(
        'Children' => $result1,
        'Youth' => $result2,
        'Adult' => $result3,
        'Elders' => $result4
    ); 
    print_r(json_encode($data));
?>