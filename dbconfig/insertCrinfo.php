<?php
	require 'config.php';
	
	$cID = $_POST['cID'];
	$cname= $_POST['name'];
	$arDate= $_POST['arDate'];
	$birDate= $_POST['birDate'];
	$nID= $_POST['nID'];
	$caseID = $_POST['caseID'];
	$lawName = $_POST['lawName'];
	$gender = $_POST['gender'];


	
	$sql= "SELECT * FROM criminalinfo WHERE cID = '$cID';";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	if($resultCheck > 0){
			$user=1;
			echo '<script type="text/javascript">alert("Criminal ID exits");history.go(-1);</script>';
	}
	else{
		$sql = "INSERT INTO criminalinfo (cID, cName, arrestDate, birthDate, nID, caseID, lawyerName, Gender) VALUES ('$cID', '$cname', '$arDate', '$birDate', '$nID', '$caseID', '$lawName', '$gender');";

		if ($conn->query($sql) === TRUE) {
			echo '<script type="text/javascript">alert("Done");</script>';
			header("Location: ../insertRedirect.php?cID=$cID");

		} 
		else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
	}

?>
