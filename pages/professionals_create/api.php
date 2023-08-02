<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

if($_SERVER['REQUEST_METHOD'] === 'POST'){
//  this is how i get JS form
  $data = json_decode(file_get_contents("php://input"));
  $Name = $data->name;
  $Address = $data->address;
  $Email = $data->email;
  $Salary = $data->salary;
      
  include_once $_SERVER['DOCUMENT_ROOT'] . '/myapp/final_project/classes/database.php';
  include_once $_SERVER['DOCUMENT_ROOT'] . '/myapp/final_project/classes/professionals.php';

  $professionals = new Professionals ($db);
  $result = $professionals->create($Name, $Address, $Email, $Salary);

  if($result){
    http_response_code(201);  
    echo json_encode(array("message" => "Professionals ".$Name." was created.", "status" => 201));
  } else {
    http_response_code(500);
    echo json_encode(array("message" => "Error is ".$result, "status" => 500));
  }
}

?>