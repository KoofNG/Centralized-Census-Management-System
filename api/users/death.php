<?php

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: PUT');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization, X-Requested-With');

    $host = 'localhost';
    $dbName = 'ccmsdb';
    $table = 'tbl_registered_citizens';
    $user = 'root';
    $password = '';
    $conn;

    $dateOfDeath;
    $timeOfDeath;


    try {
        $conn = new PDO('mysql:host='.$host . ';dbname=' .$dbName,$user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = 'UPDATE ' . $table . '
            SET 
                dateOfDeath = :dateOfDeath,
                timeOfDeath = :timeOfDeath
            WHERE userId = :userId';

        $stmt = $conn->prepare($query);

        $dateOfDeath = htmlspecialchars(strip_tags($dateOfDeath));
        $timeOfDeath = htmlspecialchars(strip_tags($timeOfDeath));

        $stmt->bindParam(':dateOfDeath', $dateOfDeath);
        $stmt->bindParam(':timeOfDeath', $timeOfDeath);

        if ($stmt->execute()){
            echo json_encode(
                array('Message' => 'User death records updated')
            );
        } else {
            echo json_encode(
                array('Message' => 'Operation not successful.')
            );
        }
        
    } catch (PDOException $e) {
        echo 'Operation Unsuccessful:' . $e->getMessage();
    }

?>