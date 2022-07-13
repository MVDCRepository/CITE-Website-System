<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login | UCUPortal</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.ico" />
  <link rel="icon" href="images/cite_logo.png">
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
      margin-top: 15px;
  }
  </style>
  <!-- <script src="https://hcaptcha.com/1/api.js" async defer></script> -->
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth pt-sm-0">
	  
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-4"> <center><img src="images/cite_logo.png" alt="logo" style="height: 70px; width: 70px"/></center>
              <div class="brand-logo text-center m-1">
                <h3><b>UCU Portal</b></h3>
              </div>
			          <h6 class=" text-center mb-0">STUDENT PORTAL</h6>
									
              <form class="pt-3" action="php/login.php" method="POST">

              <?php if (isset($_GET['error'])) { ?>
    					    <p class="error" style="margin: 0px 0px 10px 0px"><?php echo $_GET['error']; ?></p>
    				  <?php } ?>

                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="id_number" placeholder="ID Number" name="id_number" autocomplete="off" required >
                </div>
                <div class="form-group mb-1">
                  <input type="password" class="form-control form-control-lg" id="pw_up" placeholder="Password" name="password_up" required >
                </div>
                <div class="mt-1 text-center">
				        <div style="text-align: center;"><div class="h-captcha" data-sitekey="826d30a8-3555-4496-8171-81e8c57039c2"  style="display: inline-block;"></div></div>
                 <button type="submit" class="btn btn-gradient-primary btn-lg font-weight-medium auth-form-btn " name="btn_login">LOG IN</button>
                </div>
                <p><a href="#">REQUEST PASSWORD</a></p>
                <div class="my-2 d-flex justify-content-between align-items-center">
               
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
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
</body>

</html>
