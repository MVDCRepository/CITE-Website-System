<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['fname'])) {
  include 'db_conn.php';
  $yr_lvl = $_GET['yr_lvl'];
  $acad_id = $_GET['acad_id'];
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

    <title>Blocking</title>

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
            <li class="menu-item ">
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
            <li class="menu-item active open">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <div data-i18n="Layouts">Blocking</div>
              </a>

              <ul class="menu-sub ">
                <li class="menu-item">
                  <a href="blocking.php" class="menu-link">
                    <div>Manage</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="add_schedule.php" class="menu-link">
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
              <h4 class="fw-bold p-2"><span class="text-muted fw-light">Blocking /</span> All Blocks</h4>
              <!-- section container -->
                <!-- table wrapper -->
                <div class="section-container card">
                  <h5 class="fw-bold p-2"><span class="text-muted fw-light"> <?php echo $yr_lvl." Year";?> /</span> 1st Semester</h5>
                  <div class="table-wrapper">
                    <table class="table-cite" id="">
                      <thead>
                        <tr>
                          <th scope="col">Block</th>
                          <th scope="col">Semester</th>
                          <th scope="col">Availability</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          include "db_conn.php";
                          $sql = "SELECT 
                                  blocking_tbl.block_id,
                                  blocking_tbl.block_no,
                                  blocking_tbl.yr_lvl,
                                  blocking_tbl.sem,
                                  blocking_tbl.acad_id,
                                  blocking_tbl.total_student,
                                  blocking_tbl.eval_id,

                                  acad_yr_tbl.acad_id,
                                  acad_yr_tbl.acad_yr,
                                  acad_yr_tbl.status

                                  FROM blocking_tbl

                                  INNER JOIN acad_yr_tbl ON acad_yr_tbl.acad_id = blocking_tbl.acad_id

                                  WHERE blocking_tbl.yr_lvl = '$yr_lvl' AND blocking_tbl.acad_id = '$acad_id' AND blocking_tbl.sem  = '1st'";

                          $result = $conn->query($sql);
                            if($result->num_rows > 0) {
                              while ($row=$result->fetch_assoc()) {
                              $block_no = $row['block_no'];
                              $block_id = $row['block_id'];
                        ?>
                        <tr>
                          <td><?php echo "Block ".$row['block_no'];?></td>
                          <td><?php echo $row['sem']." Sem";?></td>
                          <td>
                            <?php
                              $yr_lvl = $row['yr_lvl'];
                              $sql = "SELECT 
                                      COUNT(reserve_block_tbl.id) as total_reservation,
                                      reserve_block_tbl.block_id,
                                      reserve_block_tbl.status,

                                      student_pri_info_tbl.student_id,
                                      student_pri_info_tbl.fname,
                                      student_pri_info_tbl.lname,
                                      student_pri_info_tbl.mname,

                                      blocking_tbl.block_id,
                                      blocking_tbl.block_no,
                                      blocking_tbl.yr_lvl,
                                      blocking_tbl.sem,
                                      blocking_tbl.total_student

                                      FROM reserve_block_tbl
                                      INNER JOIN student_pri_info_tbl ON student_pri_info_tbl.student_id = reserve_block_tbl.student_id
                                      INNER JOIN blocking_tbl ON blocking_tbl.block_id = reserve_block_tbl.block_id
                                      WHERE student_pri_info_tbl.yr_lvl = '$yr_lvl' AND reserve_block_tbl.block_id = '$block_id' AND reserve_block_tbl.status = 'Pending'";
                              $sql_result = mysqli_query($conn, $sql);

                              if ($sql_result->num_rows > 0) {
                                while($count = $sql_result->fetch_assoc()) {
                                    echo $count['total_reservation']." / ".$row['total_student'];
                                }
                              }
                            ?>
                          </td>
                          <td>
                            <a href="view_blockSched.php?block_id=<?=$row['block_id']?>&block_no=<?=$row['block_no']?>&yr_lvl=<?=$row['yr_lvl']?>&sem=<?=$row['sem']?>&acad_id=<?=$row['acad_id']?>"><button class="viewbtn">View Schedule</button></a>
                          </td>
                        </tr>
                        <?php
                            }
                          }
                          else {
                            echo "<tr><td colspan='6' style='color: #ff0000;'><center>No blocking available</center></td></tr>";
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>

                <div class="section-container card mt-4">
                  <h5 class="fw-bold p-2"><span class="text-muted fw-light"> <?php echo $yr_lvl." Year";?> /</span> 2nd Semester</h5>
                  <div class="table-wrapper">
                    <table class="table-cite" id="">
                      <thead>
                        <tr>
                          <th scope="col">Block</th>
                          <th scope="col">Semester</th>
                          <th scope="col">Availability</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          include "db_conn.php";
                          $sql = "SELECT 
                                  blocking_tbl.block_id,
                                  blocking_tbl.block_no,
                                  blocking_tbl.yr_lvl,
                                  blocking_tbl.sem,
                                  blocking_tbl.acad_id,
                                  blocking_tbl.total_student,
                                  blocking_tbl.eval_id,

                                  acad_yr_tbl.acad_id,
                                  acad_yr_tbl.acad_yr,
                                  acad_yr_tbl.status

                                  FROM blocking_tbl

                                  INNER JOIN acad_yr_tbl ON acad_yr_tbl.acad_id = blocking_tbl.acad_id

                                  WHERE blocking_tbl.yr_lvl = '$yr_lvl' AND blocking_tbl.acad_id = '$acad_id' AND blocking_tbl.sem  = '2nd'";

                          $result = $conn->query($sql);
                            if($result->num_rows > 0) {
                              while ($row=$result->fetch_assoc()) {
                              $block_no = $row['block_no'];
                              $block_id = $row['block_id'];
                        ?>
                        <tr>
                          <td><?php echo "Block ".$row['block_no'];?></td>
                          <td><?php echo $row['sem']." Sem";?></td>
                          <td>
                            <?php
                              $yr_lvl = $row['yr_lvl'];
                              $sql = "SELECT 
                                      COUNT(reserve_block_tbl.id) as total_reservation,
                                      reserve_block_tbl.block_id,
                                      reserve_block_tbl.status,

                                      student_pri_info_tbl.student_id,
                                      student_pri_info_tbl.fname,
                                      student_pri_info_tbl.lname,
                                      student_pri_info_tbl.mname,

                                      blocking_tbl.block_id,
                                      blocking_tbl.block_no,
                                      blocking_tbl.yr_lvl,
                                      blocking_tbl.sem,
                                      blocking_tbl.total_student

                                      FROM reserve_block_tbl
                                      INNER JOIN student_pri_info_tbl ON student_pri_info_tbl.student_id = reserve_block_tbl.student_id
                                      INNER JOIN blocking_tbl ON blocking_tbl.block_id = reserve_block_tbl.block_id
                                      WHERE student_pri_info_tbl.yr_lvl = '$yr_lvl' AND reserve_block_tbl.block_id = '$block_id' AND reserve_block_tbl.status = 'Pending'";
                              $sql_result = mysqli_query($conn, $sql);

                              if ($sql_result->num_rows > 0) {
                                while($count = $sql_result->fetch_assoc()) {
                                    echo $count['total_reservation']." / ".$row['total_student'];
                                }
                              }
                            ?>
                          </td>
                          <td>
                            <a href="view_blockSched.php?block_id=<?=$row['block_id']?>&block_no=<?=$row['block_no']?>&yr_lvl=<?=$row['yr_lvl']?>&sem=<?=$row['sem']?>&acad_id=<?=$row['acad_id']?>"><button class="viewbtn">View Schedule</button></a>
                          </td>
                        </tr>
                        <?php
                            }
                          }
                          else {
                            echo "<tr><td colspan='6' style='color: #ff0000;'><center>No blocking available</center></td></tr>";
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- / table wrapper -->
              <!-- / section container -->
              <!-- / Content -->

              <div class="content-backdrop fade"></div>
            </div>
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

    <!-- cite js -->
    <!-- <script type="text/javascript" src="js/add_facultyJS.js"></script> -->
  </body>
</html>
<?php
} else {
  header("Location: index.php");
  exit();
}

?>