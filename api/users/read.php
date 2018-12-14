<?php
    //Headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    include_once '../../config/database.php';
    include_once '../../modules/post.php';

    //Instantiate DB & connect
    $database = new Database();
    $db = $database->connect();

    //Instantiate Post
    $post = new Post($db);

    //
    $result = $post->readUsers();
    $num = $result->rowCount();

    if ($num > 0){
        //Post Array
        $post_arr = array();
        $post_arr['data'] = array();

        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $post_item = array(
                'id' => $userid,
                'fullname' => $fullname,
                'dob' => $dob,
                'age' => $age,
                'gender' => $gender, 
                'ethnicgroup' => $ethnicgroup,
                'stateOfOrigin' => $stateOfOrigin,
                'lga' => $lga,
                'hometown' => $hometown,
                'stateOfResidence' => $stateOfResidence,
                'lgaOfResidence' => $lgaOfResidence,
                'religion' => $religion,
                'occupation' => $occupation, 
                'phoneNumber' => $phoneNumber,
                'email' => $email,
                'profilepicture' => $profilepicture,
            );
            array_push($post_arr['data'], $post_item);
        }
        //Turn to JSON
        echo json_encode($post_arr);

    } else{
        echo json_encode(
            array('message' => 'No Records Found')
        ); 
    }

?>