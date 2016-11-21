<?php 
session_start();
        
//if(!isset($_SESSION['staff_login'])) 
//    header('location:staff_login.php');   
?>
 <?php
                $staff_id=$_SESSION['staff_id'];
                include '_inc/dbconn.php';
                $sql="SELECT * FROM staff WHERE username='$staff_id'";
                $result=  mysqli_query($conn,$sql) or die(mysqli_error());
                $rws=  mysqli_fetch_array($result);
                
                $id=$rws[0];
                $name=$rws[1];
                $gender=$rws[2];
                $dob=$rws[3];
                $address=$rws[4];
                $username=$rws[5];
                $password=$rws[6];
                $mobile=$rws[7];
                $email=$rws[8];
                
                $_SESSION['login_id']=$username;
                $_SESSION['name1']=$name;
                $_SESSION['id']=$id;
                ?>
            
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Staff Home</title>
        
    <link rel="stylesheet" href="design.css">
		<link href="default.css" rel="stylesheet" type="text/css" media="all" />
		<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
			<link rel="stylesheet" href="normalize.css">    
        <link rel="stylesheet" href="style4details.css">
	<link href="lis.css" rel="stylesheet" type="text/css" /> 
    </head>
        <?php include 'finalstaff.php' ?>
        
 <div  style="margin-left:100px;" align="left" class="main">
      <div class="one">
        <div class="register">
          <h3>Details</h3>
          <form id="reg-form">
            <div>
              <label for="name">Id</label>
			   &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <?php echo $id;?>
<sup> <hr style="align:right;margin-left:200px; width:300px;"><sup>  
      </div>
            <div>
              <label for="email">Name</label>
			  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <?php echo $name;?>
<sup> <hr style="align:right;margin-left:200px; width:300px;"><sup>        </div>
            <div>
              <label for="username">DOB</label>
			  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <?php echo $dob;?>
<sup> <hr style="align:right;margin-left:200px; width:300px;"><sup>           </div>
            <div>
              <label for="password">Email</label>
			  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <?php echo $email;?>
<sup> <hr style="align:right;margin-left:200px; width:300px;"><sup>        </div>
				<div>
             
<div>




<div>
            </div>

			
          </form>
          
          </div>
        </div>
      </div>
      
          </form>
          
             
            </div>
          </div>

		
     <?php include 'bodyend.php';?>

            
                