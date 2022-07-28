<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['fname'])) {
  include 'db_conn.php';
  $student_id = $_GET['student_id'];
  $student_yr_lvl = null;
  $student_status = null;
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

    <title>Update Transferee</title>

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
              <!-- page header title -->
              <h4 class="fw-bold p-2"><span class="text-muted fw-light">Students /</span> Update Student Transferee</h4>
              <!-- section container -->
              <center>
                <?php if (isset($_GET['error_msg'])) { ?>
                  <p class="error_msg mb-3"><?php echo $_GET['error_msg'];?></p>
                <?php } ?>
                <?php if (isset($_GET['success_msg'])) { ?>
                  <p class="success_msg mb-3"><?php echo $_GET['success_msg'];?></p>
                <?php } ?>
              </center>

              <form action="php/studentPHP.php?student_id=<?=$student_id?>" method="POST">
                <input type="hidden" name="student_id" value="<?php echo $student_id;?>">
                <!-- student information -->
                <?php
                  $sql = "SELECT * FROM student_pri_info_tbl WHERE student_id = '$student_id'";
                  $result = $conn->query($sql);
                    if($result->num_rows > 0) {
                      while ($row=$result->fetch_assoc()) {
                        $student_yr_lvl = $row['yr_lvl'];
                        $student_status = $row['status'];
                ?>
                <div class="section-container card">
                  <h5 class="mb-4">Primary Information</h5>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label class="form-label">First Name</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" value="<?php echo $row['fname'];?>" required>
                        <span class="input-group-text"><span class="required_sign">*</span></span>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Middle Name</label>
                      <input type="text" class="form-control" id="mname" name="mname" placeholder="Middle Name" value="<?php echo $row['mname'];?>">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Last Name</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" value="<?php echo $row['lname'];?>" required>
                        <span class="input-group-text"><span class="required_sign">*</span></span>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Suffix Name</label>
                      <input type="text" class="form-control" id="sname" name="sname" placeholder="Suffix Name" value="<?php echo $row['sname'];?>">
                    </div>
                  </div>
                  <h5>Permanent Address</h5>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Province</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="province" name="province" placeholder="Province" value="<?php echo $row['province'];?>" required>
                        <span class="input-group-text"><span class="required_sign">*</span></span>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">City/Municipality</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="city" name="city" placeholder="City/Municipality" value="<?php echo $row['city'];?>" required>
                        <span class="input-group-text"><span class="required_sign">*</span></span>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Barangay</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="barangay" name="barangay" placeholder="Barangay" value="<?php echo $row['barangay'];?>" required>
                        <span class="input-group-text"><span class="required_sign">*</span></span>
                      </div>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label class="form-label">House Number</label>
                      <input type="text" class="form-control" id="house_num" name="house_num" placeholder="House Number" value="<?php echo $row['house_num'];?>">
                    </div>
                    <div class="col-md-3 mb-3">
                      <label class="form-label">Zip Code</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="Zip Code" value="<?php echo $row['zip_code'];?>" required>
                        <span class="input-group-text"><span class="required_sign">*</span></span>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                    }
                  }
                  else {
                    echo "<center><h5 class='error_msg'>Primary Information Unavailable</h5></center>";
                  }
                ?>
                <!-- basic information -->
                <?php
                  $sql = "SELECT * FROM student_basic_info_tbl WHERE student_id = '$student_id'";
                  $result = $conn->query($sql);
                    if($result->num_rows > 0) {
                      while ($row=$result->fetch_assoc()) {
                ?>
                <div class="section-container card mt-4">
                  <h5>Basic Information</h5>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Birthdate</label>
                      <div class="input-group">
                        <input type="date" class="form-control" id="bdate" name="bdate" placeholder="Birthdate" value="<?php echo $row['bdate'];?>" required>
                        <span class="input-group-text"><span class="required_sign">*</span></span>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Nationality</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Nationality" value="<?php echo $row['nationality'];?>" required>
                        <span class="input-group-text"><span class="required_sign">*</span></span>
                      </div>
                    </div>
                    <h5>Birth Place</h5>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Province</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="birth_province" name="birth_province" placeholder="Province" value="<?php echo $row['birth_province'];?>" required>
                        <span class="input-group-text"><span class="required_sign">*</span></span>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">City/Municipality</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="birth_city" name="birth_city" placeholder="City/Municipality" value="<?php echo $row['birth_city'];?>" required>
                      <span class="input-group-text"><span class="required_sign">*</span></span>
                    </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Barangay</label>
                      <input type="text" class="form-control" id="birth_barangay" name="birth_barangay" placeholder="Barangay" value="<?php echo $row['birth_barangay'];?>">
                    </div>
                    <div class="col-md-3 mb-3">
                      <label class="form-label">House Number</label>
                      <input type="text" class="form-control" id="birth_house_num" name="birth_house_num" placeholder="House Number" value="<?php echo $row['birth_house_num'];?>">
                    </div>
                    <div class="col-md-3 mb-3">
                      <label class="form-label">Zip Code</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="birth_zip_code" name="birth_zip_code" placeholder="Zip Code" value="<?php echo $row['birth_zip_code'];?>" required>
                        <span class="input-group-text"><span class="required_sign">*</span></span>
                      </div>
                    </div>
                    <h5>Contact & Other Info.</h5>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Email</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $row['email'];?>" required>
                        <span class="input-group-text"><span class="required_sign">*</span></span>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Contact Number</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="contact_num" name="contact_num" placeholder="Contact Number" value="<?php echo $row['contact_num'];?>" required>
                        <span class="input-group-text"><span class="required_sign">*</span></span>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Gender</label><span class="required_sign"> *</span><br>
                      <input type="radio" class="form-check-input" name="gender" <?php if ($row['gender'] == 'Male') {echo "checked";}?> value="Male" required> Male
                      <input type="radio" class="form-check-input" name="gender" <?php if ($row['gender'] == 'Female') {echo "checked";}?> value="Female" required> Female
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Religion</label>
                      <select class="form-control" id="religion" name="religion">
                        <!-- <option selected disabled>Select Religion</option> -->
                        <option value="<?php echo $row['religion'];?>"><?php echo $row['religion'];?></option>
                        <option value="ROMAN CATHOLIC">ROMAN CATHOLIC</option>
                        <option value="IGLESIA NI CRISTO">IGLESIA NI CRISTO</option>
                        <option value="JEHOVAH WITNESSES">JEHOVAH WITNESSES</option>
                        <option value="ISLAM">ISLAM</option>
                        <option value="EVANGELICAL">EVANGELICAL</option>
                        <option value="BUDDHISM">BUDDHISM</option>
                        <option value="JUDAISM">JUDAISM</option>
                        <option value="BAHAI FAITH">BAHAI FAITH</option>
                        <option value="PROTESTANT">PROTESTANT</option>
                        <option value="BORN AGAIN CHRISTIAN">BORN AGAIN CHRISTIAN</option>
                        <option value="SEVENTH DAY ADVENTIST">SEVENTH DAY ADVENTIST</option>
                        <option value="AGLIPAYAN CHURCH">AGLIPAYAN CHURCH</option>
                        <option value="BAPTIST">BAPTIST</option>
                        <option value="CHRISTIAN">CHRISTIAN</option>
                        <option value="ORTHODOX CHURCH">ORTHODOX CHURCH</option>
                        <option value="ATHEISM">ATHEISM</option>
                        <option value="LATTER DAY SAINTS (MORMONS)">LATTER DAY SAINTS (MORMONS)</option>
                        <option value="JESUS IS LORD">JESUS IS LORD</option>
                      </select>
                    </div>
                  </div>
                </div> 
                <?php
                    }
                  }
                  else {
                    echo "<center><h5 class='error_msg mt-4'>Basic Information Unavailable</h5></center>";
                  }
                ?>    
                <!-- guardian information -->
                <div class="section-container card mt-4">
                  <h5 class="mb-4">Family Information</h5>
                  <?php
                    $sql = "SELECT * FROM student_fam_info_tbl WHERE student_id = '$student_id'";
                    $result = $conn->query($sql);
                      if($result->num_rows > 0) {
                        while ($row=$result->fetch_assoc()) {
                  ?>
                  <div class="row">
                    <div class="col-md">
                      <div class="row">
                        <p>Father's Information</p>
                        <div class="col-md-6 mb-3">
                          <label class="form-label">First Name</label>
                          <input type="text" class="form-control" id="father_fname" name="father_fname" placeholder="First Name" value="<?php echo $row['father_fname'];?>">
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label">Middle Name</label>
                          <input type="text" class="form-control" id="father_mname" name="father_mname" placeholder="Middle Name" value="<?php echo $row['father_mname'];?>">
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label">Last Name</label>
                          <input type="text" class="form-control" id="father_lname" name="father_lname" placeholder="Last Name" value="<?php echo $row['father_lname'];?>">
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label">Suffix Name</label>
                          <input type="text" class="form-control" id="father_sname" name="father_sname" placeholder="Suffix Name" value="<?php echo $row['father_sname'];?>">
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label">Contact Number</label>
                          <input type="text" class="form-control" id="father_contact" name="father_contact" placeholder="Contact Number" value="<?php echo $row['father_contact'];?>">
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label">Occupation</label>
                          <input type="text" class="form-control" id="father_occupation" name="father_occupation" placeholder="Occupation" value="<?php echo $row['father_occupation'];?>">
                        </div>
                      </div>
                    </div>
                    <div class="col-md">
                      <div class="row">
                        <p>Mother's Information</p>
                        <div class="col-md-6 mb-3">
                          <label class="form-label">First Name</label>
                          <input type="text" class="form-control" id="mother_fname" name="mother_fname" placeholder="First Name" value="<?php echo $row['mother_fname'];?>">
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label">Middle Name</label>
                          <input type="text" class="form-control" id="mother_mname" name="mother_mname" placeholder="Middle Name" value="<?php echo $row['mother_mname'];?>">
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label">Last Name</label>
                          <input type="text" class="form-control" id="mother_lname" name="mother_lname" placeholder="Last Name" value="<?php echo $row['mother_lname'];?>">
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label">Contact Number</label>
                          <input type="text" class="form-control" id="mother_contact" name="mother_contact" placeholder="Contact Number" value="<?php echo $row['mother_contact'];?>">
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label">Occupation</label>
                          <input type="text" class="form-control" id="mother_occupation" name="mother_occupation" placeholder="Occupation" value="<?php echo $row['mother_occupation'];?>">
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php
                      }
                    }
                    else {
                      echo "<center><h5 class='error_msg'>Family Information Unavailable</h5></center>";
                    }
                  ?>
                  <br>
                  <?php
                    $sql = "SELECT * FROM student_guardian_info_tbl WHERE student_id = '$student_id'";
                    $result = $conn->query($sql);
                      if($result->num_rows > 0) {
                        while ($row=$result->fetch_assoc()) {
                  ?>
                  <div class="row">
                    <div class="col-md">
                      <div class="row">
                        <p>Guardian's Information</p>
                        <div class="col-md-6 mb-3">
                          <label class="form-label">First Name</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="guardian_fname" name="guardian_fname" placeholder="First Name" value="<?php echo $row['guardian_fname'];?>" required>
                            <span class="input-group-text"><span class="required_sign">*</span></span>
                          </div>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label">Middle Name</label>
                          <input type="text" class="form-control" id="guardian_mname" name="guardian_mname" placeholder="Middle Name" value="<?php echo $row['guardian_mname'];?>">
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label">Last Name</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="guardian_lname" name="guardian_lname" placeholder="Last Name" value="<?php echo $row['guardian_lname'];?>" required>
                            <span class="input-group-text"><span class="required_sign">*</span></span>
                          </div>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label">Suffix Name</label>
                          <input type="text" class="form-control" id="guardian_sname" name="guardian_sname" placeholder="Suffix Name" value="<?php echo $row['guardian_sname'];?>">
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label">Contact Number</label>
                          <input type="text" class="form-control" id="guardian_contact" name="guardian_contact" placeholder="Contact Number" value="<?php echo $row['guardian_contact'];?>">
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label">Occupation</label>
                          <input type="text" class="form-control" id="guardian_occupation" name="guardian_occupation" placeholder="Occupation" value="<?php echo $row['guardian_occupation'];?>">
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label">Relationship</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="guardian_relationship" name="guardian_relationship" placeholder="Relationship" value="<?php echo $row['guardian_relationship'];?>" required>
                            <span class="input-group-text"><span class="required_sign">*</span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md">
                      <div class="row">
                        <p>Spouse's (if married)</p>
                        <div class="col-md-6 mb-3">
                          <label class="form-label">First Name</label>
                          <input type="text" class="form-control" id="spouse_fname" name="spouse_fname" placeholder="First Name" value="<?php echo $row['spouse_fname'];?>">
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label">Middle Name</label>
                          <input type="text" class="form-control" id="spouse_mname" name="spouse_mname" placeholder="Middle Name" value="<?php echo $row['spouse_mname'];?>">
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label">Last Name</label>
                          <input type="text" class="form-control" id="spouse_lname" name="spouse_lname" placeholder="Last Name" value="<?php echo $row['spouse_lname'];?>">
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label">Suffix Name</label>
                          <input type="text" class="form-control" id="spouse_lname" name="spouse_sname" placeholder="Suffix Name" value="<?php echo $row['spouse_lname'];?>">
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label">Contact Number</label>
                          <input type="text" class="form-control" id="spouse_contact" name="spouse_contact" placeholder="Contact Number" value="<?php echo $row['spouse_contact'];?>">
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label">Occupation</label>
                          <input type="text" class="form-control" id="spouse_occupation" name="spouse_occupation" placeholder="Occupation" value="<?php echo $row['spouse_occupation'];?>">
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php
                      }
                    }
                    else {
                      echo "<center><h5 class='error_msg'>Guardian Information Unavailable</h5></center>";
                    }
                  ?>
                </div>
                <!-- academic information -->
                <?php
                  $sql = "SELECT
                          student_acad_info_transferee_tbl.student_id,
                          student_acad_info_transferee_tbl.present_course,
                          student_acad_info_transferee_tbl.transfered_from,
                          student_acad_info_transferee_tbl.second_course,
                          student_acad_info_transferee_tbl.graduated_es,
                          student_acad_info_transferee_tbl.graduated_year_es,
                          student_acad_info_transferee_tbl.eval_id,

                          eval_cmo_series_tbl.eval_id,
                          eval_cmo_series_tbl.cmoNo,
                          eval_cmo_series_tbl.series

                          FROM student_acad_info_transferee_tbl

                          LEFT JOIN eval_cmo_series_tbl ON student_acad_info_transferee_tbl.eval_id = eval_cmo_series_tbl.eval_id

                  WHERE student_acad_info_transferee_tbl.student_id = '$student_id'";
                  $result = $conn->query($sql);
                    if($result->num_rows > 0) {
                      while ($row=$result->fetch_assoc()) {
                ?>
                <div class="section-container card mt-4">
                  <h5>Academic Information</h5>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label class="form-label">CMO No. and Series</label>
                      <div class="input-group">
                        <select class="form-control" id="eval_id" name="eval_id" required>
                          <option value="<?php echo $row['eval_id'];?>">
                            <?php
                              if ($row['eval_id'] == NULL) {
                                echo "CMO No. and Series assigned";
                              }
                              else {
                                echo "CMO No. ".$row['cmoNo']." & Series of ".$row['series'];
                              }
                            ?>
                          </option>
                            <?php
                              include "db_conn.php";
                              $sql = "SELECT * FROM eval_cmo_series_tbl";
                              $result = $conn->query($sql);
                                if($result->num_rows > 0) {
                                  while ($row_cmoSeries=$result->fetch_assoc()) {
                            ?>
                            <option value="<?php echo $row_cmoSeries['eval_id'];?>"><?php echo "CMO No. ".$row_cmoSeries['cmoNo']." & Series of ".$row_cmoSeries['series'];?></option>
                            <?php
                                }
                              }
                              else {
                                echo "<option value=''>No CMO No. & Series available</option>";
                              }
                            ?>
                        </select>
                        <span class="input-group-text"><span class="required_sign">*</span></span>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Select Year Level</label>
                      <div class="input-group">
                        <select class="form-control" id="yr_lvl" name="yr_lvl" required>
                          <option value="<?php echo $student_yr_lvl;?>"><?php echo $student_yr_lvl." Year";?></option>
                          <option value="1st">1st Year</option>
                          <option value="2nd">2nd Year</option>
                          <option value="3rd">3rd Year</option>
                          <option value="4th">4th Year</option>
                        </select>
                        <span class="input-group-text"><span class="required_sign">*</span></span>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Select Status</label>
                      <div class="input-group">
                        <select class="form-control" id="status" name="status" required>
                          <option value="<?php echo $student_status;?>"><?php echo $student_status;?></option>
                          <option value="Transferee">Transferee</option>
                          <option value="Transferee Graduating">Transferee Graduating</option>
                        </select>
                        <span class="input-group-text"><span class="required_sign">*</span></span>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Present Course</label>
                      <div class="input-group">
                        <select class="form-control" id="present_course" name="present_course" required>
                            <option value="<?php echo $row['present_course'];?>"><?php echo $row['present_course'];?></option>
                            <option value="Bachelor of Science in Information Technology">Bachelor of Science in Information Technology</option>
                            <option value="Bachelor in Library & Information Science">Bachelor in Library & Information Science</option>
                        </select>
                        <span class="input-group-text"><span class="required_sign">*</span></span>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Second choice of course</label>
                      <div class="input-group">
                        <select class="form-control" id="second_course" name="second_course" required>
                            <option value="<?php echo $row['second_course'];?>"><?php echo $row['second_course'];?></option>
                            <option value="Bachelor of Science in Information Technology">Bachelor of Science in Information Technology</option>
                            <option value="Bachelor in Library & Information Science">Bachelor in Library & Information Science</option>
                        </select>
                        <span class="input-group-text"><span class="required_sign">*</span></span>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Transfered From</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="transfered_from" name="transfered_from" placeholder="Transfered From" value="<?php echo $row['transfered_from'];?>" required>
                        <span class="input-group-text"><span class="required_sign">*</span></span>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Graduated Elementary School</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="graduated_es" name="graduated_es" placeholder="Graduated Elementary School" value="<?php echo $row['graduated_es'];?>" required>
                        <span class="input-group-text"><span class="required_sign">*</span></span>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Graduated Year from Elementary School</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="graduated_year_es" name="graduated_year_es" placeholder="Graduated Year from Elementary School" value="<?php echo $row['graduated_year_es'];?>" required>
                        <span class="input-group-text"><span class="required_sign">*</span></span>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                    }
                  }
                  else {
                    echo "<center><h5 class='error_msg mt-4'>Academic Information Unavailable</h5></center>";
                  }
                ?>
                <!-- student credentials -->
                <?php
                  $sql = "SELECT * FROM student_pri_info_tbl WHERE student_id = '$student_id'";
                  $result = $conn->query($sql);
                    if($result->num_rows > 0) {
                      while ($row=$result->fetch_assoc()) {
                ?>
                <div class="section-container card mt-4">
                  <h5 class="mb-4">Student Credentials</h5>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Identification Card Number</label>
                      <div class="input-group">
                        <input type="text" class="form-control" name="id_number" id="id_number"  value="<?php echo $row['id_number'];?>" required>
                        <span class="input-group-text"><span class="required_sign">*</span></span>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Credentials</label>
                      <input type="text" class="form-control" name="password" id="password" readonly="readonly" value="<?php echo $row['password'];?>">
                    </div>
                  </div>


                  <div class="d-flex">
                    <input type="checkbox" class="form-check-input me-2" name="generate_pass" id="generate_pass" onclick="generate_password()">
                    <label class="form-check-label" for="generate_pass">Generate Password</label>
                  </div>

                  <div class="d-grid gap-2 d-md-block mt-4">
                    <button class="main-button" type="submit" name="upd_student_transfereeBtn">Add Student</button>
                  </div>
                </div>
                <?php
                    }
                  }
                  else {
                    echo "<center><h5 class='error_msg mt-4'>Credentials Unavailable</h5></center>";
                  }
                ?>
              </form>
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
    <script type="text/javascript">
      // generates student's credential
      function generate_password() {
        var generate_pass = document.getElementById("generate_pass");
        if (generate_pass.checked == true) {
          function create_password(length) {
            var result           = '';
            var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            var charactersLength = characters.length;
            for ( var i = 0; i < length; i++ ) {
              result += characters.charAt(Math.floor(Math.random() * 
              charactersLength));
            }
            return result;
          }
          document.getElementById("password").value = (create_password(10));
        }
        else {
          document.getElementById("password").value = "";
        }
      }
    </script>

  </body>
</html>
<?php
} else {
  header("Location: index.php");
  exit();
}

?>