<?php
	if (isset($_POST['accept_req_btn'])) {
		include "../db_conn.php";

		$accept_req_id = $_POST['accept_req_id'];

		if (empty($accept_req_id)) {
			header('Location: ../view_student_req.php?' . http_build_query(array(
				    'student_id' => $_GET['student_id'],
				    'error_msg' => "Error update requirement status"
			)));
			exit();
		}
		else {
			$sql = "UPDATE student_requirement_tbl SET status = 'Confirmed' WHERE req_id = '$accept_req_id'";
			$sql_result = mysqli_query($conn, $sql);

			if ($sql_result) {
				header('Location: ../view_student_req.php?' . http_build_query(array(
				    'student_id' => $_GET['student_id'],
				    'success_msg' => "Requirement Confirmed"
				)));
				exit();
			}
			else {
				echo 'Error update requirement status';
			}
		}
	}

	if (isset($_POST['dec_req_btn'])) {
		include "../db_conn.php";

		$dec_req_id = $_POST['dec_req_id'];

		if (empty($dec_req_id)) {
			header('Location: ../view_student_req.php?' . http_build_query(array(
				    'student_id' => $_GET['student_id'],
				    'error_msg' => "Error update requirement status"
			)));
			exit();
		}
		else {
			$sql = "UPDATE student_requirement_tbl SET status = 'Declined' WHERE req_id = '$dec_req_id'";
			$sql_result = mysqli_query($conn, $sql);

			if ($sql_result) {
				header('Location: ../view_student_req.php?' . http_build_query(array(
				    'student_id' => $_GET['student_id'],
				    'error_msg' => "Requirement Declined"
				)));
				exit();
			}
			else {
				echo 'Error update requirement status';
			}
		}
	}
?>