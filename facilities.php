<!DOCTYPE html>
<?php
include './class/include.php';
$BANNER = new Banner(3);


$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
?>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Facilities - The Divine Villa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="theme-color" content="#6e2759">
        <!-- Favicons -->
      <link rel="shortcut icon" href="images/icons/icon-divine-villa.ico">

        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" href="css/style.css"><!-- Style -->

    </head>
    <body class="single single-post">
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
                            <h1 class="heading_primary">Facilities </h1>
                            <ul class="breadcrumbs">
                                <li class="item"><a href="./">Home</a></li>
                                <li class="item"><span class="separator"></span></li>
                                <li class="item active">Facilities </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="empty-space"></div>
                <div class="sc-categories-link style-02">
                    <div class="container">
                        <div class="sc-heading">
                            <p class="first-title">Villa</p>
                            <h3 class="second-title"> Facilities</h3>

                            <p class="description">We will take care of your stay and     <br>
                                make sure you will experience a unique holiday rental experience.    …..</p>

                        </div>
                        <div style="height: 60px;"></div>
                        <div class="row">
                            <?php
                            $FACILITY = new Facility(null);
                            foreach ($FACILITY->all() as $key => $facility) {
                                if ($key < 7) {
                                    ?>


                                    <div class="col-sm-4">
                                        <div class="item">
                                            <a href="view-facility.php?id=<?php echo $facility['id'] ?>">
                                                <img src="upload/facility/<?php echo $facility['image_name'] ?>" alt="">
                                            </a>   
                                            <a href="view-facility.php?id=<?php echo $facility['id'] ?>" class="img-link"></a>
                                            <div class="content-overlay">
                                                <h4 class="title"><a href="view-facility.php?id=<?php echo $facility['id'] ?>"><?php echo $facility['title'] ?></a></h4>
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                }
                            }
                            ?>
                                   <div class="col-sm-4">
                                <div class="item">
                                    <a href="view-villa-equipment.php">
                                        <img src="upload/facility/-312574177_190890566729_1571821570_n.jpg" alt="">
                                    </a>   
                                    <a href="view-villa-equipment.php" class="img-link"></a>
                                    <div class="content-overlay">
                                        <h4 class="title"><a href="view-villa-equipment.php">Villa Equipment</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="item">
                                    <a href="view-conciergerie-service.php">
                                        <img src="upload/facility/-468900717_190734240189_1571808247_n.jpg" alt="">
                                    </a>   
                                    <a href="view-conciergerie-service.php" class="img-link"></a>
                                    <div class="content-overlay">
                                        <h4 class="title"><a href="view-conciergerie-service.php">Conciergerie Services</a></h4>
                                    </div>
                                </div>
                            </div>
                     


                        </div>
                    </div>
                </div>
                <div class="empty-space"></div>
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
            <script src="js/libs/gallery.min.js"></script><!-- gallery -->
            <script src="js/libs/jquery.thim-content-slider.min.js"></script><!-- Slider -->
            <script src="js/theme-customs.js"></script><!-- Theme Custom -->

    </body>
</html>