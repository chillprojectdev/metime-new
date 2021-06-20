@extends('layouts.app_main')

@section('content')
    <style media="screen">
      div.time-price {
        margin-left: 0.4rem;
        margin-top: 0.5rem;
        text-align: center;
        font-weight: bold;
        font-size: 11px;
      }
    </style>
        <div class="page_content_wrap page_paddings_no">
            <div class="content_wrap">
                <div class="content">
                    <article class="post_item post_item_single page">
                        <section class="post_content">
                          <div data-sc-full-width="true" data-sc-full-width-init="false" class="sc_row row sc_custom_1459259915855">
                              <div class="column sc_column_container sc_col-sm-12">
                                  <div class="sc_column-inner ">
                                      <div class="wrapper">
                                          <div class="sc_empty_space em_height_8">
                                              <span class="sc_empty_space_inner"></span>
                                          </div>
                                          <div id="sc_services_809_wrap" class="sc_services_wrap">
                                              <div id="sc_services_809" class="sc_services sc_services_style_services-1 sc_services_type_images cu_fullwidth">
                                                  <h2 class="sc_services_title sc_item_title">treatment</h2>
                                                  <div class="sc_services_descr sc_item_descr">
                                                      Give you the best services We can give.
                                                  </div>
                                                  <div class="sc_columns columns_wrap">
                                                      <div class="column-1_3 column_padding_bottom">
                                                          <div id="sc_services_809_1" class="sc_services_item">
                                                              <div class="sc_services_item_featured post_featured">
                                                                  <div class="post_thumb" data-image="assets/images/treatments/treatment-dermabrasion-1170x700.jpg" data-title="Special Offers">
                                                                      <a class="hover_icon hover_icon_link" href="{{ route('book_treatment') }}">
                                                                          <img alt="" src="assets/images/treatments/treatment-dermabrasion-370x370.jpg">
                                                                      </a>
                                                                  </div>
                                                              </div>
                                                              <div class="sc_services_item_content">
                                                                  <div class="sc_services_item_category">
                                                                      <a href="services.html" rel="tag">Dermabrasion</a>
                                                                  </div>
                                                                  <div class="sc_services_item_description">
                                                                      <p>This is a surgical procedure to treat scars and winkles. Doctors perform it in an office or clinic. You will have a local anesthetic...</p>
                                                                  </div>
                                                                  <div class="time-price">
                                                                    Estimate Treatment Time: <a>45 Minutes</a>
                                                                    <br/>
                                                                    Price: <a>Rp 200.000</a>
                                                                  </div>

                                                                  <div class="sc_services_item_description">
                                                                      <a href="{{ route('book_treatment') }}" class="sc_services_item_readmore sc_button sc_button_style_filled sc_button_size_medium">
                                                                          <div>
                                                                              <span class="first">Book Now</span>
                                                                              <span class="second">Book Now</span>
                                                                          </div>
                                                                      </a>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="column-1_3 column_padding_bottom">
                                                          <div id="sc_services_809_2" class="sc_services_item">
                                                              <div class="sc_services_item_featured post_featured">
                                                                  <div class="post_thumb" data-image="assets/images/treatments/treatment-mask-1170x700.jpg" data-title="Gift Cards Available">
                                                                      <a class="hover_icon hover_icon_link" href="{{ route('book_treatment') }}">
                                                                          <img alt="" src="assets/images/treatments/treatment-mask-370x370.jpg">
                                                                      </a>
                                                                  </div>
                                                              </div>
                                                              <div class="sc_services_item_content">
                                                                  <div class="sc_services_item_category">
                                                                      <a href="services.html" rel="tag">Facial Mask Lightenings</a>
                                                                  </div>
                                                                  <div class="sc_services_item_description">
                                                                      <p>This is a surgical procedure to treat scars and winkles. Doctors perform it in an office or clinic. You will have a local anesthetic...</p>
                                                                  </div>
                                                                  <div class="time-price">
                                                                    Estimate Treatment Time: <a>45 Minutes</a>
                                                                    <br/>
                                                                    Price: <a>Rp 200.000</a>
                                                                  </div>
                                                                  <div class="sc_services_item_description">
                                                                      <a href="{{ route('book_treatment') }}" class="sc_services_item_readmore sc_button sc_button_style_filled sc_button_size_medium">
                                                                          <div>
                                                                              <span class="first">Book Now</span>
                                                                              <span class="second">Book Now</span>
                                                                          </div>
                                                                      </a>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="column-1_3 column_padding_bottom">
                                                          <div id="sc_services_809_3" class="sc_services_item">
                                                              <div class="sc_services_item_featured post_featured">
                                                                  <div class="post_thumb" data-image="assets/images/treatments/treatment-ultrasonic-1170x700.jpg" data-title="Online Appointment">
                                                                      <a class="hover_icon hover_icon_link" href="{{ route('book_treatment') }}">
                                                                          <img alt="" src="assets/images/treatments/treatment-ultrasonic-370x370.jpg">
                                                                      </a>
                                                                  </div>
                                                              </div>
                                                              <div class="sc_services_item_content">
                                                                  <div class="sc_services_item_category">
                                                                      <a href="services.html" rel="tag">Ultrasonic Scrubbing</a>
                                                                  </div>
                                                                  <div class="sc_services_item_description">
                                                                      <p>This is a surgical procedure to treat scars and winkles. Doctors perform it in an office or clinic. You will have a local anesthetic...</p>
                                                                  </div>
                                                                  <div class="time-price">
                                                                    Estimate Treatment Time: <a>45 Minutes</a>
                                                                    <br/>
                                                                    Price: <a>Rp 200.000</a>
                                                                  </div>
                                                                  <div class="sc_services_item_description">
                                                                      <a href="{{ route('book_treatment') }}" class="sc_services_item_readmore sc_button sc_button_style_filled sc_button_size_medium">
                                                                          <div>
                                                                              <span class="first">Book Now</span>
                                                                              <span class="second">Book Now</span>
                                                                          </div>
                                                                      </a>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>

                                                      <div class="column-1_3 column_padding_bottom">
                                                          <div id="sc_services_809_3" class="sc_services_item">
                                                              <div class="sc_services_item_featured post_featured">
                                                                  <div class="post_thumb" data-image="assets/images/treatments/treatment-ultrasonic-1170x700.jpg" data-title="Online Appointment">
                                                                      <a class="hover_icon hover_icon_link" href="{{ route('book_treatment') }}">
                                                                          <img alt="" src="assets/images/treatments/treatment-ultrasonic-370x370.jpg">
                                                                      </a>
                                                                  </div>
                                                              </div>
                                                              <div class="sc_services_item_content">
                                                                  <div class="sc_services_item_category">
                                                                      <a href="services.html" rel="tag">Ultrasonic Scrubbing</a>
                                                                  </div>
                                                                  <div class="sc_services_item_description">
                                                                      <p>This is a surgical procedure to treat scars and winkles. Doctors perform it in an office or clinic. You will have a local anesthetic...</p>
                                                                  </div>
                                                                  <div class="time-price">
                                                                    Estimate Treatment Time: <a>45 Minutes</a>
                                                                    <br/>
                                                                    Price: <a>Rp 200.000</a>
                                                                  </div>
                                                                  <div class="sc_services_item_description">
                                                                      <a href="{{ route('book_treatment') }}" class="sc_services_item_readmore sc_button sc_button_style_filled sc_button_size_medium">
                                                                          <div>
                                                                              <span class="first">Book Now</span>
                                                                              <span class="second">Book Now</span>
                                                                          </div>
                                                                      </a>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>

                                                      <div class="column-1_3 column_padding_bottom">
                                                          <div id="sc_services_809_3" class="sc_services_item">
                                                              <div class="sc_services_item_featured post_featured">
                                                                  <div class="post_thumb" data-image="assets/images/treatments/treatment-ultrasonic-1170x700.jpg" data-title="Online Appointment">
                                                                      <a class="hover_icon hover_icon_link" href="{{ route('book_treatment') }}">
                                                                          <img alt="" src="assets/images/treatments/treatment-ultrasonic-370x370.jpg">
                                                                      </a>
                                                                  </div>
                                                              </div>
                                                              <div class="sc_services_item_content">
                                                                  <div class="sc_services_item_category">
                                                                      <a href="services.html" rel="tag">Ultrasonic Scrubbing</a>
                                                                  </div>
                                                                  <div class="sc_services_item_description">
                                                                      <p>This is a surgical procedure to treat scars and winkles. Doctors perform it in an office or clinic. You will have a local anesthetic...</p>
                                                                  </div>
                                                                  <div class="time-price">
                                                                    Estimate Treatment Time: <a>45 Minutes</a>
                                                                    <br/>
                                                                    Price: <a>Rp 200.000</a>
                                                                  </div>
                                                                  <div class="sc_services_item_description">
                                                                      <a href="{{ route('book_treatment') }}" class="sc_services_item_readmore sc_button sc_button_style_filled sc_button_size_medium">
                                                                          <div>
                                                                              <span class="first">Book Now</span>
                                                                              <span class="second">Book Now</span>
                                                                          </div>
                                                                      </a>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>

                                                      <div class="column-1_3 column_padding_bottom">
                                                          <div id="sc_services_809_3" class="sc_services_item">
                                                              <div class="sc_services_item_featured post_featured">
                                                                  <div class="post_thumb" data-image="assets/images/treatments/treatment-ultrasonic-1170x700.jpg" data-title="Online Appointment">
                                                                      <a class="hover_icon hover_icon_link" href="{{ route('book_treatment') }}">
                                                                          <img alt="" src="assets/images/treatments/treatment-ultrasonic-370x370.jpg">
                                                                      </a>
                                                                  </div>
                                                              </div>
                                                              <div class="sc_services_item_content">
                                                                  <div class="sc_services_item_category">
                                                                      <a href="services.html" rel="tag">Ultrasonic Scrubbing</a>
                                                                  </div>
                                                                  <div class="sc_services_item_description">
                                                                      <p>This is a surgical procedure to treat scars and winkles. Doctors perform it in an office or clinic. You will have a local anesthetic...</p>
                                                                  </div>
                                                                  <div class="time-price">
                                                                    Estimate Treatment Time: <a>45 Minutes</a>
                                                                    <br/>
                                                                    Price: <a>Rp 200.000</a>
                                                                  </div>
                                                                  <div class="sc_services_item_description">
                                                                      <a href="{{ route('book_treatment') }}" class="sc_services_item_readmore sc_button sc_button_style_filled sc_button_size_medium">
                                                                          <div>
                                                                              <span class="first">Book Now</span>
                                                                              <span class="second">Book Now</span>
                                                                          </div>
                                                                      </a>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="sc_empty_space em_height_6">
                                              <span class="sc_empty_space_inner"></span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>


                            <div class="sc_row-full-width"></div>
                            <div class="sc_row row">
                                <div class="column sc_column_container sc_col-sm-12">
                                    <div class="sc_column-inner ">
                                        <div class="wrapper">
                                            <a href="#" class="sc_icon icon-up sc_icon_shape_square aligncenter scroll_to_top show"></a>
                                            <div class="sc_empty_space em_height_5-7">
                                                <span class="sc_empty_space_inner"></span>
                                            </div>
                                            <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_3">
                                                <div class="column-1_3 sc_column_item">
                                                    <h5 class="sc_title sc_title_regular sc_align_center">About us</h5>
                                                    <div class="text_column content_element ">
                                                        <div class="wrapper">
                                                            <p class="cu_text_c">Come in and our therapists provide the perfect treatment. Our massage is specially designed to help you achieve the perfect mind-body harmony</p>
                                                        </div>
                                                    </div>
                                                    <div class="sc_empty_space em_height_3">
                                                        <span class="sc_empty_space_inner"></span>
                                                    </div>
                                                </div>
                                                <div class="column-1_3 sc_column_item">
                                                    <h5 class="sc_title sc_title_regular sc_align_center">Open Hours</h5>
                                                    <div class="text_column content_element ">
                                                        <div class="wrapper">
                                                            <p class="cu_text_c">
                                                                Mon-Fri: 9 AM &#8211; 6 PM
                                                                <br/> Saturday: 9 AM &#8211; 4 PM
                                                                <br/> Sunday: Closed
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="sc_empty_space em_height_3">
                                                        <span class="sc_empty_space_inner"></span>
                                                    </div>
                                                </div>
                                                <div class="column-1_3 sc_column_item">
                                                    <h5 class="sc_title sc_title_regular sc_align_center">Contacts</h5>
                                                    <div class="text_column content_element ">
                                                        <div class="wrapper">
                                                            <p class="cu_text_c">
                                                                176 W street name, New York, NY 10014
                                                                <br/> Email: <a href="mailto:info@yoursite.com">info@yoursite.com</a>
                                                                <br/> Telephone: <a href="tel:+18001234566">+1(800)123-4566</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="sc_empty_space em_height_3">
                                                        <span class="sc_empty_space_inner"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sc_line sc_line_position_center_center sc_line_style_solid"></div>

                                            <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_small cu_block_3">
                                                <div class="sc_socials_item">
                                                    <a href="#" target="_blank" class="social_icons social_twitter">
                                                        <span class="icon-twitter"></span>
                                                    </a>
                                                </div>
                                                <div class="sc_socials_item">
                                                    <a href="#" target="_blank" class="social_icons social_facebook">
                                                        <span class="icon-facebook"></span>
                                                    </a>
                                                </div>
                                                <div class="sc_socials_item">
                                                    <a href="#" target="_blank" class="social_icons social_instagramm">
                                                        <span class="icon-instagramm"></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <p class="cu_text_c">
                                                <a href="#">Metime </a>&#169; 2021 All Rights Reserved
                                                <a href="#">Terms of Use</a> and
                                                <a href="#">Privacy Policy</a>
                                            </p>
                                            <div class="sc_empty_space em_height_4-2">
                                                <span class="sc_empty_space_inner"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </article>
                </div>
            </div>
        </div>

<script type='text/javascript' src='app.js'></script>

<script type='text/javascript' src='assets/jacqueline/js/vendor/jquery/jquery.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/jquery/jquery-migrate.min.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/essgrid/lightbox.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/essgrid/jquery.themepunch.tools.min.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/essgrid/jquery.themepunch.essential.min.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/revslider/jquery.themepunch.revolution.min.js'></script>
<script type="text/javascript" src="assets/jacqueline/js/vendor/revslider/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="assets/jacqueline/js/vendor/revslider/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="assets/jacqueline/js/vendor/revslider/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="assets/jacqueline/js/vendor/revslider/extensions/revolution.extension.navigation.min.js"></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/modernizr.min.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/custom/custom.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/superfish.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/jquery.slidemenu.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/custom/core.utils.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/custom/core.init.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/custom/theme.init.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/social-share.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/custom/theme.shortcodes.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/custom/core.messages.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/grid.layout/grid.layout.min.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/swiper/swiper.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/isotope/isotope.min.js'></script>
</body>

</html>
@endsection