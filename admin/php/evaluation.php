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

    <title>Evaluation</title>

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
            <li class="menu-item active open">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <div data-i18n="Layouts">Evaluation</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item active">
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
                  <h4 class="fw-bold p-2"><span class="text-muted fw-light">Evaluation /</span> Manage Evaluation</h4>
                </div>
                <div class="p-2 flex-fill">
                  <!-- search -->
                  <?php 
                    include "db_conn.php";
                      $sql = "SELECT * FROM eval_cmo_series_tbl ORDER BY eval_id ASC";

                    if (isset($_POST['search'])) {
                      $search = $_POST['search'];
                      $sql = "SELECT * FROM eval_cmo_series_tbl WHERE cmoNo LIKE '%$search%'";
                    }
                    else {
                      $search = "";
                      $sql = "SELECT * FROM eval_cmo_series_tbl ORDER BY eval_id ASC";
                    }

                    $result = $conn->query($sql);
                  ?>
                  <form method="POST">
                    <label>Search</label><input type="text" class="search" placeholder="Search..." name="search" value="<?php echo $search;?>">
                  </form>
                </div>
              </div>
              <!-- section container -->
              <div class="section-container card">
                <!-- delete notif modal-->
                <div class="delete-modal" id="modal_delete_notif">
                  <div class="modalBox row">
                    <div class="modal_header">
                      <span class="close" id="close_modaldelete">&times;</span>
                      <h4>Failed to Delete</h4>
                    </div>
                    <div class="modal_body">
                      <?php if (isset($_GET['error_msg'])) { ?>
                        <p class="error_msg mb-3" style="width: 100%"><?php echo $_GET['error_msg']; ?></p>
                      <?php } ?>
                    </div>
                  </div>
                </div>
                <!-- / delete notif modal -->
                <!-- table wrapper -->
                <div class="table-wrapper">
                  <table class="table-cite" id="evaluation_table">
                    <thead>
                      <tr>
                        <th scope="col" style="display: none">ID</th>
                        <th scope="col">CHED Memorandum Order No.</th>
                        <th scope="col">Series</th>
                        <th scope="col">Subjects</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      if($result->num_rows > 0) {
                        while ($row=$result->fetch_assoc()) {
                    ?>

                    <!-- delete modal-->
                    <div class="delete-modal" id="modal_delete">
                      <div class="modalBox row">
                        <div class="modal_header">
                          <span class="close" id="close_modaldelete">&times;</span>
                          <h4>Delete CMO and Seires</h4>
                        </div>
                        <div class="modal_body">
                          <form action="php/evaluationPHP.php" method="POST">
                            <input type="hidden" name="del_eval_id" id="del_eval_id">
                            <p><b>CHED Memorandum Order No:</b><br> <span id="del_cmo"></span></p>
                            <p><b>Series of:</b><br> <span id="del_series"></span></p>
                            <br>
                            <button class="main-button" type="submit" name="del_evalBtn">Delete</button>
                          </form>
                        </div>
                      </div>
                    </div>
                    <!-- / delete modal -->

                    <tr>
                      <td style="display: none"><?php echo $row['eval_id'];?></td>
                      <td>CMO No. <span class="fw-bold"><?php echo $row['cmoNo'];?></span></td>
                      <td>Series of <span class="fw-bold"><?php echo $row['series'];?></span></td>
                      <td><a href="view_subjects.php?eval_id=<?=$row['eval_id'];?>">View Subjects</a></td>
                      <td>
                        <a href="upd_evaluation.php?eval_id=<?=$row['eval_id'];?>"><button class="editbtn">Edit</button></a>
                        <button class="delbtn" name="del_cmoSeries" id="del_cmoSeries" data-modal="modal_delete">Del</button></td>
                    </tr>
                    <?php
                        }
                      }
                      else if($result->num_rows == 0 && $search != "") {
                        echo "<tr><td colspan='4' style='color: #ff0000;'><center>CMO No. not found</center></td></tr>";
                      }
                      else {
                        echo "<tr><td colspan='4' style='color: #ff0000;'><center>No Evaluation Available</center></td></tr>";
                      }
                    ?>
                    </tbody>
                  </table>
                </div>
                <!-- / table wrapper -->
              </div>

              <div class="section-container card mt-4">
                <center>
                  <?php if (isset($_GET['acad_error'])) { ?>
                    <p class="error_msg mt-3 mb-3" style="margin: 0px 0px 10px 0px"><?php echo $_GET['acad_error']; ?></p>
                  <?php } ?>
                  <?php if (isset($_GET['acad_success_msg'])) { ?>
                    <p class="success_msg mb-3" style="margin: 0px 0px 10px 0px"><?php echo $_GET['acad_success_msg']; ?></p>
                  <?php } ?>
                </center>
                <h5 class="mb-4">Academic Year</h5>
                <!-- table wrapper -->
                <div class="table-wrapper">
                  <table class="table-cite" id="ay_table">
                    <thead>
                      <tr>
                        <th scope="col" style="display: none">ID</th>
                        <th scope="col">Academic Year</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      $sql_acadYr = "SELECT * FROM acad_yr_tbl";
                      $result_acadYr = mysqli_query($conn, $sql_acadYr);
                      if($result_acadYr->num_rows > 0) {
                        while ($row_acadYr=$result_acadYr->fetch_assoc()) {
                    ?>

                    <!-- delete modal-->
                    <div class="delete-modal" id="modal_del_ay">
                      <div class="modalBox row">
                        <div class="modal_header">
                          <span class="close" id="close_modaldelete_ay">&times;</span>
                          <h4>Delete Academic Year</h4>
                        </div>
                        <div class="modal_body">
                          <form action="php/evaluationPHP.php" method="POST">
                            <input type="hidden" name="del_acad_id" id="del_acad_id">
                            <p><b>Academic Year:</b><br> <span id="del_acadyr"></span></p>
                            <p><b>Status:</b><br> <span id="del_status"></span></p>
                            <br>
                            <button class="main-button" type="submit" name="del_ayBtn">Delete</button>
                          </form>
                        </div>
                      </div>
                    </div>
                    <!-- / delete modal -->

                    <tr>
                      <td style="display: none"><?php echo $row_acadYr['acad_id'];?></td>
                      <td><?php echo $row_acadYr['acad_yr'];?></td>
                      <td><?php echo $row_acadYr['status'];?></td>
                      <td>
                        <a href="upd_acadYr.php?acad_id=<?=$row_acadYr['acad_id'];?>"><button class="editbtn">Edit</button></a>
                        <button class="delbtn" name="del_acadYr" id="del_acadYr" data-modal="modal_del_ay">Del</button></td>
                    </tr>
                    <?php
                        }
                      }
                      else if($result->num_rows == 0 && $search != "") {
                        echo "<tr><td colspan='4' style='color: #ff0000;'><center>A.Y. not found</center></td></tr>";
                      }
                      else {
                        echo "<tr><td colspan='4' style='color: #ff0000;'><center>No Academic Year Available</center></td></tr>";
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
    <script type="text/javascript" src="js/evaluationJS.js"></script>

  </body>
</html>
<?php
} else {
  header("Location: index.php");
  exit();
}

?>