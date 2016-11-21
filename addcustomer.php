<?php 
session_start();
        
//if(!isset($_SESSION['admin_login'])) 
//    header('location:adminlogin.php');   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Customer</title>
        <link rel="stylesheet" href="design.css">
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<link href="lis.css" rel="stylesheet" type="text/css" />    
    	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
		<link href="style4form.css" rel="stylesheet" type="text/css" media="all" />		
	<link rel="stylesheet" href="newcss.css">
    </head>


    <?php include 'finaladmin.php'?>
    
<!----------start sign_up----------->
		<div class="sign_up">
			<!----------start form----------->
			<form class="sign" action="add_customer.php" method="POST">
				<div class="formtitle" align='center'>Add Customer</div>
				<!----------start top_section----------->
				<!----------end top_section----------->
				<!----------start personal Details----------->
				<!----------start bottom-section----------->
				<div class="bottom-section">
					<!----------start name section----------->
					<div class="section">
						<div class="input-sign details">
							<input type="text" name="customer_name" placeholder="First Name" required/>
						</div>
						<div class="input-sign details1">
						    <span>Date Of Birth</span>
							<input type="date" placeholder="Date Of Birth" name="customer_dob" required=""/>
						</div>
						<div class="clear"> </div>
					</div>
					<!----------start mail section----------->
					<div class="section">
						<div class="input-sign details">
						<input type="text" name="hno" placeholder="House-No" required=""/>
						</div>
						<div class="input-sign details1">
						<input type="text" name="street" placeholder="Street"  required=""/>
						</div>
						<div class="clear"> </div>
					</div>
					<!----------start city section----------->
					<div class="section">
						<div class="input-sign details">
                        <input type="text" name="pincode" placeholder="Pincode" required=""/>
						</div>
						<div class="input-sign details1">
                        <input type="text" name="city" placeholder="City" required=""/>
       				</div>
						<div class="clear"> </div>
					</div>
					<!----------start Address section----------->
					<div class="section">
						<div class="input-sign details">
                    <input type="email" name="customer_email" placeholder="Email" required=""/>
						</div>
						<div class="input-sign details1">
						<input type="text" name="customer_mobile" placeholder="Mobile" required=""/>
						</div>
						<div class="clear"> </div>
					</div>
				
					<div class="submit">
						<input class="bluebutton submitbotton" name="add_customer" type="submit" value="Sign up" />
					</div>
				</div>
				<!----------end bottom-section----------->
			</form>
			<!----------end form----------->
		</div> 	
	
	<?php include 'bodyend.php' ?>