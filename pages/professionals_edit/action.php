<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/myapp/final_project/classes/database.php';
    include_once $_SERVER['DOCUMENT_ROOT'] . '/myapp/final_project/classes/professionals.php';

    if(isset($_POST)){
        $professionals = new Professionals ($db);
        
        $name = $_POST['name'];
        if(empty($name)){
            throw new ErrorException("Name can't be empty");
        }
        $phone = $_POST['phone'];
        if(empty($phone)){
            throw new ErrorException("Phone can't be empty");
        }
        $address = $_POST['address'];
        $email = $_POST['email'];
        if(empty($email)){
            throw new ErrorException("Email can't be empty");
        }
        $salary = $_POST['salary'];
        if(empty($salary)){
            throw new ErrorException("Salary can't be empty");
        }
        $id = $_POST['id'];
        

        $result = $professionals->update($name, $phone, $address, $email, $salary, $id);
    }

    // $url = "http://localhost/myapp/final_project/index.php?page=professionals";
    // header("Location: " . $url);
    echo "<script>window.location.href = 'http://localhost/myapp/final_project/index.php?page=professionals';</script>";
?>