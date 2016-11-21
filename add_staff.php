<?php 
session_start();
        
//if(!isset($_SESSION['admin_login'])) 
//    header('location:adminlogin.php');   
?>
<?php
include '_inc/dbconn.php';
$name=   $_REQUEST['staff_name'];
$gender=   $_REQUEST['staff_gender'];
echo $gender;
echo $name;
$dob=   $_REQUEST['staff_dob'];
$uname=   $_REQUEST['staff_uname'];
$address=   $_REQUEST['staff_address'];
$mobile=   $_REQUEST['staff_mobile'];
$email=  $_REQUEST['staff_email'];
$password=   $_REQUEST['staff_pwd'];

$sql="insert into staff values('','$name','$gender','$dob','$address','$uname','$password','$mobile'
    ,'$email')";
mysqli_query($conn,$sql) or die("the email-id is already registered");
header('location:admin_hompage.php');
?>