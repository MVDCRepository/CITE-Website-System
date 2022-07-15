<!-- <?php
session_start();

if (isset($_SESSION['student_id']) && isset($_SESSION['id_number']) && isset($_SESSION['fname']) && isset($_SESSION['mname']) && isset($_SESSION['lname']) && isset($_SESSION['yr_lvl']) && isset($_SESSION['eval_status'])) {
    include '../db_conn.php';
    $student_id = $_SESSION['student_id'];
?> -->
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
        <title>Profile | CITE</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
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
        <link href="custom.css" rel="stylesheet" />
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
                                                        <a class="dropdown-item" href="#">BSIT</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">BLIS</a>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="admission.php">ADMISSION</a></li>
                                                <li id="nav" class="nav-item last"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"><?php echo $_SESSION['fname'];?></a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="right: auto; left: auto;">
                                                    <a style="font-weight: 600;" class="dropdown-item" href="profile.php"><!-- <img src="../images/xiao.png"> -->Profile Settings</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="grades.php">Grades</a>
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

                <!--Start Content Section ----------------------------->
                <div class="profile_content">
                    <div class="profile_title_container">
                        <h1 class="profile_title">Student Profile</h1>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <form>
                                    <div class="reg_content">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <table class="table table-condensed table-bordered table-striped">
                                                    <tbody>
                                                        <tr>
                                                            <th>TYPE</th>
                                                            <th>STORED</th>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="2">PRIMARY INFORMATION :</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Fulll Name</th>
                                                            <td>MICHAEL VINCENT D. CARPO</td>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="2">PERMANENT ADDRESS :</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Province</th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th>City/Municipality</th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Barangay</th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th>House Number</th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Zip Code</th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="2">BASIC INFORMATION :</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Birthdate</th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Nationality</th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="2">BIRTH PLACE :</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Province</th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th>City/Municipality</th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Barangay</th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th>House Number</th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Zip Code</th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="2">CONTACT & OTHER INFO :</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Email Address</th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Contact Number</th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Sex</th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Religion</th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="2">FATHER'S INFORMATION :</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Father's Name</th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Contact Number</th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Occupation</th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="2">MOTHER'S INFORMATION :</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Mother's Name</th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Contact Number</th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Occupation</th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="2">GUARDIAN'S INFORMATION :</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Name</th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Contact Number</th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Occupation</th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="2">ACADEMIC INFORMATION :</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Course Enrolled</th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Second Choice of Course</th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Graduated Senior High School</th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Year Graduated Senior High School</th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Graduated Elementary School</th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Year Graduated Elementary School</th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Strand</th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Learners Reference Number</th>
                                                            <td></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <th>Form 138 GWA</th>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="profile_left_section">
                                    <h2>Requirements</h2>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <center>
                                                    <?php if (isset($_GET['submit_error'])) { ?>
                                                      <p class="error_msg"><?php echo $_GET['submit_error'];?></p>
                                                    <?php } ?>
                                                    <?php if (isset($_GET['submit_success'])) { ?>
                                                      <p class="success_msg"><?php echo $_GET['submit_success']; ?></p>
                                                    <?php } ?>
                                                </center>
                                                <div class="alert alert-warning">
                                                    <h5 class="alert-heading">Note!</h5>
                                                    Rename your files according what you checked.
                                                </div>
                                                <form action="../php/submit_requirementsPHP.php" method="POST" enctype="multipart/form-data">
                                                    <table>
                                                        <!----- FORM 137 ------->
                                                        <tr>
                                                            <td>
                                                                <div class="form-check float-left">
                                                                    <input class="form-check-input" type="checkbox" value="FORM 137" id="form_137" name="req_id[]">
                                                                    <input type="hidden" name="student_id[]" value="<?php echo $_SESSION['student_id'];?>">
                                                                    <input type="hidden" name="requirement[]" value="FORM 137">
                                                                    <label class="form-check-label" for="form_137">
                                                                            FORM 137
                                                                    </label>
                                                                </div>
                                                                <br>
                                                                <input class="custom_upload" type="file" name="file_name[]">
                                                            </td>
                                                        <!-- <td class="upload_status">Missing</td> -->
                                                        </tr>
                                                        <!----- FORM 138 ------->
                                                        <tr>
                                                            <td>
                                                                <div class="form-check float-left">
                                                                    <input class="form-check-input" type="checkbox" value="FORM 138" id="form_138" name="req_id[]">
                                                                    <input type="hidden" name="student_id[]" value="<?php echo $_SESSION['student_id'];?>">
                                                                    <input type="hidden" name="requirement[]" value="FORM 138">
                                                                    <label class="form-check-label" for="form_138">
                                                                        FORM 138
                                                                    </label>
                                                                </div>
                                                                <br>
                                                                <input class="custom_upload" type="file" name="file_name[]">
                                                            </td>
                                                        <!-- <td class="upload_status">Missing</td> -->
                                                        </tr>
                                                        <!----- Good Moral ------->
                                                        <tr>
                                                            <td>
                                                                <div class="form-check float-left">
                                                                    <input class="form-check-input" type="checkbox" value="Good Moral Certification" id="good_moral" name="req_id[]">
                                                                    <input type="hidden" name="student_id[]" value="<?php echo $_SESSION['student_id'];?>">
                                                                    <input type="hidden" name="requirement[]" value="Good Moral Certification">
                                                                    <label class="form-check-label" for="good_moral">
                                                                        Good Moral Certification
                                                                    </label>
                                                                </div>
                                                                <br>
                                                                <input class="custom_upload" type="file" name="file_name[]">
                                                            </td>
                                                           <!-- <td class="upload_status">Missing</td> -->
                                                        </tr>
                                                    </table>
                                                    <input type="submit" name="submit_btn" value="Submit" class="btn btn-success float-left">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="profile_left_section">
                                    <form action="" method="POST" id="upd_student_cred_form">
                                        <h3>Student Credentials</h3>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="tempo_uname">Temporary username</label>
                                                <input type="text" class="form-control" id="tempo_uname" disabled>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="tempo_pass">Temporary Password</label>
                                                <input type="password" class="form-control" id="tempo_pass" disabled>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="generate_creds" required>
                                                    <label class="form-check-label" for="generate_creds">Generate Credentials</label>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-success">Register</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Content Section -------------------------------->
                <!--Start Footer Section ------------------------------->
                <div class="footer">
                    <div class="footer_container">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="map_icon">
                                        <a href="../index.html"><img src="../images/cite_logo.png"></a>
                                        <a href="https://ucu.edu.ph" target="_blank"><img src="../images/ucu_mis_logo.png"></a>
                                        <h4>Contact Us:</h4>
                                        <h5><i class="bi bi-geo-alt"></i>1 San Vicente West Urdaneta City Pangasinan 2428</h5>
                                        <h5><i class="bi bi-telephone"></i>(075) 204-9020</h5>
                                        <h5><i class="bi bi-envelope"></i>univpresidentofficial@gmail.com</h5>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="map_icon">
                                        <h2>Quick Links</h2>
                                        <ul>
                                            <li><a href="#">Announcements</a></li>
                                            <li><a href="news_and_events.html">News and Events</a></li>
                                            <li><a href="about.html">About</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="map_icon">
                                        <h2>Follow UCU</h2>
                                        <a href="https://www.facebook.com/UCUOfficial" target="_blank"><i class="fab fa-facebook-f"> </i></a>
                                        <a href="https://www.youtube.com/c/UcuEduPhOfficial" target="_blank"><i style="padding-right: 25px;" class="fab fa-youtube"> </i></a>
                                        <a href="https://www.instagram.com/ucuofficial/" target="_blank"><i class="fab fa-instagram"> </i></a>
                                        <a href="https://mis.ucu.edu.ph" target="_blank"><p>UCU-MIS+ 2022</p></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                <script type="text/javascript" src="../js/card-slider.js"></script>
                <script src="../js/jquery.min.js"></script>
                <script src="../js/popper.min.js"></script>
                <script src="../js/bootstrap.bundle.min.js"></script>
                <!-- cite js -->
                <script type="text/javascript" src="../js/profile.js"></script>
            </body>
        </html>
<?php
} 
else {
  header("Location: ../user_login.php");
  exit();
}

?>