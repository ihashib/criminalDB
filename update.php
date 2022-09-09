<!DOCTYPE html>
<html>
<head>
<title>Insert info </title>
<link rel="stylesheet" href="css/style.css">
</head>
<style> 
body {
        background-image: url("images/background1.jpg");
} 
</style>
	<div id="main-wrapper">
		 <center><h2>Insert new criminal info</h2></center>
		 <center><img src="images/criminal.png" class="avatarRegis"/> </center><br>

		<form class="myform" action="dbconfig/updateCrinfo.php" method="POST"> 
			<input name="cID" type="number" class="inputvalues" value="<?php echo $_GET['cID'];?>" required="" /><br>

			<label>Name:</label><br>
			<input name="name" type="name" class="inputvalues" value="<?php echo $_GET['cName'];?>" required="" /><br>

			<label>Gender:</label><br>
			<input name="gender" type="gender" class="inputvalues" 
			value="<?php echo $_GET['Gender'];?>" required="" /><br>

			<label>Arrest date:</label><br>
			<input name="arDate" type="date" class="inputvalues" value="<?php echo $_GET['arrestDate'];?>" required="" /><br>

			<label>Birthdate:</label><br>
			<input name="birDate" type="date" class="inputvalues" value="<?php echo $_GET['birthdate'];?>" required="" /><br>

			<label>NID:</label><br>
			<input name="nID" type="text" class="inputvalues" value="<?php echo $_GET['nID'];?>" required="" /><br>

			<label>Case ID:</label><br>
			<input name="caseID" type="number" class="inputvalues" 
			value="<?php echo $_GET['caseID'];?>" required="" /><br>

			<label>Lawyer Name:</label><br>
			<input name="lawName" type="name" class="inputvalues" 
			value="<?php echo $_GET['lawyerName'];?>" required="" /><br>



			<input name="updateCr" type="submit" id="signup_btn" value="Update"/><br><br>

			<a href="home.php"><input type="button" id="back_btn" value="Go back"/></a><br>

		</form>
			
	</div>

</body>
</html>