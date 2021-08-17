<nav  > <!-- class="sticky-header" -->
     <div class="container">
         <div class="nav-inner">



             <!-- BEGIN NAV -->
             <ul id="nav" class="hidden-xs">

                 <li id="nav-home1" class="level0 parent drop-menu"><a href="/"
                         class="level-top active"><span>Home</span></a>
                     <!-- <ul class="level1" style="display: none;">
                         <li class="level1 parent"><a href="/"><span>Home</span></a></li>

                     </ul> -->
                 </li>


<!-- ************************************************************************************************************ -->
               @foreach ($category as $cat) 
                 <li class="mega-menu">



                     <a class="level-top" href="{{ url('product-category', [$cat->id]) }}"><span>{{$cat->name}}</span></a>


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
                                            @foreach ($sub_cat->products as $product) 

                                                 <li class="level2 nav-6-1-1">
                                                     <a href=" {{ url('product-details', [$product->id]) }}"><span>{{$product->product_name}}</span></a>
                                           
                                                 </li>
                                            @endforeach

                                             </ul>
                                             <!--level1-->

                                             <!--sub sub category-->

                                         </li>
                                         <!--level3 nav-6-1 parent item-->
                                         @endforeach


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
 
             </ul>
             <!--nav-->




         </div>
         <!--nav-inner-->
     </div>
     <!--container-->
 </nav>
