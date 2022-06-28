<?php
	if (isset($_FILES['profile_pic']) && isset($_POST['submit'])) {
		include "../db_conn.php";

		$profile_pic = time() . '_' . $_FILES["profile_pic"]["name"];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$phoneNum = $_POST['phoneNum'];
		$address = $_POST['address'];
		$zipCode = $_POST['zipCode'];
		$position = $_POST['position'];
		$subjects = $_POST['subjects'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confirmPass = $_POST['confirmPass'];

		$target_dir = '../faculties/' . $profile_pic;

		if (empty($fname) || empty($lname) || empty($email) || empty($phoneNum) || empty($address) || empty($zipCode) || empty($position) || empty($username) || empty($password) || empty($confirmPass)) {
			header("Location: ../add_faculty.php?error=Fill all required information");
			exit();
		}

		else {
			if ($confirmPass != $password) {
				header("Location: ../add_faculty.php?error=Password did not match");
				exit();
			}
			else {
				if(move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_dir)) {
					$sql = "INSERT INTO faculty_tbl (profile_pic, fname, lname, email, phoneNum, address, zipCode, position, subjects, username, password) VALUES ('$profile_pic','$fname','$lname','$email','$phoneNum','$address','$zipCode','$position', '$subjects','$username','$password')";
					$sql_result = mysqli_query($conn, $sql);

					if ($sql_result) {
						header("Location: ../faculty.php");
						exit();
					}
					else {
						echo "Error add faculty member";
					}
				}
			}
		}
	}

	if (isset($_FILES['upd_profile_pic']) && isset($_POST['upd_faculty_id']) && isset($_POST['submit'])) {
		include "../db_conn.php";

		$upd_faculty_id = $_POST['upd_faculty_id'];
		
		$upd_profile_pic = time() . '_' . $_FILES["upd_profile_pic"]["name"];
		$upd_fname = $_POST['upd_fname'];
		$upd_lname = $_POST['upd_lname'];
		$upd_email = $_POST['upd_email'];
		$upd_phoneNum = $_POST['upd_phoneNum'];
		$upd_address = $_POST['upd_address'];
		$upd_zipCode = $_POST['upd_zipCode'];
		$upd_position = $_POST['upd_position'];
		$upd_subjects = $_POST['upd_subjects'];

		$target_dir = '../faculties/' . $upd_profile_pic;

		if (empty($upd_fname) || empty($upd_lname) || empty($upd_email) || empty($upd_phoneNum) || empty($upd_address) || empty($upd_zipCode) || empty($upd_position) || empty($upd_subjects)) {
			header("Location: ../upd_faculty.php?error=Fill all required information");
			exit();
		}
		else if ($upd_profile_pic != "") {
			if(move_uploaded_file($_FILES["upd_profile_pic"]["tmp_name"], $target_dir)) {
				$sql = "UPDATE faculty_tbl SET profile_pic = '$upd_profile_pic', fname = '$upd_fname', lname = '$upd_lname', email = '$upd_email', phoneNum = '$upd_phoneNum', address = '$upd_address', zipCode = '$upd_zipCode', position = '$upd_position', subjects = '$upd_subjects' WHERE faculty_id = '$upd_faculty_id'";
				$sql_result = mysqli_query($conn, $sql);

				if ($sql_result) {
					header("Location: ../faculty.php");
					exit();
				}
				else {
					echo "Update faculty member error";
				}
			}
		}
		if ($_FILES['upd_profile_pic']['name'] == UPLOAD_ERR_OK) {
			$sql = "UPDATE faculty_tbl SET fname = '$upd_fname', lname = '$upd_lname', email = '$upd_email', phoneNum = '$upd_phoneNum', address = '$upd_address', zipCode = '$upd_zipCode', position = '$upd_position', subjects = '$upd_subjects' WHERE faculty_id = '$upd_faculty_id'";
			$sql_result = mysqli_query($conn, $sql);

			if ($sql_result) {
				header("Location: ../faculty.php");
				exit();
			}
			else {
				echo "Update faculty member error";
			}
		}
	}

	if (isset($_POST['upd_faculty_id_cred']) && isset($_POST['upd_credentials'])) {
		include "../db_conn.php";

		$upd_faculty_id_cred = $_POST['upd_faculty_id_cred'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		if (empty($username) || empty($password)) {
			header('Location: ../upd_faculty.php?' . http_build_query(array(
				    'faculty_id' => $_GET['faculty_id'],
				    'error_credential' => "Fill all required credentials"
				)));
			exit();
		}
		else {
			$sql = "UPDATE faculty_tbl SET username = '$username', password = '$password' WHERE faculty_id = '$upd_faculty_id_cred'";
			$sql_result = mysqli_query($conn, $sql);

			if ($sql_result) {
				header('Location: ../upd_faculty.php?' . http_build_query(array(
				    'faculty_id' => $_GET['faculty_id'],
				    'success_upd_cred' => "Successfully updated credentials"
				)));
				exit();
			}
			else {
				echo "Error update credentials";
			}
		}
	}

	if (isset($_POST['del_faculty_id']) && isset($_POST['delMember'])) {
		include "../db_conn.php";

		$del_faculty_id = $_POST['del_faculty_id'];

		$sql = "DELETE FROM faculty_tbl WHERE faculty_id = '$del_faculty_id'";
		$sql_result = mysqli_query($conn, $sql);

		if ($sql_result == TRUE) {
			header("Location: ../faculty.php");
			exit();
		}
		else {
			echo "Error delete faculty member";
		}
	}
?>