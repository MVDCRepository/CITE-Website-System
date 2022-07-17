<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['fname'])) {
  include 'db_conn.php';
  $student_id = $_GET['student_id'];
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
                <li class="menu-item">
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
              <h4 class="fw-bold p-2"><span class="text-muted fw-light">Students /</span> Update Student</h4>
              
              <!-- section container -->
              <center>
                <?php if (isset($_GET['error_msg'])) { ?>
                  <p class="error_msg mb-3"><?php echo $_GET['error_msg'];?></p>
                <?php } ?>
                <?php if (isset($_GET['success_msg'])) { ?>
                  <p class="success_msg mb-3"><?php echo $_GET['success_msg'];?></p>
                <?php } ?>
              </center>
              <div class="section-container card mb-4">
                <h5 class="mb-4">Student Information</h5>
                <?php
                  include "db_conn.php";
                  $sql = "SELECT * FROM student_tbl WHERE student_id = '$student_id'";
                  $result = $conn->query($sql);
                    if($result->num_rows > 0) {
                      while ($row=$result->fetch_assoc()) {
                ?>
                <form action="php/studentPHP.php?student_id=<?=$student_id?>" method="POST">
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <input type="hidden" name="student_id" id="student_id" value="<?php echo $row['student_id'];?>">
                      <label class="form-label">First Name</label>
                      <input type="text" class="form-control" name="fname" value="<?php echo $row['fname'];?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Middle Name</label>
                      <input type="text" class="form-control" name="mname" value="<?php echo $row['mname'];?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Last Name</label>
                      <input type="text" class="form-control" name="lname" value="<?php echo $row['lname'];?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Gender</label><br>
                      <input type="radio" class="form-check-input" name="gender" value="Male" <?php if($row['gender']=="Male") {echo "checked";}?> required> Male
                      <input type="radio" class="form-check-input" name="gender" value="Female" <?php if($row['gender']=="Female") {echo "checked";}?> required> Female
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Birthdate</label>
                      <input type="date" class="form-control" name="b_date" value="<?php echo $row['b_date'];?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Address</label>
                      <input type="text" class="form-control" name="address" value="<?php echo $row['address'];?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Email</label>
                      <input type="email" class="form-control" name="email" value="<?php echo $row['email'];?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Phone</label>
                      <input type="number" maxlength="11" class="form-control" name="phoneNum" value="<?php echo $row['phoneNum'];?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Year Level</label>
                      <select class="form-select" name="yr_lvl" required>
                        <option value="<?php echo $row['yr_lvl'];?>"><?php echo $row['yr_lvl']." Year";?></option>
                        <option value="1st">1st Year</option>
                        <option value="2nd">2nd Year</option>
                        <option value="3rd">3rd Year</option>
                        <option value="4th">4th Year</option>
                      </select>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">CHED Memorandum Order No.</label>
                      <!-- <input type="text" class="form-control" name="cmoNo" value="<?php echo $row['cmoNo'];?>" required> -->
                      <select class="form-select" name="cmoNo" required>
                        <option value="<?php echo $row['cmoNo'];?>"><?php echo $row['cmoNo'];?></option>
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
                      <!-- <input type="text" class="form-control" name="series" value="<?php echo $row['series'];?>" required> -->
                      <select class="form-select" name="series" required>
                        <option value="<?php echo $row['series'];?>"><?php echo $row['series'];?></option>
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
                        <option value="<?php echo $row['status'];?>"><?php echo $row['status'];?></option>
                        <option value="Transferee">Transferee</option>
                        <option value="Freshmen">Freshmen</option>
                        <option value="Regular">Regular</option>
                        <option value="Regular Graduating">Regular Graduating</option>
                        <option value="Transferee Graduating">Transferee Graduating</option>
                      </select>
                    </div>
                  </div>
                  <div class="d-grid gap-2 d-md-block mt-4">
                    <button class="main-button" type="submit" name="upd_studentBtn">Save Changes</button>
                  </div>
                </form>
                <?php
                    }
                  }
                  else {
                    echo "<center><p style='color: #ff0000'>Student information unavailable</p></center>";
                  }
                ?>
              </div>
              <!-- / section container -->

              <!-- section container guardian information -->
              <center>
                <?php if (isset($_GET['success_upd_guardian'])) { ?>
                  <p class="success_msg mb-3"><?php echo $_GET['success_upd_guardian'];?></p>
                <?php } ?>
                <?php if (isset($_GET['error_upd_guardian'])) { ?>
                  <p class="error_msg mb-3"><?php echo $_GET['error_upd_guardian'];?></p>
                <?php } ?>
              </center>

              <div class="section-container mb-4 card">
                <h5 class="mb-4">Student Guardian</h5>
                <?php
                  include "db_conn.php";
                  $sql = "SELECT * FROM student_tbl WHERE student_id = '$student_id'";
                  $result = $conn->query($sql);
                    if($result->num_rows > 0) {
                      while ($row=$result->fetch_assoc()) {
                ?>
                <form action="php/studentPHP.php?student_id=<?=$student_id?>" method="POST">
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <input type="hidden" name="student_id" id="student_id" value="<?php echo $row['student_id'];?>">
                      <label class="form-label">Guardian Name</label>
                      <input type="text" class="form-control" name="guardian_name" value="<?php echo $row['guardian_name'];?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Contact No.</label>
                      <input type="text" class="form-control" name="guardian_contact" id="guardian_contact" value="<?php echo $row['guardian_contact'];?>" required>
                    </div>
                  </div>
                  <div class="d-grid gap-2 d-md-block mt-4">
                    <button class="main-button" type="submit" name="upd_studentGuardianBtn">Save Changes</button>
                  </div>
                </form>
                <?php
                    }
                  }
                  else {
                    echo "<center><p style='color: #ff0000'>Student credentials unavailable</p></center>";
                  }
                ?>
              </div>
              <!-- / section container guardian information -->

              <!-- section container credential -->
              <center>
                <?php if (isset($_GET['success_upd_cred'])) { ?>
                  <p class="success_msg mb-3"><?php echo $_GET['success_upd_cred'];?></p>
                <?php } ?>
                <?php if (isset($_GET['error_upd_cred'])) { ?>
                  <p class="error_msg mb-3"><?php echo $_GET['error_upd_cred'];?></p>
                <?php } ?>
              </center>

              <div class="section-container mb-4 card">
                <h5 class="mb-4">Credentials</h5>
                <?php
                  include "db_conn.php";
                  $sql = "SELECT * FROM student_tbl WHERE student_id = '$student_id'";
                  $result = $conn->query($sql);
                    if($result->num_rows > 0) {
                      while ($row=$result->fetch_assoc()) {
                ?>
                <form action="php/studentPHP.php?student_id=<?=$student_id?>" method="POST">
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <input type="hidden" name="student_id" id="student_id" value="<?php echo $row['student_id'];?>">
                      <label class="form-label">Identification Card Number</label>
                      <input type="text" class="form-control" name="id_number" value="<?php echo $row['id_number'];?>">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Password</label>
                      <input type="text" class="form-control" name="password" id="password" value="<?php echo $row['password'];?>" readonly>
                    </div>
                  </div>
                  <input type="checkbox" class="form-check-input" name="generate_pass" id="generate_pass" onclick="generate_cred()">
                  <label class="form-check-label" for="generate_pass">Generate Password</label>
                  <div class="d-grid gap-2 d-md-block mt-4">
                    <button class="main-button" type="submit" name="upd_studentCredBtn">Update Credentials</button>
                  </div>
                </form>
                <?php
                    }
                  }
                  else {
                    echo "<center><p style='color: #ff0000'>Student credentials unavailable</p></center>";
                  }
                ?>
              </div>
              <!-- / section container credential -->

              <!-- section container remove evaluation/grades -->
              <center>
                <?php if (isset($_GET['success_upd_status'])) { ?>
                  <p class="success_msg mb-3"><?php echo $_GET['success_upd_status'];?></p>
                <?php } ?>
                <?php if (isset($_GET['error_upd_status'])) { ?>
                  <p class="error_msg mb-3"><?php echo $_GET['error_upd_status'];?></p>
                <?php } ?>
              </center>

              <?php
                include "db_conn.php";
                $sql = "SELECT * FROM student_tbl WHERE student_id = '$student_id'";
                $result = $conn->query($sql);
                  if($result->num_rows > 0) {
                    while ($row=$result->fetch_assoc()) {
              ?>
              <form action="php/studentPHP.php?student_id=<?=$student_id?>" method="POST" id="upd_student_status_form">
                <div class="section-container mt-4 card">
                  <h5>Remove student from list?</h5>
                  <input type="hidden" name="student_id" id="student_id" value="<?php echo $row['student_id'];?>">
                  <div class="alert alert-warning">
                    <h6 class="alert-heading fw-bold mb-1">Are you sure you want to remove this student from list?</h6>
                    <p class="mb-0">Once you remove this student from list you can still restore it. Please be certain.</p>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Dropped" id="drop_student" name="drop_student">
                    <label class="form-check-label" for="drop_student">
                      I confirm removing the<br>student from list.
                    </label>
                  </div>
                  <div class="d-grid gap-2 d-md-block mt-4">
                    <button class="btn btn-danger deactivate-account" type="submit" name="remove_studentBtn" id="remove_studentBtn">Remove Student</button>
                  </div>
                </div>
              </form>
              <?php
                  }
                }
                else {
                  echo "<center><p class='error_msg'>Error read student status</p></center>";
                }
              ?>
              <!-- / section container remove evaluation/grades -->

              <!-- / Content -->

              <div class="content-backdrop fade"></div>
            </div>
            <!-- / Content -->
          </div>
          <!-- / Content wrapper -->
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
      function generate_cred() {
        var generate_pass = document.getElementById("generate_pass");
        if (generate_pass.checked == true) {
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
        else {
          document.getElementById("password").value = "";
        }
      }

      const upd_student_status_form = document.getElementById("upd_student_status_form");
      const drop_student = document.getElementById("drop_student");

      upd_student_status_form.addEventListener('submit', (e) => {
        var chck_confirm_checked = drop_student.checked;

        if (chck_confirm_checked == false) {
          e.preventDefault();
        } 
      });
    </script>

  </body>
</html>
<?php
} else {
  header("Location: index.php");
  exit();
}

?>