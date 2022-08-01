<?php
	// freshmen or regular registration
	if (isset($_POST['add_studentBtn'])) {
		include "../db_conn.php";

		// primary information
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		$sname = $_POST['sname'];
		$province = $_POST['province'];
		$city = $_POST['city'];
		$barangay = $_POST['barangay'];
		$house_num = $_POST['house_num'];
		$zip_code = $_POST['zip_code'];
		// basic information
		$bdate = $_POST['bdate'];
		$nationality = $_POST['nationality'];
		$birth_province = $_POST['birth_province'];
		$birth_city = $_POST['birth_city'];
		$birth_barangay = $_POST['birth_barangay'];
		$birth_house_num = $_POST['birth_house_num'];
		$birth_zip_code = $_POST['birth_zip_code'];
		$email = $_POST['email'];
		$contact_num = $_POST['contact_num'];
		$gender = $_POST['gender'];
		$religion = $_POST['religion'];
		// family information
		$father_fname = $_POST['father_fname'];
		$father_mname = $_POST['father_mname'];
		$father_lname = $_POST['father_lname'];
		$father_sname = $_POST['father_sname'];
		$father_contact = $_POST['father_contact'];
		$father_occupation = $_POST['father_occupation'];

		$mother_fname = $_POST['mother_fname'];
		$mother_mname = $_POST['mother_mname'];
		$mother_lname = $_POST['mother_lname'];
		$mother_contact = $_POST['mother_contact'];
		$mother_occupation = $_POST['mother_occupation'];
		// guardian info
		$guardian_fname = $_POST['guardian_fname'];
		$guardian_mname = $_POST['guardian_mname'];
		$guardian_lname = $_POST['guardian_lname'];
		$guardian_sname = $_POST['guardian_sname'];
		$guardian_contact = $_POST['guardian_contact'];
		$guardian_occupation = $_POST['guardian_occupation'];
		$guardian_relationship = $_POST['guardian_relationship'];

		$spouse_fname = $_POST['spouse_fname'];
		$spouse_mname = $_POST['spouse_mname'];
		$spouse_lname = $_POST['spouse_lname'];
		$spouse_sname = $_POST['spouse_sname'];
		$spouse_contact = $_POST['spouse_contact'];
		$spouse_occupation = $_POST['spouse_occupation'];
		// academic info
		$eval_id = $_POST['eval_id'];
		$yr_lvl = $_POST['yr_lvl'];
		$status = $_POST['status'];
		$course = $_POST['course'];
		$strand = $_POST['strand'];
		$second_course = $_POST['second_course'];
		$graduated_shs = $_POST['graduated_shs'];
		$learners_ref_num = $_POST['learners_ref_num'];
		$graduated_es = $_POST['graduated_es'];
		$form_138 = $_POST['form_138'];
		$graduated_year_es = $_POST['graduated_year_es'];
		// student credentials
		$id_number = $_POST['id_number'];
		$password = $_POST['password'];

		if (empty($fname) || empty($lname) || empty($province) || empty($city) || empty($barangay) || empty($zip_code) || empty($bdate) || empty($nationality) || empty($birth_province) || empty($birth_city) || empty($birth_zip_code) || empty($email) || empty($contact_num) || empty($gender) || empty($guardian_fname) || empty($guardian_lname) || empty($guardian_relationship) || empty($eval_id) || empty($yr_lvl) || empty($status) || empty($course) || empty($strand) || empty($second_course) || empty($graduated_shs) || empty($graduated_es) || empty($graduated_year_es) || empty($id_number) || empty($password)) {
			header("Location: ../add_student.php?error_msg=Fill All Inputs");
			exit();
		}
		else {
			// queries
			$sql_primary_info = "INSERT INTO student_pri_info_tbl (id_number, yr_lvl, fname, mname, lname, sname, province, city, barangay, house_num, zip_code, eval_status, status, password) VALUES ('$id_number', '$yr_lvl', '$fname', '$mname', '$lname', '$sname', '$province', '$city', '$barangay', '$house_num', '$zip_code', 'Evaluate', '$status','$password')";
			$sql_primary_info_result = mysqli_query($conn, $sql_primary_info);

			$student_id = mysqli_insert_id($conn);

			if ($sql_primary_info_result) {
				// queries
				$sql_basic_info = "INSERT INTO student_basic_info_tbl (student_id, bdate, nationality, birth_province, birth_city, birth_barangay, birth_house_num, birth_zip_code, email, contact_num, gender, religion) VALUES ('$student_id', '$bdate', '$nationality', '$birth_province', '$birth_city', '$birth_barangay', '$birth_house_num', '$birth_zip_code', '$email', '$contact_num', '$gender', '$religion')";

				$sql_family_info = "INSERT INTO student_fam_info_tbl (student_id, father_fname, father_mname, father_lname, father_sname, father_contact, father_occupation, mother_fname, mother_mname, mother_lname, mother_contact, mother_occupation) VALUES ('$student_id', '$father_fname', '$father_mname', '$father_lname', '$father_sname', '$father_contact', '$father_occupation', '$mother_fname', '$mother_mname', '$mother_lname', '$mother_contact', '$mother_occupation')";

				$sql_guardian_info = "INSERT INTO student_guardian_info_tbl (student_id, guardian_fname, guardian_mname, guardian_lname, guardian_sname, guardian_contact, guardian_occupation, guardian_relationship, spouse_fname, spouse_mname, spouse_lname, spouse_sname, spouse_contact, spouse_occupation) VALUES ('$student_id', '$guardian_fname', '$guardian_mname', '$guardian_lname', '$guardian_sname', '$guardian_contact', '$guardian_occupation', '$guardian_relationship', '$spouse_fname', '$spouse_mname', '$spouse_lname', '$spouse_sname', '$spouse_contact', '$spouse_occupation')";

				$sql_academic_info = "INSERT INTO student_acad_info_tbl (student_id, course, strand, second_course, graduated_shs, learners_ref_num, graduated_es, form_138, graduated_year_es, eval_id) VALUES ('$student_id', '$course', '$strand', '$second_course', '$graduated_shs', '$learners_ref_num', '$graduated_es', '$form_138', '$graduated_year_es', '$eval_id')";

				// sql results
				$sql_basic_info_result = mysqli_query($conn, $sql_basic_info);
				$sql_family_info_result = mysqli_query($conn, $sql_family_info);
				$sql_guardian_info_result = mysqli_query($conn, $sql_guardian_info);
				$sql_academic_info_result = mysqli_query($conn, $sql_academic_info);

				if ($sql_basic_info_result && $sql_family_info_result && $sql_guardian_info_result && $sql_academic_info_result) {
					header("Location: ../add_student.php?success_msg=Added New Student");
					exit();
				}
				else {
					header("Location: ../add_student.php?error_msg=Registration Error");
					exit();
				}
			}
		}
	}

	// transferee registration
	if (isset($_POST['add_student_transfereeBtn'])) {
		include "../db_conn.php";

		// primary information
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		$sname = $_POST['sname'];
		$province = $_POST['province'];
		$city = $_POST['city'];
		$barangay = $_POST['barangay'];
		$house_num = $_POST['house_num'];
		$zip_code = $_POST['zip_code'];
		// basic information
		$bdate = $_POST['bdate'];
		$nationality = $_POST['nationality'];
		$birth_province = $_POST['birth_province'];
		$birth_city = $_POST['birth_city'];
		$birth_barangay = $_POST['birth_barangay'];
		$birth_house_num = $_POST['birth_house_num'];
		$birth_zip_code = $_POST['birth_zip_code'];
		$email = $_POST['email'];
		$contact_num = $_POST['contact_num'];
		$gender = $_POST['gender'];
		$religion = $_POST['religion'];
		// family information
		$father_fname = $_POST['father_fname'];
		$father_mname = $_POST['father_mname'];
		$father_lname = $_POST['father_lname'];
		$father_sname = $_POST['father_sname'];
		$father_contact = $_POST['father_contact'];
		$father_occupation = $_POST['father_occupation'];

		$mother_fname = $_POST['mother_fname'];
		$mother_mname = $_POST['mother_mname'];
		$mother_lname = $_POST['mother_lname'];
		$mother_contact = $_POST['mother_contact'];
		$mother_occupation = $_POST['mother_occupation'];
		// guardian info
		$guardian_fname = $_POST['guardian_fname'];
		$guardian_mname = $_POST['guardian_mname'];
		$guardian_lname = $_POST['guardian_lname'];
		$guardian_sname = $_POST['guardian_sname'];
		$guardian_contact = $_POST['guardian_contact'];
		$guardian_occupation = $_POST['guardian_occupation'];
		$guardian_relationship = $_POST['guardian_relationship'];

		$spouse_fname = $_POST['spouse_fname'];
		$spouse_mname = $_POST['spouse_mname'];
		$spouse_lname = $_POST['spouse_lname'];
		$spouse_sname = $_POST['spouse_sname'];
		$spouse_contact = $_POST['spouse_contact'];
		$spouse_occupation = $_POST['spouse_occupation'];
		// academic info
		$eval_id = $_POST['eval_id'];
		$yr_lvl = $_POST['yr_lvl'];
		$status = $_POST['status'];
		$present_course = $_POST['present_course'];
		$transfered_from = $_POST['transfered_from'];
		$second_course = $_POST['second_course'];
		$graduated_es = $_POST['graduated_es'];
		$graduated_year_es = $_POST['graduated_year_es'];
		// student credentials
		$id_number = $_POST['id_number'];
		$password = $_POST['password'];

		if (empty($fname) || empty($lname) || empty($province) || empty($city) || empty($barangay) || empty($zip_code) || empty($bdate) || empty($nationality) || empty($birth_province) || empty($birth_city) || empty($birth_zip_code) || empty($email) || empty($contact_num) || empty($gender) || empty($guardian_fname) || empty($guardian_lname) || empty($guardian_relationship) || empty($present_course) || empty($transfered_from) || empty($second_course) || empty($graduated_es) || empty($yr_lvl) || empty($graduated_year_es) || empty($id_number) || empty($password)) {
			header("Location: ../add_transferee_student.php?error_msg=Fill All Inputs");
			exit();
		}
		else {
			// queries
			$sql_primary_info = "INSERT INTO student_pri_info_tbl (id_number, yr_lvl, fname, mname, lname, sname, province, city, barangay, house_num, zip_code, eval_status, status, password) VALUES ('$id_number', '$yr_lvl', '$fname', '$mname', '$lname', '$sname', '$province', '$city', '$barangay', '$house_num', '$zip_code', 'Evaluate', '$status','$password')";
			$sql_primary_info_result = mysqli_query($conn, $sql_primary_info);

			$student_id = mysqli_insert_id($conn);

			if ($sql_primary_info_result) {
				// queries
				$sql_basic_info = "INSERT INTO student_basic_info_tbl (student_id, bdate, nationality, birth_province, birth_city, birth_barangay, birth_house_num, birth_zip_code, email, contact_num, gender, religion) VALUES ('$student_id', '$bdate', '$nationality', '$birth_province', '$birth_city', '$birth_barangay', '$birth_house_num', '$birth_zip_code', '$email', '$contact_num', '$gender', '$religion')";

				$sql_family_info = "INSERT INTO student_fam_info_tbl (student_id, father_fname, father_mname, father_lname, father_sname, father_contact, father_occupation, mother_fname, mother_mname, mother_lname, mother_contact, mother_occupation) VALUES ('$student_id', '$father_fname', '$father_mname', '$father_lname', '$father_sname', '$father_contact', '$father_occupation', '$mother_fname', '$mother_mname', '$mother_lname', '$mother_contact', '$mother_occupation')";

				$sql_guardian_info = "INSERT INTO student_guardian_info_tbl (student_id, guardian_fname, guardian_mname, guardian_lname, guardian_sname, guardian_contact, guardian_occupation, guardian_relationship, spouse_fname, spouse_mname, spouse_lname, spouse_sname, spouse_contact, spouse_occupation) VALUES ('$student_id', '$guardian_fname', '$guardian_mname', '$guardian_lname', '$guardian_sname', '$guardian_contact', '$guardian_occupation', '$guardian_relationship', '$spouse_fname', '$spouse_mname', '$spouse_lname', '$spouse_sname', '$spouse_contact', '$spouse_occupation')";

				$sql_academic_info = "INSERT INTO student_acad_info_transferee_tbl (student_id, present_course, transfered_from, second_course, graduated_es, graduated_year_es, eval_id) VALUES ('$student_id', '$present_course', '$transfered_from', '$second_course', '$graduated_es', '$graduated_year_es', '$eval_id')";

				// sql results
				$sql_basic_info_result = mysqli_query($conn, $sql_basic_info);
				$sql_family_info_result = mysqli_query($conn, $sql_family_info);
				$sql_guardian_info_result = mysqli_query($conn, $sql_guardian_info);
				$sql_academic_info_result = mysqli_query($conn, $sql_academic_info);

				if ($sql_basic_info_result && $sql_family_info_result && $sql_guardian_info_result && $sql_academic_info_result) {
					header("Location: ../add_transferee_student.php?success_msg=Added New Student");
					exit();
				}
				else {
					header("Location: ../add_transferee_student.php?error_msg=Registration Error");
					exit();
				}
			}
		}
	}

	// freshmen or regular update information
	if (isset($_POST['upd_studentBtn'])) {
		include "../db_conn.php";

		$student_id = $_POST['student_id'];

		// primary information
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		$sname = $_POST['sname'];
		$province = $_POST['province'];
		$city = $_POST['city'];
		$barangay = $_POST['barangay'];
		$house_num = $_POST['house_num'];
		$zip_code = $_POST['zip_code'];
		// basic information
		$bdate = $_POST['bdate'];
		$nationality = $_POST['nationality'];
		$birth_province = $_POST['birth_province'];
		$birth_city = $_POST['birth_city'];
		$birth_barangay = $_POST['birth_barangay'];
		$birth_house_num = $_POST['birth_house_num'];
		$birth_zip_code = $_POST['birth_zip_code'];
		$email = $_POST['email'];
		$contact_num = $_POST['contact_num'];
		$gender = $_POST['gender'];
		$religion = $_POST['religion'];
		// family information
		$father_fname = $_POST['father_fname'];
		$father_mname = $_POST['father_mname'];
		$father_lname = $_POST['father_lname'];
		$father_sname = $_POST['father_sname'];
		$father_contact = $_POST['father_contact'];
		$father_occupation = $_POST['father_occupation'];

		$mother_fname = $_POST['mother_fname'];
		$mother_mname = $_POST['mother_mname'];
		$mother_lname = $_POST['mother_lname'];
		$mother_contact = $_POST['mother_contact'];
		$mother_occupation = $_POST['mother_occupation'];
		// guardian info
		$guardian_fname = $_POST['guardian_fname'];
		$guardian_mname = $_POST['guardian_mname'];
		$guardian_lname = $_POST['guardian_lname'];
		$guardian_sname = $_POST['guardian_sname'];
		$guardian_contact = $_POST['guardian_contact'];
		$guardian_occupation = $_POST['guardian_occupation'];
		$guardian_relationship = $_POST['guardian_relationship'];

		$spouse_fname = $_POST['spouse_fname'];
		$spouse_mname = $_POST['spouse_mname'];
		$spouse_lname = $_POST['spouse_lname'];
		$spouse_sname = $_POST['spouse_sname'];
		$spouse_contact = $_POST['spouse_contact'];
		$spouse_occupation = $_POST['spouse_occupation'];
		// academic info
		$eval_id = $_POST['eval_id'];
		$yr_lvl = $_POST['yr_lvl'];
		$status = $_POST['status'];
		$course = $_POST['course'];
		$strand = $_POST['strand'];
		$second_course = $_POST['second_course'];
		$graduated_shs = $_POST['graduated_shs'];
		$learners_ref_num = $_POST['learners_ref_num'];
		$graduated_es = $_POST['graduated_es'];
		$form_138 = $_POST['form_138'];
		$graduated_year_es = $_POST['graduated_year_es'];
		// student credentials
		$id_number = $_POST['id_number'];
		$password = $_POST['password'];

		if (empty($fname) || empty($lname) || empty($province) || empty($city) || empty($barangay) || empty($zip_code) || empty($bdate) || empty($nationality) || empty($birth_province) || empty($birth_city) || empty($birth_zip_code) || empty($email) || empty($contact_num) || empty($gender) || empty($guardian_fname) || empty($guardian_lname) || empty($guardian_relationship) || empty($eval_id) || empty($yr_lvl) || empty($status) || empty($course) || empty($strand) || empty($second_course) || empty($graduated_shs) || empty($graduated_es) || empty($graduated_year_es) || empty($id_number) || empty($password)) {
			header("Location: ../upd_student.php?error_msg=Fill All Inputs");
			exit();
		}
		else {
			// queries
			$sql_primary_info = "UPDATE student_pri_info_tbl SET id_number = '$id_number', yr_lvl = '$yr_lvl', fname = '$fname', mname = '$mname', lname = '$lname', sname = '$sname', province = '$province', city = '$city', barangay = '$barangay', house_num = '$house_num', zip_code = '$zip_code', status = '$status', password = '$password' WHERE student_id = '$student_id'";
			$sql_primary_info_result = mysqli_query($conn, $sql_primary_info);

			if ($sql_primary_info_result) {

				// queries

				$check_record_studentBasic_info = mysqli_query($conn, "SELECT * FROM student_basic_info_tbl WHERE student_id = '$student_id'");
				$check_record_studentBasic_info_result = mysqli_num_rows($check_record_studentBasic_info);

				if ($check_record_studentBasic_info_result == 1) {
					$sql_basic_info = "UPDATE student_basic_info_tbl SET bdate = '$bdate', nationality = '$nationality', birth_province = '$birth_province', birth_city = '$birth_city', birth_barangay = '$birth_barangay', birth_house_num = '$birth_house_num', birth_zip_code = '$birth_zip_code', email = '$email', contact_num = '$contact_num', gender = '$gender', religion = '$religion' WHERE student_id = '$student_id'";
				} else {
					$sql_basic_info = "INSERT INTO student_basic_info_tbl (student_id, bdate, nationality, birth_province, birth_city, birth_barangay, birth_house_num, birth_zip_code, email, contact_num, gender, religion) VALUES ('$student_id', '$bdate', '$nationality', '$birth_province', '$birth_city', '$birth_barangay', '$birth_house_num', '$birth_zip_code', '$email', '$contact_num', '$gender', '$religion')";
				}

				$check_record_studentFam_info = mysqli_query($conn, "SELECT * FROM student_fam_info_tbl WHERE student_id = '$student_id'");
				$check_record_studentFam_info_result = mysqli_num_rows($check_record_studentFam_info);

				if ($check_record_studentFam_info_result == 1) {
					$sql_family_info = "UPDATE student_fam_info_tbl SET father_fname = '$father_fname', father_mname = '$father_mname', father_lname = '$father_lname', father_sname = '$father_sname', father_contact = '$father_contact', father_occupation = '$father_occupation', mother_fname = '$mother_fname', mother_mname = '$mother_mname', mother_lname = '$mother_lname', mother_contact = '$mother_contact', mother_occupation = '$mother_occupation' WHERE student_id = '$student_id'";
				} else {
					$sql_family_info = "INSERT INTO student_fam_info_tbl (student_id, father_fname, father_mname, father_lname, father_sname, father_contact, father_occupation, mother_fname, mother_mname, mother_lname, mother_contact, mother_occupation) VALUES ('$student_id', '$father_fname', '$father_mname', '$father_lname', '$father_sname', '$father_contact', '$father_occupation', '$mother_fname', '$mother_mname', '$mother_lname', '$mother_contact', '$mother_occupation')";
				}
				
				$check_record_studentGuard_info = mysqli_query($conn, "SELECT * FROM student_guardian_info_tbl WHERE student_id = '$student_id'");
				$check_record_studentGuard_info_result = mysqli_num_rows($check_record_studentGuard_info);

				if ($check_record_studentGuard_info_result == 1) {
					$sql_guardian_info = "UPDATE student_guardian_info_tbl SET guardian_fname = '$guardian_fname', guardian_mname = '$guardian_mname', guardian_lname = '$guardian_lname', guardian_sname = '$guardian_sname', guardian_contact = '$guardian_contact', guardian_occupation = '$guardian_occupation', guardian_relationship = '$guardian_relationship', spouse_fname = '$spouse_fname', spouse_mname = '$spouse_mname', spouse_lname = '$spouse_lname', spouse_sname = '$spouse_sname', spouse_contact = '$spouse_contact', spouse_occupation = '$spouse_occupation' WHERE student_id = '$student_id'";
				} else {
					$sql_guardian_info = "INSERT INTO student_guardian_info_tbl (student_id, guardian_fname, guardian_mname, guardian_lname, guardian_sname, guardian_contact, guardian_occupation, guardian_relationship, spouse_fname, spouse_mname, spouse_lname, spouse_sname, spouse_contact, spouse_occupation) VALUES ('$student_id', '$guardian_fname', '$guardian_mname', '$guardian_lname', '$guardian_sname', '$guardian_contact', '$guardian_occupation', '$guardian_relationship', '$spouse_fname', '$spouse_mname', '$spouse_lname', '$spouse_sname', '$spouse_contact', '$spouse_occupation')";
				}

				$check_record_studentAcad_info = mysqli_query($conn, "SELECT * FROM student_acad_info_tbl WHERE student_id = '$student_id'");
				$check_record_studentAcad_info_result = mysqli_num_rows($check_record_studentAcad_info);

				if ($check_record_studentAcad_info_result == 1) {
					$sql_academic_info = "UPDATE student_acad_info_tbl SET course = '$course', strand = '$strand', second_course = '$second_course', graduated_shs = '$graduated_shs', learners_ref_num = '$learners_ref_num', graduated_es = '$graduated_es', form_138 = '$form_138', graduated_year_es = '$graduated_year_es', eval_id = '$eval_id' WHERE student_id = '$student_id'";
				} else {
					$sql_academic_info = "INSERT INTO student_acad_info_tbl (student_id, course, strand, second_course, graduated_shs, learners_ref_num, graduated_es, form_138, graduated_year_es, eval_id) VALUES ('$student_id', '$course', '$strand', '$second_course', '$graduated_shs', '$learners_ref_num', '$graduated_es', '$form_138', '$graduated_year_es', '$eval_id')";
				}

				// sql results
				$sql_basic_info_result = mysqli_query($conn, $sql_basic_info);
				$sql_family_info_result = mysqli_query($conn, $sql_family_info);
				$sql_guardian_info_result = mysqli_query($conn, $sql_guardian_info);
				$sql_academic_info_result = mysqli_query($conn, $sql_academic_info);

				if ($sql_basic_info_result && $sql_family_info_result && $sql_guardian_info_result && $sql_academic_info_result) {
					header('Location: ../upd_student.php?' . http_build_query(array(
				    	'student_id' => $_GET['student_id'],
				    	'success_msg' => "Updated Student Information"
					)));
					exit();
				}
				else {
					header('Location: ../upd_student.php?' . http_build_query(array(
				    	'student_id' => $_GET['student_id'],
				    	'error_msg' => "Updated Error"
					)));
					exit();
				}
			}
		}
	}

	// update transferee
	if (isset($_POST['upd_student_transfereeBtn'])) {
		include "../db_conn.php";

		$student_id = $_POST['student_id'];

		// primary information
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		$sname = $_POST['sname'];
		$province = $_POST['province'];
		$city = $_POST['city'];
		$barangay = $_POST['barangay'];
		$house_num = $_POST['house_num'];
		$zip_code = $_POST['zip_code'];
		// basic information
		$bdate = $_POST['bdate'];
		$nationality = $_POST['nationality'];
		$birth_province = $_POST['birth_province'];
		$birth_city = $_POST['birth_city'];
		$birth_barangay = $_POST['birth_barangay'];
		$birth_house_num = $_POST['birth_house_num'];
		$birth_zip_code = $_POST['birth_zip_code'];
		$email = $_POST['email'];
		$contact_num = $_POST['contact_num'];
		$gender = $_POST['gender'];
		$religion = $_POST['religion'];
		// family information
		$father_fname = $_POST['father_fname'];
		$father_mname = $_POST['father_mname'];
		$father_lname = $_POST['father_lname'];
		$father_sname = $_POST['father_sname'];
		$father_contact = $_POST['father_contact'];
		$father_occupation = $_POST['father_occupation'];

		$mother_fname = $_POST['mother_fname'];
		$mother_mname = $_POST['mother_mname'];
		$mother_lname = $_POST['mother_lname'];
		$mother_contact = $_POST['mother_contact'];
		$mother_occupation = $_POST['mother_occupation'];
		// guardian info
		$guardian_fname = $_POST['guardian_fname'];
		$guardian_mname = $_POST['guardian_mname'];
		$guardian_lname = $_POST['guardian_lname'];
		$guardian_sname = $_POST['guardian_sname'];
		$guardian_contact = $_POST['guardian_contact'];
		$guardian_occupation = $_POST['guardian_occupation'];
		$guardian_relationship = $_POST['guardian_relationship'];

		$spouse_fname = $_POST['spouse_fname'];
		$spouse_mname = $_POST['spouse_mname'];
		$spouse_lname = $_POST['spouse_lname'];
		$spouse_sname = $_POST['spouse_sname'];
		$spouse_contact = $_POST['spouse_contact'];
		$spouse_occupation = $_POST['spouse_occupation'];
		// academic info
		$eval_id = $_POST['eval_id'];
		$yr_lvl = $_POST['yr_lvl'];
		$status = $_POST['status'];
		$present_course = $_POST['present_course'];
		$transfered_from = $_POST['transfered_from'];
		$second_course = $_POST['second_course'];
		$graduated_es = $_POST['graduated_es'];
		$graduated_year_es = $_POST['graduated_year_es'];
		// student credentials
		$id_number = $_POST['id_number'];
		$password = $_POST['password'];

		if (empty($fname) || empty($lname) || empty($province) || empty($city) || empty($barangay) || empty($zip_code) || empty($bdate) || empty($nationality) || empty($birth_province) || empty($birth_city) || empty($birth_zip_code) || empty($email) || empty($contact_num) || empty($gender) || empty($guardian_fname) || empty($guardian_lname) || empty($guardian_relationship) || empty($present_course) || empty($transfered_from) || empty($second_course) || empty($graduated_es) || empty($yr_lvl) || empty($graduated_year_es) || empty($id_number) || empty($password)) {
			header("Location: ../upd_student_transferee.php?error_msg=Fill All Inputs");
			exit();
		}
		else {
			// queries
			$sql_primary_info = "UPDATE student_pri_info_tbl SET id_number = '$id_number', yr_lvl = '$yr_lvl', fname = '$fname', mname = '$mname', lname = '$lname', sname = '$sname', province = '$province', city = '$city', barangay = '$barangay', house_num = '$house_num', zip_code = '$zip_code', status = '$status', password = '$password' WHERE student_id = '$student_id'";

			$sql_primary_info_result = mysqli_query($conn, $sql_primary_info);

			if ($sql_primary_info_result) {

				// queries

				$check_record_studentBasic_info = mysqli_query($conn, "SELECT * FROM student_basic_info_tbl WHERE student_id = '$student_id'");
				$check_record_studentBasic_info_result = mysqli_num_rows($check_record_studentBasic_info);

				if ($check_record_studentBasic_info_result == 1) {
					$sql_basic_info = "UPDATE student_basic_info_tbl SET bdate = '$bdate', nationality = '$nationality', birth_province = '$birth_province', birth_city = '$birth_city', birth_barangay = '$birth_barangay', birth_house_num = '$birth_house_num', birth_zip_code = '$birth_zip_code', email = '$email', contact_num = '$contact_num', gender = '$gender', religion = '$religion' WHERE student_id = '$student_id'";
				} else {
					$sql_basic_info = "INSERT INTO student_basic_info_tbl (student_id, bdate, nationality, birth_province, birth_city, birth_barangay, birth_house_num, birth_zip_code, email, contact_num, gender, religion) VALUES ('$student_id', '$bdate', '$nationality', '$birth_province', '$birth_city', '$birth_barangay', '$birth_house_num', '$birth_zip_code', '$email', '$contact_num', '$gender', '$religion')";
				}

				$check_record_studentFam_info = mysqli_query($conn, "SELECT * FROM student_fam_info_tbl WHERE student_id = '$student_id'");
				$check_record_studentFam_info_result = mysqli_num_rows($check_record_studentFam_info);

				if ($check_record_studentFam_info_result == 1) {
					$sql_family_info = "UPDATE student_fam_info_tbl SET father_fname = '$father_fname', father_mname = '$father_mname', father_lname = '$father_lname', father_sname = '$father_sname', father_contact = '$father_contact', father_occupation = '$father_occupation', mother_fname = '$mother_fname', mother_mname = '$mother_mname', mother_lname = '$mother_lname', mother_contact = '$mother_contact', mother_occupation = '$mother_occupation' WHERE student_id = '$student_id'";
				} else {
					$sql_family_info = "INSERT INTO student_fam_info_tbl (student_id, father_fname, father_mname, father_lname, father_sname, father_contact, father_occupation, mother_fname, mother_mname, mother_lname, mother_contact, mother_occupation) VALUES ('$student_id', '$father_fname', '$father_mname', '$father_lname', '$father_sname', '$father_contact', '$father_occupation', '$mother_fname', '$mother_mname', '$mother_lname', '$mother_contact', '$mother_occupation')";
				}
				
				$check_record_studentGuard_info = mysqli_query($conn, "SELECT * FROM student_guardian_info_tbl WHERE student_id = '$student_id'");
				$check_record_studentGuard_info_result = mysqli_num_rows($check_record_studentGuard_info);

				if ($check_record_studentGuard_info_result == 1) {
					$sql_guardian_info = "UPDATE student_guardian_info_tbl SET guardian_fname = '$guardian_fname', guardian_mname = '$guardian_mname', guardian_lname = '$guardian_lname', guardian_sname = '$guardian_sname', guardian_contact = '$guardian_contact', guardian_occupation = '$guardian_occupation', guardian_relationship = '$guardian_relationship', spouse_fname = '$spouse_fname', spouse_mname = '$spouse_mname', spouse_lname = '$spouse_lname', spouse_sname = '$spouse_sname', spouse_contact = '$spouse_contact', spouse_occupation = '$spouse_occupation' WHERE student_id = '$student_id'";
				} else {
					$sql_guardian_info = "INSERT INTO student_guardian_info_tbl (student_id, guardian_fname, guardian_mname, guardian_lname, guardian_sname, guardian_contact, guardian_occupation, guardian_relationship, spouse_fname, spouse_mname, spouse_lname, spouse_sname, spouse_contact, spouse_occupation) VALUES ('$student_id', '$guardian_fname', '$guardian_mname', '$guardian_lname', '$guardian_sname', '$guardian_contact', '$guardian_occupation', '$guardian_relationship', '$spouse_fname', '$spouse_mname', '$spouse_lname', '$spouse_sname', '$spouse_contact', '$spouse_occupation')";
				}

				$check_record_studentAcad_info = mysqli_query($conn, "SELECT * FROM student_acad_info_transferee_tbl WHERE student_id = '$student_id'");
				$check_record_studentAcad_info_result = mysqli_num_rows($check_record_studentAcad_info);

				if ($check_record_studentAcad_info_result == 1) {
					$sql_academic_info = "UPDATE student_acad_info_transferee_tbl SET present_course = '$present_course', transfered_from = '$transfered_from', second_course = '$second_course', graduated_es = '$graduated_es', graduated_year_es = '$graduated_year_es', eval_id = '$eval_id' WHERE student_id = '$student_id'";
				} else {
					$sql_academic_info = "INSERT INTO student_acad_info_transferee_tbl (student_id, present_course, transfered_from, second_course, graduated_es, graduated_year_es, eval_id) VALUES ('$student_id', '$present_course', '$transfered_from', '$second_course', '$graduated_es', '$graduated_year_es', '$eval_id')";
				}

				// sql results
				$sql_basic_info_result = mysqli_query($conn, $sql_basic_info);
				$sql_family_info_result = mysqli_query($conn, $sql_family_info);
				$sql_guardian_info_result = mysqli_query($conn, $sql_guardian_info);
				$sql_academic_info_result = mysqli_query($conn, $sql_academic_info);

				if ($sql_basic_info_result && $sql_family_info_result && $sql_guardian_info_result && $sql_academic_info_result) {
					header('Location: ../upd_student_transferee.php?' . http_build_query(array(
				    	'student_id' => $_GET['student_id'],
				    	'success_msg' => "Updated Student Information"
					)));
					exit();
				}
				else {
					header('Location: ../upd_student_transferee.php?' . http_build_query(array(
				    	'student_id' => $_GET['student_id'],
				    	'error_msg' => "Updated Error"
					)));
					exit();
				}
			}
		}
	}

	// upload freshmen or regular student csv file
	if (isset($_FILES['upload_csv_student']) && isset($_POST['upload_csv_student_btn'])) {
		include "../db_conn.php";

		$upload_csv_student = $_FILES['upload_csv_student']['tmp_name'];

		$csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');

		if(!empty($_FILES['upload_csv_student']['name']) && in_array($_FILES['upload_csv_student']['type'], $csvMimes)) {
			if(is_uploaded_file($_FILES['upload_csv_student']['tmp_name'])) {
				$csvFile = fopen($_FILES['upload_csv_student']['tmp_name'], 'r');
				fgetcsv($csvFile);

				while (($line = fgetcsv($csvFile)) !== FALSE) {
					$student_id = $line[0];
					$id_number = $line[1];
					$yr_lvl = $line[2];
					$fname = $line[3];
					$mname = $line[4];
					$lname = $line[5];
					$sname = $line[6];
					$province = $line[7];
					$city = $line[8];
					$barangay = $line[9];
					$house_num = $line[10];
					$zip_code = $line[11];
					$eval_status = $line[12];
					$status = $line[13];
					$password = $line[14];

					//check query if exist
					$sql_check = "SELECT * FROM student_pri_info_tbl WHERE student_id = '".$line[0]."'";
					$sql_check_result = $conn->query($sql_check);

					if ($sql_check_result->num_rows > 0) {
						$sql_update = "UPDATE student_pri_info_tbl SET id_number = '".$line[1]."', yr_lvl = '".$line[2]."', fname = '".$line[3]."', mname = '".$line[4]."', lname = '".$line[5]."', sname = '".$line[6]."', province = '".$line[7]."', city = '".$line[8]."', barangay = '".$line[9]."', house_num = '".$line[10]."', zip_code = '".$line[1]."', eval_status = '".$line[12]."', status = '".$line[13]."', password = '".$line[14]."' WHERE student_id = '".$line[0]."'";
						$sql_update_result = mysqli_query($conn, $sql_update);

						if ($sql_update_result) {
							header("Location: ../upload_student_csv.php?success_msg=Updated students information");
							exit();
						}
						else {
							header("Location: ../upload_student_csv.php?error_msg=Error update students information");
							exit();
						}
					}
					else {
						$sql_insert = "INSERT INTO student_pri_info_tbl (student_id, id_number, yr_lvl, fname, mname, lname, sname, province, city, barangay, house_num, zip_code, eval_status, status, password) VALUES ('".$student_id."', '".$id_number."', '".$yr_lvl."', '".$fname."', '".$mname."', '".$lname."', '".$sname."', '".$province."', '".$city."', '".$barangay."', '".$house_num."', '".$zip_code."', '".$eval_status."', '".$status."', '".$password."')";
						$sql_insert_result = mysqli_query($conn, $sql_insert);

						if ($sql_insert_result) {
							header("Location: ../upload_student_csv.php?success_msg=The import of student data was successful");
							exit();
						}
						else {
							header("Location: ../upload_student_csv.php?error_msg=Error import students information");
							exit();
						}
					}
				}
				fclose($csvFile);
			} else {
				header("Location: ../upload_student_csv.php?error_msg=Error import file");
				exit();
			}
		} else {
			header("Location: ../upload_student_csv.php?error_msg=Error empty file");
			exit();
		}
	}
?>
