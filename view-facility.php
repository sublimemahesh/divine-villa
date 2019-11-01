<!DOCTYPE html>
<?php
include './class/include.php';
$id = $_GET['id'];
$FACILITY = new Facility($id);
$BANNER = new Banner(3);

?>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Facility - The Divine Villa</title>
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
            <?php include './header.php'; ?>

            <!-- Main Content -->
            <div id="main-content">
                <div class="page-title">
                    <div class="page-title-wrapper" data-stellar-background-ratio="0.5" style="background-image: url(upload/banner/<?php echo $BANNER->image_name ?>) ">
                        <div class="content container">
                            <h1 class="heading_primary"><?php echo $FACILITY->title ?></h1>
                            <ul class="breadcrumbs">
                                <li class="item"><a href="./">Home</a></li>
                                <li class="item"><span class="separator"></span></li>
                                <li class="item"><a href="facilities.php">Facilities</a></li>
                                <li class="item"><span class="separator"></span></li>
                                <li class="item active"><?php echo $FACILITY->title ?></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="site-content no-padding">
                    <div class="page-content">
                        <div class="container">
                            <div class="empty-space"></div>
                            <div class="sc-heading">
                                <p class="first-title">Best Services</p>
                                <h3 class="second-title"><?php echo $FACILITY->title ?></h3>
                            </div>
                            <div class="about-info row">
                                <div class="col-sm-12">
                                    <p>
                                        <?php echo $FACILITY->description ?>
                                    </p>
                                </div>

                            </div>
                            <div class="empty-space"></div>
                            <div class="sc-about-slides row">
                                <div class="sc-heading" style="margin-bottom: 30px">
                                    <p class="first-title">Other Facilities</p>

                                </div>
                                <ul class="slides owl-theme owl-carousel">
                                    <?php
                                    $FACILITYS = new Facility(NULL);
                                    foreach ($FACILITYS->all() as $facility) { 
                                        ?>
                                        <li>
                                            <div class="post ">
                                                <div class="inner">
                                                    <div class="thumbnail">
                                                        <a href="view-facility.php?id=<?php echo $facility['id'] ?>"><img src="upload/facility/<?php echo $facility['image_name'] ?>" alt=""></a>
                                                    </div>
                                                    <div class="content">
                                                        <h3 class="title"> <a href="view-facility.php?id=<?php echo $facility['id'] ?>"><?php echo $facility['title'] ?></a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="empty-space"></div>
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