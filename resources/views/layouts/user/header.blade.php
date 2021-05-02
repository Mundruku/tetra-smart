 <!-- For version 1,2 --> 
<header>
  <div class="header-container">
  <div class="top-banner hidden-xs">
<div class="container"><img alt="top banner" src="{{ asset('user/images/top-img.png') }}" /></div>
</div>   <div class="header-top">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          


 <!-- For version 1,2,3 --> 

 <div class="dropdown block-language-wrapper">
    <a href="{{ route('logout') }}" class="block-language dropdown-toggle" data-target="#" data-toggle="dropdown" role="button"> <img src="{{ asset('user/images//flags/bolt.png') }}"  alt="bolt"/> English <span class="caret"></span> </a> 
   <ul role="menu" class="dropdown-menu">        
               
            <li role="presentation"><a  href="{{ route('user.logout') }}"  tabindex="-1" role="menuitem">
               <img  src="{{ asset('user/images//flags/bolt.png') }}"  alt="English" />
               English            </a></li>         
               
            <li role="presentation"><a href="../boltfr/indexad03.html?___from_store=bolt" tabindex="-1" role="menuitem">
               <img src="{{ asset('user/images//flags/boltfr.png') }}" />
               French            </a></li>         
           </ul>
</div> <!--dropdown block-language-wrapper-->

 <!-- End for version 4 -->

     
          



 <!-- For version 1,2,3 --> 

  <div class="dropdown block-currency-wrapper"> 
    <a href="#" class="block-currency dropdown-toggle" data-target="#" data-toggle="dropdown" role="button"> USD <span class="caret"></span></a>  
    <ul role="menu" class="dropdown-menu">
       
        <li role="presentation"><a href="directory/currency/switch/currency/EGP/uenc/aHR0cDovL21hczEubWFnaWt0aGVtZXMuY29tL2luZGV4LnBocC9ib2x0Lw%2c%2c/index3945.html?___store=EGP" tabindex="-1" role="menuitem" title="EGP"> £ - EGP</a></li>
       
        <li role="presentation"><a href="directory/currency/switch/currency/EUR/uenc/aHR0cDovL21hczEubWFnaWt0aGVtZXMuY29tL2luZGV4LnBocC9ib2x0Lw%2c%2c/indexd4fa.html?___store=EUR" tabindex="-1" role="menuitem" title="EUR"> € - EUR</a></li>
       
        <li role="presentation"><a href="directory/currency/switch/currency/USD/uenc/aHR0cDovL21hczEubWFnaWt0aGVtZXMuY29tL2luZGV4LnBocC9ib2x0Lw%2c%2c/indexf670.html?___store=USD" tabindex="-1" role="menuitem" title="USD"> $ - USD</a></li>
          </ul> 
  </div>
 


 <!-- End for version 4 -->
 @if (Auth::guest())
   <div class="welcome-msg">welcome to Tetrasmart!</div>
  @else
  <div class="welcome-msg">welcome {{Auth::user()->name}}!</div>
  @endif
        </div><!--col-xs-12 col-sm-6-->
        <div class="col-xs-6 hidden-xs">
         <div class="toplinks">
          <div class="links">
           <div class="myaccount"><a href="customer/account/index.html" title="My Account"><span class="hidden-xs">My Account</span></a></div>            
                       <div class="check"><a href="checkout/onepage/index.html" title="Checkout">
             <span class="hidden-xs">Checkout</span></a>
           </div>
                      <div class="demo"><a href="blog.html" title="Blog"><span class="hidden-xs">Blog</span></a></div>

           <!-- Header Company -->
            <div class="dropdown block-company-wrapper hidden-xs"> <a href="#" class="block-company dropdown-toggle" data-target="#" data-toggle="dropdown" role="button"> Company <span class="caret"></span></a>
              <ul class="dropdown-menu">
