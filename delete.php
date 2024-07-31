<?php 
$con=mysqli_connect("localhost","root","","student");
if (isset($_GET['rollno']))
{
    $rollno=$_GET['rollno'];
    $p="SELECT * FROM `studentinfo` WHERE `rollno` LIKE '$rollno' ";
    $result=mysqli_query($con,$p);
    $sno=mysqli_fetch_assoc($result);
     $s= $sno['rollno'];
    $del="DELETE FROM studentinfo WHERE `studentinfo`.`rollno` ='$s'";
    mysqli_query($con,$del);
}
include("studentlist.php");
?>