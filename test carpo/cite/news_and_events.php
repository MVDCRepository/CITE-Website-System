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
        <title>News & Events | CITE</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="images/cite_logo.png">
        <!-- bootstrap css -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- Responsive-->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
         <!-- Tweaks for older IEs -->
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <!-- owl stylesheets -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
        <!-- Swiper -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.2.2/swiper-bundle.css" integrity="sha512-VbPb+KrNIjcE5nM/Y+ZBvKvQF7+B/alQCQLPdIUAP3KsmDWkv0EdiyX4gfTwtJ3Sfais/nGJ0whTxjSwhQ1C8g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Jquery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
        <!-- body -->
        <body>
            <div class="header_pages">
                <div class="container">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="logo1"><a href="index.php"><img src="images/cite_logo_title.png"></a></div>
                            </div>
                            <div class="col-md-6">
                                <div class="logo2"><a href="https://ucu.edu.ph" target="_blank"><img src="images/ucu_logo.png"></a></div>
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
                                            <a style="font-weight: 600;" class="nav-link" href="#">NEWS & EVENTS</a></li>
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
                                                <!-- <li id="nav-last" class="nav-item last"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Log In</a>
                                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="right: auto; left: auto;">
                                                        <a class="dropdown-item" href="user_login.php">Go To Log In</a>
                                                    </div>
                                                </li> -->
                                                <li class="last"><a href="login.php">LOGIN</a></li>
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
                                <h1 class="bnner_title_news_events">News & Events</h1>
                            </div>
                        </div>
                        <!--End Banner Section -------------------------------->
                        <!--Start Content Section ----------------------------->
                        <div class="service_main">
                            <div class="container">
                                <div class="row">
                                    <div class="vh-100-wrapper">
                                        <?php
                                            include "db_conn.php";
                                            $sql = "SELECT * FROM news_events_tbl ORDER BY bulletin_id DESC LIMIT 10";
                                            $result = $conn->query($sql);
                                              if($result->num_rows > 0) {
                                                while ($row=$result->fetch_assoc()) {
                                        ?>
                                            <div class="col-md-12">
                                                <div class="blog-slider">
                                                    <div class="blog-slider__wrp">
                                                        <div class="blog-slider__item">
                                                            <div class="blog-slider__img">
                                                                <img class="img-fluid" src="../admin/php/images/<?php echo $row['photo'];?>">
                                                            </div>
                                                            <div class="blog-slider__content">
                                                                <span class="blog-slider__code"><?php $date = $row['time_date']; echo date("M d,Y H:i a", strtotime($date));?></span>
                                                                <div class="blog-slider__title"><?php echo $row['title'];?></div>
                                                                <div class="blog-slider__text"><?php echo $row['content'];?></div>
                                                                <a href="news_and_events_details.php?bulletin_id=<?=$row['bulletin_id'];?>" class="blog-slider__button">READ MORE</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                                }
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--End Content Section ------------------------------->
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
                            <script src="js/jquery.min.js"></script>
                            <script src="js/popper.min.js"></script>
                            <script src="js/bootstrap.bundle.min.js"></script>
                            <script src="js/card-slider-pages.js" crossorigin="anonymous"></script>
                            <script type="text/javascript">
                                function getPageList(totalPages, page, maxLength) {
                                function range(start, end) {
                                return Array.from(Array(end - start + 1), (_, i) => i + start);
                                }
                                var sideWidth = maxLength < 6 ? 1 : 2;
                                var leftWidth = (maxLength - sideWidth * 2 - 3) >> 1;
                                var rightWidth = (maxLength - sideWidth * 2 - 3) >> 1;
                                
                                if (totalPages <= maxLength) {
                                return range(1, totalPages);
                                }
                                if (page <= maxLength - sideWidth - 1 - rightWidth) {
                                return range(1, maxLength - sideWidth - 1).concat(0, range(totalPages - sideWidth + 1, totalPages));
                                }
                                if (page >= totalPages - sideWidth - 1 - rightWidth) {
                                return range(1, sideWidth).concat(0, range(totalPages - sideWidth - 1 - rightWidth - leftWidth, totalPages));
                                }
                                return range(1, sideWidth).concat(0, range(page - leftWidth, page + rightWidth), 0, range(totalPages - sideWidth + 1, totalPages));
                                }
                                $(function(){
                                var numberOfItems = $(".card-content .card").length;
                                var limitPerPage = 6; //How many card visible in one page?
                                var totalPages = Math.ceil(numberOfItems / limitPerPage);
                                var paginationSize = 7; //How many page elements visible in the pagination?
                                var currentPage;
                                function showPage(whichPage) {
                                if(whichPage < 1 || whichPage > totalPages) return false;
                                currentPage = whichPage;
                                $(".card-content .card").hide().slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage).show();
                                $(".pagination li").slice(1, -1).remove();
                                getPageList(totalPages, currentPage, paginationSize).forEach(item => {
                                $("<li>").addClass("page-item").addClass(item ? "current-page" : "dots").toggleClass("active", item == currentPage).append($("<a>").addClass("page-link")
                                    .attr({href: "javascript:void(0)"}).text(item || "...")).insertBefore(".next-page");
                                    });
                                    $(".previous-page").toggleClass("disable", currentPage === 1);
                                    $(".next-page").toggleClass("disable", currentPage === totalPages);
                                    return true;
                                    }
                                    $(".pagination").append(
                                    $("<li>").addClass("page-item").addClass("previous-page").append($("<a>").addClass("page-link").attr({href: "javascript:void(0)"}).text("Prev")),
                                        $("<li>").addClass("page-item").addClass("next-page").append($("<a>").addClass("page-link").attr({href: "javascript:void(0)"}).text("Next"))
                                            );
                                            $(".card-content").show();
                                            showPage(1);
                                            $(document).on("click", ".pagination li.current-page:not(.active)", function(){
                                            return showPage(+$(this).text());
                                            });
                                            $(".next-page").on("click", function(){
                                            return showPage(currentPage + 1);
                                            });
                                            $(".previous-page").on("click", function(){
                                            return showPage(currentPage - 1);
                                            })
                                            });
                            </script>
    </body>
</html>