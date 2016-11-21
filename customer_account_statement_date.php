<?php 
session_start();
        
if(!isset($_SESSION['customer_login'])) 
    header('location:plogin.php');   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Account Statement</title>
        <link rel="stylesheet" href="design.css">
		<link rel="stylesheet" href="css2/style3.css">
		<link rel="stylesheet" href="css2/button.css">
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<link href="lis.css" rel="stylesheet" type="text/css" /> 
        <style>
            .content_customer table,th,td {
    padding:6px;
    border: 1px solid #2E4372;
   border-collapse: collapse;
   text-align: center;
}

        </style>
    </head>
       
				
		<?php include 'finalbody.php' ?>
	
			<br><br><br><br><br>
			<h3 style="text-align:center;color:#2E4372;
	
 color: #7c795d; font-family: 'Trocchi', serif; font-size: 45px; font-weight: normal; line-height: 48px;"><u>Account summary by Date</u></h3>
  
    <br><br>
    <div class="table-title" style="align:center;margin-left:100px;"> 
    <table  class="table-fill" style="">
                        
                        <th>Id</th>
                        <th>Transaction Date</th>
                        <th>Type</th>
                        <th>Amount</th>
                       
                      <!--  <th>Balance Amount</th>-->
                        
                        <?php if(isset($_REQUEST['summary_date'])) {
                         $date1=$_REQUEST['date1'];
                         $date2=$_REQUEST['date2'];
                         
						include '_inc/dbconn.php';
                         $sender_id=$_SESSION["login_id"];
						 $sql="select transaction_id,transaction_type,transaction_amount,transaction_date,account_balance from account inner join transaction_details on account.account_no = transaction_details.account_no where account.account_no='$sender_id' and transaction_date BETWEEN '$date1' AND '$date2'";
                         
                         $result=  mysqli_query($conn,$sql) or die(mysqli_error());
                        while($rws=  mysqli_fetch_array($result)){
                            
                            echo "<tr>";
                            echo "<td>".$rws[0]."</td>";
                            echo "<td>".$rws[3]."</td>";
                            echo "<td>".$rws[1]."</td>";
                            echo "<td>".$rws[2]."</td>";
                            
                         //   echo "<td>".$rws[4]."</td>";
                           
                            echo "</tr>";
                        }
                        } ?>
</table> 
</div>
			
		</div>
	<?php include 'bodyend.php'?>