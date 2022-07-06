<?php
session_start();

if (isset($_SESSION['student_id']) && isset($_SESSION['id_number']) && isset($_SESSION['fname']) && isset($_SESSION['mname']) && isset($_SESSION['lname']) && isset($_SESSION['yr_lvl']) && isset($_SESSION['eval_status'])) {
    include '../db_conn.php';
    $total_student = null;
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
        <title>Blockings | CITE</title>
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
                                                    <a class="dropdown-item" href="profile.php"><!-- <img src="../images/xiao.png"> -->Profile Settings</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="grades.php">Grades</a>
                                                    <a style="font-weight: 600;" class="dropdown-item" href="blocking.php">Blocking</a>
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
                <div class="blocking_content">
                    <form method="POST">
                        <div class="choose_block">
                            <div class="container">
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="acad_yr">Academic Year</label>
                                        <!-- value must academic year where status is active -->
                                        <select id="acad_yr" class="form-control" name="acad_yr" onkeyup="search_subject()" onfocus="search_subject()" onchange="search_subject()" style="width: 200px;">
                                            <?php
                                                $sql = "SELECT * FROM acad_yr_tbl WHERE status = 'Active'";
                                                $result = $conn->query($sql);
                                                if($result->num_rows > 0) {
                                                    while ($row=$result->fetch_assoc()) {
                                            ?>
                                            <option value="<?php echo $row['acad_yr'];?>"><?php echo $row['acad_yr'];?></option>
                                            <?php
                                                    }
                                                }
                                                else {
                                                    echo "<option value=''>Academic Year not set</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputYear">Year Level</label>
                                        <select id="yr_lvl" class="form-control" name="yr_lvl" onkeyup="search_subject()" onfocus="search_subject()" onchange="search_subject()" style="width: 120px;">
                                            <option value="" selected disabled>Choose...</option>
                                            <option value="1st">1st Year</option>
                                            <option value="2nd">2nd Year</option>
                                            <option value="3rd">3rd Year</option>
                                            <option value="4th">4th Year</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="sem">Semester</label>
                                        <select id="sem" class="form-control" name="sem" onkeyup="search_subject()" onfocus="search_subject()" onchange="search_subject()">
                                            <option value="" selected disabled>Choose...</option>
                                            <option value="1st">1st Semester</option>
                                            <option value="2nd">2nd Semester</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="block_no">Block</label>
                                        <select id="block_no" class="form-control" name="block_no" onkeyup="search_subject()" onfocus="search_subject()" onchange="search_subject()">
                                            <option value="" selected disabled>Choose...</option>
                                            <option value="1">Block 1</option>
                                            <option value="2">Block 2</option>
                                            <option value="3">Block 3</option>
                                            <option value="4">Block 4</option>
                                            <option value="5">Block 5</option>
                                            <option value="6">Block 6</option>
                                            <option value="7">Block 7</option>
                                            <option value="8">Block 8</option>
                                            <option value="9">Block 9</option>
                                            <option value="10">Block 10</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <form action="../php/blockingPHP.php" method="POST">
                        <div class="block_result_content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="block_result">
                                            <!-- load subjects container -->
                                            <center>
                                                <?php if (isset($_GET['error_msg'])) { ?><p class="error_msg mb-5 mt-5" style="width: 40%"><?php echo $_GET['error_msg']; ?></p>
                                                <?php } ?>
                                                <?php if (isset($_GET['success_msg'])) { ?><p class="success_msg mb-5 mt-5" style="width: 40%"><?php echo $_GET['success_msg']; ?></p>
                                                <?php } ?>
                                            </center>
                                            <div id="loadBlock_sub">
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="d-flex justify-content-center mt-5 mb-5">
                        <div class="p-3 col-md-5 border rounded" id="reserve_info">
                        <h5 class="success_msg" style="width: 100%">Block Information. Wait for the update of your request</span></h5>
                            <?php
                                $sql = "SELECT
                                        reserve_block_tbl.id,
                                        reserve_block_tbl.block_id,
                                        reserve_block_tbl.student_id,
                                        reserve_block_tbl.status,

                                        blocking_tbl.block_id,
                                        blocking_tbl.block_no,
                                        blocking_tbl.yr_lvl,
                                        blocking_tbl.sem,

                                        student_tbl.student_id,
                                        student_tbl.fname,
                                        student_tbl.mname,
                                        student_tbl.lname

                                        FROM reserve_block_tbl

                                        INNER JOIN blocking_tbl ON blocking_tbl.block_id = reserve_block_tbl.block_id
                                        INNER JOIN student_tbl ON student_tbl.student_id = reserve_block_tbl.student_id

                                        WHERE student_tbl.student_id = '$student_id' AND reserve_block_tbl.status = 'Pending'";
                                $result = $conn->query($sql);
                                  if($result->num_rows > 0) {
                                    while ($row=$result->fetch_assoc()) {
                            ?>
                            <p>Year Level: <span class="font-weight-bold mr-3"><?php echo $row['yr_lvl']." Year";?></span> Block: <span class="font-weight-bold mr-3"><?php echo $row['block_no'];?></span> Semester: <span class="font-weight-bold mr-3"><?php echo $row['sem']." Sem";?></span> Status: <span class="font-weight-bold mr-3"><?php echo $row['status'];?></span></p>
                            <?php
                                    }
                                }
                                else {
                                    echo "<script>document.getElementById('reserve_info').style.display = 'none';</script>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <!--End Content Section -------------------------------->
                <!--Start Footer Section ------------------------------->
                <div class="footer mt-5">
                    <div class="footer_container">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="map_icon">
                                        <a href="index.php"><img src="../images/cite_logo.png"></a>
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
                                            <li><a href="news_and_events.php">News and Events</a></li>
                                            <li><a href="about.php">About</a></li>
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
                <script>
                    function search_subject() {
                        var yr_lvl = document.getElementById("yr_lvl").value;
                        var sem = document.getElementById("sem").value;
                        var block_no = document.getElementById("block_no").value;
                        var acad_yr = document.getElementById("acad_yr").value;

                        xmlhttp = new XMLHttpRequest();
                        xmlhttp.open("GET", "../server/load_blockSub.php?yr_lvl="+yr_lvl+"&sem="+sem+"&block_no="+block_no+"&acad_yr="+acad_yr,false);
                        xmlhttp.send(null);

                        document.getElementById('loadBlock_sub').innerHTML=xmlhttp.responseText;
                    }

                    window.onload = search_subject;
                </script>
            </body>
        </html>
<?php
} 
else {
  header("Location: ../user_login.php");
  exit();
}

?>