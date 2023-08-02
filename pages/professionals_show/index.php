<h1>Professionals show</h1>
<style>
    h3{
        margin-left: 100px;
        margin-bottom: -10px;
    }
    p{
        font-size: 20px;
        margin-left: -30px;
        margin-bottom: 5px;
        width: 300px;
    }
    .button{
        position: absolute;
        margin-top: 20px;
        margin-left: 10px;
        font-style: italic;
        font-size: 16px;
    }
    
</style>
<?php
    include_once 'classes/database.php';
    include_once 'classes/professionals.php';

    $professionals = new Professionals ($db);

    if(isset($_GET) && isset($_GET['id'])) {
        $result = $professionals->readById($_GET['id']);
        
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "<h3>" . $row['Name'] . "<h3> <br/>";
                echo "<p><i>Phone number</i> : " . $row['Phone'] . "</p>";
                echo "<p><i>Address</i> : " . $row['Address'] . "</p>";
                echo "<p><i>Email</i> : " . $row['Email'] . "<p>";
                echo "<p><i>Salary</i> : " . "€" . $row['Salary'] . "<p>";
                echo "<a href='index.php?page=professionals' id='button'> Go back </a>";
            }
        }
    } else {
      die(' missing user id');
    }
?>