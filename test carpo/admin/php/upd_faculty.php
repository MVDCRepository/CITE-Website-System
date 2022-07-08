<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['fname'])) {
  include 'db_conn.php';
  $faculty_id = $_GET['faculty_id'];
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

    <title>Faculty</title>

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
            <li class="menu-item active open">
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
                  <a href="add_announcements.php" class="menu-link">
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
            <li class="menu-item">
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
              <!-- page title -->
              <h4 class="fw-bold p-2"><span class="text-muted fw-light">Faculty /</span> Update Information</h4>
              <!-- form -->
              <form action="php/facultyPHP.php?faculty_id=<?=$faculty_id?>" enctype="multipart/form-data" method="POST">
                <?php
                  include "db_conn.php";
                  $sql = "SELECT * FROM faculty_tbl WHERE faculty_id = $faculty_id";
                  $result = $conn->query($sql);
                    if($result->num_rows > 0) {
                      while ($row=$result->fetch_assoc()) {
                ?>
                <div class="p-4 card mb-4">
                  <h5 class="mb-4">Profile Details</h5>
                  <input type="hidden" name="upd_faculty_id" value="<?php echo $row['faculty_id'];?>">
                  <?php if (isset($_GET['error'])) { ?>
                    <p class="error_msg" style="margin: 0px 0px 10px 0px"><?php echo $_GET['error']; ?></p>
                  <?php } ?>
                  <div class="d-flex align-items-start align-items-sm-center gap-4">
                    <img class="avatar-container" src="faculties/<?php echo $row['profile_pic'];?>" id="profileDisplay">
                    <div class="button-wrapper">
                      <label class="main-button mb-3" style="overflow: hidden; position: relative;">
                        <input type="file" name="upd_profile_pic" id="upd_profile_pic" onChange="displayImage(this)" accept="image/png, image/jpeg" style="opacity: 0; position: absolute; left: 0">Upload New Photo
                      </label>
                      <p class="text-muted">Select 200x200 picture</p>
                    </div>
                  </div>
                  <hr class="my-0 mb-4 mt-4">
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label class="form-label">First Name</label>
                      <input type="text" class="form-control" name="upd_fname" value="<?php echo $row['fname'];?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Last Name</label>
                      <input type="text" class="form-control" name="upd_lname" value="<?php echo $row['lname'];?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Email</label>
                      <input type="email" class="form-control" name="upd_email" value="<?php echo $row['email'];?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Phone Number (+63)</label>
                      <input type="text" maxlength="10" placeholder="+63" class="form-control" name="upd_phoneNum" value="<?php echo $row['phoneNum'];?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Address</label>
                      <input type="text" class="form-control" name="upd_address" value="<?php echo $row['address'];?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Zip Code</label>
                      <input type="text" class="form-control" name="upd_zipCode" value="<?php echo $row['zipCode'];?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Position</label>
                      <select class="select2 form-select" name="upd_position" required>
                        <option value="<?php echo $row['position'];?>"><?php echo $row['position'];?></option>
                        <option value="College Dean">College Dean</option>
                        <option value="Cite Instructor">Cite Instructor</option>
                        <option value="Program Head">Program Head</option>
                        <option value="Secretary">Secretary</option>
                        <option value="Faculty">Faculty</option>
                        <option value="other">other</option>
                      </select>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Subjects</label>
                      <input type="text" class="form-control" name="upd_subjects" value="<?php echo $row['subjects'];?>" required>
                    </div>
                    <div class="d-grid gap-2 d-md-block mt-4">
                      <button class="main-button" type="submit" name="submit">Update Information</button>
                    </div>
                  </div>
                </div>
                <?php
                    }
                  }
                  else {
                    echo "<center>Faculty member unavailable</center>";
                  }
                ?>
              </form>

              <!-- updata faculty credentials -->
              <form action="php/facultyPHP.php?faculty_id=<?=$faculty_id?>" method="POST" id="form_credential">
                <?php
                  include "db_conn.php";
                  $sql = "SELECT * FROM faculty_tbl WHERE faculty_id = $faculty_id";
                  $result = $conn->query($sql);
                    if($result->num_rows > 0) {
                      while ($row=$result->fetch_assoc()) {
                ?>
                  <div class="p-4 card">
                    <h5>User Credentials</h5>
                    <input type="hidden" name="upd_faculty_id_cred" id="upd_faculty_id_cred" value="<?php echo $row['faculty_id'];?>">
                    <center>
                      <?php if (isset($_GET['error_credential'])) { ?>
                        <p class="error_msg" style="margin: 0px 0px 10px 0px"><?php echo $_GET['error_credential']; ?></p>
                      <?php } ?>
                      <?php if (isset($_GET['success_upd_cred'])) { ?>
                        <p class="success_msg" style="margin: 0px 0px 10px 0px"><?php echo $_GET['success_upd_cred']; ?></p>
                      <?php } ?>
                    </center>
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <div class="control-form">
                          <label class="form-label">Username</label>
                          <input type="text" class="form-control" name="username" id="username">
                          <small>error</small>
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <div class="control-form">
                          <label class="form-label">Password</label>
                          <input type="password" class="form-control" name="password" id="password">
                          <small>error</small>
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <div class="control-form">
                          <label class="form-label">Confirm Password</label>
                          <input type="password" class="form-control" name="confirmPass" id="confirmPass">                          <small>error</small>
                        </div>
                      </div>
                    </div>
                    <div class="d-grid gap-2 d-md-block mt-4">
                      <button class="main-button" type="submit" name="upd_credentials">Update Credential</button>
                    </div>
                  </div>
                <?php
                    }
                  }
                  else {
                    echo "<center>Faculty credentials unavailable</center>";
                  }
                ?>
              </form>
              <!-- / form -->
            </div>
            <!-- / Content -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
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

    <!-- cite js -->
    <script type="text/javascript" src="js/upd_facultyJS.js"></script>

  </body>
</html>
<?php
} else {
  header("Location: index.php");
  exit();
}

?>