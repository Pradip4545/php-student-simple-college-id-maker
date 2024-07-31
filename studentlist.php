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
    <form class="form-inline my-2 my-lg-0" method="POST" action="studsearch.php">
      <input class="form-control mr-sm-2" type="text" placeholder="Search only by Roll No"  name="search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
  <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Roll-No</th>
      <th scope="col">Student Name</th>
      <th scope="col">Class</th>
      <th scope="col">Div</th>
      <th scope="col">Mobile No</th>
      <th scope="col">Student image</th>
      <th scope="col">Remove Student</th>
    </tr>
  </thead>
  <tbody>
	  <?php
	  $con=mysqli_connect("localhost","root","","student");
	  $result="SELECT * FROM studentinfo";
	  $s=mysqli_query($con,$result);
	  while($row=mysqli_fetch_assoc($s)){
      $ro=$row['img'];
	  echo("<tr>
		  <td>".$row['rollno']."</td>
		  <td>".$row['name']."</td>
          <td>".$row['class']."</td>
          <td>".$row['div']."</td>
          <td>".$row['mobile_no']."</td>
          <td><img src='img/'".$ro." alt='#' height='20px' width='20px'></td>
		  <td><a href='delete.php?adhar=".$row['rollno']."'> <input type='button' value='Delete' style='background-color:red;'></a></td>
	  </tr>");
	  }
	  ?>

  </tbody>
</table>
   </body>
</html>