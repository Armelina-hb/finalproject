<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/myapp/final_project/classes/database.php';
    include_once $_SERVER['DOCUMENT_ROOT'] . '/myapp/final_project/classes/professionals.php';

    $professionals = new Professionals ($db);
    $result = $professionals->readAll();

    echo json_encode($result->fetch_all(MYSQLI_ASSOC));
?>