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

	if (isset($_FILES['file']) && isset($_POST['submit_reqBtn'])) {
		include "../db_conn.php";

		date_default_timezone_set('Asia/Manila');
    	$current_time = date("Y-m-d H:i:s");
    	$date_time = strtotime($current_time);

    	$sql_result = null;

		$fileCount = count($_FILES['file']['name']);
		$student_id = $_POST['student_id'];

		for ($i=0; $i < $fileCount; $i++) {
			$file = $_FILES['file']['name'][$i];

			$target_dir = '../student_requirements/' . $file;

			if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_dir)) {
				$sql = "INSERT INTO student_requirement_tbl (student_id, file_name, date_time, status) VALUES ('$student_id', '$file', '$current_time', 'Pending')";
				$sql_result = mysqli_query($conn, $sql);
			}
		}

		if ($sql_result) {
			header("Location: ../pages/profile.php?submit_success=Wait for the admin to review your requirements");
			exit();
		}
		else {
			echo "Submit error ".$conn->error;
		}
	}
?>