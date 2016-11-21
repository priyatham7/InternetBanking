<?php 
session_start();
        
if(!isset($_SESSION['customer_login'])) 
    header('location:plogin.php');   
?>
<?php
     $t_amount=$_REQUEST['t_val'];
     $sender_id=$_SESSION["login_id"];
     $reciever_id=$_REQUEST['transfer'];

	include '_inc/dbconn.php';
    $date=date("Y-m-d");
	$time = date("h:i:s");
    $sql = "select * from account where account_no='$sender_id' ";
	$result=mysqli_query($conn,$sql);
	$rws= mysqli_fetch_array($result);
	$s_amount=$rws[1];
    $s_total=$s_amount-$t_amount; //sender's final balance.
	
	$sql = "select * from account where account_no='$reciever_id' ";
	$result=mysqli_query($conn,$sql);
	$rws= mysqli_fetch_array($result);
	$r_amount=$rws[1];
    
    if($s_amount<=500)
    {
        echo '<script>alert("Your account balance is less than Rs. 500.\n\nYou must maintain a minimum balance of Rs. 500 in order to proceed with the transfer.");';
        echo 'window.location= "customer_transfer.php";</script>';
    }
    elseif($t_amount<100){
         echo '<script>alert("You cannot transfer less than Rs. 100");';
        echo 'window.location= "customer_transfer.php";</script>';
    }
    elseif($s_total<500)
    {
        echo '<script>alert("You do not have enough balance in your account to proceed this transfer.\n\nYou must maintain a minimum of Rs. 500 in your account.");';
        echo 'window.location= "customer_transfer.php";</script>';
    }
    
    else{ 
        //insert statement into reciever passbook.
        $r_total=$r_amount+$t_amount;
		 $s_total=$s_amount-$t_amount;
		
		$sql3 = "insert into transaction_details (transaction_type,transaction_amount,transaction_date,transaction_time,account_no,f_account_no) values('withdrawl','$t_amount','$date','$time','$sender_id','$reciever_id')";
		 mysqli_query($conn,$sql3);// or die(mysqli_connect_error());
		 
		/* $sql4 = "insert into transaction_details (transaction_type,transaction_amount,transaction_date,transaction_time,account_no,f_account_no) values('deposit','$t_amount','$date','$time','$reciever_id','$sender_id')";
		 mysqli_query($conn,$sql4);// or die(mysqli_connect_error());*/
		
		$sql1 = "update account set account_balance='$r_total' where account_no='$reciever_id'";
		 mysqli_query($conn,$sql1);// or die(mysqli_connect_error());
        //insert statement into sender passbook.
       
		
		 
		 $sql2 = "update account set account_balance='$s_total' where account_no='$sender_id'";
		 mysqli_query($conn,$sql2);// or die(mysqli_connect_error());
        
		
		
        echo '<script>alert("Transfer Successful.");';
        echo 'window.location= "customer_transfer.php";</script>';
    }
?>