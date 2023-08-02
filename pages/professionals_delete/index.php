<h1> Please confirm you want to delete this professional ferom the database. </h1>
<style>
  input{
    width: 80px;
    height: 40px;
    font-size: 20px;
  }
</style>
<?php
  include_once 'classes/database.php';
  include_once 'classes/professionals.php';

  $professionals = new Professionals ($db);

  if(isset($_GET) && isset($_GET['id'])) {
    $result = $professionals->readById($_GET['id']);
    ?>
    <form action="./pages/professionals_delete/action.php" method="post">
      <input type="hidden" name="id" value='<?=$_GET['id']?>' />
    <?php 
    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        echo "<h3><i>Name</i> : </h3>";
        echo "<h3>" . $row['Name'] . "</h3>";
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