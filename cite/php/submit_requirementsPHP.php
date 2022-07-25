<?php
	if (isset($_FILES['file']) && isset($_POST['file_name']) && isset($_POST['send_reqBtn'])) {
		include "../db_conn.php";

		date_default_timezone_set('Asia/Manila');
    	$current_time = date("Y-m-d H:i:s");
    	$date_time = strtotime($current_time);

    	$student_id = $_POST['student_id'];
		$file_name = $_POST['file_name'];
		$file = time() . '_' . $_FILES["file"]["name"];

		$target_dir = '../student_requirements/' . $file;

		if (empty($file_name) || empty($file)) {
			header("Location: ../pages/profile.php?error_msg=Fill All Inputs");
			exit();
		}
		else {
			if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir)) {
				$sql = "INSERT INTO student_requirement_tbl (student_id, file_name, file, date_time, status) VALUES ('$student_id','$file_name','$file', '$current_time', 'Pending')";

				$sql_result = mysqli_query($conn, $sql) or die ('Query failed: ' . mysqli_error($conn));

				if ($sql_result) {
					header("Location: ../pages/profile.php");
					exit();
				}
				else {
					header("Location: ../pages/profile.php?error_msg=Error submit requirements.");
					exit();
				}
			}
		}
	}
?>