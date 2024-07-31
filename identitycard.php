<?php
  if(isset($_GET['rollno'])) 
  {
    include("connect.php");
    $rollno=$_GET['rollno'];
    $p="SELECT * FROM `studentinfo` WHERE `rollno` LIKE '$rollno' ";
    $result=mysqli_query($con,$p);
    $data=mysqli_fetch_assoc($result);
    global $r,$n,$c,$d,$m,$i;
    $r=$data['rollno'];
    $n=$data['name'];
    $d=$data['div'];
    $c=$data['class'];
    $m=$data['mobile_no'];
    $i=$data['img'];
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
        }
.container{
    
    margin-top:100px;
}
        .card{
            box-shadow: 0 8px 8px 10px rgba(87, 84, 84, 0.4);
            max-width: 250px;
            padding: 10px;
            margin: auto;
            text-align: center;
        }
        #info{
            background-color:yellow;
            border: 2px solid black;
             border-radius: 5px;
        
        }

        .avatar {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            font-size: 100px;
            margin-left:47px;
           padding-bottom:10px;
        }

        .designation {
            font-size: 18px;
        }

        .social {
            margin: 20px 0;
        }
        #sh{
            font-size:10px;
        }
        #she{
            font-size:11px;
        }
        #sign1{
            font-size:10px;
            border: 2px solid black;
             border-radius: 5px;
        }
        #sign2{
            font-size:10px;
            border: 2px solid black;
             border-radius: 5px;
        }

        a {
            font-size: 26px;
            padding: 7px 12px;
            text-decoration: none;
            background-color: #404040;
            color: white;
            border-radius: 10px;
        }

        a:hover {
            background-color: #0a0b0b;
        }
    </style>
</head>
  <body>
 <div class="container my-20">
    <div class="card">
         <div class="container my-1" id="info">
            <div class="text-primary" id="sh">Shree Vithal Education & Research Instituete</div>
              <div class="row">
              <div class="col"><img src="sveri1.jpg" class="img-circle" alt="Student Image"  width ="50px" height="50px"></div>
         <div class="col text-left text-danger" id="she"><div class="row">College of Engineering </div><div class="row">Pandharpur </div></div>
              </div>
          </div>
        <div class=" avatar">
        <img src="<?php echo 'img/'.$i; ?>" class="img-circle" alt="Student Image" width ="110px" height=" 120px">

        </div>
        <div class="container my-4">
        <div class="row">
              <div class="col text-center text-danger">  <h6>Student I-Card</h6></div>
              </div>
            <div class="row">
              <div class="col text-left text-danger">  <h6>Student name:<?php echo $n;?></h6></div>
              </div>
         <div class="row">
         <div class="col text-left text-danger"><h6>Class:<?php echo $c;?></h6></div>
         <div class="col text-left text-danger"><h6>Div:<?php echo $d;?></h6> </div>
        </div>
        <div class="row">
         <div class="col text-left text-danger"><h6>Rollno:<?php echo $r;?></h6> </div>
        </div>
        <div class="row">
              <div class="col text-left text-danger">  <h6>Mobile No:<?php echo $m;?></h6></div>
              </div>
    
        </div>
        <div class="container my-1">
            <div class="row" >
            <div class="col text-center text-primary" id="sign1">Student Sign</div>
            <div class="col text-center text-primary" id="sign2">Principle Sign</div>
            </div>
        </div>
    </div>  
</div>
     </body>
</html>