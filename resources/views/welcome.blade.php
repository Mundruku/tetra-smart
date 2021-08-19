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
      @include('layouts.user.landing')

<!-- latest blog -->
       <div class="container">

 <div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
   <div class="blog-outer-container">
    <!-- <div class="new_title">
      <h2>Latest Blog</h2>
    </div>new_title -->
   
    <div class="blog-inner">
      
       <!-- For version 1 --> 
        

          
       <!-- End for v2 -->
 
   </div><!--blog_inner-->
  </div> <!--blog-outer-container-->
 </div> <!-- col-lg-12 col-md-12 col-sm-12 col-xs-12 -->
</div> <!--row--> 
</div>      
         
      

      @include('layouts.user.footer')
    
     
      
 

    </body>
</html>
