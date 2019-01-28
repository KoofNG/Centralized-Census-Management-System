<?php

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
 
    include_once '../../config/database.php';
    include_once '../../modules/fetchDatas.php';

    
    $database = new Database();
    $db = $database->connect();

    $statelga = new FetchData($db);

    $statelga->Id_State = isset($_GET['Id_State']) ? $_GET['Id_State'] : die();

    $statelga->fetchStateLGA();

    $num = $statelga->rowCount();

    if ($num > 0) {
        $lgaArray = array();
        $lgaArray['LGA'] = array();

        while ($row = $statelga->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $body = array(
                'lga' => $LGA,
            );
            array_push($lgaArray['LGA'],$body);
        }
        echo json_encode($lgaArray);
    } else {
        echo json_encode(
            array('message' => 'No Records Found')
        ); 
    }
    
?>