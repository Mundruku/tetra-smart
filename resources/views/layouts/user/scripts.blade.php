<script src="{{ asset('user/js/jquery.min.js') }}"></script>

<script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('user/js/prototype/prototype.js') }}"></script>
<script src="{{ asset('userjs/lib/jquery/jquery-1.10.2.min.js') }}"></script>
<script src="{{ asset('user/js/lib/jquery/noconflict.js') }}"></script>
<script src="{{ asset('user/js/lib/ccard.js') }}"></script>
<script src="{{ asset('user/js/prototype/validation.js') }}"></script>
<script src="{{ asset('user/js/scriptaculous/builder.js') }}"></script>
<script src="{{ asset('user/js/scriptaculous/effects.js') }}"></script>
<script src="{{ asset('user/js/scriptaculous/dragdrop.js') }}"></script>
<script src="{{ asset('user/js/scriptaculous/controls.js') }}"></script>
<script src="{{ asset('user/js/scriptaculous/slider.js') }}"></script>
<script src="{{ asset('user/js/varien/js.js') }}"></script>
<script src="{{ asset('user/js/varien/form.js') }}"></script>
<script src="{{ asset('user/js/mage/translate.js') }}"></script>
<script src="{{ asset('user/js/mage/cookies.js') }}"></script>
<script src="{{ asset('user/js/lib/modernizr.custom.min.js') }}"></script>


<script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('user/js/lib/selectivizr.js') }}"></script>


<script src="{{ asset('user/js/lib/matchMedia.js') }}"></script>
<script src="{{ asset('userjs/lib/matchMedia.addListener.js') }}"></script>
<script src="{{ asset('user/js/app.js') }}"></script>
<script src="{{ asset('user/js/lib/jquery.cycle2.min.js') }}"></script>

<script src="{{ asset('user/js/lib/jquery.cycle2.swipe.min.js') }}"></script>
<script src="{{ asset('user/js/slideshow.js') }}"></script>

<script src="{{ asset('user/js/lib/imagesloaded.js') }}"></script>
<script src="{{ asset('user/js/minicart.js') }}"></script>

<script src="{{ asset('user/js/countdowntimer/countdowntimer.js') }}"></script>
<script src="{{ asset('user/js/lib/elevatezoom/jquery.elevateZoom-3.0.8.min.js') }}"></script>
<script src="{{ asset('user/js/parallax.js') }}"></script>
<script src="{{ asset('user/js/jquery.bxslider.min.js') }}"></script>
<script src="{{ asset('user/js/jquery.flexslider.js') }}"></script>
<script src="{{ asset('user/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('user//js/jquery.mobile-menu.min.js') }}"></script>


<![endif]-->
<script type="text/javascript">
var BLANK_URL = 'http://mas1.magikthemes.com/js/blank.html';
var BLANK_IMG = '../../js/spacer.gif';
var SKIN_URL = 'http://mas1.magikthemes.com/skin/frontend/rwd/bolt/';
</script>




<script type="text/javascript">
//<![CDATA[
    var formId1 = 'popup-newsletter';
    var myForm1 = new VarienForm(formId1, true);
    var postUrl1 = "newsletter/subscriber/new/index.html";
    function doAjax1() {
        if (myForm1.validator.validate()) {
	if (document.getElementById('notshowpopup').checked) {
            var oneDays = 1000*60*60*24*1;
            var expires = new Date((new Date()).valueOf() + oneDays);
            document.cookie = "visited=true;expires=" + expires.toUTCString();
        }
            var request = new Ajax.Request(      
            postUrl1,
            {
                method: 'post',      
                onLoading: function() {   
                  document.getElementById('loader1').style.display='inline';   
                },
                onComplete: function(transport){ // Defining Complete Callback Function                     
                     $(formId1).hide();
                     $('formSuccess1').show();       
                     
                },
                parameters: $(formId1).serialize(true)    // Seriallizing the form input values
            }
            );
            return false;
     
        }

    }
  
  new Event.observe(formId1, 'submit', function(e){
    e.stop();
    doAjax1();
  });

//]]>
</script>







