<!DOCTYPE html>
<html>
<head>
	<title>Request Password</title>
	<link rel="stylesheet" type="text/css" href="css/user_login.css">
	<link rel="icon" href="images/cite_logo.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="hero-section">
		<div class="login-container">
			<div class="header-container">
				<img src="images/cite_logo.png" style="height: 70px; width: 70px">
				<span>UCU Request Password</span>
			</div>
			<div class="login-form">
				<form action="php/request_password.php" method="POST">

					<?php if (isset($_GET['error'])) { ?>
    					<p class="error" style="margin: 0px 0px 10px 0px"><?php echo $_GET['error']; ?></p>
    				<?php } ?>

					<div class="form-control">
						<label>Email</label>
						<input type="text" name="email" id="email">
						<small>Error Message</small>
					</div>

					<div class="form-control">
						<label>ID Number</label>
						<input type="text" name="id_number" id="id_number">
						<small>Error Message</small>
					</div>

					<div class="form-control">
						<label>Password</label>
						<input type="Password" name="password" id="password">
						<small>Error Message</small>
					</div>
                    
					<button class="login-btn" name="Request_Password">SUBMIT</button>
                    <p><a href="user_login.php" class="request_password" name="request_password">LOGIN</a></p>
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