<?php 
session_start();

        
if(!isset($_SESSION['customer_login'])) 
    header('location:plogin.php');   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Personal Details</title>
        
		<link rel="stylesheet" href="design.css">
		<link href="default.css" rel="stylesheet" type="text/css" media="all" />
		<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
		<link href="lis.css" rel="stylesheet" type="text/css" />  
		<link rel="stylesheet" href="normalize.css">    
        <link rel="stylesheet" href="style4details.css">
		
    </head>
        
        <!--   <div class="customer_top_nav"> 
             <div class="text">Welcome <?php/* echo $_SESSION['name']*/?></div>
            </div>-->
				<?php include 'finalbody.php' ?>
            <?php
                $cust_id=$_SESSION['cust_id'];
                include '_inc/dbconn.php';
                $sql="SELECT customer.customer_name,customer.customer_dob,customer.customer_phoneno,customer.customer_email,
				customer.customer_houseno, account.account_no, branch.branch_name, branch.branch_code, account.account_type,customer.customer_city from customer INNER JOIN depositor on customer.Customer_id=depositor.Customer_id INNER JOIN account on depositor.account_no=account.account_no INNER JOIN branch on account.branch_code=branch.branch_code WHERE customer.Customer_id='$cust_id'  ";
                $result=  mysqli_query($conn,$sql)  or die(mysqli_error($conn));
                $rws=  mysqli_fetch_array($result);
                
                
                $name= $rws[0];
                $account_no= $rws[5];
                $dob=$rws[1];
                $branch=$rws[6];
                $branch_code= $rws[7];                
                $hno=$rws[4];
                $mobile=$rws[2];
                $email=$rws[3];
                $city=$rws[9];                
                $acc_type=$rws[8];
                		
?>         
	
 <div   style="margin-left:100px;"align="left"class="main">
      <div class="one" >
        <div class="register">
          <h3>Personal Details</h3>
          <form id="reg-form">
            <div>
              <label for="name">Name</label>
			   &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <?php echo $name;?>
<sup> <hr style="align:right;margin-left:200px; width:300px;"><sup>  
      </div>
            <div>
              <label for="email">DOB</label>
			  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <?php echo $dob;?>
<sup> <hr style="align:right;margin-left:200px; width:300px;"><sup>        </div>
            <div>
              <label for="username">Mobile No</label>
			  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <?php echo $mobile;?>
<sup> <hr style="align:right;margin-left:200px; width:300px;"><sup>           </div>
            <div>
              <label for="password">Email</label>
			  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <?php echo $email;?>
<sup> <hr style="align:right;margin-left:200px; width:300px;"><sup>        </div>
				<div>
              <label for="password-again">House-No</label>
			  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <?php echo $hno;?>
<sup> <hr style="align:right;margin-left:200px; width:300px;"><sup>         </div>
<div>
              <label for="password-again">City</label>
			  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <?php echo $city;?>
<sup> <hr style="align:right;margin-left:200px; width:300px;"><sup>           </div>
<div>
              <label for="password-again">Account No</label>
			  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <?php echo $account_no;?>
<sup> <hr style="align:right;margin-left:200px; width:300px;"><sup>           </div>
<div>
              <label for="password-again">Branch </label>
			  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <?php echo $branch;?>
<sup> <hr style="align:right;margin-left:200px; width:300px;"><sup>           </div>
<div>
              <label for="password-again">Branch code</label>
			  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <?php echo $branch_code;?>
<sup> <hr style="align:right;margin-left:200px; width:300px;"><sup>           </div>
<div>
              <label for="password-again">Account Type</label>
			  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <?php echo $acc_type;?>
<sup> <hr style="align:right;margin-left:200px; width:300px;"><sup>           </div>



<div>
            </div>

			
          </form>
          
          </div>
        </div>
      </div>
      
	
		<?php include 'bodyend.php' ?>