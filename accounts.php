<!doctype html>
<html lang="en">
  <head>
    <title>logout</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="\project\home.php">Home <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item active">
        <a class="nav-link " href="\project\logout.php">Log-out</a>
      </li>
    </ul>
    
</nav>
  
<table align="center" border="2px" style="border: solid;text-align: center;border-radius: 2px;" cellpadding="15" cellspacing="none" width="1000" >
  <tr>
    <th>Email</th>
    <th>Password</th>
    <th>Delete</th>
  </tr>
  <?php
  include ("connect.php");
  $result="SELECT * FROM user";
  $s=mysqli_query($con,$result);
  while($row=mysqli_fetch_assoc($s)){
  echo("<tr>
    <td>".$row['username']."</td>
    <td>".$row['password']."</td>
    <td><a href='home.php?username=".$row['username']."'> <input type='button' value='Delete' style='background-color:red;'></a> </td>
  </tr>");
  }
  ?>
  </table?
</body>
</html>