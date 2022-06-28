<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['fname'])) {
	include 'db_conn.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Announcement</title>
	<link rel="stylesheet" type="text/css" href="css/announcement.css">
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
			<h3>Announcements</h3>
			<div class="upload-container">
				<div class="flex-container">
					<div class="flex-item flex-justify-content-left">
						<label>Search</label><input type="text" class="search" placeholder="Search..." name="">
					</div>
					<div class="flex-item flex-justify-content-right">
						<a href="upload_announcement.php"><button class="main-button">Upload</button></a>
					</div>
				</div>
				<div class="table-wrapper">
					<table>
						<tr>
							<th style="width: 15%">Title</th>
							<th style="width: 30%">Content</th>
							<th style="width: 10%">Action</th>
						</tr>
						<?php
							include "db_conn.php";
							$sql = "SELECT * FROM bulletin_table ORDER BY bulletin_id DESC";
							$result = $conn->query($sql);
								if($result->num_rows > 0) {
									while ($row=$result->fetch_assoc()) {
						?>

						<!-- delete modal place here -->

						<tr>
							<td>
								<?php echo $row['title'];?>
							</td>
							<td>
								<div class="description-container">
									<?php echo $row['content'];?>
								</div>
							</td>
							<td>
								<div class="flex-container">
									<a href="update_announcement.php?bulletin_id=<?=$row['bulletin_id'];?>"><button class="editbtn">Edit</button></a>
									<button class="viewbtn">View</button>
									<button class="delbtn">Del</button>
								</div>
							</td>
						</tr>

						<?php
								}
							}
							else {
								echo "<tr><td colspan='4' style='color: #ff0000;'><center>No Announcement Available</center></td></tr>";
							}
						?>
					</table>
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