<?php
session_start();

if (isset($_SESSION['std_student_id']) && isset($_SESSION['std_id_number']) && isset($_SESSION['std_fname']) && isset($_SESSION['std_mname']) && isset($_SESSION['std_lname']) && isset($_SESSION['std_yr_lvl']) && isset($_SESSION['std_eval_status'])) {
    include '../db_conn.php';
    date_default_timezone_set('Asia/Manila');
    $current_time = date("Y-m-d");
    $date_time = strtotime($current_time);

    $student_id = $_SESSION['std_student_id'];
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
    <title>Certificate of Consent | CITE</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.2.2/swiper-bundle.css"
        integrity="sha512-VbPb+KrNIjcE5nM/Y+ZBvKvQF7+B/alQCQLPdIUAP3KsmDWkv0EdiyX4gfTwtJ3Sfais/nGJ0whTxjSwhQ1C8g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Jquery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- body -->

<body>
    <div class="header_pages">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="logo1"><a href="../index.php"><img src="../images/cite_logo_title.png"></a></div>
                    </div>
                    <div class="col-md-6">
                        <div class="logo2"><a href="https://ucu.edu.ph" target="_blank"><img
                                    src="../images/ucu_logo.png"></a></div>
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
                        <button style="background: #8c8c8c;" class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="caret" style="color: white;">☰</span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav md-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="../index.php">HOME<span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="news_and_events.php">NEWS & EVENTS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">ABOUT</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="faculty.php">FACULTY</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown">ACADEMICS</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown"
                                        style="right: auto; left: auto;">
                                        <a class="dropdown-item" href="#">BSIT</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">BLIS</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="admission.php">ADMISSION</a>
                                </li>
                                <li id="nav-last" class="nav-item last"><a class="nav-link dropdown-toggle" href="#"
                                        id="navbarDropdown" role="button" data-toggle="dropdown"><?php echo $_SESSION['std_fname'];?></a>
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
    <form action="../php/health_declaration_formPHP.php" method="POST" id="cert_consent" enctype="multipart/form-data">
        <center>
            <?php if (isset($_GET['error_msg'])) { ?>
                <p class="error_msg mt-5 mb-0" style="width: 40%"><?php echo $_GET['error_msg']; ?></p>
            <?php } ?>
            <?php if (isset($_GET['success_msg'])) { ?>
                <p class="success_msg mt-5 mb-0" style="width: 40%"><?php echo $_GET['success_msg']; ?></p>
            <?php } ?>
        </center>
        <div class="cert_consent_cont mt-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="cert_consent_header">
                            <img src="../images/ucu_logo.png">
                            <div class="com_undertake_title">
                                <h1>URDANETA CITY UNIVERSITY</h1>
                                <h3>COLLEGE OF INFORMATION AND TECHNOLOGY EDUCATION</h3>
                                <h2>CERTIFICATE OF CONSENT</h2>
                            </div>
                            <img src="../images/cite_logo.png">
                        </div>
                        <p>&emsp;&emsp;&emsp;I, <strong><u><?php echo $_SESSION['std_lname'].", ".$_SESSION['std_fname']." ".$_SESSION['std_mname']." ".$_SESSION['std_sname']?></u></strong>,
                            a Filipino citizen, of legal age, and resident of
                            <strong><u><?php echo $_SESSION['std_house_num']." ".$_SESSION['std_barangay'].", ".$_SESSION['std_city']." ".$_SESSION['std_province']?></u></strong>, hereby, declare that:
                        </p>
                        <div class="cert_content_section">
                            <ol>
                                <li>
                                    I understand that the Urdaneta City University, College of Information and
                                    Technology
                                    Education is conducting the limited face-to-face classes for A.Y. 2022-2023.
                                </li>
                                <li>
                                    I am participating in the limited face-to-face classes as: <br>
                                    <input type="radio" name="participation" id="reg_student" value="Regular Student" required>
                                    <label for="reg_student">Regular Student</label> <br>
                                    <input type="radio" name="participation" id="cross_student"
                                        value="Cross Enrollee Student" required>
                                    <label for="cross_student">Cross Enrollee Student</label><br>
                                </li>
                                <li>
                                    I am fully aware of continuing existence of the Corona Virus Disease (Covid-19) and
                                    its
                                    potentials health threats/risk.
                                </li>
                                <li>
                                    I understand that all known precaution and health safety protocol, in accordance
                                    with
                                    the omnibus guidelines of the Inter-Agency task force (IATF) for the management of
                                    emerging infectious diseases, to ensure my safety are taken/instituted by the
                                    University
                                    and College for the conduct of the limited face-to-face classes.
                                </li>
                                <li>
                                    I understand that it is my responsibility to comply with the required precautionary
                                    measure such as, but not limited to, submission of a duly and truthfully
                                    accomplished
                                    health declaration form, wearing of face mask and face shield, hand sanitizing as
                                    often
                                    as possible, physical distancing, and observance of the RT-PCR Testing and
                                    Quarantine
                                    Protocol as may be applicable in my case.
                                </li>
                                <li>
                                    I understand that, despite taking all known precautions and health safety protocols,
                                    exposure to COVID-19 is an ever-present risk for which my absolute safety or
                                    protection
                                    from potential contracting of the virus in the conduct of the limited face-to-face
                                    classes is not and cannot be guaranteed.
                                </li>
                        </div>
                        <p>With my fully knowledge and understanding of the above declaration, I hereby wholly give my
                            consent and confirm my participation on my own free will and volition in the conduct of the
                            limited face-to-face classes for A.Y. 2022-2023.</p>
                        <p>According, I set UCU-CITE entirely free from any liability or responsibility if I contract
                            covid-19 During the period of the limited face-to-face classes.</p>

                        <div class="sig_name_cont">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="cert_content_confirmation">
                                            <input class="custom_upload" type="file" name="student_sig" id="upload_signature" required>
                                            <div class="health_df_input">
                                                <input type="text" id="sig_name_student" name="sig_name_student" value="<?php echo strtoupper($_SESSION['std_fname']." ".$_SESSION['std_mname'][0].". ".$_SESSION['std_lname']." ".$_SESSION['std_sname']);?>" readonly>
                                            </div>
                                            <h4>Signature over printed name full name of Student</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="cert_content_confirmation">
                                            <div class="health_df_input mt-5">
                                                <input type="date" id="sig_name_student_date"
                                                    name="sig_name_student_date" value="<?php echo $current_time;?>" readonly>
                                            </div>
                                            <h4>Date</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sig_name_cont">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="cert_content_confirmation">
                                            <input class="custom_upload" type="file" name="witness_sig" id="upload_signature" required>
                                            <?php
                                                $sql = "SELECT * FROM student_guardian_info_tbl WHERE student_id = '$student_id'";

                                                $sql_result = $conn->query($sql);
                                                if($sql_result->num_rows > 0) {
                                                    while ($row=$sql_result->fetch_assoc()) {
                                            ?>
                                            <div class="health_df_input">
                                                <input type="text" id="sig_name_witness" name="sig_name_witness" value="<?php echo strtoupper($row['guardian_fname']." ".$row['guardian_mname'][0].". ".$row['guardian_lname']." ".$row['guardian_sname']);?>" readonly>
                                            </div>
                                            <?php
                                                    }
                                                }
                                                else {
                                                    echo "<p class='error_msg'>Guardian information unavailable</p>";
                                                }
                                            ?>
                                            <h4>Signature over printed name full name of witness</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="cert_content_confirmation">
                                            <div class="health_df_input mt-5">
                                                <input type="date" id="sig_name_witness_date"
                                                    name="sig_name_witness_date" value="<?php echo $current_time;?>" readonly>
                                            </div>
                                            <h4>Date</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                            <input type="hidden" name="student_id" value="<?php echo $_SESSION['std_student_id'];?>">
                            <button class="btn btn-secondary me-md-2" type="submit" id="cert_consent_btn" name="cert_consent_btn">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--End Content Section ------------------------------->
    <!--Start Footer Section ------------------------------->
    <div class="footer">
        <div class="footer_container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="map_icon">
                            <a href="../index.php"><img src="../images/cite_logo.png"></a>
                            <a href="https://ucu.edu.ph" target="_blank"><img src="../images/ucu_mis_logo.png"></a>
                            <h4>Contact Us:</h4>
                            <h5><i class="bi bi-geo-alt"></i>1 San Vicente West Urdaneta City Pangasinan 2428</h5>
                            <h5><i class="bi bi-telephone"></i>(075) 204-9020</h5>
                            <h5><i class="bi bi-envelope"></i>cite@ucu.edu.ph</h5>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="map_icon">
                            <h2>Quick Links</h2>
                            <ul>
                                <li><a href="#">Announcements</a></li>
                                <li><a href="news_and_events.php">News and Events</a></li>
                                <li><a href="about.php">About</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="map_icon">
                            <h2>Follow UCU</h2>
                            <a href="https://www.facebook.com/UCUOfficial" target="_blank"><i class="fab fa-facebook-f">
                                </i></a>
                            <a href="https://www.youtube.com/c/UcuEduPhOfficial" target="_blank"><i
                                    style="padding-right: 25px;" class="fab fa-youtube"> </i></a>
                            <a href="https://www.instagram.com/ucuofficial/" target="_blank"><i
                                    class="fab fa-instagram"> </i></a>
                            <a href="https://mis.ucu.edu.ph" target="_blank">
                                <p>UCU-MIS+ 2022</p>
                            </a>
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
                    <p class="copyright_text">© 2022 All Rights Reserved. College of Information and Technology
                        Education</p>
                </div>
            </div>
        </div>
    </div>
    <!--End Copyright Section ------------------------------>
    <!-- Javascript files----------------------------------->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.2.2/swiper-bundle.min.js">
    </script>
    <script type="text/javascript" src="js/card-slider.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script>
    document.getElementById("open-popup-btn").addEventListener("click", function() {
        document.getElementsByClassName("popup")[0].classList.add("active");
    });

    document.getElementById("dismiss-popup-btn").addEventListener("click", function() {
        document.getElementsByClassName("popup")[0].classList.remove("active");
    });
    </script>
</body>

</html>
<?php
} 
else {
  header("Location: ../login.php");
  exit();
}

?>