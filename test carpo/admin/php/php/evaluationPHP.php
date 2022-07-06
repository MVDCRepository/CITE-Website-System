<?php
	// evaluation CMO and sereies
	if (isset($_POST['save_evalBtn'])) {
		include "../db_conn.php";

		$cmoNo = $_POST['cmoNo'];
		$series = $_POST['series'];

		if (empty($cmoNo) || empty($series)) {
			header("Location: ../add_evaluation.php?error=Fill all inputs");
			exit();
		}
		else {
			$sql = "INSERT INTO eval_cmo_series_tbl (cmoNo, series) VALUES ('$cmoNo', '$series')";
			$sql_result = mysqli_query($conn, $sql);

			if ($sql_result) {
				header("Location: ../evaluation.php");
				exit();
			}
			else {
				echo "Error add evaluation";
			}
		}
	}

	if (isset($_POST['upd_evalBtn'])) {
		include "../db_conn.php";

		$upd_eval_id = $_POST['upd_eval_id'];
		$upd_cmoNo = $_POST['upd_cmoNo'];
		$upd_series = $_POST['upd_series'];

		if (empty($upd_cmoNo) || empty($upd_series)) {
			header('Location: ../upd_evaluation.php?' . http_build_query(array(
				    'eval_id' => $_GET['eval_id'],
				    'error' => "Fill all inputs"
				)));
			exit();
		}
		else {
			$sql = "UPDATE eval_cmo_series_tbl SET cmoNo = '$upd_cmoNo', series = '$upd_series' WHERE eval_id = '$upd_eval_id'";
			$sql_result = mysqli_query($conn, $sql);

			if ($sql_result) {
				header('Location: ../upd_evaluation.php?' . http_build_query(array(
				    'eval_id' => $_GET['eval_id'],
				    'success_msg' => "Successfully updated CMO and Series"
				)));
				exit();
			}
			else {
				echo "Error updating CHED Memorandum No and Series";
			}
		}
	}

	if (isset($_POST['del_evalBtn'])) {
		include "../db_conn.php";

		$del_eval_id = $_POST['del_eval_id'];

		$sql = "DELETE FROM eval_cmo_series_tbl WHERE eval_id = '$del_eval_id'";
		$sql_result = mysqli_query($conn, $sql);

		if ($sql_result) {
			header("Location: ../evaluation.php");
			exit();
		}
		else {
			header("Location: ../evaluation.php?error_msg=Subjects under this CMO No. and series is being used.<script src='js/evaluationJS.js' onLoad='show_delete_notif();'></script>");
			exit();
		}
	}


	// subjects
	if (isset($_POST['add_sub'])) {
		include "../db_conn.php";

		$eval_id = $_POST['eval_id'];
		$courseCode = $_POST['courseCode'];
		$courseDesc = mysqli_real_escape_string($conn, $_POST['courseDesc']);
		$units = $_POST['units'];
		$lec = $_POST['lec'];
		$lab = $_POST['lab'];
		$pre_requisites = $_POST['pre_requisites'];
		$yr_lvl = $_POST['yr_lvl'];
		$sem = $_POST['sem'];

		if (empty($courseCode) || empty($courseDesc) || empty($units) || empty($lec) || empty($lab) || empty($yr_lvl) || empty($sem)) {
			header('Location: ../view_subjects.php?' . http_build_query(array(
				    'eval_id' => $_GET['eval_id'],
				    'error' => "Fill all inputs"
				)));
			exit();
		}
		else if ($pre_requisites != "") {
			$sql = "INSERT INTO subject_tbl (eval_id, courseCode, courseDesc, units, lec, lab, pre_requisites, yr_lvl, sem) VALUES ('$eval_id', '$courseCode', '$courseDesc', '$units', '$lec', '$lab', '$pre_requisites', '$yr_lvl', '$sem')";
			$sql_result = mysqli_query($conn, $sql) or die('Query failed: ' . mysqli_error($conn));

			if ($sql_result) {
				header('Location: ../view_subjects.php?' . http_build_query(array(
				    'eval_id' => $_GET['eval_id'],
				    'success_msg' => "Successfully added subject"
				)));
			exit();
			}
			else {
				echo "Error adding subject";
			}
		}
		else if ($lab == "N/A") {
			$sql = "INSERT INTO subject_tbl (eval_id, courseCode, courseDesc, units, lec, lab, pre_requisites, yr_lvl, sem) VALUES ('$eval_id', '$courseCode', '$courseDesc', '$units', '$lec', 0, '$pre_requisites', '$yr_lvl', '$sem')";
			$sql_result = mysqli_query($conn, $sql) or die('Query failed: ' . mysqli_error($conn));

			if ($sql_result) {
				header('Location: ../view_subjects.php?' . http_build_query(array(
				    'eval_id' => $_GET['eval_id'],
				    'success_msg' => "Successfully added subject"
				)));
			exit();
			}
			else {
				echo "Error adding subject";
			}
		}
		// else {
		// 	$sql = "INSERT INTO subject_tbl (eval_id, courseCode, courseDesc, units, lec, lab, pre_requisites, yr_lvl, sem) VALUES ('$eval_id', '$courseCode', '$courseDesc', '$units', '$lec', '$lab', 'None', '$yr_lvl', '$sem')";
		// 	$sql_result = mysqli_query($conn, $sql) or die ('Query failed: ' . mysqli_error($conn));

		// 	if ($sql_result) {
		// 		header('Location: ../view_subjects.php?' . http_build_query(array(
		// 		    'eval_id' => $_GET['eval_id'],
		// 		    'success_msg' => "Successfully added subject"
		// 		)));
		// 	exit();
		// 	}
		// 	else {
		// 		echo "Error adding subject";
		// 	}
		// }
	}

	if (isset($_POST['upd_subBtn'])) {
		include "../db_conn.php";

		$upd_subj_id = $_POST['upd_subj_id'];
		$upd_courseCode = $_POST['upd_courseCode'];
		$upd_courseDesc = mysqli_real_escape_string($conn, $_POST['upd_courseDesc']);
		$upd_units = $_POST['upd_units'];
		$upd_lec = $_POST['upd_lec'];
		$upd_lab = $_POST['upd_lab'];
		$upd_pre_requisites = $_POST['upd_pre_requisites'];
		$upd_yr_lvl = $_POST['upd_yr_lvl'];
		$upd_sem = $_POST['upd_sem'];

		if (empty($upd_courseCode) || empty($upd_courseDesc) || empty($upd_units) || empty($upd_sem) || empty($upd_lec) || empty($upd_lab) || empty($upd_yr_lvl)) {
			header('Location: ../upd_subjects.php?' . http_build_query(array(
				    'subj_id' => $_GET['subj_id'],
				    'error' => "Fill all inputs"
				)));
			exit();
		}
		else if ($upd_pre_requisites != "") {
			$sql = "UPDATE subject_tbl SET courseCode = '$upd_courseCode', courseDesc = '$upd_courseDesc', units = '$upd_units', lec = '$upd_lec', lab = '$upd_lab', pre_requisites = '$upd_pre_requisites', yr_lvl = '$upd_yr_lvl', sem = '$upd_sem' WHERE subj_id = '$upd_subj_id'";

			$sql_result = mysqli_query($conn, $sql) or die ('Query failed: ' . mysqli_error($conn));

			if ($sql_result) {
				header('Location: ../upd_subjects.php?' . http_build_query(array(
				    'subj_id' => $_GET['subj_id'],
				    'success_msg' => "Successfully Updated Subject"
				)));
				exit();
			}
		}
		else if ($upd_lab == "N/A") {
			$sql = "UPDATE subject_tbl SET courseCode = '$upd_courseCode', courseDesc = '$upd_courseDesc', units = '$upd_units', lec = '$upd_lec', lab = 0, pre_requisites = '$upd_pre_requisites', yr_lvl = '$upd_yr_lvl', sem = '$upd_sem' WHERE subj_id = '$upd_subj_id'";

			$sql_result = mysqli_query($conn, $sql) or die ('Query failed: ' . mysqli_error($conn));

			if ($sql_result) {
				header('Location: ../upd_subjects.php?' . http_build_query(array(
				    'subj_id' => $_GET['subj_id'],
				    'success_msg' => "Successfully Updated Subject"
				)));
				exit();
			}
		}
		// else {
		// 	$sql = "UPDATE subject_tbl SET courseCode = '$upd_courseCode', courseDesc = '$upd_courseDesc', units = '$upd_units', lec = '$upd_lec', lab = '$upd_lab', pre_requisites = 'None', yr_lvl = '$upd_yr_lvl', sem = '$upd_sem' WHERE subj_id = '$upd_subj_id'";

		// 	$sql_result = mysqli_query($conn, $sql) or die ('Query failed: ' . mysqli_error($conn));;

		// 	if ($sql_result) {
		// 		header('Location: ../upd_subjects.php?' . http_build_query(array(
		// 		    'subj_id' => $_GET['subj_id'],
		// 		    'success_msg' => "Successfully Updated Subject <a href='../view_subjects.php'>Go Back</a>"
		// 		)));
		// 		exit();
		// 	}
		// }
	}

	if (isset($_POST['del_subjectBtn'])) {
		include "../db_conn.php";

		$del_subj_id = $_POST['del_subj_id'];

		$sql = "DELETE FROM subject_tbl WHERE subj_id = '$del_subj_id'";
		$sql_result = mysqli_query($conn, $sql);

		if ($sql_result == TRUE) {
			header('Location: ../view_subjects.php?' . http_build_query(array(
				    'eval_id' => $_GET['eval_id'],
				    'del_sub_msg' => "Successfully deleted subject"
			)));
			exit();
		}
		else {
			echo "Error delete subject";
		}
	}

	// Academic year
	if (isset($_POST['save_acadBtn'])) {
		include "../db_conn.php";

		$acad_yr = $_POST['acad_yr'];
		$status = $_POST['status'];

		if (empty($acad_yr) || empty($status)) {
			header("Location: ../add_evaluation.php?acad_error=Fill all inputs");
		}
		else {
			$sql = "INSERT INTO acad_yr_tbl (acad_yr, status) VALUES ('$acad_yr', '$status')";
			$sql_result = mysqli_query($conn, $sql);

			if ($sql_result) {
				header("Location: ../add_evaluation.php?acad_success_msg=Added new academic year");
				exit();
			}
			else {
				echo "Error adding academic year";
			}
		}
	}

	if (isset($_POST['upd_acadBtn'])) {
		include "../db_conn.php";

		$upd_acad_id = $_POST['upd_acad_id'];

		$upd_acad_yr = $_POST['upd_acad_yr'];
		$upd_status = $_POST['upd_status'];

		if (empty($upd_acad_yr) || empty($upd_status)) {
			header('Location: ../upd_acadYr.php?' . http_build_query(array(
			    'acad_id' => $_GET['acad_id'],
			    'acad_error' => "Fill all inputs"
			)));
			exit();
		}
		else {
			$sql = "UPDATE acad_yr_tbl SET acad_yr = '$upd_acad_yr', status = '$upd_status' WHERE acad_id = '$upd_acad_id'";
			$sql_result = mysqli_query($conn, $sql);

			if ($sql_result) {
				header('Location: ../upd_acadYr.php?' . http_build_query(array(
				    'acad_id' => $_GET['acad_id'],
				    'acad_success_msg' => "Updated academic year"
				)));
				exit();
			}
			else {
				echo "Error update academic year";
			}
		}
	}

	if (isset($_POST['del_ayBtn'])) {
		include "../db_conn.php";

		$del_acad_id = $_POST['del_acad_id'];

		$sql = "DELETE FROM acad_yr_tbl WHERE acad_id = '$del_acad_id'";
		$sql_result = mysqli_query($conn, $sql);

		if ($sql_result) {
			header("Location: ../evaluation.php?acad_error=Deleted academic year");
			exit();
		}
		else {
			header("Location: ../evaluation.php?error_msg=Subjects under this CMO No. and series is being used.<script src='js/evaluationJS.js' onLoad='show_delete_notif();'></script>");
			exit();
		}
	}
?>