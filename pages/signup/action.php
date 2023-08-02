<style>
    button{
        border-radius: 20px;
        width: 250px;
        margin: 250px;
    }
</style>

<?php
  include ('menu.php');  
session_start();
$username="admin";
$password="admin123";
$confpassword="admin123";

    if($_POST['username'] == $username && $_POST['password'] == $password && $_POST['confpassword'] == $confpassword){
        $url = "http://localhost/myapp/final_project/index.php?page=professionals";
        header("Location: " . $url);

    }else{
        echo("<button onclick='window.location.href = `http://localhost/myapp/final_project/index.php?page=signup`;'><h1>Start again</h1></button>");
    }
?>
