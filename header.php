<!-- Header -->
<header id="masthead" class="header-default affix-top sticky-header ">
    <div class="row">
        <div class="header-menu col-sm-12 tm-table">
            <div class="menu-mobile-effect navbar-toggle" data-effect="mobile-effect">
                <div class="icon-wrap"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </div>
            </div>
            <div class="width-logo sm-logo table-cell text-center">
                <a href="./" class="no-sticky-logo" title="The Divine Villa"> <img class="logo" src="images/logo-header.png" alt=""> <img class="mobile-logo" src="images/logo-header-sm.png" alt=""> </a>
                <a href="./" class="sticky-logo"> <img src="images/logo-header-sm.png" alt=""> </a>
            </div>
            <div class="width-navigation navigation table-cell">
                <div class="top-toolbar clearfix">
                    <div class="toolbar-info pull-left col-sm-4"> <i class="ion-ios-telephone"></i> <span class="label">Need help? Call us now:</span> <a class="value" href="tel:<?php echo $MOBILE_NUMBER->title?>"> <?php echo $MOBILE_NUMBER->title?></a> </div>
                    <div class="toolbar-right pull-right col-sm-8">
                        <div class="weather"> Today: <img src="images/icons/weather.png" alt=""> <span class="temperature">28°C</span> </div>
<!--                        <ul class="top-menu">
                            <li class="menu-item"><a href="#">Our Story</a></li>
                            <li class="menu-item"><a href="#">News & Awards</a></li>
                            <li class="menu-item"><a href="gallery.php">Gallery</a></li>
                        </ul>-->
                        <div class="language">
                            <div class="dropdown  translation-links">
                                
                                <a href="#" class="dropdown-toggle select united kingdom" data-hover="dropdown" data-toggle="dropdown" aria-expanded="false"   data-lang="English">English<span class="fa fa-caret-down"></span> </a>
                               <?php echo $LANGUAGE->description?>
 
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="nav main-menu">
                    <li class="menu-item"> <a href="./">Home</a> </li>
                    <li class="menu-item"> <a href="about.php">About Us</a> </li>
                    <li class="menu-item"> <a href="accommodations.php">Accommodations</a> </li>
                    <li class="menu-item"> <a href="facilities.php">Facilities</a> </li>
                    <li class="menu-item"> <a href="excursions.php">Excursions</a> </li>
                    <li class="menu-item"> <a href="gallery.php">Gallery</a> </li>
                    <li class="menu-item"> <a href="feedback.php">Feedback</a> </li>
                    <li class="menu-item"> <a href="contact.php">Contact Us</a> </li>
                </ul>
                <div class="header-right"> <a href="#" class="btn-book">BOOK YOUR STAY</a> </div>
            </div>
        </div>
    </div>
</header>
<!-- Mobile menu -->
<nav class="visible-xs mobile-menu-container mobile-effect" itemscope itemtype="">
    <div class="inner-off-canvas">
        <div class="menu-mobile-effect navbar-toggle">Close <i class="fa fa-times"></i></div>
        <ul class="nav main-menu">
            <li class="menu-item"> <a href="./">Home</a> </li>
            <li class="menu-item"> <a href="about.php">About Us</a> </li>
            <li class="menu-item"> <a href="accommodations.php">Accommodations</a> </li>
            <li class="menu-item"> <a href="facilities.php">Facilities</a> </li>
            <li class="menu-item"> <a href="excursions.php">Excursions</a> </li>
            <li class="menu-item"> <a href="gallery.php">Gallery</a> </li>
            <li class="menu-item"> <a href="feedback.php">Feedback</a> </li>
            <li class="menu-item"> <a href="contact.php">Contact Us</a> </li>
        </ul>
    </div>
</nav>
<!-- nav.mobile-menu-container -->