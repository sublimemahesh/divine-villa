<!DOCTYPE html>
<?php
include './class/include.php';
$PAGES = new Page(2);
$BANNER = new Banner(1);
?>
<html lang="en">



    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <title>About Us - The Divine Villa</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="theme-color" content="#6e2759">

        <!-- Favicons -->

        <link rel="shortcut icon" href="images/icons/icon-divine-villa.ico">



        <!-- REVOLUTION STYLE SHEETS -->

        <link rel="stylesheet" href="css/style.css"><!-- Style -->



    </head>

    <body class="page">

        <div id="preloading">

            <div class="loading-icon">

                <div class="sk-folding-cube">

                    <div class="sk-cube1 sk-cube"></div>

                    <div class="sk-cube2 sk-cube"></div>

                    <div class="sk-cube4 sk-cube"></div>

                    <div class="sk-cube3 sk-cube"></div>

                </div>

            </div>

        </div>

        <!-- Wrapper content -->

        <div id="wrapper-container" class="content-pusher">

            <div class="overlay-close-menu"></div>



            <!-- Header -->

            <?php
            include 'header.php';
            ?>



            <!-- Main Content -->

            <div id="main-content">

                <div class="page-title">

                    <div class="page-title-wrapper" data-stellar-background-ratio="0.5" style="background-image: url(upload/banner/<?php echo $BANNER->image_name ?>) ">

                        <div class="content container">

                            <h1 class="heading_primary">About Us</h1>

                            <ul class="breadcrumbs">

                                <li class="item"><a href="./">Home</a></li>

                                <li class="item"><span class="separator"></span></li>

                                <li class="item active">About Us</li>

                            </ul>

                        </div>

                    </div>

                </div>



                <div class="site-content no-padding">

                    <div class="page-content">

                        <div class="container">

                            <div class="empty-space"></div>
                            <div class="row">
                                <div class="sc-heading col-sm-8">
                                    <p class="first-title">Our</p>
                                    <h3 class="second-title"> Dreams begin yours.</h3>

                                </div>
                                <div class="col-sm-4 col-md-4 hidden-mobile" style="margin-top: - 11px;"> 
                                    <div class="sc-video style-02">
                                        <div class="background-video">
                                            <div class="cover-image"></div>
                                            <div class="content ">
                                                <i class="video-play ion-ios-play"></i>
                                                <h4 class="title-video"> The Divine Villa</h4>
                                            </div>
                                            <video loop="" class="full-screen-video" data-autoplay="">
                                                <source src="images/home/hotel.mp4" type="video/mp4">
                                            </video>
                                        </div>
                                    </div> 
                                </div>     
                            </div>     
                            <div class="about-info row">

                                <div class="col-sm-12 text-justify" style="margin-top: -155px;">
                                    <?php echo $PAGES->description ?>
                                </div>

                                <div class="col-sm-12">

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="box-item-2 ">
                                                <div class="content">
                                                    <img src="images/about/vision.png" alt="">
                                                    <h3 class="title-2">Vision</h3>
                                                    <p class="name">The Divine shows you the way.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" col-sm-6">
                                            <div class="box-item-2">
                                                <div class="content">
                                                    <img src="images/about/mission.png" alt="">
                                                    <h3 class="title-2">Mission</h3>
                                                    <p class="name">
                                                        The Divine luxury boutique villa creates a truly memorable experience that you will cherish for your life.<br/>
                                                        - Unique friendly hospitality you will experience, embracing and connected with natural protected environment.<br/> 
                                                        - We enhance the interaction and relation with local communities and village.<br/>
                                                        -An inspiring atmosphere, fostering your wellbeing and flourishing your  personal experience.<br/> 

                                                    </p>
                                                </div>
                                            </div>
                                        </div>      
                                    </div>
                                </div>



                            </div>

                            <div class="empty-space"></div>

                        </div>


                    </div>

                </div>


                <div class="h4-bg-reason">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-6">
                                <div class="sc-reason">
                                    <h3 class="title">Why Choose Us !</h3>
                                    <ul class="list-reason">
                                        <li><i class="ion-android-notifications-none"></i>Ultimate sustainable holiday.</li>
                                        <li><i class="ion-ios-information-outline"></i>Flourishing your personal experience. </li>
                                        <li><i class="ion-ios-star-outline"></i>A tailored service with a dedicated team. </li>
                                        <li><i class="ion-ios-heart-outline"></i>Luxury & Comfort hospitality,  facilities.  </li>
                                        <li><i class="ion-ios-arrow-back"></i>Sri Lankan Tourism Board Certification  </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Footer -->

            <?php
            include 'footer.php';
            ?>

        </div><!-- wrapper-container -->



        <div id="back-to-top">

            <i class="ion-ios-arrow-up" aria-hidden="true"></i>

        </div>





        <!-- Scripts -->

        <script src="js/libs/jquery.min.js"></script><!-- jQuery -->

        <script src="js/libs/stellar.min.js"></script><!-- parallax -->



        <script src="js/libs/moment.min.js"></script><!-- moment -->

        <script src="js/libs/jquery-ui.min.js"></script><!-- ui -->

        <script src="js/libs/daterangepicker.min.js"></script><!-- date -->

        <script src="js/libs/daterangepicker.min-date.min.js"></script><!-- date2 -->

        <script src="js/libs/bootstrap.min.js"></script><!-- Bootstrap -->

        <script src="js/libs/smoothscroll.min.js"></script><!-- smoothscroll -->

        <script src="js/libs/owl.carousel.min.js"></script><!-- Owl Carousel -->

        <script src="js/libs/jquery.magnific-popup.min.js"></script><!-- Magnific Popup -->

        <script src="js/libs/theia-sticky-sidebar.min.js"></script><!-- Sticky sidebar -->

        <script src="js/libs/counter-box.min.js"></script><!-- counter -->

        <script src="js/libs/jquery.thim-content-slider.min.js"></script><!-- Slider -->

        <script src="js/theme-customs.js"></script><!-- Theme Custom -->



    </body>



</html>