<?php
	if (isset($_POST['reserve_blckBtn'])) {
		include "../db_conn.php";

		$acad_yrValue = $_POST['acad_yrValue'];
		$yr_lvlValue = $_POST['yr_lvlValue'];
		$semValue = $_POST['semValue'];
		$block_id = $_POST['block_id'];
		$student_id = $_POST['student_id'];


		$total_reservationValue = $_POST['total_reservationValue'];
		$total_studentValue = $_POST['total_studentValue'];

		if (empty($acad_yrValue) || empty($yr_lvlValue) || empty($semValue) || empty($block_id) || empty($student_id)) {
			header("Location: ../pages/blocking.php?error_msg=To load the subjects, select semester and block");
			exit();
		}
		else if ($total_reservationValue >= $total_studentValue) {
			header("Location: ../pages/blocking.php?error_msg=Slot full. Select other block to reserve");
			exit();
		}
		else {
			$sql_duplicate_check = "SELECT * FROM reserve_block_tbl WHERE student_id = '$student_id' AND status = 'Pending'";
			$sql_duplicate_check_result = mysqli_query($conn, $sql_duplicate_check) or die ('Query failed: ' . mysqli_error($conn));

			if (mysqli_num_rows($sql_duplicate_check_result) > 0) {
				header("Location: ../pages/blocking.php?error_msg=Unable to reserve block");
				exit();
			}
			else {
				$sql = "INSERT INTO reserve_block_tbl (block_id, student_id, status) VALUES ('$block_id', '$student_id', 'Pending')";
				$sql_result = mysqli_query($conn, $sql) or die ('Query failed: ' . mysqli_error($conn));

				if ($sql_result) {
					header("Location: ../pages/blocking.php?success_msg=Your request is now submitted");
					exit();
				}
				else {
					echo "Error reserve block";
				}
			}
		}
	}

	if (isset($_POST['cancel_reqBtn'])) {
		include "../db_conn.php";

		$reserve_id = $_POST['reserve_id'];

		if (empty($reserve_id)) {
			header("Location: ../pages/blocking.php?error_msg=Error Update Request");
			exit();
		}
		else {
			$sql = "UPDATE reserve_block_tbl SET status = 'Cancelled' WHERE id = '$reserve_id'";
			$sql_result = mysqli_query($conn, $sql);

			if ($sql_result) {
				header("Location: ../pages/blocking.php?success_msg=Cancelled Request");
				exit();
			}
		}
	}
?>