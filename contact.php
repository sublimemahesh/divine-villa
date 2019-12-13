<!DOCTYPE html>
<?php
include './class/include.php';
$BANNER = new Banner(7);
?>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Contact Us - The Divine Villa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="theme-color" content="#6e2759">
        <!-- Favicons -->
   <link rel="shortcut icon" href="images/icons/icon-divine-villa.ico">
        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" href="css/style.css"><!-- Style -->
        <link href="contact-form/style.css" rel="stylesheet" type="text/css"/>
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
                            <h1 class="heading_primary">Contact Us</h1>
                            <ul class="breadcrumbs">
                                <li class="item"><a href="./">Home</a></li>
                                <li class="item"><span class="separator"></span></li>
                                <li class="item active">Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="site-content no-padding">
                    <div class="page-content">
                        <div class="container">
                            <div class="empty-space"></div>
                            <div class="row tm-flex">
                                <div class="col-sm-6">
                                    <div class="sc-heading">
                                        <p class="first-title">Send a</p>
                                        <h3 class="second-title">Message</h3>
                                        <p class="description">Do you have anything in your mind to tell us? <br>
                                            Please don't hesitate to get in touch to us via our contact form.</p>
                                    </div>

                                    <div class="sc-contact-form">
                                        <div class="form">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Name *</label>
                                                    <input type="text" name="your-name" name="txtFullName" id="txtFullName"  placeholder="Your Name*">
                                                    <div class="col-lg-12">
                                                        <span id="spanFullName"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Email *</label>
                                                    <input type="email" name="txtEmail" id="txtEmail"  placeholder="Your Email*">
                                                    <div class="col-lg-12">
                                                        <span id="spanEmail"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Subject *</label>
                                                    <input type="text" name='txtSubject' id='txtSubject'  placeholder="Your Subject*">
                                                    <div class="col-lg-12">
                                                        <span id="spanSubject"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Message *</label>
                                                    <textarea name='txtMessage' id='txtMessage' cols="30" rows="10"  placeholder="Your message*"></textarea>
                                                    <div class="col-lg-12">
                                                        <span id="spanMessage"></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="  col-md-6"  >
                                                    <label for="comment">Security Code:</label>
                                                    <input  type="text" name="captchacode" id="captchacode" class="form-control input-validater" placeholder="Enter the code " style="color: black">
                                                    <div class="col-lg-12">
                                                        <span id="capspan" ></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"  >
                                                    <?php include("./contact-form/captchacode-widget.php"); ?>
                                                </div>  
                                            </div>  

                                            <input type="submit"  id='btnSubmit' class="submit"   value="Send message">
                                            <div class="col-md-12">
                                                <div id="dismessage" align="center" class="msg-success"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15871.269434566286!2d80.278485!3d6.0197946!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1e62e2ed5e3b1df8!2sVilla%20The%20Divine!5e0!3m2!1sen!2slk!4v1568331501001!5m2!1sen!2slk" width="100%" height="1000" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div> 
                            <div class="empty-space"></div>
                        </div>

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


        <script src="js/libs/bootstrap.min.js"></script><!-- Bootstrap -->
        <script src="js/libs/smoothscroll.min.js"></script><!-- smoothscroll -->
        <script src="js/libs/owl.carousel.min.js"></script><!-- Owl Carousel -->
        <script src="js/libs/jquery.magnific-popup.min.js"></script><!-- Magnific Popup -->
        <script src="js/libs/theia-sticky-sidebar.min.js"></script><!-- Sticky sidebar -->
        <script src="js/libs/counter-box.min.js"></script><!-- counter -->
        <script src="js/libs/moment.min.js"></script><!-- moment -->
        <script src="js/libs/jquery-ui.min.js"></script><!-- ui -->
        <script src="js/libs/daterangepicker.min.js"></script><!-- date -->
        <script src="js/libs/daterangepicker.min-date.min.js"></script><!-- date2 -->
        <script src="js/libs/jquery.thim-content-slider.min.js"></script><!-- Slider -->
        <script src="contact-form/scripts.js" type="text/javascript"></script>
        <script src="js/theme-customs.js"></script><!-- Theme Custom -->




    </body>

</html>