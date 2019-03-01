<?php
    //Headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    include_once '../../config/database.php';
    include_once '../../modules/core.php';

    //Instantiate DB & connect
    $database = new Database();
    $db = $database->connect();

    //Instantiate Users
    $singleUser = new RegisteredUsers($db);

    //GET ID
    $singleUser->userId = isset($_GET['userId']) ? $_GET['userId'] : die();

    //Get Single User
    $singleUser->readSingleUser();

    //Create Array
    $single_user_arr = array(
        'userId' => str_pad($singleUser->userId, 4, '0', STR_PAD_LEFT),
        'fullName' => $singleUser->fullName,
        'dob' => $singleUser->dob,
        'age' => $singleUser->age,
        'gender' => $singleUser->gender,
        'ethnicGroup' => $singleUser->ethnicGroup,
        'stateOfOrigin' => $singleUser->stateOfOrigin,
        'lga' => $singleUser->lga,
        'hometown' => $singleUser->hometown,
        'stateOfResidence' => $singleUser->stateOfResidence,
        'lgaOfResidence' => $singleUser->lgaOfResidence,
        'religion' => $singleUser->religion,
        'occupation' => $singleUser->occupation,
        'phoneNumber' => $singleUser->phoneNumber,
        'email' => $singleUser->email,
        'profilePicture' => $singleUser->profilePicture,
        'homeAddress' => $singleUser->homeAddress,
        'bvn' => $singleUser->bvn,
        'nim' => $singleUser->nim,
        'vin' => $singleUser->vin,
        'passportNumber' => $singleUser->passportNumber,
    ); 

    //Making a Single Json Object
    print_r(json_encode($single_user_arr));

