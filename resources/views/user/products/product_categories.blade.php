
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TentraSmart</title>
        <link rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('user/css/revslider.css') }}">
        <link rel="stylesheet" href="{{ asset('user/css/jquery.mobile-menu.css') }}">
        <link rel="stylesheet" href="{{ asset('user/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('user/css/countdowntimer/countdowntimer.css') }}">

        <link rel="stylesheet" href="{{ asset('user/magik/css/jquery.fancybox.css') }}">
        <link rel="stylesheet" href="{{ asset('user/css/font-awesome.css') }}">

        <link rel="stylesheet" href="{{ asset('user/css/simple-line-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('user/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('user/css/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ asset('user/css/jquery.bxslider.css') }}">
        <link rel="stylesheet" href="{{ asset('user/css/flexslider.css') }}">
        <link rel="stylesheet" href="{{ asset('user/css/color-swatch.css') }}">

        <link rel="stylesheet" href="{{ asset('user/css/scrollingcart/scroll.css') }}">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:300,400,500,700,600" />
        <link rel="icon" href="http://mas1.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://mas1.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />



 <!-- For version 1,2,3 -->  
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,600,500,700,800' rel='stylesheet' type='text/css'>
  @include('layouts.user.scripts')
 <script src="{{ asset('user/js/jquery.min.js') }}"></script>
 <script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
 <!-- End for version 4 -->
 <script type="text/javascript" src="{{asset('user/js/jquery.mobile-menu.min.js')}}"></script>

<script src="{{asset('user/js/revslider.js')}}" type="text/javascript"></script>
    </head>

    <script type='text/javascript'>
