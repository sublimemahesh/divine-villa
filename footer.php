<!-- Footer -->

<footer id="colophon" class="site-footer footer_v4">

    <div class="footer">

        <div class="container">

            <div class="row">

                <div class="col-sm-3">

                    <div class="widget-text">

                        <img src="images/fdfdf.JPG" alt="">
                        <p class="info-text text-justify">The Divine shows you the way<br/>

                        </p>




                        <ul class="social-link">

                            <li><a class="facebook" target="_blank" href="<?php echo substr(substr($FACE_BOOK->description,3),0,-4)?>"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="instagram" href="<?php echo substr(substr($INSTERGRAM->description,3),0,-4)?>"><i class="fa fa-instagram"></i></a></li>
                            <li><a class="pinterest" href="<?php echo substr(substr($TRIPADVISOR->description,3),0,-4)?>"><i class="fa fa-tripadvisor"></i></a></li>
                            <li><a class="twitter" href="<?php echo substr(substr($PRINTER->description,3),0,-4)?>"><i class="fa fa-pinterest-p"></i></a></li>
 
                        </ul>

                    </div>

                </div>

                <div class="col-sm-3 left30">

                    <div class="widget-menu ">

                        <h3 class="widget-title">Useful Links</h3>

                        <ul class="menu column-1">

                            <li><a href="./">Home</a></li>

                            <li><a href="about.php">About Us</a></li>

                            <li><a href="accommodations.php">Accommodations</a></li>

                            <li><a href="facilities.php">Facilities</a></li>

                            <li><a href="excursions.php">Excursions</a></li>

                            <li><a href="gallery.php">Gallery</a></li>

                            <!--                            <li><a href="#">Feedback</a></li>
                            
                                                        <li><a href="#">Contact Us</a></li>-->

                        </ul>

                    </div>

                </div>

                <div class="col-sm-3">

                    <div class="widget-menu">

                        <h3 class="widget-title">Connect Us</h3>

                        <div class="footer-location">

                            <ul class="info">

                                <li class="clearfix"><i class="fa fa-phone"></i><a href="tel:<?php echo $MOBILE_NUMBER->title?>"> <?php echo $MOBILE_NUMBER->title?></a></li>

                                <li class="clearfix"><i class="fa fa-envelope"></i><a href="mailto:<?php echo $EMAIL->title?>"><?php echo $EMAIL->title?></a></li>

                                <li class="clearfix"><i class="fa fa-fax"></i><a href="tel:<?php echo $MOBILE_NUMBER->title?>"><?php echo $MOBILE_NUMBER->title?></a></li>

                                <li class="address clearfix"><i class="fa fa-map-marker"></i> <a href="#">Bokale, pitakoratuwa, Heenatigala</a></li>


                            </ul>

                        </div>

                    </div>

                </div>
                <div class="col-sm-3">
                    <h3 class="widget-title">Google Location</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15871.269434566286!2d80.278485!3d6.0197946!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1e62e2ed5e3b1df8!2sVilla%20The%20Divine!5e0!3m2!1sen!2slk!4v1568331501001!5m2!1sen!2slk" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>

        </div>

    </div>

    <div class="copyright">

        <div class="container">

            <div class="row">

                <div class="copyright-content col-sm-8">


                    <p class="copyright-text" style="float: left">© <?php echo date("Y"); ?> <a href="#">The Divine Villa</a> by <a href="https://www.synotec.lk/">Synotec Holdings (Pvt) Ltd</a>. All Rights Reserved.</p>
                </div>
                <div class="col-sm-4  " style="margin-top: 25px;">
                    <div id="google_translate_element" style="float: right" ></div>
                </div>

            </div>

        </div>

    </div>
    
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-155566270-1"></script>
    <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-155566270-1');
    </script>

</footer>