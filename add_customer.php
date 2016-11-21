<?php 
session_start();
        
//if(!isset($_SESSION['admin_login'])) 
 //   header('location:adminlogin.php');   
?>
    <?php
include '_inc/dbconn.php';
$name=   ($_REQUEST['customer_name']);

$dob=   ($_REQUEST['customer_dob']);

$hno=   ($_REQUEST['hno']);
$pincode=   ($_REQUEST['pincode']);
$street=   ($_REQUEST['street']);
$mobile=   ($_REQUEST['customer_mobile']);
$email=  ($_REQUEST['customer_email']);


$city=   ($_REQUEST['city']);




$sql3="SELECT MAX(Customer_id) from customer";
$result=mysqli_query($conn,$sql3);/* or die(mysqli_error($sql3));*/
$rws=  mysqli_fetch_array($result);
$id=$rws[0]+1;


$sql="insert into customer values('$id','$name','$hno','$street','$city','$pincode','$dob','$mobile','$email')";
mysqli_query($conn,$sql) or die("Email already exists!");

$sql5 = "select max(account_no)+1 from account";
$result = mysqli_query($conn,$sql5);
$rws2 = mysqli_fetch_array($result);
$acc = strval($rws2[0]);
$sql4 = "insert into account values('$acc','1000','IB20002','savings')";
mysqli_query($conn,$sql4);

$sql6 = "insert into depositor values('$id','$acc')";
mysqli_query($conn,$sql6);

header('location:admin_hompage.php');
?>