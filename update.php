
<!doctype html>
<html lang="en">
  <head>
    <title>student.info</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
<?php
$con=mysqli_connect("localhost","root","","student");
if (isset($_GET['rollno']))
{
    $rollno=$_GET['rollno'];
    $p="SELECT * FROM `studentinfo` WHERE `rollno` LIKE '$rollno' ";
    $result=mysqli_query($con,$p);
    $data=mysqli_fetch_assoc($result);
    global $name,$div,$class,$rollno,$img,$mobile;
     $name=$data['name'];
     $rollno=$data['rollno'];
    $mobileno=$data['mobile_no'];
    $div=$data['div'];
    $class=$data['class'];
    // echo ("<div class='container'>Rollno:  ".$data['rollno']."<br>
    // Name:  ".$data['name']."<br>
    //  NO:".$data['']."<br>
    // Mobile NO:  ".$data['mobile_no']."</div>");
    
}
if($_SERVER['REQUEST_METHOD']=='POST')
{
  if($_POST['rollno'])
  { 
    $p=$_POST['rollno'];
   $sql="UPDATE `studentinfo` SET `rollno` = '$p' WHERE `studentinfo`.`name` = '$name'";
    mysqli_query($con,$sql);
    header("location:\project\studsearch.php");
  }
  else if($_POST['sname'])
  {
    $p=$_POST['sname'];
    $sql="UPDATE `studentinfo` SET `name` = '$p' WHERE `studentinfo`.`rollno` = '$rollno'";
    mysqli_query($con,$sql);
    header("location:\project\studsearch.php");
  }
  else if($_POST['div'])
  {
    $p=$_POST['div'];
    $sql="UPDATE `studentinfo` SET `div` = '$p' WHERE `studentinfo`.`rollno` = '$rollno'";
    mysqli_query($con,$sql);
    header("location:\project\studsearch.php");
  }
  else if($_POST['mobile'])
  {
    $p=$_POST['mobile'];
    $sql="UPDATE `studentinfo` SET `mobile_no` = '$p' WHERE `studentinfo`.`rollno` = '$rollno'";
    mysqli_query($con,$sql);
    header("location:\project\studsearch.php");
  }
  else if($_POST['class'])
  {
    $p=$_POST['class'];
    $sql="UPDATE `studentinfo` SET `class` = '$p' WHERE `studentinfo`.`rollno` = '$rollno'";
    mysqli_query($con,$sql);
    header("location:\project\studsearch.php");
  }
  else if($_POST['photo'])
  {
    $p=$_POST['photo'];
    $sql="UPDATE `studentinfo` SET `img` = '$p' WHERE `studentinfo`.`rollno` = '$rollno'";
    mysqli_query($con,$sql);
    header("location:\project\studsearch.php");
  }
}

?>
<div class='container my-10'>
<h5 style="color:red;"> What do you want to update just fill that field.</h5>
<div>
<form action="update.php" method="POST" enctype="multipart/form-data">
    <div class="container">
  <div class="form-group">
    <label for="exampleInputEmail1">Rollno:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="rollno" placeholder="Enter rollno">
     </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Student Name:</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="sname" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Class:</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="class" placeholder="Enter your class">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword2">Div:</label>
    <input type="text" class="form-control" id="exampleInputPassword2" name="div" placeholder="Division">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mobile NO:</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="mobile" placeholder="Enter Mobile NO">
  </div>
<div class="form-group">
    <label for="exampleInputPassword3">Upload Photo:</label>
    <input type="file"  id="exampleInputPassword3" name="photo" placeholder="Uload image">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
    </body>
</html>