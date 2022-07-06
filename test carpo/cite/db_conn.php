<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db_name = "ucu_cite";

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db_name);

	if (!$conn) {
		echo "Connection Failed!";
	}
?>