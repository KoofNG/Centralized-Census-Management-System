<?php
    //Headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: PUT');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization, X-Requested-With');

    include_once '../../config/database.php';
    include_once '../../modules/core.php';

    //Instantiate DB & connect
    $database = new Database();
    $db = $database->connect();

    //Instantiate Post
    $updateSingleUser = new RegisteredUsers($db);

    //Get the Raw Posted Data
    $data = json_decode(file_get_contents("php://input"));

    $updateSingleUser->userId = str_pad($data->userId, 4, '0', STR_PAD_LEFT);
    $updateSingleUser->fullName = $data->fullName;
    $updateSingleUser->dob = $data->dob;
    $updateSingleUser->age = $data->age;
    $updateSingleUser->gender = $data->gender;
    $updateSingleUser->ethnicGroup = $data->ethnicGroup;
    $updateSingleUser->stateOfOrigin = $data->stateOfOrigin;
    $updateSingleUser->lga = $data->lga;
    $updateSingleUser->hometown = $data->hometown;
    $updateSingleUser->stateOfResidence = $data->stateOfResidence;
    $updateSingleUser->lgaOfResidence = $data->lgaOfResidence;
    $updateSingleUser->religion = $data->religion;
    $updateSingleUser->occupation = $data->occupation;
    $updateSingleUser->phoneNumber = $data->phoneNumber;
    $updateSingleUser->email = $data->email;
    $updateSingleUser->profilePicture = $data->profilePicture;
    $updateSingleUser->homeAddress = $data->homeAddress;
    $updateSingleUser->bvn = $data->bvn;
    $updateSingleUser->nim = $data->nim;
    $updateSingleUser->vin = $data->vin;
    $updateSingleUser->passportNumber = $data->passportNumber;


    //Create User
    if ($updateSingleUser->UpdateUser()){
        echo json_encode(
            array('Message' => 'User Form Updated')
        );
    } else{
        echo json_encode(
            array('Message' => 'User Form not Updated')
        );
    }
