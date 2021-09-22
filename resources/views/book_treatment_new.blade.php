@extends('layouts.app_main')

@section('style')
<link rel='stylesheet' href='assets/jacqueline/js/vendor/prettyPhoto/prettyPhoto.css' type='text/css' media='all' />
<link rel='stylesheet' href='assets/jacqueline/js/vendor/woo/woocommerce-layout.css' type='text/css' media='all' />
<link rel='stylesheet' href='assets/jacqueline/js/vendor/woo/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' href='assets/jacqueline/js/vendor/woo/woocommerce.css' type='text/css' media='all' />
<link rel='stylesheet' href='assets/jacqueline/js/vendor/woo/plugin.woocommerce.css' type='text/css' media='all' />
@endsection

@section('content')
<article class="post_item post_item_single post_item_product">
    <div class="product">
        <div class="images">
            <a href="assets/images/treatments/treatment-mask-370x370.jpg" class="woocommerce-main-image zoom" title="" data-rel="prettyPhoto">
                <img width="auto" height="auto" src="assets/images/treatments/treatment-mask-370x370.jpg" class="attachment-shop_single size-shop_single " alt="" title="3473311970015_94"/></a>
        </div>
        <div class="summary entry-summary">
            <h1 class="product_title entry-title">DERMABRASION</h1>
            <div>
                <p class="price">
                    <span class="woocommerce-Price-amount amount">
                        <span class="woocommerce-Price-currencySymbol">IDR </span>25.41
                    </span><br>
                    <span style="color: black">Estimate Time: </span> 45 minutes
                </p>
            </div>
            <div>
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse.
                </p>
            </div>
            <form class="cart" method="post" enctype='multipart/form-data'>
                <div class="quantity">
                    <input type="number" step="1" min="1" max="999" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric" />
                </div>
                <input type="hidden" name="add-to-cart" value="#" />
                <input placeholder="masukkan tanggal Awal" type="text" class="form-control datepicker" name="tgl_awal">
                <button type="submit" class="single_add_to_cart_button button alt" disabled>Add to cart</button>
            </form>
            <div class="product_meta">
                <span class="product_id">Product ID:
                    <span>777</span>
                </span>
            </div>
        </div>
        <div class="woocommerce-tabs wc-tabs-wrapper">
            <ul class="tabs wc-tabs">
                <li class="description_tab">
                    <a href="#tab-description">Description</a>
                </li>
                <li class="reviews_tab">
                    <a href="#tab-reviews">Terms & Condition</a>
                </li>
            </ul>
            <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description">
                <h3>About This Service</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse.
                </p>

                <h3>What Can I Expect</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse.
                </p>

                <h3>About This Service</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse.
                </p>
            </div>
            <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab" id="tab-reviews">
                <ol class="sc_list sc_list_style_ol">
                    <li class="sc_list_item">
                        <div class="text_column content_element">
                            <div class="wrapper">
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </li>
                    <li class="sc_list_item">
                        <div class="text_column content_element">
                            <div class="wrapper">
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </li>
                    <li class="sc_list_item">
                        <div class="text_column content_element">
                            <div class="wrapper">
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
        <div class="related products">
            <h2>Related Products</h2>
            <ul class="products">
                <li class="product column-1_4 instock">
                    <div class="post_item_wrap">
                        <div class="post_featured">
                            <div class="post_thumb">
                                <div class="button_container">
                                    <a class="button view_link" href="single-product.html">View</a>
                                </div>
                                <div class="button_container cart"></div>
                                <img width="391" height="500" src="images/391x500.jpg" class="attachment-shop_catalog size-shop_catalog " alt="" title="3473311421005_95" />
                                <a rel="nofollow" href="single-product.html" data-quantity="1" data-product_id="337" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                            </div>
                        </div>
                        <div class="post_content">
                            <h3>
                                <a href="single-product.html">Masque Contour des Yeux</a>
                            </h3>
                            <span class="price">
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">&pound;</span>25.00
                                </span>
                            </span>
                        </div>
                    </div>
                </li>
                <li class="product column-1_4 instock">
                    <div class="post_item_wrap">
                        <div class="post_featured">
                            <div class="post_thumb">
                                <div class="button_container">
                                    <a class="button view_link" href="single-product.html">View</a>
                                </div>
                                <div class="button_container cart"></div>
                                <img width="391" height="500" src="images/391x500.jpg" class="attachment-shop_catalog size-shop_catalog " alt="" title="3473311504060-hd" />
                                <a rel="nofollow" href="single-product.html" data-quantity="1" data-product_id="332" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                            </div>
                        </div>
                        <div class="post_content">
                            <h3>
                                <a href="single-product.html">The Supreme Skin Care</a>
                            </h3>
                            <span class="price">
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">&pound;</span>47.00
                                </span>
                            </span>
                        </div>
                    </div>
                </li>
                <li class="product column-1_4 instock">
                    <div class="post_item_wrap">
                        <div class="post_featured">
                            <div class="post_thumb">
                                <div class="button_container">
                                    <a class="button view_link" href="single-product.html">View</a>
                                </div>
                                <div class="button_container cart"></div>
                                <img width="391" height="500" src="images/391x500.jpg" class="attachment-shop_catalog size-shop_catalog " alt="" title="huile_pr_cieuse_-_beaut_stars_2015_-_zoom_fiche" />
                                <a rel="nofollow" href="single-product.html" data-quantity="1" data-product_id="342" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                            </div>
                        </div>
                        <div class="post_content">
                            <h3>
                                <a href="single-product.html">BLACK ROSE FACE OIL</a>
                            </h3>
                            <span class="price">
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">&pound;</span>63.00
                                </span>
                            </span>
                        </div>
                    </div>
                </li>
                <li class="product column-1_4 instock">
                    <div class="post_item_wrap">
                        <div class="post_featured">
                            <div class="post_thumb">
                                <div class="button_container animate animateOut">
                                    <a class="button view_link" href="single-product.html">View</a>
                                    <a class="button view_link clone" href="single-product.html">View</a>
                                </div>
                                <div class="button_container cart">
                                    <a rel="nofollow" href="single-product.html" data-quantity="1" data-product_id="758" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                </div>
                                <img width="391" height="500" src="images/391x500.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" title="image1xxl (1)">
                            </div>
                        </div>
                        <div class="post_content">
                            <h3>
                                <a href="single-product.html">EAU DU SOIR SCENTED SOAP</a>
                            </h3>
                            <span class="price">
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">£</span>10.00
                                </span>
                            </span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</article>

<script type='text/javascript' src='assets/jacqueline/js/vendor/jquery/jquery.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/jquery/jquery-migrate.min.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/woo/add-to-cart.min.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/woo/woocommerce-add-to-cart.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/modernizr.min.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/prettyPhoto/jquery.prettyPhoto.min.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/prettyPhoto/jquery.prettyPhoto.init.min.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/woo/single-product.min.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/woo/jquery.blockUI.min.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/woo/woocommerce.min.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/woo/jquery.cookie.min.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/woo/cart-fragments.min.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/superfish.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/jquery.slidemenu.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/custom/core.utils.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/custom/core.init.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/custom/theme.init.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/social-share.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/custom/theme.shortcodes.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/custom/core.messages.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/grid.layout/grid.layout.min.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/jquery/widget.min.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/jquery/mouse.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/jquery/slider.min.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/jquery/jquery-ui-touch-punch.min.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/jquery/price-slider.min.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/jquery/core.min.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/jquery/tabs.min.js'></script>

@endsection