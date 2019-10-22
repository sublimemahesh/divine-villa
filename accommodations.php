<!DOCTYPE html><?phpinclude './class/include.php';?><html lang="en">    <head>        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />        <title>Accommodation - The Divine Villa</title>        <meta name="viewport" content="width=device-width, initial-scale=1.0">         <!-- Favicons -->        <link rel="shortcut icon" href="images/icons/favicon.png">        <!-- REVOLUTION STYLE SHEETS -->        <link rel="stylesheet" href="css/style.css"><!-- Style -->    </head>    <body class="room archive">        <div id="preloading">            <div class="loading-icon">                <div class="sk-folding-cube">                    <div class="sk-cube1 sk-cube"></div>                    <div class="sk-cube2 sk-cube"></div>                    <div class="sk-cube4 sk-cube"></div>                    <div class="sk-cube3 sk-cube"></div>                </div>            </div>        </div>        <!-- Wrapper content -->        <div id="wrapper-container" class="content-pusher">            <div class="overlay-close-menu"></div>            <!-- Header -->            <?php            include 'header.php';            ?>            <!-- Main Content -->            <div id="main-content">                <div class="page-title">                    <div class="page-title-wrapper" data-stellar-background-ratio="0.5">                        <div class="content container">                            <h1 class="heading_primary">Accommodations</h1>                            <ul class="breadcrumbs">                                <li class="item"><a href=./">Home</a></li>                                <li class="item"><span class="separator"></span></li>                                <li class="item active">Accommodations</li>                            </ul>                        </div>                    </div>                </div>                <div class="site-content ">                    <div class="container">                         <div class="sc-heading">                            <p class="first-title">Luxury</p>                            <h3 class="second-title"> Accommodations</h3>                            <p class="description">Lorem ipsum dolor sit amet, consecte sit amet,  <br>                                Lorem ipsum dolor sit amet, consecte sit amet consecte sit amet,</p>                        </div>                        <div style="height: 60px;"></div>                        <div class="rooms-content layout-grid style-01">                            <div class="row">                                <?php                                $ROOM = new Room(NULL);                                foreach ($ROOM->all() as $room) {                                    ?>                                    <div class="room col-sm-4 clearfix">                                        <div class="room-item">                                            <div class="room-media">                                                <a href="view-accommodation.php?id=<?php echo $room['id'] ?>"><img src="upload/room/<?php echo $room['image_name'] ?>" alt=""></a>                                            </div>                                            <div class="room-summary">                                                <h3 class="room-title">                                                    <a href="view-accommodation.php?id=<?php echo $room['id'] ?>"><?php echo $room['title'] ?></a>                                                </h3>                                                <div class="room-price">From: <span class="price">$ <?php echo number_format($room['price'], 2) ?></span></div>                                                <p class="room-description text-justify">                                                    <?php echo substr($room['short_description'], 0, 120) ?>...                                                </p>                                                <div class="room-meta clearfix">                                                    <a href="view-accommodation.php?id=<?php echo $room['id'] ?>" class="btn-icon">Read more</a>                                                </div>                                            </div>                                        </div>                                    </div>                                <?php } ?>                            </div>                        </div>                    </div>                </div>            </div>            <!-- Footer -->            <?php            include 'footer.php';            ?>        </div><!-- wrapper-container -->        <div id="back-to-top">            <i class="ion-ios-arrow-up" aria-hidden="true"></i>        </div>        <!-- Scripts -->        <script src="js/libs/jquery.min.js"></script><!-- jQuery -->        <script src="js/libs/stellar.min.js"></script><!-- parallax -->        <script src="js/libs/jquery-ui.min.js"></script><!-- ui -->        <script src="js/libs/daterangepicker.min.js"></script><!-- date -->        <script src="js/libs/daterangepicker.min-date.min.js"></script><!-- date2 -->        <script src="js/libs/bootstrap.min.js"></script><!-- Bootstrap -->        <script src="js/libs/smoothscroll.min.js"></script><!-- smoothscroll -->        <script src="js/libs/owl.carousel.min.js"></script><!-- Owl Carousel -->        <script src="js/libs/jquery.magnific-popup.min.js"></script><!-- Magnific Popup -->        <script src="js/libs/theia-sticky-sidebar.min.js"></script><!-- Sticky sidebar -->        <script src="js/libs/counter-box.min.js"></script><!-- counter -->        <script src="js/libs/jquery.thim-content-slider.min.js"></script><!-- Slider -->        <script src="js/theme-customs.js"></script><!-- Theme Custom -->    </body></html>