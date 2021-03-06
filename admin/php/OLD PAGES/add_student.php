<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['fname'])) {
  include 'db_conn.php';
?>
<!DOCTYPE html>

<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Students</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/logo.png" />

    <!-- Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    /> -->

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <script src="../assets/js/config.js"></script>

    <!-- cite theme css -->
    <link rel="stylesheet" href="css/cite_theme.css" />
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="faculty.php" class="app-brand-link">
              <span class="app-brand-logo demo">
                <img src="assets/logo.png" style="height: 50px; width: 50px">
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">CITE</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <!-- <div class="menu-inner-shadow"></div> -->

          <ul class="menu-inner py-1">
            <!-- faculty -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <div data-i18n="Layouts">Faculty</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="faculty.php" class="menu-link">
                    <div>Manage</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="add_faculty.php" class="menu-link">
                    <div>Add</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- news and events -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <div data-i18n="Layouts">News & Events</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="news_events.php" class="menu-link">
                    <div>Manage</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="add_news_events.php" class="menu-link">
                    <div>Add</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- announcements -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <div data-i18n="Layouts">Announcements</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="announcements.php" class="menu-link">
                    <div>Manage</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="upd_announcements.php" class="menu-link">
                    <div>Add</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-item">
              <a href="index.html" class="menu-link">
                <div data-i18n="Analytics">Service</div>
              </a>
            </li>

            <!-- Evaluation -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <div data-i18n="Layouts">Evaluation</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="evaluation.php" class="menu-link">
                    <div>Manage</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="add_evaluation.php" class="menu-link">
                    <div>Add</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Students -->
            <li class="menu-item active open">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <div data-i18n="Layouts">Students</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="students.php" class="menu-link">
                    <div>Manage</div>
                  </a>
                </li>
                <li class="menu-item active">
                  <a href="add_student.php" class="menu-link">
                    <div>Add</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Blocking -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <div data-i18n="Layouts">Blocking</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="blocking.php" class="menu-link">
                    <div>Manage</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="add_schedule.php" class="menu-link" >
                    <div>Add</div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">

          <!-- Navbar -->
          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- admin name -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <span><?php echo $_SESSION['fname'].' '.$_SESSION['lname'];?></span>
                </div>
              </div>

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <span><?php echo $_SESSION['position']?></span>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="faculties/<?php echo $_SESSION['profile_pic'];?>" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="view_adminDetails.php">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <!-- set this to fetch picture -->
                              <img src="faculties/<?php echo $_SESSION['profile_pic'];?>" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?php echo $_SESSION['fname']?></span> <!-- Name of admin -->
                            <small class="text-muted"><?php echo $_SESSION['position']?></small>  <!-- Role -->
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="php/logout.php">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- page header title -->
              <h4 class="fw-bold p-2"><span class="text-muted fw-light">Students /</span> Add Student</h4>
              
              <!-- section container -->
              <center>
                <?php if (isset($_GET['error_msg'])) { ?>
                  <p class="error_msg mb-3"><?php echo $_GET['error_msg'];?></p>
                <?php } ?>
                <?php if (isset($_GET['success_msg'])) { ?>
                  <p class="success_msg mb-3"><?php echo $_GET['success_msg'];?></p>
                <?php } ?>
              </center>

              <form action="php/studentPHP.php" method="POST">
                <!-- student information -->
                <div class="section-container card">
                  <h5 class="mb-4">Student Information</h5>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label class="form-label">First Name</label>
                      <input type="text" class="form-control" name="fname" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Middle Name</label>
                      <input type="text" class="form-control" name="mname" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Last Name</label>
                      <input type="text" class="form-control" name="lname" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Gender</label><br>
                      <input type="radio" class="form-check-input" name="gender" value="Male" required> Male
                      <input type="radio" class="form-check-input" name="gender" value="Female" required> Female
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Birthdate</label>
                      <input type="date" class="form-control" name="b_date" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Address</label>
                      <input type="text" class="form-control" name="address" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Email</label>
                      <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Phone</label>
                      <input type="number" maxlength="11" class="form-control" name="phoneNum" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Year Level</label>
                      <select class="form-select" name="yr_lvl" required>
                        <option value="" selected disabled>Choose...</option>
                        <option value="1st">1st Year</option>
                        <option value="2nd">2nd Year</option>
                        <option value="3rd">3rd Year</option>
                        <option value="4th">4th Year</option>
                      </select>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">CHED Memorandum Order No.</label>
                      <!-- <input type="text" class="form-control" name="cmoNo" required> -->
                      <select class="form-select" name="cmoNo" required>
                        <option value="">Select CMO No.</option>
                        <?php
                          $sql_cmo = "SELECT * FROM eval_cmo_series_tbl";
                          $cmo_result = $conn->query($sql_cmo);
                            if($cmo_result->num_rows > 0) {
                              while ($row_cmo_series=$cmo_result->fetch_assoc()) {
                        ?>
                        <option value="<?php echo $row_cmo_series['cmoNo'];?>"><?php echo $row_cmo_series['cmoNo'];?></option>
                        <?php
                            }
                          }
                          else {
                            echo "<option value=''>No CMO No. & Series available</option>";
                          }
                        ?>
                      </select>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Series</label>
                      <!-- <input type="text" class="form-control" name="series" required> -->
                      <select class="form-select" name="series" required>
                        <option value="">Select Series</option>
                        <?php
                          $sql_cmo = "SELECT * FROM eval_cmo_series_tbl";
                          $cmo_result = $conn->query($sql_cmo);
                            if($cmo_result->num_rows > 0) {
                              while ($row_cmo_series=$cmo_result->fetch_assoc()) {
                        ?>
                        <option value="<?php echo $row_cmo_series['series'];?>"><?php echo $row_cmo_series['series'];?></option>
                        <?php
                            }
                          }
                          else {
                            echo "<option value=''>No CMO No. & Series available</option>";
                          }
                        ?>
                      </select>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Student Status</label>
                      <select class="form-select" name="status" required>
                        <option value="" selected disabled>Choose...</option>
                        <option value="Transferee">Transferee</option>
                        <option value="Freshmen">Freshmen</option>
                        <option value="Regular">Regular</option>
                        <option value="Regular Graduating">Regular Graduating</option>
                        <option value="Transferee Graduating">Transferee Graduating</option>
                      </select>
                    </div>
                  </div>
                </div>
                <!-- guardian information -->
                <div class="section-container card mt-4">
                  <h5 class="mb-4">Guardian Information</h5>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Guardian Name</label>
                      <input type="text" class="form-control" name="guardian_name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Guardian Phone No.</label>
                      <input type="text" class="form-control" name="guardian_contact" required>
                    </div>
                  </div>
                </div>
                <!-- student credentials -->
                <div class="section-container card mt-4">
                  <h5 class="mb-4">Student Credentials</h5>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Identification Card Number</label>
                      <input type="text" class="form-control" name="id_number" id="id_number" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Credentials</label>
                      <input type="text" class="form-control" name="password" id="password" readonly="readonly">
                    </div>
                  </div>


                  <div class="d-flex">
                    <input type="checkbox" class="form-check-input me-2" name="generate_idnumber" id="generate_idnumber" onclick="generate_idNumber()">
                    <label class="form-check-label" for="generate_idnumber">Generate Temporary ID Number</label>
                  </div>

                  <div class="d-grid gap-2 d-md-block mt-4">
                    <button class="main-button" type="submit" name="add_studentBtn">Add Student</button>
                  </div>
                </div>
              </form>
              <!-- / section container -->
              <!-- / Content -->

              <div class="content-backdrop fade"></div>
            </div>
            <!-- / Content -->
          <!-- / Content wrapper -->
          </div>
        <!-- / Layout container -->
        </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <!-- <script async defer src="https://buttons.github.io/buttons.js"></script> -->

    <!-- my js -->
    <script type="text/javascript">
      // generates student's credential
      generate_cred();
      function generate_cred() {
        function makeid(length) {
          var result           = '';
          var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
          var charactersLength = characters.length;
          for ( var i = 0; i < length; i++ ) {
            result += characters.charAt(Math.floor(Math.random() * 
            charactersLength));
          }
          return result;
        }
        document.getElementById("password").value = (makeid(10));
      }
      // generates student's ID number
      function generate_idNumber() {
        var generate_idnumber = document.getElementById("generate_idnumber");
        if (generate_idnumber.checked == true) {
          function create_idNumber(length) {
            var result           = '';
            var characters       = '0123456789';
            var charactersLength = characters.length;
            for ( var i = 0; i < length; i++ ) {
              result += characters.charAt(Math.floor(Math.random() * 
              charactersLength));
            }
            return result;
          }
          document.getElementById("id_number").value = (create_idNumber(8));
        }
        else {
          document.getElementById("id_number").value = "";
        }
      }
    </script>

  </body>
</html>
<?php
} else {
  header("Location: index.php");
  exit();
}

?>