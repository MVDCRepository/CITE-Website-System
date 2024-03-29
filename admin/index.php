<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login | CITEPortal</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="login/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="login/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="login/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="login/images/favicon.ico" />
  <link rel="icon" href="login/images/cite_logo.png">
  <!-- <script src="https://hcaptcha.com/1/api.js" async defer></script> -->
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth pt-sm-0">
	  
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-4"> <center><img src="login/images/cite_logo.png" alt="logo" style="height: 70px; width: 70px"/></center>
              <div class="brand-logo text-center m-1">
                <h3><b>CITE Portal</b></h3>
              </div>
			          <h6 class=" text-center mb-0">ADMIN LOGIN</h6>
									
              <form class="pt-3" action="php/php/login.php" method="POST">

              <?php if (isset($_GET['error'])) { ?>
                <p class="error" style="margin: 0px 0px 10px 0px; color:red;"><?php echo $_GET['error']; ?></p>
    				  <?php } ?>

                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="username" placeholder="Username" name="username" autocomplete="off" required >
                </div>
                <div class="form-group mb-1">
                  <input type="password" class="form-control form-control-lg" id="password" placeholder="Password" name="password" required >
                </div>
                <div class="mt-1 text-center">
				        <div style="text-align: center;"><div class="h-captcha" data-sitekey=""  style="display: inline-block;"></div></div>
                 <button type="submit" class="btn btn-gradient-primary btn-lg font-weight-medium auth-form-btn " name="btn_login">LOG IN</button>
                </div>
              
                <div class="text-center mt-4 font-weight-light">
                  <span class="font-weight-light">
				         <div class="text-center"> <small>UCU-CITE 2022</div></span>
                </div>
              </form>
					
            </div><small class='text-muted'>RJP/RJS/MVC</small>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="login/vendors/js/vendor.bundle.base.js"></script>
  <script src="login/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
</body>

</html>
