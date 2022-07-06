<?php 
	if (isset($_POST['change_passBtn'])) {
		include "../db_conn.php";

		$student_id = $_POST['student_id'];

		$password = $_POST['password'];
		$confirmPass = $_POST['confirmPass'];

		if (empty($password) || empty($confirmPass)) {
			header("Location: ../pages/profile.php?error_msg=Fill all inputs");
			exit();
		}
		else if ($confirmPass != $password) {
			header("Location: ../pages/profile.php?error_msg=Password not match");
			exit();
		}
		else {
			$sql = "UPDATE student_tbl SET password = '$password' WHERE student_id = '$student_id'";
			$sql_result = mysqli_query($conn, $sql);

			if ($sql_result) {
				header("Location: ../pages/profile.php?success_upd_cred=Password Updated");
				exit();
			}
			else {
				echo "Error update credentials";
			}
		}
	}
?>