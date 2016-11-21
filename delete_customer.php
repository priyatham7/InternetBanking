<?php 
session_start();
        
//if(!isset($_SESSION['admin_login'])) 
 //   header('location:adminlogin.php');   
?>
<!DOCTYPE html>
<?php
include '_inc/dbconn.php';
$sql="SELECT * FROM `customer`";
$result=  mysqli_query($conn,$sql) or die(mysqli_error());
$sql_min="SELECT MIN(Customer_id) from customer";
$result_min=  mysqli_query($conn,$sql_min);
$rws_min=  mysqli_fetch_array($result_min);
?>
<html>
    <head>
	<link rel="stylesheet" href="design.css">
	<link rel="stylesheet" href="css2/style3.css">
		<link rel="stylesheet" href="css2/button.css">
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<link href="lis.css" rel="stylesheet" type="text/css" />    
        <link rel="stylesheet" type="text/css" href="newcss.css"/>
        <style>
            .displaystaff_content table,th,td {
    padding:6px;
    border: 1px solid #2E4372;
   border-collapse: collapse;
}

        </style>
        <title>Delete Customer</title>
    </head>
   
        
                
                    <?php include 'finaladmin.php'?>
                <form action="editcustomer.php" method="POST">
            <div class="table-title">
                    <table class="table-fill" align="center">
                        <th>id</th>
                        <th>name</th>
                        <th>HNO</th>
                        <th>Street</th>
                        <th>City</th>
                        <th>Pincode</th>
                        <th>DOB</th>
                        <th>mobile</th>
                        <th>email</th>
                        <?php
                        while($rws=  mysqli_fetch_array($result)){
                            echo "<tr><td><input type='radio' name='customer_id' value=".$rws[0];
                            if($rws[0]==$rws_min[0]) echo' checked';
                            echo " /></td>";
                            echo "<td>".$rws[1]."</td>";
                            echo "<td>".$rws[2]."</td>";
                            echo "<td>".$rws[3]."</td>";
                            echo "<td>".$rws[4]."</td>";
                            echo "<td>".$rws[5]."</td>";
                            echo "<td>".$rws[6]."</td>";
                            echo "<td>".$rws[7]."</td>";
                            echo "<td>".$rws[8]."</td>";
                            echo "</tr>";
                        }
                        ?>
                        
                    </table>
		</div>
          <div class="submit">    
              <input type="submit" name="submit2_id" value="DELETE CUSTOMER DETAILS" class="bluebutton submitbotton"/>
          </div>                 
                </form>

            
               
                
                
                
   <?php include 'bodyend.php' ?>