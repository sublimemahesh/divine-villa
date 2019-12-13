<!DOCTYPE html>
<?php
include './class/include.php';
$PAGES = new Page(1);
?>
<html lang="en">



    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>The Divine Villa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="theme-color" content="#6e2759">

        <!-- Favicons -->
        <link rel="shortcut icon" href="images/icons/icon-divine-villa.ico">

        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" type="text/css" href="css/libs/revolution/settings.css">
        <link rel="stylesheet" href="css/style.css"><!-- Style -->

    </head>
    <body class="demo-1 home">

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
            <?php
            include 'header.php';
            ?>

            <!-- Main Content -->
            <div id="main-content" class="main-content">
                <div id="home-main-content" class="home-main-content home-1">
                    <!-- START REVOLUTION SLIDER -->
                    <?php
                    include 'slider.php';
                    ?>
                    <!-- END REVOLUTION SLIDER -->

                    <div class="container">
                        <div class="sc-hb-rooms-search style-01">
                            <div class="hotel-booking-search style-01">
                                <form action="" class="hb-search-form">
                                    <ul class="hb-form-table">
                                        <li><input type="text" id="multidate" class="multidate" value="" data-date-min="6" /></li>
                                        <li class="hb-form-field hb-form-check-in">
                                            <div class="label">Check-In</div>
                                            <div class="hb-form-field-input hb_input_field">
                                                <input type="text" id="day" class="day" value=""  style="width: 68px;" />
                                                <input id="month" class="month"  type="text" value="" />
                                                <input type="hidden" name="check_in_date" id="check_in_date" class="check-date hasDatepicker" value="" />
                                            </div>
                                        </li>

                                        <li class="hb-form-field hb-form-check-out">
                                            <div class="label">Check-Out</div>
                                            <div class="hb-form-field-input hb_input_field">
                                                <input type="text" id="day2" class="day" value=""  style="width: 83px;" />
                                                <input id="month2" class="month"  type="text" value="" />
                                                <input type="hidden" name="check_out_date" id="check_out_date" class="check-date hasDatepicker" value="" />
                                            </div>
                                        </li>

                                        <li class="hb-form-field hb-form-number">
                                            <div class="label">Number</div>
                                            <div id="guests" class="hb-form-field-input hb_input_field">
                                                <input type="text" id="number" class="day" value="01" />
                                                <input class="month" type="text" value="Guests" />
                                            </div>
                                            <div class="hb-form-field-list">
                                                <div class="hb-form-field-input hb-guest-field">
                                                    <select name="adults_capacity" tabindex="-1" aria-hidden="true">
                                                        <option value="47">1</option>
                                                        <option value="45">2</option>
                                                        <option value="56">3</option>
                                                        <option value="57">4</option>
                                                        <option value="58">5</option>
                                                        <option value="59">6</option>
                                                        <option value="60">7</option>
                                                        <option value="61">8</option>
                                                        <option value="62">9</option>
                                                    </select>
                                                    <span class="name">Guests</span>
                                                    <span class="number-icons goUp"><i class="ion-plus"></i></span>
                                                    <span class="number-icons goDown"><i class="ion-minus"></i></span>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                    <p class="hb-submit">
                                        <span class="contact-info">Need Help: <span>(+94) 71 580 0337</span></span>
                                        <button type="submit">Check Availability</button>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="empty-space"></div>
                    <div class="h1-introduce">
                        <div class="container">
                            <div class="row" style="border: 3px solid #6e2759; padding-top: 15px;padding-bottom: 15px;">


                                <div class="col-sm-6">
                                    <div class="sc-heading style-02">
                                        <h3 class="title" style="color: #6e2759;">Welcome.</h3>
                                        <div class="description">
                                            <?php echo $PAGES->description ?>
                                        </div>
                                        <div class="head-button">
                                            <a href="about.php" class="more-info">More Info</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="sc-img-box row">
                                        <div class="col-sm-6">
                                            <a href="#"><img src="images/home/h1-img1.jpg" alt=""></a>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="#"><img src="images/home/h1-img2.jpg" alt=""></a>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="empty-space"></div>
                    <div class="h1-rooms">
                        <div class="sc-content-overlay">
                            <div class="empty-space"></div>
                            <div class="container">
                                <div class="sc-heading style-01 text-center">
                                    <h3 class="title">Accommodations</h3>
                                    <p class="description">For anything that brings couple, family, friends together to celebrate an occasion.</p>
                                </div>
                                <div class="sc-rooms style-01">
                                    <div class="rooms-content layout-grid style-01">
                                        <div class="sc-room style-01">
                                            <div class="row  room-slider owl-carousel owl-theme">
                                                <?php
                                                $ROOM = new Room(NULL);
                                                foreach ($ROOM->all() as $room) {
                                                    ?>

                                                    <div class="item">
                                                        <div class="room   clearfix">
                                                            <div class="room-item">
                                                                <div class="room-media">
                                                                    <a href="view-accommodation.php?id=<?php echo $room['id'] ?>"><img src="upload/room/<?php echo $room['image_name'] ?>" alt=""></a>
                                                                </div>
                                                                <div class="room-summary">
                                                                    <h3 class="room-title">
                                                                        <a href="view-accommodation.php?id=<?php echo $room['id'] ?>"><?php echo $room['title'] ?></a>
                                                                    </h3>
                                                                    <div class="room-price">From: <span class="price">$ <?php echo number_format($room['price'], 2) ?></span></div>
                                                                    <p class="room-description text-justify">
                                                                        <?php echo substr($room['short_description'], 0, 120) ?>...
                                                                    </p>
                                                                    <div class="room-meta clearfix">
                                                                        <a href="view-accommodation.php?id=<?php echo $room['id'] ?>" class="btn-icon">Read more</a>
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
                            </div>
                            <div class="empty-space"></div>
                        </div>
                    </div>

                    <div class="service-banner">
                        <div class="sc-content-overlay" style="background-color: rgba(0, 0, 0, 0.48);">
                            <div class="container">
                                <div class="empty-space"></div>
                                <div class="sc-heading style-01 text-center">
                                    <h3 class="title">Villa Facilities</h3>
                                    <p class="description">
                                        We offer, an exceptional villa management and comprehensive services which are tailored specifically to the requirements of each individual guest.
                                    </p>
                                </div>
                                <div class="sc-posts style-01">
                                    <div class="row">
                                        <div class="item  ">
                                            <?php
                                            $FACILITY = new Facility(NULL);
                                            foreach ($FACILITY->all() as $key => $facility) {
                                                if ($key < 6) {
                                                    ?>
                                                    <div class="post col-sm-6 col-md-3">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="view-facility.php?id=<?php echo $facility['id'] ?>"><img src="upload/facility/<?php echo $facility['image_name'] ?>" alt=""></a>
                                                            </div>
                                                            <div class="content">
                                                                <h3 class="title"> <a href="view-facility.php?id=<?php echo $facility['id'] ?>"><?php echo $facility['title'] ?></a></h3>
                                                                <div class="summary"><?php echo $facility['short_description'] ?>
                                                                    <a href="view-facility.php?id=<?php echo $facility['id'] ?>" style="color: white;"><p class="pull-right"><b>View More </b></p></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                            }
                                            ?>


                                            <div class="post col-sm-6 col-md-3">
                                                <div class="inner">
                                                    <div class="thumbnail">
                                                        <a href="view-villa-equipment.php"><img src="upload/facility/-312574177_190890566729_1571821570_n.jpg" alt=""></a>
                                                    </div>
                                                    <div class="content">
                                                        <h3 class="title"> <a href="view-villa-equipment.php">Villa Equipment</a></h3>
                                                        <div class="summary">Ammenities and Equipment
                                                            <a href="view-villa-equipment.php" style="color: white;"><p class="pull-right"><b>View More </b></p></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post col-sm-6 col-md-3">
                                                <div class="inner">
                                                    <div class="thumbnail">
                                                        <a href="view-conciergerie-service.php"><img src="upload/facility/-468900717_190734240189_1571808247_n.jpg" alt=""></a>
                                                    </div>
                                                    <div class="content">
                                                        <h3 class="title"> <a href="view-conciergerie-service.php">Conciergerie Services</a></h3>
                                                        <div class="summary">Our staff Management dedicated to provide a Personalized Service ...
                                                            <a href="view-conciergerie-service.php" style="color: white;"><p class="pull-right"><b>View More </b></p></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                                <div class="empty-space"></div>
                            </div>
                        </div>
                    </div>



                    <!--                    <div class="h1-banner h1-banner2">
                                            <div class="sc-content-overlay">
                                                <div class="container rectangle-overlay2">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <div class="sc-box style-01 text-center">
                                                                <h3 class="title"> Villa<br>
                                                                    Facilities</h3>
                                                                <p class="description">Choose the package you would like to offer to your clients and
                                                                    <br> send us an inquiry using the contact form.</p>
                                                                <div class="button-box"><a href="#" class="btn-box">Get it now</a></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <div class="box-facilities">
                                                                <div class="row">
                    
                                                                    <div class="box-item col-md-4">
                                                                        <img src="images/facilities/005-wifi.png">
                                                                        <h5 class="box-title">Wifi</h5>
                                                                        <p class="description">Lose yourself in the lush textures, rich colors and French amenities.</p>
                                                                    </div>
                                                                    <div class="box-item col-md-4">
                                                                        <img src="images/facilities/004-tv.png">
                                                                        <h5 class="box-title">SAT TV</h5>
                                                                        <p class="description">Finnish sauna and gym, comfortable massage rooms.</p>
                                                                    </div>
                                                                    <div class="box-item col-md-4">
                                                                        <img src="images/facilities/002-cctv.png">
                                                                        <h5 class="box-title">CCTV</h5>
                                                                        <p class="description">Discover our global cuisine, set menus, extensive wine list.</p>
                                                                    </div>
                                                                    <div class="box-item col-md-4">
                                                                        <img src="images/facilities/003-ac.png">
                                                                        <h5 class="box-title">AC</h5>
                                                                        <p class="description">Finnish sauna and gym, comfortable massage rooms.</p>
                                                                    </div>
                                                                    <div class="box-item col-md-4">
                                                                        <img src="images/facilities/006-wheelchair.png">
                                                                        <h5 class="box-title">Disable access</h5>
                                                                        <p class="description">For the perfect family holidays.</p>
                                                                    </div>
                                                                    <div class="box-item col-md-4">
                                                                        <img src="images/facilities/001-car.png">
                                                                        <h5 class="box-title">Free Parking</h5>
                                                                        <p class="description">For the perfect family holidays.</p>
                                                                    </div>
                    
                                                                </div>
                                                            </div>
                    
                                                        </div>
                    
                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->

                    <div class="group-destination">
                        <div class="sc-content-overlay">
                            <div class="container">
                                <div class="empty-space"></div>
                                <div class="sc-heading style-01 text-center">
                                    <h3 class="title">Top Excursion</h3>
                                    <p class="description">  We create truly memorable experiences that you will cherish forever..</p>
                                </div>
                                <div class="sc-posts style-01 auto-height">
                                    <div class="item row">
                                        <?php
                                        $ATTRACTION = new Attraction(NULL);
                                        foreach ($ATTRACTION->all() as $key => $attraction) {
                                            if ($key < 6) {
                                                ?>
                                                <div class="post col-sm-6 col-md-4">
                                                    <div class="inner">
                                                        <div class="thumbnail">
                                                            <a href="view-excursion.php?id=<?php echo $attraction['id'] ?>"><img src="upload/attraction/<?php echo $attraction['image_name'] ?>" alt=""></a>
                                                        </div>
                                                        <div class="content">
                                                            <h3 class="title"> <a href="view-excursion.php?id=<?php echo $attraction['id'] ?>"><?php echo $attraction['title'] ?></a></h3>
                                                            <div class="summary text-justify">
                                                                <?php echo $attraction['short_description'] ?>... </div>
                                                            <a href="view-excursion.php?id=<?php echo $attraction['id'] ?>" class="read-more more-info">More Info</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="empty-space"></div>
                    <div class="container">
                        <div class="sc-heading style-01 text-center">
                            <h3 class="title">Villa Equipment</h3>
                            <p class="description">Home sweet home.</p>
                        </div>
                        <div class="sc-list-info">
                            <div class="row">
                                <div class="col-sm-4">
                                    <ul>
                                        <li><img src="images/facilities/001-swimmer.png">Infinity Swiming Pool </li>
                                        <li><img src="images/facilities/004-billiard.png">Snooker </li>
                                        <li><img src="images/facilities/food.png">Nespresso Corner </li>
                                        <li><img src="images/facilities//bed-lock.png">Disable Access  & Bedroom  </li>
                                        <li><img src="images/facilities/babycost.png">Baby Cost & High Char  </li>




                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <ul>
                                        <li><img src="images/facilities/005-wifi.png">Wifi </li>
                                        <li><img src="images/facilities/printer.png">Printer & Scanner    </li>
                                        <li><img src="images/facilities/003-ac.png">A/C </li> 
                                        <li><img src="images/facilities/004-tv.png"> SAT TV $ DVD Player </li>
                                        <li><img src="images/facilities/generator.png"> Back-Up Generator   </li>

                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <ul>

                                        <li><img src="images/facilities/lock.png"> Safety Locker  </li> 
                                        <li><img src="images/facilities/001-car.png"> Car Park </li>
                                        <li><img src="images/facilities/002-cctv.png">CCTV & Security  </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--<div class="h1-bg-testimonial">-->
                    <div class="h2-testimonials">
                        <div class="sc-content-overlay">
                            <div class="container rectangle-overlay">
                                <div class="sc-testimonials style-01">
                                    <h3 class="heading">Guest Testimonials & Reviews</h3>
                                    <div class="testimonial-slider" data-itemsvisible="3" data-nav="false">
                                        <?php
                                        $COMMENT = new Comments(NULL);
                                        foreach ($COMMENT->activeComments() as $comment) {
                                            ?>
                                            <div class="item">
                                                <div class="content">
                                                    <div class="image">
                                                        <img src="upload/comments/<?php echo $comment['image_name'] ?>" alt="">
                                                    </div>
                                                    <div class="rating-star"></div>
                                                    <div class="description">
                                                        <?php echo $comment['comment'] ?>
                                                    </div>
                                                    <div class="user-info">
                                                        <h4 class="name"><?php echo $comment['name'] ?></h4>
                                                        <div class="regency"><?php echo $comment['country'] ?></div>
                                                    </div>

                                                </div>
                                            </div> 
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="group-destination">
                        <div class="sc-content-overlay">
                            <div class="container">
                                <div class="empty-space"></div>
                                <div class="sc-heading style-01 text-center">
                                    <h3 class="title">Our Gallery</h3>
                                    <p class="description">For anything that brings people together to celebrate an occasion, we create truly memorable experiences that you will cherish forever</p>
                                </div>

                                <div class="sc-gallery style-01">
                                    <div class="gallery-slider owl-carousel owl-theme">
                                        <?php
                                        $PHOTO_ALBUM = new AlbumPhoto(NULL);
                                        foreach ($PHOTO_ALBUM->all() as $photo_album) {
                                            ?>
                                            <div class="item">
                                                <div class="gallery">
                                                    <a href="#gallery-1" class="btn-gallery"><img src="upload/photo-album/gallery/thumb/<?php echo $photo_album['image_name'] ?>" alt=""></a>
                                                    <div id="gallery-1" class="hidden">
                                                        <a  href="upload/photo-album/gallery/<?php echo $photo_album['image_name'] ?>"> </a>
                                                    </div> 
                                                </div>
                                                <!--                                                <div class="content">
                                                                                                    <h4 class="title"><a href="#">Sigiriya</a></h4>
                                                                                                </div>-->
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="empty-space"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <?php
            include 'footer.php';
            ?>
        </div><!-- wrapper-container -->

        <div id="back-to-top">
            <i class="ion-ios-arrow-up" aria-hidden="true"></i>
        </div>


        <!-- Scripts -->
        <script src="js/libs/jquery-1.12.4.min.js"></script><!-- jQuery -->
        <script src="js/libs/bootstrap.min.js"></script><!-- Bootstrap -->
        <script src="js/libs/smoothscroll.min.js"></script><!-- smoothscroll -->
        <script src="js/libs/owl.carousel.min.js"></script><!-- Owl Carousel -->
        <script src="js/libs/jquery.magnific-popup.min.js"></script><!-- Magnific Popup -->
        <script src="js/libs/theia-sticky-sidebar.min.js"></script><!-- Sticky sidebar -->
        <script src="js/libs/counter-box.min.js"></script><!-- counter -->
        <script src="js/libs/stellar.min.js"></script><!-- parallax -->
        <script src="js/libs/moment.min.js"></script><!-- moment -->
        <script src="js/libs/jquery-ui.min.js"></script><!-- ui -->
        <script src="js/libs/daterangepicker.min.js"></script><!-- date -->
        <script src="js/libs/daterangepicker.min-date.min.js"></script><!-- date2 -->
        <script src="js/libs/jquery.thim-content-slider.min.js"></script><!-- Slider -->
        <script src="js/theme-customs.js"></script><!-- Theme Custom -->

        <!-- REVOLUTION JS FILES -->
        <script  src="js/libs/revolution/jquery.themepunch.tools.min.js"></script>
        <script src="js/libs/revolution/jquery.themepunch.revolution.min.js"></script>

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
        <script src="js/libs/revolution/extensions/revolution.extension.actions.min.js"></script>
        <script src="js/libs/revolution/extensions/revolution.extension.carousel.min.js"></script>
        <script src="js/libs/revolution/extensions/revolution.extension.kenburn.min.js"></script>
        <script src="js/libs/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="js/libs/revolution/extensions/revolution.extension.migration.min.js"></script>
        <script src="js/libs/revolution/extensions/revolution.extension.navigation.min.js"></script>
        <script src="js/libs/revolution/extensions/revolution.extension.parallax.min.js"></script>
        <script src="js/libs/revolution/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="js/libs/revolution/extensions/revolution.extension.video.min.js"></script>

        <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
            }

            $('.translation-links a').click(function () {

                var lang = $(this).data('lang');
                var $frame = $('.goog-te-menu-frame:first');
                if (!$frame.size()) {
                    alert("Error: Could not find Google translate frame.");
                    return false;
                }
                $frame.contents().find('.goog-te-menu2-item span.text:contains(' + lang + ')').get(0).click();
                return false;
            });
        </script> 



        <script>function setREVStartSize(e) {
                try {
                    e.c = jQuery(e.c);
                    var i = jQuery(window).width(), t = 9999, r = 0, n = 0, l = 0, f = 0, s = 0, h = 0;
                    if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function (e, f) {
                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                        var u = (e.c.width(), jQuery(window).height());
                        if (void 0 != e.fullScreenOffsetContainer) {
                            var c = e.fullScreenOffsetContainer.split(",");
                            if (c)
                                jQuery.each(c, function (e, i) {
                                    u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                                }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                        }
                        f = u
                    } else
                        void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                    e.c.closest(".rev_slider_wrapper").css({height: f})
                } catch (d) {
                    console.log("Failure at Presize of Slider:" + d)
                }
            }
            ;</script>

        <script>
            var revapi4,
                    tpj;
            (function () {
                if (!/loaded|interactive|complete/.test(document.readyState))
                    document.addEventListener("DOMContentLoaded", onLoad);
                else
                    onLoad();

                function onLoad() {
                    if (tpj === undefined) {
                        tpj = jQuery;
                        if ("off" == "on")
                            tpj.noConflict();
                    }
                    if (tpj("#rev_slider_4_1").revolution == undefined) {
                        revslider_showDoubleJqueryError("#rev_slider_4_1");
                    } else {
                        revapi4 = tpj("#rev_slider_4_1").show().revolution({
                            sliderType: "standard",
                            sliderLayout: "fullwidth",
                            dottedOverlay: "none",
                            delay: 9000,
                            navigation: {
                                keyboardNavigation: "off",
                                keyboard_direction: "horizontal",
                                mouseScrollNavigation: "off",
                                mouseScrollReverse: "default",
                                onHoverStop: "off",
                                arrows: {
                                    style: "zeus",
                                    enable: true,
                                    hide_onmobile: false,
                                    hide_onleave: false,
                                    tmp: '<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
                                    left: {
                                        h_align: "left",
                                        v_align: "center",
                                        h_offset: 30,
                                        v_offset: 0
                                    },
                                    right: {
                                        h_align: "right",
                                        v_align: "center",
                                        h_offset: 20,
                                        v_offset: 0
                                    }
                                }
                                ,
                                bullets: {
                                    enable: true,
                                    hide_onmobile: false,
                                    style: "hermes",
                                    hide_onleave: false,
                                    direction: "horizontal",
                                    h_align: "center",
                                    v_align: "bottom",
                                    h_offset: 0,
                                    v_offset: 100,
                                    space: 10,
                                    tmp: ''
                                }
                            },
                            viewPort: {
                                enable: true,
                                outof: "wait",
                                visible_area: "80%",
                                presize: false
                            },
                            responsiveLevels: [1240, 1024, 778, 480],
                            visibilityLevels: [1240, 1024, 778, 480],
                            gridwidth: [1240, 1024, 778, 480],
                            gridheight: [672, 600, 500, 400],
                            lazyType: "none",
                            shadow: 0,
                            spinner: "off",
                            stopLoop: "off",
                            stopAfterLoops: -1,
                            stopAtSlide: -1,
                            shuffle: "off",
                            autoHeight: "off",
                            disableProgressBar: "on",
                            hideThumbsOnMobile: "off",
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            debugMode: false,
                            fallbacks: {
                                simplifyAll: "off",
                                nextSlideOnWindowFocus: "off",
                                disableFocusListener: false,
                            }
                        });
                    }
                    ;
                    /* END OF revapi call */

                }
                ;
                /* END OF ON LOAD FUNCTION */
            }());
            /* END OF WRAPPING FUNCTION */
        </script>

        <script>
            var d = new Date();
            document.getElementById("day").setAttribute('value', (d.getDate()) + '.');
            document.getElementById("month").setAttribute('value', format_month());
            document.getElementById("multidate").setAttribute('value', format_full());

            document.getElementById("day2").setAttribute('value', (d.getDate() + 1) + '.');
            document.getElementById("month2").setAttribute('value', format_month());

            function format_full() {
                var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'September', 'November', 'December'];
                return months[d.getMonth()] + ' ' + d.getDate() + ', ' + d.getFullYear();
            }
            function format_month() {
                var months = ['Jan', 'Feb', 'March', 'April', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                return months[d.getMonth()] + '. ' + d.getFullYear();
            }

        </script>


    </body>

</html>