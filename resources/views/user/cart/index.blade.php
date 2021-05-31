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


  @if(session()->has('cart'))
  <div class="table-responsive">
   
      <input name="form_key" type="hidden" value="Un0uVFTZuRN7N2wh" />
      <fieldset>
        <table id="shopping-cart-table" class="data-table cart-table">
          <col width="1" />
          <col />
          <col width="1" />
          <col width="1" />
          <col width="1" />
          <col width="1" />
          <col width="1" />

          <thead>
            <tr>
              <th rowspan="1">&nbsp;</th>
              <th rowspan="1"><span class="nobr">Product Name</span></th>
              <th rowspan="1"></th>
              <th class="a-center" colspan="1"><span class="nobr">Unit Price</span></th>
              <th rowspan="1" class="a-center">Qty</th>
              <th class="a-center" colspan="1">Subtotal</th>
              <th rowspan="1" class="a-center">&nbsp;</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <td colspan="50" class="a-right">
                <button type="button" title="Continue Shopping" class="button btn-continue" onclick="location.href='/'"><span><span>Continue Shopping</span></span></button>
                <button value="update_qty"  onclick="location.href='cart/delete'" title="Update Cart" class="button btn-update"><span><span>Update Cart</span></span></button>
                <button  value="empty_cart"  title="Clear Cart" class="button btn-empty" onclick="location.href='cart/delete'"  id="empty_cart_button"><span><span>Clear Cart</span></span></button>
               
              </td>
            </tr>
          </tfoot>
          <tbody>
            @foreach (session()->get('cart')->items as $item)

            <tr>
              <td><a href="/" title="Micromax Canvas Juice 4G" class="product-image"><img src="{{$item['item']->picture_url}}" width="75" height="75" alt="Micromax Canvas Juice 4G" /></a></td>
              <td>
                <h2 class="product-name">
                  <a href="/">{{$item['item']->purchase_price}}</a>
                </h2>
                <!-- Code to display Magik Fee starts here -->
                <!-- Code to display Magik Fee ends here -->
              </td>
              <td class="a-center">
                <a href="/" title="Edit item parameters">Edit</a>
              </td>


              <td class="a-right">
                <span class="cart-price">
                  <span class="price">{{$item['item']->purchase_price}}</span>
                </span>


              </td>
              <td class="a-center">
                <input name="qty" value="{{$item['qty']}}" size="4" title="Qty" class="input-text qty" maxlength="12" />
              </td>
              <td class="a-right">
                <span class="cart-price">

                  <span class="price">{{$item['sub_price']}}</span>
                </span>
              </td>
              <td class="a-center"><a href="/" title="Remove item" class="btn-remove btn-remove2">Remove item</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>

      </fieldset>
  
  </div>
  <!--table-responsive-->

  @else
  <div class="main-container col1-layout">

    <!-- Exclude from version 3 -->
    <div class="main container">


      <div class="cart" style="text-align:center;">
        <div class="page-title">
          <h2 style="text-align:center;">Shopping Cart is Empty</h2>
        </div>
        <!--page-title-->

        <div class="cart-empty">
          <p>You have no items in your shopping cart.</p>
          <p>Click <a href="/">here</a> to continue shopping.</p>
        </div>
        @endif
      </div>


      <!-- Exclude from version 3 -->
    </div>
    <!--main container-->

    

  </div>
     <!-- BEGIN CART COLLATERALS -->
