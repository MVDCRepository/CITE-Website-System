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
    <!--- PDF Generator --->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.bundle.min.js"></script>
    <script type="text/javascript" src="../js/generate-pdf.js"></script>
    <link href="print_grades.php">
</head>
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
                                    <a class="nav-link" href="about.php">ABOUT</a>
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
                                        id="navbarDropdown" role="button" data-toggle="dropdown">Raen Jercee</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown"
                                        style="right: auto; left: auto;">
                                        <a class="dropdown-item" href="profile.php"><img
                                                src="../images/xiao.png">Profile Settings</a>
                                        <div class="dropdown-divider"></div>
                                        <a style="font-weight: 600;" class="dropdown-item" href="#">Grades</a>
                                        <a class="dropdown-item" href="blocking.php">Blocking</a>
                                        <a style="color: red !important;" class="dropdown-item" href="#"><i
                                                class="bi bi-box-arrow-left"></i>&nbsp;Logout</a>
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
    <!---------------------------------------------------------------------------------------------------------->
    <!-------------------- DISPLAY GRADES ---------------------------------------------------------------------->
    <!---------------------------------------------------------------------------------------------------------->
    <div class="grades-content-view">
        <div class="grades-section-view">
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
                                    <th rowspan="2">Pre-requisites</th>
                                </tr>
                                <tr>
                                    <th>Lec</th>
                                    <th>Lab</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CC</td>
                                    <td class="course_des" colspan="2">CD</td>
                                    <td>LC</td>
                                    <td>LB</td>
                                    <td>UN</td>
                                    <td>GR</td>
                                    <td>PR</td>
                                </tr>
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
                                    <th rowspan="2">Pre-requisites</th>
                                </tr>
                                <tr>
                                    <th>Lec</th>
                                    <th>Lab</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CC</td>
                                    <td class="course_des" colspan="2">CD</td>
                                    <td>LC</td>
                                    <td>LB</td>
                                    <td>UN</td>
                                    <td>GR</td>
                                    <td>PR</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!------ Second Year --------------------------->
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
                                    <th rowspan="2">Pre-requisites</th>
                                </tr>
                                <tr>
                                    <th>Lec</th>
                                    <th>Lab</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CC</td>
                                    <td class="course_des" colspan="2">CD</td>
                                    <td>LC</td>
                                    <td>LB</td>
                                    <td>UN</td>
                                    <td>GR</td>
                                    <td>PR</td>
                                </tr>
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
                                    <th rowspan="2">Pre-requisites</th>
                                </tr>
                                <tr>
                                    <th>Lec</th>
                                    <th>Lab</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CC</td>
                                    <td class="course_des" colspan="2">CD</td>
                                    <td>LC</td>
                                    <td>LB</td>
                                    <td>UN</td>
                                    <td>GR</td>
                                    <td>PR</td>
                                </tr>
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
                                    <th rowspan="2">Pre-requisites</th>
                                </tr>
                                <tr>
                                    <th>Lec</th>
                                    <th>Lab</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CC</td>
                                    <td class="course_des" colspan="2">CD</td>
                                    <td>LC</td>
                                    <td>LB</td>
                                    <td>UN</td>
                                    <td>GR</td>
                                    <td>PR</td>
                                </tr>
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
                                    <th rowspan="2">Pre-requisites</th>
                                </tr>
                                <tr>
                                    <th>Lec</th>
                                    <th>Lab</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CC</td>
                                    <td class="course_des" colspan="2">CD</td>
                                    <td>LC</td>
                                    <td>LB</td>
                                    <td>UN</td>
                                    <td>GR</td>
                                    <td>PR</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!------ Fourth Year --------------------------->
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
                                    <th rowspan="2">Pre-requisites</th>
                                </tr>
                                <tr>
                                    <th>Lec</th>
                                    <th>Lab</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CC</td>
                                    <td class="course_des" colspan="2">CD</td>
                                    <td>LC</td>
                                    <td>LB</td>
                                    <td>UN</td>
                                    <td>GR</td>
                                    <td>PR</td>
                                </tr>
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
                                    <th rowspan="2">Pre-requisites</th>
                                </tr>
                                <tr>
                                    <th>Lec</th>
                                    <th>Lab</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CC</td>
                                    <td class="course_des" colspan="2">CD</td>
                                    <td>LC</td>
                                    <td>LB</td>
                                    <td>UN</td>
                                    <td>GR</td>
                                    <td>PR</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-success btn-lg" onclick="generatePDF()">Download PDF</button>
    </div>
    <!--------------------------------------------------------------------------------------------------------->
    <!--------------------- PRINT GRADES ---------------------------------------------------------------------->
    <!--------------------------------------------------------------------------------------------------------->
    <div class="grades-content">
        <div id="element" class="grades-section">
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
                                    <th rowspan="2">Pre-requisites</th>
                                </tr>
                                <tr>
                                    <th>Lec</th>
                                    <th>Lab</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CC</td>
                                    <td class="course_des" colspan="2">CD</td>
                                    <td>LC</td>
                                    <td>LB</td>
                                    <td>UN</td>
                                    <td>GR</td>
                                    <td>PR</td>
                                </tr>
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
                                    <th rowspan="2">Pre-requisites</th>
                                </tr>
                                <tr>
                                    <th>Lec</th>
                                    <th>Lab</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CC</td>
                                    <td class="course_des" colspan="2">CD</td>
                                    <td>LC</td>
                                    <td>LB</td>
                                    <td>UN</td>
                                    <td>GR</td>
                                    <td>PR</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!------ Second Year --------------------------->
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
                                    <th rowspan="2">Pre-requisites</th>
                                </tr>
                                <tr>
                                    <th>Lec</th>
                                    <th>Lab</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CC</td>
                                    <td class="course_des" colspan="2">CD</td>
                                    <td>LC</td>
                                    <td>LB</td>
                                    <td>UN</td>
                                    <td>GR</td>
                                    <td>PR</td>
                                </tr>
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
                                    <th rowspan="2">Pre-requisites</th>
                                </tr>
                                <tr>
                                    <th>Lec</th>
                                    <th>Lab</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CC</td>
                                    <td class="course_des" colspan="2">CD</td>
                                    <td>LC</td>
                                    <td>LB</td>
                                    <td>UN</td>
                                    <td>GR</td>
                                    <td>PR</td>
                                </tr>
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
                                    <th rowspan="2">Pre-requisites</th>
                                </tr>
                                <tr>
                                    <th>Lec</th>
                                    <th>Lab</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CC</td>
                                    <td class="course_des" colspan="2">CD</td>
                                    <td>LC</td>
                                    <td>LB</td>
                                    <td>UN</td>
                                    <td>GR</td>
                                    <td>PR</td>
                                </tr>
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
                                    <th rowspan="2">Pre-requisites</th>
                                </tr>
                                <tr>
                                    <th>Lec</th>
                                    <th>Lab</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CC</td>
                                    <td class="course_des" colspan="2">CD</td>
                                    <td>LC</td>
                                    <td>LB</td>
                                    <td>UN</td>
                                    <td>GR</td>
                                    <td>PR</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!------ Fourth Year --------------------------->
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
                                    <th rowspan="2">Pre-requisites</th>
                                </tr>
                                <tr>
                                    <th>Lec</th>
                                    <th>Lab</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CC</td>
                                    <td class="course_des" colspan="2">CD</td>
                                    <td>LC</td>
                                    <td>LB</td>
                                    <td>UN</td>
                                    <td>GR</td>
                                    <td>PR</td>
                                </tr>
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
                                    <th rowspan="2">Pre-requisites</th>
                                </tr>
                                <tr>
                                    <th>Lec</th>
                                    <th>Lab</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CC</td>
                                    <td class="course_des" colspan="2">CD</td>
                                    <td>LC</td>
                                    <td>LB</td>
                                    <td>UN</td>
                                    <td>GR</td>
                                    <td>PR</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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
</body>

</html>