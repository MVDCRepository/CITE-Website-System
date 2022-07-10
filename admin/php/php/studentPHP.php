<?php
	if (isset($_POST['add_studentBtn'])) {
		include "../db_conn.php";

		$id_number = $_POST['id_number'];
		$password = $_POST['password'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$gender = $_POST['gender'];
		$b_date = $_POST['b_date'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$phoneNum = $_POST['phoneNum'];
		$guardian_name = $_POST['guardian_name'];
		$guardian_contact = $_POST['guardian_contact'];
		$lname = $_POST['lname'];
		$yr_lvl = $_POST['yr_lvl'];
		$cmoNo = $_POST['cmoNo'];
		$series = $_POST['series'];
		$status = $_POST['status'];

		if (empty($id_number) || empty($password) || empty($fname) || empty($mname) || empty($gender) || empty($b_date) || empty($address) || empty($email) || empty($phoneNum) || empty($guardian_name) || empty($guardian_contact) || empty($lname) || empty($yr_lvl) || empty($cmoNo) || empty($status) || empty($series)) {
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
					$sql = "INSERT INTO student_tbl (id_number, fname, lname, mname, gender, b_date, address, email, phoneNum, guardian_name, guardian_contact, cmoNo, series, yr_lvl, eval_status, status, password) VALUES ('$id_number', '$fname', '$lname', '$mname', '$gender', '$b_date', '$address', '$email', '$phoneNum', '$guardian_name', '$guardian_contact', '$cmoNo', '$series', '$yr_lvl', 'Evaluate', '$status', '$password')";

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

		$gender = $_POST['gender'];
		$b_date = $_POST['b_date'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$phoneNum = $_POST['phoneNum'];

		$lname = $_POST['lname'];
		$yr_lvl = $_POST['yr_lvl'];
		$cmoNo = $_POST['cmoNo'];
		$series = $_POST['series'];
		$status = $_POST['status'];

		if (empty($fname) || empty($mname) || empty($gender) || empty($b_date) || empty($address) || empty($email) || empty($phoneNum) || empty($lname) || empty($yr_lvl) || empty($cmoNo) || empty($series) || empty($status)) {
			header('Location: ../upd_student.php?' . http_build_query(array(
				    'student_id' => $_GET['student_id'],
				    'error_msg' => "Fill all inputs"
				)));
			exit();
		}
		else {
			$sql = "UPDATE student_tbl SET fname = '$fname', mname = '$mname', lname = '$lname', yr_lvl = '$yr_lvl', cmoNo = '$cmoNo', series = '$series', gender = '$gender', b_date = '$b_date', address = '$address', email = '$email', phoneNum = '$phoneNum', status = '$status' WHERE student_id = '$student_id'";

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

	if (isset($_POST['upd_studentGuardianBtn'])) {
		include "../db_conn.php";

		$student_id = $_POST['student_id'];

		$guardian_name = $_POST['guardian_name'];
		$guardian_contact = $_POST['guardian_contact'];

		if (empty($guardian_name) || empty($guardian_contact)) {
			header('Location: ../upd_student.php?' . http_build_query(array(
				    'student_id' => $_GET['student_id'],
				    'error_upd_guardian' => "Enter student guardian"
				)));
			exit();
		}
		else {
			$sql = "UPDATE student_tbl SET guardian_name = '$guardian_name', guardian_contact = '$guardian_contact' WHERE student_id = '$student_id'";
			$sql_result = mysqli_query($conn, $sql);

			if ($sql_result) {
				header('Location: ../upd_student.php?' . http_build_query(array(
				    'student_id' => $_GET['student_id'],
				    'success_upd_guardian' => "Updated Student Guardian"
				)));
				exit();
			}
			else {
				echo "error update student credentials";
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
			$sql = "UPDATE student_tbl SET eval_status = '$drop_student' WHERE student_id = '$student_id'";
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