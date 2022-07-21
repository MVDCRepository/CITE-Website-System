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
        <title>College of Information and Technology Education</title>
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
        <!-- fevicon -->
        <link rel="icon" href="images/fevicon.png" type="image/gif" />
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
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
            rel="stylesheet"
            />
            <!-- Swiper -->
            <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.2.2/swiper-bundle.css" integrity="sha512-VbPb+KrNIjcE5nM/Y+ZBvKvQF7+B/alQCQLPdIUAP3KsmDWkv0EdiyX4gfTwtJ3Sfais/nGJ0whTxjSwhQ1C8g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
        </head>
        <!-- body -->
        <body>
            <div class="header_main">
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
                                        <a style="font-weight: 600;" class="nav-link" href="#">HOME<span class="sr-only">(current)</span></a> </li>
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
                        <!--banner start -->
                        <div class="banner-main">
                            <div class="container">
                                <div id="main_slider" class="carousel slide" data-ride="carousel">
                                    <!-- The slideshow -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="titlepage-h1">
                                                <h1 class="bnner_title">Welcome To<br>
                                                <span>COLLEGE OF INFORMATION AND TECHNOLOGY EDUCATION</span></h1>
                                                <p class="long_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed molestie leo. Vivamus nec elit lacus. </p>
                                            </div>
                                            <div class="btn_main">
                                                <button type="button" class="btn btn-dark btn-lg"><a href="contact.html">Contact</a></button>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="titlepage-h1">
                                                <h1 class="bnner_title">Welcome To<br>
                                                <span>COLLEGE OF INFORMATION AND TECHNOLOGY EDUCATION</span></h1>
                                                <p class="long_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed molestie leo. Vivamus nec elit lacus. </p>
                                            </div>
                                            <div class="btn_main">
                                                <button type="button" class="btn btn-dark btn-lg">Contact</button>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                                        <i class="fa fa-angle-left"></i>
                                    </a>
                                    <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--banner end -->
                        <!--services start -->
                        <div class="services_main">
                            <div class="container">
                                <!-- <div class="creative_taital">
                                    <h1 class="creative_text">Lorem Ipsum</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum sapien nunc, at pellentesque tortor egestas eget. Pellentesque egestas vehicula eros ullamcorper commodo. Mauris sagittis blandit egestas. Sed lacinia rhoncus arcu eget dictum. Sed ut blandit lorem, in faucibus mauris. Proin eleifend elit quis vehicula volutpat. Phasellus id fermentum ipsum. <br> <br> Sed non convallis nibh. Suspendisse diam est, malesuada at elit vel, gravida dapibus lacus. Mauris in magna odio. Etiam auctor efficitur laoreet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec eros purus, varius eget neque vitae, placerat lacinia enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse ac mattis ipsum, quis porta libero. Duis fermentum iaculis consectetur. Aliquam arcu elit, egestas ac tortor condimentum, sodales pretium nibh.</p>
                                    <div class="btn_main">
                                        <button type="button" class="btn btn-dark btn-lg">Get started</button>
                                    </div>
                                </div> -->
                                <div class="container">
                                    <div class="row">
                                        <div class="section_service_2 mb-5">
                                            <h1 class="service_text">Announcements</h1>
                                        </div>
                                        <div class="col-md-12">
                                            <?php
                                                include "../db_conn.php";
                                                $sql = "SELECT * FROM announcement_tbl ORDER BY bulletin_id DESC LIMIT 1";
                                                $result = $conn->query($sql);
                                                  if($result->num_rows > 0) {
                                                    while ($row=$result->fetch_assoc()) {
                                            ?>
                                            <div class="blog-slider">
                                                <div class="blog-slider__wrp">
                                                    <div class="blog-slider__item">
                                                        <div class="blog-slider__img">
                                                                <img class="img-fluid" src="../../admin/php/images/<?php echo $row['photo'];?>">
                                                        </div>
                                                        <div class="blog-slider__content">
                                                            <span class="blog-slider__code"><?php $date = $row['time_date']; echo date("M d,Y H:i a", strtotime($date));?></span>
                                                            <div class="blog-slider__title"><?php echo $row['title'];?></div>
                                                            <div class="blog-slider__text"><?php echo $row['content'];?></div>
                                                            <a href="announcement_details.php?bulletin_id=<?=$row['bulletin_id'];?>" class="blog-slider__button mb-3">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                                    }
                                                }
                                                else {
                                                    echo "<center><h1 class='error_msg'>No announcement available</h1></center>";
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>


                                <!--Start Programs Offered Section ---------------------->
                                <div class="section_service_2">
                                    <h1 class="service_text">Programs Offered</h1>
                                </div>
                                <div class="service_main">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="programs_offered_1">
                                                    <i class="bi bi-code-slash fa-2x"></i>
                                                    <h1 class="written_text">Bachelor of Science in Information Technology</h1>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum sapien nunc, at pellentesque tortor egestas eget. Pellentesque egestas vehicula eros ullamcorper commodo. Mauris sagittis blandit egestas. Sed lacinia rhoncus arcu eget dictum. Sed ut blandit lorem, in faucibus mauris. Proin eleifend elit quis vehicula volutpat. Phasellus id fermentum ipsum. </p>
                                                    <div class="btn_main">
                                                        <button type="button" class="btn btn-light btn-lg">Learn More</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="programs_offered_2">
                                                    <i class="bi bi-book fa-2x"></i>
                                                    <h1 class="written_text">Bachelor in Library & Information Science</h1>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum sapien nunc, at pellentesque tortor egestas eget. Pellentesque egestas vehicula eros ullamcorper commodo. Mauris sagittis blandit egestas. Sed lacinia rhoncus arcu eget dictum. Sed ut blandit lorem, in faucibus mauris. Proin eleifend elit quis vehicula volutpat. Phasellus id fermentum ipsum. </p>
                                                    <div class="btn_main">
                                                        <button type="button" class="btn btn-light btn-lg">Learn More</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Programs Offered Section ------------------------>
                            </div>
                        </div>

                        <!--Start Year Theme Section ---------------------->
                        <div class="year_theme">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4>2022 YEAR THEME</h4>
                                        <h1>CULTIVATING CHANGE</h1>
                                        <p>Institutional development is not instantaneous; it is built through knowledge revolution and significant breakthroughs brought by the only permanent thing in this world - change. Educational institutions faced one, if not the greatest, of its challenges, that is, transitioning from traditional face-to-face classes to online classes, and formulating new learning modalities and teaching techniques, among others. Indeed, the pandemic has pushed academes to take immediate actions possible for adaption therewith.</p>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="yt_embed">
                                            <iframe width="1223" height="430" src="https://www.youtube.com/embed/watch?v=oK7N45sTuNI&list=TLGGkhUXXppwdy8xMzA2MjAyMg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Year Theme Section --------------------------->
                        <!--Start UCU News Section --------------------------->
                        <div class="ucu_news">
                            <div class="section_service_2">
                                <h1 class="service_text">University News</h1> <br>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Featured News</h3>
                                        <div class="yt_embed">
                                            <iframe width="100" height="300" src="https://www.youtube.com/embed/KOI-_TqMMwk?list=TLGGtzbvUjBWm44zMTA1MjAyMg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            <i class="bi bi-calendar-date"> <span> 6 May 2022</span> </i>
                                            <h3>UCU News Update</h3> <br>
                                            <p>These are just a few events, programs, and activities in achieving a common goal of Urdaneta City University in continuing the passion and commitment that holds in the institution.</p>
                                            <a href="#"> Read more... </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-list">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <img src="../images/ucu_logo.png">
                                                    <h4><a href="#">UCU hails the 2022 board passers Electrical Engineers and Master Electricians</a></h4>
                                                    <p>May 13, 2022, 2:36 PM</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <img src="../images/ucu_logo.png">
                                                    <h4><a href="#">UCU News Update</a></h4>
                                                    <p>May 6, 2022, 4:19 PM</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <img src="../images/ucu_logo.png">
                                                    <h4><a href="#">CamSur college visits UCU for research benchmark</a></h4>
                                                    <p>Apr 28, 2022, 3:59 PM</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <img src="../images/ucu_logo.png">
                                                    <h4><a href="#">UCU’s 56th Foundation Anniversary</a></h4>
                                                    <p>Apr 12, 2022, 3:52 PM</p>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="btn_main">
                                                <button type="button" class="btn btn-dark btn-lg">
                                                    <a href="news_and_events.html#news" style="color: white; font-style: normal;">See all</a>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End UCU News Section ------------------------------->
                        
                        <!--Start Events Section ------------------------------->
                        <div class="service_main">
                            <div class="section_service_2 mb-5">
                                <h1 class="service_text">News & Events</h1>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <?php
                                            include "../db_conn.php";
                                            $sql = "SELECT * FROM news_events_tbl ORDER BY bulletin_id DESC LIMIT 1";
                                            $result = $conn->query($sql);
                                              if($result->num_rows > 0) {
                                                while ($row=$result->fetch_assoc()) {
                                        ?>
                                        <div class="blog-slider">
                                            <div class="blog-slider__wrp">
                                                <div class="blog-slider__item">
                                                    <div class="blog-slider__img">
                                                        <img class="img-fluid" src="../../admin/php/images/<?php echo $row['photo'];?>">
                                                    </div>
                                                    <div class="blog-slider__content">
                                                        <span class="blog-slider__code"><?php $date = $row['time_date']; echo date("M d,Y H:i a", strtotime($date));?></span>
                                                        <div class="blog-slider__title"><?php echo $row['title'];?></div>
                                                        <div class="blog-slider__text"><?php echo $row['content'];?></div>
                                                        <a href="news_and_events_details.php?bulletin_id=<?=$row['bulletin_id'];?>" class="blog-slider__button mb-3">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                                    }
                                                }
                                                else {
                                                    echo "<center><h1 class='error_msg'>No News & Events available</h1></center>";
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <center><a href="news_and_events.php" class="blog-slider__button mb-3">View All News & Events</a></center>
                        </div>
                        <!--End Events Section --------------------------------->
                        <!--start footer Section --------------------------------->
                        <?php include 'footer.php';?>
                        <!--End footer Section --------------------------------->
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
                            <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.2.2/swiper-bundle.min.js"></script> -->
                            <script type="text/javascript" src="../js/card-slider.js"></script>
                            <script src="../js/jquery.min.js"></script>
                            <script src="../js/popper.min.js"></script>
                            <script src="../js/bootstrap.bundle.min.js"></script>
                        </body>
                    </html>
<?php
} else {
  header("Location: ../index.php");
  exit();
}

?>