<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['fname'])) {
  include 'db_conn.php';
  $eval_id = $_GET['eval_id'];
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

    <title>Subjects</title>

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
            <li class="menu-item active open">
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
              <!-- page title -->
              <?php
                include "db_conn.php";
                $sql = "SELECT * FROM eval_cmo_series_tbl WHERE eval_id = $eval_id";
                $result = $conn->query($sql);
                  if($result->num_rows > 0) {
                    while ($row=$result->fetch_assoc()) {
              ?>
              <h4 class="fw-bold p-2"><span class="text-muted fw-light">Evaluation /</span> <?php echo "CMO No. ".$row['cmoNo']." Sereies of ".$row['series'];?></h4>
              <?php
                  }
                }
                else {
                  echo "<center><span style='color: red'>Evaluation not available</span></center>";
                }
              ?>
              <!-- form -->
              <form action="php/evaluationPHP.php?eval_id=<?=$eval_id?>" method="POST" id="add_sub_form">
                <div class="p-4 card mb-4">
                  <h5 class="mb-4">Add Subject</h5>
                  <center>
                    <?php if (isset($_GET['error'])) { ?>
                      <p class="error_msg mb-3" style="margin: 0px 0px 10px 0px"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <?php if (isset($_GET['success_msg'])) { ?>
                      <p class="success_msg mb-3" style="margin: 0px 0px 10px 0px"><?php echo $_GET['success_msg']; ?></p>
                    <?php } ?>
                  </center>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <input type="hidden" class="form-control" name="eval_id" value="<?php echo $eval_id;?>">
                      <label class="form-label">Course Code</label>
                      <input type="text" class="form-control" name="courseCode" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Course Description</label>
                      <input type="text" class="form-control" name="courseDesc" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Units</label>
                      <select class="select2 form-select" name="units" required>
                        <option value=""></option>
                        <option value="9">9</option>
                        <option value="8">8</option>
                        <option value="7">7</option>
                        <option value="6">6</option>
                        <option value="5">5</option>
                        <option value="4">4</option>
                        <option value="3">3</option>
                        <option value="2">2</option>
                        <option value="1">1</option>
                      </select>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Semester</label>
                      <select class="select2 form-select" name="sem" id="sem" required>
                        <option value=""></option>
                        <option value="1st">1st Semester</option>
                        <option value="2nd">2nd Semester</option>
                        <option value="Middle Term">Middle Term</option>
                      </select>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Lecture</label>
                      <select class="select2 form-select" name="lec" required>
                        <option value=""></option>
                        <option value="9">9</option>
                        <option value="8">8</option>
                        <option value="7">7</option>
                        <option value="6">6</option>
                        <option value="5">5</option>
                        <option value="4">4</option>
                        <option value="3">3</option>
                        <option value="2">2</option>
                        <option value="1">1</option>
                        <option value="N/A">N/A</option>
                      </select>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Laboratory</label>
                      <select class="select2 form-select" name="lab" required>
                        <option value=""></option>
                        <option value="9">9</option>
                        <option value="8">8</option>
                        <option value="7">7</option>
                        <option value="6">6</option>
                        <option value="5">5</option>
                        <option value="4">4</option>
                        <option value="3">3</option>
                        <option value="2">2</option>
                        <option value="1">1</option>
                        <option value="N/A">N/A</option>
                      </select>
                    </div>
                    <div class="col-md-6 mb-3">
                      <div class="control-form">
                        <label class="form-label">Year Level</label>
                        <select class="select2 form-select" name="yr_lvl" id="yr_lvl" required>
                          <option value=""></option>
                          <option value="1st">1st Year</option>
                          <option value="2nd">2nd Year</option>
                          <option value="3rd">3rd Year</option>
                          <option value="4th">4th Year</option>
                        </select>
                        <small>error</small>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Pre-requisites</label>
                      <input type="text" class="form-control" name="pre_requisites" required>
                    </div>
                    <div class="d-grid gap-2 d-md-block mt-3">
                      <button class="main-button" type="submit" name="add_sub">Add Subject</button>
                    </div>
                  </div>
                </div>
              </form>
              <!-- / form -->

              <!-- delete modal-->
              <div class="delete-modal" id="modal_delete">
                <div class="modalBox row">
                  <div class="modal_header">
                    <span class="close" id="close_modaldelete">&times;</span>
                    <h4>Delete CMO and Seires</h4>
                  </div>
                  <div class="modal_body">
                    <form action="php/evaluationPHP.php?eval_id=<?=$eval_id?>" method="POST">
                      <input type="hidden" name="del_subj_id" id="del_subj_id">
                      <p><b>Course Code:</b> <span id="del_courseCode"></span></p>
                      <p><b>Course Description:</b> <span id="del_courseDesc"></span></p>
                      <p><b>Units:</b> <span id="del_units"></span></p>
                      <br>
                      <button class="main-button" type="submit" name="del_subjectBtn">Delete</button>
                    </form>
                  </div>
                </div>
              </div>
              <!-- / delete modal -->
              
              <!-- fetch subjects -->
              <?php
                include "db_conn.php";
                $sql = "SELECT * FROM subject_tbl WHERE eval_id = $eval_id";
                $result = $conn->query($sql);
                  if($result->num_rows > 0) {
                    while ($row=$result->fetch_assoc()) {
              ?>
              <center>
                <?php if (isset($_GET['del_sub_msg'])) { ?>
                  <p class="success_msg mb-3" style="margin: 0px 0px 10px 0px"><?php echo $_GET['del_sub_msg']; ?></p>
                <?php } ?>
                <?php if (isset($_GET['success_updSub_msg'])) { ?>
                  <p class="success_msg mb-3" style="margin: 0px 0px 10px 0px"><?php echo $_GET['success_updSub_msg']; ?></p>
                <?php } ?>
              </center>
              <h5 class="fw-bold p-2"><span class="text-muted fw-light">1st Year /</span> 1st Sem</h5>
              <div class="section-container card overflow-auto">
                <!-- table wrapper -->
                <h6 class="fw-bold p-2">1st Sem</h6>
                <table class="table-cite" id="tbl_1styr_1stsem">
                  <thead>
                    <tr>
                      <th scope="col" style="display: none">ID</th>
                      <th scope="col">Course Code</th>
                      <th scope="col">Course Description</th>
                      <th scope="col">Units</th>
                      <th scope="col">Lec</th>
                      <th scope="col">Lab</th>
                      <th scope="col">Pre-requisites</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    include "db_conn.php";
                    $sql = "SELECT * FROM subject_tbl WHERE yr_lvl = '1st' AND sem = '1st' AND eval_id = '$eval_id' ORDER BY subj_id ASC";
                    $result = $conn->query($sql);
                      if($result->num_rows > 0) {
                        while ($row=$result->fetch_assoc()) {
                  ?>
                  <tr>
                    <td style="display: none"><?php echo $row['subj_id'];?></td>
                    <td><?php echo $row['courseCode'];?></td>
                    <td><?php echo $row['courseDesc'];?></td>
                    <td><?php echo $row['units'];?></td>
                    <td><?php echo $row['lec'];?></td>
                    <td><?php echo $row['lab'];?></td>
                    <td><?php echo $row['pre_requisites'];?></td>
                    <td>
                      <a href="upd_subjects.php?subj_id=<?=$row['subj_id'];?>"><button class="editbtn">Edit</button></a>
                      <button class="delbtn" name="del_subBtn" id="del_subBtn" data-modal="modal_delete">Del</button></td>
                  </tr>
                  <?php
                      }
                    }
                    else {
                      echo "<tr><td colspan='7' style='color: #ff0000;'><center>No subjects available</center></td></tr>";
                    }
                  ?>
                  </tbody>
                </table>
                <?php
                  $sql = "SELECT SUM(lab) as total_lab, SUM(lec) as total_lec, SUM(units) as total_units FROM subject_tbl WHERE yr_lvl = '1st' AND sem = '1st' AND  eval_id = '$eval_id'";
                  $sql_result = mysqli_query($conn, $sql);

                  if ($sql_result->num_rows > 0) {
                    while($total_counts = $sql_result->fetch_assoc()) {
                      echo "<p class='text-end me-5 mt-4'><span class='me-5'>Total Units: ".$total_counts['total_units']."</span> <span class='me-5'>Total Lec: ".$total_counts['total_lec']."</span> <span class='me-5'>Total Lab: ".$total_counts['total_lab']."</span></p>";
                    }
                  }
                ?>
              </div>

              <h5 class="fw-bold p-2 mt-3"><span class="text-muted fw-light">1st Year /</span> 2nd Sem</h5>
              <div class="section-container card overflow-auto">
                <!-- table wrapper -->
                <h6 class="fw-bold p-2">2nd Sem</h6>
                <table class="table-cite" id="tbl_1styr_2ndsem">
                  <thead>
                    <tr>
                      <th scope="col" style="display: none">ID</th>
                      <th scope="col">Course Code</th>
                      <th scope="col">Course Description</th>
                      <th scope="col">Units</th>
                      <th scope="col">Lec</th>
                      <th scope="col">Lab</th>
                      <th scope="col">Pre-requisites</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    include "db_conn.php";
                    $sql = "SELECT * FROM subject_tbl WHERE yr_lvl = '1st' AND sem = '2nd' AND eval_id = '$eval_id' ORDER BY subj_id ASC";
                    $result = $conn->query($sql);
                      if($result->num_rows > 0) {
                        while ($row=$result->fetch_assoc()) {
                  ?>
                  <tr>
                    <td style="display: none"><?php echo $row['subj_id'];?></td>
                    <td><?php echo $row['courseCode'];?></td>
                    <td><?php echo $row['courseDesc'];?></td>
                    <td><?php echo $row['units'];?></td>
                    <td><?php echo $row['lec'];?></td>
                    <td><?php echo $row['lab'];?></td>
                    <td><?php echo $row['pre_requisites'];?></td>
                    <td>
                      <a href="upd_subjects.php?subj_id=<?=$row['subj_id'];?>"><button class="editbtn">Edit</button></a>
                      <button class="delbtn" name="del_subBtn" id="del_subBtn" data-modal="modal_delete">Del</button></td>
                  </tr>
                  <?php
                      }
                    }
                    else {
                      echo "<tr><td colspan='7' style='color: #ff0000;'><center>No subjects available</center></td></tr>";
                    }
                  ?>
                  </tbody>
                </table>
                <?php
                  $sql = "SELECT SUM(lab) as total_lab, SUM(lec) as total_lec, SUM(units) as total_units FROM subject_tbl WHERE yr_lvl = '1st' AND sem = '2nd' AND  eval_id = '$eval_id'";
                  $sql_result = mysqli_query($conn, $sql);

                  if ($sql_result->num_rows > 0) {
                    while($total_counts = $sql_result->fetch_assoc()) {
                      echo "<p class='text-end me-5 mt-4'><span class='me-5'>Total Units: ".$total_counts['total_units']."</span> <span class='me-5'>Total Lec: ".$total_counts['total_lec']."</span> <span class='me-5'>Total Lab: ".$total_counts['total_lab']."</span></p>";
                    }
                  }
                ?>
              </div>

              <!-- <hr class="my-0 mt-5 mb-5"> -->

              <h5 class="fw-bold p-2 mt-4"><span class="text-muted fw-light">2nd Year /</span> 1st Sem</h5>
              <div class="section-container card overflow-auto">
                <!-- table wrapper -->
                <h6 class="fw-bold p-2">1st Sem</h6>
                <table class="table-cite" id="tbl_2ndyr_1stsem">
                  <thead>
                    <tr>
                      <th scope="col" style="display: none">ID</th>
                      <th scope="col">Course Code</th>
                      <th scope="col">Course Description</th>
                      <th scope="col">Units</th>
                      <th scope="col">Lec</th>
                      <th scope="col">Lab</th>
                      <th scope="col">Pre-requisites</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    include "db_conn.php";
                    $sql = "SELECT * FROM subject_tbl WHERE yr_lvl = '2nd' AND sem = '1st' AND eval_id = '$eval_id' ORDER BY subj_id ASC";
                    $result = $conn->query($sql);
                      if($result->num_rows > 0) {
                        while ($row=$result->fetch_assoc()) {
                  ?>
                  <tr>
                    <td style="display: none"><?php echo $row['subj_id'];?></td>
                    <td><?php echo $row['courseCode'];?></td>
                    <td><?php echo $row['courseDesc'];?></td>
                    <td><?php echo $row['units'];?></td>
                    <td><?php echo $row['lec'];?></td>
                    <td><?php echo $row['lab'];?></td>
                    <td><?php echo $row['pre_requisites'];?></td>
                    <td>
                      <a href="upd_subjects.php?subj_id=<?=$row['subj_id'];?>"><button class="editbtn">Edit</button></a>
                      <button class="delbtn" name="del_subBtn" id="del_subBtn" data-modal="modal_delete">Del</button></td>
                  </tr>
                  <?php
                      }
                    }
                    else {
                      echo "<tr><td colspan='7' style='color: #ff0000;'><center>No subjects available</center></td></tr>";
                    }
                  ?>
                  </tbody>
                </table>
                <?php
                  $sql = "SELECT SUM(lab) as total_lab, SUM(lec) as total_lec, SUM(units) as total_units FROM subject_tbl WHERE yr_lvl = '2nd' AND sem = '1st' AND  eval_id = '$eval_id'";
                  $sql_result = mysqli_query($conn, $sql);

                  if ($sql_result->num_rows > 0) {
                    while($total_counts = $sql_result->fetch_assoc()) {
                      echo "<p class='text-end me-5 mt-4'><span class='me-5'>Total Units: ".$total_counts['total_units']."</span> <span class='me-5'>Total Lec: ".$total_counts['total_lec']."</span> <span class='me-5'>Total Lab: ".$total_counts['total_lab']."</span></p>";
                    }
                  }
                ?>
              </div>

              <h5 class="fw-bold p-2 mt-4"><span class="text-muted fw-light">2nd Year /</span> 2nd Sem</h5>
              <div class="section-container card overflow-auto">
                <!-- table wrapper -->
                <h6 class="fw-bold p-2">2nd Sem</h6>
                <table class="table-cite" id="tbl_2ndyr_2ndsem">
                  <thead>
                    <tr>
                      <th scope="col" style="display: none">ID</th>
                      <th scope="col">Course Code</th>
                      <th scope="col">Course Description</th>
                      <th scope="col">Units</th>
                      <th scope="col">Lec</th>
                      <th scope="col">Lab</th>
                      <th scope="col">Pre-requisites</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    include "db_conn.php";
                    $sql = "SELECT * FROM subject_tbl WHERE yr_lvl = '2nd' AND sem = '2nd' AND eval_id = '$eval_id' ORDER BY subj_id ASC";
                    $result = $conn->query($sql);
                      if($result->num_rows > 0) {
                        while ($row=$result->fetch_assoc()) {
                  ?>
                  <tr>
                    <td style="display: none"><?php echo $row['subj_id'];?></td>
                    <td><?php echo $row['courseCode'];?></td>
                    <td><?php echo $row['courseDesc'];?></td>
                    <td><?php echo $row['units'];?></td>
                    <td><?php echo $row['lec'];?></td>
                    <td><?php echo $row['lab'];?></td>
                    <td><?php echo $row['pre_requisites'];?></td>
                    <td>
                      <a href="upd_subjects.php?subj_id=<?=$row['subj_id'];?>"><button class="editbtn">Edit</button></a>
                      <button class="delbtn" name="del_subBtn" id="del_subBtn" data-modal="modal_delete">Del</button></td>
                  </tr>
                  <?php
                      }
                    }
                    else {
                      echo "<tr><td colspan='7' style='color: #ff0000;'><center>No subjects available</center></td></tr>";
                    }
                  ?>
                  </tbody>
                </table>
                <?php
                  $sql = "SELECT SUM(lab) as total_lab, SUM(lec) as total_lec, SUM(units) as total_units FROM subject_tbl WHERE yr_lvl = '2nd' AND sem = '2nd' AND  eval_id = '$eval_id'";
                  $sql_result = mysqli_query($conn, $sql);

                  if ($sql_result->num_rows > 0) {
                    while($total_counts = $sql_result->fetch_assoc()) {
                      echo "<p class='text-end me-5 mt-4'><span class='me-5'>Total Units: ".$total_counts['total_units']."</span> <span class='me-5'>Total Lec: ".$total_counts['total_lec']."</span> <span class='me-5'>Total Lab: ".$total_counts['total_lab']."</span></p>";
                    }
                  }
                ?>
              </div>

              <h5 class="fw-bold p-2 mt-4"><span class="text-muted fw-light">3rd Year /</span> 1st Sem</h5>
              <div class="section-container card overflow-auto">
                <!-- table wrapper -->
                <h6 class="fw-bold p-2">1st Sem</h6>
                <table class="table-cite" id="tbl_3rdyr_1stsem">
                  <thead>
                    <tr>
                      <th scope="col" style="display: none">ID</th>
                      <th scope="col">Course Code</th>
                      <th scope="col">Course Description</th>
                      <th scope="col">Units</th>
                      <th scope="col">Lec</th>
                      <th scope="col">Lab</th>
                      <th scope="col">Pre-requisites</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    include "db_conn.php";
                    $sql = "SELECT * FROM subject_tbl WHERE yr_lvl = '3rd' AND sem = '1st' AND eval_id = '$eval_id' ORDER BY subj_id ASC";
                    $result = $conn->query($sql);
                      if($result->num_rows > 0) {
                        while ($row=$result->fetch_assoc()) {
                  ?>
                  <tr>
                    <td style="display: none"><?php echo $row['subj_id'];?></td>
                    <td><?php echo $row['courseCode'];?></td>
                    <td><?php echo $row['courseDesc'];?></td>
                    <td><?php echo $row['units'];?></td>
                    <td><?php echo $row['lec'];?></td>
                    <td><?php echo $row['lab'];?></td>
                    <td><?php echo $row['pre_requisites'];?></td>
                    <td>
                      <a href="upd_subjects.php?subj_id=<?=$row['subj_id'];?>"><button class="editbtn">Edit</button></a>
                      <button class="delbtn" name="del_subBtn" id="del_subBtn" data-modal="modal_delete">Del</button></td>
                  </tr>
                  <?php
                      }
                    }
                    else {
                      echo "<tr><td colspan='7' style='color: #ff0000;'><center>No subjects available</center></td></tr>";
                    }
                  ?>
                  </tbody>
                </table>
                <?php
                  $sql = "SELECT SUM(lab) as total_lab, SUM(lec) as total_lec, SUM(units) as total_units FROM subject_tbl WHERE yr_lvl = '3rd' AND sem = '1st' AND  eval_id = '$eval_id'";
                  $sql_result = mysqli_query($conn, $sql);

                  if ($sql_result->num_rows > 0) {
                    while($total_counts = $sql_result->fetch_assoc()) {
                      echo "<p class='text-end me-5 mt-4'><span class='me-5'>Total Units: ".$total_counts['total_units']."</span> <span class='me-5'>Total Lec: ".$total_counts['total_lec']."</span> <span class='me-5'>Total Lab: ".$total_counts['total_lab']."</span></p>";
                    }
                  }
                ?>
              </div>

              <h5 class="fw-bold p-2 mt-4"><span class="text-muted fw-light">3rd Year /</span> 2nd Sem</h5>
              <div class="section-container card overflow-auto">
                <!-- table wrapper -->
                <h6 class="fw-bold p-2">2nd Sem</h6>
                <table class="table-cite" id="tbl_3rdyr_2ndsem">
                  <thead>
                    <tr>
                      <th scope="col" style="display: none">ID</th>
                      <th scope="col">Course Code</th>
                      <th scope="col">Course Description</th>
                      <th scope="col">Units</th>
                      <th scope="col">Lec</th>
                      <th scope="col">Lab</th>
                      <th scope="col">Pre-requisites</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    include "db_conn.php";
                    $sql = "SELECT * FROM subject_tbl WHERE yr_lvl = '3rd' AND sem = '2nd' AND eval_id = '$eval_id' ORDER BY subj_id ASC";
                    $result = $conn->query($sql);
                      if($result->num_rows > 0) {
                        while ($row=$result->fetch_assoc()) {
                  ?>
                  <tr>
                    <td style="display: none"><?php echo $row['subj_id'];?></td>
                    <td><?php echo $row['courseCode'];?></td>
                    <td><?php echo $row['courseDesc'];?></td>
                    <td><?php echo $row['units'];?></td>
                    <td><?php echo $row['lec'];?></td>
                    <td><?php echo $row['lab'];?></td>
                    <td><?php echo $row['pre_requisites'];?></td>
                    <td>
                      <a href="upd_subjects.php?subj_id=<?=$row['subj_id'];?>"><button class="editbtn">Edit</button></a>
                      <button class="delbtn" name="del_subBtn" id="del_subBtn" data-modal="modal_delete">Del</button></td>
                  </tr>
                  <?php
                      }
                    }
                    else {
                      echo "<tr><td colspan='7' style='color: #ff0000;'><center>No subjects available</center></td></tr>";
                    }
                  ?>
                  </tbody>
                </table>
                <?php
                  $sql = "SELECT SUM(lab) as total_lab, SUM(lec) as total_lec, SUM(units) as total_units FROM subject_tbl WHERE yr_lvl = '3rd' AND sem = '2nd' AND  eval_id = '$eval_id'";
                  $sql_result = mysqli_query($conn, $sql);

                  if ($sql_result->num_rows > 0) {
                    while($total_counts = $sql_result->fetch_assoc()) {
                      echo "<p class='text-end me-5 mt-4'><span class='me-5'>Total Units: ".$total_counts['total_units']."</span> <span class='me-5'>Total Lec: ".$total_counts['total_lec']."</span> <span class='me-5'>Total Lab: ".$total_counts['total_lab']."</span></p>";
                    }
                  }
                ?>
              </div>

              <h5 class="fw-bold p-2 mt-4"><span class="text-muted fw-light">3rd Year /</span> Middle Term</h5>
              <div class="section-container card overflow-auto">
                <!-- table wrapper -->
                <h6 class="fw-bold p-2">Middle Term</h6>
                <table class="table-cite" id="tbl_3rdyr_middleTerm">
                  <thead>
                    <tr>
                      <th scope="col" style="display: none">ID</th>
                      <th scope="col">Course Code</th>
                      <th scope="col">Course Description</th>
                      <th scope="col">Units</th>
                      <th scope="col">Lec</th>
                      <th scope="col">Lab</th>
                      <th scope="col">Pre-requisites</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    include "db_conn.php";
                    $sql = "SELECT * FROM subject_tbl WHERE yr_lvl = '3rd' AND sem = 'Middle Term' AND eval_id = '$eval_id' ORDER BY subj_id ASC";
                    $result = $conn->query($sql);
                      if($result->num_rows > 0) {
                        while ($row=$result->fetch_assoc()) {
                  ?>
                  <tr>
                    <td style="display: none"><?php echo $row['subj_id'];?></td>
                    <td><?php echo $row['courseCode'];?></td>
                    <td><?php echo $row['courseDesc'];?></td>
                    <td><?php echo $row['units'];?></td>
                    <td><?php echo $row['lec'];?></td>
                    <td><?php echo $row['lab'];?></td>
                    <td><?php echo $row['pre_requisites'];?></td>
                    <td>
                      <a href="upd_subjects.php?subj_id=<?=$row['subj_id'];?>"><button class="editbtn">Edit</button></a>
                      <button class="delbtn" name="del_subBtn" id="del_subBtn" data-modal="modal_delete">Del</button></td>
                  </tr>
                  <?php
                      }
                    }
                    else {
                      echo "<tr><td colspan='7' style='color: #ff0000;'>
                      <center>No subjects available</center>
                      </td></tr>";
                    }
                  ?>
                  </tbody>
                </table>
                <?php
                  $sql = "SELECT SUM(lab) as total_lab, SUM(lec) as total_lec, SUM(units) as total_units FROM subject_tbl WHERE yr_lvl = '3rd' AND sem = 'Middle Term' AND  eval_id = '$eval_id'";
                  $sql_result = mysqli_query($conn, $sql);

                  if ($sql_result->num_rows > 0) {
                    while($total_counts = $sql_result->fetch_assoc()) {
                      echo "<p class='text-end me-5 mt-4'><span class='me-5'>Total Units: ".$total_counts['total_units']."</span> <span class='me-5'>Total Lec: ".$total_counts['total_lec']."</span> <span class='me-5'>Total Lab: ".$total_counts['total_lab']."</span></p>";
                    }
                  }
                ?>
              </div>

              <h5 class="fw-bold p-2 mt-4"><span class="text-muted fw-light">4th Year /</span> 1st Sem</h5>
              <div class="section-container card overflow-auto">
                <!-- table wrapper -->
                <h6 class="fw-bold p-2">1st Sem</h6>
                <table class="table-cite" id="tbl_4thyr_1stsem">
                  <thead>
                    <tr>
                      <th scope="col" style="display: none">ID</th>
                      <th scope="col">Course Code</th>
                      <th scope="col">Course Description</th>
                      <th scope="col">Units</th>
                      <th scope="col">Lec</th>
                      <th scope="col">Lab</th>
                      <th scope="col">Pre-requisites</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    include "db_conn.php";
                    $sql = "SELECT * FROM subject_tbl WHERE yr_lvl = '4th' AND sem = '1st' AND eval_id = '$eval_id' ORDER BY subj_id ASC";
                    $result = $conn->query($sql);
                      if($result->num_rows > 0) {
                        while ($row=$result->fetch_assoc()) {
                  ?>
                  <tr>
                    <td style="display: none"><?php echo $row['subj_id'];?></td>
                    <td><?php echo $row['courseCode'];?></td>
                    <td><?php echo $row['courseDesc'];?></td>
                    <td><?php echo $row['units'];?></td>
                    <td><?php echo $row['lec'];?></td>
                    <td><?php echo $row['lab'];?></td>
                    <td><?php echo $row['pre_requisites'];?></td>
                    <td>
                      <a href="upd_subjects.php?subj_id=<?=$row['subj_id'];?>"><button class="editbtn">Edit</button></a>
                      <button class="delbtn" name="del_subBtn" id="del_subBtn" data-modal="modal_delete">Del</button></td>
                  </tr>
                  <?php
                      }
                    }
                    else {
                      echo "<tr><td colspan='7' style='color: #ff0000;'><center>No subjects available</center></td></tr>";
                    }
                  ?>
                  </tbody>
                </table>
                <?php
                  $sql = "SELECT SUM(lab) as total_lab, SUM(lec) as total_lec, SUM(units) as total_units FROM subject_tbl WHERE yr_lvl = '4th' AND sem = '1st' AND  eval_id = '$eval_id'";
                  $sql_result = mysqli_query($conn, $sql);

                  if ($sql_result->num_rows > 0) {
                    while($total_counts = $sql_result->fetch_assoc()) {
                      echo "<p class='text-end me-5 mt-4'><span class='me-5'>Total Units: ".$total_counts['total_units']."</span> <span class='me-5'>Total Lec: ".$total_counts['total_lec']."</span> <span class='me-5'>Total Lab: ".$total_counts['total_lab']."</span></p>";
                    }
                  }
                ?>
              </div>

              <h5 class="fw-bold p-2 mt-4"><span class="text-muted fw-light">4th Year /</span> 2nd Sem</h5>
              <div class="section-container card overflow-auto">
                <!-- table wrapper -->
                <h6 class="fw-bold p-2">2nd Sem</h6>
                <table class="table-cite" id="tbl_4thyr_2ndsem">
                  <thead>
                    <tr>
                      <th scope="col" style="display: none">ID</th>
                      <th scope="col">Course Code</th>
                      <th scope="col">Course Description</th>
                      <th scope="col">Units</th>
                      <th scope="col">Lec</th>
                      <th scope="col">Lab</th>
                      <th scope="col">Pre-requisites</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    include "db_conn.php";
                    $sql = "SELECT * FROM subject_tbl WHERE yr_lvl = '4th' AND sem = '2nd' AND eval_id = '$eval_id' ORDER BY subj_id ASC";
                    $result = $conn->query($sql);
                      if($result->num_rows > 0) {
                        while ($row=$result->fetch_assoc()) {
                  ?>
                  <tr>
                    <td style="display: none"><?php echo $row['subj_id'];?></td>
                    <td><?php echo $row['courseCode'];?></td>
                    <td><?php echo $row['courseDesc'];?></td>
                    <td><?php echo $row['units'];?></td>
                    <td><?php echo $row['lec'];?></td>
                    <td><?php echo $row['lab'];?></td>
                    <td><?php echo $row['pre_requisites'];?></td>
                    <td>
                      <a href="upd_subjects.php?subj_id=<?=$row['subj_id'];?>"><button class="editbtn">Edit</button></a>
                      <button class="delbtn" name="del_subBtn" id="del_subBtn" data-modal="modal_delete">Del</button></td>
                  </tr>
                  <?php
                      }
                    }
                    else {
                      echo "<tr><td colspan='7' style='color: #ff0000;'><center>No subjects available</center></td></tr>";
                    }
                  ?>
                  </tbody>
                </table>
                <?php
                  $sql = "SELECT SUM(lab) as total_lab, SUM(lec) as total_lec, SUM(units) as total_units FROM subject_tbl WHERE yr_lvl = '4th' AND sem = '2nd' AND  eval_id = '$eval_id'";
                  $sql_result = mysqli_query($conn, $sql);

                  if ($sql_result->num_rows > 0) {
                    while($total_counts = $sql_result->fetch_assoc()) {
                      echo "<p class='text-end me-5 mt-4'><span class='me-5'>Total Units: ".$total_counts['total_units']."</span> <span class='me-5'>Total Lec: ".$total_counts['total_lec']."</span> <span class='me-5'>Total Lab: ".$total_counts['total_lab']."</span></p>";
                    }
                  }
                ?>
              </div>
              <?php
                  }
                }
                else {
                  echo "<center><span style='color: red'>CMO and series subjects unavailable</span></center>";
                }
              ?>
              <!-- / fetch subjects -->
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
    <script type="text/javascript" src="js/view_subjectsJS.js"></script>
  </body>
</html>
<?php
} else {
  header("Location: index.php");
  exit();
}

?>