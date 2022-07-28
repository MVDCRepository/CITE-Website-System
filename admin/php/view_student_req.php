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

            <!-- health declaration form -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <div data-i18n="Layouts">Health Statement Form</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="view_student_hd_forms.php" class="menu-link">
                    <div>Health Declaration</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="commitment_undertaking.php" class="menu-link" >
                    <div>Commitement of Undertaking</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="certificate_consent.php" class="menu-link" >
                    <div>Certificate of Consent</div>
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
              <!-- page header and search -->
              <div class="d-flex flex-wrap">
                <div class="p-2 flex-fill">
                  <!-- page title -->
                  <h4 class="fw-bold p-2"><span class="text-muted fw-light">Students /</span> Requirements</h4>
                </div>
                <div class="p-2 flex-fill">
                  <!-- search -->
                  <?php 
                    include "db_conn.php";
                      $sql = "SELECT * FROM student_requirement_tbl WHERE student_id = '$student_id'";

                    if (isset($_POST['search'])) {
                      $search = $_POST['search'];
                      $sql = "SELECT * FROM student_requirement_tbl WHERE file_name LIKE '%$search%' AND student_id = '$student_id'";
                    }
                    else {
                      $search = "";
                      $sql = "SELECT * FROM student_requirement_tbl WHERE student_id = '$student_id'";
                    }

                    $result = $conn->query($sql);
                  ?>
                  <form method="POST">
                    <label>Search</label><input type="text" class="search" placeholder="Search..." name="search" value="<?php echo $search;?>">
                  </form>
                </div>
              </div>
              
              <!-- section container -->
              <center>
                <?php if (isset($_GET['success_msg'])) { ?>
                  <p class="success_msg mb-3"><?php echo $_GET['success_msg']; ?></p>
                <?php } ?>
                <?php if (isset($_GET['error_msg'])) { ?>
                  <p class="error_msg mb-3"><?php echo $_GET['error_msg']; ?></p>
                <?php } ?>
              </center>
              <div class="section-container card">
                
                <!-- accept modal-->
                <div class="modal" id="modal_accept">
                  <div class="modalBox row">
                    <div class="modal_header">
                      <span class="close" id="close_modalAccept">&times;</span>
                      <h4>Accept student requirement?</h4>
                    </div>
                    <div class="modal_body">
                      <form action="php/student_requirementPHP.php?student_id=<?=$student_id?>" method="POST">
                        <div class="alert alert-dark">
                          <h6 class="alert-heading fw-bold mb-1">Are you sure you want to accept this requirement?</h6>
                        </div>
                        <input type="hidden" name="accept_req_id" id="accept_req_id">
                        <p><b>File name:</b> <span id="accept_file_name"></span></p>
                        <p><b>Date & Time:</b> <span id="accept_dateTime"></span></p>
                        <br>
                        <button class="editbtn" type="submit" name="accept_req_btn">Yes, accept requirement</button>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- / accept modal -->

                <!-- decline modal-->
                <div class="delete-modal" id="modal_decline">
                  <div class="modalBox row">
                    <div class="modal_header">
                      <span class="close" id="close_modalDec">&times;</span>
                      <h4>Decline student requirement?</h4>
                    </div>
                    <div class="modal_body">
                      <form action="php/student_requirementPHP.php?student_id=<?=$student_id?>" method="POST">
                        <div class="alert alert-danger">
                          <h6 class="alert-heading fw-bold mb-1">Are you sure you want to decline this requirement?</h6>
                          <p class="mb-0">Student will see the status of pending to declined requirement.</p>
                        </div>
                        <input type="hidden" name="dec_req_id" id="dec_req_id">
                        <p><b>File name:</b> <span id="dec_file_name"></span></p>
                        <p><b>Date & Time:</b> <span id="dec_dateTime"></span></p>
                        <br>
                        <button class="delbtn" type="submit" name="dec_req_btn">Yes, decline requirement</button>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- / decline modal -->

                <!-- table wrapper -->
                <div class="table-wrapper">
                  <table class="table-cite" id="requirement_tbl">
                    <thead>
                      <tr>
                        <th scope="col" class="d-none">ID</th>
                        <th scope="col">File Name</th>
                        <th scope="col">Date & Time</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      if($result->num_rows > 0) {
                        while ($row=$result->fetch_assoc()) {
                    ?>
                    <tr>
                      <td class="d-none"><?php echo $row['req_id'];?></td>
                      <td>
                        <a href="../../cite/student_requirements/<?php echo $row['file'];?>" target="_blank"><?php echo $row['file_name'];?>
                        </a>
                      </td>
                      <td><?php $date = $row['date_time']; echo date("M d,Y - h:i a", strtotime($date));?></td>
                      <td><?php echo $row['status'];?></td>
                      <td>
                        <div class="d-grid gap-2 d-md-block">
                          <button class="editbtn" id="accept_student_req" data-modal="modal_accept">Accept</button>
                          <button class="delbtn" id="dec_student_req" data-modal="modal_decline">Decline</button>
                        </div>
                      </td>
                    </tr>
                    <?php
                        }
                      }
                      else if($result->num_rows == 0 && $search != "") {
                        echo "<tr><td colspan='5' style='color: #ff0000;'><center>Requirement not found</center></td></tr>";
                      }
                      else {
                        echo "<tr><td colspan='5' style='color: #ff0000;'><center>No requirements available</center></td></tr>";
                      }
                    ?>
                    </tbody>
                  </table>
                </div>
                <!-- / table wrapper -->
              </div>
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
    <script type="text/javascript" src="js/view_student_reqJS.js"></script>

  </body>
</html>
<?php
} else {
  header("Location: index.php");
  exit();
}

?>