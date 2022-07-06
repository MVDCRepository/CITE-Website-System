<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['fname'])) {
	include 'db_conn.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Manage Post</title>
	<link rel="stylesheet" type="text/css" href="css/manage_post.css">
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
			<div class="flex-container">
				<div class="flex-item">
					<div class="upload-container">
						<h3>Manage Content</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis leo lobortis, congue diam nec, imperdiet orci. In ultrices dui quis diam tempus, ultrices vestibulum dolor scelerisque. Maecenas eget rhoncus arcu, ac fermentum nulla. Praesent malesuada fringilla orci viverra ullamcorper.</p>
						<button class="main-button">Manage</button>
					</div>
				</div>
				<div class="flex-item">
					<div class="upload-container">
						<h3>Manage Announcement</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis leo lobortis, congue diam nec, imperdiet orci. In ultrices dui quis diam tempus, ultrices vestibulum dolor scelerisque. Maecenas eget rhoncus arcu, ac fermentum nulla. Praesent malesuada fringilla orci viverra ullamcorper.</p>
						<a href="announcement.php"><button class="main-button">Manage</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>


<script type="text/javascript" src="js/side_nav_menu.js"></script>

</body>
</html>
<?php
} else {
	header("Location: index.php");
	exit();
}

?>