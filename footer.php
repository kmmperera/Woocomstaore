

         
            <div class="h-padding" id="footer">
                <div id="footer-logo-area" class="d-flx a-i-c">
                    <div id="footer-logo" class="logo-img-class">
                        <img class="img-class" src="<?php echo get_template_directory_uri().'/images/logo2.png'?>" alt="">
                    </div>
                    <div id="footer-logo-description" class="logo-text-class">
                       Cleaning service

                    </div>
                </div>
                <div id="footer-section-wrapper" class="d-flx j-c-s-b">
                    <div class="sections-wrapper section-one">
                        <div class="footer-section-title">
                              ABOUT US
                        </div>
                        <ul class="footer-links-ul">
                            <li class="footer-li">
                                <a href="<?php bms_get_home_url_link();?>#impressa-reviews-area" class="footer-li-a">About us</a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php bms_get_home_url_link(); ?>#impress-contact-area" class="footer-li-a">Contact us</a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php bms_get_home_url_link(); ?>#first-img-container" class="footer-li-a">Discounts</a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php bms_get_home_url_link(); ?>#contact-form-elements-wrapper" class="footer-li-a">Services</a>
                            </li>


                        </ul>
                    </div>
                    <div class="sections-wrapper section-two">
                        <div class="footer-section-title">
                                OFFICE
                        </div>
                        <ul class="footer-links-ul">
                            <li class="footer-li">
                                <a href="<?php bms_get_home_url_link(); ?>#impress-contact-area" class="footer-li-a">Where we are</a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php bms_get_home_url_link(); ?>#post-swiper-wrapper" class="footer-li-a">Our services</a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php bms_get_home_url_link(); ?>#impress-contact-area" class="footer-li-a">Places</a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php bms_get_home_url_link(); ?>#contact-form-area" class="footer-li-a">Prices</a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php bms_get_home_url_link(); ?>#impress-contact-area" class="footer-li-a">Our manager</a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php bms_get_home_url_link(); ?>#impress-contact-area" class="footer-li-a">Open times</a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php bms_get_home_url_link(); ?>#impress-contact-area" class="footer-li-a">Telephone number</a>
                            </li>

                        </ul>
                    </div> 
                    <div class="sections-wrapper section-three">
                        <div class="footer-section-title">
                               SERVICES
                        </div>
                        <ul  class="footer-links-ul">
                            <li class="footer-li">
                                <a href="<?php bms_get_home_url_link(); ?>#service-slider-title" class="footer-li-a">House clearance</a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php bms_get_home_url_link(); ?>#Sgombero" class="footer-li-a">Delivery</a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php bms_get_home_url_link(); ?>#Trasloco" class="footer-li-a">Gardening</a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php bms_get_home_url_link(); ?>#Giardinaggio" class="footer-li-a">Painting</a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php bms_get_home_url_link(); ?>#Imbiancatura" class="footer-li-a">Packaging</a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php bms_get_home_url_link(); ?>#Confezionamento" class="footer-li-a">Cleaning houses </a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php bms_get_home_url_link(); ?>#Pulizia" class="footer-li-a">Washing sofas</a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php bms_get_home_url_link(); ?>#Lavaggio" class="footer-li-a">Repaires  </a>
                            </li>


                        </ul>
                    </div>
                    <div class="sections-wrapper section-four">
                        <div class="footer-section-title">
                             SOCIAL MEDIA
                        </div>
                        <div id="social-media-description">
                             Follow us on social media to find out the
                            <br/>
                            latest prices and services
                        </div>
                        <div id="social-media-links">
                                <a href="https://facebook.com" target="_blank" ><i class="bi bi-facebook"></i></a>
                                <a href="https://youtube.com" target="_blank" ><i class="bi bi-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div id="footer-divider-line">

                </div>
                <div id="footer-bottom-section" class="d-flx j-c-s-b">
                    <div class="footer-fonts" id="footer-bttm-left">
                     2024 All rights reserved
                    </div>
                    <div id="footer-bttm-middle" class="d-flx j-c-s-b footer-fonts">
                        <div id="footer-middle-one">
                           <a href="<?php echo get_permalink(get_page_by_path('terms-of-service')->ID); ?>" target="_blank"  >Terms & Conditions</a> 
                        </div>
                        <div id="footer-middle-two">
                           <a href="<?php echo get_permalink(get_page_by_path('privacy-policy-2')->ID); ?>" target="_blank" >Privacy policy </a> 
                        </div>
                    </div>
                    <div class="footer-fonts" id="footer-bttm-right">
                            <?php wp_nav_menu(
                                    array(
                                        'theme_location' => 'lang-switer',
                                        'depth' => 2,
                                        'container' => 'div',
                                        'container_class' => 'header-wp-menu-ul-wrapper',
                                        'container_id' => 'ewt-wp-header-wrapper',


                                        )
                                    );
                            ?>

                    </div>
                </div>
            </div>
    </div>
  

<?php wp_footer(); ?>


</body>

</html>