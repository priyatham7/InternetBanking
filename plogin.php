<!--
presented by : B.Priyatham	B.Sharath Chandra  N.Lavan Kumar
Batch-2k14
IIIT-Allahabad
-->

<?php 
session_start();
        
if(isset($_SESSION['customer_login'])) 
    header('location:customer_account_summary.php');   
?>

<?php 
include '_inc/dbconn.php';
    	
if(isset($_REQUEST['submitBtn'])){
    $username=$_REQUEST['uname'];    
    $password= $_REQUEST['pwd'];
  
    $sql="SELECT username,password,Customer_id FROM login_credentials WHERE username='$username' AND password='$password'";
	$result=mysqli_query($conn,$sql) or die(mysqli_error());
	$rws=  mysqli_fetch_array($result);
    
    $user=$rws[0];
    $pwd=$rws[1];    
	$cust=$rws[2];
    
    if($user==$username && $pwd==$password && $user!="" && $pwd!=""){
        $_SESSION['customer_login']=1;
	    $_SESSION['cust_id']=$cust;
		header('location:customer_account_summary.php'); 
    }
    else{
    header('location:plogin.php');  
}}

	if(isset($_REQUEST['su_btn'])){	
	$su_cust_id=$_REQUEST['su_cust_id']; 
    $su_username=$_REQUEST['su_uname'];    
    $su_password= $_REQUEST['su_pwd'];
	$secq=$_REQUEST['secq'];
	$seca=$_REQUEST['seca']; 	
  
    $sql0="Select Customer_id from Customer where Customer_id='$su_cust_id'";
	$res=mysqli_query($conn,$sql0) or die(mysqli_error());
	$rws0=mysqli_fetch_array($res);
	
	if($rws0[0]==$su_cust_id){
		
	$sql="INSERT into login_credentials values ('$su_username','$su_password','$secq','$seca','$su_cust_id')";

	if(mysqli_query($conn,$sql)){// or die(mysqli_error());
		echo "<script type='text/javascript'>alert('Account Created Successfully.')</script>";

		header('plogin.php');
	}
	else{
		echo "<script type='text/javascript'>alert('Account Creation Failed. Try Again')</script>";
		
	}
	}
	else{
		echo "<script type='text/javascript'>alert('Customer ID not registered.')</script>";

	}
	}
	
	if(isset($_REQUEST['fp_btn'])){
 	$fp_cust_id=$_REQUEST['fp_cust_id']; 
    $fp_username=$_REQUEST['fp_uname'];    
    $fp_secq=$_REQUEST['fp_secq'];
	$fp_seca=$_REQUEST['fp_seca']; 	
  
    
	$sql3="SELECT Customer_id,username,security_question,security_answer FROM login_credentials WHERE username='$fp_username' AND Customer_id='$fp_cust_id' AND security_question='$fp_secq' AND security_answer='$fp_seca' ";
	$result3=mysqli_query($conn,$sql3) or die(mysqli_error());
	$rws3=  mysqli_fetch_array($result3);
    
    $cust=$rws3[0];
    $user=$rws3[1];
    $sq=$rws3[2];
	$sa=$rws3[3];
	
    if($user==$fp_username && $cust==$fp_cust_id && $sq==$fp_secq && $sa=$fp_seca && $fp_cust_id!="" && $fp_username!="" && $fp_secq!="" && $fp_seca!="" ){
        $_SESSION['customer_login']=1;
	    $_SESSION['cust_id']=$fp_cust_id;
		echo "<script type='text/javascript'>alert('Successfully Logged in.')</script>";		
		header('location:customer_account_summary.php'); 
    }
	else{
		echo "<script type='text/javascript'>alert('Incorrect Credentials')</script>";
		header('location:plogin.php');  
	}
	}


?>



<html>
<head>


<style>
input.middle:focus {
    outline-width: 0;
}


    /***FIRST STYLE THE BUTTON***/
    input#gobutton{
	width:200px;
    cursor:pointer; /*forces the cursor to change to a hand when the button is hovered*/
    padding:5px 25px; /*add some padding to the inside of the button*/
    background:#FF3366; /*the colour of the button*/
    border:1px solid #33842a; /*required or the default border for the browser will appear*/
    /*give the button curved corners, alter the size as required*/
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px;
    /*give the button a drop shadow*/
    -webkit-box-shadow: 0 0 4px rgba(0,0,0, .75);
    -moz-box-shadow: 0 0 4px rgba(0,0,0, .75);
    box-shadow: 0 0 4px rgba(0,0,0, .75);
    /*style the text*/
    color:#f3f3f3;
    font-size:1.1em;
    }
    /***NOW STYLE THE BUTTON'S HOVER AND FOCUS STATES***/
    input#gobutton:hover, input#gobutton:focus{
    background-color :#FF3366; /*make the background a little darker*/
    /*reduce the drop shadow size to give a pushed button effect*/
    -webkit-box-shadow: 0 0 1px rgba(0,0,0, .75);
    -moz-box-shadow: 0 0 1px rgba(0,0,0, .75);
    box-shadow: 0 0 1px rgba(0,0,0, .75);
    }
	::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    color:    white;
}
:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
   color:    white;
   opacity:  1;
}
::-moz-placeholder { /* Mozilla Firefox 19+ */
   color:    white;
   opacity:  1;
}
:-ms-input-placeholder { /* Internet Explorer 10-11 */
   color:    white;
}



</style>

<link rel="stylesheet" href="design.css"> 
</head>
<body style=" background:url('back.png');background-repeat:no-repeat;">


<div  style="margin-left:100px;margin-top:100px;padding:50px;height:80%;border:0px solid black;width:80%; ">

