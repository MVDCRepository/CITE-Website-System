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

    <title>News & Events</title>

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
            <li class="menu-item active open">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <div data-i18n="Layouts">News & Events</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item active">
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
              <!-- page header and search -->
              <div class="d-flex flex-wrap">
                <div class="p-2 flex-fill">
                  <!-- page title -->
                  <h4 class="fw-bold p-2"><span class="text-muted fw-light">News and Events /</span> Manage Events</h4>
                </div>
                <div class="p-2 flex-fill">
                  <!-- search -->
                  <?php 
                    include "db_conn.php";
                    $sql = "SELECT * FROM news_events_tbl ORDER BY bulletin_id DESC";

                    if (isset($_POST['search'])) {
                      $search = $_POST['search'];
                      $sql = "SELECT * FROM news_events_tbl WHERE title LIKE '%$search%'";
                    }
                    else {
                      $search = "";
                        $sql = "SELECT * FROM news_events_tbl ORDER BY bulletin_id DESC";
                    }

                    $result = $conn->query($sql);
                  ?>
                  <form method="POST">
                    <label>Search</label><input type="text" class="search" placeholder="Title..." name="search" value="<?php echo $search;?>">
                  </form>
                </div>
              </div>
              <!-- section container -->

              <!-- notif message -->
              <center>
                <?php if (isset($_GET['success_msg'])) { ?>
                  <p class="success_msg mb-3" style="margin: 10px 0px 10px 0px"><?php echo $_GET['success_msg']; ?></p>
                <?php } ?>
                <?php if (isset($_GET['del_msg'])) { ?>
                  <p class="error_msg mb-3" style="margin: 10px 0px 10px 0px"><?php echo $_GET['del_msg']; ?></p>
                <?php } ?>
              </center>
              <!-- / notif message -->
              
              <div class="section-container card">
                <!-- table wrapper -->
                <div class="table-wrapper">
                  <table class="table-cite" id="newsEvent_tbl">
                    <thead>
                      <tr>
                        <th scope="col" style="display: none">id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Content</th>
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
                            <h4>Delete Content</h4>
                          </div>
                          <div class="modal_body">
                            <form action="php/add_news_eventsPHP.php" method="POST">
                              <input type="hidden" name="del_bulletinID" id="del_bulletinID">
                              <p><b>Title:</b> <span id="del_title">title</span></p>
                              <p><b>Content:</b><div class="description-container" id="del_content" style="width: 100%; height: 40%;">content</div></p>
                              <br>
                              <button class="main-button" type="submit">Delete</button>
                            </form>
                          </div>
                        </div>
                      </div>
                      <!-- / delete modal -->

                      <tr>
                        <td style="display: none"><?php echo $row['bulletin_id'];?></td>
                        <td><?php echo $row['title'];?></td>
                        <td>
                          <div class="image-container" style="height: 120px; width: 120px;">
                            <img src="images/<?php echo $row['photo'];?>">
                          </div>
                        </td>
                        <td>
                          <div class="description-container mb-3">
                            <?php echo $row['content'];?>
                          </div>
                          <span><?php $date = $row['time_date']; echo date("M d,Y H:i a", strtotime($date));?></span>
                        </td>
                        <td>
                          <div class="d-flex p-2 gap-2 bd-highlight">
                            <a href="upd_news_events.php?bulletin_id=<?=$row['bulletin_id'];?>"><button class="editbtn">Edit</button></a>
                            <a target="_blank" href="../../cite/pages/news_and_events_details.php?bulletin_id=<?=$row['bulletin_id'];?>"><button class="viewbtn">View</button></a>
                            <button class="delbtn" name="del_newsEvent_btn" id="del_newsEvent_btn" data-modal="modal_delete">Del</button>
                          </div>
                        </td>
                      </tr>
                      <?php
                          }
                        }
                        else if($result->num_rows == 0 && $search != "") {
                          echo "<tr><td colspan='4' style='color: #ff0000;'><center>News & Events not found</center></td></tr>";
                        }
                        else {
                          echo "<tr><td colspan='4' style='color: #ff0000;'><center>No News & Events Available</center></td></tr>";
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
                <!-- /table wrapper -->
              </div>
              <!-- / section container -->
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

    <!-- my js -->
    <script type="text/javascript" src="js/news_eventsJS.js"></script>
  </body>
</html>
<?php
} else {
  header("Location: index.php");
  exit();
}

?>