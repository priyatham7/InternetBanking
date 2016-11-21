<?php 
session_start();      
if(!isset($_SESSION['customer_login'])) 
    header('location:plogin.php');   
?>
<html>
<head>
<link rel="stylesheet" href="design.css">
<link rel="stylesheet" href="normalize.css"> 
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
<br><br><br>
<br><br>
<h3 style="text-align:left;margin-left:270px;
 color: #7c795d; font-family: 'Trocchi', serif; font-size: 45px; font-weight: normal; line-height: 48px;"><u>Add Beneficiary</u></h3>
<div style="margin-left:50px;margin-top:20px;align:center;width:500px;height:300px;">

<?php   include '_inc/dbconn.php';
$sender_id=$_SESSION["login_id"]; /* account no */
 ?>

    <div class="one">
   <form action='add_beneficiary_process.php' method='post'>
        
        
		<br>
	<div class="table-title">
        <table class="table-fill" align="left" style="margin-left:130px;">
            
            <tr><td><span ><h4 >Payee Name: </h4></span></td><td><input type='text' name='bname' required style="color:red;width: 15em;  height: 2em;"></td></tr>
  
			<tr><td><span><h4 >Account No:</h4> </span></td><td><input type='text' name='baccount_no' required style="color:red;width: 15em;  height: 2em;"></td></tr>
            
        </table>
	</div>
		<br><br><br><br><br><br><br><br><br>
        <input type="submit" class="bluebutton submitbotton" value="Add Beneficiary" style="width: 10em;  height: 2em;margin-left:250px">
        </form>
       </div>                 
            
</div>

<?php include 'bodyend.php'?>