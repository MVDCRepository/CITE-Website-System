<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" type="text/css" href="css/user_login.css">
	<link rel="stylesheet" type="text/css" href="css/form-responsive.css">
	<link rel="icon" href="images/cite_logo.png">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <style>
        a{
            color: black;
            text-decoration: none;
        }
        a:hover{
            color: gray;
            text-decoration: none;
        }
        p{
            text-align: center;
        }
    </style>
</head>
<body>
	<div class="hero-section">
		<div class="login-container">
			<div class="header-container">
				<img src="images/cite_logo.png" style="height: 70px; width: 70px">
				<span>UCU Cite Admin</span>
			</div>
			<div class="login-form">
				<form action="php/login.php" method="POST">

					<?php if (isset($_GET['error'])) { ?>
    					<p class="error" style="margin: 0px 0px 10px 0px"><?php echo $_GET['error']; ?></p>
    				<?php } ?>

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
					<button class="login-btn" name="btn_login">LOG IN</button>
                    <p><a href="#" class="request_password" name="request_password">REQUEST PASSWORD</a></p>
                        
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