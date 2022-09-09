<?php
	//session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>login page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<style>
body {
        background-image: url("images/background1.jpg");
} 
 
</style>
<p>Educational site</p>
	<div id="main-wrapper">
		<center><h1>Criminal database</h1></center>
		 <center><h2>User Login</h2></center>
		 <center><img src="images/avatar.png" class="avatar"/> </center><br>

		<form class="myform" action="dbconfig/login.php" method="POST"> 
			<label>User Name:</label><br>
			<input type="text" name="uid" class="inputvalues" placeholder="Type username" required="" /><br>

			<label>Password:</label><br>
			<input type="password" name="pwd" class="inputvalues" placeholder="Type password" required="" /><br>

			<input type="submit" name="loginn" id="login_btn" value="Login"/><br><br>

			<label>Dont have an account?</label><br>
			<a href="register.php"><input type="button" id="register_btn" value="Register!"/></a><br>

	</div>

</body>
</html>