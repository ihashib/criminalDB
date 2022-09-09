<?php
?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" href="css/style.css">
</head>
<style>
body {
        background-image: url("images/background1.jpg");
} 
</style>
	<div id="main-wrapper">
		 <center><h2>Welcome to the criminal database</h2></center>
	<img src="images/avatarHome.png" class="avatarHome"/> <br>
	<label>  Profile</label><br>
	<label> Settings</label><br>
	<label> help</label><br>

	<form class="myform" action="showSingleCrData.php" method="POST">
		<input name="cID" type="number" class="inputvalues" placeholder="Search by criminal ID" /><br>
		<input name="submit_btn" type="submit" id="signup_btn" value="Search Criminal"/><br><br>


	</form>

	<a href="insertCriminalInfo.php"><input type="button" id="logout_btn" value="Insert new Criminal Info"/></a><br><br>
	<a href="index.php"><input type="button" id="logout_btn" value="Logout"/></a><br><br>	
 
	</div>

</body>
</html>