<?php
	if (isset($_POST['title']) && isset($_POST['content'])) {
		include "../db_conn.php";

		$title = $_POST['title'];
		$content = $_POST['content'];

		if (empty($title) || empty($content)) {
			header("Location: ../upload_announcement.php?error=Fill all inputs");
			exit();
		}
		else {
			$sql = "INSERT INTO bulletin_table (title, content) VALUES ('$title','$content')";
			$sql_result = mysqli_query($conn, $sql);

			if ($sql_result) {
				header("Location: ../announcement.php");
				exit();
			}
			else {
				echo "Error Create Announcement";
			}
		}
	}

	if (isset($_POST['upd_bulletinID']) && isset($_POST['update_title']) && isset($_POST['update_content'])) {
		include "../db_conn.php";

		$upd_bulletinID = $_POST['upd_bulletinID'];
		$update_title = $_POST['update_title'];
		$update_content = $_POST['update_content'];

		if (empty($update_title) || empty($update_content)) {
			header("Location: ../update_announcement.php?error=Fill all inputs");
			exit();
		}
		else {
			$sql = "UPDATE bulletin_table SET title = '$update_title', content = '$update_content' WHERE bulletin_id = '$upd_bulletinID'";
			$sql_result = mysqli_query($conn, $sql);

			if ($sql_result) {
				header("Location: ../announcement.php");
				exit();
			}
			else {
				echo "Error Update Announcement";
			}
		}
	}
?>