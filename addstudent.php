
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
    
  </div>
</nav>
<?php
    include("connect.php"); 
    if($_SERVER['REQUEST_METHOD']=='POST')
    { 
        $R=$_POST['rollno'];
        $S=$_POST['sname'];
        $A=$_POST['class'];
        $M=$_POST['mobile'];
        $D=$_POST['div'];
        $i=$_FILES['photo']['name'];
        $tn=$_FILES['photo']['tmp_name'];
        move_uploaded_file($tn,"img/".$i);
        $sq="SELECT * FROM studentinfo WHERE rollno LIKE'$R'";
        $result1=mysqli_query($con,$sq);
          $p=mysqli_num_rows($result1);        
         if($p==1){
            echo "<script>alert('You are entered data is already exist i.e. rollnno');</script>";
         }
         else{
       
        $sql="INSERT INTO `studentinfo` (`rollno`, `name`, `class`, `div`, `mobile_no`, `img`) VALUES ('$R', '$S', '$A', '$D', '$M', '$i')";
        mysqli_query($con,$sql);
        echo "<script>alert('Data entered Successfully!');</script>";
        
    }
    }
?>
<form action="addstudent.php" method="POST" enctype="multipart/form-data">
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