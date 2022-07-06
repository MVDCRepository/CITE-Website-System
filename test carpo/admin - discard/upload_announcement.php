<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['fname'])) {
	include 'db_conn.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create Announcement</title>
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
			<h3>Create Announcement</h3>
			<div class="upload-container">
				<form action="php/upload_announcementPHP.php" method="POST" id="uploadForm_announcement">
					<?php if (isset($_GET['error'])) { ?>
    					<p class="error_msg" style="margin: 0px 0px 10px 0px"><?php echo $_GET['error']; ?></p>
    				<?php } ?>
					<div class="form-control">
						<label>Title</label>
						<input type="text" name="title" id="title">
						<small>error message</small>
					</div>
					<br>
					<div class="form-control">
						<label>Content</label>
						<textarea style="height: 200px;" name="content" id="content"></textarea>
						<small>error message</small>
					</div>
					<br>
					<button class="main-btn" name="uploadbtn">Upload</button>
				</form>
			</div>
		</div>
	</div>


<script type="text/javascript" src="js/side_nav_menu.js"></script>
<script type="text/javascript" src="js/upload_announcementJS.js"></script>

</body>
</html>
<?php
} else {
	header("Location: index.php");
	exit();
}

?>