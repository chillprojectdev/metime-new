<!DOCTYPE html>
<html lang="en-US" class="scheme_original">
<head>
    <title>Metime Web App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel='stylesheet' href='assets/jacqueline/css/admin_icon.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i|Montserrat:400,700|Mr+De+Haviland|Open+Sans:300,400,600,700,800|Raleway:100,200,300,300i,400,400i,500,600,700,700i,800,900&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese' type='text/css' media='all' />
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css?ver=4.3.0' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/jacqueline/js/vendor/essgrid/esg.settings.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/jacqueline/js/vendor/revslider/rev.settings.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/jacqueline/css/fontello/css/fontello.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/jacqueline/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/jacqueline/css/core.animation.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/jacqueline/css/shortcodes.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/jacqueline/js/vendor/booked/booked.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/jacqueline/css/instagram-widget.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/jacqueline/css/skin.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/jacqueline/css/custom-style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/jacqueline/css/responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/jacqueline/css/skin.responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/jacqueline/css/custom.responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/jacqueline/js/vendor/grid.layout/grid.layout.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/jacqueline/css/core.messages.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/jacqueline/js/vendor/swiper/swiper.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/jacqueline/js/vendor/essgrid/lightbox.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/jacqueline/css/plugins.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/jacqueline/css/custom.css' type='text/css' media='all' />
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
    <link href="assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    @yield('style')


