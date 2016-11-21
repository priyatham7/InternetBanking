<?php 
session_start();      
if(!isset($_SESSION['customer_login'])) 
    header('location:plogin.php');   
?>
<html>
<head>

    <link rel="stylesheet" href="design.css">
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<link href="lis.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css2/style.css">
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
<h1 style="text-align:center;color:#2E4372;
			 font-family: 'Trocchi', serif; font-size: 45px; font-weight: normal; line-height: 48px;"><u>Added Beneficiaries</u></h1>
<br><br><br>
<div style="margin-left:150px;margin-top:10px;align:center;border:;width:500px;height:300px;">

<?php   include '_inc/dbconn.php';

$sender_id=$_SESSION["login_id"]; /* account no */
 ?>
 <?php $sender_id=$_SESSION["login_id"];
               
                
     
			
                include '_inc/dbconn.php';
				$sql1="select b_name,b_account_no from beneficiary where account_no='$sender_id'";
                $result1=  mysqli_query($conn,$sql1) ;
				echo "<div class='table-title' align='center'>";
				echo "<table   class='table-fill'>";
				echo "<th height='30px''class='text-left' style= 'height: 30px;width:150px;'>NAME</th><th class='text-left' style= 'height: 50px;width:150px;'>ACCOUNT_NO</th>";
				while($row = mysqli_fetch_array($result1)) {
					echo "<tr ><td height='35px' class='text-left'  em='10'>". $row[0]. " </td><td class='text-left' >" . $row[1]."</td>". "</tr>";
					}
				echo "</table> </div>";?>
</div>
<?php include 'bodyend.php' ?>