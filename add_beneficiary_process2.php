<?php 
session_start();
        
if(!isset($_SESSION['customer_login'])) 
    header('location:index.php');   
?>
<?php
                $sender_id=$_SESSION["login_id"];
                $sender_name=$_SESSION["name"];  
                $Payee_name=$_REQUEST['bname'];
                $acc_no=$_REQUEST['baccount_no'];
     
                include '_inc/dbconn.php';
				$sql1="select b_name,b_account_no from beneficiary where account_no='$sender_id'";
                $result1=  mysqli_query($conn,$sql1) ;
				$rws=mysqli_fetch_array($result1);
				echo
    ?>          
                  
                