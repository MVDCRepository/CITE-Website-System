<?php
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
?>