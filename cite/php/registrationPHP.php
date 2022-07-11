<?php
	if (isset($_POST['register_btn'])) {
		include "../db_conn.php";

		$id_number = $_POST['id_number'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$mname = $_POST['mname'];
		$gender = $_POST['gender'];
		$b_date = $_POST['b_date'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$phoneNum = $_POST['phoneNum'];
		$guardian_name = $_POST['guardian_name'];
		$guardian_contact = $_POST['guardian_contact'];
		$yr_lvl = $_POST['yr_lvl'];
		$status = $_POST['status'];
		$password = $_POST['password'];
		$confirmPass = $_POST['confirmPass'];

		if (empty($id_number) || empty($fname) || empty($lname) || empty($mname) || empty($gender) || empty($b_date) || empty($address) || empty($email) || empty($phoneNum) || empty($guardian_name) || empty($guardian_contact) || empty($yr_lvl) || empty($status) || empty($password)) {
			header("Location: ../registration.php?error_msg=Fill all inputs");
			exit();
		}
		else if ($confirmPass != $password) {
			header("Location: ../registration.php?error_msg=Password did not match");
			exit();
		}
		else {
			$sql = "INSERT INTO student_tbl (id_number, fname, lname, mname, gender, b_date, address, email, phoneNum, guardian_name, guardian_contact, cmoNo, series, yr_lvl, eval_status, status, password) VALUES ('$id_number', '$fname', '$lname', '$mname', '$gender', '$b_date', '$address', '$email', '$phoneNum', '$guardian_name', '$guardian_contact', NULL, NULL, '$yr_lvl', 'Evaluate', '$status', '$password')";
			$sql_result = mysqli_query($conn, $sql);

			if ($sql_result) {
				header("Location: ../registration.php?success_msg=Successfully Registered");
				exit();
			}
			else {
				header("Location: ../registration.php?error_msg=Register Error");
				exit();
			}
		}
	}
?>