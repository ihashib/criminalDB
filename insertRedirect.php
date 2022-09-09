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
</style>
	<div id="home-wrapper">
		 <center><h2>Display criminal info</h2></center>
		 <center><img src="images/criminal.png" class="avatarRegis"/></center> <br>

		 	<center><table border="1">
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
		 			<th>Modify</th>
		 		</tr>
		 	

			<?php
				require 'dbconfig/config.php';

				error_reporting(0);
				$cID=$_GET['cID'];
				$sql= "SELECT * FROM criminalinfo where cID='$cID'";
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
				 			<td><a href='update.php?cID=$result[cID]&cName=$result[cName]&arrestDate=$result[arrestDate]&birthdate=$result[birthdate]&nID=$result[nID]&caseID=$result[caseID]&lawyerName=$result[lawyerName]&Gender=$result[Gender]&BloodType=$result[BloodType] '>Edit</a><br><br>
				 			<a href='dbconfig/delete.php?cID=$result[cID]' onclick='return checkdelete()'>Delete</a></td>
				 			</tr>";
					}
				}
				else{
					echo '<script type="text/javascript">alert("Criminal ID does not exit!");history.go(-1);</script>';
				}
				//echo $result['cID']." ".$result['cName']." ".$result['arrestDate']." ".$result['birthDate']." ".$result['nID']." ".$result['caseID']." ".$result['lawyerName']." ".$result['Gender']." ".$result['BloodType']."<br>";
			?>
			</table></center>
			<br>
			<br>
			<br>
			<script>
				function checkdelete(){
					return confirm('Are you sure you want to delete data?');

				}
			</script>
			<a href="home.php"><input type="button" id="logout_btn" value="back"/></a><br><br>
	</div>

</body>
</html>