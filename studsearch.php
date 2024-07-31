<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <body>

      
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="studhome.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addstudent.php">Add Student</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="\project\studentlist.php">Student List</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
        <a class="nav-link " href="\project\login.php">Log-out</a></button>
    </form>
  </div>
</nav>
<form action="#" method="post">
<?php 
 $con=mysqli_connect('localhost','root','','student');
 if($_SERVER['REQUEST_METHOD']=="POST")
{
   
    $search=$_POST['search'];
    $sql="SELECT * FROM studentinfo WHERE rollno LIKE'$search'";
    $p=mysqli_query($con,$sql);
    $count=mysqli_num_rows($p);
    $data=mysqli_fetch_assoc($p);
    if($count==1){
    echo ("<div class='container'>Rollno:  ".$data['rollno']."<br>
    Name:  ".$data['name']."<br>
    Class:".$data['class']."<br>
    Div:".$data['div']."<br>
    Mobile NO:  ".$data['mobile_no']."</div>
    <div class='container my-5'> <div class='row'><div class='col'><a href='identitycard.php?rollno=".$data['rollno']."'> <input type='button' value='Make ID Card' style='background-color:green;'></a></div>
    <div class='col'><a href='update.php?rollno=".$data['rollno']."'> <input type='button' value='Update' style='background-color:red;'></a></div>
   
    <div class='col'><a href='delete.php?rollno=".$data['rollno']."'> <input type='button' value='Delete' style='background-color:red;'></a></div></div></div>");}
    
    else{
        header("location:\project\studentlist.php");
    }
}
?>
</form>

 </body>
</html>