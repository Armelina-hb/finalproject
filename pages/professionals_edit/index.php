<h1>Professionals edit</h1>
<style>
    #name, #phone, #address, #email, #salary{
        width: 400px;
    }
</style>
<?php
    include_once 'classes/database.php';
    include_once 'classes/professionals.php';


    $professionals = new Professionals ($db); 

    if(isset($_GET) && isset($_GET['id'])) {
        $result = $professionals->readById($_GET['id']);
?>
        <form action="./pages/professionals_edit/action.php" method="post">
        <input type="hidden" name="id" value='<?=$_GET['id']?>' />
<?php 
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "<label> Name: <br/>";
                echo "<input name='name'  id='name' value='" . $row['Name'] . "' type='text'/>";
                echo "</label> <br/>";

                echo "<label> Phone: <br/>";
                echo "<input name='phone' id='phone' value='" . $row['Phone'] . "' type='number'/>";
                echo "</label> <br/>";

                echo "<label> Address: <br/>";
                echo "<input name='address' id='address' value='" . $row['Address'] . "' type='text' />";
                echo "</label> <br/>";

                echo "<label> Email: <br/>";
                echo "<input name='email' id='email' value='" . $row['Email'] . "' type='text' />";
                echo "</label> <br/>";

                echo "<label> Salary: <br/>";
                echo "<input name='salary' id='salary' value='" . $row['Salary'] . "' type='text' />";
                echo "</label> <br/>";
            }
        }
?>
        <button type="submit" id="submit">Submit</button>
        <input type="reset" value="Cancel" id="reset" onClick="myFunction()"/>
        <script>
            function myFunction() {
                window.location.href="http://localhost/myapp/final_project/index.php?page=professionals";
            }
        </script>
        </form>
        
<?php
    } else {
        die(' missing user id');
    } 
?>