 <nav>
     <div class="container">
         <div class="nav-inner">



             <!-- BEGIN NAV -->
             <ul id="nav" class="hidden-xs">

                 <li id="nav-home1" class="level0 parent drop-menu"><a href="index.html"
                         class="level-top active"><span>Home</span></a>
                     <!-- <ul class="level1" style="display: none;">
                         <li class="level1 parent"><a href="/"><span>Home</span></a></li>

                     </ul> -->
                 </li>


<!-- ************************************************************************************************************ -->
               @foreach ($category as $cat) 
                 <li class="mega-menu">



                     <a class="level-top" href="mob-smartphone.html"><span>{{$cat->name}}</span></a>


                     <div class="level0-wrapper dropdown-6col" style="left: 0px; display: none;">

                         <div class="container">
                             <div class="level0-wrapper2">

                                 <div class="nav-block nav-block-center">

                                     <!--mega menu-->

                                     <ul class="level0">

                                     @foreach ($cat->sub_category as $sub_cat) 
                                         <li class="level3 nav-6-1 parent item">

                                             <a href="mob-smartphone/mob-samsung.html"><span>{{$sub_cat->name}}</span></a>
                                             <!--sub sub category-->


                                             <ul class="level1">
                                                 <li class="level2 nav-6-1-1">
                                                     <a href="mob-smartphone/mob-samsung/galaxy-g7.html"><span>Galaxy
                                                             G7</span></a>

                                                 </li>
                                                 <!--level2 nav-6-1-1-->
                                                 <li class="level2 nav-6-1-1">
                                                     <a href="mob-smartphone/mob-samsung/sam-nexon.html"><span>Nexon J3
                                                             Pro</span></a>

                                                 </li>
                                                 <!--level2 nav-6-1-1-->
                                                 <li class="level2 nav-6-1-1">
                                                     <a href="mob-smartphone/mob-samsung/sam-prime-gold.html"><span>Prime
                                                             Gold J2</span></a>

                                                 </li>
                                                 <!--level2 nav-6-1-1-->
                                                 <li class="level2 nav-6-1-1">
                                                     <a href="mob-smartphone/mob-samsung/mob-samsung-pro.html"><span>Samsung
                                                             M2 Pro</span></a>

                                                 </li>
                                                 <!--level2 nav-6-1-1-->
                                             </ul>
                                             <!--level1-->

                                             <!--sub sub category-->

                                         </li>
                                         <!--level3 nav-6-1 parent item-->
                                         @endforeach




                                         <!-- <li class="level3 nav-6-1 parent item">

                                             <a href="mob-smartphone/mob-sony.html"><span>Sony</span></a>
                                           
                                             <ul class="level1">
                                                 <li class="level2 nav-6-1-1">
                                                     <a href="mob-smartphone/mob-sony/mob-xperia-dual.html"><span>Xperia
                                                             XA Dual</span></a>
                                                 </li>
                              
                                                 <li class="level2 nav-6-1-1">
                                                     <a href="mob-smartphone/mob-sony/mob-graphite-black.html"><span>Graphite
                                                             Black</span></a>

                                                 </li>
                                    
                                                 <li class="level2 nav-6-1-1">
                                                     <a href="mob-smartphone/mob-sony/mob-ultra.html"><span>Ultra Dual
                                                             G5</span></a>

                                                 </li>
                                 
                                                 <li class="level2 nav-6-1-1">
                                                     <a href="mob-smartphone/mob-sony/mob-premium.html"><span>Premium
                                                             Xperia Z5 Dual</span></a>

                                                 </li>
                                            
                                             </ul>
                                    
                                         </li> -->
                                         <!--level3 nav-6-1 parent item-->




                                         <!-- <li class="level3 nav-6-1 parent item">

                                             <a href="mob-smartphone/mob-apple.html"><span>Apple</span></a>
                  
                                             <ul class="level1">
                                                 <li class="level2 nav-6-1-1">
                                                     <a href="mob-smartphone/mob-apple/mob-iphone7p.html"><span>iPhone 7
                                                             Plus</span></a>
                                                 </li>

                                                 <li class="level2 nav-6-1-1">
                                                     <a href="mob-smartphone/mob-apple/mob-iphone6s.html"><span>iPhone
                                                             6s</span></a>
                                                 </li>
  
                                                 <li class="level2 nav-6-1-1">
                                                     <a href="mob-smartphone/mob-apple/mob-iphone-se.html"><span>iPhone
                                                             SE</span></a>

                                                 </li>

                                                 <li class="level2 nav-6-1-1">
                                                     <a href="mob-smartphone/mob-apple/iphone-4.html"><span>iPhone
                                                             4</span></a>
                                                 </li>
                                             </ul>
                                         </li> -->
                                         <!--level3 nav-6-1 parent item-->




                                         <!-- <li class="level3 nav-6-1 parent item">

                                             <a href="mob-smartphone/mob-lenovo.html"><span>Lenovo</span></a>

                                             <ul class="level1">
                                                 <li class="level2 nav-6-1-1">
                                                     <a href="mob-smartphone/mob-lenovo/mob-vibek5.html"><span>Vibe K5
                                                             Plus</span></a>

                                                 </li>
                                               
                                                 <li class="level2 nav-6-1-1">
                                                     <a href="mob-smartphone/mob-lenovo/mob-notep4.html"><span>Note
                                                             P4</span></a>
                                                 </li>
                                                 
                                                 <li class="level2 nav-6-1-1">
                                                     <a href="mob-smartphone/mob-lenovo/mob-k6-power.html"><span>K6
                                                             Power</span></a>

                                                 </li>
                                                 <li class="level2 nav-6-1-1">
                                                     <a href="mob-smartphone/mob-lenovo/mob-a6000.html"><span>A600
                                                             Shoot</span></a>
                                                 </li>

                                             </ul>

                                         </li> -->
                                         <!--level3 nav-6-1 parent item-->