jQuery(document).ready(function() {
  jQuery('#rev_slider_4').show().revolution({
  dottedOverlay: 'none',
  delay: 5000,
  startwidth: 915,
  startheight: 490,
  hideThumbs: 200,
  thumbWidth: 200,
  thumbHeight: 50,
  thumbAmount: 2,
  navigationType: 'none',
  navigationArrows: 'solo',
  navigationStyle: 'round',
  touchenabled: 'on',
  onHoverStop: 'on',
  swipe_velocity: 0.7,
  swipe_min_touches: 1,
  swipe_max_touches: 1,
  drag_block_vertical: false,
  spinner: 'spinner0',
  keyboardNavigation: 'off',
  navigationHAlign: 'center',
  navigationVAlign: 'bottom',
  navigationHOffset: 0,
  navigationVOffset: 20,
  soloArrowLeftHalign: 'left',
  soloArrowLeftValign: 'center',
  soloArrowLeftHOffset: 20,
  soloArrowLeftVOffset: 0,
  soloArrowRightHalign: 'right',
  soloArrowRightValign: 'center',
  soloArrowRightHOffset: 20,
  soloArrowRightVOffset: 0,
  shadow: 0,
  fullWidth: 'on',
  fullScreen: 'off',
  stopLoop: 'off',
  stopAfterLoops: -1,
  stopAtSlide: -1,
  shuffle: 'off',
  autoHeight: 'off',
  forceFullWidth: 'on',
  fullScreenAlignForce: 'off',
  minFullScreenHeight: 0,
  hideNavDelayOnMobile: 1500,
  hideThumbsOnMobile: 'off',
  hideBulletsOnMobile: 'off',
  hideArrowsOnMobile: 'off',
  hideThumbsUnderResolution: 0,
  hideSliderAtLimit: 0,
  hideCaptionAtLimit: 0,
  hideAllCaptionAtLilmit: 0,
  startWithSlide: 0,
  fullScreenOffsetContainer: ''
});
});
</script> 
    <body class="  cms-index-index cms-bolt-home-one ">

      @include('layouts.user.header')
      
      @include('layouts.user.header2')

  
        <!-- For version 1 , 2 -->

        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul>
                            <li class="home">
                                <a href="http://mas1.magikthemes.com/index.php/bolt/" title="Go to Home Page">Home</a>

                                <span>/ </span>
                            </li>
                            <li class="category2022">
                                <strong>{{$current_category->name}}</strong>
                            </li>
                        </ul>
                    </div>
                    <!--col-xs-12-->
                </div>
                <!--row-->
            </div>
            <!--container-->
        </div>
        <!--breadcrumbs-->


        <!-- End for version 1, 2 -->

        <!-- BEGIN Main Container col2-left -->
        <div class="main-container col2-left-layout bounceInUp animated">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-sm-push-3">

                        <!-- Not For version 3 -->
                        <div class="category-description std">
                            <div class="slider-items-products">
                                <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                                    <div class="slider-items slider-width-col1 owl-carousel owl-theme"
                                        style="opacity: 1; display: block;">
                                        <div class="owl-wrapper-outer">
                                            <div class="owl-wrapper"
                                                style="width: 2132px; left: 0px; display: block; transition: all 1000ms ease 0s; transform: translate3d(0px, 0px, 0px);">
                                                <div class="owl-item" style="width: 533px;">
                                                    <div class="item"> <a href="#"><img alt="category img"
                                                                src="http://mas1.magikthemes.com/skin/frontend/rwd/bolt/images/category-img1.jpg"></a>
                                                        <div class="cat-img-title cat-bg cat-box">
                                                            <div class="small-tag">Electronics 2016</div>
                                                            <h2 class="cat-heading">Mobiles Collection</h2>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item" style="width: 533px;">
                                                    <div class="item"> <a href="#"><img alt="category img2"
                                                                src="http://mas1.magikthemes.com/skin/frontend/rwd/bolt/images/category-img2.jpg"></a>
                                                        <div class="cat-img-title cat-bg cat-box">
                                                            <div class="small-tag">Camera Style</div>
                                                            <h2 class="cat-heading">New Season</h2>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="owl-controls clickable">
                                            <div class="owl-buttons">
                                                <div class="owl-prev"><a class="flex-prev"></a></div>
                                                <div class="owl-next"><a class="flex-next"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- category-description std -->
                        <!-- Not For version 3 -->


                        <div class="col-main">









                            <!-- Not For version 3, 4 -->
                            <h2 class="page-heading">
                                <span class="page-heading-title">{{$current_category->name}}</span>
                            </h2>
                            <!--page-heading-->
                            <!-- Not For version 3, 4 -->


                            <!-- For version 4 -->


                            <!-- BEGIN CATEGORY PRODUCTS -->
                            <div class="category-products">


                                <ol class="products-list" id="products-list">

                                
                                @foreach ($category_products as $cat_prod) 
                                    <li class="item odd">
                                        <!-- BEGIN PRODUCT IMAGE -->
                                        <div class="product-image">

                                            <a href="{{ url('product-details', [$cat_prod->id]) }}"
                                                title="{{$cat_prod->product_name}}">
                                                <img id="{{$cat_prod->picture_url}}"
                                                    src="{{$cat_prod->picture_url}}"
                                                    alt="{{$cat_prod->product_name}}">
                                            </a>

                                        </div>
                                        <!--product-image-->
                                        <!-- BEGIN PRODUCT SHOP -->
                                        <div class="product-shop">
                                            <h2 class="product-name">
                                                <a href="{{ url('product-details', [$cat_prod->id]) }}"
                                                    title="{{$cat_prod->product_name}}">{{$cat_prod->product_name}}</a>
                                            </h2>

                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div style="width:0%" class="rating"></div>
                                                </div>
                                            </div>

                                            <div class="desc std">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text
                                                    ever since the 1500s, when an unknown printer took a galley of type
                                                    and scrambled it to make a type specimen book. It has survived not
                                                    only five centuries. <a
                                                        href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/galaxy-note-s5.html"
                                                        title="Galaxy Note S5" class="link-learn">Learn More</a></p>
                                            </div>
                                            <!--desc std-->




                                            <div class="price-box">
                                                <span class="regular-price">
                                                    <span class="price">UGX {{$cat_prod->purchase_price}}</span> </span>

                                            </div>



                                            <!-- BEGIN ACTIONS -->
                                            <div class="actions">
                                                <!-- <button type="button" title="Add to Cart"
                                                    class="button btn-cart ajx-cart"
                                                    onclick="setLocation('http://mas1.magikthemes.com/index.php/bolt/checkout/cart/add/uenc/aHR0cDovL21hczEubWFnaWt0aGVtZXMuY29tL2luZGV4LnBocC9ib2x0L21vYi1zbWFydHBob25lLmh0bWw,/product/445/form_key/XXO8wjyz0341CFmD/')"><span>Add
                                                        to Cart</span></button> -->

                                                <span class="add-to-links">
                                                    <!-- <a href="http://mas1.magikthemes.com/index.php/bolt/wishlist/index/add/product/445/form_key/XXO8wjyz0341CFmD/"
                                                        class="button link-wishlist" title="Add to wishlist"><span>Add
                                                            to wishlist</span></a> -->
                                                    <a href="{{route('user.add.to.cart', ['id' => $cat_prod->id]) }}"
                                                        class="button btn-cart" title="Add to cart"><span>Add to
                                                            Cart</span></a>
                                                </span>
                                                <!--add-to-links-->
                                            </div>
                                            <!--actions-->

                                        </div>
                                        <!--product-shop-->
                                    </li>

                                    @endforeach
