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

    <title>Evaluate Student</title>

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
              <!-- page header  -->
              <h4 class="fw-bold p-2"><span class="text-muted fw-light">Students /</span> Evaluate Student</h4>
              <!-- section container -->
              <?php
                include "db_conn.php";
                $sql = "SELECT * FROM student_tbl WHERE student_id = '$student_id'";
                $result = $conn->query($sql);
                  if($result->num_rows > 0) {
                    while ($row=$result->fetch_assoc()) {
              ?>
              <form action="php/evaluate_studentPHP.php?student_id=<?=$student_id?>" method="POST">
                <div class="section-container card">
                  <p><span class="fw-bold">Name: </span><?php echo $row['lname'].", ".$row['fname']." ".$row['mname'];?></p>
                  <p><span class="fw-bold">ID Number: </span><?php echo $row["id_number"];?></p>
                  <p><?php echo '<b>CMO No: </b>'.$row["cmoNo"];?></p>
                  <p><?php echo '<b> Series: </b> '.$row['series'];?></p>
                  <input type="hidden" name="upd_student_id" value="<?php echo $row['student_id']?>">

                  <div class="row mb-5">
                    <div class="col-md">
                      <table class="table-cite">
                        <tr>
                          <th colspan="6" class="text-center">First Year 1st Sem</th>
                        </tr>
                        <tr>
                          <td style="display: none" class="fw-bold">subj ID</td>
                          <td class="fw-bold">Lec</td>
                          <td class="fw-bold">Lab</td>
                          <td class="fw-bold">Course Code</td>
                          <td class="fw-bold">Course Description</td>
                          <td class="fw-bold">Grade</td>
                        </tr>  
                        <?php
                          include "db_conn.php";
                          $sql_subjects = "SELECT student_tbl.student_id, student_tbl.id_number, student_tbl.fname, student_tbl.lname, eval_cmo_series_tbl.eval_id, eval_cmo_series_tbl.cmoNo, eval_cmo_series_tbl.series, subject_tbl.subj_id, subject_tbl.courseCode, subject_tbl.courseDesc, subject_tbl.units, subject_tbl.lec, subject_tbl.lab, subject_tbl.yr_lvl, subject_tbl.sem
                          FROM student_tbl
                          INNER JOIN eval_cmo_series_tbl ON student_tbl.cmoNo = eval_cmo_series_tbl.cmoNo AND student_tbl.series = eval_cmo_series_tbl.series
                          RIGHT JOIN subject_tbl ON eval_cmo_series_tbl.eval_id = subject_tbl.eval_id
                          WHERE student_tbl.student_id = '$student_id' AND student_tbl.cmoNo = '$row[cmoNo]' AND student_tbl.series = '$row[series]' AND subject_tbl.yr_lvl = '1st' AND subject_tbl.sem = '1st'";
                          $result_subjects = $conn->query($sql_subjects);
                            if($result_subjects->num_rows > 0) {
                              while ($row_subjects=$result_subjects->fetch_assoc()) {
                        ?>
                        <tr>
                          <td style="display: none"><input type="hidden" name="subj_id[]" value="<?php echo $row_subjects['subj_id'];?>"><input type="hidden" name="student_id[]" value="<?php echo $row['student_id'];?>"></td>
                          <td><?php echo $row_subjects['lec'];?></td>
                          <td><?php echo $row_subjects['lab'];?></td>
                          <td><?php echo $row_subjects['courseCode'];?></td>
                          <td><?php echo $row_subjects['courseDesc'];?></td>
                          <td><input type="number" class="grade_input" name="grade[]" max="99" maxlength="2"></td>
                        </tr>
                        <?php
                            }
                          }
                          else {
                            echo "<tr><td colspan='6' class='text-center' style='color: #A94442'>No subjects available</td></tr>";
                          }
                        ?>
                      </table>
                    </div>

                    <div class="col-md">
                      <table class="table-cite">
                        <tr>
                          <th colspan="6" class="text-center">First Year 2nd Sem</th>
                        </tr>
                        <tr>
                          <td style="display: none" class="fw-bold">subj ID</td>
                          <td class="fw-bold">Lec</td>
                          <td class="fw-bold">Lab</td>
                          <td class="fw-bold">Course Code</td>
                          <td class="fw-bold">Course Description</td>
                          <td class="fw-bold">Grade</td>
                        </tr>  
                        <?php
                          include "db_conn.php";
                          $sql_subjects = "SELECT student_tbl.student_id, student_tbl.id_number, student_tbl.fname, student_tbl.lname, eval_cmo_series_tbl.eval_id, eval_cmo_series_tbl.cmoNo, eval_cmo_series_tbl.series, subject_tbl.subj_id, subject_tbl.courseCode, subject_tbl.courseDesc, subject_tbl.units, subject_tbl.lec, subject_tbl.lab, subject_tbl.yr_lvl, subject_tbl.sem
                          FROM student_tbl
                          INNER JOIN eval_cmo_series_tbl ON student_tbl.cmoNo = eval_cmo_series_tbl.cmoNo AND student_tbl.series = eval_cmo_series_tbl.series
                          RIGHT JOIN subject_tbl ON eval_cmo_series_tbl.eval_id = subject_tbl.eval_id
                          WHERE student_tbl.student_id = '$student_id' AND student_tbl.cmoNo = '$row[cmoNo]' AND student_tbl.series = '$row[series]' AND subject_tbl.yr_lvl = '1st' AND subject_tbl.sem = '2nd'";
                          $result_subjects = $conn->query($sql_subjects);
                            if($result_subjects->num_rows > 0) {
                              while ($row_subjects=$result_subjects->fetch_assoc()) {
                        ?>
                        <tr>
                          <td style="display: none"><input type="hidden" name="subj_id[]" value="<?php echo $row_subjects['subj_id'];?>"><input type="hidden" name="student_id[]" value="<?php echo $row['student_id'];?>"></td>
                          <td><?php echo $row_subjects['lec'];?></td>
                          <td><?php echo $row_subjects['lab'];?></td>
                          <td><?php echo $row_subjects['courseCode'];?></td>
                          <td><?php echo $row_subjects['courseDesc'];?></td>
                          <td><input type="number" class="grade_input" name="grade[]" max="99" maxlength="2"></td>
                        </tr>
                        <?php
                            }
                          }
                          else {
                            echo "<tr><td colspan='6' class='text-center' style='color: #A94442'>No subjects available</td></tr>";
                          }
                        ?>
                      </table>
                    </div>
                  </div>

                  <div class="row mb-5">
                    <div class="col-md">
                      <table class="table-cite">
                        <tr>
                          <th colspan="6" class="text-center">Second Year 1st Sem</th>
                        </tr>
                        <tr>
                          <td style="display: none" class="fw-bold">subj ID</td>
                          <td class="fw-bold">Lec</td>
                          <td class="fw-bold">Lab</td>
                          <td class="fw-bold">Course Code</td>
                          <td class="fw-bold">Course Description</td>
                          <td class="fw-bold">Grade</td>
                        </tr>  
                        <?php
                          include "db_conn.php";
                          $sql_subjects = "SELECT student_tbl.student_id, student_tbl.id_number, student_tbl.fname, student_tbl.lname, eval_cmo_series_tbl.eval_id, eval_cmo_series_tbl.cmoNo, eval_cmo_series_tbl.series, subject_tbl.subj_id, subject_tbl.courseCode, subject_tbl.courseDesc, subject_tbl.units, subject_tbl.lec, subject_tbl.lab, subject_tbl.yr_lvl, subject_tbl.sem
                          FROM student_tbl
                          INNER JOIN eval_cmo_series_tbl ON student_tbl.cmoNo = eval_cmo_series_tbl.cmoNo AND student_tbl.series = eval_cmo_series_tbl.series
                          RIGHT JOIN subject_tbl ON eval_cmo_series_tbl.eval_id = subject_tbl.eval_id
                          WHERE student_tbl.student_id = '$student_id' AND student_tbl.cmoNo = '$row[cmoNo]' AND student_tbl.series = '$row[series]' AND subject_tbl.yr_lvl = '2nd' AND subject_tbl.sem = '1st'";
                          $result_subjects = $conn->query($sql_subjects);
                            if($result_subjects->num_rows > 0) {
                              while ($row_subjects=$result_subjects->fetch_assoc()) {
                        ?>
                        <tr>
                          <td style="display: none"><input type="hidden" name="subj_id[]" value="<?php echo $row_subjects['subj_id'];?>"><input type="hidden" name="student_id[]" value="<?php echo $row['student_id'];?>"></td>
                          <td><?php echo $row_subjects['lec'];?></td>
                          <td><?php echo $row_subjects['lab'];?></td>
                          <td><?php echo $row_subjects['courseCode'];?></td>
                          <td><?php echo $row_subjects['courseDesc'];?></td>
                          <td><input type="number" class="grade_input" name="grade[]" max="99" maxlength="2"></td>
                        </tr>
                        <?php
                            }
                          }
                          else {
                            echo "<tr><td colspan='6' class='text-center' style='color: #A94442'>No subjects available</td></tr>";
                          }
                        ?>
                      </table>
                    </div>

                    <div class="col-md">
                      <table class="table-cite">
                        <tr>
                          <th colspan="6" class="text-center">Second Year 2nd Sem</th>
                        </tr>
                        <tr>
                          <td style="display: none" class="fw-bold">subj ID</td>
                          <td class="fw-bold">Lec</td>
                          <td class="fw-bold">Lab</td>
                          <td class="fw-bold">Course Code</td>
                          <td class="fw-bold">Course Description</td>
                          <td class="fw-bold">Grade</td>
                        </tr>  
                        <?php
                          include "db_conn.php";
                          $sql_subjects = "SELECT student_tbl.student_id, student_tbl.id_number, student_tbl.fname, student_tbl.lname, eval_cmo_series_tbl.eval_id, eval_cmo_series_tbl.cmoNo, eval_cmo_series_tbl.series, subject_tbl.subj_id, subject_tbl.courseCode, subject_tbl.courseDesc, subject_tbl.units, subject_tbl.lec, subject_tbl.lab, subject_tbl.yr_lvl, subject_tbl.sem
                          FROM student_tbl
                          INNER JOIN eval_cmo_series_tbl ON student_tbl.cmoNo = eval_cmo_series_tbl.cmoNo AND student_tbl.series = eval_cmo_series_tbl.series
                          RIGHT JOIN subject_tbl ON eval_cmo_series_tbl.eval_id = subject_tbl.eval_id
                          WHERE student_tbl.student_id = '$student_id' AND student_tbl.cmoNo = '$row[cmoNo]' AND student_tbl.series = '$row[series]' AND subject_tbl.yr_lvl = '2nd' AND subject_tbl.sem = '2nd'";
                          $result_subjects = $conn->query($sql_subjects);
                            if($result_subjects->num_rows > 0) {
                              while ($row_subjects=$result_subjects->fetch_assoc()) {
                        ?>
                        <tr>
                          <td style="display: none"><input type="hidden" name="subj_id[]" value="<?php echo $row_subjects['subj_id'];?>"><input type="hidden" name="student_id[]" value="<?php echo $row['student_id'];?>"></td>
                          <td><?php echo $row_subjects['lec'];?></td>
                          <td><?php echo $row_subjects['lab'];?></td>
                          <td><?php echo $row_subjects['courseCode'];?></td>
                          <td><?php echo $row_subjects['courseDesc'];?></td>
                          <td><input type="number" class="grade_input" name="grade[]" max="99" maxlength="2"></td>
                        </tr>
                        <?php
                            }
                          }
                          else {
                            echo "<tr><td colspan='6' class='text-center' style='color: #A94442'>No subjects available</td></tr>";
                          }
                        ?>
                      </table>
                    </div>
                  </div>

                  <div class="row mb-5">
                    <div class="col-md">
                      <table class="table-cite">
                        <tr>
                          <th colspan="6" class="text-center">Third Year 1st Sem</th>
                        </tr>
                        <tr>
                          <td style="display: none" class="fw-bold">subj ID</td>
                          <td class="fw-bold">Lec</td>
                          <td class="fw-bold">Lab</td>
                          <td class="fw-bold">Course Code</td>
                          <td class="fw-bold">Course Description</td>
                          <td class="fw-bold">Grade</td>
                        </tr>  
                        <?php
                          include "db_conn.php";
                          $sql_subjects = "SELECT student_tbl.student_id, student_tbl.id_number, student_tbl.fname, student_tbl.lname, eval_cmo_series_tbl.eval_id, eval_cmo_series_tbl.cmoNo, eval_cmo_series_tbl.series, subject_tbl.subj_id, subject_tbl.courseCode, subject_tbl.courseDesc, subject_tbl.units, subject_tbl.lec, subject_tbl.lab, subject_tbl.yr_lvl, subject_tbl.sem
                          FROM student_tbl
                          INNER JOIN eval_cmo_series_tbl ON student_tbl.cmoNo = eval_cmo_series_tbl.cmoNo AND student_tbl.series = eval_cmo_series_tbl.series
                          RIGHT JOIN subject_tbl ON eval_cmo_series_tbl.eval_id = subject_tbl.eval_id
                          WHERE student_tbl.student_id = '$student_id' AND student_tbl.cmoNo = '$row[cmoNo]' AND student_tbl.series = '$row[series]' AND subject_tbl.yr_lvl = '3rd' AND subject_tbl.sem = '1st'";
                          $result_subjects = $conn->query($sql_subjects);
                            if($result_subjects->num_rows > 0) {
                              while ($row_subjects=$result_subjects->fetch_assoc()) {
                        ?>
                        <tr>
                          <td style="display: none"><input type="hidden" name="subj_id[]" value="<?php echo $row_subjects['subj_id'];?>"><input type="hidden" name="student_id[]" value="<?php echo $row['student_id'];?>"></td>
                          <td><?php echo $row_subjects['lec'];?></td>
                          <td><?php echo $row_subjects['lab'];?></td>
                          <td><?php echo $row_subjects['courseCode'];?></td>
                          <td><?php echo $row_subjects['courseDesc'];?></td>
                          <td><input type="number" class="grade_input" name="grade[]" max="99" maxlength="2"></td>
                        </tr>
                        <?php
                            }
                          }
                          else {
                            echo "<tr><td colspan='6' class='text-center' style='color: #A94442'>No subjects available</td></tr>";
                          }
                        ?>
                      </table>
                    </div>

                    <div class="col-md">
                      <table class="table-cite">
                        <tr>
                          <th colspan="6" class="text-center">Third Year 2nd Sem</th>
                        </tr>
                        <tr>
                          <td style="display: none" class="fw-bold">subj ID</td>
                          <td class="fw-bold">Lec</td>
                          <td class="fw-bold">Lab</td>
                          <td class="fw-bold">Course Code</td>
                          <td class="fw-bold">Course Description</td>
                          <td class="fw-bold">Grade</td>
                        </tr>  
                        <?php
                          include "db_conn.php";
                          $sql_subjects = "SELECT student_tbl.student_id, student_tbl.id_number, student_tbl.fname, student_tbl.lname, eval_cmo_series_tbl.eval_id, eval_cmo_series_tbl.cmoNo, eval_cmo_series_tbl.series, subject_tbl.subj_id, subject_tbl.courseCode, subject_tbl.courseDesc, subject_tbl.units, subject_tbl.lec, subject_tbl.lab, subject_tbl.yr_lvl, subject_tbl.sem
                          FROM student_tbl
                          INNER JOIN eval_cmo_series_tbl ON student_tbl.cmoNo = eval_cmo_series_tbl.cmoNo AND student_tbl.series = eval_cmo_series_tbl.series
                          RIGHT JOIN subject_tbl ON eval_cmo_series_tbl.eval_id = subject_tbl.eval_id
                          WHERE student_tbl.student_id = '$student_id' AND student_tbl.cmoNo = '$row[cmoNo]' AND student_tbl.series = '$row[series]' AND subject_tbl.yr_lvl = '3rd' AND subject_tbl.sem = '2nd'";
                          $result_subjects = $conn->query($sql_subjects);
                            if($result_subjects->num_rows > 0) {
                              while ($row_subjects=$result_subjects->fetch_assoc()) {
                        ?>
                        <tr>
                          <td style="display: none"><input type="hidden" name="subj_id[]" value="<?php echo $row_subjects['subj_id'];?>"><input type="hidden" name="student_id[]" value="<?php echo $row['student_id'];?>"></td>
                          <td><?php echo $row_subjects['lec'];?></td>
                          <td><?php echo $row_subjects['lab'];?></td>
                          <td><?php echo $row_subjects['courseCode'];?></td>
                          <td><?php echo $row_subjects['courseDesc'];?></td>
                          <td><input type="number" class="grade_input" name="grade[]" max="99" maxlength="2"></td>
                        </tr>
                        <?php
                            }
                          }
                          else {
                            echo "<tr><td colspan='6' class='text-center' style='color: #A94442'>No subjects available</td></tr>";
                          }
                        ?>
                      </table>
                    </div>
                  </div>

                  <div class="col-md mb-5" id="3rd_yr_middle_termTbl">
                    <table class="table-cite">
                      <tr>
                        <th colspan="6" class="text-center">Third Year Middle Term</th>
                      </tr>
                      <tr>
                        <td style="display: none" class="fw-bold">subj ID</td>
                        <td class="fw-bold">Lec</td>
                        <td class="fw-bold">Lab</td>
                        <td class="fw-bold">Course Code</td>
                        <td class="fw-bold">Course Description</td>
                        <td class="fw-bold">Grade</td>
                      </tr>  
                      <?php
                        include "db_conn.php";
                        $sql_subjects = "SELECT student_tbl.student_id, student_tbl.id_number, student_tbl.fname, student_tbl.lname, eval_cmo_series_tbl.eval_id, eval_cmo_series_tbl.cmoNo, eval_cmo_series_tbl.series, subject_tbl.subj_id, subject_tbl.courseCode, subject_tbl.courseDesc, subject_tbl.units, subject_tbl.lec, subject_tbl.lab, subject_tbl.yr_lvl, subject_tbl.sem
                        FROM student_tbl
                        INNER JOIN eval_cmo_series_tbl ON student_tbl.cmoNo = eval_cmo_series_tbl.cmoNo AND student_tbl.series = eval_cmo_series_tbl.series
                        RIGHT JOIN subject_tbl ON eval_cmo_series_tbl.eval_id = subject_tbl.eval_id
                        WHERE student_tbl.student_id = '$student_id' AND student_tbl.cmoNo = '$row[cmoNo]' AND student_tbl.series = '$row[series]' AND subject_tbl.yr_lvl = '3rd' AND subject_tbl.sem = 'Middle Term'";
                        $result_subjects = $conn->query($sql_subjects);
                          if($result_subjects->num_rows > 0) {
                            while ($row_subjects=$result_subjects->fetch_assoc()) {
                      ?>
                      <tr>
                        <td style="display: none"><input type="hidden" name="subj_id[]" value="<?php echo $row_subjects['subj_id'];?>"><input type="hidden" name="student_id[]" value="<?php echo $row['student_id'];?>"></td>
                        <td><?php echo $row_subjects['lec'];?></td>
                        <td><?php echo $row_subjects['lab'];?></td>
                        <td><?php echo $row_subjects['courseCode'];?></td>
                        <td><?php echo $row_subjects['courseDesc'];?></td>
                        <td><input type="number" class="grade_input" name="grade[]" max="99" maxlength="2"></td>
                      </tr>
                      <?php
                          }
                        }
                        else {
                          echo "<tr><td colspan='6' class='text-center' style='color: #A94442'>No subjects available</td></tr>
                          <script>document.getElementById('3rd_yr_middle_termTbl').style.display = 'none';</script>";
                        }
                      ?>
                    </table>
                  </div>

                  <div class="row">
                    <div class="col-md mb-5">
                      <table class="table-cite">
                        <tr>
                          <th colspan="6" class="text-center">Fourth Year 1st Sem</th>
                        </tr>
                        <tr>
                          <td style="display: none" class="fw-bold">subj ID</td>
                          <td class="fw-bold">Lec</td>
                          <td class="fw-bold">Lab</td>
                          <td class="fw-bold">Course Code</td>
                          <td class="fw-bold">Course Description</td>
                          <td class="fw-bold">Grade</td>
                        </tr>  
                        <?php
                          include "db_conn.php";
                          $sql_subjects = "SELECT student_tbl.student_id, student_tbl.id_number, student_tbl.fname, student_tbl.lname, eval_cmo_series_tbl.eval_id, eval_cmo_series_tbl.cmoNo, eval_cmo_series_tbl.series, subject_tbl.subj_id, subject_tbl.courseCode, subject_tbl.courseDesc, subject_tbl.units, subject_tbl.lec, subject_tbl.lab, subject_tbl.yr_lvl, subject_tbl.sem
                          FROM student_tbl
                          INNER JOIN eval_cmo_series_tbl ON student_tbl.cmoNo = eval_cmo_series_tbl.cmoNo AND student_tbl.series = eval_cmo_series_tbl.series
                          RIGHT JOIN subject_tbl ON eval_cmo_series_tbl.eval_id = subject_tbl.eval_id
                          WHERE student_tbl.student_id = '$student_id' AND student_tbl.cmoNo = '$row[cmoNo]' AND student_tbl.series = '$row[series]' AND subject_tbl.yr_lvl = '4th' AND subject_tbl.sem = '1st'";
                          $result_subjects = $conn->query($sql_subjects);
                            if($result_subjects->num_rows > 0) {
                              while ($row_subjects=$result_subjects->fetch_assoc()) {
                        ?>
                        <tr>
                          <td style="display: none"><input type="hidden" name="subj_id[]" value="<?php echo $row_subjects['subj_id'];?>"><input type="hidden" name="student_id[]" value="<?php echo $row['student_id'];?>"></td>
                          <td><?php echo $row_subjects['lec'];?></td>
                          <td><?php echo $row_subjects['lab'];?></td>
                          <td><?php echo $row_subjects['courseCode'];?></td>
                          <td><?php echo $row_subjects['courseDesc'];?></td>
                          <td><input type="number" class="grade_input" name="grade[]" max="99" maxlength="2"></td>
                        </tr>
                        <?php
                            }
                          }
                          else {
                            echo "<tr><td colspan='6' class='text-center' style='color: #A94442'>No subjects available</td></tr>";
                          }
                        ?>
                      </table>
                    </div>

                    <div class="col-md mb-5">
                      <table class="table-cite">
                        <tr>
                          <th colspan="6" class="text-center">Fourth Year 1st Sem</th>
                        </tr>
                        <tr>
                          <td style="display: none" class="fw-bold">subj ID</td>
                          <td class="fw-bold">Lec</td>
                          <td class="fw-bold">Lab</td>
                          <td class="fw-bold">Course Code</td>
                          <td class="fw-bold">Course Description</td>
                          <td class="fw-bold">Grade</td>
                        </tr>  
                        <?php
                          include "db_conn.php";
                          $sql_subjects = "SELECT student_tbl.student_id, student_tbl.id_number, student_tbl.fname, student_tbl.lname, eval_cmo_series_tbl.eval_id, eval_cmo_series_tbl.cmoNo, eval_cmo_series_tbl.series, subject_tbl.subj_id, subject_tbl.courseCode, subject_tbl.courseDesc, subject_tbl.units, subject_tbl.lec, subject_tbl.lab, subject_tbl.yr_lvl, subject_tbl.sem
                          FROM student_tbl
                          INNER JOIN eval_cmo_series_tbl ON student_tbl.cmoNo = eval_cmo_series_tbl.cmoNo AND student_tbl.series = eval_cmo_series_tbl.series
                          RIGHT JOIN subject_tbl ON eval_cmo_series_tbl.eval_id = subject_tbl.eval_id
                          WHERE student_tbl.student_id = '$student_id' AND student_tbl.cmoNo = '$row[cmoNo]' AND student_tbl.series = '$row[series]' AND subject_tbl.yr_lvl = '4th' AND subject_tbl.sem = '2nd'";
                          $result_subjects = $conn->query($sql_subjects);
                            if($result_subjects->num_rows > 0) {
                              while ($row_subjects=$result_subjects->fetch_assoc()) {
                        ?>
                        <tr>
                          <td style="display: none"><input type="hidden" name="subj_id[]" value="<?php echo $row_subjects['subj_id'];?>"><input type="hidden" name="student_id[]" value="<?php echo $row['student_id'];?>"></td>
                          <td><?php echo $row_subjects['lec'];?></td>
                          <td><?php echo $row_subjects['lab'];?></td>
                          <td><?php echo $row_subjects['courseCode'];?></td>
                          <td><?php echo $row_subjects['courseDesc'];?></td>
                          <td><input type="number" class="grade_input" name="grade[]" max="99" maxlength="2"></td>
                        </tr>
                        <?php
                            }
                          }
                          else {
                            echo "<tr><td colspan='6' class='text-center' style='color: #A94442'>No subjects available</td></tr>";
                          }
                        ?>
                      </table>
                    </div>
                  </div>

                  <div class="d-flex gap-2 mt-4 justify-content-end">
                    <button class="editbtn" type="submit" name="eval_studentBtn">Submit Evaluation</button>
                  </div>
                </div>
              </form>
              <?php
                  }
                }
                else {
                  echo "No data available";
                }
              ?>
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