<!-- 
                                         <li class="level3 nav-6-1 parent item">

                                             <a href="mob-smartphone/mob-moto.html"><span>Motorola</span></a>
                                      
                                             <ul class="level1">
                                                 <li class="level2 nav-6-1-1">
                                                     <a href="mob-smartphone/mob-moto/mob-moto-e4.html"><span>Moto E4
                                                             Plus</span></a>

                                                 </li>

                                                 <li class="level2 nav-6-1-1">
                                                     <a href="mob-smartphone/mob-moto/mob-moto-g2.html"><span>Moto
                                                             G2</span></a>

                                                 </li>
  
                                                 <li class="level2 nav-6-1-1">
                                                     <a href="mob-smartphone/mob-moto/mob-g5-pro.html"><span>Moto G5
                                                             Pro</span></a>



                                                 </li>
 
                                                 <li class="level2 nav-6-1-1">
                                                     <a href="mob-smartphone/mob-moto/mob-zgold.html"><span>Moto Z
                                                             Gold</span></a>

                                                 </li>
                                        
                                             </ul>

                                         </li> -->
                                         <!--level3 nav-6-1 parent item-->


<!-- 

                                         <li class="level3 nav-6-1 parent item">

                                             <a href="mob-smartphone/mob-htc.html"><span>HTC</span></a>
                                            
                                             <ul class="level1">
                                                 <li class="level2 nav-6-1-1">
                                                     <a href="mob-smartphone/mob-htc/mob-desire6.html"><span>Desire
                                                             640</span></a>

                                                 </li>
                                               
                                                 <li class="level2 nav-6-1-1">
                                                     <a href="mob-smartphone/mob-htc/mob-sprinklepro.html"><span>Sprinkle
                                                             Pro</span></a>

                                                 </li>
                                               
                                                 <li class="level2 nav-6-1-1">
                                                     <a href="mob-smartphone/mob-htc/mob-desire526.html"><span>Desire
                                                             526G Plus</span></a>

                                                 </li>
                                             
                                                 <li class="level2 nav-6-1-1">
                                                     <a href="mob-smartphone/mob-htc/mob-htcstone.html"><span>HTC Stone
                                                             Black</span></a>

                                                 </li>
                                               
                                             </ul>
   
                                         </li> -->
                                         <!--level3 nav-6-1 parent item-->

                                     </ul>
                                     <!--level0-->


                                 </div>
                                 <!--nav-block nav-block-center-->


                                 <div class="nav-add">
                                     <div class="push_item">
                                         <div class="push_img"><a href="#"><img alt="sunglass"
                                                     src="{{ asset('user/images/menu-banner1.png') }}" /> </a></div>
                                     </div>
                                     <div class="push_item push_item_last">
                                         <div class="push_img"><a href="#"><img alt="shoes"
                                                     src="{{ asset('user/images/menu-banner2.png') }}" /> </a></div>
                                     </div>
                                 </div>
                                 <!--nav-add-->
                             </div>
                             <!--level0-wrapper2-->
                         </div>
                         <!--container-->

                     </div>
                     <!--level0-wrapper dropdown-6col-->

                     <!--mega menu-->

                 </li>
                 @endforeach
<!-- **************************************************************************************************************************** -->
 






                 <!-- <li class="mega-menu">



                     <a class="level-top" href="mob-accesories.html"><span>Accesories</span></a>

                 </li>



                 <li class="nav-custom-link mega-menu">
                     <a href="#" class="level-top">
                         <span>Custom</span>
                     </a>
                     <div class="level0-wrapper custom-menu" style="left: 0px; display: none;">
                         <div class="container">
                             <div class="header-nav-dropdown-wrapper clearer">
                                 <div class="grid12-3">
                                     <h4 class="heading">48 Hours Only!</h4>
                                     <p>Our designed to deliver almost everything you want to do online.</p>
                                     <div><img alt="custom-image" src="{{ asset('user/images/custom-img1.jpg') }}" />
                                     </div>
                                 </div>
                                 <div class="grid12-3">
                                     <h4 class="heading">Flat 20% om Men</h4>
                                     <p>Responsive design is a Web design to provide an optimal navigation.</p>
                                     <div><img alt="custom-image" src="{{ asset('user/images/custom-img2.jpg') }}" />
                                     </div>
                                 </div>
                                 <div class="grid12-3">
                                     <h4 class="heading">Hot Collection!</h4>
                                     <p>Our font delivery service is built upon a reliable, global network of servers.
                                     </p>
                                     <div><img alt="custom-image" src="{{ asset('user/images/custom-img3.jpg') }}" />
                                     </div>
                                 </div>
                                 <div class="grid12-3">
                                     <h4 class="heading">New Arrivals!</h4>
                                     <p>Smart Product Grid is uses maximum available width of the screen.</p>
                                     <div><img alt="custom-image" src="{{ asset('user/images/custom-img4.jpg') }}" />
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li> -->
             </ul>
             <!--nav-->




         </div>
         <!--nav-inner-->
     </div>
     <!--container-->
 </nav>