<div class="cart-collaterals row"> 
  <div class="col-sm-4">
        <div class="shipping" style="display: none;">
    <h3>Estimate Shipping and Tax</h3>
   
    <div class="shipping-form">
       <form action="http://mas1.magikthemes.com/index.php/bolt/checkout/cart/estimatePost/" method="post" id="shipping-zip-form">
            <p>Enter your destination to get a shipping estimate.</p>
            <ul class="form-list">
                <li>
                    <label for="country" class="required"><em>*</em>Country</label>
                    <div class="input-box">
                        <select name="country_id" id="country" class="validate-select" title="Country" ><option value="" > </option><option value="AF" >Afghanistan</option><option value="AX" >Åland Islands</option><option value="AL" >Albania</option><option value="DZ" >Algeria</option><option value="AS" >American Samoa</option><option value="AD" >Andorra</option><option value="AO" >Angola</option><option value="AI" >Anguilla</option><option value="AQ" >Antarctica</option><option value="AG" >Antigua and Barbuda</option><option value="AR" >Argentina</option><option value="AM" >Armenia</option><option value="AW" >Aruba</option><option value="AU" >Australia</option><option value="AT" >Austria</option><option value="AZ" >Azerbaijan</option><option value="BS" >Bahamas</option><option value="BH" >Bahrain</option><option value="BD" >Bangladesh</option><option value="BB" >Barbados</option><option value="BY" >Belarus</option><option value="BE" >Belgium</option><option value="BZ" >Belize</option><option value="BJ" >Benin</option><option value="BM" >Bermuda</option><option value="BT" >Bhutan</option><option value="BO" >Bolivia</option><option value="BA" >Bosnia and Herzegovina</option><option value="BW" >Botswana</option><option value="BV" >Bouvet Island</option><option value="BR" >Brazil</option><option value="IO" >British Indian Ocean Territory</option><option value="VG" >British Virgin Islands</option><option value="BN" >Brunei</option><option value="BG" >Bulgaria</option><option value="BF" >Burkina Faso</option><option value="BI" >Burundi</option><option value="KH" >Cambodia</option><option value="CM" >Cameroon</option><option value="CA" >Canada</option><option value="CV" >Cape Verde</option><option value="KY" >Cayman Islands</option><option value="CF" >Central African Republic</option><option value="TD" >Chad</option><option value="CL" >Chile</option><option value="CN" >China</option><option value="CX" >Christmas Island</option><option value="CC" >Cocos (Keeling) Islands</option><option value="CO" >Colombia</option><option value="KM" >Comoros</option><option value="CG" >Congo - Brazzaville</option><option value="CD" >Congo - Kinshasa</option><option value="CK" >Cook Islands</option><option value="CR" >Costa Rica</option><option value="CI" >Côte d’Ivoire</option><option value="HR" >Croatia</option><option value="CU" >Cuba</option><option value="CY" >Cyprus</option><option value="CZ" >Czech Republic</option><option value="DK" >Denmark</option><option value="DJ" >Djibouti</option><option value="DM" >Dominica</option><option value="DO" >Dominican Republic</option><option value="EC" >Ecuador</option><option value="EG" >Egypt</option><option value="SV" >El Salvador</option><option value="GQ" >Equatorial Guinea</option><option value="ER" >Eritrea</option><option value="EE" >Estonia</option><option value="ET" >Ethiopia</option><option value="FK" >Falkland Islands</option><option value="FO" >Faroe Islands</option><option value="FJ" >Fiji</option><option value="FI" >Finland</option><option value="FR" >France</option><option value="GF" >French Guiana</option><option value="PF" >French Polynesia</option><option value="TF" >French Southern Territories</option><option value="GA" >Gabon</option><option value="GM" >Gambia</option><option value="GE" >Georgia</option><option value="DE" >Germany</option><option value="GH" >Ghana</option><option value="GI" >Gibraltar</option><option value="GR" >Greece</option><option value="GL" >Greenland</option><option value="GD" >Grenada</option><option value="GP" >Guadeloupe</option><option value="GU" >Guam</option><option value="GT" >Guatemala</option><option value="GG" >Guernsey</option><option value="GN" >Guinea</option><option value="GW" >Guinea-Bissau</option><option value="GY" >Guyana</option><option value="HT" >Haiti</option><option value="HM" >Heard &amp; McDonald Islands</option><option value="HN" >Honduras</option><option value="HK" >Hong Kong SAR China</option><option value="HU" >Hungary</option><option value="IS" >Iceland</option><option value="IN" >India</option><option value="ID" >Indonesia</option><option value="IR" >Iran</option><option value="IQ" >Iraq</option><option value="IE" >Ireland</option><option value="IM" >Isle of Man</option><option value="IL" >Israel</option><option value="IT" >Italy</option><option value="JM" >Jamaica</option><option value="JP" >Japan</option><option value="JE" >Jersey</option><option value="JO" >Jordan</option><option value="KZ" >Kazakhstan</option><option value="KE" >Kenya</option><option value="KI" >Kiribati</option><option value="KW" >Kuwait</option><option value="KG" >Kyrgyzstan</option><option value="LA" >Laos</option><option value="LV" >Latvia</option><option value="LB" >Lebanon</option><option value="LS" >Lesotho</option><option value="LR" >Liberia</option><option value="LY" >Libya</option><option value="LI" >Liechtenstein</option><option value="LT" >Lithuania</option><option value="LU" >Luxembourg</option><option value="MO" >Macau SAR China</option><option value="MK" >Macedonia</option><option value="MG" >Madagascar</option><option value="MW" >Malawi</option><option value="MY" >Malaysia</option><option value="MV" >Maldives</option><option value="ML" >Mali</option><option value="MT" >Malta</option><option value="MH" >Marshall Islands</option><option value="MQ" >Martinique</option><option value="MR" >Mauritania</option><option value="MU" >Mauritius</option><option value="YT" >Mayotte</option><option value="MX" >Mexico</option><option value="FM" >Micronesia</option><option value="MD" >Moldova</option><option value="MC" >Monaco</option><option value="MN" >Mongolia</option><option value="ME" >Montenegro</option><option value="MS" >Montserrat</option><option value="MA" >Morocco</option><option value="MZ" >Mozambique</option><option value="MM" >Myanmar (Burma)</option><option value="NA" >Namibia</option><option value="NR" >Nauru</option><option value="NP" >Nepal</option><option value="NL" >Netherlands</option><option value="AN" >Netherlands Antilles</option><option value="NC" >New Caledonia</option><option value="NZ" >New Zealand</option><option value="NI" >Nicaragua</option><option value="NE" >Niger</option><option value="NG" >Nigeria</option><option value="NU" >Niue</option><option value="NF" >Norfolk Island</option><option value="MP" >Northern Mariana Islands</option><option value="KP" >North Korea</option><option value="NO" >Norway</option><option value="OM" >Oman</option><option value="PK" >Pakistan</option><option value="PW" >Palau</option><option value="PS" >Palestinian Territories</option><option value="PA" >Panama</option><option value="PG" >Papua New Guinea</option><option value="PY" >Paraguay</option><option value="PE" >Peru</option><option value="PH" >Philippines</option><option value="PN" >Pitcairn Islands</option><option value="PL" >Poland</option><option value="PT" >Portugal</option><option value="PR" >Puerto Rico</option><option value="QA" >Qatar</option><option value="RE" >Réunion</option><option value="RO" >Romania</option><option value="RU" >Russia</option><option value="RW" >Rwanda</option><option value="BL" >Saint Barthélemy</option><option value="SH" >Saint Helena</option><option value="KN" >Saint Kitts and Nevis</option><option value="LC" >Saint Lucia</option><option value="MF" >Saint Martin</option><option value="PM" >Saint Pierre and Miquelon</option><option value="WS" >Samoa</option><option value="SM" >San Marino</option><option value="ST" >São Tomé and Príncipe</option><option value="SA" >Saudi Arabia</option><option value="SN" >Senegal</option><option value="RS" >Serbia</option><option value="SC" >Seychelles</option><option value="SL" >Sierra Leone</option><option value="SG" >Singapore</option><option value="SK" >Slovakia</option><option value="SI" >Slovenia</option><option value="SB" >Solomon Islands</option><option value="SO" >Somalia</option><option value="ZA" >South Africa</option><option value="GS" >South Georgia &amp; South Sandwich Islands</option><option value="KR" >South Korea</option><option value="ES" >Spain</option><option value="LK" >Sri Lanka</option><option value="VC" >St. Vincent &amp; Grenadines</option><option value="SD" >Sudan</option><option value="SR" >Suriname</option><option value="SJ" >Svalbard and Jan Mayen</option><option value="SZ" >Swaziland</option><option value="SE" >Sweden</option><option value="CH" >Switzerland</option><option value="SY" >Syria</option><option value="TW" >Taiwan</option><option value="TJ" >Tajikistan</option><option value="TZ" >Tanzania</option><option value="TH" >Thailand</option><option value="TL" >Timor-Leste</option><option value="TG" >Togo</option><option value="TK" >Tokelau</option><option value="TO" >Tonga</option><option value="TT" >Trinidad and Tobago</option><option value="TN" >Tunisia</option><option value="TR" >Turkey</option><option value="TM" >Turkmenistan</option><option value="TC" >Turks and Caicos Islands</option><option value="TV" >Tuvalu</option><option value="UG" >Uganda</option><option value="UA" >Ukraine</option><option value="AE" >United Arab Emirates</option><option value="GB" >United Kingdom</option><option value="US" selected="selected" >United States</option><option value="UY" >Uruguay</option><option value="UM" >U.S. Outlying Islands</option><option value="VI" >U.S. Virgin Islands</option><option value="UZ" >Uzbekistan</option><option value="VU" >Vanuatu</option><option value="VA" >Vatican City</option><option value="VE" >Venezuela</option><option value="VN" >Vietnam</option><option value="WF" >Wallis and Futuna</option><option value="EH" >Western Sahara</option><option value="YE" >Yemen</option><option value="ZM" >Zambia</option><option value="ZW" >Zimbabwe</option></select>                    </div>
                </li>
                            <li>
                    <label for="region_id">State/Province</label>
                    <div class="input-box">
                        <select id="region_id" name="region_id" title="State/Province" style="display:none;">
                            <option value="">Please select region, state or province</option>
                        </select>
                      
                       <input type="text" id="region" name="region" value=""  title="State/Province" class="input-text" style="display:none;" />
                   </div>
                </li>
                                        <li>
                    <label for="postcode">Zip/Postal Code</label>
                    <div class="input-box">
                        <input class="input-text validate-postcode" type="text" id="postcode" name="estimate_postcode" value="" />
                    </div>
                </li>
            </ul>
           <div class="buttons-set11">
              <button type="button" title="Get a Quote" onclick="coShippingMethodForm.submit()" class="button get-quote"><span>Get a Quote</span></button>
            </div> <!--buttons-set11-->
        </form>
       

                
    </div>