</head>
<body class="{{ $body_class }}">
<div class="body_wrap">
    <div class="page_wrap">
        <div class="top_panel_fixed_wrap"></div>
        <!---------------------- header mobile -------------->
        <div class="header_mobile">
            <div class="content_wrap">
                <div class="menu_button icon-menu"></div>
                <div class="logo">
                    <a href="{{ route('home') }}" style="font-size: 1.875em">
                        <img src="assets/images/metime-logo-home.png" class="logo_main" alt="" width="238" height="56">
                    </a>
                </div>
                <div class="menu_main_cart top_panel_icon">
                    <a href="#" class="top_panel_cart_button" data-items="0" data-summa="&pound;0.00">
                        <span class="contact_icon icon-icon_bag_alt"></span>
                    </a>
                    <ul class="widget_area sidebar_cart sidebar">
                        <li>
                            <div class="widget woocommerce widget_shopping_cart">
                                <div class="hide_cart_widget_if_empty">
                                    <div class="widget_shopping_cart_content">
                                        <ul class="cart_list product_list_widget ">
                                            <li class="empty">No products in the cart.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="side_wrap">
                <div class="close">Close</div>
                <div class="panel_top">
                    <nav class="menu_main_nav_area">
                        <ul class="menu_main_nav">
                            <li class="menu-item current-menu-ancestor current-menu-parent menu-item-has-children"><a href="{{ route('home') }}">Home</a></li>
                            <li class="menu-item menu-item-has-children"><a>Treatments</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="{{ route('book_treatment') }}">Dermabrasion</a></li>
                                    <li class="menu-item"><a href="{{ route('book_treatment') }}">Facial Mask Lightenings</a></li>
                                    <li class="menu-item"><a href="{{ route('book_treatment') }}">Ultrasonic Scrubbing</a></li>
                                    <li class="menu-item"><a href="{{ route('treatment') }}">More</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="booking.html">Booking</a></li>
                            <li class="menu-item"><a href="{{ route('news_promo') }}">News & Promo</a></li>
                            <li class="menu-item menu-item-has-children"><a href="">User</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="{{ route('profile') }}">Profile</a></li>
                                    <li class="menu-item">
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class="search_wrap search_style_regular search_state_fixed search_ajax">
                        <div class="search_form_wrap">
                            <form role="search" method="get" class="search_form" action="#">
                                <button type="submit" class="search_submit icon-search-1" title="Start search"></button>
                                <input type="text" class="search_field" placeholder="Search" value="" name="s" />
                            </form>
                        </div>
                        <div class="search_results widget_area scheme_original">
                            <a class="search_results_close icon-cancel"></a>
                            <div class="search_results_content"></div>
                        </div>
                    </div>
                </div>
                <div class="panel_middle">
                    <div class="contact_field contact_phone">
                        <span class="contact_icon icon-icon_phone"></span>
                        <span class="contact_label contact_phone"><a href="tel:+18002453925">+1 800 245 39 25</a></span>
                    </div>
                    <div class="contact_field contact_mail">
                        <span class="contact_icon icon-mail"></span>
                        <span class="contact_email"><a href="mailto:info@yoursite.com">info@yoursite.com</a></span>
                    </div>
                    <div class="top_panel_top_open_hours icon-clock">Mon - Fry 10:00 - 18:00</div>
                    <div class="top_panel_top_user_area">
                        <ul class="menu_user_nav">
                        </ul>
                    </div>
                </div>
                <div class="panel_bottom">
                    <div class="contact_socials">
                        <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_small">
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
                    </div>
                </div>
            </div>
            <div class="mask"></div>
        </div>
        <!-- end header mobile -->

        <!-- header web -->
        <header class="top_panel_wrap top_panel_style_4 scheme_original">
            <div class="top_panel_wrap_inner top_panel_inner_style_4 top_panel_position_above">
                <div class="top_panel_middle">
                    <div class="content_wrap">
                        <div class="contact_logo">
                            <div class="logo">
                                <a href="{{ route('home') }}" style="font-size: 1.875em">
                                    <img src="assets/images/metime-logo-home.png" class="logo_main" alt="" width="238" height="56">
                                    <img src="assets/images/metime-logo-home.png" class="logo_fixed" alt="" width="238" height="56">
                                </a>
                            </div>
                        </div>
                        <div class="menu_main_wrap">
                            <nav class="menu_main_nav_area">
                                <ul class="menu_main_nav">
                                    <li class="menu-item current-menu-ancestor current-menu-parent"><a>Home</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a>Treatments</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="{{ route('book_treatment') }}">Dermabrasion</a></li>
                                        <li class="menu-item"><a href="{{ route('book_treatment') }}">Facial Mask Lightenings</a></li>
                                        <li class="menu-item"><a href="{{ route('book_treatment') }}">Ultrasonic Scrubbing</a></li>
                                        <li class="menu-item"><a href="{{ route('treatment') }}">More</a></li>
                                    </ul>
                            </li>
                                    <li class="menu-item"><a href="booking.html">Booking</a></li>
                                    <li class="menu-item"><a href="{{ route('news_promo') }}">News & Promo</a></li>
                                    <li class="menu-item menu-item-has-children"><a href="">User</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="{{ route('profile') }}">Profile</a></li>
                                            <li class="menu-item">
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <div class="search_wrap search_style_regular search_state_closed search_ajax">
                                <div class="search_form_wrap">
                                    <form role="search" method="get" class="search_form" action="#">
                                        <button type="submit" class="search_submit icon-search-1" title="Open search"></button>
                                        <input type="text" class="search_field" placeholder="Search" value="" name="s" />
                                    </form>
                                </div>
                                <div class="search_results widget_area scheme_original">
                                    <a class="search_results_close icon-cancel"></a>
                                    <div class="search_results_content"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        @yield('slider')
        <div class="page_content_wrap page_paddings_no">
            <div class="content_wrap">
                <div class="content">
                    @yield('content')

                    <!-- footer -->
                    <div class="sc_row-full-width"></div>
                    <div class="sc_row row">
                        <div class="column sc_column_container sc_col-sm-12">
                            <div class="sc_column-inner ">
                                <div class="wrapper">
                                    @php
                                        $hide_icon_up_ = isset($hide_icon_up) ? $hide_icon_up : false;
                                    @endphp
                                    @if (!$hide_icon_up_)
                                    <a href="#" class="sc_icon icon-up sc_icon_shape_square aligncenter scroll_to_top show"></a>
                                    @endif
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
                </div>
            </div>
        </div>
        
        <!-- footer -->
        
    </div>
</div>

<script type='text/javascript' src='app.js'></script>
<!-- off karena page profile -->
<!-- 

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
<script type='text/javascript' src="assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>