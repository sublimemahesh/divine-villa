<!DOCTYPE html>
<?php
include './class/include.php';
$BANNER = new Banner(5);
?>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Gallery - The Divine Villa</title>
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

            <?php include './header.php' ?>

            <!-- Main Content -->
            <div id="main-content">
                <div class="page-title">
                    <div class="page-title-wrapper" data-stellar-background-ratio="0.5" style="background-image: url(upload/banner/<?php echo $BANNER->image_name ?>) ">
                        <div class="content container">
                            <h1 class="heading_primary">Gallery</h1>
                            <ul class="breadcrumbs">
                                <li class="item"><a href="./">Home</a></li>
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
                                    <li><a href="#" class="filter active">All</a></li>
                                    <?php
                                    $PHOT_ALBUM = new PhotoAlbum(NULL);
                                    foreach ($PHOT_ALBUM->all()as $key => $album) {
                                        ?>

                                        <li><a href="javascript:;" class="filter" data-filter=".filter-<?php echo $album['id']; ?>"> <?php echo $album['title']; ?></a></li>

                                        <?php
                                    }
                                    ?>
                                </ul>
                                <div class="wrapper-gallery row" itemscope itemtype="http://schema.org/ItemList">
                                    <?php
                                    $ALBUM_PHOTO = new AlbumPhoto(NULL);
                                    foreach ($ALBUM_PHOTO->all() as $album_photo) {
                                        ?>
                                        <div class="col-sm-3 filter-<?php echo $album_photo['album']; ?>">
                                            <a href="upload/photo-album/gallery/<?php echo $album_photo['image_name'] ?>" class="gallery-popup">
                                                <img src="upload/photo-album/gallery/thumb/<?php echo $album_photo['image_name'] ?>" alt=""></a>
                                        </div>
                                    <?php } ?>

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