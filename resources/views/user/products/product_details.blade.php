


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

<!-- from admin template -->

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('user/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('user/dist/css/adminlte.min.css') }}">

<!-- end admin template -->


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


@include('layouts.user.header')
      
      @include('layouts.user.header2')
 <!-- Main content -->
 <section class="content">

<!-- Default box -->
<div class="card card-solid">

@foreach ($product_details as $details)
  <div class="card-body">
    <div class="row">
      <div class="col-12 col-sm-6">
        <h3 class="d-inline-block d-sm-none">{{strtoupper($details->product_name)}}</h3>
        <div class="col-12">
          <img src="{{ $details->picture_url }}" class="product-image" alt="Product Image">
        </div>
        <div class="col-12 product-image-thumbs">
          <div class="product-image-thumb active"><img src="{{ $details->picture_url }}" alt="Product Image"></div>
          <div class="product-image-thumb" ><img src="{{ $details->picture_url }}" alt="Product Image"></div>
          <div class="product-image-thumb" ><img src="{{ $details->picture_url }}" alt="Product Image"></div>
          <!-- <div class="product-image-thumb" ><img src="{{ asset('user/dist/img/prod-4.jpg') }}" alt="Product Image"></div>
          <div class="product-image-thumb" ><img src="{{ asset('user/dist/img/prod-5.jpg') }}" alt="Product Image"></div> -->
        </div>
      </div>
      <div class="col-12 col-sm-6">
        <h3 class="my-3">{{strtoupper($details->product_name)}}</h3>
        <h5 class="mt-3">{{strtoupper($details->category_name)}}  |  {{strtoupper($details->sub_category_name)}}</h5>
        <!-- <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p> -->

        <hr>
        <h4>Available Colors</h4>
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
          <label class="btn btn-default text-center active">
            <input type="radio" name="color_option" id="color_option_a1" autocomplete="off" checked>
            Green
            <br>
            <i class="fas fa-circle fa-2x text-green"></i>
          </label>
          <label class="btn btn-default text-center">
            <input type="radio" name="color_option" id="color_option_a2" autocomplete="off">
            Blue
            <br>
            <i class="fas fa-circle fa-2x text-blue"></i>
          </label>
          <label class="btn btn-default text-center">
            <input type="radio" name="color_option" id="color_option_a3" autocomplete="off">
            Purple
            <br>
            <i class="fas fa-circle fa-2x text-purple"></i>
          </label>
          <label class="btn btn-default text-center">
            <input type="radio" name="color_option" id="color_option_a4" autocomplete="off">
            Red
            <br>
            <i class="fas fa-circle fa-2x text-red"></i>
          </label>
          <label class="btn btn-default text-center">
            <input type="radio" name="color_option" id="color_option_a5" autocomplete="off">
            Orange
            <br>
            <i class="fas fa-circle fa-2x text-orange"></i>
          </label>
        </div>

        <h4 class="mt-3">Size <small>Please select one</small></h4>
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
          <label class="btn btn-default text-center">
            <input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
            <span class="text-xl">S</span>
            <br>
            Small
          </label>
          <label class="btn btn-default text-center">
            <input type="radio" name="color_option" id="color_option_b2" autocomplete="off">
            <span class="text-xl">M</span>
            <br>
            Medium
          </label>
          <label class="btn btn-default text-center">
            <input type="radio" name="color_option" id="color_option_b3" autocomplete="off">
            <span class="text-xl">L</span>
            <br>
            Large
          </label>
          <label class="btn btn-default text-center">
            <input type="radio" name="color_option" id="color_option_b4" autocomplete="off">
            <span class="text-xl">XL</span>
            <br>
            Xtra-Large
          </label>
        </div>

        <div class="bg-gray py-2 px-3 mt-4">
          <h2 class="mb-0">
           UGX {{number_format($details->price)}}
          </h2>
          <!-- <h4 class="mt-0">
            <small>Ex Tax: $80.00 </small>
          </h4> -->
        </div>

        <div class="mt-4">
          <div class="btn btn-primary btn-lg btn-flat">
            <i class="fas fa-cart-plus fa-lg mr-2"></i>
            Add to Cart
          </div>

          <div class="btn btn-default btn-lg btn-flat">
            <i class="fas fa-heart fa-lg mr-2"></i>
            Add to Wishlist
          </div>
        </div>

        <!-- <div class="mt-4 product-share">
          <a href="#" class="text-gray">
            <i class="fab fa-facebook-square fa-2x"></i>
          </a>
          <a href="#" class="text-gray">
            <i class="fab fa-twitter-square fa-2x"></i>
          </a>
          <a href="#" class="text-gray">
            <i class="fas fa-envelope-square fa-2x"></i>
          </a>
          <a href="#" class="text-gray">
            <i class="fas fa-rss-square fa-2x"></i>
          </a>
        </div> -->

      </div>
    </div>
    <div class="row mt-4">
      <nav class="w-100">
        <div class="nav nav-tabs" id="product-tab" role="tablist">
          <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
          <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comments</a>
          <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Rating</a>
        </div>
      </nav>
      <div class="tab-content p-3" id="nav-tabContent">
        <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae condimentum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed posuere, purus at efficitur hendrerit, augue elit lacinia arcu, a eleifend sem elit et nunc. Sed rutrum vestibulum est, sit amet cursus dolor fermentum vel. Suspendisse mi nibh, congue et ante et, commodo mattis lacus. Duis varius finibus purus sed venenatis. Vivamus varius metus quam, id dapibus velit mattis eu. Praesent et semper risus. Vestibulum erat erat, condimentum at elit at, bibendum placerat orci. Nullam gravida velit mauris, in pellentesque urna pellentesque viverra. Nullam non pellentesque justo, et ultricies neque. Praesent vel metus rutrum, tempus erat a, rutrum ante. Quisque interdum efficitur nunc vitae consectetur. Suspendisse venenatis, tortor non convallis interdum, urna mi molestie eros, vel tempor justo lacus ac justo. Fusce id enim a erat fringilla sollicitudin ultrices vel metus. </div>
        <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"> Vivamus rhoncus nisl sed venenatis luctus. Sed condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et finibus sem, ut commodo lectus. Cras eget neque dignissim, placerat orci interdum, venenatis odio. Nulla turpis elit, consequat eu eros ac, consectetur fringilla urna. Duis gravida ex pulvinar mauris ornare, eget porttitor enim vulputate. Mauris hendrerit, massa nec aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl dui sit amet eros. Nulla turpis lorem, dignissim a sapien eget, ultrices venenatis dolor. Curabitur vel turpis at magna elementum hendrerit vel id dui. Curabitur a ex ullamcorper, ornare velit vel, tincidunt ipsum. </div>
        <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"> Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et erat. Etiam dignissim aliquam ligula, aliquet feugiat nibh rhoncus ut. Aliquam efficitur lacinia lacinia. Morbi ac molestie lectus, vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at, consectetur nec justo. Quisque suscipit odio velit, at accumsan urna vestibulum a. Proin dictum, urna ut varius consectetur, sapien justo porta lectus, at mollis nisi orci et nulla. Donec pellentesque tortor vel nisl commodo ullamcorper. Donec varius massa at semper posuere. Integer finibus orci vitae vehicula placerat. </div>
      </div>
    </div>
  </div>
  @endforeach
  <!-- /.card-body -->
</div>
<!-- /.card -->

</section>
<!-- /.content -->

@include('layouts.user.footer')

<!-- jQuery -->
<script src="{{ asset('user/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('user/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('user/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('user/dist/js/demo.js') }}"></script>
<script>
  $(document).ready(function() {
    $('.product-image-thumb').on('click', function () {
      var $image_element = $(this).find('img')
      $('.product-image').prop('src', $image_element.attr('src'))
      $('.product-image-thumb.active').removeClass('active')
      $(this).addClass('active')
    })
  })
</script>
</body>
</html>


