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

    <title>Health Statement</title>

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
            <li class="menu-item active open">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <div data-i18n="Layouts">Health Statement Form</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="view_student_hd_forms.php" class="menu-link">
                    <div>Health Declaration</div>
                  </a>
                </li>
                <li class="menu-item active">
                  <a href="commitment_undertaking.php" class="menu-link" >
                    <div>Commitment of Undertaking</div>
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
                  <h4 class="fw-bold p-2"><span class="text-muted fw-light">Health Statement /</span> Health Declaration</h4>
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
                          
                          commitment_undertaking_tbl.*

                          FROM student_pri_info_tbl

                          INNER JOIN student_basic_info_tbl ON student_pri_info_tbl.student_id = student_basic_info_tbl.student_id
                          
                          INNER JOIN commitment_undertaking_tbl ON student_pri_info_tbl.student_id = commitment_undertaking_tbl.student_id

                          WHERE commitment_undertaking_tbl.student_id = '$student_id'";
                  $result = mysqli_query($conn, $sql);

                  if($result->num_rows > 0) {
                    while ($row=$result->fetch_assoc()) {
                ?>
                <div class="com_undertake_cont">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="com_undertake_header">
                                    <img src="../../cite/images/ucu_logo.png">
                                    <div class="com_undertake_title">
                                        <h1>URDANETA CITY UNIVERSITY</h1>
                                        <h3>COLLEGE OF INFORMATION AND TECHNOLOGY EDUCATION</h3>
                                        <h2>COMMITMENT OF UNDERTAKING</h2>
                                    </div>
                                    <img src="../../cite/images/cite_logo.png">
                                </div>
                                <p>&emsp;&emsp;&emsp;I, <strong><u><?php echo $row['lname'].", ".$row["fname"]." ".$row["mname"]." ".$row['sname'];?></u></strong>, a Filipino citizen, of legal age, and resident of
                                    <strong><u><?php echo $row['house_num']." ".$row['barangay'].", ".$row['city'].", ".$row['province'];?></u></strong>, hereby, declare that I fully understand,
                                    and commit to abide by, the following “Do’s” and “Don’ts” as integral part of the
                                    responsibilities that I willingly assume as
                                    student in and for the conduct of the limited face-to-face classes for A.Y. 2022-2023.</p>
                                <div class="dos_section">
                                    <h1>Do's</h1>
                                    <ol>
                                        <li>
                                            Wear proper uniform/attire during your schedule in limited face-to-face classes (i.e
                                            NOT in sleeveless shirt/blouse, or shorts/short pants, or tokong pants, or ripped
                                            jeans or slippers).
                                        </li>
                                        <li>
                                            Transparently fill out the University/College Heath Declaration Form before entering
                                            the campus.
                                        </li>
                                        <li>
                                            Follow the university foot traffic system, markers, and signage.
                                        </li>
                                        <li>
                                            Familiarize yourself in following strictly the foot traffic system of the
                                            university.
                                        </li>
                                        <li>
                                            Be prompt in attending your limited face-to-face classes.
                                        </li>
                                        <li>
                                            Bring your personal hygiene kits. Your kit should contain alcohol, wipes, soap, and
                                            an extra face mask.
                                        </li>
                                        <li>
                                            Bring your own: food, water bottle, utensils, pens, toiletries, paper etc...
                                        </li>
                                        <li>
                                            Do always practice safe distancing, wearing facemask, face shield, gloves, bringing
                                            personal alcohol, and proper washing of hands.
                                        </li>
                                        <li>
                                            Always maintain a minimum distance of at least 1.5 meters between everyone present
                                            at university.
                                        </li>
                                        <li>
                                            Register or have a medical insurance that covers medical expenses related to
                                            COVID-19.
                                        </li>
                                        <li>
                                            Always bring your covid-19 vaccination cards.
                                        </li>
                                    </ol>
                                </div>
                                <div class="donts_section">
                                    <h1>Don'ts</h1>
                                    <ol>
                                        <li>
                                            Do not enter the university if you have no schedule for limited face-to-face
                                            classes.
                                        </li>
                                        <li>
                                            Do not enter the university or attend limited face-to-face classes if you are
                                            currently experiencing or have experienced, within the last 14 days the following
                                            symptoms. Report to your adviser and instructors regarding your current
                                            situation/condition.
                                            <table>
                                                <tr>
                                                    <td>a. Sore throat</td>
                                                    <td>e. Fever for the past few days</td>
                                                </tr>
                                                <tr>
                                                    <td>b. Shortness of breath</td>
                                                    <td>f. Loss of taste or smell</td>
                                                </tr>
                                                <tr>
                                                    <td>c. Body pains</td>
                                                    <td>g. Cough and/or cold</td>
                                                </tr>
                                                <tr>
                                                    <td>d. Headache</td>
                                                    <td>h. Diarrhea</td>
                                                </tr>
                                            </table>
                                        </li>
                                        <li>
                                            Do not enter the university or attend limited face-to-face classes if you’re body
                                            temperature is 37.2 or higher. Report to your adviser and instructors regarding your
                                            current situation/condition.
                                        </li>
                                        <li>
                                            Do not roam around or stay longer in the campus before and after your classes.
                                            Should only go to school for the scheduled laboratory classes and will go home once
                                            the classes are done.
                                        </li>
                                        <li>
                                            Do not borrow materials like ballpen, pencil, eraser, whiteboard marker, etc. Kindly
                                            bring your own things.
                                        </li>
                                        <li>
                                            Do not remove your facemask while in the campus, except when eating or drinking
                                            only.
                                        </li>
                                    </ol>
                                </div>
                                <p>&emsp;&emsp;&emsp;Finally, I understand that I will be held liable and accountable before the
                                    Urdaneta City University for any violation committed thereof</p>
                                <div class="com_undertake_confirmation mt-5 mb-3">
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