<!-- 
                                    <li class="item even">
                                
                                        <div class="product-image">

                                            <a href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/titanium-vista-quattro.html"
                                                title="Titanium Vista Quattro">
                                                <img id="product-collection-image-465"
                                                    src="http://mas1.magikthemes.com/media/catalog/product/cache/69/small_image/9df78eab33525d08d6e5fb8d27136e95/p/r/product21_11.jpg"
                                                    alt="Titanium Vista Quattro">
                                            </a>

                                        </div>
                                       
                                        <div class="product-shop">
                                            <h2 class="product-name">
                                                <a href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/titanium-vista-quattro.html"
                                                    title="Titanium Vista Quattro">Titanium Vista Quattro</a>
                                            </h2>

                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div style="width:0%" class="rating"></div>
                                                </div>
                                            </div>

                                            <div class="desc std">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text
                                                    ever since the 1500s, when an unknown printer took a galley of type
                                                    and scrambled it to make a type specimen book. It has survived not
                                                    only five centuries. <a
                                                        href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/titanium-vista-quattro.html"
                                                        title="Titanium Vista Quattro" class="link-learn">Learn More</a>
                                                </p>
                                            </div>
                                         
                                            <div class="price-box">
                                                <span class="regular-price">
                                                    <span class="price">$750.00</span> </span>

                                            </div>

                                            <div class="actions">
                                                <button type="button" title="Add to Cart"
                                                    class="button btn-cart ajx-cart"
                                                    onclick="setLocation('http://mas1.magikthemes.com/index.php/bolt/checkout/cart/add/uenc/aHR0cDovL21hczEubWFnaWt0aGVtZXMuY29tL2luZGV4LnBocC9ib2x0L21vYi1zbWFydHBob25lLmh0bWw,/product/465/form_key/XXO8wjyz0341CFmD/')"><span>Add
                                                        to Cart</span></button>

                                                <span class="add-to-links">
                                                    <a href="http://mas1.magikthemes.com/index.php/bolt/wishlist/index/add/product/465/form_key/XXO8wjyz0341CFmD/"
                                                        class="button link-wishlist" title="Add to wishlist"><span>Add
                                                            to wishlist</span></a>
                                                    <a href="http://mas1.magikthemes.com/index.php/bolt/catalog/product_compare/add/product/465/uenc/aHR0cDovL21hczEubWFnaWt0aGVtZXMuY29tL2luZGV4LnBocC9ib2x0L21vYi1zbWFydHBob25lLmh0bWw,/form_key/XXO8wjyz0341CFmD/"
                                                        class="button link-compare" title="Add to compare"><span>Add to
                                                            compare</span></a>
                                                </span>

                                            </div>

                                        </div>
 
                                    </li> -->
                                </ol>

                            </div>
                            <!--category-products-->

                        </div>
                        <!--col-main-->
                    </div>

                    <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow bounceInUp animated animated"
                        style="visibility: visible;">


                        <!-- BEGIN SIDE-NAV-CATEGORY -->
                        <div class="side-nav-categories">
                            <div class="block-title">
                                Categories</div>
                            <!--block-title-->
                            <!-- BEGIN BOX-CATEGORY -->
                            <div class="box-content box-category">
                                <ul>

                                    <li>


                                        <a class="active"
                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone.html">Smartphones</a>
                                        <span class="subDropdown minus"></span>
                                        <!-- root -->


                                        <ul class="level0_2022" style="display:block">
                                            <li class="level1">


                                                <a
                                                    href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-samsung.html">
                                                    Samsung
                                                </a>


                                                <span class="subDropdown plus"></span>


                                                <ul class="level1" style="display: none;">
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-samsung/galaxy-g7.html">
                                                            Galaxy G7
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-samsung/sam-nexon.html">
                                                            Nexon J3 Pro
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-samsung/sam-prime-gold.html">
                                                            Prime Gold J2
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-samsung/mob-samsung-pro.html">
                                                            Samsung M2 Pro
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->


                                            </li>
                                            <!--level1-->
                                            <li class="level1">


                                                <a
                                                    href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-sony.html">
                                                    Sony
                                                </a>


                                                <span class="subDropdown plus"></span>


                                                <ul class="level1" style="display: none;">
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-sony/mob-xperia-dual.html">
                                                            Xperia XA Dual
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-sony/mob-graphite-black.html">
                                                            Graphite Black
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-sony/mob-ultra.html">
                                                            Ultra Dual G5
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-sony/mob-premium.html">
                                                            Premium Xperia Z5 Dual
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->


                                            </li>
                                            <!--level1-->
                                            <li class="level1">


                                                <a
                                                    href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-apple.html">
                                                    Apple
                                                </a>


                                                <span class="subDropdown plus"></span>


                                                <ul class="level1" style="display:none">
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-apple/mob-iphone7p.html">
                                                            iPhone 7 Plus
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-apple/mob-iphone6s.html">
                                                            iPhone 6s
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-apple/mob-iphone-se.html">
                                                            iPhone SE
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-apple/iphone-4.html">
                                                            iPhone 4
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->


                                            </li>
                                            <!--level1-->
                                            <li class="level1">


                                                <a
                                                    href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-lenovo.html">
                                                    Lenovo
                                                </a>


                                                <span class="subDropdown plus"></span>


                                                <ul class="level1" style="display:none">
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-lenovo/mob-vibek5.html">
                                                            Vibe K5 Plus
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-lenovo/mob-notep4.html">
                                                            Note P4
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-lenovo/mob-k6-power.html">
                                                            K6 Power
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-lenovo/mob-a6000.html">
                                                            A600 Shoot
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->


                                            </li>
                                            <!--level1-->
                                            <li class="level1">


                                                <a
                                                    href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-moto.html">
                                                    Motorola
                                                </a>


                                                <span class="subDropdown plus"></span>


                                                <ul class="level1" style="display:none">
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-moto/mob-moto-e4.html">
                                                            Moto E4 Plus
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-moto/mob-moto-g2.html">
                                                            Moto G2
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-moto/mob-g5-pro.html">
                                                            Moto G5 Pro
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-moto/mob-zgold.html">
                                                            Moto Z Gold
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->


                                            </li>
                                            <!--level1-->
                                            <li class="level1">


                                                <a
                                                    href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-htc.html">
                                                    HTC
                                                </a>


                                                <span class="subDropdown plus"></span>


                                                <ul class="level1" style="display:none">
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-htc/mob-desire6.html">
                                                            Desire 640
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-htc/mob-sprinklepro.html">
                                                            Sprinkle Pro
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-htc/mob-desire526.html">
                                                            Desire 526G Plus
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-htc/mob-htcstone.html">
                                                            HTC Stone Black
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->


                                            </li>
                                            <!--level1-->
                                        </ul>
                                        <!--level0-->

                                        <!--(count($_subcategories) > 0)-->
                                    </li>
                                    <!--level 0-->
                                    <li>


                                        <a href="http://mas1.magikthemes.com/index.php/bolt/mob-phones.html">Phones</a>
                                        <span class="subDropdown plus"></span> <!-- root -->


                                        <ul class="level0_2023" style="display:none">
                                            <li class="level1">


                                                <a
                                                    href="http://mas1.magikthemes.com/index.php/bolt/mob-phones/mob-nokia.html">
                                                    Nokia
                                                </a>


                                                <span class="subDropdown minus"></span>

                                                <ul class="level1" style="display:none">
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-phones/mob-nokia/mob-nokia-108.html">
                                                            Nokia 108 Dual SIM
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-phones/mob-nokia/mob-asha-205.html">
                                                            Asha 205
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-phones/mob-nokia/mob-lumia-800.html">
                                                            Lumia 800
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-phones/mob-nokia/mob-nokia-classic.html">
                                                            Classic Prime
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->


                                            </li>
                                            <!--level1-->
                                            <li class="level1">


                                                <a
                                                    href="http://mas1.magikthemes.com/index.php/bolt/mob-phones/mob-intex.html">
                                                    Intex
                                                </a>


                                                <span class="subDropdown minus"></span>

                                                <ul class="level1" style="display:none">
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-phones/mob-intex/mob-aqua-lions-4g.html">
                                                            Aqua Lions 4G
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-phones/mob-intex/mob-intex-elyt-e7.html">
                                                            Intex Elyt-e7
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-phones/mob-intex/mob-aqua-trend.html">
                                                            Aqua Trend
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-phones/mob-intex/intex-speed-hd.html">
                                                            Intex-speed-hd
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->


                                            </li>
                                            <!--level1-->
                                            <li class="level1">


                                                <a
                                                    href="http://mas1.magikthemes.com/index.php/bolt/mob-phones/mob-alcatel.html">
                                                    Alcatel
                                                </a>


                                                <span class="subDropdown minus"></span>

                                                <ul class="level1" style="display:none">
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-phones/mob-alcatel/mob-alcatel-idol.html">
                                                            Alcatel IDOL 5S
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-phones/mob-alcatel/mob-pixi-plus-power.html">
                                                            Pixi 4 Plus Power
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-phones/mob-alcatel/mob-one-touch-idol.html">
                                                            One Touch Idol
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-phones/mob-alcatel/mob-alcatel-flash.html">
                                                            Alcatel Flash
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->


                                            </li>
                                            <!--level1-->
                                            <li class="level1">


                                                <a
                                                    href="http://mas1.magikthemes.com/index.php/bolt/mob-phones/mob-lephone.html">
                                                    Lephone
                                                </a>


                                                <span class="subDropdown minus"></span>

                                                <ul class="level1" style="display:none">
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-phones/mob-lephone/mob-shine-lite.html">
                                                            Shine Lite
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-phones/mob-lephone/mob-lephone-idol-dual.html">
                                                            Lephone Idol Dual
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-phones/mob-lephone/mob-lephone-one-touch.html">
                                                            One Touch Idol
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-phones/mob-lephone/mob-pixi-prime.html">
                                                            Pixi Prime Gold
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->


                                            </li>
                                            <!--level1-->
                                            <li class="level1">


                                                <a
                                                    href="http://mas1.magikthemes.com/index.php/bolt/mob-phones/mob-melbon.html">
                                                    Melbon
                                                </a>


                                                <span class="subDropdown minus"></span>

                                                <ul class="level1" style="display:none">
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-phones/mob-melbon/mob-knight-premium.html">
                                                            Knight Premium
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-phones/mob-melbon/mob-pulse-spark.html">
                                                            Pulse Spark
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-phones/mob-melbon/mob-hd-plus-a190.html">
                                                            HD plus A190
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-phones/mob-melbon/mob-pace-juice.html">
                                                            Pace Juice
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->


                                            </li>
                                            <!--level1-->
                                            <li class="level1">


                                                <a
                                                    href="http://mas1.magikthemes.com/index.php/bolt/mob-phones/mob-micro.html">
                                                    Micromax
                                                </a>


                                                <span class="subDropdown minus"></span>

                                                <ul class="level1" style="display:none">
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-phones/mob-micro/mob-canvas-sparkq.html">
                                                            Canvas Spark Q380
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-phones/mob-micro/mob-canvas-selfie-lens.html">
                                                            Canvas Selfie Lens
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-phones/mob-micro/mob-bolt-q381.html">
                                                            Bolt Q381
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-phones/mob-micro/mob-nitro-4g.html">
                                                            Nitro 4G E455
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->


                                            </li>
                                            <!--level1-->
                                        </ul>
                                        <!--level0-->

                                        <!--(count($_subcategories) > 0)-->
                                    </li>
                                    <!--level 0-->
                                    <li>


                                        <a href="http://mas1.magikthemes.com/index.php/bolt/mob-wearables.html">Apple
                                            Phones</a>
                                        <span class="subDropdown plus"></span> <!-- root -->


                                        <ul class="level0_2024" style="display:none">
                                            <li class="level1">


                                                <a
                                                    href="http://mas1.magikthemes.com/index.php/bolt/mob-wearables/mob-karbon.html">
                                                    Karbon
                                                </a>


                                                <span class="subDropdown minus"></span>

                                                <ul class="level1" style="display:none">
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-wearables/mob-karbon/mob-titanium-octane.html">
                                                            Titanium Octane
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-wearables/mob-karbon/mob-aura-note-4g.html">
                                                            Aura Note 4G
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-wearables/mob-karbon/mob-titanium-mach-five.html">
                                                            Titanium Mach Five
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-wearables/mob-karbon/mob-karbonn-k101-star.html">
                                                            Karbonn K101 Star
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->


                                            </li>
                                            <!--level1-->
                                            <li class="level1">


                                                <a
                                                    href="http://mas1.magikthemes.com/index.php/bolt/mob-wearables/mob-lava.html">
                                                    Lava
                                                </a>


                                                <span class="subDropdown minus"></span>

                                                <ul class="level1" style="display:none">
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-wearables/mob-lava/mob-lava-iris-x8.html">
                                                            Lava Iris X8 16GB
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-wearables/mob-lava/mob-kkt-uno-plus.html">
                                                            KKT Uno Plus
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-wearables/mob-lava/mob-lava-pixelv2.html">
                                                            Lava Pixel V2
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-wearables/mob-lava/mob-iris-504q.html">
                                                            Iris 504Q
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->


                                            </li>
                                            <!--level1-->
                                            <li class="level1">


                                                <a
                                                    href="http://mas1.magikthemes.com/index.php/bolt/mob-wearables/mob-gionee.html">
                                                    Gionee
                                                </a>


                                                <span class="subDropdown minus"></span>

                                                <ul class="level1" style="display:none">
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-wearables/mob-gionee/mob-pioneer-p5w.html">
                                                            Pioneer P5W
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-wearables/mob-gionee/mob-marathon-m2.html">
                                                            Marathon M2
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-wearables/mob-gionee/mob-gionee-e8.html">
                                                            Gionee ELIFE E8
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-wearables/mob-gionee/mob-gionee-gpad-g3.html">
                                                            Gionee Gpad G3
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->


                                            </li>
                                            <!--level1-->
                                            <li class="level1">


                                                <a
                                                    href="http://mas1.magikthemes.com/index.php/bolt/mob-wearables/mob-datawind.html">
                                                    Datawind
                                                </a>


                                                <span class="subDropdown minus"></span>

                                                <ul class="level1" style="display:none">
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-wearables/mob-datawind/mob-pocketsurfer-2g.html">
                                                            PocketSurfer 2G4
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-wearables/mob-datawind/mob-unisalte.html">
                                                            Unisalte 2G
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-wearables/mob-datawind/mob-suferpocket.html">
                                                            Suferpocket 3G
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-wearables/mob-datawind/mob-mobislate.html">
                                                            Mobislate
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->


                                            </li>
                                            <!--level1-->
                                            <li class="level1">


                                                <a
                                                    href="http://mas1.magikthemes.com/index.php/bolt/mob-wearables/mob-callbar.html">
                                                    Callbar
                                                </a>


                                                <span class="subDropdown minus"></span>

                                                <ul class="level1" style="display:none">
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-wearables/mob-callbar/mob-dream-uno.html">
                                                            Dream UNO
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-wearables/mob-callbar/mob-stellar-pinnacle-pro.html">
                                                            Stellar Pinnacle Pro
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-wearables/mob-callbar/mob-flo-m-5455.html">
                                                            Flo M-5455
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-wearables/mob-callbar/mob-boss-chocolate.html">
                                                            Boss Chocolate M-5373
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->


                                            </li>
                                            <!--level1-->
                                            <li class="level1">


                                                <a
                                                    href="http://mas1.magikthemes.com/index.php/bolt/mob-wearables/mob-spice.html">
                                                    Spice
                                                </a>


                                                <span class="subDropdown minus"></span>

                                                <ul class="level1" style="display:none">
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-wearables/mob-spice/mob-x-life-hd.html">
                                                            X-Life 520 HD
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-wearables/mob-spice/mob-boss-dura-m-5030.html">
                                                            Boss Dura M-5030
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-wearables/mob-spice/mob-smart-flo.html">
                                                            Smart Flo Mi-359
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-wearables/mob-spice/mob-stellar-mettle-icon.html">
                                                            Stellar Mettle Icon
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->


                                            </li>
                                            <!--level1-->
                                        </ul>
                                        <!--level0-->

                                        <!--(count($_subcategories) > 0)-->
                                    </li>
                                    <!--level 0-->
                                    <li>


                                        <a href="http://mas1.magikthemes.com/index.php/bolt/mob-selfie.html">Tablets</a>
                                        <span class="subDropdown plus"></span> <!-- root -->


                                        <ul class="level0_2025" style="display:none">
                                            <li class="level1">


                                                <a
                                                    href="http://mas1.magikthemes.com/index.php/bolt/mob-selfie/mob-swipe.html">
                                                    Swipe
                                                </a>


                                                <span class="subDropdown minus"></span>

                                                <ul class="level1" style="display:none">
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-selfie/mob-swipe/mob-swipe-konnect.html">
                                                            Swipe Konnect 4E
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-selfie/mob-swipe/mob-swipe-elite-plus.html">
                                                            Swipe Elite Plus
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-selfie/mob-swipe/mob-swipe-sonic.html">
                                                            Swipe Sonic
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-selfie/mob-swipe/mob-fablet-f2.html">
                                                            Fablet F2
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->


                                            </li>
                                            <!--level1-->
                                            <li class="level1">


                                                <a
                                                    href="http://mas1.magikthemes.com/index.php/bolt/mob-selfie/mob-vivo.html">
                                                    Vivo
                                                </a>


                                                <span class="subDropdown minus"></span>

                                                <ul class="level1" style="display:none">
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-selfie/mob-vivo/mob-vivo-v5plus.html">
                                                            Vivo V5 Plus
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-selfie/mob-vivo/mob-y66-matte.html">
                                                            Y66 Matte Black
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-selfie/mob-vivo/mob-vivo-y513.html">
                                                            Vivo Y51L
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-selfie/mob-vivo/mob-vivo-lite.html">
                                                            Vivo V5Lite
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->


                                            </li>
                                            <!--level1-->
                                            <li class="level1">


                                                <a
                                                    href="http://mas1.magikthemes.com/index.php/bolt/mob-selfie/mob-zopo.html">
                                                    Zopo
                                                </a>


                                                <span class="subDropdown minus"></span>

                                                <ul class="level1" style="display:none">
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-selfie/mob-zopo/mob-zopo7.html">
                                                            ZOPO Speed 7
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-selfie/mob-zopo/mob-zopo-flash.html">
                                                            ZOPO Flash E
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-selfie/mob-zopo/mob-zopo-color.html">
                                                            ZOPO Color F2
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <li class="level2">


                                                        <a
                                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-selfie/mob-zopo/mob-marshmallow.html">
                                                            Marshmallow
                                                        </a>




                                                    </li>
                                                    <!--level2-->
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->


                                            </li>
                                            <!--level1-->
                                        </ul>
                                        <!--level0-->

                                        <!--(count($_subcategories) > 0)-->
                                    </li>
                                    <!--level 0-->
                                    <li>


                                        <a
                                            href="http://mas1.magikthemes.com/index.php/bolt/mob-accesories.html">Accesories</a>
                                        <!-- root -->

                                        <!--(count($_subcategories) > 0)-->
                                    </li>
                                    <!--level 0-->
                                </ul>
                            </div>
                            <!--box-content box-category-->
                        </div>
                        <!--side-nav-categories-->
                        <div class="block block-layered-nav">
                            <div class="block-title">
                                Browse By </div>
                            <div class="block-content">
                                <dl id="narrow-by-list2">
                                    <dt class="last odd">Category</dt>
                                    <dd class="last odd">
                                        <ol>
                                            <li>
                                                <a
                                                    href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-samsung.html">Samsung</a>
                                                (9)
                                            </li>
                                            <li>
                                                <a
                                                    href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-sony.html">Sony</a>
                                                (9)
                                            </li>
                                            <li>
                                                <a
                                                    href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-apple.html">Apple</a>
                                                (9)
                                            </li>
                                            <li>
                                                <a
                                                    href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-lenovo.html">Lenovo</a>
                                                (9)
                                            </li>
                                            <li>
                                                <a
                                                    href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-moto.html">Motorola</a>
                                                (9)
                                            </li>
                                            <li>
                                                <a
                                                    href="http://mas1.magikthemes.com/index.php/bolt/mob-smartphone/mob-htc.html">HTC</a>
                                                (9)
                                            </li>
                                        </ol>
                                    </dd>
                                </dl>
                                <script type="text/javascript">
                                decorateDataList('narrow-by-list2')
                                </script>
                            </div>
                        </div>
                        <div class="hot-banner"><img
                                src="http://mas1.magikthemes.com/skin/frontend/rwd/bolt/images/hot-trends-banner.jpg"
                                alt="banner"></div>
                        <!-- <div class="block block-list block-cart">
                            <div class="block-title">

                                My Cart
                            </div>
                            <div class="block-content">
                                <p class="empty">You have no items in your shopping cart.</p>
                            </div>
                        </div> -->

                        <!-- <div class="block block-compare">
                            <div class="block-title">
                                Compare Products

                            </div>
                            <div class="block-content">
                                <p class="empty">You have no items to compare.</p>
                            </div>
                           
                        </div> -->
                        <!--block block-list block-compare-->

                        <div class="custom-slider">
                            <div>
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#carousel-example-generic" data-slide-to="0">
                                        </li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="item active"><img
                                                src="http://mas1.magikthemes.com/skin/frontend/rwd/bolt/images/slide3.jpg"
                                                alt="slide3">
                                            <div class="carousel-caption">
                                                <h3><a title=" Sample Product" href="product-detail.html">50% OFF</a>
                                                </h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <a class="link" href="#">Buy Now</a>
                                            </div>
                                        </div>
                                        <div class="item"><img
                                                src="http://mas1.magikthemes.com/skin/frontend/rwd/bolt/images/slide1.jpg"
                                                alt="slide1">
                                            <div class="carousel-caption">
                                                <h3><a title=" Sample Product" href="product-detail.html">Hot
                                                        collection</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </div>
                                        <div class="item"><img
                                                src="http://mas1.magikthemes.com/skin/frontend/rwd/bolt/images/slide2.jpg"
                                                alt="slide2">
                                            <div class="carousel-caption">
                                                <h3><a title=" Sample Product" href="product-detail.html">Summer
                                                        collection</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                        <span class="sr-only">Previous</span> </a> <a class="right carousel-control"
                                        href="#carousel-example-generic" data-slide="next"> <span
                                            class="sr-only">Next</span> </a>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <!--col-right sidebar-->
                </div>
                <!--row-->
            </div>
            <!--container-->
        </div>
        <!--main-container col2-left-layout-->


        <!-- End for version 4 -->





        <!-- For version 1,2,3 -->


        <!-- For version 1,2 -->
        <!-- Brand Logo -->
        






    </div>
    <!--page-->

    @include('layouts.user.footer')
</body>

</html>