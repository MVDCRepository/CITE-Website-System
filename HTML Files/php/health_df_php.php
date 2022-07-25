<?php
	if (isset($_POST['submit'])) {
		include "../db_connect.php"; 

        // Student Information
        $health_df_date = $_POST['health_df_date'];
		$health_df_name = $_POST['health_df_name'];
		$health_df_address = $_POST['health_df_address'];
		$health_df_contact = $_POST['health_df_contact'];
		// Purpose of visit
        $purpose_f2f = $_POST['purpose_f2f'.','];
        $health_df_office = $_POST['health_df_office'];
        $health_df_office_text = $_POST['health_df_office_text'.','];
		$health_df_others = $_POST['health_df_others'];
        $health_df_others_text = $_POST['health_df_others_text'];
		$health_df_purpose = $purpose_f2f . $health_df_office . $health_df_office_text . $health_df_others . $health_df_others_text;

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
					$upload_signature_file_new_name = uniqid('', true).".".$upload_signature_file_actual_extension;
					$file_directory = '../files/health_df_signatures/'.$upload_signature_file_new_name;
					move_uploaded_file($upload_signature_tmp_name, $file_directory);
				} else {
					echo "File size is too much big!";
				}
			} else {
				echo "Error";
			}
		} else {
			echo "You cannot files of this type!";
		}

        // Inserting Data
        if (empty($health_df_date) || empty($health_df_name) || empty($health_df_address) || empty($health_df_contact)) {
			header("Location: ../pages/health_df.php?error_msg=Fill All Inputs");
			exit();
		}
		else {
			// queries
			$sql_health_df_info = "INSERT INTO health_df (health_df_date, health_df_name, health_df_address, health_df_contact, health_df_purpose,
            sore_throat, shortness_of_breath, body_pain, headache, fever, loss, cough_cold, diarrhea,
            question_2, question_3, question_4, question_5, question_6, question_4_where, question_5_where, upload_signature) 
            VALUES ('$health_df_date', '$health_df_name', '$health_df_address', '$health_df_contact', '$health_df_purpose',
            '$sore_throat', '$shortness_of_breath', '$body_pain', '$headache', '$fever', '$loss', '$cough_cold', '$diarrhea',
            '$question_2', '$question_3', '$question_4', '$question_5', '$question_6', '$question_4_where', '$question_5_where', '$upload_signature_file_new_name')";

			// sql results
			$sql_health_df_info_result = mysqli_query($conn, $sql_health_df_info);

			if ($sql_health_df_info_result) {
				header("Location: ../pages/health_df.php?success_msg=Successfully Submitted");
				exit();
			}
			else {
				header("Location: ../pages/health_df.php?error_msg=Registration Error");
				exit();
			}
		}
    }
?>