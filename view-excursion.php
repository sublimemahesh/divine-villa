<!DOCTYPE html>
<?php
include './class/include.php';
$id = $_GET['id'];
$ATTRACTION = new Attraction($id);
$BANNER = new Banner(4);
?>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $ATTRACTION->title ?> - The Divine Villa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicons -->
         <link rel="shortcut icon" href="images/icons/divine-villa-icon.ico">

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
                            <h1 class="heading_primary"><?php echo $ATTRACTION->title ?></h1>
                            <ul class="breadcrumbs">
                                <li class="item"><a href="./">Home</a></li>
                                <li class="item"><span class="separator"></span></li>
                                <li class="item"><a href="excursions.php">Excursion</a></li>
                                <li class="item"><span class="separator"></span></li>
                                <li class="item active"><?php echo $ATTRACTION->title ?></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="site-content container">
                    <div class="row">
                        <main class="site-main col-sm-12 col-md-9 flex-first">
                            <div class="blog-single-content">
                                <article class="post clearfix">
                                    <div class="post-content">


                                        <div class="post-summary">
                                            <div class="sc-heading">
                                                <p class="first-title">Top </p>
                                                <h3 class="second-title"><?php echo $ATTRACTION->title ?></h3>

                                            </div>
                                            <div class="post-description text-justify">
                                                <?php echo $ATTRACTION->description ?> 
                                            </div>
                                        </div>

                                    </div>
                                </article>
                            </div>

                            <div class="sc-gallery no-gutter no-filter">
                                <div class="wrapper-gallery row" itemscope itemtype="">
                                    <?php
                                    $ATTRACTION_PHOTO = new AttractionPhoto(NULL);
                                    foreach ($ATTRACTION_PHOTO->getAttractionPhotosById($id) as $key => $attraction_photo) {
                                        $key++;

                                        if ($key == 1) {
                                            ?>
                                            <div class="col-md-6">
                                                <div class="row"> 
                                                    <div class="col-sm-12">
                                                        <a href="upload/attraction/gallery/<?php echo $attraction_photo['image_name'] ?>" class="gallery-popup ">
                                                            <img src="upload/attraction/gallery/thumb/<?php echo $attraction_photo['image_name'] ?>" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    }
                                    ?>
                                    <div class="col-md-6">
                                        <div class="row"> 
                                            <?php
                                            $ATTRACTION_PHOTOS = new AttractionPhoto(NULL);
                                            foreach ($ATTRACTION_PHOTOS->getAttractionPhotosById($id) as $key => $attraction_photo) {
                                                $key++;
                                                if ($key > 1 && $key < 6) {
                                                    ?>
                                                    <div class="col-sm-6">
                                                        <a href="upload/attraction/gallery/<?php echo $attraction_photo['image_name'] ?>" class="gallery-popup gallery-mg">
                                                            <img src="upload/attraction/gallery/thumb/<?php echo $attraction_photo['image_name'] ?>" alt=""></a>
                                                    </div>
                                                    <?php
                                                }
                                            }
                                            ?> 

                                        </div>
                                    </div>


                                </div>
                            </div>

                        </main>
                        <aside id="secondary" class="widget-area col-sm-12 col-md-3 sticky-sidebar">
                            <div class="wd wd-categories">
                                <h3 class="wd-title">More Excursions</h3>
                                <ul>
                                    <?php
                                    $ATTRACTION = new Attraction(NULL);
                                    foreach ($ATTRACTION->all() as $attraction) {
                                        ?>
                                        <li><a href="view-excursion.php?id=<?php echo $attraction['id'] ?>"><?php echo $attraction['title'] ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>


                        </aside>

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
        <script src="js/libs/gallery.min.js"></script><!-- gallery -->
        <script src="js/libs/jquery.thim-content-slider.min.js"></script><!-- Slider -->
        <script src="js/theme-customs.js"></script><!-- Theme Custom -->

    </body>
</html>