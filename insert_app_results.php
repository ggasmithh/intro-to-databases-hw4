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

        		$sql = "INSERT INTO APPEARANCE (Ssn, Date, StartTime, EndTime, CodC) VALUES ((SELECT Ssn FROM VIP WHERE Name ='".$_POST["VIP"]."'),'".$_POST["Date"]."','".$_POST["StartTime"]."','".$_POST["EndTime"]."',(SELECT CodC FROM TV_CHANNEL WHERE Name = '".$_POST["Channel"]."'))";

		
			if(!$result = $db->query($sql)){
				die('There was an error running the query [' . $db->error . ']');
			}
		
			else {
				echo "Appearance Added to Database";
				echo '</br><form><input type="button" value="New Insertion" onclick="window.location.href=\'insert_app_home.php\'"/></form>';
			}
		?>

	</body>
</html>

