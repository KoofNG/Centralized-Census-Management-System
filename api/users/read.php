<?php
    //Headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    include_once '../../config/database.php';
    include_once '../../modules/core.php';

    //Instantiate DB & connect
    $database = new Database();
    $db = $database->connect();

    //Instantiate Post
    $User = new RegisteredUsers($db);

    //Setting the Reading User Class
    $result = $User->readUsers();

    $num = $result->rowCount();

    if ($num > 0){
        //Post Array
        $post_arr = array();
        $post_arr['Users'] = array();

        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $post_item = array(
                'userId' => str_pad($userId, 4, '0', STR_PAD_LEFT),
                'fullName' => $fullName,
                'dob' => $dob,
                'age' => $age,
                'gender' => $gender, 
                'ethnicGroup' => $ethnicGroup,
                'stateOfOrigin' => $stateOfOrigin,
                'lga' => $lga,
                'hometown' => $hometown,
                'stateOfResidence' => $stateOfResidence,
                'lgaOfResidence' => $lgaOfResidence,
                'religion' => $religion,
                'occupation' => $occupation, 
                'phoneNumber' => $phoneNumber,
                'email' => $email,
                'profilePicture' => $profilePicture,
            );
            array_push($post_arr['Users'], $post_item);
        }
        //Turn to JSON
        echo json_encode($post_arr);

    } else{
        echo json_encode(
            array('message' => 'No Records Found')
        ); 
    }
