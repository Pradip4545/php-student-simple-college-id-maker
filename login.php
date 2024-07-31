
<!doctype html>
<html lang="en">
  <head>
    <title>login</title>
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
        <a class="nav-link" href="\project\signup.php">Sign UP</a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link " href="\project\login.php">Login</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link " href="\project\logout.php">Log-out</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

  </div>
</nav>
<style>  
        body {  
          background: #28a745 !important;  
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
  
        <?php
 include "connect.php"; 
 if($_SERVER['REQUEST_METHOD']=='POST')
 {
   $username=$_POST['username'];
   $password=$_POST['password'];
   $sql1="SELECT * FROM user WHERE username LIKE'$username'";
    $result1=mysqli_query($con,$sql1);
      $p=mysqli_num_rows($result1);
   if($p==1){
    session_start();
    $_SESSION['username']=$username;

   header("location:\project\studhome.php");
    }
   else{
    echo "<script>alert('Login Failed');</script>";
    }
 }
?>
        <div class="pt-5">  
          <h1 class="text-center">Login HERE! </h1>  
        <div class="container">  
                        <div class="row">  
                            <div class="col-md-5 mx-auto">  
                                <div class="card card-body">  
                              <form id="submitForm" action="#" method="post" data-parsley-validate="" data-parsley-errors-messages-disabled="true" novalidate="" _lpchecked="1">  
        <input type="hidden" name="_csrf" value="7635eb83-1f95-4b32-8788-abec2724a9a4">  
                           <div class="form-group required">  
                      <lSabel for="username">Enter Username</lSabel>  
                     <input type="text" class="form-control text-lowercase" id="username" required="" name="username" value="">  
                       </div>                      
               <div class="form-group required">  
            <label class="d-flex flex-row align-items-center" for="password"> Enter your Password   
             <!-- <a class="ml-auto border-link small-xl" href="#"> Forget Password? </a> </label>   --></label> 
        <input type="password" class="form-control" required="" id="password" name="password" value="">  
               </div>  
             
                 <div class="form-group pt-1">  
              <button class="btn btn-primary btn-block" type="submit"> Log In </button>  
                          </div>  
                       </form>  
                     <p class="small-xl pt-3 text-center">  
               <span class="text-muted"> Not a member? </span>  
                <a href="\project\signup.php"> Sign up </a>  
                                </p>  
                                </div>  
                            </div>  
                        </div>  
                    </div>  
        </div>  
       

            
  </body>
</html>