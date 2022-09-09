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

		<form class="myform" action="dbconfig/insertCrinfo.php" method="POST"> 
			<label>Criminal ID:</label><br>
			<input name="cID" type="number" class="inputvalues" placeholder="Type ID" required="" /><br>

			<label>Name:</label><br>
			<input name="name" type="name" class="inputvalues" placeholder="someone" required="" /><br>

			<label>Gender:</label><br>
			<input name="gender" type="gender" class="inputvalues" 
			placeholder="M/F/O" required="" /><br>

			<label>Arrest date:</label><br>
			<input name="arDate" type="date" class="inputvalues" placeholder="dd/mm/yyyy" required="" /><br>

			<label>Birthdate:</label><br>
			<input name="birDate" type="date" class="inputvalues" placeholder="dd/mm/yyyy" required="" /><br>

			<label>NID:</label><br>
			<input name="nID" type="number" class="inputvalues" placeholder="NID here 0r 0"  /><br>

			<label>Case ID:</label><br>
			<input name="caseID" type="number" class="inputvalues" 
			placeholder="case number" required="" /><br>

			<label>Lawyer Name:</label><br>
			<input name="lawName" type="name" class="inputvalues" 
			placeholder="someone" required="" /><br>



			<input name="insertCr" type="submit" id="signup_btn" value="Insert"/><br><br>

			<a href="home.php"><input type="button" id="back_btn" value="Go back"/></a><br>

		</form>
			
	</div>

</body>
</html>