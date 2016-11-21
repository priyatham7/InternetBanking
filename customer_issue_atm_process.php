<?php 
session_start();
        
if(!isset($_SESSION['customer_login'])) 
    header('location:plogin.php');   
?>
<?php
include '_inc/dbconn.php';
$name=$_SESSION['name'];
$account_no=$_SESSION['login_id'];
$option=$_REQUEST['atm'];

$atm_status=$cheque_book_status="NOT REQUESTED";
if($option=='ATM')
    $atm_status="PENDING";
else
    $cheque_book_status="PENDING";
    

    $sql="SELECT * FROM cheque_book WHERE account_no='$account_no'";
    $result=mysqli_query($conn,$sql);// or die(mysqli_error());
    $rws=mysqli_fetch_array($result);
    $c_status=$rws[1];
    $c_id=$rws[0];
    
    $sql="SELECT * FROM atm WHERE account_no='$account_no'";
    $result=  mysqli_query($conn,$sql);// or die(mysqli_error());
    $rws=  mysqli_fetch_array($result);
    $a_status=$rws[1];
    $a_id=$rws[0];
    
    
    if(($option=='ATM' && (($a_status=='PENDING')||($a_status=='ISSUED'))) || ($option=='CHEQUE' && (($c_status=='PENDING')||($c_status=='ISSUED'))))           
    {

		echo "<script type='text/javascript'>alert('You have already made a request!')</script>";		

        echo '<script>alert("You have already made a request!");';
		echo 'window.location= "customer_issue_atm.php";</script>';
	}
	elseif($option=='ATM'){
		$sql="insert into atm values('$account_no','$atm_status')";
		mysqli_query($conn,$sql);// or die(mysqli_error());

		echo "<script type='text/javascript'>alert('Request succesfull. You will recieve confirmation from branch very soon.')</script>";		
		
		echo '<script>alert("Request succesfull. You will recieve confirmation from branch very soon.");';
		echo 'window.location= "customer_issue_atm.php";</script>';
	}
	else {
		$sql="insert into cheque_book values('$account_no','$cheque_book_status')";
		mysqli_query($conn,$sql);// or die(mysqli_error());

//		echo "<script type='text/javascript'>alert('Request succesfull. You will recieve confirmation from branch very soon.')</script>";		

		
		echo '<script>alert("Request succesfull. You will recieve confirmation from branch very soon.");';
		echo 'window.location= "customer_issue_atm.php";</script>';
	}
	


?>