<?php
	if (isset($_FILES['photo']) && isset($_POST['title']) && isset($_POST['content']) && isset($_POST['time_date'])) {
		include "../db_conn.php";

		$photo = time() . '_' . $_FILES["photo"]["name"];
		$title = $_POST['title'];
		$post = $_POST['post'];
		$content = $_POST['content'];
		$time_date = $_POST['time_date'];

		$target_dir = '../images/' . $photo;

		if (empty($photo) || empty($title) || empty($time_date) || empty($content)) {
			header("Location: ../add_news_events.php?error=Fill all inputs");
			exit();
		}
		else {

			if(move_uploaded_file($_FILES["photo"]["tmp_name"], $target_dir)) {
				$sql = "INSERT INTO news_events_tbl (photo, title, post, content, time_date) VALUES ('$photo','$title', '$post', '$content', '$time_date')";
				$sql_result = mysqli_query($conn, $sql) or die('Query failed: ' . mysqli_error($conn));

				if ($sql_result) {
					header("Location: ../news_events.php?success_msg=News and Events Uploaded");
					exit();
				}
				else {
					echo "Error add news and events";
				}
			}
		}
	}

	if (isset($_POST['upd_bulletinID']) && isset($_FILES['upd_photo']) && isset($_POST['upd_title']) && isset($_POST['upd_content']) && isset($_POST['upd_time_date'])) {
		include "../db_conn.php";

		$upd_bulletinID = $_POST['upd_bulletinID'];
		$upd_photo = time() . '_' . $_FILES["upd_photo"]["name"];
		$upd_title = $_POST['upd_title'];
		$upd_post = $_POST['upd_post'];
		$upd_content = $_POST['upd_content'];
		$upd_time_date = $_POST['upd_time_date'];

		$target_dir = '../images/' . $upd_photo;

		if (empty($upd_photo) || empty($upd_title) || empty($upd_content) || empty($upd_time_date)) {
			header("Location: ../upd_news_events.php?error=Fill all inputs");
			exit();
		}
		else if ($upd_photo != "") {
			if(move_uploaded_file($_FILES["upd_photo"]["tmp_name"], $target_dir)) {
				$sql = "UPDATE news_events_tbl SET photo = '$upd_photo', title = '$upd_title', post = '$upd_post', content = '$upd_content', time_date = '$upd_time_date' WHERE bulletin_id = '$upd_bulletinID'";
				$sql_result = mysqli_query($conn, $sql);

				if ($sql_result) {
					header("Location: ../news_events.php?success_msg=News and Events Updated");
					exit();
				}
				else {
					echo "Error update news and events";
				}
			}
		}
		if ($_FILES['upd_photo']['name'] == UPLOAD_ERR_OK){
			$sql = "UPDATE news_events_tbl SET title = '$upd_title',  post = '$upd_post',content = '$upd_content', time_date = '$upd_time_date' WHERE bulletin_id = '$upd_bulletinID'";
			$sql_result = mysqli_query($conn, $sql);

			if ($sql_result) {
				header("Location: ../news_events.php?success_msg=News and Events Updated");
				exit();
			}
			else {
				echo "Error update news and events";
			}
		}
	}

	if (isset($_POST['del_bulletinID'])) {
		include "../db_conn.php";

		$del_bulletinID = $_POST['del_bulletinID'];

		$sql = "DELETE FROM news_events_tbl WHERE bulletin_id = $del_bulletinID";
		$sql_result = mysqli_query($conn, $sql);

		if ($sql_result == TRUE) {
			header("Location: ../news_events.php?del_msg=News and Events Deleted");
		}
		else {
			echo "Error delete news and events";
		}
	}
?>