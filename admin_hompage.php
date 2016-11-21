<?php 
session_start();
 if(!isset($_SESSION['admin_login'])) 
    header('location:adminlogin.php');   
?>
<!DOCTYPE html>
<html>
    <head>
	<style type="text/css">
	a 
	{
		text-decoration: none;
		font-size: 20px;
		
	}
	a:visited {
    color: green;
}

/* mouse over link */
a:hover {
    color: hotpink;
}

/* selected link */
a:active {
    color: blue;
}
	</style>
        <meta charset="UTF-8">
        <title>Admin Homepage</title>

	<link rel="stylesheet" href="design.css">
	<link rel="stylesheet" href="css2/style2.css">
		<link href="default.css" rel="stylesheet" type="text/css" media="all" />
		<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
		<link href="lis.css" rel="stylesheet" type="text/css" />    
		</head>
            
           <?php include 'finaladmin.php'?>
		   <div style="align:center;">
		   <br><br>
		   <!-- PRICING-TABLE CONTAINER -->
        <div style="align:center; margin-left:70px;width:1000px;" >
            
             <!-- PROFESSIONAL -->
            <div class="block professional fl">
                <h1 style="background: #3EC6E0;height:30px;"></h1>
                <!-- CONTENT -->
                <div class="content">
                    <p class="price">                    
                        <span>staff</span>
                    </p>

                </div>
                <!-- /CONTENT -->
                <!-- FEATURES -->
                <ul class="features">
                    
       <li> <a style="text-decoration:none;"href="addstaff.php">Add staff member</a></li>
        <li><a style="text-decoration:none;" href="display_staff.php">Edit staff member</a></li>
        <li> <a style="text-decoration:none;" href="delete_staff.php">Delete staff</a></li>
                </ul>
                <!-- /FEATURES -->
                <!-- PT-FOOTER -->
                <div class="pt-footer">
                    <p>&nbsp;</p>
                </div>
                <!-- /PT-FOOTER -->
            </div>
           <!-- BUSINESS -->
            <div class="block business fl">
                <h1 style="background: #E3536C;height:30px;"></h1>
                <!-- CONTENT -->
                <div class="content">
                    <p class="price">
                                               <span>Customer</span>
                    </p>
                </div>
                <!-- /CONTENT -->

                <!-- FEATURES -->
                <ul class="features">
                    <li><a style="text-decoration:none;"  href="addcustomer.php">Add Customer</a></li>
       <li> <a style="text-decoration:none;" href="display_customer.php">Edit customer</a></li>
       <li> <a style="text-decoration:none;" href="delete_customer.php">Delete customer</a></li>
                </ul>
                <!-- /FEATURES -->

                <!-- PT-FOOTER -->
                <div class="pt-footer">
                    <p>&nbsp;</p>
                </div>
            
            </div>
                </div>
            <!-- /BUSINESS -->
        </div>
        <!-- /PRICING-TABLE -->
		</div>

		   
		</div>
    <?php include 'bodyend.php' ?>