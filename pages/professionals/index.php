<?php
// session_start(); 

if (!isset($_SESSION['user_id'])) {
  $url = "http://localhost/myapp/final_project/index.php?page=login";
  header("Location: " . $url);
  exit();
}

$username = $_SESSION['user_id'];
?>

<style>
  .card{
    width: 85vw!important; 
  }
  .justify-content-center {
    justify-content: flex-start!important;
  }
  .container {
    margin-left: 5%!important;
  }
  a {
    text-decoration: none;
  }
  .add{
    display: flex;
    justify-content: flex-end;
    height: 10vh;
    margin-right: 10%;
  }
  button{
    background-color: green;
    color: white;
    border-radius: 5%;
    border: 0;
    padding: 5px;
    margin-right: 15px;
  }
  p{
    margin-left: 10%;
  }
  table{
    margin-left: 3%;
    width: 75vw;
  }
  th{
    padding-left: 2%;
  }
  .action{
    margin-left: 15%;
  }

</style>

<h1>Employees Details</h1>
<br/>
<p>Utilisateur connecté : <?php echo "<em>".$username."</em>"; ?></p>
<div class='add'>
  <a href="index.php?page=professionals_create"> <button>+ Add a New Employees</button></a>
</div>
<br/>

<?php
  include_once 'classes/database.php';
  include_once 'classes/professionals.php';
  
  $professionals = new Professionals ($db);
  $result = $professionals->readAll();
?>

<script>
  window.onload = function() {
    loadJson();
  };

  async function loadJson(){
    const response = await fetch('http://localhost/myapp/final_project/pages/professionals/api.php');
    const json = await response.json();

    var table = document.getElementById('container');

    for(const professional of json){
      var row = `<tr>`;
      // row += `<td> ${professional.id} </td> `;
      row += `<td> ${professional.Name} </td> `;
      row += `<td> ${professional.Address} </td> `;
      row += `<td> ${professional.Salary} </td> `;
      row += `<td> <a class='action' href='index.php?page=professionals_show&id=${professional.id}'>&#x1F441</a> | <a href='index.php?page=professionals_edit&id=${professional.id}'>&#x1F589</a> | <a href='index.php?page=professionals_delete&id=${professional.id}'>&#x1F5D1</a> </td>`;
      row += `</tr>`;

      table.innerHTML += row
    }
  }
</script>

<table id="container"> 
  <tr>
    <!-- <th> # </th> -->
    <th> Name </th>
    <th> Adress </th>
    <th> Salary </th>
    <th> Actions </th>
  </tr>
</table>