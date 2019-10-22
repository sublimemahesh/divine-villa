<!DOCTYPE html>
<?php
include './class/include.php';
?>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Excursions - The Divine Villa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicons -->
        <link rel="shortcut icon" href="images/icons/favicon.png">

        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" href="css/style.css"><!-- Style -->

    </head>
    <body class="room archive">
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

            <?php include './header.php' ?>
            <!-- Main Content -->
            <div id="main-content">
                <div class="page-title">
                    <div class="page-title-wrapper" data-stellar-background-ratio="0.5">
                        <div class="content container">
                            <h1 class="heading_primary">Excursions</h1>
                            <ul class="breadcrumbs">
                                <li class="item"><a href="./">Home</a></li>
                                <li class="item"><span class="separator"></span></li>
                                <li class="item active">Excursions</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="site-content container">
                    <div class="container">
                        <div class="sc-heading">
                            <p class="first-title">Top</p>
                            <h3 class="second-title">Excursions</h3>
                            <p class="description">Lorem ipsum dolor sit amet, consecte sit amet,  <br>
                                Lorem ipsum dolor sit amet, consecte sit amet consecte sit amet,</p>
                        </div>
                        <div style="height: 60px;"></div>

                        <div class="sc-posts style-01 auto-height">
                            <div class="item row">
                                <?php
                                $ATTRACTION = new Attraction(NULL);
                                foreach ($ATTRACTION->all() as $key => $attraction) {
                                    ?> 
                                    <div class="post col-sm-6 col-md-4">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="view-excursion.php?id=<?php echo $attraction['id'] ?>"><img src="upload/attraction/<?php echo $attraction['image_name'] ?>" alt=""></a>
                                            </div>
                                            <div class="content">
                                                <h3 class="title"> <a href="view-excursion.php?id=<?php echo $attraction['id'] ?>"><?php echo $attraction['title'] ?></a></h3>
                                                <div class="summary text-justify">
                                                    <?php echo  $attraction['short_description']  ?>... </div>
                                                <a href="view-excursion.php?id=<?php echo $attraction['id'] ?>" class="read-more more-info">More Info</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- Footer -->
                <?php include './footer.php' ?>
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