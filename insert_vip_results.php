<html>
	<head>
		<title>Insert Result</title>
	</head>
	<body>

		<?php	

			$db = new mysqli('localhost', 'user', 'passwd', 'tv_apps', NULL, '/run/mysqld/mysqld.sock');

			if($db->connect_errno > 0){
				die('Unable to connect to database [' . $db->connect_error . ']');
			}

        		$sql = "INSERT INTO VIP (Ssn, Name, Surname, Employment) VALUES ('".$_POST["SSN"]."','".$_POST["Name"]."','".$_POST["Surname"]."','".$_POST["Employment"]."')";
		
			if(!$result = $db->query($sql)){
				die('There was an error running the query [' . $db->error . ']');
			}
		
			else {
				echo "VIP added to Database";
				echo '	<form>
						<input type="button" value="New Insertion" onclick="window.location.href=\'insert_vip_home.php\'" />
					</form>';
			}
		?>

	</body>
</html>

