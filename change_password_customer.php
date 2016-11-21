<?php 
session_start();
        
if(!isset($_SESSION['customer_login'])) 
    header('location:plogin.php');   
?>
<?php
                $cust_id=$_SESSION['cust_id'];
                include '_inc/dbconn.php';
                $sql=" SELECT customer.customer_name, account.account_no, account.account_balance, account.account_type, branch.branch_code, branch.branch_name from customer INNER JOIN depositor on customer.Customer_id=depositor.Customer_id INNER JOIN account on depositor.account_no=account.account_no INNER JOIN branch on account.branch_code=branch.branch_code WHERE customer.Customer_id='$cust_id'  ";
                $result=  mysqli_query($conn,$sql) or die(mysqli_error());
                $rws=  mysqli_fetch_array($result);
                
                
                $name= $rws[0];
                $account_no=$rws[1];
                $accbal= $rws[2];
                $acctype= $rws[3];
                $brcode=$rws[4];
                $brname=$rws[5];
                
                $_SESSION['login_id']=$account_no;
                $_SESSION['name']=$name;
                ?>

<!DOCTYPE html>
<html>
    <head>
	     
		 <style>
	input[type="text"], input[type="password"]
{
    width: 500px;
	height:30px;
	padding: 11.5px 11px;
	border: 1px solid #FFF;
	line-height: 18px;
	color: #e20000;
	width: 100%;
	margin: 0;
	outline: none;
	font-family: 'Open Sans', sans-serif;
	font-size: 0.9em;
	font-weight: 600;
	color:#747474;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	transition: all 0.3s;
}

input[type="password"]:hover
{
	color:#f2871e;
	border: 1.5px solid #ffd0a1;
}
</style>
		 
        <meta charset="UTF-8">
        <title>Home - Online Banking</title>
    <link rel="stylesheet" href="design.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
<link href="css2/style4form.css" rel="stylesheet" type="text/css" media="all" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<link href="lis.css" rel="stylesheet" type="text/css" /> 
    </head>
       
				
		<?php include 'finalbody.php' ?>
			
			
			
			<div >
			<div class="sign_up">
			
			<form class="sign" action="" method="post">
				<div class="formtitle" align='center'>Change Credentials</div>
				
				<div class="bottom-section">
					<div class="title"> Details</div>
					
					<div class="section">
						<div class="input-sign details">
							<input type="password" name="old_password"  placeholder="Old Password" required/>
						</div>
						
						<div class="clear"> </div>
					</div>
					
					<div class="section">
						<div class="input-sign details">
							<input type="password" name="new_password" placeholder="New Password" required/> 
						</div>
						
						<div class="clear"> </div>
					</div>
					
					<div class="section">
						<div class="input-sign details">
							<input type="Password" name="again_password" placeholder="Confirm Password" required/> 
						</div>
						
						<div class="clear"> </div>
					</div>
				
					<div class="submit">
						<input class="bluebutton submitbotton" type="submit" name="change_password"  value="Confirm" />
					</div>
				</div>
				
			</form>
			
		</div>
					<?php
            $change=$_SESSION['login_id'];
            $cust_id=$_SESSION['cust_id'];

            if(isset($_REQUEST['change_password'])){
            $sql="SELECT password FROM login_credentials WHERE Customer_id='$cust_id'";
            $result=mysqli_query($conn,$sql);
            $rws=  mysqli_fetch_array($result);
            
            $old=  $_REQUEST['old_password'];
            $new=  $_REQUEST['new_password'];
            $again=$_REQUEST['again_password'];
            
            if($rws[0]==$old && $new==$again){
                $sql1="UPDATE login_credentials SET password='$new' WHERE Customer_id='$cust_id'";
                mysqli_query($conn,$sql1);// or die(mysqli_error());
                header('location:customer_account_summary.php');
            }
            else{
                
                header('location:customer_personal_details.php');
            }
            }
            ?>		
					
					
			</div>
		<?php include 'bodyend.php'?>