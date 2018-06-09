<html>
<head>
	<title>Insert Appearance</title>
</head>
<body>
	<h1>Insert Appearance</h1>
	<h2>Data for new Appearance</h2>

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
	<form action="insert_app_results.php" method="post">				
	
		<?php
			echo "VIP:	<select name='VIP'>";

			while($row = $result_vip->fetch_assoc()) {
				echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
			}
				
			echo "</select></br>";


			echo "Channel:	<select name='Channel'>";
			
			while($row = $result_channel->fetch_assoc()) {
				echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
			}

			echo "</select></br>";
		?>	
	
		Date:		<input type="text" name="Date"></br>
		Start Time:	<input type="text" name="StartTime"></br>
		EndTime:	<input type="text" name="EndTime"></br>
		
		</br></br><input type='reset' value='Reset' name='reset'>
		<input type="submit" value="Submit"> 
	</form>

</body>
</html>


