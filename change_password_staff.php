<?php 
session_start();
include '_inc/dbconn.php';
        
//if(!isset($_SESSION['staff_login'])) 
//    header('location:staff_login.php');   
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Change Password</title>
        <style>
            .displaystaff_content table,th,td {
    padding:6px;
    border: 1px solid #2E4372;
   border-collapse: collapse;
   text-align: center;
}

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
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
<link href="css2/style4form.css" rel="stylesheet" type="text/css" media="all" />
		<link rel="stylesheet" href="design.css">
		<link href="default.css" rel="stylesheet" type="text/css" media="all" />
		<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
		<link href="lis.css" rel="stylesheet" type="text/css" /> 
    </head>
        <?php include 'finalstaff.php' ?>
                
            <div class="sign_up">
			
			<form class="sign" action="" method="post">
				<div class="formtitle" align='center'>Change Password</div>
				
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

            <?php
            $user=$_SESSION['login_id'];
            if(isset($_REQUEST['change_password'])){
            $sql="SELECT * FROM staff WHERE username='$user'";
            $result=mysqli_query($conn,$sql);
            $rws=  mysqli_fetch_array($result);
            $old=  ($_REQUEST['old_password']);
            $new=  ($_REQUEST['new_password']);
            $again=  ($_REQUEST['again_password']);
            if($rws[6]==$old && $new==$again){
                $sql1="UPDATE staff SET password='$new' WHERE username='$user'";
                mysqli_query($conn,$sql1) or die(mysqli_error($conn));
                header('location:staff_hompage.php');
            }
            else{
                /*RASHID give the pop up window about something went wrong try again*/
                header('location:change_password_staff.php');
            }
            }
            ?>
            
        
        <?php include 'bodyend.php';?>