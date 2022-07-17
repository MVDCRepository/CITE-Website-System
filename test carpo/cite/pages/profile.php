<?php
session_start();

if (isset($_SESSION['student_id']) && isset($_SESSION['id_number']) && isset($_SESSION['fname']) && isset($_SESSION['mname']) && isset($_SESSION['lname']) && isset($_SESSION['yr_lvl']) && isset($_SESSION['eval_status']) && isset($_SESSION['status'])) {
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
                            <div class="col-md-6">
                                <div class="profile_left_section text-center">
                                    <!-- <img src="../images/xiao.png"> -->
                                    <h2><?php echo $_SESSION['lname']." ,".$_SESSION['fname'];?></h2>
                                    <p>Bachelor of Science in Information Technology <br> <?php echo $_SESSION['yr_lvl']." Year";?></p>
                                </div>

                                <div class="profile_left_section">
                                    <h2 class="text-center">Requirements</h2>
                                    <p hidden id="student_status"><?php echo $_SESSION['status'];?></p>
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
                                                <div class="alert alert-warning text-center mb-3 mt-3">
                                                    <h5 class="alert-heading">Note!</h5>
                                                    Rename your files according to the requirements, else it will be rejected.
                                                </div>

                                                <form action="../php/profilePHP.php" method="POST" enctype="multipart/form-data" class="no-display" id="grad_requirements">
                                                    <div>
                                                        <p>FORM 137</p>
                                                        <p>FORM 138</p>
                                                        <p>Good Moral Certification</p>
                                                        <p>Updated Evaluation form</p>
                                                        <p>Application for Graduation</p>
                                                        <p>2 Picture (Passport Size with Name)</p>
                                                        <p>Barangay Clearance</p>
                                                        <p>Birth Certificate (NSO/PSA)</p>
                                                        <p>Capstone 1 & Capstone 2 Certificate</p>
                                                        <p>Medical Certificate</p>
                                                        
                                                        <input type="hidden" name="student_id" value="<?php echo $student_id;?>">
                                                        <input type="file" name="file[]" id="file" class="custom_upload" accept="image/png, image/gif, image/jpeg" multiple required>
                                                    </div>

                                                    <input type="submit" name="submit_reqBtn" value="Submit" class="btn btn-success float-right">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="profile_left_section" id="requirement_container">
                                    <h2 class="text-center">Submitted Requirements</h2>
                                    <?php
                                        $sql = "SELECT * FROM student_requirement_tbl WHERE student_id = '$student_id'";
                                        $result = $conn->query($sql);
                                          if($result->num_rows > 0) {
                                            while ($row=$result->fetch_assoc()) {
                                    ?>
                                    <p><?php echo $row['file_name'];?>
                                        <span class="upload_status">
                                            <?php
                                                if ($row['status'] == "Confirmed") {
                                                    echo "<span class='upload_status_green'>".$row['status']."</span>";
                                                }
                                                else {
                                                    echo "<span class='upload_status_red'>".$row['status']."</span>";
                                                }
                                            ?>
                                        </span>
                                    </p>
                                    <?php
                                            }
                                        }
                                        else {
                                            echo "<script>document.getElementById('requirement_container').style.display = 'none';</script>";
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="profile_right_section">
                                    <?php
                                        $sql = "SELECT * FROM student_tbl WHERE student_id = '$student_id'";
                                        $result = $conn->query($sql);
                                          if($result->num_rows > 0) {
                                            while ($row=$result->fetch_assoc()) {
                                    ?>
                                    <table class="table table-striped table-responsive-md">
                                        <thead>
                                            <th colspan="3">Student Information</th>
                                        </thead>
                                        <tr>
                                            <td>Full Name:</td>
                                            <td colspan="2"><span><?php echo $row['lname']." ,".$row['fname']." ".$row['mname'];?></span></td>
                                        </tr>
                                        <tr>
                                            <td>ID Number:</td>
                                            <td colspan="2"><span><?php echo $row['id_number'];?></span></td>
                                        </tr>
                                        <tr>
                                            <td>Gender:</td>
                                            <td colspan="2"><span><?php echo $row['gender'];?></span></td>
                                        </tr>
                                        <tr>
                                            <td>Birthdate:</td>
                                            <td colspan="2"><span><?php echo $row['b_date'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Current Address:</td>
                                            <td colspan="2"><span><?php echo $row['address'];?></span></td>
                                        </tr>
                                        <tr>
                                            <td>Email:</td>
                                            <td colspan="2"><span><?php echo $row['email'];?></span></td>
                                        </tr>
                                        <tr>
                                            <td>Number:</td>
                                            <td colspan="2"><span><?php echo $row['phoneNum'];?></span></td>
                                        </tr>
                                        <tr>
                                            <td>Guardian's Name:</td>
                                            <td colspan="2"><span><?php echo $row['guardian_name'];?></span></td>
                                        </tr>
                                        <tr>
                                            <td>Guardian's Contact:</td>
                                            <td colspan="2"><span><?php echo $row['guardian_contact'];?></span></td>
                                        </tr>
                                    </table>
                                    <?php
                                            }
                                        }
                                        else {
                                            echo "<center><h1 class='error_msg'>Information unavailable</h1></center>";
                                        }
                                    ?>

                                    <form action="../php/profilePHP.php" method="POST" id="upd_student_cred_form">
                                        <?php
                                        $sql = "SELECT * FROM student_tbl WHERE student_id = '$student_id'";
                                        $result = $conn->query($sql);
                                          if($result->num_rows > 0) {
                                            while ($row=$result->fetch_assoc()) {
                                    ?>
                                        <input type="hidden" name="student_id" value="<?php echo $_SESSION['student_id'];?>">
                                        <table class="table table-striped table-responsive-md">
                                            <thead>
                                                <th colspan="3">
                                                    Student's Account Information
                                                    <center>
                                                        <?php if (isset($_GET['error_msg'])) { ?>
                                                          <p class="error_msg mt-3 mb-2"><?php echo $_GET['error_msg'];?></p>
                                                        <?php } ?>
                                                        <?php if (isset($_GET['success_upd_cred'])) { ?>
                                                          <p class="success_msg mt-3 mb-2"><?php echo $_GET['success_upd_cred']; ?></p>
                                                        <?php } ?>
                                                    </center>
                                                </th>
                                            </thead>
                                            <tr>
                                                <td>Username:</td>
                                                <td colspan="2"><span><?php echo $row['id_number'];?></span></td>
                                            </tr>
                                            <tr>
                                                <td>Password:</td>
                                                <td colspan="2"><span><?php echo $row['password'];?></span></td>
                                            </tr>
                                                <tr>
                                                    <td>Change Password:</td>
                                                    <td colspan="2">
                                                        <div class="control-form">
                                                            <input type="password" class="form-control" placeholder="Enter Password" name="password" id="password" required>
                                                            <small>error</small>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Confirm New Password:</td>
                                                    <td colspan="2">
                                                        <div class="control-form">
                                                            <input type="password" class="form-control" placeholder="Confirm New Password" name="confirmPass" id="confirmPass" required>
                                                            <small>error</small>
                                                        </div>
                                                    </td>
                                                </tr>
                                        </table>
                                        <?php
                                                }
                                            }
                                            else {
                                                echo "<center><h1 class='error_msg'>Credential unavailable</h1></center>";
                                            }
                                        ?>
                                        <input type="submit" name="change_passBtn" value="Confirm Changes" class="btn btn-success">
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
  header("Location: ../login.php");
  exit();
}

?>