<div  style=" margin-left:100px;margin-top:70px;float:left;width:30%; height:70%;">
<fieldset>
<legend><h1 >OUR SERVICES</h1></legend>
<ul>
<li><h3><i style="font-family:'Exo', sans-serif;">Funds Transfer<i></h3></Li>
<br>
<li><h3><i>Balance Enquiry<i></h3></Li>
<br>
<li><h3><i>Atm Requests<i></h3></Li>
<br>
<li><h3><i>Cheque Book Requests<i><h3></Li>
<br>
</fieldset>
</div>
<div  align="center"  style="background-image:url('logimage.png');margin-top:20px;margin-left:700px;border:1px solid black;align:center;width:300px; height:500px;background-repeat:no-repeat;">
<form >
<br><br><br>
<div>
<img src="shield2.png" style="width:120px;height:120px;" >
</div>
<br><br><br><br>
<div>
<div> 
<div style="margin-left:35px;float:left;">
 <img src="user.png"  height="25px" width="25px">
 </div>
 <div >
  <input type="text"  class="middle" style="margin-left:0px;background-color:transparent;font-size:15px;float:center;border:none;" placeholder="username" name="uname">
  <br></div>

</div>
<sup><sup><sup><b><hr size="3px"  width="250px"></hr><b></sup></sup></sup><br><br>
  <div > 
<div style="margin-left:35px;float:left;">
  <img src="pass.png"  height="25px" width="25px">
  </div>
  <input type="password"  class="middle" style="background-color:transparent;font-color:white;font-size:15px;border:none" placeholder="Password" name="pwd">
</div>
  </div><sup><sup><sup><hr size="3px" width="250px"></hr></sup></sup></sup>
<br><br>
<input id="gobutton" name="submitBtn" type="submit" value="Signin" /> <br><br>
<a href="#loginScreen" style="float:left; margin-left:25px;">sign up</a>
<a href="#fpassword" style="float:right; margin-right:25px">forgot password</a>
</div>

</form action="" method="POST">

<!-- sign up -->
<div id="loginScreen" style="background-color:black;">
    <a href="#" class="cancel">&times;</a>
	<h2 style=" margin-left:120px;color:white;">SIGN UP</h2>
	<hr>
	<div style="border:0px solid; margin-top:35px">
	<form align="center">
		<span style="color:gray;float:left;margin-left:40px;">CUSTOMER ID</span><br>
		<input class = "text_field" type="text" name="su_cust_id" style="float:left;margin-left:40px;"><br><br>
		<span style="color:gray;float:left;margin-left:40px;">USER NAME</span><br>
		<input class = "text_field" type="text" name="su_uname" style="float:left;margin-left:40px;"><br><br>
		<span style="color:gray;float:left;margin-left:40px;">PASSWORD</span><br>
		<input class = "text_field" type="Password" name="su_pwd" style="float:left;margin-left:40px;"><br><br>
		<span style="color:gray;float:left;margin-left:40px;">SECURITY QUESTION</span><br>
<!--		<input class = "text_field" type="text" name="firstname" style="float:left;margin-left:40px;"><br><br>  -->
		<input class = "text_field" list="questions" name="secq" style="float:left;margin-left:40px;"><br><br>
		<datalist id="questions">
		<option value="What is your favourite colour?">
		<option value="Which is your favourite sport?">
		<option value="What is your favourite pet?">
		<option value="Which is your first school?">
		<option value="What is your favourite subject?">
		</datalist>
		<span style="color:gray;float:left;margin-left:40px;">SECURITY ANSWER</span><br>
		<input class = "text_field" type="text" name="seca" style="float:left;margin-left:40px;"><br><br><br>
		<input class="bur" type="submit" value="SIGN UP" onclick="myFunction()" name="su_btn" style="float:right;margin-right:46px ;background-color:#1589FF;color:white;">
	</form>
	</div>
	
	
	

</div>
<div id="cover" style="border:0px solid;">
</div>

<!--forgot password-->
<div id="fpassword" style="background-color:black;">
    <a href="#" class="cancel">&times;</a>
	<h2 style=" margin-left:120px;color:white;">RESET</h2>
	<hr>
	<div style="border:0px solid; margin-top:35px">
	<form align="center" action="" method="POST">
		<span style="color:gray;float:left;margin-left:40px;">CUSTOMER ID</span><br>
		<input class = "text_field" type="text" name="fp_cust_id" style="float:left;margin-left:40px;"><br><br>
		<span style="color:gray;float:left;margin-left:40px;">USER NAME</span><br>
		<input class = "text_field" type="text" name="fp_uname" style="float:left;margin-left:40px;"><br><br>
		
		<span style="color:gray;float:left;margin-left:40px;">SECURITY QUESTION</span><br>

		<input class = "text_field" list="questions" name="fp_secq" style="float:left;margin-left:40px;"><br><br>
		<datalist id="questions">
		<option value="What is your favourite colour?">
		<option value="Which is your favourite sport?">
		<option value="What is your favourite pet?">
		<option value="Which is your first school?">
		<option value="What is your favourite subject?">
		</datalist>
		<span style="color:gray;float:left;margin-left:40px;">SECURITY ANSWER</span><br>
		<input class = "text_field" type="text" name="fp_seca" style="float:left;margin-left:40px;"><br><br><br>
		<input class="bur" type="submit" name="fp_btn" value="SUBMIT"style="float:right;margin-right:46px ;background-color:#1589FF;color:white;">
	</form>
	</div>
	
	
	
	
</div>
<div id="cover" style="border:0px solid;">
</div>

</div>


</body>
</html>