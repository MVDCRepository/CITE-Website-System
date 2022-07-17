<?php
	if (isset($_POST['add_blockBtn'])) {
		include "../db_conn.php";

		$sql_result = null;

		$block_no = $_POST['block_no'];
		$yr_lvl = $_POST['yr_lvl'];
		$sem = $_POST['sem'];
		$acad_id = $_POST['acad_id'];
		$total_student = $_POST['total_student'];
		$eval_id = $_POST['eval_id'];

		$checked_array = $_POST['sched_id'];

		if (empty($block_no) || empty($yr_lvl) || empty($sem) || empty($acad_id) || empty($total_student) || empty($eval_id)) {
			header("Location: ../add_schedule.php?error_msg=Fill all inputs");
			exit();
		}
		else {

			$sql_add_block = "INSERT INTO blocking_tbl (block_no, yr_lvl, sem, acad_id, total_student, eval_id) VALUES ('$block_no', '$yr_lvl', '$sem', '$acad_id', '$total_student', '$eval_id')";
			$sql_result_addBlock = mysqli_query($conn, $sql_add_block);

			$block_id = mysqli_insert_id($conn);

			if ($sql_result_addBlock) {
				foreach ($_POST['subj_id'] as $key => $value) {
					if (in_array($_POST['subj_id'][$key], $checked_array)) {

						$subj_id = $_POST['subj_id'][$key];
						$start_time = $_POST['start_time'][$key];
						$end_time = $_POST['end_time'][$key];
						$days = $_POST['days'][$key];

						$sql = "INSERT INTO blocking_subj_tbl (block_id, subj_id, start_time, end_time, days) VALUES ('$block_id' ,'$subj_id', '$start_time', '$end_time', '$days')";
						$sql_result = mysqli_query($conn, $sql);
					}
				}
				
				if ($sql_result) {
					header("Location: ../add_schedule.php?success_msg=Block and schedule created");
					exit();
				}
				else {
					echo "error create blocking";
				}
			}
			else {
				echo  "Error create blocking";
			}
		}
	}
?>