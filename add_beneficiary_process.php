<?php 
session_start();
        
if(!isset($_SESSION['customer_login'])) 
    header('location:plogin.php');   
?>
<?php
                $sender_id=$_SESSION["login_id"];
                $sender_name=$_SESSION["name"];  
                $Payee_name=$_REQUEST['bname'];
                $acc_no=$_REQUEST['baccount_no'];
     
                include '_inc/dbconn.php';
				$sql1="insert into beneficiary(account_no,b_name,b_account_no ) values('$sender_id','$Payee_name','$acc_no')";
                $result1=  mysqli_query($conn,$sql1) ;
            header('location:display_beneficiary.php');   
    ?>          
                  
                