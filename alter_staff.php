<?php 
session_start();
        
//if(!isset($_SESSION['admin_login'])) 
//    header('location:adminlogin.php');   
?>
<?php
include '_inc/dbconn.php';
$name=   $_REQUEST['edit_name'];
$gender=   $_REQUEST['edit_gender'];
$dob=   $_REQUEST['edit_dob'];
$id=   $_SESSION['st_id'];
$uname=   $_REQUEST['edit_uname'];
$pwd=   $_REQUEST['edit_pwd'];
$address=   $_REQUEST['edit_address'];
$mobile=   $_REQUEST['edit_mobile'];
$email=   $_REQUEST['edit_email'];

$sql="UPDATE staff SET  name='$name', gender='$gender', dob='$dob', city='$address',
     username='$uname', password='$pwd',
        mobile='$mobile', email='$email' WHERE staff_id='$id'";
mysqli_query($conn,$sql) or die(mysqli_error($conn));
header('location:admin_hompage.php');
?>