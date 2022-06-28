<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" type="text/css" href="css/user_login.css">
	<link rel="icon" href="assets/logo.png">
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
				<img src="assets/logo.png" style="height: 70px; width: 70px">
				<span>UCU Cite Admin</span>
			</div>
			<div class="login-form">
				<form action="#" method="POST">
					<div class="form-control">
					<label>ID Number</label>
						<input type="text" name="username" id="username">
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