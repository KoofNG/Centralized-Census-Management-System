<?php
    //Headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization, X-Requested-With');

    include_once '../../config/database.php';
    include_once '../../modules/core.php';

    //Instantiate DB & connect
    $database = new Database();
    $db = $database->connect();

    //Instantiate Post
    $createNewUser = new RegisteredUsers($db);

    //Get the Raw Posted Data
    $userData = json_decode(file_get_contents("php://input"));
    $createNewUser->fullName = $userData->fullName;
    $createNewUser->dob = $userData->dob;
    $createNewUser->age = $userData->age;
    $createNewUser->gender = $userData->gender;
    $createNewUser->ethnicGroup = $userData->ethnicGroup;
    $createNewUser->stateOfOrigin = $userData->stateOfOrigin;
    $createNewUser->lga = $userData->lga;
    $createNewUser->hometown = $userData->hometown;
    $createNewUser->stateOfResidence = $userData->stateOfResidence;
    $createNewUser->lgaOfResidence = $userData->lgaOfResidence;
    $createNewUser->religion = $userData->religion;
    $createNewUser->occupation = $userData->occupation;
    $createNewUser->phoneNumber = $userData->phoneNumber;
    $createNewUser->email = $userData->email;
    $createNewUser->homeAddress = $userData->homeAddress;
    $createNewUser->bvn = $userData->bvn;
    $createNewUser->nim = $userData->nim;
    $createNewUser->vin = $userData->vin;
    $createNewUser->passportNumber = $userData->passportNumber;
    $createNewUser->profilePicture = $userData->profilePicture;


    //Create User
    if ($createNewUser->createUser()){
        http_response_code(201);
    } else{
        http_response_code(503);
    }
    
?>
