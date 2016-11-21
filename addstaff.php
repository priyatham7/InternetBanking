<?php 
session_start();
        
//if(!isset($_SESSION['admin_login'])) 
//    header('location:adminlogin.php');   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Staff</title>
        <link rel="stylesheet" href="design.css">
		<link href="default.css" rel="stylesheet" type="text/css" media="all" />
		<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
		<link href="lis.css" rel="stylesheet" type="text/css" />    
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
		<link href="style4form.css" rel="stylesheet" type="text/css" media="all" />		
		<link rel="stylesheet" href="newcss.css">
    </head>

<?php include 'finaladmin.php'; ?>
    <!----------start sign_up----------->
		<div class="sign_up">
			<!----------start form----------->
			<form class="sign" action="add_staff.php" method="POST">
				<div class="formtitle" align='center'>Add Staff</div>
				<!----------start top_section----------->
				<!----------end top_section----------->
				<!----------start personal Details----------->
				<!----------start bottom-section----------->
				<div class="bottom-section">
					<!----------start name section----------->
					<div class="section">
						<div class="input-sign details">
							<input type="text" name="staff_name" placeholder="First Name" required/>
						</div>
						<div class="input-sign details1">
							<select>
							<option name="staff_gender" value='M' checked>Male</option>
							<option name="staff_gender" value='F'>Female</option>
							</select>
						</div>
						<div class="clear"> </div>
					</div>
					<!----------start mail section----------->
					<div class="section">
						<div class="input-sign details">
						<span align='left'>DOB</span>
							<input type="date" name="staff_dob" placeholder="Date of Birth" required/> 
						</div>
						<div class="input-sign details1">
							<input type="text" name="staff_address" placeholder="City" required/>
						</div>
						<div class="clear"> </div>
					</div>
					<!----------start city section----------->
					<div class="section">
						<div class="input-sign details">
							<input type="text" name="staff_uname" placeholder="Username" required/> 
						</div>
						<div class="input-sign details1">
							<input type="text" name="staff_pwd" placeholder="Password" required/> 
						</div>
						<div class="clear"> </div>
					</div>
					<!----------start Address section----------->
					<div class="section">
						<div class="input-sign details">
							<input type="text" name="staff_mobile" placeholder="Mobile" required/> 
						</div>
						<div class="input-sign details1">
							<input type="email" name="staff_email" placeholder="Email" required/> 
						</div>
						<div class="clear"> </div>
					</div>
				
					<div class="submit">
						<input class="bluebutton submitbotton" name="add_staff" type="submit" value="Sign up" />
					</div>
				</div>
				<!----------end bottom-section----------->
			</form>
			<!----------end form----------->
		</div>    
                
<?php include 'bodyend.php';?>
    