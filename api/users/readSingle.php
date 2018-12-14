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

    //GET ID
    $post->id = isset($_GET['id']) ? $_GET['id'] : die();

    //Get Singglepst
    $post->readSingleUser();

    //Create Array
    $post_arr = array(
        'id' => $post->userid,
        'fullname' => $post->fullname,
        'dob' => $post->dob,
        'age' => $post->age,
        'gender' => $post->gender, 
        'ethnicgroup' => $post->ethnicgroup,
        'stateOfOrigin' => $post->stateOfOrigin,
        'lga' => $post->lga,
        'hometown' => $post->hometown,
        'stateOfResidence' => $post->stateOfResidence,
        'lgaOfResidence' => $post->lgaOfResidence,
        'religion' => $post->religion,
        'occupation' => $post->occupation, 
        'phoneNumber' => $post->phoneNumber,
        'email' => $post->email,
        'profilepicture' => $post->profilepicture,
    ); 

    //MAke JSon
    print_r(json_encode($post_arr));



?>