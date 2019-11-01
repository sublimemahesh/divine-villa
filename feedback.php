<!DOCTYPE html>
<?php
include './class/include.php';
$BANNER = new Banner(6);
?>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Feedback - The Divine Villa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="theme-color" content="#6e2759">
        <!-- Favicons -->
   
    <link rel="shortcut icon" href="images/icons/icon-divine-villa.ico">
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
                    <div class="page-title-wrapper" data-stellar-background-ratio="0.5" style="background-image: url(upload/banner/<?php echo $BANNER->image_name ?>) ">
                        <div class="content container">
                            <h1 class="heading_primary">Feedback</h1>
                            <ul class="breadcrumbs">
                                <li class="item"><a href="./">Home</a></li>
                                <li class="item"><span class="separator"></span></li>
                                <li class="item active">Feedback</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="site-content container">
                    <div class="container">
                        <div class="sc-heading">
                            <p class="first-title">Write</p>
                            <h3 class="second-title"> Comments</h3>
                            <p class="description">Lorem ipsum dolor sit amet, consecte sit amet,  <br>
                                Lorem ipsum dolor sit amet, consecte sit amet consecte sit amet,</p>

                        </div>
                        <div style="height: 60px;"></div>
                        <div class="row">
                            <?php
                            $COMMENT = new Comments(NULL);
                            foreach ($COMMENT->activeComments() as $comment) {
                                ?>
                                <div class="col-md-4">
                                    <div class="testimonial-item">
                                        <div class="img-thumb">
                                            <img src="upload/comments/<?php echo $comment['image_name'] ?>">
                                        </div>
                                        <div class="item-body text-justify">
                                            <?php echo $comment['comment'] ?>
                                        </div>  
                                        <div class="item-title text-center">
                                            <h4><?php echo $comment['name'] ?></h4>
                                            <span><?php echo $comment['country'] ?></span>
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