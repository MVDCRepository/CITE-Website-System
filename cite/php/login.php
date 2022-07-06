<?php

session_start();
include "../db_conn.php";
if (isset($_POST['id_number']) && isset($_POST['password'])) {
	
	function validate($data) {
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	$id_number = validate($_POST['id_number']);
	$password = validate($_POST['password']);

	if (empty($id_number) && empty($password)) {
		header("Location: ../user_login.php?error=ID Number and Password is required");
		exit();
	}
	else if (empty($id_number)) {
		header("Location: ../user_login.php?error=ID Number is required");
		exit();
	}
	else if (empty($password)) {
		header("Location: ../user_login.php?error=Password is required");
		exit();
	}
	else {
		$sql = "SELECT * FROM student_tbl WHERE id_number='$id_number' AND password='$password'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {

			$row = mysqli_fetch_assoc($result);

			if ($row['id_number'] === $id_number && $row['password'] === $password) {
				$_SESSION['student_id'] = $row['student_id'];
				$_SESSION['id_number'] = $row['id_number'];
				$_SESSION['fname'] = $row['fname'];
				$_SESSION['mname'] = $row['mname'];
				$_SESSION['lname'] = $row['lname'];
				$_SESSION['cmoNo'] = $row['cmoNo'];
				$_SESSION['series'] = $row['series'];
				$_SESSION['yr_lvl'] = $row['yr_lvl'];
				$_SESSION['eval_status'] = $row['eval_status'];
				header("Location: ../pages/index.php");
				exit();
			}
			else {
				header("Location: ../user_login.php?error=Incorrect ID Number or password");
				exit();
			}
		}
		else {
			header("Location: ../user_login.php?error=Incorrect ID Number or password");
			exit();
		}
	}
}
else {
	header("Location: ../user_login.php");
	exit();
}

?>