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


  <ol class="one-page-checkout" id="checkoutSteps">
    <li id="opc-billing" class="section allow">
        <div class="step-title"> 
        <span class="number">1</span>          
            <h3 class="one_page_heading">  Billing Information</h3>
        </div>
        <div id="checkout-step-billing" class="step a-item">
            
<form id="co-billing-form" action="">
<fieldset class="group-select">
    <ul class="">
        <li id="billing-new-address-form">
        <fieldset>
            <input type="hidden" name="billing[address_id]" value="25949" id="billing:address_id" />
            <ul>
                <li class="fields">
<div class="customer-name">
    <div class="input-box name-firstname">
        <label for="billing:firstname">First Name<span class="required">*</span></label>
        <div class="input-box1">
            <input type="text" id="billing:firstname" name="billing[firstname]" value="bashir" title="First Name" maxlength="255" class="input-text required-entry"  />
        </div>
    </div>
    <div class="input-box name-lastname">
        <label for="billing:lastname">Last Name<span class="required">*</span></label>
        <div class="input-box1">
            <input type="text" id="billing:lastname" name="billing[lastname]" value="saidi" title="Last Name" maxlength="255" class="input-text required-entry"  />
        </div>
    </div>
</div>
</li>
                <li class="fields">
                    <div class="input-box">
                        <label for="billing:company">Company</label>
                        
                            <input type="text" id="billing:company" name="billing[company]" value="shop" title="Company" class="input-text " />                        
                    </div>
                        </li>
                        <li class="wide">
                    <label for="billing:street1">Address<em class="required">*</em></label><br />
                    
                        <input type="text" title="Street Address" name="billing[street][]" id="billing:street1" value="kampala" class="input-text  required-entry" />
                    
                </li>
                                <li class="wide">
                    
                        <input type="text" title="Street Address 2" name="billing[street][]" id="billing:street2" value="" class="input-text " />
                    
                </li>
                                        <li class="fields">
                    <div class="input-box">
                        <label for="billing:city">City<em class="required">*</em></label>
                        
                            <input type="text" title="City" name="billing[city]" value="kampala" class="input-text  required-entry" id="billing:city" />
                        
                    </div>
                    <div class="field">
                        <label for="billing:region_id">State/Province</label><br />
                        <div class="input-box">
                            <select id="billing:region_id" name="billing[region_id]" title="State/Province" class="validate-select" style="display:none;">
                                <option value="">Please select region, state or province</option>
                            </select>
                            <script type="text/javascript">
                            //<![CDATA[
                                $('billing:region_id').setAttribute('defaultValue',  "");
                            //]]>
                            </script>
                            <input type="text" id="billing:region" name="billing[region]" value="hsjsk"  title="State/Province" class="input-text " style="display:none;" />
                        </div>
                    </div>
                </li>
                <li class="fields">
                    <div class="input-box">
                        <label for="billing:postcode">Zip/Postal Code<em class="required">*</em></label>
                        
                            <input type="text" title="Zip/Postal Code" name="billing[postcode]" id="billing:postcode" value="256" class="input-text validate-zip-international  required-entry" />
                       
                    </div>
                    <div class="input-box">
                        <label for="billing:country_id">Country<em class="required">*</em></label>
                        
                            <select name="billing[country_id]" id="billing:country_id" class="validate-select" title="Country" ><option value="" > </option><option value="AF" >Afghanistan</option><option value="AX" >Åland Islands</option><option value="AL" >Albania</option><option value="DZ" >Algeria</option><option value="AS" >American Samoa</option><option value="AD" >Andorra</option><option value="AO" >Angola</option><option value="AI" >Anguilla</option><option value="AQ" >Antarctica</option><option value="AG" >Antigua and Barbuda</option><option value="AR" >Argentina</option><option value="AM" >Armenia</option><option value="AW" >Aruba</option><option value="AU" >Australia</option><option value="AT" >Austria</option><option value="AZ" >Azerbaijan</option><option value="BS" >Bahamas</option><option value="BH" >Bahrain</option><option value="BD" >Bangladesh</option><option value="BB" >Barbados</option><option value="BY" >Belarus</option><option value="BE" >Belgium</option><option value="BZ" >Belize</option><option value="BJ" >Benin</option><option value="BM" >Bermuda</option><option value="BT" >Bhutan</option><option value="BO" >Bolivia</option><option value="BA" >Bosnia and Herzegovina</option><option value="BW" >Botswana</option><option value="BV" >Bouvet Island</option><option value="BR" >Brazil</option><option value="IO" >British Indian Ocean Territory</option><option value="VG" >British Virgin Islands</option><option value="BN" >Brunei</option><option value="BG" >Bulgaria</option><option value="BF" >Burkina Faso</option><option value="BI" >Burundi</option><option value="KH" >Cambodia</option><option value="CM" >Cameroon</option><option value="CA" >Canada</option><option value="CV" >Cape Verde</option><option value="KY" >Cayman Islands</option><option value="CF" >Central African Republic</option><option value="TD" >Chad</option><option value="CL" >Chile</option><option value="CN" >China</option><option value="CX" >Christmas Island</option><option value="CC" >Cocos (Keeling) Islands</option><option value="CO" >Colombia</option><option value="KM" >Comoros</option><option value="CG" >Congo - Brazzaville</option><option value="CD" >Congo - Kinshasa</option><option value="CK" >Cook Islands</option><option value="CR" >Costa Rica</option><option value="CI" >Côte d’Ivoire</option><option value="HR" >Croatia</option><option value="CU" >Cuba</option><option value="CY" >Cyprus</option><option value="CZ" >Czech Republic</option><option value="DK" >Denmark</option><option value="DJ" >Djibouti</option><option value="DM" >Dominica</option><option value="DO" >Dominican Republic</option><option value="EC" >Ecuador</option><option value="EG" >Egypt</option><option value="SV" >El Salvador</option><option value="GQ" >Equatorial Guinea</option><option value="ER" >Eritrea</option><option value="EE" >Estonia</option><option value="ET" >Ethiopia</option><option value="FK" >Falkland Islands</option><option value="FO" >Faroe Islands</option><option value="FJ" >Fiji</option><option value="FI" >Finland</option><option value="FR" >France</option><option value="GF" >French Guiana</option><option value="PF" >French Polynesia</option><option value="TF" >French Southern Territories</option><option value="GA" >Gabon</option><option value="GM" >Gambia</option><option value="GE" >Georgia</option><option value="DE" >Germany</option><option value="GH" >Ghana</option><option value="GI" >Gibraltar</option><option value="GR" >Greece</option><option value="GL" >Greenland</option><option value="GD" >Grenada</option><option value="GP" >Guadeloupe</option><option value="GU" >Guam</option><option value="GT" >Guatemala</option><option value="GG" >Guernsey</option><option value="GN" >Guinea</option><option value="GW" >Guinea-Bissau</option><option value="GY" >Guyana</option><option value="HT" >Haiti</option><option value="HM" >Heard &amp; McDonald Islands</option><option value="HN" >Honduras</option><option value="HK" >Hong Kong SAR China</option><option value="HU" >Hungary</option><option value="IS" >Iceland</option><option value="IN" >India</option><option value="ID" >Indonesia</option><option value="IR" >Iran</option><option value="IQ" >Iraq</option><option value="IE" >Ireland</option><option value="IM" >Isle of Man</option><option value="IL" >Israel</option><option value="IT" >Italy</option><option value="JM" >Jamaica</option><option value="JP" >Japan</option><option value="JE" >Jersey</option><option value="JO" >Jordan</option><option value="KZ" >Kazakhstan</option><option value="KE" >Kenya</option><option value="KI" >Kiribati</option><option value="KW" >Kuwait</option><option value="KG" >Kyrgyzstan</option><option value="LA" >Laos</option><option value="LV" >Latvia</option><option value="LB" >Lebanon</option><option value="LS" >Lesotho</option><option value="LR" >Liberia</option><option value="LY" >Libya</option><option value="LI" >Liechtenstein</option><option value="LT" >Lithuania</option><option value="LU" >Luxembourg</option><option value="MO" >Macau SAR China</option><option value="MK" >Macedonia</option><option value="MG" >Madagascar</option><option value="MW" >Malawi</option><option value="MY" >Malaysia</option><option value="MV" >Maldives</option><option value="ML" >Mali</option><option value="MT" >Malta</option><option value="MH" >Marshall Islands</option><option value="MQ" >Martinique</option><option value="MR" >Mauritania</option><option value="MU" >Mauritius</option><option value="YT" >Mayotte</option><option value="MX" >Mexico</option><option value="FM" >Micronesia</option><option value="MD" >Moldova</option><option value="MC" >Monaco</option><option value="MN" >Mongolia</option><option value="ME" >Montenegro</option><option value="MS" >Montserrat</option><option value="MA" >Morocco</option><option value="MZ" >Mozambique</option><option value="MM" >Myanmar (Burma)</option><option value="NA" >Namibia</option><option value="NR" >Nauru</option><option value="NP" >Nepal</option><option value="NL" >Netherlands</option><option value="AN" >Netherlands Antilles</option><option value="NC" >New Caledonia</option><option value="NZ" >New Zealand</option><option value="NI" >Nicaragua</option><option value="NE" >Niger</option><option value="NG" >Nigeria</option><option value="NU" >Niue</option><option value="NF" >Norfolk Island</option><option value="MP" >Northern Mariana Islands</option><option value="KP" >North Korea</option><option value="NO" >Norway</option><option value="OM" >Oman</option><option value="PK" >Pakistan</option><option value="PW" >Palau</option><option value="PS" >Palestinian Territories</option><option value="PA" >Panama</option><option value="PG" >Papua New Guinea</option><option value="PY" >Paraguay</option><option value="PE" >Peru</option><option value="PH" >Philippines</option><option value="PN" >Pitcairn Islands</option><option value="PL" >Poland</option><option value="PT" >Portugal</option><option value="PR" >Puerto Rico</option><option value="QA" >Qatar</option><option value="RE" >Réunion</option><option value="RO" >Romania</option><option value="RU" >Russia</option><option value="RW" >Rwanda</option><option value="BL" >Saint Barthélemy</option><option value="SH" >Saint Helena</option><option value="KN" >Saint Kitts and Nevis</option><option value="LC" >Saint Lucia</option><option value="MF" >Saint Martin</option><option value="PM" >Saint Pierre and Miquelon</option><option value="WS" >Samoa</option><option value="SM" >San Marino</option><option value="ST" >São Tomé and Príncipe</option><option value="SA" >Saudi Arabia</option><option value="SN" >Senegal</option><option value="RS" >Serbia</option><option value="SC" >Seychelles</option><option value="SL" >Sierra Leone</option><option value="SG" >Singapore</option><option value="SK" >Slovakia</option><option value="SI" >Slovenia</option><option value="SB" >Solomon Islands</option><option value="SO" >Somalia</option><option value="ZA" >South Africa</option><option value="GS" >South Georgia &amp; South Sandwich Islands</option><option value="KR" >South Korea</option><option value="ES" >Spain</option><option value="LK" >Sri Lanka</option><option value="VC" >St. Vincent &amp; Grenadines</option><option value="SD" >Sudan</option><option value="SR" >Suriname</option><option value="SJ" >Svalbard and Jan Mayen</option><option value="SZ" >Swaziland</option><option value="SE" >Sweden</option><option value="CH" >Switzerland</option><option value="SY" >Syria</option><option value="TW" >Taiwan</option><option value="TJ" >Tajikistan</option><option value="TZ" >Tanzania</option><option value="TH" >Thailand</option><option value="TL" >Timor-Leste</option><option value="TG" >Togo</option><option value="TK" >Tokelau</option><option value="TO" >Tonga</option><option value="TT" >Trinidad and Tobago</option><option value="TN" >Tunisia</option><option value="TR" >Turkey</option><option value="TM" >Turkmenistan</option><option value="TC" >Turks and Caicos Islands</option><option value="TV" >Tuvalu</option><option value="UG" selected="selected" >Uganda</option><option value="UA" >Ukraine</option><option value="AE" >United Arab Emirates</option><option value="GB" >United Kingdom</option><option value="US" >United States</option><option value="UY" >Uruguay</option><option value="UM" >U.S. Outlying Islands</option><option value="VI" >U.S. Virgin Islands</option><option value="UZ" >Uzbekistan</option><option value="VU" >Vanuatu</option><option value="VA" >Vatican City</option><option value="VE" >Venezuela</option><option value="VN" >Vietnam</option><option value="WF" >Wallis and Futuna</option><option value="EH" >Western Sahara</option><option value="YE" >Yemen</option><option value="ZM" >Zambia</option><option value="ZW" >Zimbabwe</option></select>                       
                    </div>
                </li>
                <li class="fields">
                    <div class="input-box">
                        <label for="billing:telephone">Telephone<em class="required">*</em></label>
                        
                            <input type="text" name="billing[telephone]" value="0756799090" title="Telephone" class="input-text  required-entry" id="billing:telephone" />
                        
                    </div>
                    <div class="input-box">
                        <label for="billing:fax">Fax</label>
                       
                            <input type="text" name="billing[fax]" value="" title="Fax" class="input-text " id="billing:fax" />
                        
                    </div>
                </li>
                                                    <li class="no-display"><input type="hidden" name="billing[save_in_address_book]" value="1" /></li>
                </ul>

                <li id="opc-review" class="section">
        <div class="step-title"> 
        <span class="number">5</span>          
            <h3 class="one_page_heading">  Order Review</h3>
        </div>
        <div id="checkout-step-review" class="step a-item" >
            <div class="order-review" id="checkout-review-load">
    <!-- Content loaded dynamically -->

    <div id="checkout-review-table-wrapper">
        <table class="data-table linearize-table checkout-review-table" id="checkout-review-table">
                <colgroup><col>
        <col width="1">
        <col width="1">
        <col width="1">
                </colgroup><thead>
            <tr class="first last">
                <th rowspan="1">Product</th>
                <th colspan="1" class="a-center">Price</th>
                <th rowspan="1" class="a-center">Qty</th>
                <th colspan="1" class="a-center">Subtotal</th>
            </tr>
                    </thead>
        <tfoot>
        <tr class="first">
    <td style="" class="a-left" colspan="3">
        Subtotal    </td>
    <td style="" class="a-right last">
        <span class="price">$1,300.00</span>    </td>
