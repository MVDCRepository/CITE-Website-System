<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="icon" href="assets/logo.png">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
</head>
<body>
	<div class="hero-section">
		<div class="login-container">
			<div class="header-container">
				<img src="assets/logo.png" style="height: 70px; width: 70px">
				<span>UCU Cite Admin</span>
			</div>
			<div class="login-form">
				<form action="php/login.php" method="POST">

					<?php if (isset($_GET['error'])) { ?>
    					<p class="error" style="margin: 0px 0px 10px 0px"><?php echo $_GET['error']; ?></p>
    				<?php } ?>

					<div class="form-control">
					<label>Username</label>
						<input type="text" name="username" id="username">
						<small>Error Message</small>
					</div>

					<div class="form-control">
					<label>Password</label>
						<input type="Password" name="password" id="password">
						<small>Error Message</small>
					</div>
					<button class="login-btn" name="btn_login">LOG IN</button>
				</form>
			</div>
			<div class="header-footer">
				<p>Urdaneta City University<br>San Vicente West, Urdaneta City, Pangasinan</p>
			</div>
		</div>
	</div>


<!-- <script type="text/javascript" src="js/index.js"></script> -->
</body>
</html>