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
	
			<br><br><br><br>
			<h3 style="text-align:center;color:#2E4372;
			 font-family: 'Trocchi', serif; font-size: 45px; font-weight: normal; line-height: 48px;"><u>Account summary by Date</u></h3>
			
			<br><br><br><br>
			<form style="margin-left:5px;" action="customer_account_statement_date.php" method="POST">
		
		<div class="table-title">
        <table class="table-fill" align="left" style="margin-left:130px;">
            
            <tr><td><span ><h4 >START DATE: </h4></span></td><td><input type='date' name='date1' required style="color:red;width: 15em;  height: 2em;"></td></tr>
  
			<tr><td><span><h4 >END DATE:</h4> </span></td><td><input type='date' name='date2' required style="color:red;width: 15em;  height: 2em;"></td></tr>
            
        </table>
	</div>
	<br><br><br>
		
		<div class="submit">
		<br><br><br>
       <input type="submit" name="summary_date" value="Go" class="bluebutton submitbotton"/>
        </div>
          </form> 
			
		</div>
	<?php include 'bodyend.php' ?>