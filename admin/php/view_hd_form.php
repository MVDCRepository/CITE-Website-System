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

    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="../../cite/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="../../cite/css/responsive.css">
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
              <!-- page header and search -->
              <div class="d-flex flex-wrap">
                <div class="p-2 flex-fill">
                  <!-- page title -->
                  <h4 class="fw-bold p-2"><span class="text-muted fw-light">Students /</span> Health Declaration Form</h4>
                </div>
                <div class="p-2 flex-fill">
                  <!-- search -->
                  
                  <!-- <form method="POST">
                    <label>Search</label><input type="text" class="search" placeholder="Search..." name="search" value="<?php echo $search;?>">
                  </form> -->
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
              <div class="section-container" style="overflow: hidden;">
                <?php
                  include "db_conn.php";
                  $sql = "SELECT
                          student_pri_info_tbl.*,

                          student_basic_info_tbl.*,
                          
                          health_df_tbl.*

                          FROM student_pri_info_tbl

                          INNER JOIN student_basic_info_tbl ON student_pri_info_tbl.student_id = student_basic_info_tbl.student_id
                          
                          INNER JOIN health_df_tbl ON student_pri_info_tbl.student_id = health_df_tbl.student_id

                          WHERE health_df_tbl.student_id = '$student_id'";
                  $result = mysqli_query($conn, $sql);

                  if($result->num_rows > 0) {
                    while ($row=$result->fetch_assoc()) {
                ?>
                <div class="health_df_cont">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-12">
                              <div class="health_df_header">
                                  <img src="../../cite/images/ucu_logo.png">
                                  <div class="health_df_title">
                                      <h1>URDANETA CITY UNIVERSITY</h1>
                                      <h3>COLLEGE OF INFORMATION AND TECHNOLOGY EDUCATION</h3>
                                      <h2><strong>H</strong>ealth <strong>D</strong>eclaration <strong>F</strong>orm</h2>
                                  </div>
                                  <img src="../../cite/images/cite_logo.png">
                              </div>
                              <p>Dear Student/Visitor, <br>
                                  To prevent the spread of COVID-19 and reduce the risk of exposure to our students,
                                  employees, and visitors, we are conducting a simple screening survey. Your participation is
                                  important to help us take precautionary measures to protect you and everyone in the campus
                                  as well as for use during contact tracing. Thank you.</p>
                              <div class="health_df_student_info">
                                  <div class="container">
                                      <div class="row">
                                          <div class="col-md-6">
                                              <div class="health_df_input">
                                                  <label for="submit_date">Date:</label>
                                                  <input type="date" id="submit_date" name="submit_date" value="<?php echo $row['submit_date'];?>" readonly>
                                              </div>
                                              <div class="health_df_input">
                                                  <label for="health_df_name">Name:</label>
                                                  <input type="text" id="health_df_name" name="health_df_name" value="<?php echo $row['lname'].", ".$row['fname']." ".$row['mname']." ".$row['sname'];?>" readonly>
                                              </div>
                                              <div class="health_df_input">
                                                  <label for="health_df_address">Address:</label>
                                                  <input type="text" id="health_df_address" name="health_df_address" value="<?php echo $row['province'].", ".$row['city'].", ".$row['house_num']." ".$row['barangay'];?>" required>
                                              </div>
                                              <div class="health_df_input">
                                                  <label for="health_df_contact">Contact Number:</label>
                                                  <input type="text" id="health_df_contact" name="health_df_contact" value="<?php echo $row['contact_num'];?>" required>
                                              </div>
                                              <p>Purpose of Visit:</p>
                                              <div class="health_df_input_purpose">
                                                  <div class="purpose_input">
                                                      <input type="checkbox" <?php if ($row['attend_limited_f2f'] == "checked") { echo "checked";}?> id="chck_limited_f2f" name="chck_limited_f2f" value="checked" disabled>
                                                      <label for="purpose_cb">Attend limited face-to-face classes</label>
                                                  </div>
                                                  <div class="purpose_input">
                                                      <input type="checkbox" <?php if ($row['office_transaction'] != "") { echo "checked";}?> id="health_df_office" name="health_df_office" value="Office transaction: " disabled>
                                                      <label for="health_df_office">Office transaction:<input type="text"
                                                              id="office_transaction_text" name="office_transaction_text" value="<?php echo $row['office_transaction'];?>" readonly></label>
                                                  </div>
                                                  <div class="purpose_input">
                                                      <input type="checkbox" <?php if ($row['others'] != "") { echo "checked";}?> id="health_df_others" name="health_df_others" value="Others:" disabled>
                                                      <label for="health_df_others">Others:<input type="text"
                                                              id="others_text" name="others_text" value="<?php echo $row['others'];?>" disabled="disabled"></label>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="temp_cont">
                                                  <div class="container">
                                                      <div class="row">
                                                          <div class="col-md-8">
                                                              <h1>Body Temperature:</h1>
                                                              <p>Instruction: Let the person on duty in front of gate measure
                                                                  your temperature.</p>
                                                          </div>
                                                          <div class="col-md-4">
                                                              <div class="temp_box"></div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="illness_section">
                                  <table>
                                      <tr>
                                          <td rowspan="10">
                                              <p>1. Are your currently experiencing symptoms, or have experienced, within the
                                                  last 14 days:</p>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>Symptoms</td>
                                          <td>YES</td>
                                          <td>NO</td>
                                      </tr>
                                      <tr>
                                          <td>a. Sore throat</td>
                                          <td>
                                              <input type="radio" <?php if ($row['sore_throat'] == "Yes") { echo "checked";}?> name="sore_throat" id="st_yes" value="Yes" disabled>
                                          </td>
                                          <td>
                                              <input type="radio" <?php if ($row['sore_throat'] == "No") { echo "checked";}?> name="sore_throat" id="st_no" value="No" disabled>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>b. Shortness of Breath</td>
                                          <td>
                                              <input type="radio" <?php if ($row['shortness_of_breath'] == "Yes") { echo "checked";}?> name="shortness_of_breath" id="sb_yes" value="Yes" disabled>
                                          </td>
                                          <td>
                                              <input type="radio" <?php if ($row['shortness_of_breath'] == "No") { echo "checked";}?> name="shortness_of_breath" id="sb_no" value="No" disabled>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>c. Body pains</td>
                                          <td>
                                              <input type="radio" <?php if ($row['body_pain'] == "Yes") { echo "checked";}?> name="body_pain" id="bp_yes" value="Yes" disabled>
                                          </td>
                                          <td>
                                              <input type="radio" <?php if ($row['body_pain'] == "No") { echo "checked";}?> name="body_pain" id="bp_no" value="No" disabled>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>d. Headache</td>
                                          <td>
                                              <input type="radio" <?php if ($row['headache'] == "Yes") { echo "checked";}?> name="headache" id="ha_yes" value="Yes" disabled>
                                          </td>
                                          <td>
                                              <input type="radio" <?php if ($row['headache'] == "No") { echo "checked";}?> name="headache" id="ha_no" value="No" disabled>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>e. Fever for the past few days</td>
                                          <td>
                                              <input type="radio" <?php if ($row['fever'] == "Yes") { echo "checked";}?> name="fever" id="fvr_yes" value="Yes" disabled>
                                          </td>
                                          <td>
                                              <input type="radio" <?php if ($row['fever'] == "No") { echo "checked";}?> name="fever" id="fvr_no" value="No" disabled>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>f. Loss of taste or smell</td>
                                          <td>
                                              <input type="radio" <?php if ($row['loss'] == "Yes") { echo "checked";}?> name="loss" id="lss_yes" value="Yes" disabled>
                                          </td>
                                          <td>
                                              <input type="radio" <?php if ($row['loss'] == "No") { echo "checked";}?> name="loss" id="lss_no" value="No" disabled>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>g. Cough and/or cold</td>
                                          <td>
                                              <input type="radio" <?php if ($row['cough_cold'] == "Yes") { echo "checked";}?> name="cough_cold" id="cc_yes" value="Yes" disabled>
                                          </td>
                                          <td>
                                              <input type="radio" <?php if ($row['cough_cold'] == "No") { echo "checked";}?> name="cough_cold" id="cc_no" value="No" disabled>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>h. Diarrhea</td>
                                          <td>
                                              <input type="radio" <?php if ($row['diarrhea'] == "Yes") { echo "checked";}?> name="diarrhea" id="drh_yes" value="Yes" disabled>
                                          </td>
                                          <td>
                                              <input type="radio" <?php if ($row['diarrhea'] == "No") { echo "checked";}?> name="diarrhea" id="drh_no" value="No" disabled>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td colspan="2">2. Have you worked together or stayed in the same close environment
                                              of a confirmed COVID-19 case?</td>
                                          <td>
                                              <input type="radio" <?php if ($row['question_2'] == "Yes") { echo "checked";}?> name="question_2" id="qstn_2_yes" value="Yes" disabled>
                                          </td>
                                          <td>
                                              <input type="radio" <?php if ($row['question_2'] == "No") { echo "checked";}?> name="question_2" id="qstn_2_no" value="No" disabled>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td colspan="2">3. Have you had contact with anyone with cough, colds, fever, and
                                              sore throat?</td>
                                          <td>
                                              <input type="radio" <?php if ($row['question_3'] == "Yes") { echo "checked";}?> name="question_3" id="qstn_3_yes" value="Yes" disabled>
                                          </td>
                                          <td>
                                              <input type="radio" <?php if ($row['question_3'] == "No") { echo "checked";}?> name="question_3" id="qstn_3_no" value="No" disabled>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td colspan="2">
                                              4. Have your travelled outside of the Philippines in the last 14 days? <br> If
                                              yes, where:
                                              <input type="text" name="question_4_where" id="question_4_where" value="<?php echo $row['question_4_where'];?>" disabled>
                                          </td>
                                          <td>
                                              <input type="radio" name="question_4" <?php if ($row['question_4'] == "Yes") { echo "checked";}?> id="qstn_4_yes" value="Yes" onclick="disableField_qstn4()" disabled>
                                          </td>
                                          <td>
                                              <input type="radio" name="question_4" <?php if ($row['question_4'] == "No") { echo "checked";}?> id="qstn_4_no" value="No" onclick="disableField_qstn4()" disabled>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td colspan="2">
                                              5. Have your travelled outside of your stated address in the last 14 days? <br>
                                              If yes, where:
                                              <input type="text" id="question_5_where" name="question_5_where" value="<?php echo $row['question_5_where'];?>" disabled>
                                          </td>
                                          <td>
                                              <input type="radio" <?php if ($row['question_5'] == "Yes") { echo "checked";}?> name="question_5" id="qstn_5_yes" value="Yes" disabled>
                                          </td>
                                          <td>
                                              <input type="radio" <?php if ($row['question_5'] == "No") { echo "checked";}?> name="question_5" id="qstn_5_no" value="No" disabled>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td colspan="2">6. Are you considered fully vaccinated against covid-19?</td>
                                          <td>
                                              <input type="radio" <?php if ($row['question_6'] == "Yes") { echo "checked";}?> name="question_6" id="qstn_6_yes" value="Yes" disabled>
                                          </td>
                                          <td>
                                              <input type="radio" <?php if ($row['question_6'] == "No") { echo "checked";}?> name="question_6" id="qstn_6_no" value="No" disabled>
                                          </td>
                                      </tr>
                                  </table>
                              </div>
                              <div class="health_df_confirmation">
                                  <p>I confirm that the above information is correct and accurate.</p>
                                  <img style="width: 150px; height: auto" src="../../cite/student_signatures/<?php echo $row['signature'];?>">
                                  <div class="custom_breakline"></div>
                                  <h4>Signature</h4>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
                <?php
                    }
                  }
                  else {
                    echo "<h1 class='error_msg' style='width: 100%'>Form Unavailable</h1>";
                  }
                ?>
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