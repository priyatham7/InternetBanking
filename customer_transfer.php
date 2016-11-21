<?php 
session_start();
        
if(!isset($_SESSION['customer_login'])) 
    header('location:plogin.php');   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Transfer Funds</title>
     <link rel="stylesheet" href="design.css">
	 <link rel="stylesheet" href="css2/button.css">
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
.content_customer td{
    padding:10px;
}
.head{
    
  text-align:center;
    color:#2E4372;
    font-weight:bold;
}

        </style>
    </head>
       
				
		<?php include 'finalbody.php' ?>
	<br><br><br>
	
	<h1><u><span style="text-align:center;color:#2E4372;
			 font-family: 'Trocchi', serif; font-size: 45px; font-weight: normal; line-height: 48px;">Transfer Funds</span></u></h1>
			
			<?php
                    include '_inc/dbconn.php';
        $sender_id=$_SESSION['login_id'];
       
        
        $sql="SELECT * FROM beneficiary WHERE account_no='$sender_id' ";
        $result=  mysqli_query($conn,$sql);
        $rws= mysqli_fetch_array($result) or die(mysqli_error($conn));
        
		
        $s_id=$rws[2];              
        ?>
        <br><br><br>
    
        <?php       
        if($sender_id==$s_id)    
        {
        echo "<form  action='customer_transfer_process.php' method='POST'>";
        echo "<table class='table-fill' style='height:200px;width:700px;margin-left:100px;' align='center'>";
        echo "<tr><td 'class='text-left' >Select Beneficiary:</td><td> <select name='transfer'style='width:150px; height:30px;'>" ; 
        
        $sql1="SELECT * FROM beneficiary WHERE account_no='$sender_id' ";
        $result=  mysqli_query($conn,$sql);
                
        while($rws=mysqli_fetch_array($result)) {
        echo "<option value='$rws[0]'>$rws[1]</option>";
        }
      
        echo "</td></tr></select>";
         
        echo "<tr><td 'class='text-left' >Enter Amount: </td><td><input type='number'style='width:150px; height:30px;' name='t_val' required></td></table>";
        
        echo "<br><br><br>
		
		<input type='submit' name='submitBtn' value='Transfer' class='bluebutton submitbotton'></form>"; 
        }
        else{
            echo "<br><br><div class='head'><h3>No Benefeciary Added with your account.</h3></div>";
        }
        ?> 
			
			
		</div>
	
	<?php include 'bodyend.php' ?>