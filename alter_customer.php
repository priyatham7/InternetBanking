<?php 
session_start();
        
//if(!isset($_SESSION['admin_login'])) 
  //  header('location:adminlogin.php');   
?>

<?php
include '_inc/dbconn.php';
$name=   ($_REQUEST['edit_name']);
$pincode=   ($_REQUEST['pincode']);
$dob=   ($_REQUEST['edit_dob']);
$id=   $_SESSION['cu_id'];
$city=   ($_REQUEST['city']);
$hno=   ($_REQUEST['hno']);
$street=   ($_REQUEST['street']);
$mobile=   ($_REQUEST['edit_mobile']);
$email =($_REQUEST['emails']);

$sql="UPDATE customer SET  Customer_name ='$name', Customer_dob ='$dob', Customer_pincode ='$pincode', Customer_city ='$city', 
     Customer_street='$street', 
        Customer_phoneno ='$mobile', Customer_email ='$email',Customer_houseno='$hno'  WHERE Customer_id ='$id'";
mysqli_query($conn,$sql);// or die(mysqli_error());
header('location:admin_hompage.php');
?>