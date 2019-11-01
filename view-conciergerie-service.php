<!DOCTYPE html>
<?php
include './class/include.php';
$BANNER = new Banner(8);
?>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Conciergerie Services - The Divine Villa</title>
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
                            <h1 class="heading_primary">Conciergerie Services</h1>
                            <ul class="breadcrumbs">
                                <li class="item"><a href="./">Home</a></li>
                                <li class="item"><span class="separator"></span></li>
                                <li class="item"><a href="facilities.php">Services</a></li>
                                <li class="item"><span class="separator"></span></li>
                                <li class="item active">Conciergerie Services</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="site-content container">
                    <div class="sc-heading">
                        <p class="first-title">Our</p>
                        <h3 class="second-title">Conciergerie Services</h3>
                        <p class="description">Our staff Management  dedicated to provide a Personalized Service <br>
                            will propose you a large variety of Services around the Villa.</p>

                    </div>
                    <div style="height: 60px;"></div>
                    <div class="events-content">
                        <div class="sc-events list-style">
                            <?php
                            $SERVICE = new Service(NULL);
                            foreach ($SERVICE->all() as $service) {
                                ?>
                                <div class="event">
                                    <div class="row tm-flex">
                                        <div class="col-lg-4 col-md-5">
                                            <div class="thumbnail">
                                                <img src="upload/service/<?php echo $service['image_name'] ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-7">
                                            <div class="event-content">
                                                <h3 class="title"><?php echo $service['title'] ?></h3>
                                                <div class="event-desc">
                                                    <p> 
                                                        <?php echo $service['short_description'] ?> 
                                                    </p>   
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            <?php } ?>
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