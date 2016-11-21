<?php 
session_start();
        
//if(!isset($_SESSION['staff_login'])) 
//    header('location:staff_login.php');   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ATM Approval Requests</title>
        <link rel="stylesheet" href="design.css">
		<link rel="stylesheet" href="css2/style.css">
		<link href="default.css" rel="stylesheet" type="text/css" media="all" />
		<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
		<link href="lis.css" rel="stylesheet" type="text/css" /> 
        <style>
            .displaystaff_content table,th,td {
    padding:6px;
    border: 1px solid #2E4372;
   border-collapse: collapse;
   text-align: center;
}

        </style>
    </head>
        <?php include 'finalstaff.php' ?>
    <h3 style="text-align:center;color:#2E4372;font-size:30px"><u>ATM APPROVAL REQUESTS</u></h3>
	<br><br>
    <?php
include '_inc/dbconn.php';
$sql="SELECT * FROM atm WHERE atm_status='PENDING'";
$result=  mysqli_query($conn,$sql);// or die(mysqli_error());
?>

<form action="staff_atm_approve_process.php" method="POST">
<div class="table-title">
<table class="table-fill" align="center">
                        <th height="50px" class="text-center">id</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Account No.</th>
                        <th class="text-center">Atm Card Status</th>
                        
                        
                        <?php
                        while($rws=  mysqli_fetch_array($result)){
                            echo "<tr><td height='40px'><input type='radio' name='customer_id' value=".$rws[0];
                            echo ' checked';
                            echo " /></td>";
							$sql=" select customer_name from customer where customer_id in (select customer_id from depositor where  account_no='$rws[0]')";
							$r=mysqli_query($conn,$sql);
							$rw= mysqli_fetch_array($r);
							echo "<td>".$rw[0]."</td>";
                            echo "<td>".$rws[0]."</td>";
                            echo "<td>".$rws[1]."</td>";
                            echo "</tr>";
                        } ?>

</table>
</div>
<br><br>
            
         <input type="submit" name="submit_id" onclick="myFunction()" value="APPROVE REQUEST" class="bur" style="height:40px; width:150px; background-color:gray;color:white"; />
                           
               </form>
    <?php include 'bodyend.php'?>