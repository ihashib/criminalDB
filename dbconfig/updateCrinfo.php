<?php
	require 'config.php';
	$cID = $_POST['cID'];
	$cName= $_POST['name'];
	$arDate= $_POST['arDate'];
	$birDate= $_POST['birDate'];
	$nID= $_POST['nID'];
	$caseID = $_POST['caseID'];
	$lawName = $_POST['lawName'];
	$gender = $_POST['gender'];


	if($_POST['updateCr']){	
		$sql= "SELECT * FROM criminalinfo WHERE cID = '$cID';";

			$sql = "UPDATE criminalinfo set cName='$cName', arrestDate='$arDate', birthDate='$birDate', nID='$nID', caseID='$caseID', lawyerName='$lawName', Gender='$gender' where cID='$cID'";

			if ($conn->query($sql) === TRUE) {
				
				header("Location: ../insertRedirect.php?cID=$cID");
				echo '<script type="text/javascript">alert("Done");</script>';

			} 
			else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();
	}
		else{
			echo "Click on update button to save changes";
		}


?>
