<?php
	if (isset($_FILES['photo']) && isset($_POST['title']) && isset($_POST['content']) && isset($_POST['time_date'])) {
		include "../db_conn.php";

		$photo = time() . '_' . $_FILES["photo"]["name"];
		$title = $_POST['title'];
		$content = $_POST['content'];
		$time_date = $_POST['time_date'];

		$target_dir = '../images/' . $photo;

		if (empty($photo) || empty($title) || empty($time_date) || empty($content)) {
			header("Location: ../add_announcements.php?error=Fill all inputs");
			exit();
		}
		else {

			if(move_uploaded_file($_FILES["photo"]["tmp_name"], $target_dir)) {
				$sql = "INSERT INTO announcement_tbl (photo, title, content, time_date) VALUES ('$photo','$title','$content', '$time_date')";
				$sql_result = mysqli_query($conn, $sql);

				if ($sql_result) {
					header("Location: ../announcements.php?success_msg=Announcement Uploaded");
					exit();
				}
				else {
					echo "Error add announcements";
				}
			}
		}
	}

	if (isset($_POST['upd_bulletinID']) && isset($_FILES['upd_photo']) && isset($_POST['upd_title']) && isset($_POST['upd_content']) && isset($_POST['upd_time_date'])) {
		include "../db_conn.php";

		$upd_bulletinID = $_POST['upd_bulletinID'];
		$upd_photo = time() . '_' . $_FILES["upd_photo"]["name"];
		$upd_title = $_POST['upd_title'];
		$upd_content = $_POST['upd_content'];
		$upd_time_date = $_POST['upd_time_date'];

		$target_dir = '../images/' . $upd_photo;

		if (empty($upd_photo) || empty($upd_title) || empty($upd_content) || empty($upd_time_date)) {
			header("Location: ../upd_announcements.php?error=Fill all inputs");
			exit();
		}
		else {
			if(move_uploaded_file($_FILES["upd_photo"]["tmp_name"], $target_dir)) {
				$sql = "UPDATE announcement_tbl SET photo = '$upd_photo', title = '$upd_title', content = '$upd_content', time_date = '$upd_time_date' WHERE bulletin_id = '$upd_bulletinID'";
				$sql_result = mysqli_query($conn, $sql);

				if ($sql_result) {
					header("Location: ../announcements.php?success_msg=Announcement Updated");
					exit();
				}
				else {
					echo "Error update announcement";
				}
			}
		}

		if ($_FILES['upd_photo']['name'] == UPLOAD_ERR_OK){
			$sql = "UPDATE announcement_tbl SET title = '$upd_title', content = '$upd_content', time_date = '$upd_time_date' WHERE bulletin_id = '$upd_bulletinID'";
			$sql_result = mysqli_query($conn, $sql);

			if ($sql_result) {
				header("Location: ../announcements.php?success_msg=Announcement Updated");
				exit();
			}
			else {
				echo "Error update announcement";
			}
		}
	}

	if (isset($_POST['del_bulletinID'])) {
		include "../db_conn.php";

		$del_bulletinID = $_POST['del_bulletinID'];

		$sql = "DELETE FROM announcement_tbl WHERE bulletin_id = $del_bulletinID";
		$sql_result = mysqli_query($conn, $sql);

		if ($sql_result == TRUE) {
			header("Location: ../announcements.php?del_msg=Announcement Deleted");
		}
		else {
			echo "Error delete announcement";
		}
	}
?>