<?php
	if (isset($_FILES['upd_profile_pic']) && isset($_POST['upd_info'])) {
		include "../db_conn.php";

		$upd_profile_pic = time() . '_' . $_FILES["upd_profile_pic"]["name"];
		$admin_id = $_POST['admin_id'];
		$upd_fname = $_POST['upd_fname'];
		$upd_lname = $_POST['upd_lname'];
		$upd_email = $_POST['upd_email'];
		$upd_phoneNum = $_POST['upd_phoneNum'];
		$upd_address = $_POST['upd_address'];
		$upd_zipCode = $_POST['upd_zipCode'];

		$target_dir = '../faculties/' . $upd_profile_pic;

		if (empty($upd_fname) || empty($upd_lname) || empty($upd_email) || empty($upd_phoneNum) || empty($upd_address) || empty($upd_zipCode)) {
			header("Location: ../upd_admin.php?error=Fill all required information");
			exit();
		}
		else if ($upd_profile_pic != "") {
			if(move_uploaded_file($_FILES["upd_profile_pic"]["tmp_name"], $target_dir)) {
				$sql = "UPDATE admin_table SET profile_pic = '$upd_profile_pic', fname = '$upd_fname', lname = '$upd_lname', email = '$upd_email', phoneNum = '$upd_phoneNum', address = '$upd_address', zipCode = '$upd_zipCode' WHERE id = '$admin_id'";
				$sql_result = mysqli_query($conn, $sql);

				if ($sql_result) {
					header("Location: ../upd_admin.php?success_upd=Successfully Updated Information");
					exit();
				}
				else {
					echo "Update error";
				}
			}
		}
		if ($_FILES['upd_profile_pic']['name'] == UPLOAD_ERR_OK) {
			$sql = "UPDATE admin_table SET fname = '$upd_fname', lname = '$upd_lname', email = '$upd_email', phoneNum = '$upd_phoneNum', address = '$upd_address', zipCode = '$upd_zipCode' WHERE id = '$admin_id'";
			$sql_result = mysqli_query($conn, $sql);

			if ($sql_result) {
				header("Location: ../upd_admin.php?success_upd=Successfully Updated Information");
				exit();
			}
			else {
				echo "Update error";
			}
		}
	}
	

	if (isset($_POST['upd_adminCred']) && isset($_POST['upd_admin_id_cred'])) {
		include "../db_conn.php";

		$upd_admin_id_cred = $_POST['upd_admin_id_cred'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confirmPass = $_POST['confirmPass'];

		if (empty($username) || empty($password) || empty($confirmPass)) {
			header("Location: ../upd_adminCred.php?error_credential=Fill all inputs");
			exit();
		}
		else if ($confirmPass != $password) {
			header("Location: ../upd_adminCred.php?error_credential=Password did not match");
			exit();
		}
		else {
			$sql = "UPDATE admin_table SET username = '$username', password = '$password' WHERE id = '$upd_admin_id_cred'";
			$sql_result = mysqli_query($conn, $sql);

			if ($sql_result) {
				header("Location: ../upd_adminCred.php?success_upd_cred=Successfully updated credentials");
				exit();
			}
			else {
				echo "Error update admin credentials";
			}
		}
	}
?>