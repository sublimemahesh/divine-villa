<!DOCTYPE html>
<?php
include './class/include.php';
$BANNER = new Banner(8);
?>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Villa Equipment - The Divine Villa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="theme-color" content="#6e2759">
        <!-- Favicons -->
        <link rel="shortcut icon" href="images/icons/icon-divine-villa.ico">

        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" href="css/style.css"><!-- Style -->

    </head>
    <body class="events archive">
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
            <?php include './header.php'; ?>

            <!-- Main Content -->
            <div id="main-content">
                <div class="page-title">
                    <div class="page-title-wrapper" data-stellar-background-ratio="0.5" style="background-image: url(upload/banner/<?php echo $BANNER->image_name ?>)">
                        <div class="content container">
                            <h1 class="heading_primary">Villa Equipment</h1>
                            <ul class="breadcrumbs">
                                <li class="item"><a href="./">Home</a></li>
                                <li class="item"><span class="separator"></span></li>
                                <li class="item"><a href="facilities.php">Services</a></li>
                                <li class="item"><span class="separator"></span></li>
                                <li class="item active">Villa Equipment</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="site-content container">
                    <div class="sc-heading">
                        <p class="first-title">Our</p>
                        <h3 class="second-title">Villa Equipment</h3>
                        <p class="description">A quick service available at any time to fulfill <br>
                           any kind of guest requirement .</p>

                    </div>
                    <div style="height: 60px;"></div>
<!--                    <div class="events-content">
                        <div class="sc-events list-style">
                            <?php
                            $VILLAEQUIPMENT = new VillaEquipment(NULL);
                            foreach ($VILLAEQUIPMENT->all() as $euipment) {
                                ?>
                                <div class="event">
                                    <div class="row tm-flex">
                                        <div class="col-lg-4 col-md-5">
                                            <div class="thumbnail">
                                                <img src="./upload/villa-equipment/<?php echo $euipment['image_name'] ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-7">
                                            <div class="event-content">
                                                <h3 class="title"><?php echo $euipment['title'] ?></h3>
                                                <div class="event-desc">
                                                    <p> 
                                                        <?php echo $euipment['short_description'] ?> 
                                                    </p>   
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>-->
 <div class="sc-list-info">
                            <div class="row">
                                <div class="col-sm-4">
                                    <ul>
                                        <li><img src="images/facilities/001-swimmer.png">Infinity Swiming Pool </li>
                                        <li><img src="images/facilities/005-wifi.png">Wifi </li>
                                        <li><img src="images/facilities/004-tv.png">  SAT Tv</li>
                                        <li><img src="images/facilities/003-safety-box.png"> Safety Locker </li>

                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <ul>
                                        <li><img src="images/facilities/004-billiard.png">Snooker </li>
                                        <li><img src="images/facilities/food.png">Nespresso Corner </li>
                                        <li><img src="images/facilities/006-wheelchair.png">Disable Access </li>
                                        <li><img src="images/facilities/003-ac.png">A/C </li>

                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <ul>
                                        <li><img src="images/facilities//002-cctv.png">CCTV</li>
                                        <li><img src="images/facilities/002-lock.png">Security </li>
                                        <li><img src="images/facilities/001-car.png"> Car Park </li>
                                        <li><img src="images/facilities-2/dinning.png"> Meals </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <!-- Footer -->
            <?php include './footer.php'; ?>
        </div><!-- wrapper-container -->

        <div id="back-to-top">
            <i class="ion-ios-arrow-up" aria-hidden="true"></i>
        </div>


        <!-- Scripts -->
        <script src="js/libs/jquery.min.js"></script><!-- jQuery -->
        <script src="js/libs/stellar.min.js"></script><!-- parallax -->

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