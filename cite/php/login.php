<?php

session_start();
include "../db_conn.php";
if (isset($_POST['id_number']) && isset($_POST['password'])) {
	
	function validate($data) {
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	$id_number = validate($_POST['id_number']);
	$password = validate($_POST['password']);

	if (empty($id_number) && empty($password)) {
		header("Location: ../login.php?error=ID Number and Password is required");
		exit();
	}
	else if (empty($id_number)) {
		header("Location: ../login.php?error=ID Number is required");
		exit();
	}
	else if (empty($password)) {
		header("Location: ../login.php?error=Password is required");
		exit();
	}
	else {
		$sql = "SELECT
				student_pri_info_tbl.student_id,
				student_pri_info_tbl.id_number,
				student_pri_info_tbl.fname,
				student_pri_info_tbl.mname,
				student_pri_info_tbl.lname,
				student_pri_info_tbl.sname,
				student_pri_info_tbl.province,
				student_pri_info_tbl.city,
				student_pri_info_tbl.barangay,
				student_pri_info_tbl.house_num,
				student_pri_info_tbl.status,
				student_pri_info_tbl.yr_lvl,
				student_pri_info_tbl.eval_status,
				student_pri_info_tbl.id_number,
				student_pri_info_tbl.password,

				student_basic_info_tbl.contact_num

				FROM student_pri_info_tbl

				INNER JOIN student_basic_info_tbl ON student_pri_info_tbl.student_id = student_basic_info_tbl.student_id

				WHERE student_pri_info_tbl.id_number='$id_number' AND student_pri_info_tbl.password='$password'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {

			$row = mysqli_fetch_assoc($result);

			if ($row['id_number'] === $id_number && $row['password'] === $password) {
				$_SESSION['std_student_id'] = $row['student_id'];
				$_SESSION['std_id_number'] = $row['id_number'];
				$_SESSION['std_fname'] = $row['fname'];
				$_SESSION['std_mname'] = $row['mname'];
				$_SESSION['std_lname'] = $row['lname'];
				$_SESSION['std_sname'] = $row['sname'];
				$_SESSION['std_province'] = $row['province'];
				$_SESSION['std_city'] = $row['city'];
				$_SESSION['std_barangay'] = $row['barangay'];
				$_SESSION['std_house_num'] = $row['house_num'];
				$_SESSION['std_yr_lvl'] = $row['yr_lvl'];
				$_SESSION['std_eval_status'] = $row['eval_status'];
				$_SESSION['std_status'] = $row['status'];

				$_SESSION['std_contact_num'] = $row['contact_num'];
				header("Location: ../pages/index.php");
				exit();
			}
			else {
				header("Location: ../login.php?error=Incorrect ID Number or password");
				exit();
			}
		}
		else {
			header("Location: ../login.php?error=Incorrect ID Number or password");
			exit();
		}
	}
}
else {
	header("Location: ../login.php");
	exit();
}

?>