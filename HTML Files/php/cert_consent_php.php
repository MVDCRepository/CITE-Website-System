<?php
	if (isset($_POST['submit'])) {
		include "../db_connect.php"; 

        // Student Information
        $consent_name = $_POST['consent_name'];
		$consent_address = $_POST['consent_address'];
		$participation = $_POST['participation'];
        $sig_name_student = $_POST['sig_name_student'];
        $sig_name_student_date = $_POST['sig_name_student_date'];
        $sig_name_witness = $_POST['sig_name_witness'];
        $sig_name_witness_date = $_POST['sig_name_witness_date'];

        // Upload Signature for Student
        $upload_signature_student = $_FILES['student_sig'];
		$upload_signature_student_file_name = $_FILES['student_sig']['name'];
		$upload_signature_student_tmp_name = $_FILES['student_sig']['tmp_name'];
		$upload_signature_student_file_error = $_FILES['student_sig']['error'];
		$upload_signature_student_file_type = $_FILES['student_sig']['type'];

		$upload_signature_student_file_extension = explode('.', $upload_signature_student_file_name);
		$upload_signature_student_file_actual_extension = strtolower(end($upload_signature_student_file_extension));
		$allowed_extension_student = array('jpg', 'jpeg', 'png', 'pdf', 'docx');

		if (in_array($upload_signature_student_file_actual_extension, $allowed_extension_student)) {
			if ($upload_signature_student_file_error === 0) {
					$upload_signature_student_file_new_name = uniqid('', true).".".$upload_signature_file_actual_extension;
					$file_directory_student = '../files/cert_consent_signature/'.$upload_signature_student_file_new_name;
					move_uploaded_file($upload_signature_student_tmp_name, $file_directory_student);
			} else {
				echo "Error";
			}
		} else {
			echo "You cannot files of this type!";
		}

         // Upload Signature for Witness
         $upload_signature_witness = $_FILES['witness_sig'];
         $upload_signature_witness_file_name = $_FILES['witness_sig']['name'];
         $upload_signature_witness_tmp_name = $_FILES['witness_sig']['tmp_name'];
         $upload_signature_witness_file_error = $_FILES['witness_sig']['error'];
         $upload_signature_witness_file_type = $_FILES['witness_sig']['type'];
 
         $upload_signature_witness_file_extension = explode('.', $upload_signature_witness_file_name);
         $upload_signature_witness_file_actual_extension = strtolower(end($upload_signature_witness_file_extension));
         $allowed_extension_witness = array('jpg', 'jpeg', 'png', 'pdf', 'docx');
 
         if (in_array($upload_signature_witness_file_actual_extension, $allowed_extension_witness)) {
             if ($upload_signature_witness_file_error === 0) {
                     $upload_signature_witness_file_new_name = uniqid('', true).".".$upload_signature_witness_file_actual_extension;
                     $file_directory_witness = '../files/cert_consent_signature/'.$upload_signature_witness_file_new_name;
                     move_uploaded_file($upload_signature_witness_tmp_name, $file_directory_witness);
             } else {
                 echo "Error";
             }
         } else {
             echo "You cannot files of this type!";
         }

			// queries
			$sql_health_df_info = "INSERT INTO cert_consent (consent_name, consent_address, participation, consent_student_sign, consent_witness_sign, consent_student_name, consent_student_date, consent_witness_name, consent_witness_date) 
            VALUES ('$consent_name', '$consent_address', '$participation', '$upload_signature_student_file_new_name', '$upload_signature_witness_file_new_name', '$sig_name_student', '$sig_name_student_date', '$sig_name_witness', '$sig_name_witness_date')";

			// sql results
			$sql_health_df_info_result = mysqli_query($conn, $sql_health_df_info);

			if ($sql_health_df_info_result) {
				header("Location: ../pages/com_undertaking.php?success_msg=Successfully Submitted");
				exit();
			}
			else {
				header("Location: ../pages/com_undertaking.php?error_msg=Registration Error");
				exit();
			}

    }
?>