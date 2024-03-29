<?php
session_start();

if (isset($_SESSION['student_id']) && isset($_SESSION['id_number']) && isset($_SESSION['fname']) && isset($_SESSION['mname']) && isset($_SESSION['lname']) && isset($_SESSION['yr_lvl']) && isset($_SESSION['eval_status'])) {
  include '../db_conn.php';

  $student_id = $_SESSION['student_id'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <!-- site metas -->
        <title>Grades | CITE</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../images/cite_logo.png">
        <!-- bootstrap css -->
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <!-- Responsive-->
        <link rel="stylesheet" href="../css/responsive.css">
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css">
        <!-- Tweaks for older IEs-->
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <!-- owl stylesheets -->
        <link rel="stylesheet" href="../css/owl.carousel.min.css">
        <link rel="stylesheet" href="../css/owl.theme.default.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
        <!-- Swiper -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.2.2/swiper-bundle.css" integrity="sha512-VbPb+KrNIjcE5nM/Y+ZBvKvQF7+B/alQCQLPdIUAP3KsmDWkv0EdiyX4gfTwtJ3Sfais/nGJ0whTxjSwhQ1C8g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Jquery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!--- PDF Generator --->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.bundle.min.js"></script>
        <script type="text/javascript" src="../js/generate-pdf.js"></script>
    </head>
    <!-- body -->
    <body>
        <div class="header_pages">
            <div class="container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="logo1"><a href="index.php"><img src="../images/cite_logo_title.png"></a></div>
                        </div>
                        <div class="col-md-6">
                            <div class="logo2"><a href="https://ucu.edu.ph" target="_blank"><img src="../images/ucu_logo.png"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="container">
            <!--  header inner -->
            <div class="col-sm-12">
                <div class="menu-area">
                    <nav class="navbar navbar-expand-lg">
                        <button style="background: #8c8c8c;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="caret" style="color: white;">☰</span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav md-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a> </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="news_and_events.php">NEWS & EVENTS</a></li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="about.php">ABOUT</a></li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="faculty.php">FACULTY</a></li>
                                                <li class="nav-item">
                                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">ACADEMICS</a>
                                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="right: auto; left: auto;">
                                                    <a class="dropdown-item" href="acad_bsit.php">BSIT</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="acad_blis.php">BLIS</a>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="admission.php">ADMISSION</a></li>
                                                <li id="nav-last" class="nav-item last"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"><?php echo $_SESSION['fname'];?></a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="right: auto; left: auto;">
                                                    <a class="dropdown-item" href="profile.php"><!-- <img src="../images/xiao.png"> -->Profile Settings</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a style="font-weight: 600;" class="dropdown-item" href="grades.php">Grades</a>
                                                    <a class="dropdown-item" href="blocking.php">Blocking</a>
                                                    <a style="color: red !important;" class="dropdown-item" href="../php/logout.php"><i class="bi bi-box-arrow-left"></i>&nbsp;Logout</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end header end -->
                <!--Start Banner Section ------------------------------>
                <div class="banner_news_events">
                    <div class="titlepage-h1-news_events">
                        <h1 class="bnner_title_news_events">Grades</h1>
                    </div>
                </div>
                <!--End Banner Section -------------------------------->
                <!--Start Content Section ----------------------------->
                <div class="grades-content-view">
                    <div class="grades-section-view">
                        <?php
                            $sql = "SELECT * FROM student_acad_info_tbl WHERE student_id = '$student_id'";
                            $result = $conn->query($sql);
                              if($result->num_rows > 0) {
                                while ($row=$result->fetch_assoc()) {
                        ?>
                        <div class="container">
                            <!------ First Year --------------------------->
                            <h2 class="year_title_view">First Year</h2>
                            <div class="row">
                                <!------ First Year First Sem ----------------->
                                <div class="col-md-6">
                                    <table class="table table-striped table-bordered table-hover float-md-right">
                                        <thead>
                                            <tr>
                                                <th colspan="12">First Sem</th>
                                            </tr>
                                            <tr>
                                                <th rowspan="2">Course Code</th>
                                                <th rowspan="2" colspan="2">Course Description</th>
                                                <th colspan="2">Hours</th>
                                                <th rowspan="2">Units</th>
                                                <th rowspan="2">Grade</th>
                                            </tr>
                                            <tr>
                                                <th>Lec</th>
                                                <th>Lab</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              $sql_subjects = "SELECT
                                              student_pri_info_tbl.student_id,
                                              student_pri_info_tbl.id_number,
                                              student_pri_info_tbl.fname,
                                              student_pri_info_tbl.Mname,
                                              student_pri_info_tbl.lname,

                                              student_acad_info_tbl.eval_id,

                                              eval_cmo_series_tbl.eval_id,
                                              eval_cmo_series_tbl.cmoNo,
                                              eval_cmo_series_tbl.series,

                                              subject_tbl.subj_id,
                                              subject_tbl.courseCode,
                                              subject_tbl.courseDesc,
                                              subject_tbl.units,
                                              subject_tbl.lec,
                                              subject_tbl.lab,
                                              subject_tbl.yr_lvl,
                                              subject_tbl.sem,

                                              student_grade_tbl.student_id,
                                              student_grade_tbl.subj_id,
                                              student_grade_tbl.grade

                                              FROM student_pri_info_tbl

                                              INNER JOIN student_acad_info_tbl ON student_acad_info_tbl.student_id = student_pri_info_tbl.student_id

                                              INNER JOIN eval_cmo_series_tbl ON eval_cmo_series_tbl.eval_id = student_acad_info_tbl.eval_id

                                              INNER JOIN subject_tbl ON subject_tbl.eval_id = eval_cmo_series_tbl.eval_id

                                              INNER JOIN student_grade_tbl ON student_grade_tbl.subj_id = subject_tbl.subj_id

                                              WHERE student_pri_info_tbl.student_id = '$student_id' AND student_acad_info_tbl.eval_id = '$row[eval_id]' AND subject_tbl.yr_lvl = '1st' AND subject_tbl.sem = '1st'";
                                              $result_subjects = $conn->query($sql_subjects);
                                                if($result_subjects->num_rows > 0) {
                                                  while ($row_subjects=$result_subjects->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row_subjects['courseCode'];?></td>
                                                <td colspan="2"><?php echo $row_subjects['courseDesc'];?></td>
                                                <td><?php echo $row_subjects['lec'];?></td>
                                                <td><?php echo $row_subjects['lab'];?></td>
                                                <td><?php echo $row_subjects['units'];?></td>
                                                <td><?php echo $row_subjects['grade'];?></td>
                                            </tr>
                                            <?php
                                                }
                                              }
                                              else {
                                                echo "<tr><td colspan='7' class='text-center' style='color: #A94442'>No subjects available</td></tr>";
                                              }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!------ First Year Second Sem ---------------->
                                <div class="col-md-6">
                                    <table class="table table-striped table-bordered table-hover float-md-left">
                                        <thead>
                                            <tr>
                                                <th colspan="12">Second Sem</th>
                                            </tr>
                                            <tr>
                                                <th rowspan="2">Course Code</th>
                                                <th rowspan="2" colspan="2">Course Description</th>
                                                <th colspan="2">Hours</th>
                                                <th rowspan="2">Units</th>
                                                <th rowspan="2">Grade</th>
                                            </tr>
                                            <tr>
                                                <th>Lec</th>
                                                <th>Lab</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              $sql_subjects = "SELECT
                                              student_pri_info_tbl.student_id,
                                              student_pri_info_tbl.id_number,
                                              student_pri_info_tbl.fname,
                                              student_pri_info_tbl.Mname,
                                              student_pri_info_tbl.lname,

                                              student_acad_info_tbl.eval_id,

                                              eval_cmo_series_tbl.eval_id,
                                              eval_cmo_series_tbl.cmoNo,
                                              eval_cmo_series_tbl.series,

                                              subject_tbl.subj_id,
                                              subject_tbl.courseCode,
                                              subject_tbl.courseDesc,
                                              subject_tbl.units,
                                              subject_tbl.lec,
                                              subject_tbl.lab,
                                              subject_tbl.yr_lvl,
                                              subject_tbl.sem,

                                              student_grade_tbl.student_id,
                                              student_grade_tbl.subj_id,
                                              student_grade_tbl.grade

                                              FROM student_pri_info_tbl

                                              INNER JOIN student_acad_info_tbl ON student_acad_info_tbl.student_id = student_pri_info_tbl.student_id

                                              INNER JOIN eval_cmo_series_tbl ON eval_cmo_series_tbl.eval_id = student_acad_info_tbl.eval_id

                                              INNER JOIN subject_tbl ON subject_tbl.eval_id = eval_cmo_series_tbl.eval_id

                                              INNER JOIN student_grade_tbl ON student_grade_tbl.subj_id = subject_tbl.subj_id

                                              WHERE student_pri_info_tbl.student_id = '$student_id' AND student_acad_info_tbl.eval_id = '$row[eval_id]' AND subject_tbl.yr_lvl = '1st' AND subject_tbl.sem = '2nd'";
                                              $result_subjects = $conn->query($sql_subjects);
                                                if($result_subjects->num_rows > 0) {
                                                  while ($row_subjects=$result_subjects->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row_subjects['courseCode'];?></td>
                                                <td colspan="2"><?php echo $row_subjects['courseDesc'];?></td>
                                                <td><?php echo $row_subjects['lec'];?></td>
                                                <td><?php echo $row_subjects['lab'];?></td>
                                                <td><?php echo $row_subjects['units'];?></td>
                                                <td><?php echo $row_subjects['grade'];?></td>
                                            </tr>
                                            <?php
                                                }
                                              }
                                              else {
                                                echo "<tr><td colspan='7' class='text-center' style='color: #A94442'>No subjects available</td></tr>";
                                              }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!------ Second Year -------------------------->
                            <h2 class="year_title_view">Second Year</h2>
                            <div class="row">
                                <!------ Second Year First Sem ----------------->
                                <div class="col-md-6">
                                    <table class="table table-striped table-bordered table-hover float-md-right">
                                        <thead>
                                            <tr>
                                                <th colspan="12">First Sem</th>
                                            </tr>
                                            <tr>
                                                <th rowspan="2">Course Code</th>
                                                <th rowspan="2" colspan="2">Course Description</th>
                                                <th colspan="2">Hours</th>
                                                <th rowspan="2">Units</th>
                                                <th rowspan="2">Grade</th>
                                            </tr>
                                            <tr>
                                                <th>Lec</th>
                                                <th>Lab</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              $sql_subjects = "SELECT
                                              student_pri_info_tbl.student_id,
                                              student_pri_info_tbl.id_number,
                                              student_pri_info_tbl.fname,
                                              student_pri_info_tbl.Mname,
                                              student_pri_info_tbl.lname,

                                              student_acad_info_tbl.eval_id,

                                              eval_cmo_series_tbl.eval_id,
                                              eval_cmo_series_tbl.cmoNo,
                                              eval_cmo_series_tbl.series,

                                              subject_tbl.subj_id,
                                              subject_tbl.courseCode,
                                              subject_tbl.courseDesc,
                                              subject_tbl.units,
                                              subject_tbl.lec,
                                              subject_tbl.lab,
                                              subject_tbl.yr_lvl,
                                              subject_tbl.sem,

                                              student_grade_tbl.student_id,
                                              student_grade_tbl.subj_id,
                                              student_grade_tbl.grade

                                              FROM student_pri_info_tbl

                                              INNER JOIN student_acad_info_tbl ON student_acad_info_tbl.student_id = student_pri_info_tbl.student_id

                                              INNER JOIN eval_cmo_series_tbl ON eval_cmo_series_tbl.eval_id = student_acad_info_tbl.eval_id

                                              INNER JOIN subject_tbl ON subject_tbl.eval_id = eval_cmo_series_tbl.eval_id

                                              INNER JOIN student_grade_tbl ON student_grade_tbl.subj_id = subject_tbl.subj_id

                                              WHERE student_pri_info_tbl.student_id = '$student_id' AND student_acad_info_tbl.eval_id = '$row[eval_id]' AND subject_tbl.yr_lvl = '2nd' AND subject_tbl.sem = '1st'";
                                              $result_subjects = $conn->query($sql_subjects);
                                                if($result_subjects->num_rows > 0) {
                                                  while ($row_subjects=$result_subjects->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row_subjects['courseCode'];?></td>
                                                <td colspan="2"><?php echo $row_subjects['courseDesc'];?></td>
                                                <td><?php echo $row_subjects['lec'];?></td>
                                                <td><?php echo $row_subjects['lab'];?></td>
                                                <td><?php echo $row_subjects['units'];?></td>
                                                <td><?php echo $row_subjects['grade'];?></td>
                                            </tr>
                                            <?php
                                                }
                                              }
                                              else {
                                                echo "<tr><td colspan='7' class='text-center' style='color: #A94442'>No subjects available</td></tr>";
                                              }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!------ Second Year Second Sem ---------------->
                                <div class="col-md-6">
                                    <table class="table table-striped table-bordered table-hover float-md-left">
                                        <thead>
                                            <tr>
                                                <th colspan="12">Second Sem</th>
                                            </tr>
                                            <tr>
                                                <th rowspan="2">Course Code</th>
                                                <th rowspan="2" colspan="2">Course Description</th>
                                                <th colspan="2">Hours</th>
                                                <th rowspan="2">Units</th>
                                                <th rowspan="2">Grade</th>
                                            </tr>
                                            <tr>
                                                <th>Lec</th>
                                                <th>Lab</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              $sql_subjects = "SELECT
                                              student_pri_info_tbl.student_id,
                                              student_pri_info_tbl.id_number,
                                              student_pri_info_tbl.fname,
                                              student_pri_info_tbl.Mname,
                                              student_pri_info_tbl.lname,

                                              student_acad_info_tbl.eval_id,

                                              eval_cmo_series_tbl.eval_id,
                                              eval_cmo_series_tbl.cmoNo,
                                              eval_cmo_series_tbl.series,

                                              subject_tbl.subj_id,
                                              subject_tbl.courseCode,
                                              subject_tbl.courseDesc,
                                              subject_tbl.units,
                                              subject_tbl.lec,
                                              subject_tbl.lab,
                                              subject_tbl.yr_lvl,
                                              subject_tbl.sem,

                                              student_grade_tbl.student_id,
                                              student_grade_tbl.subj_id,
                                              student_grade_tbl.grade

                                              FROM student_pri_info_tbl

                                              INNER JOIN student_acad_info_tbl ON student_acad_info_tbl.student_id = student_pri_info_tbl.student_id

                                              INNER JOIN eval_cmo_series_tbl ON eval_cmo_series_tbl.eval_id = student_acad_info_tbl.eval_id

                                              INNER JOIN subject_tbl ON subject_tbl.eval_id = eval_cmo_series_tbl.eval_id

                                              INNER JOIN student_grade_tbl ON student_grade_tbl.subj_id = subject_tbl.subj_id

                                              WHERE student_pri_info_tbl.student_id = '$student_id' AND student_acad_info_tbl.eval_id = '$row[eval_id]' AND subject_tbl.yr_lvl = '2nd' AND subject_tbl.sem = '2nd'";
                                              $result_subjects = $conn->query($sql_subjects);
                                                if($result_subjects->num_rows > 0) {
                                                  while ($row_subjects=$result_subjects->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row_subjects['courseCode'];?></td>
                                                <td colspan="2"><?php echo $row_subjects['courseDesc'];?></td>
                                                <td><?php echo $row_subjects['lec'];?></td>
                                                <td><?php echo $row_subjects['lab'];?></td>
                                                <td><?php echo $row_subjects['units'];?></td>
                                                <td><?php echo $row_subjects['grade'];?></td>
                                            </tr>
                                            <?php
                                                }
                                              }
                                              else {
                                                echo "<tr><td colspan='7' class='text-center' style='color: #A94442'>No subjects available</td></tr>";
                                              }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!------ Third Year --------------------------->
                            <h2 class="year_title_view">Third Year</h2>
                            <div class="row">
                                <!------ Third Year First Sem ----------------->
                                <div class="col-md-6">
                                    <table class="table table-striped table-bordered table-hover float-md-right">
                                        <thead>
                                            <tr>
                                                <th colspan="12">First Sem</th>
                                            </tr>
                                            <tr>
                                                <th rowspan="2">Course Code</th>
                                                <th rowspan="2" colspan="2">Course Description</th>
                                                <th colspan="2">Hours</th>
                                                <th rowspan="2">Units</th>
                                                <th rowspan="2">Grade</th>
                                            </tr>
                                            <tr>
                                                <th>Lec</th>
                                                <th>Lab</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              $sql_subjects = "SELECT
                                              student_pri_info_tbl.student_id,
                                              student_pri_info_tbl.id_number,
                                              student_pri_info_tbl.fname,
                                              student_pri_info_tbl.Mname,
                                              student_pri_info_tbl.lname,

                                              student_acad_info_tbl.eval_id,

                                              eval_cmo_series_tbl.eval_id,
                                              eval_cmo_series_tbl.cmoNo,
                                              eval_cmo_series_tbl.series,

                                              subject_tbl.subj_id,
                                              subject_tbl.courseCode,
                                              subject_tbl.courseDesc,
                                              subject_tbl.units,
                                              subject_tbl.lec,
                                              subject_tbl.lab,
                                              subject_tbl.yr_lvl,
                                              subject_tbl.sem,

                                              student_grade_tbl.student_id,
                                              student_grade_tbl.subj_id,
                                              student_grade_tbl.grade

                                              FROM student_pri_info_tbl

                                              INNER JOIN student_acad_info_tbl ON student_acad_info_tbl.student_id = student_pri_info_tbl.student_id

                                              INNER JOIN eval_cmo_series_tbl ON eval_cmo_series_tbl.eval_id = student_acad_info_tbl.eval_id

                                              INNER JOIN subject_tbl ON subject_tbl.eval_id = eval_cmo_series_tbl.eval_id

                                              INNER JOIN student_grade_tbl ON student_grade_tbl.subj_id = subject_tbl.subj_id

                                              WHERE student_pri_info_tbl.student_id = '$student_id' AND student_acad_info_tbl.eval_id = '$row[eval_id]' AND subject_tbl.yr_lvl = '3rd' AND subject_tbl.sem = '1st'";
                                              $result_subjects = $conn->query($sql_subjects);
                                                if($result_subjects->num_rows > 0) {
                                                  while ($row_subjects=$result_subjects->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row_subjects['courseCode'];?></td>
                                                <td colspan="2"><?php echo $row_subjects['courseDesc'];?></td>
                                                <td><?php echo $row_subjects['lec'];?></td>
                                                <td><?php echo $row_subjects['lab'];?></td>
                                                <td><?php echo $row_subjects['units'];?></td>
                                                <td><?php echo $row_subjects['grade'];?></td>
                                            </tr>
                                            <?php
                                                }
                                              }
                                              else {
                                                echo "<tr><td colspan='7' class='text-center' style='color: #A94442'>No subjects available</td></tr>";
                                              }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!------ Third Year Second Sem ---------------->
                                <div class="col-md-6">
                                    <table class="table table-striped table-bordered table-hover float-md-left">
                                        <thead>
                                            <tr>
                                                <th colspan="12">Second Sem</th>
                                            </tr>
                                            <tr>
                                                <th rowspan="2">Course Code</th>
                                                <th rowspan="2" colspan="2">Course Description</th>
                                                <th colspan="2">Hours</th>
                                                <th rowspan="2">Units</th>
                                                <th rowspan="2">Grade</th>
                                            </tr>
                                            <tr>
                                                <th>Lec</th>
                                                <th>Lab</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              $sql_subjects = "SELECT
                                              student_pri_info_tbl.student_id,
                                              student_pri_info_tbl.id_number,
                                              student_pri_info_tbl.fname,
                                              student_pri_info_tbl.Mname,
                                              student_pri_info_tbl.lname,

                                              student_acad_info_tbl.eval_id,

                                              eval_cmo_series_tbl.eval_id,
                                              eval_cmo_series_tbl.cmoNo,
                                              eval_cmo_series_tbl.series,

                                              subject_tbl.subj_id,
                                              subject_tbl.courseCode,
                                              subject_tbl.courseDesc,
                                              subject_tbl.units,
                                              subject_tbl.lec,
                                              subject_tbl.lab,
                                              subject_tbl.yr_lvl,
                                              subject_tbl.sem,

                                              student_grade_tbl.student_id,
                                              student_grade_tbl.subj_id,
                                              student_grade_tbl.grade

                                              FROM student_pri_info_tbl

                                              INNER JOIN student_acad_info_tbl ON student_acad_info_tbl.student_id = student_pri_info_tbl.student_id

                                              INNER JOIN eval_cmo_series_tbl ON eval_cmo_series_tbl.eval_id = student_acad_info_tbl.eval_id

                                              INNER JOIN subject_tbl ON subject_tbl.eval_id = eval_cmo_series_tbl.eval_id

                                              INNER JOIN student_grade_tbl ON student_grade_tbl.subj_id = subject_tbl.subj_id

                                              WHERE student_pri_info_tbl.student_id = '$student_id' AND student_acad_info_tbl.eval_id = '$row[eval_id]' AND subject_tbl.yr_lvl = '3rd' AND subject_tbl.sem = '2nd'";
                                              $result_subjects = $conn->query($sql_subjects);
                                                if($result_subjects->num_rows > 0) {
                                                  while ($row_subjects=$result_subjects->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row_subjects['courseCode'];?></td>
                                                <td colspan="2"><?php echo $row_subjects['courseDesc'];?></td>
                                                <td><?php echo $row_subjects['lec'];?></td>
                                                <td><?php echo $row_subjects['lab'];?></td>
                                                <td><?php echo $row_subjects['units'];?></td>
                                                <td><?php echo $row_subjects['grade'];?></td>
                                            </tr>
                                            <?php
                                                }
                                              }
                                              else {
                                                echo "<tr><td colspan='7' class='text-center' style='color: #A94442'>No subjects available</td></tr>";
                                              }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Third Year middle term -->
                            <div id="middle_term_3rdyr">
                                <div class="row">
                                    <!------ Third Year middle term ---------------->
                                    <div class="col-md">
                                        <table class="table table-striped table-bordered table-hover float-md-left">
                                            <thead>
                                                <tr>
                                                    <th colspan="12">Middle Term</th>
                                                </tr>
                                                <tr>
                                                    <th rowspan="2">Course Code</th>
                                                    <th rowspan="2" colspan="2">Course Description</th>
                                                    <th colspan="2">Hours</th>
                                                    <th rowspan="2">Units</th>
                                                    <th rowspan="2">Grade</th>
                                                </tr>
                                                <tr>
                                                    <th>Lec</th>
                                                    <th>Lab</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                  $sql_subjects = "SELECT
                                              student_pri_info_tbl.student_id,
                                              student_pri_info_tbl.id_number,
                                              student_pri_info_tbl.fname,
                                              student_pri_info_tbl.Mname,
                                              student_pri_info_tbl.lname,

                                              student_acad_info_tbl.eval_id,

                                              eval_cmo_series_tbl.eval_id,
                                              eval_cmo_series_tbl.cmoNo,
                                              eval_cmo_series_tbl.series,

                                              subject_tbl.subj_id,
                                              subject_tbl.courseCode,
                                              subject_tbl.courseDesc,
                                              subject_tbl.units,
                                              subject_tbl.lec,
                                              subject_tbl.lab,
                                              subject_tbl.yr_lvl,
                                              subject_tbl.sem,

                                              student_grade_tbl.student_id,
                                              student_grade_tbl.subj_id,
                                              student_grade_tbl.grade

                                              FROM student_pri_info_tbl

                                              INNER JOIN student_acad_info_tbl ON student_acad_info_tbl.student_id = student_pri_info_tbl.student_id

                                              INNER JOIN eval_cmo_series_tbl ON eval_cmo_series_tbl.eval_id = student_acad_info_tbl.eval_id

                                              INNER JOIN subject_tbl ON subject_tbl.eval_id = eval_cmo_series_tbl.eval_id

                                              INNER JOIN student_grade_tbl ON student_grade_tbl.subj_id = subject_tbl.subj_id

                                              WHERE student_pri_info_tbl.student_id = '$student_id' AND student_acad_info_tbl.eval_id = '$row[eval_id]' AND subject_tbl.yr_lvl = '3rd' AND subject_tbl.sem = 'Middle Term'";
                                                  $result_subjects = $conn->query($sql_subjects);
                                                    if($result_subjects->num_rows > 0) {
                                                      while ($row_subjects=$result_subjects->fetch_assoc()) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row_subjects['courseCode'];?></td>
                                                    <td colspan="2"><?php echo $row_subjects['courseDesc'];?></td>
                                                    <td><?php echo $row_subjects['lec'];?></td>
                                                    <td><?php echo $row_subjects['lab'];?></td>
                                                    <td><?php echo $row_subjects['units'];?></td>
                                                    <td><?php echo $row_subjects['grade'];?></td>
                                                </tr>
                                                <?php
                                                    }
                                                  }
                                                  else {
                                                    echo "<script>document.getElementById('middle_term_3rdyr').style.display = 'none';</script>";
                                                  }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!------ Fourth Year -------------------------->
                            <h2 class="year_title_view">Fourth Year</h2>
                            <div class="row">
                                <!------ Fourth Year First Sem ----------------->
                                <div class="col-md-6">
                                    <table class="table table-striped table-bordered table-hover float-md-right">
                                        <thead>
                                            <tr>
                                                <th colspan="12">First Sem</th>
                                            </tr>
                                            <tr>
                                                <th rowspan="2">Course Code</th>
                                                <th rowspan="2" colspan="2">Course Description</th>
                                                <th colspan="2">Hours</th>
                                                <th rowspan="2">Units</th>
                                                <th rowspan="2">Grade</th>
                                            </tr>
                                            <tr>
                                                <th>Lec</th>
                                                <th>Lab</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              $sql_subjects = "SELECT
                                              student_pri_info_tbl.student_id,
                                              student_pri_info_tbl.id_number,
                                              student_pri_info_tbl.fname,
                                              student_pri_info_tbl.Mname,
                                              student_pri_info_tbl.lname,

                                              student_acad_info_tbl.eval_id,

                                              eval_cmo_series_tbl.eval_id,
                                              eval_cmo_series_tbl.cmoNo,
                                              eval_cmo_series_tbl.series,

                                              subject_tbl.subj_id,
                                              subject_tbl.courseCode,
                                              subject_tbl.courseDesc,
                                              subject_tbl.units,
                                              subject_tbl.lec,
                                              subject_tbl.lab,
                                              subject_tbl.yr_lvl,
                                              subject_tbl.sem,

                                              student_grade_tbl.student_id,
                                              student_grade_tbl.subj_id,
                                              student_grade_tbl.grade

                                              FROM student_pri_info_tbl

                                              INNER JOIN student_acad_info_tbl ON student_acad_info_tbl.student_id = student_pri_info_tbl.student_id

                                              INNER JOIN eval_cmo_series_tbl ON eval_cmo_series_tbl.eval_id = student_acad_info_tbl.eval_id

                                              INNER JOIN subject_tbl ON subject_tbl.eval_id = eval_cmo_series_tbl.eval_id

                                              INNER JOIN student_grade_tbl ON student_grade_tbl.subj_id = subject_tbl.subj_id

                                              WHERE student_pri_info_tbl.student_id = '$student_id' AND student_acad_info_tbl.eval_id = '$row[eval_id]' AND subject_tbl.yr_lvl = '4th' AND subject_tbl.sem = '1st'";
                                              $result_subjects = $conn->query($sql_subjects);
                                                if($result_subjects->num_rows > 0) {
                                                  while ($row_subjects=$result_subjects->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row_subjects['courseCode'];?></td>
                                                <td colspan="2"><?php echo $row_subjects['courseDesc'];?></td>
                                                <td><?php echo $row_subjects['lec'];?></td>
                                                <td><?php echo $row_subjects['lab'];?></td>
                                                <td><?php echo $row_subjects['units'];?></td>
                                                <td><?php echo $row_subjects['grade'];?></td>
                                            </tr>
                                            <?php
                                                }
                                              }
                                              else {
                                                echo "<tr><td colspan='7' class='text-center' style='color: #A94442'>No subjects available</td></tr>";
                                              }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!------ Fourth Year Second Sem ---------------->
                                <div class="col-md-6">
                                    <table class="table table-striped table-bordered table-hover float-md-left">
                                        <thead>
                                            <tr>
                                                <th colspan="12">Second Sem</th>
                                            </tr>
                                            <tr>
                                                <th rowspan="2">Course Code</th>
                                                <th rowspan="2" colspan="2">Course Description</th>
                                                <th colspan="2">Hours</th>
                                                <th rowspan="2">Units</th>
                                                <th rowspan="2">Grade</th>
                                            </tr>
                                            <tr>
                                                <th>Lec</th>
                                                <th>Lab</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              $sql_subjects = "SELECT
                                              student_pri_info_tbl.student_id,
                                              student_pri_info_tbl.id_number,
                                              student_pri_info_tbl.fname,
                                              student_pri_info_tbl.Mname,
                                              student_pri_info_tbl.lname,

                                              student_acad_info_tbl.eval_id,

                                              eval_cmo_series_tbl.eval_id,
                                              eval_cmo_series_tbl.cmoNo,
                                              eval_cmo_series_tbl.series,

                                              subject_tbl.subj_id,
                                              subject_tbl.courseCode,
                                              subject_tbl.courseDesc,
                                              subject_tbl.units,
                                              subject_tbl.lec,
                                              subject_tbl.lab,
                                              subject_tbl.yr_lvl,
                                              subject_tbl.sem,

                                              student_grade_tbl.student_id,
                                              student_grade_tbl.subj_id,
                                              student_grade_tbl.grade

                                              FROM student_pri_info_tbl

                                              INNER JOIN student_acad_info_tbl ON student_acad_info_tbl.student_id = student_pri_info_tbl.student_id

                                              INNER JOIN eval_cmo_series_tbl ON eval_cmo_series_tbl.eval_id = student_acad_info_tbl.eval_id

                                              INNER JOIN subject_tbl ON subject_tbl.eval_id = eval_cmo_series_tbl.eval_id

                                              INNER JOIN student_grade_tbl ON student_grade_tbl.subj_id = subject_tbl.subj_id

                                              WHERE student_pri_info_tbl.student_id = '$student_id' AND student_acad_info_tbl.eval_id = '$row[eval_id]' AND subject_tbl.yr_lvl = '4th' AND subject_tbl.sem = '2nd'";
                                              $result_subjects = $conn->query($sql_subjects);
                                                if($result_subjects->num_rows > 0) {
                                                  while ($row_subjects=$result_subjects->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row_subjects['courseCode'];?></td>
                                                <td colspan="2"><?php echo $row_subjects['courseDesc'];?></td>
                                                <td><?php echo $row_subjects['lec'];?></td>
                                                <td><?php echo $row_subjects['lab'];?></td>
                                                <td><?php echo $row_subjects['units'];?></td>
                                                <td><?php echo $row_subjects['grade'];?></td>
                                            </tr>
                                            <?php
                                                }
                                              }
                                              else {
                                                echo "<tr><td colspan='7' class='text-center' style='color: #A94442'>No subjects available</td></tr>";
                                              }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <?php
                                }
                            }
                            else {
                                echo "<center><h1 class='error_msg'>Information unavailable</h1></center>";
                            }
                        ?>
                    </div>
                    <button type="button" class="btn btn-secondary btn-lg" onclick="generatePDF()">Download PDF</button>
                </div>

                <div class="grades-content">
                    <div id="element" class="grades-section">
                        <?php
                            $sql = "SELECT * FROM student_acad_info_tbl WHERE student_id = '$student_id'";
                            $result = $conn->query($sql);
                              if($result->num_rows > 0) {
                                while ($row=$result->fetch_assoc()) {
                        ?>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pdf_title">
                                        <h2>URDANETA CITY UNIVERSITY</h2>
                                        <h2>COLLEGE OF INFORMATION & TECHNOLOGY EDUCATION</h2>
                                        <p>San Vicente West, Urdaneta City, Pangasinan</p>
                                        <h2>BACHELORS OF SCIENCE IN INFORMATION TECHNOLOGY (BSIT)</h2>
                                        <p>(as per CMO No. 25 Series of 2015)</p>
                                    </div>
                                </div>
                            </div>
                            <!------ First Year --------------------------->
                            <h2 class="year_title">First Year</h2>
                            <div class="row">
                                <!------ First Year First Sem ----------------->
                                <div class="col-md-6">
                                    <table class="float-md-right">
                                        <thead>
                                            <tr>
                                                <th colspan="12">First Sem</th>
                                            </tr>
                                            <tr>
                                                <th rowspan="2">Course Code</th>
                                                <th rowspan="2" colspan="2">Course Description</th>
                                                <th colspan="2">Hours</th>
                                                <th rowspan="2">Units</th>
                                                <th rowspan="2">Grade</th>
                                            </tr>
                                            <tr>
                                                <th>Lec</th>
                                                <th>Lab</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              $sql_subjects = "SELECT
                                              student_pri_info_tbl.student_id,
                                              student_pri_info_tbl.id_number,
                                              student_pri_info_tbl.fname,
                                              student_pri_info_tbl.Mname,
                                              student_pri_info_tbl.lname,

                                              student_acad_info_tbl.eval_id,

                                              eval_cmo_series_tbl.eval_id,
                                              eval_cmo_series_tbl.cmoNo,
                                              eval_cmo_series_tbl.series,

                                              subject_tbl.subj_id,
                                              subject_tbl.courseCode,
                                              subject_tbl.courseDesc,
                                              subject_tbl.units,
                                              subject_tbl.lec,
                                              subject_tbl.lab,
                                              subject_tbl.yr_lvl,
                                              subject_tbl.sem,

                                              student_grade_tbl.student_id,
                                              student_grade_tbl.subj_id,
                                              student_grade_tbl.grade

                                              FROM student_pri_info_tbl

                                              INNER JOIN student_acad_info_tbl ON student_acad_info_tbl.student_id = student_pri_info_tbl.student_id

                                              INNER JOIN eval_cmo_series_tbl ON eval_cmo_series_tbl.eval_id = student_acad_info_tbl.eval_id

                                              INNER JOIN subject_tbl ON subject_tbl.eval_id = eval_cmo_series_tbl.eval_id

                                              INNER JOIN student_grade_tbl ON student_grade_tbl.subj_id = subject_tbl.subj_id

                                              WHERE student_pri_info_tbl.student_id = '$student_id' AND student_acad_info_tbl.eval_id = '$row[eval_id]' AND subject_tbl.yr_lvl = '1st' AND subject_tbl.sem = '1st'";
                                              $result_subjects = $conn->query($sql_subjects);
                                                if($result_subjects->num_rows > 0) {
                                                  while ($row_subjects=$result_subjects->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row_subjects['courseCode'];?></td>
                                                <td colspan="2"><?php echo $row_subjects['courseDesc'];?></td>
                                                <td><?php echo $row_subjects['lec'];?></td>
                                                <td><?php echo $row_subjects['lab'];?></td>
                                                <td><?php echo $row_subjects['units'];?></td>
                                                <td><?php echo $row_subjects['grade'];?></td>
                                            </tr>
                                            <?php
                                                }
                                              }
                                              else {
                                                echo "<tr><td colspan='7' class='text-center' style='color: #A94442'>No subjects available</td></tr>";
                                              }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!------ First Year Second Sem ---------------->
                                <div class="col-md-6">
                                    <table class="float-md-left">
                                        <thead>
                                            <tr>
                                                <th colspan="12">Second Sem</th>
                                            </tr>
                                            <tr>
                                                <th rowspan="2">Course Code</th>
                                                <th rowspan="2" colspan="2">Course Description</th>
                                                <th colspan="2">Hours</th>
                                                <th rowspan="2">Units</th>
                                                <th rowspan="2">Grade</th>
                                            </tr>
                                            <tr>
                                                <th>Lec</th>
                                                <th>Lab</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              $sql_subjects = "SELECT
                                              student_pri_info_tbl.student_id,
                                              student_pri_info_tbl.id_number,
                                              student_pri_info_tbl.fname,
                                              student_pri_info_tbl.Mname,
                                              student_pri_info_tbl.lname,

                                              student_acad_info_tbl.eval_id,

                                              eval_cmo_series_tbl.eval_id,
                                              eval_cmo_series_tbl.cmoNo,
                                              eval_cmo_series_tbl.series,

                                              subject_tbl.subj_id,
                                              subject_tbl.courseCode,
                                              subject_tbl.courseDesc,
                                              subject_tbl.units,
                                              subject_tbl.lec,
                                              subject_tbl.lab,
                                              subject_tbl.yr_lvl,
                                              subject_tbl.sem,

                                              student_grade_tbl.student_id,
                                              student_grade_tbl.subj_id,
                                              student_grade_tbl.grade

                                              FROM student_pri_info_tbl

                                              INNER JOIN student_acad_info_tbl ON student_acad_info_tbl.student_id = student_pri_info_tbl.student_id

                                              INNER JOIN eval_cmo_series_tbl ON eval_cmo_series_tbl.eval_id = student_acad_info_tbl.eval_id

                                              INNER JOIN subject_tbl ON subject_tbl.eval_id = eval_cmo_series_tbl.eval_id

                                              INNER JOIN student_grade_tbl ON student_grade_tbl.subj_id = subject_tbl.subj_id

                                              WHERE student_pri_info_tbl.student_id = '$student_id' AND student_acad_info_tbl.eval_id = '$row[eval_id]' AND subject_tbl.yr_lvl = '1st' AND subject_tbl.sem = '2nd'";
                                              $result_subjects = $conn->query($sql_subjects);
                                                if($result_subjects->num_rows > 0) {
                                                  while ($row_subjects=$result_subjects->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row_subjects['courseCode'];?></td>
                                                <td colspan="2"><?php echo $row_subjects['courseDesc'];?></td>
                                                <td><?php echo $row_subjects['lec'];?></td>
                                                <td><?php echo $row_subjects['lab'];?></td>
                                                <td><?php echo $row_subjects['units'];?></td>
                                                <td><?php echo $row_subjects['grade'];?></td>
                                            </tr>
                                            <?php
                                                }
                                              }
                                              else {
                                                echo "<tr><td colspan='7' class='text-center' style='color: #A94442'>No subjects available</td></tr>";
                                              }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!------ Second Year -------------------------->
                            <h2 class="year_title">Second Year</h2>
                            <div class="row">
                                <!------ Second Year First Sem ----------------->
                                <div class="col-md-6">
                                    <table class="float-md-right">
                                        <thead>
                                            <tr>
                                                <th colspan="12">First Sem</th>
                                            </tr>
                                            <tr>
                                                <th rowspan="2">Course Code</th>
                                                <th rowspan="2" colspan="2">Course Description</th>
                                                <th colspan="2">Hours</th>
                                                <th rowspan="2">Units</th>
                                                <th rowspan="2">Grade</th>
                                            </tr>
                                            <tr>
                                                <th>Lec</th>
                                                <th>Lab</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              $sql_subjects = "SELECT
                                              student_pri_info_tbl.student_id,
                                              student_pri_info_tbl.id_number,
                                              student_pri_info_tbl.fname,
                                              student_pri_info_tbl.Mname,
                                              student_pri_info_tbl.lname,

                                              student_acad_info_tbl.eval_id,

                                              eval_cmo_series_tbl.eval_id,
                                              eval_cmo_series_tbl.cmoNo,
                                              eval_cmo_series_tbl.series,

                                              subject_tbl.subj_id,
                                              subject_tbl.courseCode,
                                              subject_tbl.courseDesc,
                                              subject_tbl.units,
                                              subject_tbl.lec,
                                              subject_tbl.lab,
                                              subject_tbl.yr_lvl,
                                              subject_tbl.sem,

                                              student_grade_tbl.student_id,
                                              student_grade_tbl.subj_id,
                                              student_grade_tbl.grade

                                              FROM student_pri_info_tbl

                                              INNER JOIN student_acad_info_tbl ON student_acad_info_tbl.student_id = student_pri_info_tbl.student_id

                                              INNER JOIN eval_cmo_series_tbl ON eval_cmo_series_tbl.eval_id = student_acad_info_tbl.eval_id

                                              INNER JOIN subject_tbl ON subject_tbl.eval_id = eval_cmo_series_tbl.eval_id

                                              INNER JOIN student_grade_tbl ON student_grade_tbl.subj_id = subject_tbl.subj_id

                                              WHERE student_pri_info_tbl.student_id = '$student_id' AND student_acad_info_tbl.eval_id = '$row[eval_id]' AND subject_tbl.yr_lvl = '2nd' AND subject_tbl.sem = '1st'";
                                              $result_subjects = $conn->query($sql_subjects);
                                                if($result_subjects->num_rows > 0) {
                                                  while ($row_subjects=$result_subjects->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row_subjects['courseCode'];?></td>
                                                <td colspan="2"><?php echo $row_subjects['courseDesc'];?></td>
                                                <td><?php echo $row_subjects['lec'];?></td>
                                                <td><?php echo $row_subjects['lab'];?></td>
                                                <td><?php echo $row_subjects['units'];?></td>
                                                <td><?php echo $row_subjects['grade'];?></td>
                                            </tr>
                                            <?php
                                                }
                                              }
                                              else {
                                                echo "<tr><td colspan='7' class='text-center' style='color: #A94442'>No subjects available</td></tr>";
                                              }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!------ Second Year Second Sem ---------------->
                                <div class="col-md-6">
                                    <table class="float-md-left">
                                        <thead>
                                            <tr>
                                                <th colspan="12">Second Sem</th>
                                            </tr>
                                            <tr>
                                                <th rowspan="2">Course Code</th>
                                                <th rowspan="2" colspan="2">Course Description</th>
                                                <th colspan="2">Hours</th>
                                                <th rowspan="2">Units</th>
                                                <th rowspan="2">Grade</th>
                                            </tr>
                                            <tr>
                                                <th>Lec</th>
                                                <th>Lab</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              $sql_subjects = "SELECT
                                              student_pri_info_tbl.student_id,
                                              student_pri_info_tbl.id_number,
                                              student_pri_info_tbl.fname,
                                              student_pri_info_tbl.Mname,
                                              student_pri_info_tbl.lname,

                                              student_acad_info_tbl.eval_id,

                                              eval_cmo_series_tbl.eval_id,
                                              eval_cmo_series_tbl.cmoNo,
                                              eval_cmo_series_tbl.series,

                                              subject_tbl.subj_id,
                                              subject_tbl.courseCode,
                                              subject_tbl.courseDesc,
                                              subject_tbl.units,
                                              subject_tbl.lec,
                                              subject_tbl.lab,
                                              subject_tbl.yr_lvl,
                                              subject_tbl.sem,

                                              student_grade_tbl.student_id,
                                              student_grade_tbl.subj_id,
                                              student_grade_tbl.grade

                                              FROM student_pri_info_tbl

                                              INNER JOIN student_acad_info_tbl ON student_acad_info_tbl.student_id = student_pri_info_tbl.student_id

                                              INNER JOIN eval_cmo_series_tbl ON eval_cmo_series_tbl.eval_id = student_acad_info_tbl.eval_id

                                              INNER JOIN subject_tbl ON subject_tbl.eval_id = eval_cmo_series_tbl.eval_id

                                              INNER JOIN student_grade_tbl ON student_grade_tbl.subj_id = subject_tbl.subj_id

                                              WHERE student_pri_info_tbl.student_id = '$student_id' AND student_acad_info_tbl.eval_id = '$row[eval_id]' AND subject_tbl.yr_lvl = '2nd' AND subject_tbl.sem = '2nd'";
                                              $result_subjects = $conn->query($sql_subjects);
                                                if($result_subjects->num_rows > 0) {
                                                  while ($row_subjects=$result_subjects->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row_subjects['courseCode'];?></td>
                                                <td colspan="2"><?php echo $row_subjects['courseDesc'];?></td>
                                                <td><?php echo $row_subjects['lec'];?></td>
                                                <td><?php echo $row_subjects['lab'];?></td>
                                                <td><?php echo $row_subjects['units'];?></td>
                                                <td><?php echo $row_subjects['grade'];?></td>
                                            </tr>
                                            <?php
                                                }
                                              }
                                              else {
                                                echo "<tr><td colspan='7' class='text-center' style='color: #A94442'>No subjects available</td></tr>";
                                              }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!------ Third Year --------------------------->
                            <h2 class="year_title">Third Year</h2>
                            <div class="row">
                                <!------ Third Year First Sem ----------------->
                                <div class="col-md-6">
                                    <table class="float-md-right">
                                        <thead>
                                            <tr>
                                                <th colspan="12">First Sem</th>
                                            </tr>
                                            <tr>
                                                <th rowspan="2">Course Code</th>
                                                <th rowspan="2" colspan="2">Course Description</th>
                                                <th colspan="2">Hours</th>
                                                <th rowspan="2">Units</th>
                                                <th rowspan="2">Grade</th>
                                            </tr>
                                            <tr>
                                                <th>Lec</th>
                                                <th>Lab</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              $sql_subjects = "SELECT
                                              student_pri_info_tbl.student_id,
                                              student_pri_info_tbl.id_number,
                                              student_pri_info_tbl.fname,
                                              student_pri_info_tbl.Mname,
                                              student_pri_info_tbl.lname,

                                              student_acad_info_tbl.eval_id,

                                              eval_cmo_series_tbl.eval_id,
                                              eval_cmo_series_tbl.cmoNo,
                                              eval_cmo_series_tbl.series,

                                              subject_tbl.subj_id,
                                              subject_tbl.courseCode,
                                              subject_tbl.courseDesc,
                                              subject_tbl.units,
                                              subject_tbl.lec,
                                              subject_tbl.lab,
                                              subject_tbl.yr_lvl,
                                              subject_tbl.sem,

                                              student_grade_tbl.student_id,
                                              student_grade_tbl.subj_id,
                                              student_grade_tbl.grade

                                              FROM student_pri_info_tbl

                                              INNER JOIN student_acad_info_tbl ON student_acad_info_tbl.student_id = student_pri_info_tbl.student_id

                                              INNER JOIN eval_cmo_series_tbl ON eval_cmo_series_tbl.eval_id = student_acad_info_tbl.eval_id

                                              INNER JOIN subject_tbl ON subject_tbl.eval_id = eval_cmo_series_tbl.eval_id

                                              INNER JOIN student_grade_tbl ON student_grade_tbl.subj_id = subject_tbl.subj_id

                                              WHERE student_pri_info_tbl.student_id = '$student_id' AND student_acad_info_tbl.eval_id = '$row[eval_id]' AND subject_tbl.yr_lvl = '3rd' AND subject_tbl.sem = '1st'";
                                              $result_subjects = $conn->query($sql_subjects);
                                                if($result_subjects->num_rows > 0) {
                                                  while ($row_subjects=$result_subjects->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row_subjects['courseCode'];?></td>
                                                <td colspan="2"><?php echo $row_subjects['courseDesc'];?></td>
                                                <td><?php echo $row_subjects['lec'];?></td>
                                                <td><?php echo $row_subjects['lab'];?></td>
                                                <td><?php echo $row_subjects['units'];?></td>
                                                <td><?php echo $row_subjects['grade'];?></td>
                                            </tr>
                                            <?php
                                                }
                                              }
                                              else {
                                                echo "<tr><td colspan='7' class='text-center' style='color: #A94442'>No subjects available</td></tr>";
                                              }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!------ Third Year Second Sem ---------------->
                                <div class="col-md-6">
                                    <table class="float-md-left">
                                        <thead>
                                            <tr>
                                                <th colspan="12">Second Sem</th>
                                            </tr>
                                            <tr>
                                                <th rowspan="2">Course Code</th>
                                                <th rowspan="2" colspan="2">Course Description</th>
                                                <th colspan="2">Hours</th>
                                                <th rowspan="2">Units</th>
                                                <th rowspan="2">Grade</th>
                                            </tr>
                                            <tr>
                                                <th>Lec</th>
                                                <th>Lab</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              $sql_subjects = "SELECT
                                              student_pri_info_tbl.student_id,
                                              student_pri_info_tbl.id_number,
                                              student_pri_info_tbl.fname,
                                              student_pri_info_tbl.Mname,
                                              student_pri_info_tbl.lname,

                                              student_acad_info_tbl.eval_id,

                                              eval_cmo_series_tbl.eval_id,
                                              eval_cmo_series_tbl.cmoNo,
                                              eval_cmo_series_tbl.series,

                                              subject_tbl.subj_id,
                                              subject_tbl.courseCode,
                                              subject_tbl.courseDesc,
                                              subject_tbl.units,
                                              subject_tbl.lec,
                                              subject_tbl.lab,
                                              subject_tbl.yr_lvl,
                                              subject_tbl.sem,

                                              student_grade_tbl.student_id,
                                              student_grade_tbl.subj_id,
                                              student_grade_tbl.grade

                                              FROM student_pri_info_tbl

                                              INNER JOIN student_acad_info_tbl ON student_acad_info_tbl.student_id = student_pri_info_tbl.student_id

                                              INNER JOIN eval_cmo_series_tbl ON eval_cmo_series_tbl.eval_id = student_acad_info_tbl.eval_id

                                              INNER JOIN subject_tbl ON subject_tbl.eval_id = eval_cmo_series_tbl.eval_id

                                              INNER JOIN student_grade_tbl ON student_grade_tbl.subj_id = subject_tbl.subj_id

                                              WHERE student_pri_info_tbl.student_id = '$student_id' AND student_acad_info_tbl.eval_id = '$row[eval_id]' AND subject_tbl.yr_lvl = '3rd' AND subject_tbl.sem = '2nd'";
                                              $result_subjects = $conn->query($sql_subjects);
                                                if($result_subjects->num_rows > 0) {
                                                  while ($row_subjects=$result_subjects->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row_subjects['courseCode'];?></td>
                                                <td colspan="2"><?php echo $row_subjects['courseDesc'];?></td>
                                                <td><?php echo $row_subjects['lec'];?></td>
                                                <td><?php echo $row_subjects['lab'];?></td>
                                                <td><?php echo $row_subjects['units'];?></td>
                                                <td><?php echo $row_subjects['grade'];?></td>
                                            </tr>
                                            <?php
                                                }
                                              }
                                              else {
                                                echo "<tr><td colspan='7' class='text-center' style='color: #A94442'>No subjects available</td></tr>";
                                              }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Third Year middle term -->
                            <div id="middle_term_3rdyr">
                                <div class="row">
                                    <!------ Third Year middle term ---------------->
                                    <div class="col-md">
                                        <table class="float-md-left">
                                            <thead>
                                                <tr>
                                                    <th colspan="12">Middle Term</th>
                                                </tr>
                                                <tr>
                                                    <th rowspan="2">Course Code</th>
                                                    <th rowspan="2" colspan="2">Course Description</th>
                                                    <th colspan="2">Hours</th>
                                                    <th rowspan="2">Units</th>
                                                    <th rowspan="2">Grade</th>
                                                </tr>
                                                <tr>
                                                    <th>Lec</th>
                                                    <th>Lab</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                  $sql_subjects = "SELECT
                                              student_pri_info_tbl.student_id,
                                              student_pri_info_tbl.id_number,
                                              student_pri_info_tbl.fname,
                                              student_pri_info_tbl.Mname,
                                              student_pri_info_tbl.lname,

                                              student_acad_info_tbl.eval_id,

                                              eval_cmo_series_tbl.eval_id,
                                              eval_cmo_series_tbl.cmoNo,
                                              eval_cmo_series_tbl.series,

                                              subject_tbl.subj_id,
                                              subject_tbl.courseCode,
                                              subject_tbl.courseDesc,
                                              subject_tbl.units,
                                              subject_tbl.lec,
                                              subject_tbl.lab,
                                              subject_tbl.yr_lvl,
                                              subject_tbl.sem,

                                              student_grade_tbl.student_id,
                                              student_grade_tbl.subj_id,
                                              student_grade_tbl.grade

                                              FROM student_pri_info_tbl

                                              INNER JOIN student_acad_info_tbl ON student_acad_info_tbl.student_id = student_pri_info_tbl.student_id

                                              INNER JOIN eval_cmo_series_tbl ON eval_cmo_series_tbl.eval_id = student_acad_info_tbl.eval_id

                                              INNER JOIN subject_tbl ON subject_tbl.eval_id = eval_cmo_series_tbl.eval_id

                                              INNER JOIN student_grade_tbl ON student_grade_tbl.subj_id = subject_tbl.subj_id

                                              WHERE student_pri_info_tbl.student_id = '$student_id' AND student_acad_info_tbl.eval_id = '$row[eval_id]' AND subject_tbl.yr_lvl = '3rd' AND subject_tbl.sem = 'Middle Term'";
                                                  $result_subjects = $conn->query($sql_subjects);
                                                    if($result_subjects->num_rows > 0) {
                                                      while ($row_subjects=$result_subjects->fetch_assoc()) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row_subjects['courseCode'];?></td>
                                                    <td colspan="2"><?php echo $row_subjects['courseDesc'];?></td>
                                                    <td><?php echo $row_subjects['lec'];?></td>
                                                    <td><?php echo $row_subjects['lab'];?></td>
                                                    <td><?php echo $row_subjects['units'];?></td>
                                                    <td><?php echo $row_subjects['grade'];?></td>
                                                </tr>
                                                <?php
                                                    }
                                                  }
                                                  else {
                                                    echo "<script>document.getElementById('middle_term_3rdyr').style.display = 'none';</script>";
                                                  }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!------ Fourth Year -------------------------->
                            <h2 class="year_title">Fourth Year</h2>
                            <div class="row">
                                <!------ Fourth Year First Sem ----------------->
                                <div class="col-md-6">
                                    <table class="float-md-right">
                                        <thead>
                                            <tr>
                                                <th colspan="12">First Sem</th>
                                            </tr>
                                            <tr>
                                                <th rowspan="2">Course Code</th>
                                                <th rowspan="2" colspan="2">Course Description</th>
                                                <th colspan="2">Hours</th>
                                                <th rowspan="2">Units</th>
                                                <th rowspan="2">Grade</th>
                                            </tr>
                                            <tr>
                                                <th>Lec</th>
                                                <th>Lab</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              $sql_subjects = "SELECT
                                              student_pri_info_tbl.student_id,
                                              student_pri_info_tbl.id_number,
                                              student_pri_info_tbl.fname,
                                              student_pri_info_tbl.Mname,
                                              student_pri_info_tbl.lname,

                                              student_acad_info_tbl.eval_id,

                                              eval_cmo_series_tbl.eval_id,
                                              eval_cmo_series_tbl.cmoNo,
                                              eval_cmo_series_tbl.series,

                                              subject_tbl.subj_id,
                                              subject_tbl.courseCode,
                                              subject_tbl.courseDesc,
                                              subject_tbl.units,
                                              subject_tbl.lec,
                                              subject_tbl.lab,
                                              subject_tbl.yr_lvl,
                                              subject_tbl.sem,

                                              student_grade_tbl.student_id,
                                              student_grade_tbl.subj_id,
                                              student_grade_tbl.grade

                                              FROM student_pri_info_tbl

                                              INNER JOIN student_acad_info_tbl ON student_acad_info_tbl.student_id = student_pri_info_tbl.student_id

                                              INNER JOIN eval_cmo_series_tbl ON eval_cmo_series_tbl.eval_id = student_acad_info_tbl.eval_id

                                              INNER JOIN subject_tbl ON subject_tbl.eval_id = eval_cmo_series_tbl.eval_id

                                              INNER JOIN student_grade_tbl ON student_grade_tbl.subj_id = subject_tbl.subj_id

                                              WHERE student_pri_info_tbl.student_id = '$student_id' AND student_acad_info_tbl.eval_id = '$row[eval_id]' AND subject_tbl.yr_lvl = '4th' AND subject_tbl.sem = '1st'";
                                              $result_subjects = $conn->query($sql_subjects);
                                                if($result_subjects->num_rows > 0) {
                                                  while ($row_subjects=$result_subjects->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row_subjects['courseCode'];?></td>
                                                <td colspan="2"><?php echo $row_subjects['courseDesc'];?></td>
                                                <td><?php echo $row_subjects['lec'];?></td>
                                                <td><?php echo $row_subjects['lab'];?></td>
                                                <td><?php echo $row_subjects['units'];?></td>
                                                <td><?php echo $row_subjects['grade'];?></td>
                                            </tr>
                                            <?php
                                                }
                                              }
                                              else {
                                                echo "<tr><td colspan='7' class='text-center' style='color: #A94442'>No subjects available</td></tr>";
                                              }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!------ Fourth Year Second Sem ---------------->
                                <div class="col-md-6">
                                    <table class="float-md-left">
                                        <thead>
                                            <tr>
                                                <th colspan="12">Second Sem</th>
                                            </tr>
                                            <tr>
                                                <th rowspan="2">Course Code</th>
                                                <th rowspan="2" colspan="2">Course Description</th>
                                                <th colspan="2">Hours</th>
                                                <th rowspan="2">Units</th>
                                                <th rowspan="2">Grade</th>
                                            </tr>
                                            <tr>
                                                <th>Lec</th>
                                                <th>Lab</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              $sql_subjects = "SELECT
                                              student_pri_info_tbl.student_id,
                                              student_pri_info_tbl.id_number,
                                              student_pri_info_tbl.fname,
                                              student_pri_info_tbl.Mname,
                                              student_pri_info_tbl.lname,

                                              student_acad_info_tbl.eval_id,

                                              eval_cmo_series_tbl.eval_id,
                                              eval_cmo_series_tbl.cmoNo,
                                              eval_cmo_series_tbl.series,

                                              subject_tbl.subj_id,
                                              subject_tbl.courseCode,
                                              subject_tbl.courseDesc,
                                              subject_tbl.units,
                                              subject_tbl.lec,
                                              subject_tbl.lab,
                                              subject_tbl.yr_lvl,
                                              subject_tbl.sem,

                                              student_grade_tbl.student_id,
                                              student_grade_tbl.subj_id,
                                              student_grade_tbl.grade

                                              FROM student_pri_info_tbl

                                              INNER JOIN student_acad_info_tbl ON student_acad_info_tbl.student_id = student_pri_info_tbl.student_id

                                              INNER JOIN eval_cmo_series_tbl ON eval_cmo_series_tbl.eval_id = student_acad_info_tbl.eval_id

                                              INNER JOIN subject_tbl ON subject_tbl.eval_id = eval_cmo_series_tbl.eval_id

                                              INNER JOIN student_grade_tbl ON student_grade_tbl.subj_id = subject_tbl.subj_id

                                              WHERE student_pri_info_tbl.student_id = '$student_id' AND student_acad_info_tbl.eval_id = '$row[eval_id]' AND subject_tbl.yr_lvl = '4th' AND subject_tbl.sem = '2nd'";
                                              $result_subjects = $conn->query($sql_subjects);
                                                if($result_subjects->num_rows > 0) {
                                                  while ($row_subjects=$result_subjects->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row_subjects['courseCode'];?></td>
                                                <td colspan="2"><?php echo $row_subjects['courseDesc'];?></td>
                                                <td><?php echo $row_subjects['lec'];?></td>
                                                <td><?php echo $row_subjects['lab'];?></td>
                                                <td><?php echo $row_subjects['units'];?></td>
                                                <td><?php echo $row_subjects['grade'];?></td>
                                            </tr>
                                            <?php
                                                }
                                              }
                                              else {
                                                echo "<tr><td colspan='7' class='text-center' style='color: #A94442'>No subjects available</td></tr>";
                                              }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <?php
                                }
                            }
                            else {
                                echo "<center><h1 class='error_msg'>Information unavailable</h1></center>";
                            }
                        ?>
                        <div class="grades-section-below">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h2>List of Electives</h2>
                                        <ul>
                                            <li>Advanced Web Development</li>
                                            <li>Cloud Compunting</li>
                                            <li>Cyber Security and Emerging Challenges</li>
                                            <li>Data Analytics</li>
                                            <li>Programming and Interfacing with Microcontrollers</li>
                                        </ul>
                                        <h2>Summary of Units</h2>
                                        <table>
                                            <tr>
                                                <td>General Education</td>
                                                <td>42</td>
                                            </tr>
                                            <tr>
                                                <td>PE</td>
                                                <td>8</td>
                                            </tr>
                                            <tr>
                                                <td>NSTP</td>
                                                <td>6</td>
                                            </tr>
                                            <tr>
                                                <td>Major/Fields Specialization</td>
                                                <td>93</td>
                                            </tr>
                                            <tr>
                                                <td>IT Electives</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>Institutional Subject</td>
                                                <td>4</td>
                                            </tr>
                                            <tr>
                                                <td>Total Number of Units</td>
                                                <td>165</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-6">
                                        <h2>LEGEND:</h2>
                                        <div class="bocc">
                                            <div class="bocc_color"></div>
                                            <h4>&emsp;-&emsp;&emsp;BASED ON CLASS CARD </h4>
                                        </div>
                                        <br>
                                        <div class="lack">
                                            <div class="lack_color"></div>
                                            <h4>&emsp;-&emsp;&emsp;LACKING </h4>
                                        </div>
                                        <div class="signatures">
                                            <div class="signatures_item">
                                                <h2>Prepared by:</h2>
                                                <div class="signatures_item_contents">
                                                    <h3>JASPER U. UNDAN</h3>
                                                    <h1>College Secretary</h1>
                                                </div>
                                            </div>
                                            <div class="signatures_item">
                                                <h2>Noted by:</h2>
                                                <div class="signatures_item_contents">
                                                    <h3>DANILO B. DORADO</h3>
                                                    <h1>Program Head</h1>
                                                </div>
                                            </div>
                                            <div class="signatures_item">
                                                <h2>Approaved by:</h2>
                                                <div class="signatures_item_contents">
                                                    <h3>JOHHANS B. RABAGO</h3>
                                                    <h1>DEAN, College of Information<br>& Technology Education</h1>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Content Section -------------------------------->
                <!--Start Footer Section ------------------------------->
                <?php include 'footer.php';?>
                <!--End Footer Section --------------------------------->
                <!--Start Copyright Section ---------------------------->
                <div class="copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <p class="copyright_text">© 2022 All Rights Reserved. College of Information and Technology Education</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Copyright Section ------------------------------>
                <!-- Javascript files----------------------------------->
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.2.2/swiper-bundle.min.js"></script>
                <script type="text/javascript" src="js/card-slider.js"></script>
                <script src="../js/jquery.min.js"></script>
                <script src="../js/popper.min.js"></script>
                <script src="../js/bootstrap.bundle.min.js"></script>
            </body>
        </html>
<?php
} 
else {
  header("Location: ../login.php");
  exit();
}

?>