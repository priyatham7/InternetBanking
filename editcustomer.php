<?php 
session_start();
        
//if(!isset($_SESSION['admin_login'])) 
  //  header('location:adminlogin.php');   
?>
<?php
include '_inc/dbconn.php';
$id=   ($_REQUEST['customer_id']);
$_SESSION['cu_id']=$id;
$sql="SELECT * FROM `customer` WHERE Customer_id=$id";
$result=  mysqli_query($conn,$sql) or die(mysqli_error());
$rws=  mysqli_fetch_array($result);
?>
<?php
                        $delete_id=   ($_REQUEST['customer_id']);
                        if(isset($_REQUEST['submit2_id'])){
                            
                            
							$sql2 = "select account_no from depositor where customer_id = '$delete_id'";
							$result = mysqli_query($conn,$sql2);
							$rws = mysqli_fetch_array($result);
							$ac = strval($rws[0]);
							
							$sql2 = "delete from depositor where customer_id = '$delete_id'";
							mysqli_query($conn,$sql2) or die(mysqli_error($conn));
							
							$sql4 = "delete from Login_credentials where customer_id = '$delete_id'";
							mysqli_query($conn,$sql4);
							
							$sql_delete="DELETE FROM `customer` WHERE `Customer_id` = '$delete_id'";
                            
                            mysqli_query($conn,$sql_delete) or die(mysqli_error($conn));
							
							
							
							
							
                            header('location:delete_customer.php');
                        }
                        ?>
<!DOCTYPE HTML>
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
    <?php include 'finaladmin.php'?>

<!----------start sign_up----------->
		<div class="sign_up">
			<!----------start form----------->
			<form class="sign" action="alter_customer.php" method="POST">
				<div class="formtitle" align='center'>Edit Customer Details</div>
				<!----------start top_section----------->
				<!----------end top_section----------->
				<!----------start personal Details----------->
				<!----------start bottom-section----------->
				<div class="bottom-section">
					<!----------start name section----------->
					<div class="section">
						<div class="input-sign details">
							<input type="text" name="edit_name" value="<?php echo $rws[1];?>" required/>
						</div>
						<div class="input-sign details1">
						    <span>Date Of Birth</span>
							<input type="date" name="edit_dob" value="<?php echo $rws[6];?>" required=""/>
						</div>
						<div class="clear"> </div>
					</div>
					<!----------start mail section----------->
					<div class="section">
						<div class="input-sign details">
						<input type="text" name="hno" value="<?php echo $rws[2];?>" required=""/>
						</div>
						<div class="input-sign details1">
						<input type="text" name="street" placeholder="Street" value="<?php echo $rws[3];?>" required=""/>
						</div>
						<div class="clear"> </div>
					</div>
					<!----------start city section----------->
					<div class="section">
						<div class="input-sign details">
                        <input type="text" name="pincode" value="<?php echo $rws[5];?>" required=""/>
						</div>
						<div class="input-sign details1">
                        <input type="text" name="city" value="<?php echo $rws[4];?>"  required=""/>
       				</div>
						<div class="clear"> </div>
					</div>
					<!----------start Address section----------->
					<div class="section">
						<div class="input-sign details">
                    <input type="email" name="emails" value="<?php echo $rws[8];?>" required=""/>
						</div>
						<div class="input-sign details1">
						<input type="text" name="edit_mobile" value="<?php echo $rws[7];?>" required=""/>
						</div>
						<div class="clear"> </div>
					</div>
				
					<div class="submit">
						<input class="bluebutton submitbotton" name="alter_customer" type="submit" value="UPDATE DATA" />
					</div>
				</div>
				<!----------end bottom-section----------->
			</form>
			<!----------end form----------->
		</div> 	
		
           
<?php include 'bodyend.php' ?>