</div>
 
  </div>   
  <div class="col-sm-4">    
    
<div class="discount" style="display: none;">
    
  <h3>Discount Codes</h3>
  
<form id="discount-coupon-form" action="http://mas1.magikthemes.com/index.php/bolt/checkout/cart/couponPost/" method="post">                       
            <label for="coupon_code">Enter your coupon code if you have one.</label>
            <input type="hidden" name="remove" id="remove-coupone" value="0" />                          
                <input  class="input-text fullwidth" type="text" id="coupon_code" name="coupon_code" value="" />                                                      
                  <button type="button" title="Apply Coupon" class="button coupon " onclick="discountForm.submit(false)" value="Apply Coupon"><span>Apply Coupon</span></button>                
                               
</form>

</div> <!--discount--> 
  </div> <!--col-sm-4-->
  @if(session()->get('cart'))
  <div class="col-sm-4">
    <div class="totals">
        <h3>Shopping Cart Total</h3>
    <div class="inner">
      
    <table id="shopping-cart-totals-table" class="table shopping-cart-table-total">
        <col />
        <col width="1" />
        <tfoot>
            <tr>
    <td  class="a-left" colspan="1">
        <strong>Grand Total</strong>
    </td>
    <td  class="a-right">
    @if(session()->get('cart'))
        <strong><span class="price">{{session()->get('cart')->total_price}}</span></strong>
    @else
    <strong><span class="price">0</span></strong>
    @endif
    </td>
</tr>
        </tfoot>
        <tbody>
            <tr>
    <td  class="a-left" colspan="1">
        Total Qty    </td>
    <td  class="a-right">
    @if(session()->get('cart'))
        <span class="price">{{session()->get('cart')->total_qty}}</span>   
    @else

    <span class="price">0</span>   
    @endif
    </td>

</tr>
        </tbody>
    </table>
         
         <ul class="checkout">           
                                                                                <li>
    <button type="button" title="Proceed to Checkout" class="button btn-proceed-checkout" onclick="window.location='http://mas1.magikthemes.com/index.php/bolt/checkout/onepage/';"><span>Proceed to Checkout</span></button>
</li><br />
                                                                                            <li><a href="http://mas1.magikthemes.com/index.php/bolt/checkout/multishipping/" title="Checkout with Multiple Addresses">Checkout with Multiple Addresses</a>
</li><br />
                               </ul>                
           </div><!--inner-->
    </div><!--totals-->
  </div> <!--col-sm-4-->
  @endif
</div> <!--cart-collaterals-->


  
  <!--main-container col1-layout-->

  @include('layouts.user.footer')


</body>

</html>