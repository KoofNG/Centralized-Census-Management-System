<?php
    //Headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: PUT');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization, X-Requested-With');

    include_once '../../config/database.php';
    include_once '../../modules/post.php';

    //Instantiate DB & connect
    $database = new Database();
    $db = $database->connect();

    //Instantiate Post
    $post = new Post($db);

    //Get the Raw Posted Data
    $data = json_decode(file_get_contents("php://input"));

    $post->userid = $data->id;
    $post->fullname = $data->fullname;
    $post->dob = $data->dob;
    $post->age = $data->age;
    $post->gender = $data->gender;
    $post->ethnicgroup = $data->ethnicgroup;
    $post->stateOfOrigin = $data->stateOfOrigin;
    $post->lga = $data->lga;
    $post->hometown = $data->hometown;
    $post->stateOfResidence = $data->stateOfResidence;
    $post->lgaOfResidence = $data->lgaOfResidence;
    $post->religion = $data->religion;
    $post->occupation = $data->occupation;
    $post->phoneNumber = $data->phoneNumber;
    $post->email = $data->email;
    $post->profilepicture = $data->profilepicture;


    //Create User
    if ($post->UpdateUser()){
        echo json_encode(
            array('Message' => 'User Form Updated')
        );
    } else{
        echo json_encode(
            array('Message' => 'User Form not Updated')
        );
    }
?>