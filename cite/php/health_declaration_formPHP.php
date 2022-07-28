<?php
	// health declaration form
	if (isset($_POST['submit'])) {
		include "../db_conn.php";

        // Student Information
        $student_id = $_POST['student_id'];
        $submit_date = $_POST['submit_date'];
		// Purpose of visit
		$chck_limited_f2f = $_POST['chck_limited_f2f'];
        $office_transaction_text = $_POST['office_transaction_text'];
        $others_text = $_POST['others_text'];

        // Illnes Information
        // Question 1
        $sore_throat = $_POST['sore_throat'];
		$shortness_of_breath = $_POST['shortness_of_breath'];
		$body_pain = $_POST['body_pain'];
		$headache = $_POST['headache'];
        $fever = $_POST['fever'];
        $loss = $_POST['loss'];
		$cough_cold = $_POST['cough_cold'];
		$diarrhea = $_POST['diarrhea'];

        // Other Questions
		$question_2 = $_POST['question_2'];
        $question_3 = $_POST['question_3'];
        $question_4 = $_POST['question_4'];
        $question_4_where = $_POST['question_4_where'];
        $question_5 = $_POST['question_5'];
        $question_5_where = $_POST['question_5_where'];
        $question_6 = $_POST['question_6'];

        // Upload Signature
        $upload_signature = $_FILES['file'];
		$upload_signature_file_name = $_FILES['file']['name'];
		$upload_signature_tmp_name = $_FILES['file']['tmp_name'];
		$upload_signature_file_size = $_FILES['file']['size'];
		$upload_signature_file_error = $_FILES['file']['error'];
		$upload_signature_file_type = $_FILES['file']['type'];

		$upload_signature_file_extension = explode('.', $upload_signature_file_name);
		$upload_signature_file_actual_extension = strtolower(end($upload_signature_file_extension));
		$allowed_extension = array('jpg', 'jpeg', 'png', 'pdf', 'docx');

		if (in_array($upload_signature_file_actual_extension, $allowed_extension)) {
			if ($upload_signature_file_error === 0) {
				if ($upload_signature_file_size < 100000) {
					$upload_signature_file_new_name = uniqid('', true).".".$upload_signature_file_actual_extension; // signature
					$file_directory = '../student_signatures/'.$upload_signature_file_new_name;
					move_uploaded_file($upload_signature_tmp_name, $file_directory);
				} else {
					header("Location: ../pages/health_declaration_form.php?error_msg=File size is too big");
					exit();
				}
			} else {
				echo "Error";
			}
		} else {
			header("Location: ../pages/health_declaration_form.php?error_msg=You cannot upload files of this type!");
			exit();
		}

        // Inserting Data
        if (empty($student_id)) {
			header("Location: ../pages/health_declaration_form.php?error_msg=Fill All Inputs");
			exit();
		}
		else {
			$sql_dateFilter = mysqli_query($conn, "SELECT * FROM health_df_tbl WHERE student_id = '$student_id' AND submit_date = '$submit_date'");
			$sql_dateFilter_result = mysqli_num_rows($sql_dateFilter);

			if ($sql_dateFilter_result) {
				header("Location: ../pages/health_declaration_form.php?error_msg=You Already Submitted a Form");
				exit();
			}
			else {
				// queries
				$sql_health_df_info = "INSERT INTO health_df_tbl (student_id, submit_date, attend_limited_f2f, office_transaction, others, sore_throat, shortness_of_breath, body_pain, headache, fever, loss, cough_cold, diarrhea, question_2, question_3, question_4, question_4_where, question_5, question_5_where, question_6, signature) VALUES ('$student_id', '$submit_date', '$chck_limited_f2f', '$office_transaction_text', '$others_text', '$sore_throat', '$shortness_of_breath', '$body_pain', '$headache', '$fever', '$loss', '$cough_cold', '$diarrhea', '$question_2', '$question_3', '$question_4', '$question_4_where', '$question_5', '$question_5_where', '$question_6', '$upload_signature_file_new_name')";

				// sql results
				$sql_health_df_info_result = mysqli_query($conn, $sql_health_df_info) or die ('Query failed: ' . mysqli_error($conn));

				if ($sql_health_df_info_result) {
					header("Location: ../pages/health_declaration_form.php?success_msg=Successfully Submitted");
					exit();
				}
				else {
					header("Location: ../pages/health_declaration_form.php?error_msg=Error submission");
					exit();
				}
			}
		}
    }


    // commitment of undertaking form
    if (isset($_FILES['upload_signature']) && isset($_POST['commitment_undertaking_btn'])) {
		include "../db_conn.php";

		date_default_timezone_set('Asia/Manila');
	    $current_time = date("Y-m-d");
	    $date_time = strtotime($current_time);

		$student_id = $_POST['student_id'];

		// Upload Signature
        $upload_signature = $_FILES['upload_signature'];
		$upload_signature_file_name = $_FILES['upload_signature']['name'];
		$upload_signature_tmp_name = $_FILES['upload_signature']['tmp_name'];
		$upload_signature_file_size = $_FILES['upload_signature']['size'];
		$upload_signature_file_error = $_FILES['upload_signature']['error'];
		$upload_signature_file_type = $_FILES['upload_signature']['type'];

		$upload_signature_file_extension = explode('.', $upload_signature_file_name);
		$upload_signature_file_actual_extension = strtolower(end($upload_signature_file_extension));
		$allowed_extension = array('jpg', 'jpeg', 'png', 'pdf', 'docx');

		if (in_array($upload_signature_file_actual_extension, $allowed_extension)) {
			if ($upload_signature_file_error === 0) {
				if ($upload_signature_file_size < 100000) {
					$upload_signature_file_new_name = uniqid('', true).".".$upload_signature_file_actual_extension; // signature
					$file_directory = '../student_signatures/'.$upload_signature_file_new_name;

					$sql_dateFilter = mysqli_query($conn, "SELECT * FROM commitment_undertaking_tbl WHERE student_id = '$student_id' AND submit_date = '$current_time'");
					$sql_dateFilter_result = mysqli_num_rows($sql_dateFilter);

					if ($sql_dateFilter_result == 1) {
						header("Location: ../pages/com_undertaking.php?error_msg=You Already Submitted a Form");
						exit();
					} else {
						move_uploaded_file($upload_signature_tmp_name, $file_directory);
						$sql = "INSERT INTO commitment_undertaking_tbl (student_id, signature, submit_date) VALUES ('$student_id', '$upload_signature_file_new_name', '$current_time')";
						$sql_result = mysqli_query($conn, $sql) or die ('Query failed: ' . mysqli_error($conn));

						if ($sql_result) {
							header("Location: ../pages/com_undertaking.php?success_msg=Successfully Submitted");
							exit();
						}
					}
				} else {
					header("Location: ../pages/com_undertaking.php?error_msg=File size is too big");
					exit();
				}
			} else {
				echo "Error";
			}
		} else {
			header("Location: ../pages/com_undertaking.php?error_msg=You cannot upload files of this type!");
			exit();
		}
    }

    // certificate of consent
    if (isset($_POST['cert_consent_btn'])) {
		include "../db_conn.php"; 

		date_default_timezone_set('Asia/Manila');
	    $current_time = date("Y-m-d");
	    $date_time = strtotime($current_time);

        // Student Information
        $student_id = $_POST['student_id'];
        $participation = $_POST['participation'];

        // Upload Signature for Student
        $upload_signature_student = $_FILES['student_sig'];
		$upload_signature_student_file_name = $_FILES['student_sig']['name'];
		$upload_signature_student_tmp_name = $_FILES['student_sig']['tmp_name'];
		$upload_signature_student_file_error = $_FILES['student_sig']['error'];
		$upload_signature_student_file_type = $_FILES['student_sig']['type'];

        // Upload Signature for Witness
        $upload_signature_witness = $_FILES['witness_sig'];
        $upload_signature_witness_file_name = $_FILES['witness_sig']['name'];
        $upload_signature_witness_tmp_name = $_FILES['witness_sig']['tmp_name'];
        $upload_signature_witness_file_error = $_FILES['witness_sig']['error'];
        $upload_signature_witness_file_type = $_FILES['witness_sig']['type'];

        // file validation
		$upload_signature_student_file_extension = explode('.', $upload_signature_student_file_name);
		$upload_signature_student_file_actual_extension = strtolower(end($upload_signature_student_file_extension));
		$allowed_extension_student = array('jpg', 'jpeg', 'png', 'pdf', 'docx');

		// file validation
		$upload_signature_witness_file_extension = explode('.', $upload_signature_witness_file_name);
        $upload_signature_witness_file_actual_extension = strtolower(end($upload_signature_witness_file_extension));
        $allowed_extension_witness = array('jpg', 'jpeg', 'png', 'pdf', 'docx');

		if (in_array($upload_signature_student_file_actual_extension, $allowed_extension_student)) {
			if ($upload_signature_student_file_error === 0) {
				if (in_array($upload_signature_witness_file_actual_extension, $allowed_extension_witness)) {
					if ($upload_signature_witness_file_error === 0) {

	                    $sql_dateFilter = mysqli_query($conn, "SELECT * FROM cert_consent_tbl WHERE student_id = '$student_id' AND submit_date = '$current_time'");
	                    $sql_dateFilter_result = mysqli_num_rows($sql_dateFilter);

                    	if ($sql_dateFilter_result) {
                    		header("Location: ../pages/cert_consent.php?error_msg=You Already Submitted a Form");
							exit();
                    	}
                    	else {
							$upload_signature_student_file_new_name = uniqid('', true).".".$upload_signature_student_file_actual_extension;
							
							$upload_signature_witness_file_new_name = uniqid('', true).".".$upload_signature_witness_file_actual_extension;

							$file_directory_student = '../student_signatures/'.$upload_signature_student_file_new_name;

	                    	$file_directory_witness = '../student_signatures/'.$upload_signature_witness_file_new_name;

							move_uploaded_file($upload_signature_student_tmp_name, $file_directory_student);

	                    	move_uploaded_file($upload_signature_witness_tmp_name, $file_directory_witness);

                    		$sql = "INSERT INTO cert_consent_tbl (student_id ,student_type ,student_sig, witness_sig, submit_date) VALUES ('$student_id', '$participation', '$upload_signature_student_file_new_name', '$upload_signature_witness_file_new_name', '$current_time')";
                    		$sql_result = mysqli_query($conn, $sql) or die ('Query failed: ' . mysqli_error($conn));

                    		if ($sql_result) {
                    			header("Location: ../pages/cert_consent.php?success_msg=Successfully Submitted");
								exit();
                    		}
                    		else {
                    			header("Location: ../pages/cert_consent.php?error_msg=Error");
								exit();
                    		}
                    	}

					} else {
						echo "Error";
					}
				} else {
					echo "You cannot upload files of this type!";
				}
			} else {
				echo "Error";
			}
		} else {
			echo "You cannot upload files of this type!";
		}
    }
?>