<li role="presentation"><a title="About Us" href="about-us/index.html"> About Us </a></li>
<li role="presentation"><a title="Customer Service" href="#"> Customer Service </a></li>
<li role="presentation"><a title="Privacy Policy" href="#"> Privacy Policy </a></li>
<li role="presentation"><a title="Site Map" href="catalog/seo_sitemap/category/index.html">Site Map </a></li>
<li role="presentation"><a title="Search Terms" href="catalogsearch/term/popular/index.html">Search Terms </a></li>
<li role="presentation"><a title="Advanced Search" href="catalogsearch/advanced/index.html">Advanced Search </a></li>
</ul>            </div>
            <!-- End Header Company -->
                       @if (Auth::guest())
                       <div class="login"><a href="{{ route('user.login.form') }}" title="Log In"><span class="hidden-xs">Log In</span></a>
                        @else
                        <div class="login"><a href="{{ route('user.logout') }}" title="Log In"><span class="hidden-xs">Log out</span></a>
                        @endif

             </div>
                                    
          </div><!--links-->
         </div><!--toplinks-->
        </div><!--col-xs-6 hidden-xs-->
      </div><!--row-->
    </div><!--container-->
   </div><!--header-top-->
   <div class="header-m">
    <div class="container">
     <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 hidden-xs">
        



 <!-- For version 1,2 --> 


 <div class="search-box">
   <form id="search_mini_form" action="http://mas1.magikthemes.com/index.php/bolt/catalogsearch/result/" method="get">       


    <!-- Autocomplete End code -->
        <input id="search" type="text" name="q" value="" class="searchbox" placeholder="Search entire store here..." maxlength="128" />
        <button type="submit" title="Search" class="search-btn-bg" id="submit-button"><span class="glyphicon glyphicon-search"></span>&nbsp;</button>
        <div id="search_autocomplete" class="search-autocomplete"></div>
        <script type="text/javascript">
      var searchForm = new Varien.searchForm('search_mini_form', 'search', 'Search entire store here...');
      $j('html').click(function(){
      $j('#search_autocomplete').hide();
      });
      $j("#search").keyup(function() {
    var text = $j(this).val();
    var chars = text.length;
    if (chars > 2) {
        $j("#processing-image").show();
        var postData = $j('#search_mini_form').serializeArray();
    
        $j.ajax({
            url : 'http://mas1.magikthemes.com/index.php/bolt/catalogsearch/ajax/suggest/',
            type: "POST",
            data : postData,
            success:function(data)
            { $j("#processing-image").hide();
            $j('#search_autocomplete').html(data).show();
        }
        });
    }
    
      });
  </script>    
   </form>
 </div> <!--search-box-->

 <!-- End for version 4 -->      </div><!--col-lg-3 col-md-4 col-sm-4 col-xs-12 hidden-xs-->
      <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12 logo-block">
        <div class="mm-toggle-wrap">
          <div class="mm-toggle"><i class="fa fa-align-justify"></i><span class="mm-label">Menu</span> </div>
        </div><!--mm-toggle-wrap-->
        <div class="logo">
           <!-- For version 1 --> 
            <a href="index.html" title="Magento Commerce" ><div><img style="width:35%;" src="{{ asset('user/images/tetra_smart4.png') }}" alt="Bolt Store" /></div></a>
                  </div><!--logo-->
      </div><!--col-lg-6 col-md-4 col-sm-4 col-xs-12 logo-block-->
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                 <div class="top-cart-contain pull-right">
           


<div class="mini-cart">

   <!-- For version 1,2 --> 

  <div class="basket"> 
      <a href="checkout/cart/index.html">             
            <span class="cart_count">
                0            </span>     
            <span class="price">My Cart / <span class="price">$0.00</span></span>       
      </a>   
  </div> <!-- basket -->

   <!-- End for version 4 -->

  <div>


<div class="top-cart-content">
                                 
                <p class="a-center noitem">You have no items in your shopping cart.</p>               
                 </div> <!--top-cart-content-->



  </div>
</div> <!--mini-cart-->




          </div><!--top-cart-contain pull-right-->
        
      </div><!--col-lg-3 col-md-4 col-sm-4 col-xs-12-->
     </div><!--row-->
    </div><!--container-->
   </div><!--header-m-->
 </header> 