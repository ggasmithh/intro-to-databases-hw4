<html>
<head>
	<title>Insert Appearance</title>
</head>
<body>
	<h1>Insert Appearance</h1>

<?php	

	$db = new mysqli('localhost', 'user', 'passwd', 'tv_apps', NULL, '/run/mysqld/mysqld.sock');

	if($db->connect_errno > 0){
		die('Unable to connect to database [' . $db->connect_error . ']');
	}

	$sql_vip = "SELECT Name FROM VIP;";
	
	if(!$result_vip = $db->query($sql_vip)){
		die('There was an error running the vip query [' . $db->error . ']');
	}

	$sql_channel = "SELECT Name FROM TV_CHANNEL;";	
	
	if(!$result_channel = $db->query($sql_channel)){
		die('There was an error running the channel query [' . $db->error . ']');
	}


?>
	<form action="insert_appearance.php" method="post">
		SSN:		<input type="text" name="SSN"></br>
		Name:		<input type="text" name="Name"></br>
		Surname:	<input type="text" name="Surname"></br>
		Employment:	<input type="text" name="Employment"></br>
		
		</br></br><input type='reset' value='Reset' name='reset'>
		<input type="submit" value="Submit"> 
	</form>

</body>
</html>


