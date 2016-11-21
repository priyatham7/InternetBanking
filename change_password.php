<?php 
session_start();
include '_inc/dbconn.php';
        
//if(!isset($_SESSION['admin_login'])) 
//    header('location:adminlogin.php');   
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
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
<link href="css2/style4form.css" rel="stylesheet" type="text/css" media="all" />

        <title>Change Password</title>
        <link rel="stylesheet" href="design.css">
		<link href="default.css" rel="stylesheet" type="text/css" media="all" />
		<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
		<link href="lis.css" rel="stylesheet" type="text/css" /> 
    </head>
        <?php include 'finaladmin.php' ?>
		
					<div class="sign_up">
			
			<form class="sign" action="" method="post">
				<div class="formtitle" align='center'>Change Credentials</div>
				
				<div class="bottom-section">
					
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
		
               </div>
            </div>
            <?php
            if(isset($_REQUEST['change_password'])){
            $sql="SELECT * FROM admin WHERE admin_id='1'";
            $result=mysqli_query($conn,$sql);
            $rws=  mysqli_fetch_array($result);
            $old=  ($_REQUEST['old_password']);
            $new=  ($_REQUEST['new_password']);
            $again= ($_REQUEST['again_password']);
            if($rws[8]==$old && $new==$again){
                $sql1="UPDATE admin SET admin_password='$new' WHERE admin_id='1'";
                mysqli_query($conn,$sql1);// or die(mysqli_error());
                header('location:admin_hompage.php');
            }
            else{
                
                header('location:change_password.php');
            }
            }
            ?>
            
        <?php include 'bodyend.php';?>