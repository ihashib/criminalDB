<!DOCTYPE html>
<html>
<head>
<title>Display info </title>
<link rel="stylesheet" href="css/style.css">
</head>
<style> 
	body {
        background-image: url("images/background1.jpg");
	} 
	table{
		border-collapse: collapse;
		width: 60%;
		color: #000000;
		font-family: monospace;
		font-size: 18px;
		text-align: left;
	}
	}
</style>
	<div id="home-wrapper">
		 <center><h2>Display criminal info</h2></center>
		 <center><img src="images/criminal.png" class="avatarRegis" align="right" /> <br>

		 	<table border="1">
		 		<tr>
		 			<th>Criminal ID</th>
		 			<th>Name</th>
		 			<th>Arrest date</th>
		 			<th>Birthdate</th>
		 			<th>NID</th>
		 			<th>Case ID</th>
		 			<th>Lawyer Name</th>
		 			<th>Gender</th>
		 			<th>BloodType</th>
		 		</tr>
		 	

			<?php
				require 'dbconfig/config.php';

				error_reporting(0);
				$sql= "SELECT * FROM criminalinfo";
				$data = mysqli_query($conn, $sql);
				$total = mysqli_num_rows($data);
				
				
				if($total != 0){
					while($result = mysqli_fetch_assoc($data)){
						echo "<tr>
				 			<td>".$result['cID']."</td>
				 			<td>".$result['cName']."</td>
				 			<td>".$result['arrestDate']."</td>
				 			<td>".$result['birthdate']."</td>
				 			<td>".$result['nID']."</td>
				 			<td>".$result['caseID']."</td>
				 			<td>".$result['lawyerName']."</td>
				 			<td>".$result['Gender']."</td>
				 			<td>".$result['BloodType']."</td>
				 			</tr>";
					}
				}
				//echo $result['cID']." ".$result['cName']." ".$result['arrestDate']." ".$result['birthDate']." ".$result['nID']." ".$result['caseID']." ".$result['lawyerName']." ".$result['Gender']." ".$result['BloodType']."<br>";
			?>
			</table>
	</div>

</body>
</html>