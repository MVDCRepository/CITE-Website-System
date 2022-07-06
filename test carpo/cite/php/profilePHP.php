<?php 
	if (isset($_POST['change_passBtn'])) {
		include "../db_conn.php";

		$password = $_POST['password'];
		$confirmPass = $_POST['confirmPass'];

		if (empty($password) || empty($confirmPass)) {
			header("Location: ../pages/profile.php?error_msg=Fill all inputs");
			exit();
		}
	}
?>