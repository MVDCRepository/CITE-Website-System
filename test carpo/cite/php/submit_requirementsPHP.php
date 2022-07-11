<?php
	if (isset($_FILES['file_name']) && isset($_POST['submit_btn'])) {
		include "../db_conn.php";

		$sql_result = null;

    	date_default_timezone_set('Asia/Manila');
    	$current_time = date("Y-m-d H:i:s");
    	$date_time = strtotime($current_time);

		$checked_array = $_POST['req_id'];
		
		$total_file = count($_FILES['file_name']['name']);

		for($i=0 ; $i < $total_file ; $i++) {
			$student_id = $_POST['student_id'][$i];
			$requirement = $_POST['requirement'][$i];
			$file_name = time().'_'.$_FILES['file_name']['name'][$i];
			$target_dir = '../student_requirements/' . $file_name;

			$file_name = mysqli_real_escape_string($conn, $file_name);

			if (move_uploaded_file($_FILES['file_name']['tmp_name'][$i], $target_dir)) {
				$sql = "INSERT INTO student_requirement_tbl (student_id, requirement, file_name, date_time, status) VALUES ('$student_id', '$requirement', '$file_name', '$current_time', 'Pending')";
						$sql_result = mysqli_query($conn, $sql) or die ('Query failed: ' . mysqli_error($conn));
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