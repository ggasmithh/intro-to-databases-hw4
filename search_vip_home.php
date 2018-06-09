<html>
	<head>
		<title>Search VIP</title>
	</head>
	<body>
		<h1>Search VIP</h1>

		<form action="search_vip_results.php" method="post">
			First three letters of VIP surname:  <input type="text" name="Surname"></br>
			Broadcaster:

			<?php

				$db = new mysqli('localhost', 'user', 'passwd', 'tv_apps', NULL, '/run/mysqld/mysqld.sock');

				if($db->connect_errno > 0){
					die('Unable to connect to database [' . $db->connect_error . ']');
				}


				$sql="SELECT Broadcaster FROM TV_CHANNEL;";

				if(!$result = $db->query($sql)){
					die('There was an error running the query [' . $db->error . ']');
				}


				echo "<select name='Broadcaster'>";

				while($row = $result->fetch_assoc()) {
					echo '<option value="'.$row['Broadcaster'].'">'.$row['Broadcaster'].'</option>';
				}
				
				echo "</select>";
			?>

			</br></br><input type='reset' value='Reset' name='reset'>
			<input type="submit" value="Submit"> 
		</form>

	</body>
</html>


