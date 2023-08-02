<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $data = json_decode(file_get_contents("php://input"));
    $id = $data->id;
      
    include_once $_SERVER['DOCUMENT_ROOT'] . '/myapp/final_project/classes/database.php';
    include_once $_SERVER['DOCUMENT_ROOT'] . '/myapp/final_project/classes/professionals.php';

    $professionals = new Professionals ($db);
    $result = $professionals->delete($id);



    if($result > 0){
        http_response_code(201);  
        echo json_encode(array("message" => "Product ".$name." was deleted.", "status" => 201));
    } else {
        http_response_code(500);
        echo json_encode(array("message" => "Error is ".$result, "status" => 500));
    }
}