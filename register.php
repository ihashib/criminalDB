<!DOCTYPE html>
<html>
<head>
<title>Sign up </title>
<link rel="stylesheet" href="css/style.css">
</head>
<style> 
body {
        background-image: url("images/background1.jpg");
} 
</style>
	<div id="main-wrapper">
		 <center><h2>Registration form</h2></center>
		 <center><img src="images/avatarRegis.png" class="avatarRegis"/> </center><br>

		<form class="myform" action="dbconfig/signup.php" method="POST"> 
			<label>Police ID:</label><br>
			<input name="PID" type="number" class="inputvalues" placeholder="Type ID" required="" /><br>

			<label>Email:</label><br>
			<input name="email" type="email" class="inputvalues" placeholder="ex:someone@something.com" required="" /><br>

			<label>Mobile number:</label><br>
			<input name="mNumber" type="number" class="inputvalues" placeholder="11 digits" required="" /><br>

			<label>Password:</label><br>
			<input name="password" type="password" class="inputvalues" placeholder="Type password" required="" /><br>

			<label>Confirm Password:</label><br>
			<input name="cpassword" type="password" class="inputvalues" placeholder="Confirm password" required="" /><br>

			<label>Birthdate:</label><br>
			<input name="date" type="date" class="inputvalues" 
			placeholder="dd/mm/yyyy" required="" /><br>

			<input name="submit_btn" type="submit" id="signup_btn" value="Sign up!"/><br><br>

			<a href="index.php"><input type="button" id="back_btn" value="Go back"/></a><br>

		</form>
			
	</div>

</body>
</html>