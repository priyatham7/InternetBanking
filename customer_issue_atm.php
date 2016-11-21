<?php 
session_start();
        
if(!isset($_SESSION['customer_login'])) 
    header('location:plogin.php');   
?>

<!DOCTYPE html>
<html>
    <head>
	     
        <meta charset="UTF-8">
        <title>Home - Online Banking</title>
    <link rel="stylesheet" href="design.css">
	<link rel="stylesheet" href="css2/style3.css">
		<link rel="stylesheet" href="css2/button.css">
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<link href="lis.css" rel="stylesheet" type="text/css" /> 
    </head>
       
				
		<?php include 'finalbody.php' ?>
	
	
			 
			<h1 style="padding-top:50px;padding-left:30px; color:rgb(44, 98, 66); 
			 font-size: 40px; font-family: 'Signika', sans-serif; padding-bottom: 10px;"><u>ATM And Cheque Book Request</u></h1>

			<br><br>
			<div align="center" style="">
			
			
			<?php 
			include '_inc/dbconn.php';
			$sender_id=$_SESSION["login_id"];
        
			$sql="SELECT * FROM cheque_book WHERE account_no='$sender_id'";
			$result=mysqli_query($conn,$sql);// or die(mysqli_error());
			$rws=mysqli_fetch_array($result);
			$c_status=$rws[1];
			$c_id=$rws[0];
			
			$sql="SELECT * FROM atm WHERE account_no='$sender_id'";
			$result=mysqli_query($conn,$sql);// or die(mysqli_error());
			$rws=mysqli_fetch_array($result);
			$atm_status=$rws[1];
			$a_id=$rws[0];
        
			if(($a_id==$sender_id) || ($c_id==$sender_id))
			{
            
			echo "<table class='table-fill' align='center' border='1px solid' style='border-collapse:seperate; padding:5px;'>";
			echo "<th style='padding:5px;'>Requests</th><th style='padding:5px;'>Status</th>";
			echo "<tr><td style='padding:5px;'>ATM Card Status: </td><td style='padding:5px;'>$atm_status</td></tr>";
			echo "<tr><td style='padding:5px;'>Cheque Book Status: </td><td style='padding:5px;'>$c_status</td></tr>";
            echo "</table>"; 
			}
			?>
			
			<br><br><br>
			<form action="customer_issue_atm_process.php" method="POST">
			
			<table  border="0px solid" style="border-collapse:seperate; padding:5px;" >
			<tbody>
			<tr>
			
			<td >Issue: <select name="atm" style="width:100px;height:30px;">
			<option value="ATM" selected="">ATM</option>
			<option value="CHEQUE">Cheque Book</option>
			</select>
			</td>
			</tr>
			</tbody>
			</table>
			<div class="submit" style="padding-top:50px; padding-left:2px ">
					<input type="submit" name="submitBtn" value="Request" class="bluebutton submitbotton"/>
			</div>
			<div style="padding-top:60px; padding-left:2px">
			</form>
		
			
			</div>		
			
					
					
<?php include 'bodyend.php' ?>
			    