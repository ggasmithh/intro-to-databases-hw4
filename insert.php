<html>
	<head>
		<title>Insert VIP</title>
	</head>
	<body>
		<h1>Insert VIP</h1>

	<?php	

		$db = new mysqli('localhost', 'user', 'passwd', 'tv_apps', NULL, '/run/mysqld/mysqld.sock');

		if($db->connect_errno > 0){
			die('Unable to connect to database [' . $db->connect_error . ']');
		}

        	$sql = "INSERT INTO VIP (Ssn, Name, Surname, Employment) VALUES ('".$_POST["SSN"]."','".$_POST["Name"]."','".$_POST["Surname"]."','".$_POST["Employment"]."')";
		
		if(!$result = $db->query($sql)){
			die('There was an error running the query [' . $db->error . ']');
		}

	?>
		<form action="insert.php" method="post">
			SSN:		<input type="text" name="SSN"></br>
			Name:		<input type="text" name="Name"></br>
			Surname:	<input type="text" name="Surname"></br>
			Employment:	<input type="text" name="Employment"></br>
			
			</br></br><input type='reset' value='Reset' name='reset'>
			<input type="submit" value="Submit"> 
		</form>

	</body>
</html>


