<?php
// session_start(); 

if (!isset($_SESSION['user_id'])) {
    $url = "http://localhost/myapp/final_project/index.php?page=login";
    header("Location: " . $url);
    exit();
}

$username = $_SESSION['user_id'];
?>

<h1>Find a Professional</h1><br/>

<style>
    .form-control{
        width: 90%!important;
    }
    /* .logout i{
        position: absolute;
        margin-top: -230px;
        margin-left: 720px;
        font-size: 20px;
    } */
</style>

<form action="./pages/search/action.php" method="post">
    <!-- <label> Name <br/>
        <input name="search" id="search" value='' type="text" required/>
    </label>
    <br/>
    <input type="submit" id="submit" value="Submit"/>
    <input type="reset" value="Cancel" id="reset" onClick="myFunction()"/> -->
    
    <div class="input-group">
        <div class="form-outline">
            <label class="form-label" for="form1">Name</label> <br/>
            <input id="search-input" type="search" name="search" id="form1" class="form-control" required/>
        </div>

        <button id="search-button" type="submit" class="btn btn-primary">
            <i class="fa fa-search"></i>
        </button>
    </div>

    <!-- <script>
        function myFunction() {
        window.location.href="http://localhost/myapp/final_project/index.php?page=search";
    }
    </script> -->
</form>