<?php

session_start();
include "../db_conn.php";
if (isset($_POST['username']) && isset($_POST['password'])) {
	
	function validate($data) {
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	$username = validate($_POST['username']);
	$password = validate($_POST['password']);

	if (empty($username) && empty($password)) {
		header("Location: ../../index.php?error=Username and Password is required");
		exit();
	}
	else if (empty($username)) {
		header("Location: ../../index.php?error=Username is required");
		exit();
	}
	else if (empty($password)) {
		header("Location: ../../index.php?error=Password is required");
		exit();
	}
	else {
		$sql = "SELECT * FROM admin_table WHERE username='$username' AND password='$password'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {

			$row = mysqli_fetch_assoc($result);

			if ($row['username'] === $username && $row['password'] === $password) {
				$_SESSION['username'] = $row['username'];
				$_SESSION['profile_pic'] = $row['profile_pic'];
				$_SESSION['fname'] = $row['fname'];
				$_SESSION['lname'] = $row['lname'];
				$_SESSION['position'] = $row['position'];
				$_SESSION['id'] = $row['id'];
				header("Location: ../faculty.php");
				exit();
			}
			else {
				header("Location: ../../index.php?error=Incorrect username or password");
				exit();
			}
		}
		else {
			header("Location: ../../index.php?error=Incorrect username or password");
			exit();
		}
	}
}
else {
	header("Location: ../index.php");
	exit();
}

?>