<?php
	// freshmen registration
	if (isset($_POST['register_freshmenBtn'])) {
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

		if (empty($fname) || empty($lname) || empty($province) || empty($city) || empty($barangay) || empty($zip_code) || empty($bdate) || empty($nationality) || empty($birth_province) || empty($birth_city) || empty($birth_zip_code) || empty($email) || empty($contact_num) || empty($gender) || empty($guardian_fname) || empty($guardian_lname) || empty($guardian_relationship) || empty($course) || empty($strand) || empty($second_course) || empty($graduated_shs) || empty($graduated_es) || empty($graduated_year_es) || empty($id_number) || empty($password)) {
			header("Location: ../registration_freshmen.php?error_msg=Fill All Inputs");
			exit();
		}
		else {
			// queries
			$sql_primary_info = "INSERT INTO student_pri_info_tbl (id_number, yr_lvl, fname, mname, lname, sname, province, city, barangay, house_num, zip_code, eval_status, status, password) VALUES ('$id_number', '1st', '$fname', '$mname', '$lname', '$sname', '$province', '$city', '$barangay', '$house_num', '$zip_code', 'Evaluate', 'Freshmen','$password')";
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
					header("Location: ../registration_freshmen.php?success_msg=Successfully Submitted");
					exit();
				}
				else {
					header("Location: ../registration_freshmen.php?error_msg=Registration Error");
					exit();
				}
			}
		}
	}

	// transferee registration
	if (isset($_POST['register_transfereeBtn'])) {
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
		$present_course = $_POST['present_course'];
		$transfered_from = $_POST['transfered_from'];
		$second_course = $_POST['second_course'];
		$graduated_es = $_POST['graduated_es'];
		$yr_lvl = $_POST['yr_lvl'];
		$graduated_year_es = $_POST['graduated_year_es'];
		// student credentials
		$id_number = $_POST['id_number'];
		$password = $_POST['password'];

		if (empty($fname) || empty($lname) || empty($province) || empty($city) || empty($barangay) || empty($zip_code) || empty($bdate) || empty($nationality) || empty($birth_province) || empty($birth_city) || empty($birth_zip_code) || empty($email) || empty($contact_num) || empty($gender) || empty($guardian_fname) || empty($guardian_lname) || empty($guardian_relationship) || empty($present_course) || empty($transfered_from) || empty($second_course) || empty($graduated_es) || empty($yr_lvl) || empty($graduated_year_es) || empty($id_number) || empty($password)) {
			header("Location: ../registration_transferee.php?error_msg=Fill All Inputs");
			exit();
		}
		else {
			// queries
			$sql_primary_info = "INSERT INTO student_pri_info_tbl (id_number, yr_lvl, fname, mname, lname, sname, province, city, barangay, house_num, zip_code, eval_status, status, password) VALUES ('$id_number', '$yr_lvl', '$fname', '$mname', '$lname', '$sname', '$province', '$city', '$barangay', '$house_num', '$zip_code', 'Evaluate', 'Transferee','$password')";
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
					header("Location: ../registration_transferee.php?success_msg=Successfully Submitted");
					exit();
				}
				else {
					header("Location: ../registration_transferee.php?error_msg=Registration Error");
					exit();
				}
			}
		}
	}
?>
