
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
                            <a href="{{url('/')}}" title="Go to Home Page">Home</a>
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
                                                                src="{{asset('user/images/category-img1.jpg')}}"></a>
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
                                                                src="{{asset('user/images/category-img2.jpg')}}"></a>
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

                        <div class="col-main">



                            <!-- Not For version 3, 4 -->
                            <h2 class="page-heading">
                                <span class="page-heading-title">{{$current_category->name}}</span>
                            </h2>
                            <!--page-heading-->
                            <!-- Not For version 3, 4 -->



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
                                                        href="#"
                                                        title="Galaxy Note S5" class="link-learn">Learn More</a></p>
                                            </div>
                                            <!--desc std-->


                                            <div class="price-box">
                                                <span class="regular-price">
                                                    <span class="price">UGX {{$cat_prod->purchase_price}}</span> </span>

                                            </div>

                                            <!-- BEGIN ACTIONS -->
                                            <div class="actions">
                                                <span class="add-to-links">
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

                                </ol>

                            </div>
                            <!--category-products-->

                        </div>
                        <!--col-main-->
                    </div>

                    <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow bounceInUp animated animated"
                        style="visibility: visible;">


                        <div class="block block-layered-nav">
                            <div class="block-title">
                                Browse By </div>
                            <div class="block-content">
                                <dl id="narrow-by-list2">
                                    <dt class="last even">Category</dt>
                                    <dd class="last even">
                                        <ol>
                                        @foreach ($total_category_products as $total_cat_prod) 
                                            <li>
                                                <a
                                                    href="{{ url('product-category', [$total_cat_prod->id]) }}">{{$total_cat_prod->name}}</a>
                                                ({{$total_cat_prod->total_products}})
                                            </li>
                                        @endforeach
                                  
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




    </div>
    <!--page-->

    @include('layouts.user.footer')
</body>

</html>