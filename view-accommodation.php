<!DOCTYPE html>
<?php
include './class/include.php';
$id = $_GET['id'];
$ROOM = new Room($id);
$BANNER = new Banner(2);
?>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Accommodation - <?php echo $ROOM->title ?>The Devine Villa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicons -->
        <link rel="shortcut icon" href="images/icons/favicon.png">
        <link rel="stylesheet" href="css/libs/jquery-ui/jquery-ui.min.css">
        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" href="css/style.css"><!-- Style -->

    </head>
    <body class="room single">
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
                            <h1 class="heading_primary"><?php echo $ROOM->title ?></h1>
                            <ul class="breadcrumbs">
                                <li class="item"><a href="./">Home</a></li>
                                <li class="item"><span class="separator"></span></li>
                                <li class="item"><a href="accommodations.php">Accommodation</a></li>
                                <li class="item"><span class="separator"></span></li>
                                <li class="item active"><?php echo $ROOM->title ?></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="site-content container">
                    <div class="room-single row">
                        <main class="site-main col-sm-12 col-md-9 flex-first">
                            <div class="room-wrapper">
                                <div class="room_gallery clearfix">
                                    <div class="camera_wrap camera_emboss" id="camera_wrap">
                                        <?php
                                        $ROOM_PHOTO = new RoomPhoto(NULL);
                                        foreach ($ROOM_PHOTO->getRoomPhotosById($id) as $room_photo) {
                                            ?>
                                            <div  data-src="upload/room/gallery/<?php echo $room_photo['image_name'] ?>" ></div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="title-share clearfix">
                                    <h2 class="title"><?php echo $ROOM->title ?></h2>
                                    <div class="social-share">
                                        <ul>
                                            <li><a class="link facebook" title="Facebook" href="#" rel="nofollow" onclick="window.open(this.href, this.title, 'width=600,height=600,top=200px,left=200px');  return false;" target="_blank"><i class="ion-social-facebook"></i></a></li>
                                            <li><a class="link twitter" title="Twitter" href="#" rel="nofollow" onclick="window.open(this.href, this.title, 'width=600,height=600,top=200px,left=200px');  return false;" target="_blank"><i class="ion-social-twitter"></i></a></li>
                                            <li><a class="link google" title="Google" href="#" rel="nofollow" onclick="window.open(this.href, this.title, 'width=600,height=600,top=200px,left=200px');  return false;" target="_blank"><i class="ion-social-googleplus"></i></a>
                                        </ul>
                                    </div>
                                </div>
                                <div class="room_price">
                                    <span class="price_value price_min">$ <?php echo number_format($ROOM->price, 2) ?></span>
                                    <span class="unit">Night</span>
                                </div>
                                <div class="description">
                                    <?php echo $ROOM->description ?>
                                </div>
                                <div class="room_additinal">
                                    <h3 class="title style-01">AMENITIES AND SERVICES</h3>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <ul>
                                                <li><i class="fa fa-check"></i>Priviliged in Bruges</li>
                                                <li><i class="fa fa-check"></i>High satisfaction</li>
                                                <li><i class="fa fa-check"></i>Unparalleded service</li>
                                                <li><i class="fa fa-check"></i>Aenean sollicitudin</li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul>
                                                <li><i class="fa fa-check"></i>Priviliged in Bruges</li>
                                                <li><i class="fa fa-check"></i>High satisfaction</li>
                                                <li><i class="fa fa-check"></i>Unparalleded service</li>
                                                <li><i class="fa fa-check"></i>Aenean sollicitudin</li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul>
                                                <li><i class="fa fa-check"></i>Priviliged in Bruges</li>
                                                <li><i class="fa fa-check"></i>High satisfaction</li>
                                                <li><i class="fa fa-check"></i>Unparalleded service</li>
                                                <li><i class="fa fa-check"></i>Aenean sollicitudin</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </main>
                        <aside id="secondary" class="widget-area col-sm-12 col-md-3 sticky-sidebar">
                            <div class="wd wd-book-room">
                                <a href="#" class="book-room">Book This Room</a>
                                <div id="form-popup-room" class="form-popup-room">
                                    <div class="popup-container">
                                        <a href="#" class="close-popup"><i class="ion-android-close"></i></a>
                                        <form id="hotel-popup-results" name="hb-search-single-room" class="hotel-popup-results">
                                            <div class="room-head">
                                                <h3 class="room-title">Classic Room</h3>
                                                <p class="description">Please enter the information to complete the book this room.</p>
                                            </div>
                                            <div class="search-room-popup">
                                                <ul class="form-table clearfix">
                                                    <li class="form-field">
                                                        <input type="text" name="name" id="name" required class="name" placeholder="Your Name*">
                                                    </li>
                                                    <li class="form-field">
                                                        <input type="email" name="email" id="email" required class="email" placeholder="Your Email*">
                                                    </li>
                                                    <li class="form-field">
                                                        <input type="tel" name="phone" id="phone" required class="phone" placeholder="Your Phone*">
                                                    </li>
                                                    <li class="form-field">
                                                        <input type="text" name="add" id="add" required class="add" placeholder="Your Address*">
                                                    </li>
                                                    <li class="form-field">
                                                        <input type="text" name="check_in_date" id="popup_check_in_date" required class="check_in_date" placeholder="Arrival Date">
                                                    </li>
                                                    <li class="form-field">
                                                        <input type="text" name="check_out_date" id="popup_check_out_date" required class="check_out_date " placeholder="Departure Date">
                                                    </li>

                                                    <li class="form-field room-submit">
                                                        <button id="check_date" class="submit" type="submit">Book Now</button>
                                                    </li>
                                                </ul>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="wd wd-check-room">
                                <h3 class="title">CHECK AVAILABILITY</h3>
                                <form name="search-rooms" class="wd-search-room datepicker" action="http://html.thimpress.com/hotelwp/rooms-search.html">
                                    <ul class="form-table">
                                        <li class="form-field">
                                            <input type="text" name="check_in_date" id="check_in_date" required class="check_in_date" placeholder="Check in">
                                        </li>
                                        <li class="form-field">
                                            <input type="text" name="check_out_date" id="check_out_date" required class="check_out_date " placeholder="Check out">
                                        </li>
                                        <li class="select-field">
                                            <select name="adults_capacity" required>
                                                <option value="">Guest</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </li>
                                    </ul>
                                    <div class="room-submit">
                                        <button class="submit" type="submit">Check Availability</button>
                                    </div>
                                </form>
                            </div>
                            <div class="wd wd-categories">
                                <h3 class="wd-title">Room Types</h3>
                                <ul>
                                    <li><a href="#">Infinity Room</a></li>
                                    <li><a href="#">Bawa Room</a></li>
                                    <li><a href="#">Garden Room</a></li>
                                    <li><a href="#">Lanka Room</a></li>
                                    <li><a href="#">Cosy Room</a></li>
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
        <script src="js/libs/jquery-1.12.4.min.js"></script><!-- jquery -->
        <script src="js/libs/stellar.min.js"></script><!-- parallax -->


        <script src="js/libs/bootstrap.min.js"></script><!-- Bootstrap -->
        <script src="js/libs/smoothscroll.min.js"></script><!-- smoothscroll -->
        <script src="js/libs/owl.carousel.min.js"></script><!-- Owl Carousel -->
        <script src="js/libs/jquery.magnific-popup.min.js"></script><!-- Magnific Popup -->
        <script src="js/libs/theia-sticky-sidebar.min.js"></script><!-- Sticky sidebar -->
        <script src="js/libs/counter-box.min.js"></script><!-- counter -->
        <script src="js/libs/jquery.flexslider-min.js"></script><!-- flexslider -->
        <script src="js/libs/jquery.thim-content-slider.min.js"></script><!-- Slider -->
        <script src="js/libs/gallery.min.js"></script><!-- gallery -->
        <script src="js/libs/moment.min.js"></script><!-- moment -->
        <script src="js/libs/jquery-ui.min.js"></script><!-- ui -->
        <script src="js/libs/daterangepicker.min.js"></script><!-- date -->
        <script src="js/libs/daterangepicker.min-date.min.js"></script><!-- date2 -->
        <script src="js/theme-customs.js"></script><!-- Theme Custom -->

    </body>

</html>