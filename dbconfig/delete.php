<?php
	require 'config.php';
	$cID = $_GET['cID'];
	$sql = "DELETE from criminalinfo where cID='$cID'";

	if ($conn->query($sql) === TRUE) {
				
		echo '<script type="text/javascript">alert("Deleted successfully");window.location.href = "../home.php";</script>';
	} 
	else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>
