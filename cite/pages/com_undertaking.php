<?php
session_start();

if (isset($_SESSION['std_student_id']) && isset($_SESSION['std_id_number']) && isset($_SESSION['std_fname']) && isset($_SESSION['std_mname']) && isset($_SESSION['std_lname']) && isset($_SESSION['std_yr_lvl']) && isset($_SESSION['std_eval_status'])) {
    include '../db_conn.php';
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
    <title>Commitment of Undertaking | CITE</title>
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
    <form action="../php/health_declaration_formPHP.php" method="POST" enctype="multipart/form-data">
        <center>
            <?php if (isset($_GET['error_msg'])) { ?>
                <p class="error_msg mt-5" style="width: 40%"><?php echo $_GET['error_msg']; ?></p>
            <?php } ?>
            <?php if (isset($_GET['success_msg'])) { ?>
                <p class="success_msg mt-5" style="width: 40%"><?php echo $_GET['success_msg']; ?></p>
            <?php } ?>
        </center>
        <div class="com_undertake_cont mt-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="com_undertake_header">
                            <img src="../images/ucu_logo.png">
                            <div class="com_undertake_title">
                                <h1>URDANETA CITY UNIVERSITY</h1>
                                <h3>COLLEGE OF INFORMATION AND TECHNOLOGY EDUCATION</h3>
                                <h2>COMMITMENT OF UNDERTAKING</h2>
                            </div>
                            <img src="../images/cite_logo.png">
                        </div>
                        <p>&emsp;&emsp;&emsp;I, <strong><u><?php echo $_SESSION['std_lname'].", ".$_SESSION["std_fname"]." ".$_SESSION["std_mname"]." ".$_SESSION['std_sname'];?></u></strong>, a Filipino citizen, of legal age, and resident of
                            <strong><u><?php echo $_SESSION['std_house_num']." ".$_SESSION['std_barangay'].", ".$_SESSION['std_city'].", ".$_SESSION['std_province'];?></u></strong>, hereby, declare that I fully understand,
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
                        <div class="com_undertake_confirmation">
                            <input type="hidden" name="student_id" value="<?php echo $_SESSION['std_student_id'];?>">
                            <input class="custom_upload" type="file" name="upload_signature" id="upload_signature">
                            <div class="custom_breakline"></div>
                            <h4>Signature</h4>
                            <div class="d-grid gap-2 col-6 mx-auto mb-3">
                                <button class="btn btn-secondary me-md-2" type="submit" id="commitment_undertaking_btn" name="commitment_undertaking_btn">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--End Content Section ------------------------------->
    <!--start footer Section --------------------------------->
    <?php include 'footer.php';?>
    <!--End footer Section --------------------------------->
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
    <!-- <script>
    document.getElementById("open-popup-btn").addEventListener("click", function() {
        document.getElementsByClassName("popup")[0].classList.add("active");
    });

    document.getElementById("dismiss-popup-btn").addEventListener("click", function() {
        document.getElementsByClassName("popup")[0].classList.remove("active");
    });
    </script> -->
</body>
</html>
<?php
} 
else {
  header("Location: ../login.php");
  exit();
}

?>