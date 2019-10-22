<div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="home-1"
     data-source="gallery"
     style="padding:0px;background-image:url('images/slides/slider1.jpg');background-repeat:no-repeat;background-size:cover;background-position:center center;">
    <!-- START REVOLUTION SLIDER 5.4.7.4 fullwidth mode -->
    <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.7.4">
        <ul>    <!-- SLIDE  -->
            <?php
            $SLIDER = new Slider(NULL);
            foreach ($SLIDER->all() as $key=>$slider){
            ?>
            <li data-index="rs-<?php echo $key?>" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                data-thumb="upload/slider/<?php echo $slider['image_name']?>" data-rotate="0" data-saveperformance="off"
                data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                <!-- MAIN IMAGE -->
                <img src="upload/slider/<?php echo $slider['image_name']?>" alt="<?php echo $slider['image_name']?>" title="hotel-wp-demo3-slider.jpg" width="1422"
                     height="800" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                     class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <h1 class="tp-caption   tp-resizeme"
                    id="slide-10-layer-1"
                    data-x="['center','center','center','center']" data-hoffset="['8','8','8','7']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-109','-109','-109','-62']"
                    data-fontsize="['66','66','40','30']"
                    data-lineheight="['78','78','50','36']"
                    data-fontweight="['700','700','700','700']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"

                    data-type="text"
                    data-responsive_offset="on"

                    data-frames='[{"delay":900,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":100,"frame":"999","to":"y:-50px;opacity:0;","ease":"nothing"}]'
                    data-textAlign="['center','center','center','center']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"

                    style="z-index: 5; white-space: nowrap; font-size: 66px; line-height: 78px; font-weight: 700; color: rgba(255,255,255,1);">
                    <?php echo $slider['title']?>  
                    </h1>

                <!-- LAYER NR. 2 -->
                <p class="tp-caption   tp-resizeme"
                   id="slide-10-layer-2"
                   data-x="['center','center','center','center']" data-hoffset="['0','0','1','1']"
                   data-y="['middle','middle','middle','middle']" data-voffset="['5','5','-24','12']"
                   data-width="none"
                   data-height="none"
                   data-whitespace="nowrap"

                   data-type="text"
                   data-responsive_offset="on"

                   data-frames='[{"delay":900,"speed":1500,"frame":"0","from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"nothing"}]'
                   data-textAlign="['left','left','left','left']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 6; white-space: nowrap; font-size: 18px; line-height: 22px; font-weight: 400; color: rgba(255,255,255,1);">
                    <?php echo $slider['description']?>    </p>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption   tp-resizeme  thim-link-slider2"
                     id="slide-10-layer-3"
                     data-x="['center','center','center','center']" data-hoffset="['10','10','0','2']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['105','105','89','114']"
                     data-lineheight="['1','1','','']"
                     data-width="none"
                     data-height="none"
                     data-whitespace="nowrap"

                     data-type="text"
                     data-actions='[{"event":"click","action":"simplelink","target":"_blank","url":"rooms.html","delay":""}]'
                     data-responsive_offset="on"

                     data-frames='[{"delay":900,"speed":1500,"frame":"0","from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":100,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                     data-textAlign="['left','left','left','left']"
                     data-paddingtop="[17,17,0,0]"
                     data-paddingright="[0,0,0,0]"
                     data-paddingbottom="[16,16,0,0]"
                     data-paddingleft="[0,0,0,0]"

                     style="z-index: 7; white-space: nowrap; font-size: 15px; line-height: 1px; font-weight: 400; color: rgba(255,255,255,1);text-transform:uppercase;">
                    <a href="#">Discover</a></div>
            </li>
            <?php }?>
        </ul>
        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
    </div>
</div><!-- END REVOLUTION SLIDER -->