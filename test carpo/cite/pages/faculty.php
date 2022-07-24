<?php
session_start();

if (isset($_SESSION['student_id']) && isset($_SESSION['id_number']) && isset($_SESSION['fname']) && isset($_SESSION['mname']) && isset($_SESSION['lname']) && isset($_SESSION['yr_lvl']) && isset($_SESSION['eval_status'])) {
  include '../db_conn.php';
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
        <title>Faculty | CITE</title>
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
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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
                                                    <a style="font-weight: 600;" class="nav-link" href="#">FACULTY</a></li>
                                                    <li class="nav-item">
                                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">ACADEMICS</a>
                                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="right: auto; left: auto;">
                                                        <a class="dropdown-item" href="acad_bsit.php">BSIT</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">BLIS</a>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item">
                                                    <a class="nav-link" href="admission.php">ADMISSION</a></li>
                                                    <li id="nav" class="nav-item last"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"><?php echo $_SESSION['fname'];?></a>
                                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="right: auto; left: auto;">
                                                        <a class="dropdown-item" href="profile.php"><!-- <img src="images/xiao.png"> -->Profile Settings</a>
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
                    <!--Start Banner Section ------------------------------>
                    <div class="banner_news_events">
                        <div class="titlepage-h1-news_events">
                            <h1 class="bnner_title_news_events">Faculty</h1>
                        </div>
                    </div>
                    <!--End Banner Section -------------------------------->
                    <!--Start Content Section ----------------------------->
                    <div class="service_main">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="container_faculty">
                                        <div class="timeline">
                                            <ul>
                                                <?php
                                                    include "../db_conn.php";
                                                    $sql = "SELECT * FROM faculty_tbl";
                                                    $result = $conn->query($sql);
                                                      if($result->num_rows > 0) {
                                                        while ($row=$result->fetch_assoc()) {
                                                ?>
                                                <li>
                                                    <div class="timeline-content">
                                                        <h3 class="date"><?php echo $row['position'];?></h3>
                                                        <h1 data-aos="fade-right" data-aos-duration="2000"><?php echo $row['fname'].' '.$row['lname'];?></h1>
                                                        <img data-aos="fade-left" data-aos-duration="1000" src="../../admin/php/faculties/<?php echo $row['profile_pic'];?>">
                                                        <p><?php echo $row['subjects'];?></p>
                                                    </div>
                                                </li>
                                                <?php
                                                        }
                                                    }

                                                    else {
                                                        echo "<center><h1 class='error_msg'>Compose Error</h1></center>";
                                                    }
                                                ?>
                                                <!-- <li>
                                                    <div class="timeline-content">
                                                        <h3 class="date">Internship/Practicum Coordinator</h3>
                                                        <h1 data-aos="fade-right" data-aos-duration="2000" >Dionnel M. Caguin</h1>
                                                        <img data-aos="fade-left" data-aos-duration="1000" data-aos="fade-up" src="../images/faculty_members/sir_dionnel.png">
                                                        <p>Subjects:</p>
                                                    </div>
                                                </li> -->
                                            </ul>
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
                        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
                        <script>
                        AOS.init();
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