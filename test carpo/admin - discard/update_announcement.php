<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['fname'])) {
	include 'db_conn.php';
	$bulletin_id = $_GET['bulletin_id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Announcement</title>
	<link rel="stylesheet" type="text/css" href="css/upload_announcement.css">
	<link rel="icon" href="assets/logo.png">
</head>
<body>

	<!-- navigation bar -->
	<ul>
		<li>
			<button class="openbtn" onclick="myFunction()">☰</button>&nbsp;
		</li>
		<li>
			<b class="brand-name">UCU CITE</b>
		</li>
		<li class="onechild">
			<div class="dropdown">
				<span onclick="myFunction_logout()" class="dropbtn"><?php echo $_SESSION['fname']?></span>
  				<div id="myDropdown" class="dropdown-content">
    				<a href="php/logout.php">Logout</a>
  				</div>
			</div>
		</li>
	</ul>
	
	<!-- side menu -->
	<div id="mySidebar" class="sidebar">
		<a href="manage_post.php" class="active">Manage Post</a>
		<a href="#">Link 1</a>
		<a href="#">Link 2</a>
		<a href="#">Link 3</a>
	</div>

	<div id="main-content">
		<div class="section">
			<h3>Update Announcement</h3>
			<div class="upload-container">
				<form action="php/upload_announcementPHP.php?bulletin_id=<?=$bulletin_id?>" method="POST" id="updateForm_announcement">
					<?php if (isset($_GET['error'])) { ?>
    					<p class="error_msg" style="margin: 0px 0px 10px 0px"><?php echo $_GET['error']; ?></p>
    				<?php } ?>

    				<?php
						include "db_conn.php";
						$sql = "SELECT * FROM bulletin_table WHERE bulletin_id = $bulletin_id";
						$result = $conn->query($sql);
							if($result->num_rows > 0) {
								while ($row=$result->fetch_assoc()) {
					?>
					<input type="hidden" name="upd_bulletinID" id="upd_bulletinID" value="<?php echo $row['bulletin_id']?>">
					<div class="form-control">
						<label>Title</label>
						<input type="text" name="update_title" id="update_title" value="<?php echo $row['title']?>">
						<small>error message</small>
					</div>
					<br>
					<div class="form-control">
						<label>Content</label>
						<textarea style="height: 200px;" name="update_content" id="update_content"><?php echo $row['content']?></textarea>
						<small>error message</small>
					</div>
					<br>
					<button class="main-btn" name="uploadbtn">Update</button>
					<?php
							}
						}
						else {
							echo '<p class="error_msg">This announcement is unavailable</p>';
						}
					?>
				</form>
			</div>
		</div>
	</div>


<script type="text/javascript" src="js/side_nav_menu.js"></script>
<script type="text/javascript" src="js/update_announcementJS.js"></script>

</body>
</html>
<?php
} else {
	header("Location: index.php");
	exit();
}

?>