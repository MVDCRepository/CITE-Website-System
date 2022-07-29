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
    <title>Health Declaration Form | CITE</title>
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
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
    <form action="../php/health_declaration_formPHP.php" method="POST" id="health_df_form" enctype="multipart/form-data">
        <center>
            <?php if (isset($_GET['error_msg'])) { ?>
                <p class="error_msg mt-5" style="width: 40%"><?php echo $_GET['error_msg']; ?></p>
            <?php } ?>
            <?php if (isset($_GET['success_msg'])) { ?>
                <p class="success_msg mt-5" style="width: 40%"><?php echo $_GET['success_msg']; ?></p>
            <?php } ?>
        </center>
        <div class="health_df_cont mt-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="health_df_header">
                            <img src="../images/ucu_logo.png">
                            <div class="health_df_title">
                                <h1>URDANETA CITY UNIVERSITY</h1>
                                <h3>COLLEGE OF INFORMATION AND TECHNOLOGY EDUCATION</h3>
                                <h2><strong>H</strong>ealth <strong>D</strong>eclaration <strong>F</strong>orm</h2>
                            </div>
                            <img src="../images/cite_logo.png">
                        </div>
                        <p>Dear Student/Visitor, <br>
                            To prevent the spread of COVID-19 and reduce the risk of exposure to our students,
                            employees, and visitors, we are conducting a simple screening survey. Your participation is
                            important to help us take precautionary measures to protect you and everyone in the campus
                            as well as for use during contact tracing. Thank you.</p>
                        <div class="health_df_student_info">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="hidden" name="student_id" value="<?php echo $_SESSION['std_student_id'];?>">
                                        <div class="health_df_input">
                                            <label for="submit_date">Date:</label>
                                            <input type="date" id="submit_date" name="submit_date" value="<?php echo $current_time;?>" required readonly>
                                        </div>
                                        <div class="health_df_input">
                                            <label for="health_df_name">Name:</label>
                                            <input type="text" id="health_df_name" name="health_df_name" value="<?php echo $_SESSION['std_lname'].", ".$_SESSION['std_fname']." ".$_SESSION['std_mname']." ".$_SESSION['std_sname'];?>" required readonly>
                                        </div>
                                        <div class="health_df_input">
                                            <label for="health_df_address">Address:</label>
                                            <input type="text" id="health_df_address" name="health_df_address" value="<?php echo $_SESSION['std_house_num']." ".$_SESSION['std_barangay'].", ".$_SESSION['std_city'].", ".$_SESSION['std_province'];?>" required readonly>
                                        </div>
                                        <div class="health_df_input">
                                            <label for="health_df_contact">Contact Number:</label>
                                            <input type="text" id="health_df_contact" name="health_df_contact" value="<?php echo $_SESSION['std_contact_num'];?>" required readonly>
                                        </div>
                                        <p>Purpose of Visit:</p>
                                        <div class="health_df_input_purpose">
                                            <div class="purpose_input">
                                                <input type="checkbox" id="chck_limited_f2f" name="chck_limited_f2f" value="checked">
                                                <label for="purpose_cb">Attend limited face-to-face classes</label>
                                            </div>
                                            <div class="purpose_input">
                                                <input type="checkbox" id="health_df_office" name="health_df_office" value="Office transaction: "
                                                onclick="disableTextBoxOffice(this)">
                                                <label for="health_df_office">Office transaction:<input type="text"
                                                        id="office_transaction_text" name="office_transaction_text" disabled="disabled"></label>
                                            </div>
                                            <div class="purpose_input">
                                                <input type="checkbox" id="health_df_others" name="health_df_others" value="Others:" onclick="disableTextBoxOthers(this)">
                                                <label for="health_df_others">Others:<input type="text"
                                                        id="others_text" name="others_text" disabled="disabled"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="temp_cont">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <h1>Body Temperature:</h1>
                                                        <p>Instruction: Let the person on duty in front of gate measure
                                                            your temperature.</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="temp_box"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="illness_section">
                            <table>
                                <tr>
                                    <td rowspan="10">
                                        <p>1. Are your currently experiencing symptoms, or have experienced, within the
                                            last 14 days:</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Symptoms</td>
                                    <td>YES</td>
                                    <td>NO</td>
                                </tr>
                                <tr>
                                    <td>a. Sore throat</td>
                                    <td>
                                        <input type="radio" name="sore_throat" id="st_yes" value="Yes" required>
                                    </td>
                                    <td>
                                        <input type="radio" name="sore_throat" id="st_no" value="No" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>b. Shortness of Breath</td>
                                    <td>
                                        <input type="radio" name="shortness_of_breath" id="sb_yes" value="Yes" required>
                                    </td>
                                    <td>
                                        <input type="radio" name="shortness_of_breath" id="sb_no" value="No" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>c. Body pains</td>
                                    <td>
                                        <input type="radio" name="body_pain" id="bp_yes" value="Yes" required>
                                    </td>
                                    <td>
                                        <input type="radio" name="body_pain" id="bp_no" value="No" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>d. Headache</td>
                                    <td>
                                        <input type="radio" name="headache" id="ha_yes" value="Yes" required>
                                    </td>
                                    <td>
                                        <input type="radio" name="headache" id="ha_no" value="No" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>e. Fever for the past few days</td>
                                    <td>
                                        <input type="radio" name="fever" id="fvr_yes" value="Yes" required>
                                    </td>
                                    <td>
                                        <input type="radio" name="fever" id="fvr_no" value="No" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>f. Loss of taste or smell</td>
                                    <td>
                                        <input type="radio" name="loss" id="lss_yes" value="Yes" required>
                                    </td>
                                    <td>
                                        <input type="radio" name="loss" id="lss_no" value="No" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>g. Cough and/or cold</td>
                                    <td>
                                        <input type="radio" name="cough_cold" id="cc_yes" value="Yes" required>
                                    </td>
                                    <td>
                                        <input type="radio" name="cough_cold" id="cc_no" value="No" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>h. Diarrhea</td>
                                    <td>
                                        <input type="radio" name="diarrhea" id="drh_yes" value="Yes" required>
                                    </td>
                                    <td>
                                        <input type="radio" name="diarrhea" id="drh_no" value="No" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">2. Have you worked together or stayed in the same close environment
                                        of a confirmed COVID-19 case?</td>
                                    <td>
                                        <input type="radio" name="question_2" id="qstn_2_yes" value="Yes" required>
                                    </td>
                                    <td>
                                        <input type="radio" name="question_2" id="qstn_2_no" value="No" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">3. Have you had contact with anyone with cough, colds, fever, and
                                        sore throat?</td>
                                    <td>
                                        <input type="radio" name="question_3" id="qstn_3_yes" value="Yes" required>
                                    </td>
                                    <td>
                                        <input type="radio" name="question_3" id="qstn_3_no" value="No" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        4. Have your travelled outside of the Philippines in the last 14 days? <br> If
                                        yes, where:
                                        <input type="text" name="question_4_where" id="question_4_where" disabled required>
                                    </td>
                                    <td>
                                        <input type="radio" name="question_4" id="qstn_4_yes" value="Yes" onclick="disableField_qstn4()" required>
                                    </td>
                                    <td>
                                        <input type="radio" name="question_4" id="qstn_4_no" value="No" onclick="disableField_qstn4()" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        5. Have your travelled outside of your stated address in the last 14 days? <br>
                                        If yes, where:
                                        <input type="text" id="question_5_where" name="question_5_where" disabled required>
                                    </td>
                                    <td>
                                        <input type="radio" name="question_5" id="qstn_5_yes" value="Yes" onclick="disableField_qstn5()" required>
                                    </td>
                                    <td>
                                        <input type="radio" name="question_5" id="qstn_5_no" value="No" onclick="disableField_qstn5()" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">6. Are you considered fully vaccinated against covid-19?</td>
                                    <td>
                                        <input type="radio" name="question_6" id="qstn_6_yes" value="Yes" required>
                                    </td>
                                    <td>
                                        <input type="radio" name="question_6" id="qstn_6_no" value="No" required>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="health_df_confirmation">
                            <p>I confirm that the above information is correct and accurate.</p>
                            <input class="custom_upload" type="file" name="file">
                            <div class="custom_breakline"></div>
                            <h4>Signature</h4>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                                <button class="btn btn-secondary me-md-2" type="submit" id="submit" name="submit">Submit</button>
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
    <script type="text/javascript" src="../js/health_declaration_formJS.js"></script>
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