<?php
	if (isset($_POST['unload_studentBtn'])) {
		include "../db_conn.php";

		$student_id = $_POST['student_id'];

		if (empty($student_id)) {
			echo "Error unload student";
		}
		else {
			$sql = "UPDATE reserve_block_tbl SET status = 'Unload' WHERE student_id = '$student_id'";
			$sql_result = mysqli_query($conn, $sql);

			if ($sql_result) {
				header('Location: ../view_blockSched.php?' . http_build_query(array(
				    'block_id' => $_GET['block_id'],
				    'block_no' => $_GET['block_no'],
				    'yr_lvl' => $_GET['yr_lvl'],
				    'sem' => $_GET['sem'],
				    'acad_id' => $_GET['acad_id'],
				    'success_msg' => "Student unloaded"
				)));
				exit();
			}
		}
	}

	if (isset($_POST['accept_studentBtn'])) {
		include "../db_conn.php";

		$accept_student_id = $_POST['accept_student_id'];

		if (empty($accept_student_id)) {
			echo "Error accept student";
		}
		else {
			$sql = "UPDATE reserve_block_tbl SET status = 'Accept' WHERE student_id = '$accept_student_id'";
			$sql_result = mysqli_query($conn, $sql);

			if ($sql_result) {
				header('Location: ../view_blockSched.php?' . http_build_query(array(
				    'block_id' => $_GET['block_id'],
				    'block_no' => $_GET['block_no'],
				    'yr_lvl' => $_GET['yr_lvl'],
				    'sem' => $_GET['sem'],
				    'acad_id' => $_GET['acad_id'],
				    'success_msg' => "Student accepted"
				)));
				exit();
			}
		}
	}
?>