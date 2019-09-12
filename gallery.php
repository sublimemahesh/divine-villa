<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>HOTEL HTML TEMPLATE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/icons/favicon.png">

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

 <?php  include './header.php'?>

    <!-- Main Content -->
    <div id="main-content">
        <div class="page-title">
            <div class="page-title-wrapper" data-stellar-background-ratio="0.5">
                <div class="content container">
                    <h1 class="heading_primary">Gallery</h1>
                    <ul class="breadcrumbs">
                        <li class="item"><a href="index-2.html">Home</a></li>
                        <li class="item"><span class="separator"></span></li>
                        <li class="item active">Gallery</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="site-content">
            <div class="page-content">
               <div class="container">
                   <div class="sc-gallery">
                       <ul class="filter-controls">
                           <li><a href="javascript:;" class="filter active">All</a></li>
                           <li><a href="javascript:;" class="filter" data-filter=".filter-room">Room</a></li>
                           <li><a href="javascript:;" class="filter" data-filter=".filter-restaurant">Restaurant</a></li>
                           <li><a href="javascript:;" class="filter" data-filter=".filter-swimming">Swimming pool</a></li>
                           <li><a href="javascript:;" class="filter" data-filter=".filter-spa">Spa</a></li>
                       </ul>
                       <div class="wrapper-gallery row" itemscope itemtype="">
                           <div class="col-sm-4 filter-room filter-restaurant filter-swimming">
                               <a href="images/gallery/img-1.jpg" class="gallery-popup">
                                   <img src="images/gallery/img-1.jpg" alt=""></a>
                           </div>

                           <div class="col-sm-4 filter-restaurant filter-swimming">
                               <a href="images/gallery/img-2.jpg" class="gallery-popup">
                                   <img src="images/gallery/img-2.jpg" alt=""></a>
                           </div>
                           <div class="col-sm-4 filter-room filter-restaurant">
                               <a href="images/gallery/img-3.jpg" class="gallery-popup">
                                   <img src="images/gallery/img-3.jpg" alt=""></a>
                           </div>
                           <div class="col-sm-4 filter-swimming filter-spa">
                               <a href="images/gallery/img-4.jpg" class="gallery-popup">
                                   <img src="images/gallery/img-4.jpg" alt=""></a>
                           </div>
                           <div class="col-sm-4 filter-room filter-spa filter-restaurant">
                               <a href="images/gallery/img-5.jpg" class="gallery-popup">
                                   <img src="images/gallery/img-5.jpg" alt=""></a>
                           </div>
                           <div class="col-sm-4 filter-spa filter-room">
                               <a href="images/gallery/img-6.jpg" class="gallery-popup">
                                   <img src="images/gallery/img-6.jpg" alt=""></a>
                           </div>
                           <div class="col-sm-4  filter-restaurant filter-room filter-swimming">
                               <a href="images/gallery/img-7.jpg" class="gallery-popup">
                                   <img src="images/gallery/img-7.jpg" alt=""></a>
                           </div>
                           <div class="col-sm-4 filter-swimming filter-restaurant">
                               <a href="images/gallery/img-8.jpg" class="gallery-popup">
                                   <img src="images/gallery/img-8.jpg" alt=""></a>
                           </div>
                           <div class="col-sm-4  filter-swimming filter-room filter-swimming">
                               <a href="images/gallery/img-9.jpg" class="gallery-popup">
                                   <img src="images/gallery/img-9.jpg" alt=""></a>
                           </div>
                       </div>
                   </div>
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
<script src="js/libs/isotope.pkgd.min.js"></script><!-- Sticky sidebar -->
<script src="js/libs/jquery.thim-content-slider.min.js"></script><!-- Slider -->
<script src="js/theme-customs.js"></script><!-- Theme Custom -->

</body>

</html>