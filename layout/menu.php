<style>
  header{
    margin-top: 15px;
    padding: 15px;
    /* border-radius: 10px; */
    /* background-color: bisque; */
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    height: 60px;
    box-shadow: 0px 10px 15px 0px grey;
  }
  .menu1 ul li{
    list-style: none;
    padding-right: 15px;
    display: inline;
  }
  a:last-child{
    text-decoration: none;
  }
</style>

<header data-bs-theme="dark">
  <div class="menu1">
    <ul>
      <li> <a href="./index.php?page=login">Login</a> </li>
      <li> <a href="./index.php?page=signup">Sign Up</a> </li>
      <li> <a href="./index.php?page=professionals">Professionals</a> </li>
      <li> <a href="./index.php?page=search">&#x1F50D</a> </li>
    </ul>
  </div>
  
  <?php
  session_start();

  if (isset($_SESSION['user_id'])) {
    echo '<a href="./index.php?page=logout" style="font-size:20px;"><i class="fa fa-sign-out"></i></a>';
  }
  ?>

</header>

