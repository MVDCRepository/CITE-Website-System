<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Request | CITEPortal</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="login/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="login/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="login/css/custom.css">
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
			          <h6 class=" text-center mb-0">REQUEST</h6>
									
              <form class="pt-3" action="#" method="POST">

              <?php if (isset($_GET['error'])) { ?>
    					    <p class="error" style="margin: 0px 0px 10px 0px "><?php echo $_GET['error']; ?></p>
    				  <?php } ?>

                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="id_number" placeholder="ID Number" name="id_number" autocomplete="off" required >
                </div>
                <div class="form-group mt-1">
                  <input type="text" class="form-control form-control-lg" id="email" placeholder="Email" name="email" required >
                </div>
                <div class="form-group mb-1">
                   <textarea class="form-control form-control-lg" id="description" placeholder="Description" name="description" required></textarea>
                </div>
                <div class="mt-1 mb-3 text-center">
				<div style="text-align: center;"><div class="h-captcha" data-sitekey=""  style="display: inline-block;"></div></div>
                 <button type="submit" class="btn btn-gradient-primary btn-lg font-weight-medium auth-form-btn " name="btn_login">REQUEST PASSWORD</button>
                </div>
                <div class="link">
                  <p><a href="login.php">LOG IN</a></p>
                </div>
                
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
  <script src="login/vendors/js/vendor.bundle.base.js"></script>
  <script src="login/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="login/js/off-canvas.js"></script>
  <script src="login/js/misc.js"></script>
  <!-- endinject -->
</body>

</html>