</tr>
<tr>
    <td style="" class="a-left" colspan="3">
        Shipping &amp; Handling (Flat Rate - Fixed)    </td>
    <td style="" class="a-right last">
        <span class="price">$20.00</span>    </td>
</tr>
    <tr class="last">
    <td style="" class="a-left" colspan="3">
        <strong>Grand Total</strong>
    </td>
    <td style="" class="a-right last">
        <strong><span class="price">$1,320.00</span></strong>
    </td>
</tr>
    </tfoot>
        <tbody>
                    <tr class="first odd">
    <td><h3 class="product-name">Vibe K5 Plus</h3>
        	<!-- Code to display Magik Fee starts here -->	
        	<!-- Code to display Magik Fee ends here -->	
                                </td>
        <td class="a-right">
                    <span class="cart-price">
        
                            <span class="price">$350.00</span>            
        </span>


            </td>
            <td class="a-center">3</td>
        <td class="a-right last">
                    <span class="cart-price">
        
                            <span class="price">$1,050.00</span>            
        </span>
            </td>
        </tr>
                    <tr class="last even">
    <td><h3 class="product-name">Galaxy J7 Prime</h3>
        	<!-- Code to display Magik Fee starts here -->	
        	<!-- Code to display Magik Fee ends here -->	
                                </td>
        <td class="a-right">
                    <span class="cart-price">
        
                            <span class="price">$250.00</span>            
        </span>


            </td>
            <td class="a-center">1</td>
        <td class="a-right last">
                    <span class="cart-price">
        
                            <span class="price">$250.00</span>            
        </span>
            </td>
        </tr>
                </tbody>
    </table>
