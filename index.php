<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
</head>

<body>

	<h2>Users</h2>

	<?php
	

$server   = 'localhost';
$user     = 'root';
$password = '';
$db       = 'hng_stage1';


$connection = mysqli_connect($server,$user,$password,$db) or die("could not connect to server...\n" . mysql_error());


	$result = mysqli_query($connection,"SELECT * FROM users") or die(mysql_error());

	while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {

		echo $row['name']." || ".$row['email address']." || ".$row['phone number']." || ".$row['address'];

		echo "<br />";


	}

	mysqli_close($connection);

	?>
</body>

</html>
