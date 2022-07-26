<?php
	if (isset($_POST['submit'])) {
		include "../db_connect.php"; 

        // Student Information
        $undertaking_name = $_POST['undertaking_name'];
		$undertaking_address = $_POST['undertaking_address'];

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
				if ($upload_signature_file_size < 1000000000) {
					$upload_signature_file_new_name = uniqid('', true).".".$upload_signature_file_actual_extension;
					$file_directory = '../files/com_undertaking_signature/'.$upload_signature_file_new_name;
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

			// queries
			$sql_health_df_info = "INSERT INTO com_undertaking (undertaking_name, undertaking_address, upload_signature) 
            VALUES ('$undertaking_name', '$undertaking_address', '$upload_signature_file_new_name')";

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