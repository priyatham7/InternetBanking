<?php 
session_start();
        
//if(!isset($_SESSION['admin_login'])) 
//    header('location:adminlogin.php');   
?>
<!DOCTYPE html>
<?php
include '_inc/dbconn.php';
$sql="SELECT * FROM staff";
$result=  mysqli_query($conn,$sql) or die(mysqli_error($conn));
$sql_min="SELECT MIN(staff_id) from staff";
$result_min=  mysqli_query($conn,$sql_min);
$rws_min=  mysqli_fetch_array($result_min);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Delete Staff</title>
        <style>
            .displaystaff_content table,th,td {
    padding:6px;
    border: 1px solid #2E4372;
   border-collapse: collapse;
}
#button{
    border:none;
}
        </style>
		<link rel="stylesheet" href="design.css">
		<link rel="stylesheet" href="css2/style3.css">
		<link rel="stylesheet" href="css2/button.css">
		<link href="default.css" rel="stylesheet" type="text/css" media="all" />
		<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
		<link href="lis.css" rel="stylesheet" type="text/css" />    
    </head>
    
    <?php include 'finaladmin.php' ?>
     
                <form action="editstaff.php" method="POST">
            <div class="table-title">
                    <table class="table-fill" align="center">
                        <caption align='center' style='color:#2E4372;'><h3><u><i><span style="color:blue;">Staff Details</span></i></u></h3></caption>
                        <th>id</th>
                        <th>name</th>
                        
                        <th>DOB</th>
                        <th>address</th>
                        <th>username</th>
                        <th>password</th>
                        <th>mobile</th>
                        <th>email</th>
                        <?php
                        while($rws=  mysqli_fetch_array($result)){
                            echo "<tr><td><input type='radio' name='staff_id' value=".$rws[0];
                            if($rws[0]==$rws_min[0]) echo' checked';
                            echo " /></td>";
                            echo "<td>".$rws[1]."</td>";
                            
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
        <input class="bluebutton submitbotton" type="submit" name="submit2_id" value="DELETE STAFF DETAILS" class='addstaff_button' >
        </div>                
                    </form>
                        
                
                    
          <?php include 'bodyend.php';?>
 