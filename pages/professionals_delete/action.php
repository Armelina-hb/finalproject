<?php 
    include_once $_SERVER['DOCUMENT_ROOT'] . '/myapp/final_project/classes/database.php';
    include_once $_SERVER['DOCUMENT_ROOT'] . '/myapp/final_project/classes/professionals.php';

    if(isset($_POST)){
        $professionals = new Professionals($db);
        $id = $_POST['id'];
        
        $result = $professionals->delete($id);
      
    }

    $url = "http://localhost/myapp/final_project/index.php?page=professionals";
    header("Location: " . $url);