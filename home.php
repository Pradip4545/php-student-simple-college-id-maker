<?php 
$con=mysqli_connect("localhost","root","","data");
if (isset($_GET['username']) &&$_GET['username']!=NULL)
{
    $username=$_GET['username'];
    $p="SELECT * FROM `user` WHERE `username` LIKE '$username' ";
    $result=mysqli_query($con,$p);
    $sno=mysqli_fetch_assoc($result);
     $s= $sno['username'];
    $del="DELETE FROM user WHERE `user`.`username` ='$s'";
    mysqli_query($con,$del);
}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
  
  .container{
    border:2px solid black;
    margin-top:20px;
    border-radius:30px;
  }
</style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="\project\home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="\project\signup.php">Sign UP</a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link " href="\project\login.php">Login</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link " href="\project\logout.php">Log-out</a>
      </li>
    </ul>

  </div>
</nav>
<div class="container">
<marquee direction="left"><h1 style="bgcolor:red;color:green;">Welcome to Student Info </h1></marquee>
</div>
<div class="container">
<h2> If you are new here then click on sign up nav bar item for creation account.</h2>
<h2>  If you are not new here then click on login nav bar item</h2>
</div></body>
</html>