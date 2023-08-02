<style>
    button{
        border-radius: 20px;
        width: 250px;
        margin: auto;
    }
</style>

<?php
session_start();
$username="admin";
$password="admin123";
$cookie_name = "admin";
$cookie_value = $username;


if(!isset($_POST)){
    if($_POST ['username'] === $username && $_POST ['password'] === $password){ 
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); //86400 = 1 day
    } else {
        echo "you are not authorized";
        echo "<br/>";
    }
}

if($_POST ['username'] == $username && $_POST ['password'] == $password){
    $url = "http://localhost/myapp/final_project/index.php?page=professionals";
    header("Location: " . $url);
    exit();
}else{
    echo "<h1>you are not authorized</h1>";
    echo "<br/>";
    echo("<button onclick='window.location.href = `http://localhost/myapp/final_project/index.php?page=login`;'><h2>Start again</h2></button>");
}
?>
<?php  
    if(!isset($_COOKIE[$cookie_name])){
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br/>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
?>
