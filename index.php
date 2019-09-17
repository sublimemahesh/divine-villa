<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>The Divine Villa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicons -->
        <link rel="shortcut icon" href="images/icons/favicon.png">

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
                                        <h3 class="title" style="color: #6e2759;">Welcome</h3>
<!--                                        <span class="dark-title">WELCOME TO</span>-->
                                        <div class="description">



                                            <p>The pearl of Indian Ocean in a place to be, will invite you for a paradise experience in
                                                the Southern West Province close to Unawatuna and Galle.</p>
                                            <p>We will welcome you in a luxury boutique villa with an outstanding architectural
                                                designs combining wild life, beautiful Ocean scenic view and paddy fields.</p>
                                            <p>The Divine Luxury Boutique Villa will provide you the best in class services
                                                combined with and unbelievable panoramic view from a top hill location.</p>
                                        </div>
                                        <div class="head-button">
                                            <a href="#" class="more-info">More Info</a>
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
                    <div class="service-banner">
                        <div class="sc-content-overlay" style="background-color: rgba(0, 0, 0, 0.48);">
                            <div class="container">
                                <div class="empty-space"></div>
                                <div class="sc-heading style-01 text-center">
                                    <h3 class="title">Awesome Facilities</h3>
                                    <p class="description">For anything that brings people together to celebrate an occasion, we create truly memorable experiences that you will cherish forever</p>
                                </div>
                                <div class="sc-posts style-01">
                                    <div class="row">
                                        <div class="item col-sm-12 col-md-6">
                                            <div class="post col-sm-6 col-md-6">
                                                <div class="inner">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="images/home/vegi.jpg" alt=""></a>
                                                    </div>
                                                    <div class="content">
                                                       
                                                        <h3 class="title"> <a href="">Restaurant Including Vegetarian</a></h3>
                                                        <div class="summary">We continuously strive to enhance our living...</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post col-sm-6 col-md-6">
                                                <div class="inner">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="images/home/service-7.jpg" alt=""></a>
                                                    </div>
                                                    <div class="content">
                                                     
                                                        <h3 class="title"> <a href="#">Mountain Bikes</a></h3>
                                                        <div class="summary">We continuously strive to enhance our living...</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post col-sm-6 col-md-6">
                                                <div class="inner">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="images/home/spa2.jpg" alt=""></a>
                                                    </div>
                                                    <div class="content">
                                                      
                                                        <h3 class="title"> <a href="#">Spa Pavillon</a></h3>
                                                        <div class="summary">We continuously strive to enhance our living...</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post col-sm-6 col-md-6">
                                                <div class="inner">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="images/home/service-2.jpg" alt=""></a>
                                                    </div>
                                                    <div class="content">
                                                       
                                                        <h3 class="title"> <a href="#">Fitness Pavillon</a></h3>
                                                        <div class="summary">We continuously strive to enhance our living...</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-sm-12 col-md-6">
                                            <div class="post col-sm-6 col-md-6">
                                                <div class="inner">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="images/home/service-2.jpg" alt=""></a>
                                                    </div>
                                                    <div class="content">
                                                      
                                                        <h3 class="title"> <a href="">Meditation Area</a></h3>
                                                        <div class="summary">We continuously strive to enhance our living...</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post col-sm-6 col-md-6">
                                                <div class="inner">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="images/home/service-6.jpg" alt=""></a>
                                                    </div>
                                                    <div class="content">
                                                        
                                                        <h3 class="title"> <a href="#">Sri Lankan Cocking Lessons</a></h3>
                                                        <div class="summary">We continuously strive to enhance our living...</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post col-sm-6 col-md-6">
                                                <div class="inner">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="images/home/tea-pluckers.jpg" alt=""></a>
                                                    </div>
                                                    <div class="content">
                                                       
                                                        <h3 class="title"> <a href="#">Plucking Of The Leaves</a></h3>
                                                        <div class="summary">We continuously strive to enhance our living...</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post col-sm-6 col-md-6">
                                                <div class="inner">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="images/home/25-conciergeries-1030x583.jpeg" alt=""></a>

                                                    </div>
                                                    <div class="content">
                                                     
                                                        <h3 class="title"> <a href="#">Conciergerie Services</a></h3>
                                                        <div class="summary">We continuously strive to enhance our living...</div>
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

                    <div class="h1-rooms">
                        <div class="sc-content-overlay">
                            <div class="empty-space"></div>
                            <div class="container">
                                <div class="sc-heading style-01 text-center">
                                    <h3 class="title">Our Rooms</h3>
                                    <p class="description">For anything that brings people together to celebrate an occasion, we create truly memorable experiences that you will cherish forever</p>
                                </div>
                                <div class="sc-rooms style-01">
                                    <div class="rooms-content layout-grid style-01">
                                        <div class="row">
                                            <div class="room col-sm-4 clearfix">
                                                <div class="room-item">
                                                    <div class="room-media">
                                                        <a href="#"><img src="images/gallery/1.jpg" alt=""></a>
                                                    </div>
                                                    <div class="room-summary">
                                                        <h3 class="room-title">
                                                            <a href="#">Classic Room</a>
                                                        </h3>
                                                        <div class="room-price">From: <span class="price">$100.0</span></div>
                                                        <p class="room-description">Lorem ipsum dolor sit amet, consecte adipiscing elit, sed diam nonummy wisi enim ad minim vel eum iriure</p>
                                                        <div class="room-meta clearfix">
                                                            <a href="#" class="btn-icon">Read more</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="room col-sm-4 clearfix">
                                                <div class="room-item">
                                                    <div class="room-media">
                                                        <a href="#"><img src="images/gallery/3.jpg" alt=""></a>
                                                    </div>
                                                    <div class="room-summary">
                                                        <h3 class="room-title">
                                                            <a href="#">Budget Room</a>
                                                        </h3>
                                                        <div class="room-price">From: <span class="price">$200.0</span></div>
                                                        <p class="room-description">Lorem ipsum dolor sit amet, consecte adipiscing elit, sed diam nonummy wisi enim ad minim vel eum iriure</p>
                                                        <div class="room-meta clearfix">
                                                            <a href="#" class="btn-icon">Read more</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="room col-sm-4 clearfix">
                                                <div class="room-item">
                                                    <div class="room-media">
                                                        <a href="#"><img src="images/gallery/2.jpg" alt=""></a>
                                                    </div>
                                                    <div class="room-summary">
                                                        <h3 class="room-title">
                                                            <a href="#">Premium Room</a>
                                                        </h3>
                                                        <div class="room-price">From: <span class="price">$300.0</span></div>
                                                        <p class="room-description">Lorem ipsum dolor sit amet, consecte adipiscing elit, sed diam nonummy wisi enim ad minim vel eum iriure</p>
                                                        <div class="room-meta clearfix">
                                                            <a href="#" class="btn-icon">Read more</a>
                                                        </div>

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

         <div class="h1-banner">
                        <div class="sc-content-overlay">
                            <div class="container rectangle-overlay">
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
                    </div>

                    <div class="group-destination">
                        <div class="sc-content-overlay">
                            <div class="container">
                                <div class="empty-space"></div>
                                <div class="sc-heading style-01 text-center">
                                    <h3 class="title">Top Destinations</h3>
                                    <p class="description">For anything that brings people together to celebrate an occasion, we create truly memorable experiences that you will cherish forever</p>
                                </div>
                                <div class="sc-posts style-01 auto-height">
                                    <div class="item row">
                                        <div class="post col-sm-6 col-md-4">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="images/img/15.jpg" alt=""></a>
                                                </div>
                                                <div class="content">
                                                    <h3 class="title"> <a href="#">Sea Turtle Hatchery</a></h3>
                                                    <!--                                                    <div class="short-text"> 2 Day 3 night, Start from $500</div>-->
                                                    <div class="summary">Habaraduwa and Koggala located some sea turtle hatcheries, a totally nonprofit program to conserve this endangered animal. In most of nights, </div>
                                                    <a href="#" class="read-more more-info">More Info</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post col-sm-6 col-md-4">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="images/home/beach.jpg" alt=""></a>
                                                </div>
                                                <div class="content">
                                                    <h3 class="title"> <a href="#">Unawatuna Beach</a></h3>
                                                    <!--                                                    <div class="short-text"> 2 Day 3 night, Start from $500</div>-->
                                                    <div class="summary">Golden sandy beach with a beautifully curved located near Galle city. Sun kissed beautiful </div>
                                                    <a href="#" class="read-more more-info">More Info</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post col-sm-6 col-md-4">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="images/img/6.jpg" alt=""></a>
                                                </div>
                                                <div class="content">
                                                    <h3 class="title"> <a href="#">Yatagala Temple</a></h3>
                                                    <!--                                                    <div class="short-text"> 2 Day 3 night, Start from $500</div>-->
                                                    <div class="summary">Buddhist monastery located very near to world famous Unawatuna with a history of more than 2000 years. The monastery was built by the king Dewanampiya...</div>
                                                    <a href="#" class="read-more more-info">More Info</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post col-sm-6 col-md-4">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="images/home/5.jpg" alt=""></a>
                                                </div>
                                                <div class="content">
                                                    <h3 class="title"> <a href="#">Dalawalla Beach</a></h3>
                                                    <!--                                                    <div class="short-text"> 2 Day 3 night, Start from $500</div>-->
                                                    <div class="summary">Dalawella beach is located in the Unawatuna area southwest on the island of Sri Lanka. We discovered this tranquil spot while staying in central Unawatuna...</div>
                                                    <a href="#" class="read-more more-info">More Info</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post col-sm-6 col-md-4">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="images/img/2.jpg" alt=""></a>
                                                </div>
                                                <div class="content">
                                                    <h3 class="title"> <a href="#">Japanese Peace  Pagoda</a></h3>
                                                    <!--                                                    <div class="short-text"> 2 Day 3 night, Start from $500</div>-->
                                                    <div class="summary">A Buddhist shrine located on top of the Rumassala Mountain which represents the world peace and one of emblem for peace which has been created by Japa...</div>
                                                    <a href="#" class="read-more more-info">More Info</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post col-sm-6 col-md-4">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="images/img/9.jpg" alt=""></a>
                                                </div>
                                                <div class="content">
                                                    <h3 class="title"> <a href="#">Galle Fort</a></h3>
                                                    <!--                                                    <div class="short-text"> 2 Day 3 night, Start from $500</div>-->
                                                    <div class="summary">A world heritage fort which created by Dutch in Colonial Era, that finds ruins in the colonial era. Galle also famous for natural harbor and this is o...</div>
                                                    <a href="#" class="read-more more-info">More Info</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!--<div class="h1-bg-testimonial">-->
                    <div class="h2-testimonials">
                        <div class="sc-content-overlay">
                            <div class="container rectangle-overlay">
                                <div class="sc-testimonials style-01">
                                    <h3 class="heading">Comments from our happy <br> Guests</h3>
                                    <div class="testimonial-slider" data-itemsvisible="3" data-nav="false">
                                        <div class="item">
                                            <div class="content">
                                                <div class="image">
                                                    <img src="images/blog/sidebar.jpg" alt="">
                                                </div>
                                                <div class="rating-star"></div>
                                                <div class="description">
                                                    " Conversations can be a tricky business. Sometimes, decoding what is said with what is meant is difficult at best. However, communication is a necessary tool in today’s world. "
                                                </div>
                                                <div class="user-info">
                                                    <h4 class="name">Bobby Tom</h4>
                                                    <div class="regency">Manager</div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="content">
                                                <div class="image">
                                                    <img src="images/blog/author1.jpg" alt="">
                                                </div>
                                                <div class="rating-star"></div>
                                                <div class="description">
                                                    " Conversations can be a tricky business. Sometimes, decoding what is said with what is meant is difficult at best. However, communication is a necessary tool in today’s world. "
                                                </div>
                                                <div class="user-info">
                                                    <h4 class="name">Kenny White</h4>
                                                    <div class="regency">Designer</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="content">
                                                <div class="image">
                                                    <img src="images/blog/author2.jpg" alt="">
                                                </div>
                                                <div class="rating-star"></div>
                                                <div class="description">
                                                    " Conversations can be a tricky business. Sometimes, decoding what is said with what is meant is difficult at best. However, communication is a necessary tool in today’s world. "
                                                </div>
                                                <div class="user-info">
                                                    <h4 class="name">Neymar</h4>
                                                    <div class="regency">Foreman</div>
                                                </div>
                                            </div>
                                        </div>

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
                                        <div class="item">
                                            <div class="gallery">
                                                <a href="#gallery-1" class="btn-gallery"><img src="images/home/gallery/1.jpg" alt=""></a>
                                                <!--                                                <div id="gallery-1" class="hidden">
                                                                                                    <a  href="images/gallery/img-10.jpg"><img src="images/home/gallery/1.jpg" alt=""></a>
                                                                                                    <a  href="images/gallery/img-6.jpg"><img src="images/home/gallery/1.jpg" alt=""></a>
                                                                                                    <a  href="images/gallery/img-11.jpg"><img src="images/home/gallery/1.jpg" alt=""></a>
                                                                                                </div>-->
                                            </div>
                                            <div class="content">
                                                <h4 class="title"><a href="#">Sigiriya</a></h4>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="gallery">
                                                <div class="gallery">
                                                    <a href="#gallery-2" class="btn-gallery"><img src="images/home/gallery/2.jpg" alt=""></a>
                                                    <!--                                                    <div id="gallery-2" class="hidden">
                                                                                                            <a  href="images/gallery/img-2.jpg"><img src="images/home/gallery/2.jpg" alt=""></a>
                                                                                                            <a  href="images/gallery/img-7.jpg"><img src="images/home/gallery/2.jpg" alt=""></a>
                                                                                                            <a  href="images/gallery/img-8.jpg"><img src="images/home/gallery/2.jpg" alt=""></a>
                                                                                                        </div>-->
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h4 class="title"><a href="#">Nine Arches Bridge</a></h4>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="gallery">
                                                <a href="#gallery-3" class="btn-gallery"><img src="images/home/gallery/3.jpg" alt=""></a>
                                                <!--                                                <div id="gallery-3" class="hidden">
                                                                                                    <a  href="images/gallery/img-12.jpg"><img src="images/home/gallery/3.jpg" alt=""></a>
                                                                                                    <a  href="images/gallery/img-1.jpg"><img src="images/home/gallery/3.jpg" alt=""></a>
                                                                                                    <a  href="images/gallery/img-9.jpg"><img src="images/home/gallery/3.jpg" alt=""></a>
                                                                                                </div>-->
                                            </div>
                                            <div class="content">
                                                <h4 class="title"><a href="#">Haputhale</a></h4>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="gallery">
                                                <a href="#gallery-4" class="btn-gallery"><img src="images/home/gallery/4.jpg" alt=""></a>
                                                <!--                                                <div id="gallery-4" class="hidden">
                                                                                                    <a  href="images/gallery/img-14.jpg"><img src="images/gallery/img-14.jpg" alt=""></a>
                                                                                                    <a  href="images/gallery/img-7.jpg"><img src="images/gallery/img-7.jpg" alt=""></a>
                                                                                                    <a  href="images/gallery/img-13.jpg"><img src="images/gallery/img-13.jpg" alt=""></a>
                                                                                                </div>-->
                                            </div>
                                            <div class="content">
                                                <h4 class="title"><a href="#">Dalawella Beach</a></h4>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="gallery">
                                                <a href="#gallery-5" class="btn-gallery"><img src="images/home/gallery/5.jpg" alt=""></a>
                                                <!--                                                <div id="gallery-5" class="hidden">
                                                                                                    <a  href="images/gallery/img-12.jpg"><img src="images/gallery/img-12.jpg" alt=""></a>
                                                                                                    <a  href="images/gallery/img-1.jpg"><img src="images/gallery/img-1.jpg" alt=""></a>
                                                                                                    <a  href="images/gallery/img-9.jpg"><img src="images/gallery/img-9.jpg" alt=""></a>
                                                                                                </div>-->
                                            </div>

                                            <div class="content">
                                                <h4 class="title"><a href="#">Beach</a></h4>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="gallery">
                                                <a href="#gallery-7" class="btn-gallery"><img src="images/home/gallery/6.jpg" alt=""></a>
                                                <!--                                                <div id="gallery-6" class="hidden">
                                                                                                    <a  href="images/gallery/img-4.jpg"><img src="images/gallery/img-4.jpg" alt=""></a>
                                                                                                    <a  href="images/gallery/img-7.jpg"><img src="images/gallery/img-7.jpg" alt=""></a>
                                                                                                    <a  href="images/gallery/img-3.jpg"><img src="images/gallery/img-3.jpg" alt=""></a>
                                                                                                </div>-->
                                            </div>
                                            <div class="content">
                                                <h4 class="title"><a href="#">Fishing</a></h4>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="gallery">
                                                <a href="#gallery-7" class="btn-gallery"><img src="images/home/gallery/7.jpg" alt=""></a>
                                                <!--                                                <div id="gallery-7" class="hidden">
                                                                                                    <a  href="images/gallery/img-13.jpg"><img src="images/gallery/img-13.jpg" alt=""></a>
                                                                                                    <a  href="images/gallery/img-14.jpg"><img src="images/gallery/img-14.jpg" alt=""></a>
                                                                                                    <a  href="images/gallery/img-12.jpg"><img src="images/gallery/img-12.jpg" alt=""></a>
                                                                                                </div>-->
                                            </div>
                                            <div class="content">
                                                <h4 class="title"><a href="#">Mirissa</a></h4>
                                            </div>
                                        </div>
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