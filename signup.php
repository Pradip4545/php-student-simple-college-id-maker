<?php
include "connect.php" ;
if($_SERVER['REQUEST_METHOD']=="POST")
{  $suc=false;
  $username=$_POST['username'];
  $password=$_POST['password'];
  $cpassword=$_POST['cpassword'];
  if($cpassword==$password)
  {   
    $sql1="SELECT * FROM user WHERE username LIKE'$username'";
    $result1=mysqli_query($con,$sql1);
      $p=mysqli_num_rows($result1);
       if($p!=1){
        $sql="INSERT INTO `user` (`sno`, `username`, `password`, `date`) VALUES (NULL, '$username', '$password', current_timestamp())";
      $result=mysqli_query($con,$sql);

      echo "<script>alert('Account Created Successful!');</script>";
      
       header("location:login.php");
       
       }
       else{
        echo "<script>alert('Username Already Exists Use another!');</script>";
       }
  }
  else{
    echo "<script>alert('Password Mismatch!');</script>";
  }

}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Sign_up</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <style>  
        body {    
          font-family: 'Muli', sans-serif;  
        }  
        h1 {  
          color: #fff;  
          padding-bottom: 2rem;  
          font-weight: bold;  
        }  
        a {  
          color: #333;  
        }  
        a:hover {  
          color: #E8D426;  
          text-decoration: none;  
        }  
        .form-control:focus {  
            color: #000;  
            background-color: #fff;  
            border: 2px solid #E8D426;  
            outline: 0;  
            box-shadow: none;  
        }  
        .btn {  
          background: #28a745;  
          border: #E8D426;  
        }  
        .btn:hover {  
          background: #28a745;  
          border: #E8D426;  
        }  
        </style>  
        <body>  
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="\project\home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Sign UP</a>
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
        <div class="pt-5">  
          <h1 class="text-center"> Sign-up HERE! </h1>  
        <div class="container">  
        <div class="row">  
       <div class="col-md-5 mx-auto">  
        <div class="card card-body">  
                              <form id="submitForm" action="signup.php" method="post" data-parsley-validate="" data-parsley-errors-messages-disabled="true" novalidate="" _lpchecked="1">  
        
                           <div class="form-group required">  
                      <label for="username"> Create Username </label>  
                     <input type="text" class="form-control text-lowercase" id="username" required="" name="username" value="">  
                       </div>                      
               <div class="form-group required">  
            <label class="d-flex flex-row align-items-center" for="password"> Create Password
             <!-- <a class="ml-auto border-link small-xl" href="#"> Forget Password? </a>   --></label>
        <input type="password" class="form-control" required="" id="password" name="password" value="">  
               </div>  
             
               <div class="form-group required">  
            <label class="d-flex flex-row align-items-center" for="cpassword"> Confirm Password
             <!-- <a class="ml-auto border-link small-xl" href="#"> Forget Password? </a>   --></label>
        <input type="password" class="form-control" required="" id="cpassword" name="cpassword" value="">  
               </div>
                 <div class="form-group pt-1">  
              <button class="btn btn-primary btn-block" type="submit"> Sign up </button>  
                          </div>  
                       </form>  

                       <p class="small-xl pt-3 text-center">  
               <span class="text-muted"> Already Exists! </span>  
                <a href="\project\login.php"> Login </a>  
                                </p> 
     </div>  
    </div>  
    </div>  
    </div>  
  </body>
</html>