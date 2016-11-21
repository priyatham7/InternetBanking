<?php 
session_start();
        
//if(!isset($_SESSION['admin_login'])) 
//    header('location:adminlogin.php');   
?>
<!DOCTYPE html>
<?php
include '_inc/dbconn.php';
$id= $_REQUEST['staff_id'];
$_SESSION['st_id']=$id;
echo $id;
$sql="SELECT * FROM staff WHERE staff_id=$id";
$result=  mysqli_query($conn,$sql) or die(mysqli_error($conn));
$rws=  mysqli_fetch_array($result);
?>
<?php
                        $delete_id=  $_REQUEST['staff_id'];
                        if(isset($_REQUEST['submit2_id'])){
                            $sql_delete="DELETE FROM staff WHERE staff_id = '$delete_id'";
                            mysqli_query($conn,$sql_delete) or die(mysqli_error($conn));
                            header('location:delete_staff.php');
                        }
                        ?>
<html>
    <head>
	<link rel="stylesheet" href="design.css">
		<link href="default.css" rel="stylesheet" type="text/css" media="all" />
		<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
		<link href="lis.css" rel="stylesheet" type="text/css" />    
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
		<link href="style4form.css" rel="stylesheet" type="text/css" media="all" />		
		<title>staff editing</title>
    </head>
    <?php include 'finaladmin.php'; ?>

<!----------start sign_up----------->
		<div class="sign_up">
			<!----------start form----------->
			<form class="sign" action="alter_staff.php" method="POST">
				<div class="formtitle" align='center'>Edit Staff Details</div>
				<!----------start top_section----------->
				<!----------end top_section----------->
				<!----------start personal Details----------->
				<!----------start bottom-section----------->
				<div class="bottom-section">
					<!----------start name section----------->
					<div class="section">
						<div class="input-sign details">
							<input type="text" name="edit_name" placeholder="Name" value="<?php echo $rws[1];?>" required/>
						</div>
						<div class="input-sign details1">
							<select>
							<option name="edit_gender" value="Male" <?php if($rws[2]=="M") echo "checked";?>>Male</option>
							<option name="edit_gender" value="Female" <?php if($rws[2]=="M") echo "checked";?>>Female</option>
							</select>
						</div>
						<div class="clear"> </div>
					</div>
					<!----------start mail section----------->
					<div class="section">
						<div class="input-sign details">
						<span align='left'>DOB</span>
							<input type="date" name="edit_dob"  value="<?php echo $rws[3];?>" required/> 
						</div>
						<div class="input-sign details1">
							<input type="text" name="edit_address" placeholder="Address" value="<?php echo $rws[4];?>" required/>
						</div>
						<div class="clear"> </div>
					</div>
					<!----------start city section----------->
					<div class="section">
						<div class="input-sign details">
							<input type="text" name="edit_uname" placeholder="Username" value="<?php echo $rws[5];?>" required/> 
						</div>
						<div class="input-sign details1">
							<input type="text" name="edit_pwd" placeholder="Password" value="<?php echo $rws[6];?>" required/> 
						</div>
						<div class="clear"> </div>
					</div>
					<!----------start Address section----------->
					<div class="section">
						<div class="input-sign details">
							<input type="text" name="edit_mobile" placeholder="Mobile no" value="<?php echo $rws[7];?>" required/> 
						</div>
						<div class="input-sign details1">
							<input type="email" name="edit_email" placeholder="Email" value="<?php echo $rws[8];?>" required/> 
						</div>
						<div class="clear"> </div>
					</div>
				
					<div class="submit">
						<input class="bluebutton submitbotton" name="alter" type="submit" value="UPDATE DATA" />
					</div>
				</div>
				<!----------end bottom-section----------->
			</form>
			<!----------end form----------->
		</div> 	
                
   <?php include 'bodyend.php' ?>