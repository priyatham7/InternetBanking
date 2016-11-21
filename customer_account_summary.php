<?php 
session_start();
        
if(!isset($_SESSION['customer_login'])) 
    header('location:plogin.php');   
?>
<?php
                $cust_id=$_SESSION['cust_id'];
                include '_inc/dbconn.php';
                $sql=" SELECT customer.customer_name, account.account_no, account.account_balance, account.account_type, branch.branch_code, branch.branch_name from customer INNER JOIN depositor on customer.Customer_id=depositor.Customer_id INNER JOIN account on depositor.account_no=account.account_no INNER JOIN branch on account.branch_code=branch.branch_code WHERE customer.Customer_id='$cust_id'  ";
                $result=  mysqli_query($conn,$sql) or die(mysqli_error($conn));
                $rws=  mysqli_fetch_array($result);
                
				
				$sqlx="SELECT customer_id from borrower where borrower.customer_id='$cust_id'";
				
				$resultx = mysqli_query($conn,$sqlx);
				
				$rwsx = mysqli_fetch_array($resultx);// or die(mysqli_error($conn));
				
				if($rwsx[0]==$cust_id){
			    $sql23="select loan.loan_amount from customer inner join borrower on customer.customer_id=borrower.customer_id inner join loan on loan.loan_no=borrower.loan_no WHERE customer.Customer_id='$cust_id' ";
				$result23 = mysqli_query($conn,$sql23);
				$rws23 = mysqli_fetch_array($result23) or die(mysqli_error($conn));
                
				$loanamount=$rws23[0];
				}
				else{
					$loanamount="no loan";
				}
                
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
	<link href="default.css" rel="stylesheet" type="text/css" media="all" />
	<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
	<link href="lis.css" rel="stylesheet" type="text/css" />     
    	<link rel="stylesheet" href="normalize.css">    
        <link rel="stylesheet" href="style4details.css">
	<meta charset="UTF-8">
    <title>Home - Online Banking</title>
	<link rel="stylesheet" href="design.css">
   </head>
     


<?php include 'finalbody.php' ?>

 <div style="margin-left:100px;" align="left" class="main">
      <div class="one">
        <div class="register">
          <h3>Account Summary</h3>
          <form id="reg-form">
            <div>
              <label for="name">Name</label>
			   &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<?php echo $name;?>
<sup> <hr style="align:right;margin-left:200px; width:300px;"><sup>  
      </div>
            <div>
              <label for="email">Account No</label>
			  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <?php echo $account_no;?>
<sup> <hr style="align:right;margin-left:200px; width:300px;"><sup>        </div>
            <div>
              <label for="username">Branch</label>
			  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <?php echo $brname;?>
<sup> <hr style="align:right;margin-left:200px; width:300px;"><sup>           </div>
            <div>
              <label for="password">Branch Code</label>
			  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <?php echo $brcode;?>
<sup> <hr style="align:right;margin-left:200px; width:300px;"><sup>        </div>
				<div>
              <label for="password-again">Balance</label>
			  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <?php echo $accbal;?>
<sup> <hr style="align:right;margin-left:200px; width:300px;"><sup>         </div>
<div>
              <label for="password-again">Account Type</label>
			  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <?php echo $acctype;?>
<sup> <hr style="align:right;margin-left:200px; width:300px;"><sup>           </div>
<div>
              <label for="password-again">Loan Amount</label>
			  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <?php echo $loanamount;?>
<sup> <hr style="align:right;margin-left:200px; width:300px;"><sup>           
            </div>

			
          </form>
          
          </div>
        </div>
      </div>
		

<?php include 'bodyend.php' ?>