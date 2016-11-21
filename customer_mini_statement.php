<?php 
session_start();
        
if(!isset($_SESSION['customer_login'])) 
    header('location:plogin.php');   
?>

<html>
<head>
<link rel="stylesheet" href="design.css">
<link rel="stylesheet" href="css2/style.css">

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

<div  class="table-title" style="margin-left:80px;margin-top:20px;width:850px;height:700px;">
<table  class="table-fill"  margin-left="100px" >
                        
                        <th  height="70px"class="text-left" >Sno</th>
                        <th width="120px"  class="text-left">Type</th>
                        <th width="200px" class="text-left">Date</th>
                        <th  class="text-left">Amount</th>
                        <th  class="text-left">Tranfered</th>
                        <th class="text-left">Trans_ID</th>
						<?php    include '_inc/dbconn.php';
						$sender_id=$_SESSION["login_id"];
						$sql="SELECT * FROM transaction_details where account_no='$sender_id' or f_account_no='$sender_id' LIMIT 10";
					//	$sqld="SELECT * FROM transaction_details where f_account_no='$sender_id'";		
						$result=  mysqli_query($conn,$sql) or die(mysqli_error()); 
						?>

   
    <h3 style="text-align:center;color:#2E4372;"><u>Last 10 Transactions</u></h3>
	<br>
                        <?php
						$t=1;
                        while($rws=  mysqli_fetch_array($result)){
                             
                            echo "<tr>";
                            echo "<td height='50px' class='text-left' >".$t++."</td>";
							if($rws[5]==$sender_id)
                            echo "<td  class='text-left' > withdrawl </td>";
							else
                            echo "<td  class='text-left' > Deposit </td>";
                            echo "<td  class='text-left' >".$rws[3]."</td>";
                            echo "<td  class='text-left' >".$rws[2]."</td>";
							if($rws[6]==$sender_id)
								echo "<td  class='text-left'>".$rws[5]."</td>";
							else
								echo  "<td  class='text-left'>".$rws[6]."</td>";
                            echo "<td  class='text-left'>".$rws[0]."</td>";
                           
                            echo "</tr>";
                        } ?>
                        
                        
</table>
</div>
<?php include 'bodyend.php' ?>
