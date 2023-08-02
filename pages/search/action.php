<style>
    a{
        text-decoration: none;
        background-color: gray;
        border: 10px;
        border-radius: 5%;
        padding: 8px;
        color: black;
        font-size: 15px;
        /* font-style: italic; */
        margin-left: 150px;
    }
    p{
        font-size: 20px;
        margin-left: 60px;

    }
    h1{
        margin: 45px 0 -10px 20px;
    }

</style>

<?php
    ini_set('display_errors', 1); 
    ini_set('display_startup_errors', 1); 
    error_reporting(E_ALL);

    include_once $_SERVER['DOCUMENT_ROOT'] . '/myapp/final_project/classes/database.php';
    include_once $_SERVER['DOCUMENT_ROOT'] . '/myapp/final_project/classes/professionals.php';

    if(isset($_POST['search'])){
        $professionals = new Professionals($db);
        $searchTerm = $_POST['search'];

        $result = $professionals->query($searchTerm);
        
        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "<h1>" . $row['Name'] . "</h1><br/>";
                echo "<p><i>Phone number</i> : " . $row['Phone'] . "</p>";
                echo "<p><i>Address</i> : " . $row['Address'] . "</p>";
                echo "<p><i>Email</i> : " . $row['Email'] . "<p>";
                echo "<p><i>Salary</i> : " . "€" . $row['Salary'] . "<p>";
            }
            echo "<a href='http://localhost/myapp/final_project/index.php?page=search'> Go back </a>";
            
        } else {
            echo "<h1>0 records</h1></br></br></br>";
            echo "<a href='http://localhost/myapp/final_project/index.php?page=search' id='button'> Go back </a>";
        }
    }
?>