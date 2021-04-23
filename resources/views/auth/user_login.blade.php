<!DOCTYPE html>
<html>
<head>
    <title></title>

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
    
</head>


    <body class="  cms-index-index cms-bolt-home-one ">

      @include('layouts.user.header')
      
      @include('layouts.user.header2')

      <!-- End for version 4 -->


      
  <div class="main-container col1-layout">

 <!-- Exclude from version 3 -->
    <div class="main container">

            






    <div class="account-login">

 <!-- Exclude from version 3 -->
        <div class="page-title">
          <h2>Login or Create an Account</h2>
        </div><!--page-title-->

        <form method="POST" action="{{ route('login') }}" id="login-form">
        @csrf
        <input name="form_key" type="hidden" value="9jrz4Nr6N9xz7wgF" />
        <fieldset class="col2-set">
            <div class="col-1 new-users"> 
                  <strong>New Customers</strong>    
                <div class="content">
                   
                    <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                     <div class="buttons-set">
                    <button type="button" title="Create an Account" class="button create-account" onclick="window.location='{{ route('user.register.form') }}';"><span><span>Create an Account</span></span></button>
                </div>
                </div>
            </div>
            <div class="col-2 registered-users">
             <strong>Registered Customers</strong>             
                <div class="content">
                    
                    <p>If you have an account with us, please log in.</p>
                    <ul class="form-list">
                        <li>
                             <label for="email">Email Address<em class="required">*</em></label>
                            <div class="input-box">
                                <input type="text" name="email" value="{{ old('email') }}" id="email" class="input-text required-entry validate-email  @error('email') is-invalid @enderror" title="Email Address" />


                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red;">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </li>
                        <li>
                            <label for="pass">Password<em class="required">*</em></label>
                            <div class="input-box">
                                <input type="password" name="password" class="input-text required-entry validate-password @error('password') is-invalid @enderror" id="pass" title="Password" />

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </li>
                                                                    </ul>
                    <div class="remember-me-popup" >
    <div class="remember-me-popup-head" style="display:none">
        <h3 id="text2">What's this?</h3>
        <a href="#" class="remember-me-popup-close" onClick="showDiv()"title="Close">Close</a>
    </div>
    <div class="remember-me-popup-body" style="display:none">
        <p id= "text1">Checking &quot;Remember Me&quot; will let you access your shopping cart on this computer when you are logged out</p>
        <div class="remember-me-popup-close-button a-right" >
            <a href="#" class="remember-me-popup-close button" title="Close" onClick="
            showDiv()"><span>Close</span></a>
        </div>
    </div>
</div>

                  <p class="required">* Required Fields</p>



                     <div class="buttons-set">
                  
                    <button type="submit" class="button login" title="Login" name="send" id="send2"><span>Login</span></button>

                      <a href="../forgotpassword/index.html" class="forgot-word">Forgot Your Password?</a>
                 </div> <!--buttons-set-->
                  </div> <!--content-->                               
            </div> <!--col-2 registered-users-->
                   </fieldset> <!--col2-set-->
    </form>
  
</div>
<br><br><br>
</div>

      @include('layouts.user.footer')


     

</body>
</html>