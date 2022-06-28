<?php
	if (isset($_POST['add_studentBtn'])) {
		include "../db_conn.php";

		$id_number = $_POST['id_number'];
		$password = $_POST['password'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		$yr_lvl = $_POST['yr_lvl'];
		$cmoNo = $_POST['cmoNo'];
		$series = $_POST['series'];

		if (empty($id_number) || empty($password) || empty($fname) || empty($mname) || empty($lname) || empty($yr_lvl) || empty($cmoNo) || empty($series)) {
			header("Location: ../add_student.php?error_msg=Fill all inputs");
			exit();
		}
		else {
			if ($id_number !="") {
				$sql_check_duplicate = "SELECT * FROM student_tbl WHERE id_number = '$id_number'";
				$sql_check_duplicate_result = mysqli_query($conn, $sql_check_duplicate);

				if (mysqli_num_rows($sql_check_duplicate_result) > 0) {
					header("Location: ../add_student.php?error_msg=ID number already exist");
					exit();
				}
				else {
					$sql = "INSERT INTO student_tbl (id_number, fname, lname, mname, cmoNo, series, yr_lvl, status, password) VALUES ('$id_number', '$fname', '$lname', '$mname', '$cmoNo', '$series', '$yr_lvl', 'Evaluate', '$password')";

					$sql_result = mysqli_query($conn, $sql) or die ('Query failed: ' . mysqli_error($conn));

					if ($sql_result) {
						header("Location: ../add_student.php?success_msg=Added New Student");
						exit();
					}
					else {
						echo "Error adding of student";
					}
				}
			}
		}		
	}

	if (isset($_POST['upd_studentBtn'])) {
		include "../db_conn.php";

		$student_id = $_POST['student_id'];

		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		$yr_lvl = $_POST['yr_lvl'];
		$cmoNo = $_POST['cmoNo'];
		$series = $_POST['series'];

		if (empty($fname) || empty($mname) || empty($fname) || empty($yr_lvl) || empty($cmoNo) || empty($series)) {
			header('Location: ../upd_student.php?' . http_build_query(array(
				    'student_id' => $_GET['student_id'],
				    'error_msg' => "Fill all inputs"
				)));
			exit();
		}
		else {
			$sql = "UPDATE student_tbl SET fname = '$fname', mname = '$mname', lname = '$lname', yr_lvl = '$yr_lvl', cmoNo = '$cmoNo', series = '$series' WHERE student_id = '$student_id'";

			$sql_result = mysqli_query($conn, $sql);

			if ($sql_result) {
				header('Location: ../upd_student.php?' . http_build_query(array(
				    'student_id' => $_GET['student_id'],
				    'success_msg' => "Updated Student Information"
				)));
				exit();
			}
			else {
				echo "error update student";
			}
		}
	}

	if (isset($_POST['upd_studentCredBtn'])) {
		include "../db_conn.php";

		$student_id = $_POST['student_id'];

		$id_number = $_POST['id_number'];
		$password = $_POST['password'];

		if (empty($id_number) || empty($password)) {
			header('Location: ../upd_student.php?' . http_build_query(array(
				    'student_id' => $_GET['student_id'],
				    'error_upd_cred' => "Enter student credentials"
				)));
			exit();
		}
		else {
			$sql = "UPDATE student_tbl SET id_number = '$id_number', password = '$password' WHERE student_id = '$student_id'";
			$sql_result = mysqli_query($conn, $sql);

			if ($sql_result) {
				header('Location: ../upd_student.php?' . http_build_query(array(
				    'student_id' => $_GET['student_id'],
				    'success_upd_cred' => "Updated Student Credentials"
				)));
				exit();
			}
			else {
				echo "error update student credentials";
			}
		}
	}

	if (isset($_POST['remove_studentBtn'])) {
		include "../db_conn.php";

		$student_id = $_POST['student_id'];
		$drop_student = $_POST['drop_student'];

		if (empty($drop_student)) {
			header('Location: ../upd_student.php?' . http_build_query(array(
			    'student_id' => $_GET['student_id'],
			    'error_upd_status' => "Error Update status"
			)));
			exit();
		}
		else {
			$sql = "UPDATE student_tbl SET status = '$drop_student' WHERE student_id = '$student_id'";
			$sql_result = mysqli_query($conn, $sql);

			if ($sql_result) {
				header('Location: ../upd_student.php?' . http_build_query(array(
				    'student_id' => $_GET['student_id'],
				    'error_upd_status' => "Updated Student Status"
				)));
				exit();
			}
			else {
				echo "Error update student status";
			}
		}
	}
?>