<!DOCTYPE html>
<html >
<head>
<style type="text/css">
</style>
<link rel="stylesheet"  href="design.css" >

</head>
<body>
<div align="center" >
	<br><br><br><br>
	<a href="#loginScreen" class="button">Click here to Log In</a>
</div>
<div id="loginScreen" style="background-color:black;">
    <a href="#" class="cancel">&times;</a>
	<h2 style=" margin-left:120px;color:white;">SIGN UP</h2>
	<hr>
	<div style="border:0px solid; margin-top:35px">
	<form align="center">
		<span style="color:gray;float:left;margin-left:40px;">CUSTOMER ID</span><br>
		<input class = "text_field" type="text" name="firstname" style="float:left;margin-left:40px;"><br><br>
		<span style="color:gray;float:left;margin-left:40px;">USER NAME</span><br>
		<input class = "text_field" type="text" name="firstname" style="float:left;margin-left:40px;"><br><br>
		<span style="color:gray;float:left;margin-left:40px;">PASSWORD</span><br>
		<input class = "text_field" type="Password" name="lastname" style="float:left;margin-left:40px;"><br><br>
		<span style="color:gray;float:left;margin-left:40px;">SECURITY QUESTION</span><br>
<!--		<input class = "text_field" type="text" name="firstname" style="float:left;margin-left:40px;"><br><br>  -->
		<input class = "text_field" list="questions" name="question" style="float:left;margin-left:40px;"><br><br>
		<datalist id="questions">
		<option value="What is your favourite colour?">
		<option value="Which is your favourite sport?">
		<option value="What is your favourite pet?">
		<option value="Which is your first school?">
		<option value="What is your favourite subject?">
		</datalist>
		<span style="color:gray;float:left;margin-left:40px;">SECURITY ANSWER</span><br>
		<input class = "text_field" type="text" name="firstname" style="float:left;margin-left:40px;"><br><br><br>
		<input class="bur" type="submit" value="SIGN UP"style="float:right;margin-right:46px ;background-color:#1589FF;color:white;">
	</form>
	</div>
	
</div>
<div id="cover" style="border:0px solid;">
</div>
</body>
</html>
