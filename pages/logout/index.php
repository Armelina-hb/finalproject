<?php
// session_start(); 

session_destroy();

// if (ini_get("session.use_cookies")) {
//     $params = session_get_cookie_params();
//     setcookie(session_name(), '', time() - 42000,
//         $params["path"], $params["domain"],
//         $params["secure"], $params["httponly"]
//     );
// }?>

<script>
    function afficherPopup() {
        alert("Vous avez été déconnecté !");
    }
</script>

<script>
    window.onload = function() {
        afficherPopup();
    }
</script>

<?php
include_once 'pages/login/index.php';
?>