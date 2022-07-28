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
                                <div class="reg_content">
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <p hidden id="student_status"><?php echo $_SESSION['status'];?></p>
                                            <center>
                                                <?php if (isset($_GET['error_msg'])) { ?>
                                                    <p class="error_msg mt-5 mb-5" style="width: 40%"><?php echo $_GET['error_msg']; ?></p>
                                                <?php } ?>
                                                <?php if (isset($_GET['success_upd_cred'])) { ?>
                                                    <p class="success_msg mt-5 mb-5" style="width: 40%"><?php echo $_GET['success_upd_cred']; ?></p>
                                                <?php } ?>
                                            </center>
                                            <table class="table table-condensed table-bordered  table-hover">
                                                <tbody>
                                                    <tr class="table-dark">
                                                        <th>TYPE</th>
                                                        <th>STORED</th>
                                                    </tr>
                                                    <?php
                                                        include "../db_conn.php";
                                                        $sql = "SELECT * FROM student_pri_info_tbl WHERE student_id = '$student_id'";
                                                        $result = $conn->query($sql);
                                                          if($result->num_rows > 0) {
                                                            while ($row=$result->fetch_assoc()) {
                                                    ?>
                                                    <tr class="table-active">
                                                        <th colspan="2">PRIMARY INFORMATION :</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Full Name</th>
                                                        <td><?php echo $row['mname'].", ".$row['fname']." ".$row['lname']." ".$row['sname'];?></td>
                                                    </tr>
                                                    <tr class="table-active">
                                                        <th colspan="2">PERMANENT ADDRESS :</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Province</th>
                                                        <td><?php echo $row['province'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>City/Municipality</th>
                                                        <td><?php echo $row['city'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Barangay</th>
                                                        <td><?php echo $row['barangay'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>House Number</th>
                                                        <td><?php echo $row['house_num'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Zip Code</th>
                                                        <td><?php echo $row['zip_code'];?></td>
                                                    </tr>
                                                    <?php
                                                            }
                                                        }

                                                        else {
                                                            echo "<tr><td colspan='2'><h1 class='error_msg'>Primary Information Unavailable</h1></td></tr>";
                                                        }
                                                    ?>
                                                    <?php
                                                        include "../db_conn.php";
                                                        $sql = "SELECT * FROM student_basic_info_tbl WHERE student_id = '$student_id'";
                                                        $result = $conn->query($sql);
                                                          if($result->num_rows > 0) {
                                                            while ($row=$result->fetch_assoc()) {
                                                    ?>
                                                    <tr class="table-active">
                                                        <th colspan="2">BASIC INFORMATION :</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Birthdate</th>
                                                        <td><?php echo $row['bdate'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nationality</th>
                                                        <td><?php echo $row['nationality'];?></td>
                                                    </tr>
                                                    <tr class="table-active">
                                                        <th colspan="2">BIRTH PLACE :</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Province</th>
                                                        <td><?php echo $row['birth_province'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>City/Municipality</th>
                                                        <td><?php echo $row['birth_city'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Barangay</th>
                                                        <td><?php echo $row['birth_barangay'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>House Number</th>
                                                        <td><?php echo $row['birth_house_num'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Zip Code</th>
                                                        <td><?php echo $row['birth_zip_code'];?></td>
                                                    </tr>
                                                    <tr class="table-active">
                                                        <th colspan="2">CONTACT & OTHER INFO :</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Email Address</th>
                                                        <td><?php echo $row['email'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Contact Number</th>
                                                        <td><?php echo $row['contact_num'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Sex</th>
                                                        <td><?php echo $row['gender'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Religion</th>
                                                        <td><?php echo $row['religion'];?></td>
                                                    </tr>
                                                    <?php
                                                            }
                                                        }

                                                        else {
                                                            echo "<tr><td colspan='2'><h1 class='error_msg'>Basic Information Unavailable</h1></td></tr>";
                                                        }
                                                    ?>
                                                    <?php
                                                        include "../db_conn.php";
                                                        $sql = "SELECT * FROM student_fam_info_tbl WHERE student_id = '$student_id'";
                                                        $result = $conn->query($sql);
                                                          if($result->num_rows > 0) {
                                                            while ($row=$result->fetch_assoc()) {
                                                    ?>
                                                    <tr class="table-active">
                                                        <th colspan="2">FATHER'S INFORMATION :</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Father's Name</th>
                                                        <td><?php echo $row['father_lname'].", ".$row['father_fname']." ".$row['father_mname']." ".$row['father_sname'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Contact Number</th>
                                                        <td><?php echo $row['father_contact'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Occupation</th>
                                                        <td><?php echo $row['father_occupation'];?></td>
                                                    </tr>
                                                    <tr class="table-active">
                                                        <th colspan="2">MOTHER'S INFORMATION :</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Mother's Name</th>
                                                        <td><?php echo $row['mother_lname'].", ".$row['mother_fname']." ".$row['mother_mname'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Contact Number</th>
                                                        <td><?php echo $row['mother_contact'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Occupation</th>
                                                        <td><?php echo $row['mother_occupation'];?></td>
                                                    </tr>
                                                    <?php
                                                            }
                                                        }

                                                        else {
                                                            echo "<tr><td colspan='2'><h1 class='error_msg'>Family Information Unavailable</h1></td></tr>";
                                                        }
                                                    ?>
                                                    <?php
                                                        include "../db_conn.php";
                                                        $sql = "SELECT * FROM student_guardian_info_tbl WHERE student_id = '$student_id'";
                                                        $result = $conn->query($sql);
                                                          if($result->num_rows > 0) {
                                                            while ($row=$result->fetch_assoc()) {
                                                    ?>
                                                    <tr class="table-active">
                                                        <th colspan="2">GUARDIAN'S INFORMATION :</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Name</th>
                                                        <td><?php echo $row['guardian_lname'].", ".$row['guardian_fname']." ".$row['guardian_mname']." ".$row['guardian_sname'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Contact Number</th>
                                                        <td><?php echo $row['guardian_contact'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Occupation</th>
                                                        <td><?php echo $row['guardian_occupation'];?></td>
                                                    </tr>
                                                    <?php
                                                            }
                                                        }

                                                        else {
                                                            echo "<tr><td colspan='2'><h1 class='error_msg'>Guardian Information Unavailable</h1></td></tr>";
                                                        }
                                                    ?>
                                                </tbody>
                                                <tbody id="tbody_acad_info">
                                                    <?php
                                                        include "../db_conn.php";
                                                        $sql = "SELECT * FROM student_acad_info_tbl WHERE student_id = '$student_id'";
                                                        $result = $conn->query($sql);
                                                          if($result->num_rows > 0) {
                                                            while ($row=$result->fetch_assoc()) {
                                                    ?>
                                                    <tr class="table-active">
                                                        <th colspan="2">ACADEMIC INFORMATION :</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Course Enrolled</th>
                                                        <td><?php echo $row['course'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Second Choice of Course</th>
                                                        <td><?php echo $row['second_course'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Graduated Senior High School</th>
                                                        <td><?php echo $row['graduated_shs'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Graduated Elementary School</th>
                                                        <td><?php echo $row['graduated_es'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Year Graduated Elementary School</th>
                                                        <td><?php echo $row['graduated_year_es'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Strand</th>
                                                        <td><?php echo $row['strand'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Learners Reference Number</th>
                                                        <td><?php echo $row['learners_ref_num'];?></td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <th>Form 138 GWA</th>
                                                        <td><?php echo $row['form_138'];?></td>
                                                    </tr>
                                                    <?php
                                                            }
                                                        }

                                                        else {
                                                            echo "<tr><td colspan='2'><h1 class='error_msg'>Academic Information Unavailable</h1></td></tr>";
                                                        }
                                                    ?>
                                                </tbody>
                                                <tbody id="tbody_acad_info_transferee">
                                                    <?php
                                                        include "../db_conn.php";
                                                        $sql = "SELECT * FROM student_acad_info_transferee_tbl WHERE student_id = '$student_id'";
                                                        $result = $conn->query($sql);
                                                          if($result->num_rows > 0) {
                                                            while ($row=$result->fetch_assoc()) {
                                                    ?>
                                                    <tr class="table-active">
                                                        <th colspan="2">ACADEMIC INFORMATION :</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Present Course</th>
                                                        <td><?php echo $row['present_course'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Transfered From</th>
                                                        <td><?php echo $row['transfered_from'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Cecond Course</th>
                                                        <td><?php echo $row['second_course'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Graduated Elementary School</th>
                                                        <td><?php echo $row['graduated_es'];?></td>
                                                    </tr><tr>
                                                        <th>Graduated Year Elementary School</th>
                                                        <td><?php echo $row['graduated_year_es'];?></td>
                                                    </tr>
                                                    <?php
                                                            }
                                                        }

                                                        else {
                                                            echo "<tr><td colspan='2'><h1 class='error_msg'>Academic Information Unavailable</h1></td></tr>";
                                                        }
                                                    ?>
                                                </tbody>
                                                <tbody>
                                                    <form action="../php/profilePHP.php" method="POST" id="upd_student_cred_form">
                                                        <tr class="table-active">
                                                            <th>Password</th>
                                                            <th>Confirm Password</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 50%">
                                                                <input type="hidden" name="student_id" value="<?php echo $_SESSION['student_id'];?>">
                                                                <div class="control-form">
                                                                    <input type="password" class="form-control" id="password" name="password">
                                                                    <small></small>
                                                                </div>
                                                            </td>
                                                            <td style="width: 50%">
                                                                <div class="control-form">
                                                                    <input type="password" class="form-control" id="confirmPass" name="confirmPass">
                                                                    <small></small>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">
                                                                <input type="submit" class="btn btn-success" name="change_passBtn" value="Confirm">
                                                            </td>
                                                        </tr>
                                                    </form>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="reg_content">
                            <h4>Fill up forms for limited face to face class</h4>
                            <div class="d-grid gap-2 d-md-block">
                                <a class="btn btn-primary" href="health_declaration_form.php" role="button">Health Declaration Form</a>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="reg_content">
                                    <h2>Requirements</h2>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <!-- cancel reservation modal-->
                                                <div class="modal" id="send_modal">
                                                    <div class="modalBox">
                                                        <div class="modal_header">
                                                            <span class="close" id="close_modalReq">&times;</span>
                                                            <h4>Submit Requirements</h4>
                                                        </div>
                                                        <div class="modal_body">
                                                            <form action="../php/submit_requirementsPHP.php" method="POST" enctype="multipart/form-data">
                                                                <input type="hidden" name="student_id" id="student_id" value="<?php echo $_SESSION['student_id'];?>">
                                                                <input type="hidden" id="file_name" name="file_name">
                                                                <div class="alert alert-warning" role="alert">
                                                                   In accordance with your choice, submit your requirement.
                                                                </div>
                                                                <h3 class="mt-4 mb-3">File Name: <span id="txt_fileName"></span></h3>
                                                                <div class="input-group">
                                                                    <input type="file" class="form-control form-control-sm" name="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" required>
                                                                    <span class="input-group-text"><span class="required_sign">*</span></span>
                                                                </div>
                                                                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                                                                    <button class="greenBtn" name="send_reqBtn" type="submit">Submit Requirement</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- / cancel reservation modal -->
                                                
                                                <?php
                                                    // $sql_requirements = mysqli_query($conn, "SELECT
                                                    //                     student_pri_info_tbl.*,

                                                    //                     student_requirement_tbl.*
                                                                        
                                                    //                     FROM student_pri_info_tbl

                                                    //                     RIGHT JOIN student_requirement_tbl ON student_pri_info_tbl.student_id = student_requirement_tbl.student_id

                                                    //                     WHERE student_requirement_tbl.student_id = '$student_id'");

                                                    // $sql_requirements = mysqli_query($conn, "SELECT
                                                    //                      student_pri_info_tbl.*,

                                                    //                      student_requirement_tbl.*
                                                                        
                                                    //                      FROM student_pri_info_tbl

                                                    //                      LEFT JOIN student_requirement_tbl ON student_pri_info_tbl.student_id = student_requirement_tbl.student_id

                                                    //                      WHERE student_pri_info_tbl.student_id = '$student_id'");


                                                    // while ($row = mysqli_fetch_assoc($sql_requirements)) {
                                                    //     $fileName = $row['file_name'];
                                                    //     $fileStatus = $row['status'];

                                                    //     $test_array = array($fileName => $fileStatus);

                                                    //     foreach ($test_array as $key => $value) {

                                                    //         if ($key == "FORM 137" && $value == "Pending") {
                                                    //             echo "FORM 137 Pending<br>";
                                                    //             if ($key == "FORM 137" && $value == "") {
                                                    //                 echo "FORM 137 Missing<br>";
                                                    //             }
                                                    //         }

                                                    //         if ($key == "FORM 138" && $value == "Pending") {
                                                    //             echo "FORM 138 Pending<br>";
                                                    //             if ($key == "FORM 138" && $value != "Pending") {
                                                    //                 echo "FORM 137 Missing<br>";
                                                    //             }
                                                    //         }
                                                    //     }
                                                    // }
                                                ?>
                                                <table class="table table-sm table-hover" id="requirements_tbl">
                                                    <tbody id="regular_grad_requirements" style="display: none">
                                                        <tr>
                                                            <td class="col">FORM 137</td>
                                                            <td>
                                                                <?php

                                                                ?>
                                                            </td>
                                                            <td class="col"><input type="submit" value="Upload" id="upload_reqBtn" data-modal="send_modal" class="btn btn-primary btn-sm"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="col">FORM 138</td>
                                                            <td>
                                                                <?php

                                                                ?>
                                                            </td>
                                                            <td class="col"><input type="submit" value="Upload" id="upload_reqBtn" data-modal="send_modal" class="btn btn-primary btn-sm"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="col">Good Moral Certification</td>
                                                            <td class="col"><input type="submit" value="Upload" id="upload_reqBtn" data-modal="send_modal" class="btn btn-primary btn-sm"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="col">Updated Evaluation form</td>
                                                            <td class="col"><input type="submit" value="Upload" id="upload_reqBtn" data-modal="send_modal" class="btn btn-primary btn-sm"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="col">Application for Graduation</td>
                                                            <td class="col"><input type="submit" value="Upload" id="upload_reqBtn" data-modal="send_modal" class="btn btn-primary btn-sm"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="col">2 Picture (Passport Size with Name)</td>
                                                            <td class="col"><input type="submit" value="Upload" id="upload_reqBtn" data-modal="send_modal" class="btn btn-primary btn-sm"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="col">Barangay Clearance</td>
                                                            <td class="col"><input type="submit" value="Upload" id="upload_reqBtn" data-modal="send_modal" class="btn btn-primary btn-sm"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="col">Birth Certificate (NSO/PSA)</td>
                                                            <td class="col"><input type="submit" value="Upload" id="upload_reqBtn" data-modal="send_modal" class="btn btn-primary btn-sm"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="col">Capstone 1 & Capstone 2 Certificate</td>
                                                            <td class="col"><input type="submit" value="Upload" id="upload_reqBtn" data-modal="send_modal" class="btn btn-primary btn-sm"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="col">Medical Certificate</td>
                                                            <td class="col"><input type="submit" value="Upload" id="upload_reqBtn" data-modal="send_modal" class="btn btn-primary btn-sm"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
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
                                        <!-- <a href="https://mis.ucu.edu.ph" target="_blank"><p>UCU-MIS+ 2022</p></a> -->
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
  header("Location: ../login.php");
  exit();
}

?>