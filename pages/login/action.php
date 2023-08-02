<style>
    button{
        border-radius: 20px;
        width: 100px;
        margin: auto;
    }
</style>

<?php
session_start(); 

if (isset($_SESSION['user_id'])) {
    $url = "http://localhost/myapp/final_project/index.php?page=professionals";
    header("Location: " . $url);
    exit();
}

if(!isset($_POST)){
    if($_POST['username'] === $username && $_POST ['password'] === $password){ 
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); //86400 = 1 day
    } else {
        echo "you are not authorized";
        echo "<br/>";
        echo("<button onclick='window.location.href = `http://localhost/myapp/final_project/index.php?page=login`;'><h2>Start again</h2></button>");
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'admin' && $password === 'admin123') {
        
        // $_SESSION['user_id'] = 1; 
        $_SESSION['user_id'] = $_POST['username'];

        $url = "http://localhost/myapp/final_project/index.php?page=professionals";
        header("Location: " . $url);
        exit();
    } else {
        
        $error = "Identifiant ou mot de passe incorrect.";
    }
}

$cookie_name = "admin";
$cookie_value = $username;
if(!isset($_COOKIE[$cookie_name])){
    echo "Cookie named '" . $_POST['username'] . "' is not set!";
    echo "<br/> <br/> <br/>";
    echo("<button onclick='window.location.href = `http://localhost/myapp/final_project/index.php?page=login`;'><h2>Login</h2></button>");
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br/>";
    echo "Value is: " . $_COOKIE[$cookie_name];
    echo "<br/>";
    echo("<button onclick='window.location.href = `http://localhost/myapp/final_project/index.php?page=login`;'><h2>Login</h2></button>");
}
?>