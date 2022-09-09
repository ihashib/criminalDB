<?php
		if(isset($_POST['loginn'])){
			require 'config.php';

			$uid = $_POST['uid'];
			$pwd = $_POST['pwd'];

			if(empty($uid) || empty($pwd)){
				echo '<script type="text/javascript">alert("Field empty");history.go(-1);</script>';
			}
			else{
				$sql= "SELECT * FROM userinfo WHERE policeID = '$uid';";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);
				echo $resultCheck;
				if($resultCheck < 1){
					echo '<script type="text/javascript">alert("Error! No such user");history.go(-1);</script>';

				}
				else{
					if($row = mysqli_fetch_assoc($result)){
						$pwdCheck= "SELECT password FROM userinfo WHERE policeID='$uid';";
						if($pwdCheck == false){
							echo '<script type="text/javascript">alert("Error! Password mismatch");history.go(-1);</script>';
						}
						elseif($pwdCheck == true){
							
							header("Location: ../home.php?login=success");
							exit();
						}
					}
				}
			}
		}
		
	?>