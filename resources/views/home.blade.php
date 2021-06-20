@extends('layouts.app_main')

@section('content')
<section class="slider_wrap slider_fullwide slider_engine_revo slider_alias_home-1">
    <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
        <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" data-version="5.2.6">
            <ul>
                <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="assets/jacqueline/images/1-1-100x50.jpg" data-delay="9000" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <img src="assets/images/banner-1-1170x700.png" alt="" title="1" width="1920" height="758" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <div class="tp-caption black tp-resizeme" id="slide-1-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','1']" data-y="['middle','middle','middle','middle']" data-voffset="['142','142','142','163']" data-fontsize="['11','11','11','15']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Linear.easeNone;" data-style_hover="c:rgba(249, 163, 146, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);" data-transform_in="y:50px;opacity:0;s:3000;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;" data-start="1000" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"booking.html","delay":""}]' data-responsive_offset="on">Learn More About Us</div>
                </li>
            </ul>
            <div class="tp-bannertimer tp-bottom"></div>
        </div>
    </div>
</section>
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
                                            <h6 class="sc_services_subtitle sc_item_subtitle">Welcome to our</h6>
                                            <h2 class="sc_services_title sc_item_title">treatment</h2>
                                            <div class="sc_services_descr sc_item_descr">
                                                Give you the best services We can give.
                                            </div>
                                            <div class="sc_columns columns_wrap">
                                                <div class="column-1_3 column_padding_bottom">
                                                    <div id="sc_services_809_1" class="sc_services_item">
                                                        <div class="sc_services_item_featured post_featured">
                                                            <div class="post_thumb" data-image="assets/images/treatments/treatment-dermabrasion-1170x700.jpg" data-title="Special Offers">
                                                                <a class="hover_icon hover_icon_link" href="single-post.html">
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
                                                            <div class="sc_services_item_description">
                                                                <a href="{{ route('book_treatment') }}" class="sc_services_item_readmore sc_button sc_button_style_filled sc_button_size_medium">
                                                                    <div>
                                                                        <span class="first">Learn more</span>
                                                                        <span class="second">Learn more</span>
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
                                                            <div class="sc_services_item_description">
                                                                <a href="{{ route('book_treatment') }}" class="sc_services_item_readmore sc_button sc_button_style_filled sc_button_size_medium">
                                                                    <div>
                                                                        <span class="first">Learn more</span>
                                                                        <span class="second">Learn more</span>
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
                                                                <a class="hover_icon hover_icon_link" href="single-post.html">
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
                                                            <div class="sc_services_item_description">
                                                                <a href="single-post.html" class="sc_services_item_readmore sc_button sc_button_style_filled sc_button_size_medium">
                                                                    <div>
                                                                        <span class="first">Learn more</span>
                                                                        <span class="second">Learn more</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sc_blogger_button sc_item_button">
                                            <a href="{{ route('treatment') }}" class="sc_button sc_button_square sc_button_style_filled sc_button_size_base">
                                                <div>
                                                    <span class="first">View All Treatments</span>
                                                    <span class="second">View All Treatments</span>
                                                </div>
                                            </a>
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
                    <div data-sc-full-width="true" data-sc-full-width-init="false" data-sc-stretch-content="true" class="sc_row row sc_row-no-padding">
                        <div class="column sc_column_container sc_col-sm-12">
                            <div class="sc_column-inner">
                                <div class="wrapper">
                                    <div class="sc_promo custom_promo_services sc_promo_size_large">
                                        <div class="sc_promo_inner">
                                            <div class="sc_promo_image odd" style="background-image: url('assets/images/image-metime-quotes.png')">
                                            </div>
                                            <div class="sc_promo_block sc_align_left cu_halfwidth cu_fl_R">
                                                <div class="sc_promo_block_inner cu_nopadds">
                                                    <div class="sc_promo_content">
                                                        <div id="sc_services_350_wrap" class="sc_services_wrap">
                                                            <div id="sc_services_350" class="sc_services sc_services_style_services-2 sc_services_type_icons cu_fullwidth">
                                                                <div class="sc_columns columns_wrap">
                                                                    <div class="column-1_2 column_padding_bottom">
                                                                        <div id="sc_services_350_1" class="sc_services_item">
                                                                            <a href="single-post.html">
                                                                                <span class="sc_icon">
                                                                                    <img alt="" src="assets/icons/icon-easy-book-80x80.png">
                                                                                </span>
                                                                            </a>
                                                                            <div class="sc_services_item_content">
                                                                                <h4 class="sc_services_item_title">
                                                                                    <a href="single-post.html">Easy Book & Payment</a>
                                                                                </h4>
                                                                                <div class="sc_services_item_description">
                                                                                    <p>We use different types of massage for a variety of health-related purposes</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="column-1_2 column_padding_bottom">
                                                                        <div id="sc_services_350_2" class="sc_services_item">
                                                                            <a href="single-post.html">
                                                                                <span class="sc_icon">
                                                                                    <img alt="" src="assets/icons/icon-professional-80x80.png">
                                                                                </span>
                                                                            </a>
                                                                            <div class="sc_services_item_content">
                                                                                <h4 class="sc_services_item_title">
                                                                                    <a href="single-post.html">Professional</a>
                                                                                </h4>
                                                                                <div class="sc_services_item_description">
                                                                                    <p>It helps restore movement and function when someone is affected by injury</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="column-1_2 column_padding_bottom">
                                                                        <div id="sc_services_350_3" class="sc_services_item">
                                                                            <a href="single-post.html">
                                                                                <span class="sc_icon">
                                                                                    <img alt="" src="assets/icons/icon-hygiene-protocol-80x80.png">
                                                                                </span>
                                                                            </a>
                                                                            <div class="sc_services_item_content">
                                                                                <h4 class="sc_services_item_title">
                                                                                    <a href="single-post.html">Hygiene Protocol</a>
                                                                                </h4>
                                                                                <div class="sc_services_item_description">
                                                                                    <p>The therapist uses smooth, heated stones by placing them on the body</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- <div data-sc-full-width="true" data-sc-full-width-init="false" class="sc_row row sc_custom_1459330954110 scheme_original inverse_colors">
                        <div class="column sc_column_container sc_col-sm-12">
                            <div class="sc_column-inner ">
                                <div class="wrapper">
                                    <div class="columns_wrap sc_columns columns_nofluid custom_columns_brands equal_height">
                                        <div class="column-1_4 sc_column_item">
                                            <div class="sc_column_item_inner">
                                                <h6 class="sc_title sc_title_regular">We use products of the best brands only</h6>
                                            </div>
                                        </div>
                                        <div class="column-3_4 sc_column_item span_3">
                                            <div id="sc_clients_387_wrap" class="sc_clients_wrap">
                                                <div id="sc_clients_387" class="sc_clients sc_clients_style_clients-1 cu_fullwidth">
                                                    <div class="sc_slider_swiper swiper-slider-container sc_slider_nopagination sc_slider_nocontrols" data-interval="9415" data-slides-per-view="3" data-slides-min-width="100">
                                                        <div class="slides swiper-wrapper">
                                                            <div class="swiper-slide" data-style="width:100%;">
                                                                <div id="sc_clients_387_1" class="sc_clients_item">
                                                                    <div class="sc_client_image">
                                                                        <img alt="" src="assets/jacqueline/images/logo-4.png">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide" data-style="width:100%;">
                                                                <div id="sc_clients_387_2" class="sc_clients_item">
                                                                    <div class="sc_client_image">
                                                                        <img alt="" src="assets/jacqueline/images/logo-2.png">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide" data-style="width:100%;">
                                                                <div id="sc_clients_387_3" class="sc_clients_item">
                                                                    <div class="sc_client_image">
                                                                        <img alt="" src="assets/jacqueline/images/logo-1.png">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="sc_slider_controls_wrap">
                                                            <a class="sc_slider_prev" href="#"></a>
                                                            <a class="sc_slider_next" href="#"></a>
                                                        </div>
                                                        <div class="sc_slider_pagination_wrap"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="sc_row-full-width"></div>
                    <div data-sc-full-width="true" data-sc-full-width-init="false" class="sc_row row sc_custom_1459343317996">
                        <div class="column sc_column_container sc_col-sm-12" >
                            <div class="sc_column-inner ">
                                <div class="wrapper">
                                    <div class="sc_empty_space em_height_8-3">
                                        <span class="sc_empty_space_inner"></span>
                                    </div>
                                    <div id="sc_blogger_321" class="sc_blogger layout_masonry_4 template_masonry sc_blogger_horizontal no_description">
                                        <h6 class="sc_blogger_subtitle sc_item_subtitle">From Our Customers</h6>
                                        <h2 class="sc_blogger_title sc_item_title">Testimonials</h2>
                                        <div class="isotope_wrap" data-columns="3" >
                                            <div class="isotope_item isotope_item_masonry isotope_item_masonry_4 isotope_column_4">
                                                <div class="post_item post_item_masonry post_item_masonry_4">
                                                    <div class="post_featured">
                                                        <div class="post_thumb" data-image="assets/jacqueline/images/1170x700.jpg" data-title="How massage loses its value">
                                                            <a class="hover_icon hover_icon_link" href="single-post.html">
                                                                <img alt="" src="assets/jacqueline/images/370x370.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="post_content isotope_item_content">
                                                        <h4 class="post_title">
                                                            <a href="single-post.html">Andien</a>
                                                        </h4>
                                                        <div class="post_info">
                                                            <div class="sc_services_item_description">
                                                                <p>This is a surgical procedure to treat scars and winkles. Doctors perform it in an office or clinic. You will have a local anesthetic... <a href="">View More</a> </p>
                                                            </div>
                                                        </div>
                                                        <div class="post_descr">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="isotope_item isotope_item_masonry isotope_item_masonry_4 isotope_column_4">
                                                <div class="post_item post_item_masonry post_item_masonry_4">
                                                    <div class="post_featured">
                                                        <div class="post_thumb" data-image="assets/jacqueline/images/1920x1100.jpg" data-title="How Often Should I get a Massage?">
                                                            <a class="hover_icon hover_icon_link" href="single-post.html">
                                                                <img alt="" src="assets/jacqueline/images/370x370.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="post_content isotope_item_content">
                                                        <h4 class="post_title">
                                                            <a href="single-post.html">Aura Kasih</a>
                                                        </h4>
                                                        <div class="post_info">
                                                            <div class="sc_services_item_description">
                                                                    <p>This is a surgical procedure to treat scars and winkles. Doctors perform it in an office or clinic. You will have a local anesthetic... <a href="">View More</a> </p>
                                                            </div>
                                                        </div>
                                                        <div class="post_descr">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="isotope_item isotope_item_masonry isotope_item_masonry_4 isotope_column_4">
                                                <div class="post_item post_item_masonry post_item_masonry_4">
                                                    <div class="post_featured">
                                                        <div class="post_thumb" data-image="assets/jacqueline/images/image-18.jpg" data-title="What is Massage Therapy?">
                                                            <a class="hover_icon hover_icon_link" href="single-post.html">
                                                                <img alt="" src="assets/jacqueline/images/370x370.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="post_content isotope_item_content">
                                                        <h4 class="post_title">
                                                            <a href="single-post.html">Millen</a>
                                                        </h4>
                                                        <div class="post_info">
                                                            <div class="sc_services_item_description">
                                                                    <p>This is a surgical procedure to treat scars and winkles. Doctors perform it in an office or clinic. You will have a local anesthetic... <a href="">View More</a> </p>
                                                            </div>
                                                        </div>
                                                        <div class="post_descr">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="isotope_item isotope_item_masonry isotope_item_masonry_4 isotope_column_4">
                                                <div class="post_item post_item_masonry post_item_masonry_4">
                                                    <div class="post_featured">
                                                        <div class="post_thumb" data-image="assets/jacqueline/images/image-18.jpg" data-title="What is Massage Therapy?">
                                                            <a class="hover_icon hover_icon_link" href="single-post.html">
                                                                <img alt="" src="assets/jacqueline/images/370x370.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="post_content isotope_item_content">
                                                        <h4 class="post_title">
                                                            <a href="single-post.html">Millen</a>
                                                        </h4>
                                                        <div class="post_info">
                                                            <div class="sc_services_item_description">
                                                                    <p>This is a surgical procedure to treat scars and winkles. Doctors perform it in an office or clinic. You will have a local anesthetic... <a href="">View More</a> </p>
                                                            </div>
                                                        </div>
                                                        <div class="post_descr">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sc_blogger_button sc_item_button">
                                            <a href="#" class="sc_button sc_button_square sc_button_style_filled sc_button_size_base">
                                                <div>
                                                    <span class="first">View All Testimonials</span>
                                                    <span class="second">View All Testimonials</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sc_empty_space em_height_7-8">
                                        <span class="sc_empty_space_inner"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-----------------------------------------------NEWS & PROMO  ----------------------------------------->
                    <div class="sc_row-full-width"></div>
                    <div data-sc-full-width="true" data-sc-full-width-init="false" class="sc_row row sc_custom_1459343317996">
                        <div class="column sc_column_container sc_col-sm-12" >
                            <div class="sc_column-inner ">
                                <div class="wrapper">
                                    <div class="sc_empty_space em_height_8-3">
                                        <span class="sc_empty_space_inner"></span>
                                    </div>
                                    <div id="sc_blogger_321" class="sc_blogger layout_masonry_4 template_masonry sc_blogger_horizontal no_description">
                                        <h6 class="sc_blogger_subtitle sc_item_subtitle">Check our</h6>
                                        <h2 class="sc_blogger_title sc_item_title">News & Promo</h2>
                                        <div class="isotope_wrap" data-columns="3" >
                                            <div class="isotope_item isotope_item_masonry isotope_item_masonry_4 isotope_column_4">
                                                <div class="post_item post_item_masonry post_item_masonry_4">
                                                    <div class="post_featured">
                                                        <div class="post_thumb" data-image="assets/jacqueline/images/1170x700.jpg" data-title="How massage loses its value">
                                                            <a class="hover_icon hover_icon_link" href="single-post.html">
                                                                <img alt="" src="assets/images/news-and-promo/image-eye-bags.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="post_content isotope_item_content">
                                                        <h4 class="post_title">
                                                            <a href="single-post.html">Can I Erase My Under Eye Bags?</a>
                                                        </h4>
                                                        <div class="post_info">
                                                            <div class="sc_services_item_description">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquet quisque eu mauris, ut dolor diam... <a href="">View More</a> </p>
                                                            </div>
                                                        </div>
                                                        <div class="post_descr">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="isotope_item isotope_item_masonry isotope_item_masonry_4 isotope_column_4">
                                                <div class="post_item post_item_masonry post_item_masonry_4">
                                                    <div class="post_featured">
                                                        <div class="post_thumb" data-image="assets/jacqueline/images/1920x1100.jpg" data-title="How Often Should I get a Massage?">
                                                            <a class="hover_icon hover_icon_link" href="single-post.html">
                                                                <img alt="" src="assets/images/news-and-promo/image-skincare-trends.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="post_content isotope_item_content">
                                                        <h4 class="post_title">
                                                            <a href="single-post.html">These Skin Care Trends Will Be Everywhere in 2021</a>
                                                        </h4>
                                                        <div class="post_info">
                                                            <div class="sc_services_item_description">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquet quisque eu mauris, ut dolor diam... <a href="">View More</a> </p>
                                                            </div>
                                                        </div>
                                                        <div class="post_descr">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="isotope_item isotope_item_masonry isotope_item_masonry_4 isotope_column_4">
                                                <div class="post_item post_item_masonry post_item_masonry_4">
                                                    <div class="post_featured">
                                                        <div class="post_thumb" data-image="assets/jacqueline/images/image-18.jpg" data-title="What is Massage Therapy?">
                                                            <a class="hover_icon hover_icon_link" href="single-post.html">
                                                                <img alt="" src="assets/images/news-and-promo/image-beauty-hacks.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="post_content isotope_item_content">
                                                        <h4 class="post_title">
                                                            <a href="single-post.html">The Best Beauty Hacks For Women Over 40</a>
                                                        </h4>
                                                        <div class="post_info">
                                                            <div class="sc_services_item_description">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquet quisque eu mauris, ut dolor diam... <a href="">View More</a> </p>
                                                            </div>
                                                        </div>
                                                        <div class="post_descr">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sc_blogger_button sc_item_button">
                                            <a href="{{ route('news_promo') }}" class="sc_button sc_button_square sc_button_style_filled sc_button_size_base">
                                                <div>
                                                    <span class="first">View All News & Promo</span>
                                                    <span class="second">View All News & Promo</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sc_empty_space em_height_7-8">
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
                                    <div class="sc_empty_space em_height_8-4">
                                        <span class="sc_empty_space_inner"></span>
                                    </div>
                                    <div class="columns_wrap sc_columns columns_nofluid">
                                        <div class="column-1_4 sc_column_item">
                                            <div class="sc_empty_space hide_on_responsive em_height_4-4">
                                                <span class="sc_empty_space_inner"></span>
                                            </div>
                                            <h2 class="sc_title sc_title_regular">Open Hours:</h2>
                                            <div class="text_column content_element ">
                                                <div class="wrapper">
                                                    <p>If you feel tired and stressed after a working day, we are happy to give you an enjoyable and healthy solution to find your balance again.</p>
                                                </div>
                                            </div>
                                            <div class="text_column content_element sc_custom_1459352457001">
                                                <div class="wrapper">
                                                    <ul>
                                                        <li>Mon-Fri: 9 AM &#8211; 6 PM</li>
                                                        <li>Saturday: 9 AM &#8211; 4 PM</li>
                                                        <li>Sunday: Closed</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <a href="contacts.html" class="sc_button sc_button_square sc_button_style_border sc_button_size_base cu_mrg_1">Read More</a>
                                            <div class="sc_empty_space em_height_3-8">
                                                <span class="sc_empty_space_inner"></span>
                                            </div>
                                        </div>
                                        <div class="column-3_4 sc_column_item span_3">
                                            <div class="sc_promo custom_promo_01 scheme_light sc_promo_size_large">
                                                <div class="sc_promo_inner">
                                                    <div class="sc_promo_image even" style="background-image: url('assets/images/image-open-hour.png')"></div>
                                                    <div class="sc_promo_block sc_align_left cu_block_1">
                                                        <div class="sc_promo_block_inner cu_pds_1">
                                                            <div class="sc_promo_content">
                                                                <h6 class="sc_title sc_title_regular sc_align_right custom_title_01">01</h6>
                                                                <h6 class="sc_title sc_title_regular cu_block_2">
                                                                    <em> July 4, 2015  /  0 Comments</em>
                                                                </h6>
                                                                <h2 class="sc_title sc_title_regular">
                                                                    <a href="single-post.html">
                                                                        Massage<br/>
                                                                        Therapy<br/>
                                                                        for rest &amp;<br/>
                                                                        relaxation
                                                                    </a>
                                                                </h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc_empty_space em_height_8-4">
                                        <span class="sc_empty_space_inner"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-------------------------------------------------BOOK NOW ------------------------------------------------------------------>
                    <div class="sc_row-full-width"></div>
                    <div data-sc-full-width="true" data-sc-full-width-init="false" class="sc_row row inverse_colors" style="background-color: #E26169">
                        <div class="column sc_column_container sc_col-sm-12">
                            <div class="sc_column-inner ">
                                <div class="wrapper">
                                    <div class="sc_empty_space em_height_11-4">
                                        <span class="sc_empty_space_inner"></span>
                                    </div>
                                    <div id="sc_call_to_action_389" class="sc_call_to_action sc_call_to_action_style_2 sc_call_to_action_align_center cu_fullwidth">
                                        <div class="sc_call_to_action_info">
                                            <h6 class="sc_call_to_action_subtitle sc_item_subtitle">Ready to treat your skin?</h6>
                                            <h2 class="sc_call_to_action_title sc_item_title">Choose your Treatment and Book Now.</h2>
                                        </div>
                                        <div class="sc_call_to_action_buttons sc_item_buttons">
                                            <div class="sc_call_to_action_button sc_item_button">
                                                <a href="booking.html" class="sc_button sc_button_square sc_button_style_filled sc_button_size_base">
                                                    <div>
                                                        <span class="first">Book Now</span>
                                                        <span class="second">Book Now</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div style="margin-top: 3rem" id="sc_call_to_action_389" class="sc_call_to_action sc_call_to_action_style_2 sc_call_to_action_align_center cu_fullwidth">
                                        <div class="sc_call_to_action_info">
                                            <h2 class="sc_call_to_action_title sc_item_title">Consult Your Skin</h2>
                                        </div>
                                        <form class="sc_emailer_form">
                                            <input type="text" class="sc_emailer_input" name="email" value="" placeholder="Please, enter you email address.">
                                        </form>
                                    </div> -->
                                    <div class="sc_empty_space em_height_10-5">
                                        <span class="sc_empty_space_inner"></span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sc_row-full-width"></div>
                    <div data-sc-full-width="true" data-sc-full-width-init="false" class="sc_row row sc_row-fluid inverse_colors" style="background-color: #E26169">
                        <div class="column sc_column_container sc_col-sm-12">
                            <div class="sc_column-inner ">
                                <div class="wrapper">
                                    <div class="sc_empty_space em_height_7-3">
                                        <span class="sc_empty_space_inner"></span>
                                    </div>
                                    <div class="sc_section sc_section_block aligncenter max_width">
                                        <div class="sc_section_inner">
                                            <h6 class="sc_section_subtitle sc_item_subtitle">Form for</h6>
                                            <h2 class="sc_section_title sc_item_title line_hide">Consult Your Skin</h2>
                                            <div class="sc_section_content_wrap">
                                                <div id="sc_form_261_wrap" class="sc_form_wrap">
                                                    <div id="sc_form_261" class="sc_form sc_form_style_form_1">
                                                        <form id="sc_form_261_form" data-formtype="form_1" method="post" action="includes/sendmail.php">
                                                            <div class="sc_form_info">
                                                                <div class="sc_form_item sc_form_field label_over">
                                                                    <label class="required" for="sc_form_subj">Subject</label>
                                                                    <input id="sc_form_subj" type="text" name="subject" placeholder="Subject">
                                                                </div>
                                                            </div>
                                                            <div class="sc_form_item sc_form_message label_over">
                                                                <label class="required" for="sc_form_message">Message</label>
                                                                <textarea id="sc_form_message" name="message" placeholder="Message"></textarea>
                                                            </div>
                                                            <div class="sc_form_item sc_form_button">
                                                                <button class="sc_button sc_button_style_filled sc_button_size_medium">
                                                                    <span class="overlay">
                                                                        <span class="first">Submit message</span>
                                                                        <span class="second">Submit message</span>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                            <div class="result sc_infobox"></div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc_empty_space em_height_7-3">
                                        <span class="sc_empty_space_inner"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sc_row-full-width"></div>
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
@endsection