</div>


    <!-- end dynamic loading -->
    

    
</div>
        </div>
    </li>
</ol>
<script type="text/javascript">
//<![CDATA[
    var accordion = new Accordion('checkoutSteps', '.step-title', true);
        accordion.openSection('opc-billing');
        var checkout = new Checkout(accordion,{
        progress: 'http://mas1.magikthemes.com/index.php/bolt/checkout/onepage/progress/',
        review: 'http://mas1.magikthemes.com/index.php/bolt/checkout/onepage/review/',
        saveMethod: 'http://mas1.magikthemes.com/index.php/bolt/checkout/onepage/saveMethod/',
        failure: 'http://mas1.magikthemes.com/index.php/bolt/checkout/cart/'}
    );
//]]>
</script>
<br />
</div>


        

<script type="text/javascript">
//<![CDATA[
function toggleRememberMePopup() {

    var formParent = jQuery(this).parents('form:first');
    formParent.find('.remember-me-box a').toggleClass('hide');
    formParent.find('.remember-me-popup').toggleClass('show');
    return false;
}
var rememberMeToggleSetup = false;
jQuery(document).ready(function(){
    if (!rememberMeToggleSetup) {
        jQuery('.remember-me-box a, .remember-me-popup a').on('click', toggleRememberMePopup);
        rememberMeToggleSetup = true;
    }
});
//]]>
</script>
<script>
 function showDiv()
    {
        
            if(document.getElementById('text1').style.display == "") 
            {
              document.getElementById('text1').style.display = "none";
              document.getElementById('text2').style.display = "none";
  
            }
            else
            {
                document.getElementById('text1').style.display = "";
            }
          

       
        
    }
    </script>        </fieldset>
     </li>
            <li class="">
            <input type="radio" name="billing[use_for_shipping]" id="billing:use_for_shipping_yes" value="1" checked="checked" title="Ship to this address" onclick="$('shipping:same_as_billing').checked = true;" class="radio" /><label for="billing:use_for_shipping_yes">Ship to this address</label>
        
            <input type="radio" name="billing[use_for_shipping]" id="billing:use_for_shipping_no" value="0" title="Ship to different address" onclick="$('shipping:same_as_billing').checked = false;" class="radio" /><label for="billing:use_for_shipping_no">Ship to different address</label>
        </li>
        </ul>
        <div class="buttons-set" id="billing-buttons-container">
        <p class="required">* Required Fields</p>
        <button type="button" title="Continue" class="button continue" onclick="billing.save()"><span>Continue</span></button>
        <span class="please-wait" id="billing-please-wait" style="display:none;">
            <img src="http://mas1.magikthemes.com/skin/frontend/rwd/bolt/images/opc-ajax-loader.gif" alt="Loading next step..." title="Loading next step..." class="v-middle" /> Loading next step...        </span>
    </div>
</fieldset>
</form>


</ol>
  
  @include('layouts.user.footer')


</body>

</html>