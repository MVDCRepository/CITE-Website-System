<?php
	if (isset($_POST['eval_studentBtn'])) {
		include "../db_conn.php";

		$upd_student_id = $_POST['upd_student_id'];
		
		$student_id = $_POST['student_id'];
		$subj_id = $_POST['subj_id'];
		$grade = $_POST['grade'];

		foreach ($student_id as $index => $student_ids) {
			$s_student_id = $student_ids;
			$s_subj_id = $subj_id[$index];
			$s_grade = $grade[$index];

			$sql = "INSERT INTO student_grade_tbl (student_id, subj_id, grade) VALUES ('$s_student_id', '$s_subj_id', '$s_grade')";
			$sql_result = mysqli_query($conn, $sql) or die ('Query failed: ' . mysqli_error($conn));
		}

		if ($sql_result) {

			$sql_update_student_status = "UPDATE student_pri_info_tbl SET eval_status = 'Evaluated' WHERE student_id = '$upd_student_id'";
			$sql_update_student_status_result = mysqli_query($conn, $sql_update_student_status) or die ('Query failed: ' . mysqli_error($conn));

			if ($sql_update_student_status_result) {
				header('Location: ../students.php?success_msg=Student Evaluated');
				exit();
			}
			else {
				echo "Error update student status";
			}
		}
		else {
			echo "Error Evaluate Student";
		}
	}

	if (isset($_POST['upd_eval_studentBtn'])) {
		include "../db_conn.php";
		
		$student_id = $_POST['student_id'];
		$subj_id = $_POST['subj_id'];
		$grade = $_POST['grade'];

		foreach ($student_id as $index => $student_ids) {
			$s_student_id = $student_ids;
			$s_subj_id = $subj_id[$index];
			$s_grade = $grade[$index];

			$sql = "UPDATE student_grade_tbl SET grade = '$s_grade' WHERE student_id = '$s_student_id' AND subj_id = '$s_subj_id'";
			$sql_result = mysqli_query($conn, $sql) or die ('Query failed: ' . mysqli_error($conn));
		}

		if ($sql_result) {
			header('Location: ../students.php?success_msg=Updated Student Evaluation');
			exit();
		}
		else {
			echo "Error Evaluate Student";
		}
	}

?>