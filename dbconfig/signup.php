<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
	require 'config.php';
	
	$PID = $_POST['PID'];
	$email= $_POST['email'];
	$mNumber= $_POST['mNumber'];
	$password= $_POST['password'];
	$cpassword= $_POST['cpassword'];
	$date = $_POST['date'];

	if($password==$cpassword){
		$sql= "SELECT * FROM userinfo WHERE policeID = '$PID';";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		$sql1 = "SELECT * FROM userinfo WHERE email = '$email';";
		$result1 = mysqli_query($conn, $sql1);
		$resultCheck1 = mysqli_num_rows($result1);

		$sql2 = "SELECT * FROM userinfo WHERE mNumber = '$mNumber';";
		$result2 = mysqli_query($conn, $sql2);
		$resultCheck2 = mysqli_num_rows($result2);

		$user=0;
		$email=0;
		$Mnum=0;
		if($resultCheck > 0){
			$user=1;
			echo '<script type="text/javascript">alert("User name exists");history.go(-1);</script>';
		}
		if($resultCheck1 > 0){
			$email=1;
			echo '<script type="text/javascript">alert("Email exits");history.go(-1);</script>';
		} 
		if($resultCheck2 > 0){
			$Mnum=1;
			echo '<script type="text/javascript">alert("Mobile number exits");history.go(-1);</script>';
		}
		if($user==0 && $email==0 && $Mnum==0){
			$sql = "INSERT INTO userinfo (policeID, email, mNumber, password, date) VALUES ('$PID', '$email', '$mNumber', '$password', '$date');";
			if ($conn->query($sql) === TRUE) {
				header("Location: ../congrats.php");

			} else {
	    	echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();
		}

	}
	else{
		echo'<script type= "text/javascript"> alert("Passwords do not match") </script>';
	}
?>
</body>
</html>