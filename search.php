<html>
	<head>
		<title>Search Results</title>
	</head>
	<body>
		<h1>TV Apperances of VIP</h1>
		
		<table>
		<thead>
			<tr>
				<td>Channel Code</td>
				<td>Date</td>
				<td>Start Time</td>
				<td>Surname</td>
				<td>Name</td>
			</tr>
		</thead>
		<tbody>
					
		<?php

			mysqli_report(MYSQLI_REPORT_ALL);			

			$db = new mysqli('localhost', 'user', 'passwd', 'tv_apps', NULL, '/run/mysqld/mysqld.sock');

			if($db->connect_errno > 0){
				die('Unable to connect to database [' . $db->connect_error . ']');
			}


			$sql = $db->prepare("SELECT T.CodC, A.Date, A.StartTime, V.Surname, V.Name FROM APPEARANCE A, VIP V, TV_CHANNEL T WHERE A.Ssn = V.Ssn AND A.CodC = T.CodC AND T.Broadcaster = ? AND V.Surname LIKE \"?%\"");
/*			echo $_POST["Broadcaster"];
echo $_POST["Surname"];	*/
			$one = "BroadCaster";
			$two = "Rob";
			if (!$sql->bind_param("ss", $one, $two)) {
				echo "Binding params failed: (" . $sql->errno . ")" . $sql->error;
			}
			if(!$result = $db->query($sql)){
				die('There was an error running the query [' . $db->error . ']');
			}

			while($row = $result->fetch_assoc()) {
		?>
			<tr>
				<td><?php echo $row['CodC']?></td>
				<td><?php echo $row['Date']?></td>
				<td><?php echo $row['StartTime']?></td>
				<td><?php echo $row['Surname']?></td>
				<td><?php echo $row['Name']?></td>
			</tr>

		<?php
			}
		?>

		</tbody>
	</body>
</html>

