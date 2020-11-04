<body class="page home page-template-default">
   <div id="page" class="hfeed site">
      <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
      <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
      <div id="content" class="site-content" tabindex="-1">
         <div class="container">
            <div id="primary" class="content-area">
               <main id="main" class="site-main">
                  <div class="home-v1-slider" >
                     <!-- ========================================== SECTION – HERO : END========================================= -->
                     <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                        <?php if (!empty($top_products)) { ?>
                        <?php foreach ($top_products as $key => $tp) { ?>
                        <div class="item" style="background-image: url(<?php echo asset_url();?>images/products/<?php echo $tp->pdt_image?>);">
                           <div class="container">
                              <div class="row">
                                 <div class="col-md-offset-3 col-md-5">
                                    <div class="caption vertical-center text-left">
                                       <div class="hero-1 fadeInDown-1" style="color: yellow;">
                                          <?php echo $tp->pdt_name;?>
                                       </div>
                                       <div class="hero-v2-price fadeInDown-3" style="color: green;">
                                          from <br>₹<?php echo $tp->new_pdt_cost; ?><span></span>
                                       </div>
                                       <div class="hero-action-btn fadeInDown-4">
                                          <a href="<?php echo base_url().'welcome/single_product/'.$tp->id; ?>" class="big le-button ">Start Buying</a>
                                       </div>
                                    </div>
                                    <!-- /.caption -->
                                 </div>
                              </div>
                           </div>
                           <!-- /.container -->
                        </div>
                        <!-- /.item -->
                        <?php  } } ?>
                     </div>
                       <!-- /.owl-carousel -->
                     <!-- ========================================= SECTION – HERO : END ========================================= -->
                  </div>
                  <!-- /.home-v1-slider -->
                  <div class="home-v1-ads-block animate-in-view fadeIn animated" data-animation="fadeIn">
                     <div class="ads-block row">
                        <div class="ad col-xs-12 col-sm-4">
                           <div class="media">
                              <div class="media-left media-middle">
                                <iframe width="500" height="200" src="https://www.youtube.com/embed/cnXapYkboRQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </div>
                              <!-- <div class="media-body media-middle">
                                 <div class="ad-text">
                                    Catch Big <br><strong>Deals</strong> on the <br>Cameras
                                 </div>
                                 <div class="ad-action">
                                    <a href="#">Shop now</a>
                                 </div>
                              </div> -->
                           </div>
                        </div>
                        <div class="ad col-xs-12 col-sm-4">
                           <div class="media">
                              <div class="media-left media-middle">
                                 <iframe width="500" height="200" src="https://www.youtube.com/embed/65JrtwtTOdc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </div>
                             <!--  <div class="media-body media-middle">
                                 <div class="ad-text">
                                    Tablets,<br> Smartphones<br> <strong>and more</strong>
                                 </div>
                                 <div class="ad-action">
                                    <a href="#"><span class="upto"><span class="prefix">Upto</span><span class="value">70</span><span class="suffix"></span></span></a>
                                 </div>
                              </div> -->
                           </div>
                        </div>
                        <div class="ad col-xs-12 col-sm-4">
                           <div class="media">
                              <div class="media-left media-middle">
                                 <iframe width="500" height="200" src="https://www.youtube.com/embed/hs1HoLs4SD0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </div>
                              <!-- <div class="media-body media-middle">
                                 <div class="ad-text">
                                    Shop the <br><strong>Hottest</strong><br> Products
                                 </div>
                                 <div class="ad-action">
                                    <a href="#">Shop now</a>
                                 </div>
                              </div> -->
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="home-v1-deals-and-tabs deals-and-tabs row animate-in-view fadeIn animated" data-animation="fadeIn">
                     <div class="deals-block col-lg-4">
                        <section class="section-onsale-product">
                           <header>
                              <h2 class="h1">Special Offer</h2>
                              <div class="savings">
                                 <span class="savings-text">Save upto <span class="amount">₹5000</span></span>
                              </div>
                           </header>
                           <!-- /header -->
                           <div class="onsale-products">
                              <div class="onsale-product">
                                 <?php if (!empty($special_offer_products)) { ?>
                                 <?php foreach ($special_offer_products as $key => $sop) { ?>
                                 <a href="<?php echo base_url();?>welcome/shop">
                                    <div class="product-thumbnail">
                                       <img class="wp-post-image" data-echo="<?php echo asset_url();?>images/products/<?php echo $sop->pdt_image?>" src="assets/images/blank.gif" alt=""  >
                                    </div>
                                    <h3><?php echo $sop->pdt_name; ?></h3>
                                 </a>
                                 <span class="price">
                                 <span class="electro-price">
                                 <ins><span class="amount">₹<?php echo $sop->new_pdt_cost; ?></span></ins>
                                 <del><span class="amount">₹<?php echo $sop->old_pdt_cost; ?></span></del>
                                 </span>
                                 </span><!-- /.price -->
                                 <?php  }} ?>
                                 <div class="deal-progress">
                                    <div class="deal-stock">
                                       <span class="stock-sold">Already Sold: <strong>2</strong></span>
                                       <span class="stock-available">Available: <strong>28</strong></span>
                                    </div>
                                    <div class="progress">
                                       <span class="progress-bar" style="width:8%">8</span>
                                    </div>
                                 </div>
                                 <!-- /.deal-progress -->
                                 <div class="deal-countdown-timer">
                                    <div class="marketing-text text-xs-center">Hurry Up! Offer ends in: </div>
                                    <div id="deal-countdown" class="countdown">
                                       <span data-value="0" class="days"><span class="value">0</span><b>Days</b></span>
                                       <span class="hours"><span class="value">7</span><b>Hours</b></span>
                                       <span class="minutes"><span class="value">29</span><b>Mins</b></span>
                                       <span class="seconds"><span class="value">13</span><b>Secs</b></span>
                                    </div>
                                    <span class="deal-end-date" style="display:none;">2016-12-31</span>
                                    <script>
                                       // set the date we're counting down to
                                       var deal_end_date = document.querySelector(".deal-end-date").textContent;
                                       var target_date = new Date( deal_end_date ).getTime();
                                       
                                       // variables for time units
                                       var days, hours, minutes, seconds;
                                       
                                       // get tag element
                                       var countdown = document.getElementById( 'deal-countdown' );
                                       
                                       // update the tag with id "countdown" every 1 second
                                       setInterval( function () {
                                       
                                       // find the amount of "seconds" between now and target
                                       var current_date = new Date().getTime();
                                       var seconds_left = (target_date - current_date) / 1000;
                                       
                                       // do some time calculations
                                       days = parseInt(seconds_left / 86400);
                                       seconds_left = seconds_left % 86400;
                                       
                                       hours = parseInt(seconds_left / 3600);
                                       seconds_left = seconds_left % 3600;
                                       
                                       minutes = parseInt(seconds_left / 60);
                                       seconds = parseInt(seconds_left % 60);
                                       
                                       // format countdown string + set tag value
                                       countdown.innerHTML = '<span data-value="' + days + '" class="days"><span class="value">' + days +  '</span><b>Days</b></span><span class="hours"><span class="value">' + hours + '</span><b>Hours</b></span><span class="minutes"><span class="value">'
                                       + minutes + '</span><b>Mins</b></span><span class="seconds"><span class="value">' + seconds + '</span><b>Secs</b></span>';
                                       
                                       }, 1000 );
                                    </script>
                                 </div>
                                 <!-- /.deal-countdown-timer -->
                              </div>
                              <!-- /.onsale-product -->
                           </div>
                           <!-- /.onsale-products -->
                        </section>
                        <!-- /.section-onsale-product -->
                     </div>
                     <!-- /.col -->
                     <div class="tabs-block col-lg-8">
                        <div class="products-carousel-tabs">
                           <ul class="nav nav-inline">
                              <li class="nav-item"><a class="nav-link active" href="#tab-products-1" data-toggle="tab">Featured</a></li>
                              <li class="nav-item"><a class="nav-link" href="#tab-products-2" data-toggle="tab">Best Selling</a></li>
                           </ul>
                           <div class="tab-content">
                              <div class="tab-pane active" id="tab-products-1" role="tabpanel">
                                 <div class="woocommerce columns-3">
                                  
                                    <ul class="products columns-3">
                                       <?php if (!empty($featured_products)): ?>
                                                <?php foreach ($featured_products as $fp): ?>
                                       
                                       <li class="product">
                                          <div class="product-outer">
                                             <div class="product-inner">
                                                <a href="<?php echo base_url().'welcome/single_product/'.$fp->id; ?>">
                                                   <h3><?php echo $fp->pdt_name; ?></h3>
                                                   <div class="product-thumbnail">
                                                      <img src="<?php echo asset_url();?>images/products/<?php echo $fp->pdt_image?>" class="img-responsive" alt=""  >
                                                   </div>
                                                </a>
                                                <div class="price-add-to-cart">
                                                   <span class="price">
                                                   <span class="electro-price">
                                                   <ins><span class="amount">₹<?php echo $fp->new_pdt_cost; ?></span></ins>
                                                   <del><span class="amount">₹<?php echo $fp->old_pdt_cost; ?></span></del>
                                                   <span class="amount"> </span>
                                                   </span>
                                                   </span>
                                                   <a rel="nofollow" href="JavaScript:Void(0);" id="add_to_cart_item" class="button add_to_cart_button" data-productid="<?php echo $fp->id; ?>" data-productname="<?php echo $fp->pdt_name; ?>" data-price="<?php echo $fp->new_pdt_cost; ?>" data-image="<?php echo $fp->pdt_image; ?>">Add to cart</a>
                                                </div>
                                                <!-- /.price-add-to-cart -->
                                                <div class="hover-area">
                                                   <div class="action-buttons">
                                                      <a href="JavaScript:Void(0);" rel="nofollow" class="add_to_wishlist" data-productidwish="<?php echo $fp->id; ?>" data-productnamewish="<?php echo $fp->pdt_name; ?>" data-productpricewish="<?php echo $fp->new_pdt_cost; ?>" data-productimagewish="<?php echo $fp->pdt_image; ?>" > Wishlist</a>
                                                      <a href="JavaScript:Void(0);" rel="nofollow" class="add_to_compare add-to-compare-link" data-productidcompare="<?php echo $fp->id; ?>" data-productnamecompare="<?php echo $fp->pdt_name; ?>" data-productpricecompare="<?php echo $fp->new_pdt_cost; ?>" data-productimagecompare="<?php echo $fp->pdt_image; ?>" data-productspecificationcompare="<?php echo $fp->pdt_specification; ?>" >Compare</a>
                                                      
                                                   </div>
                                                </div>
                                             </div>
                                             <!-- /.product-inner -->
                                          </div>
                                          <!-- /.product-outer -->
                                       </li>
                                       <?php  endforeach; endif;?>

                                       <!-- /.products -->
                                    </ul>

                                 </div>
                              </div>
                              <div class="tab-pane" id="tab-products-2" role="tabpanel">
                                 <div class="woocommerce columns-3">
                                    <ul class="products columns-3">
                                       <?php if (!empty($best_selling)) { ?>
                                       <?php foreach ($best_selling as $key => $bs) { ?>
                                       <li class="product">
                                          <div class="product-outer">
                                             <div class="product-inner">
                                                <a href="<?php echo base_url().'welcome/single_product/'.$bs->id; ?>">
                                                   <h3><?php echo $bs->pdt_name; ?></h3>
                                                   <div class="product-thumbnail">
                                                      <img data-echo="<?php echo asset_url();?>images/products/<?php echo $bs->pdt_image?>" src="assets/images/blank.gif" alt="" >
                                                   </div>
                                                </a>
                                                <div class="price-add-to-cart">
                                                   <span class="price">
                                                   <span class="electro-price">
                                                   <ins><span class="amount">₹<?php echo $bs->new_pdt_cost; ?></span></ins>
                                                   <del><span class="amount">₹<?php echo $bs->old_pdt_cost; ?></span></del>
                                                   </span>
                                                   </span>
                                                   <a rel="nofollow" href="JavaScript:Void(0);" id="add_to_cart_item" class="button add_to_cart_button" data-productid="<?php echo $bs->id; ?>" data-productname="<?php echo $bs->pdt_name; ?>" data-price="<?php echo $bs->new_pdt_cost; ?>" data-image="<?php echo $bs->pdt_image; ?>">Add to cart</a>
                                                </div>
                                                <!-- /.price-add-to-cart -->
                                                <div class="hover-area">
                                                   <div class="action-buttons">
                                                      <a href="JavaScript:Void(0);" rel="nofollow" class="add_to_wishlist" data-productidwish="<?php echo $bs->id; ?>" data-productnamewish="<?php echo $bs->pdt_name; ?>" data-productpricewish="<?php echo $bs->new_pdt_cost; ?>" data-productimagewish="<?php echo $bs->pdt_image; ?>" > Wishlist</a>
                                                      <a href="JavaScript:Void(0);" rel="nofollow" class="add_to_compare add-to-compare-link" data-productidcompare="<?php echo $bs->id; ?>" data-productnamecompare="<?php echo $bs->pdt_name; ?>" data-productpricecompare="<?php echo $bs->new_pdt_cost; ?>" data-productimagecompare="<?php echo $bs->pdt_image; ?>" data-productspecificationcompare="<?php echo $bs->pdt_specification; ?>" >Compare</a>
                                                   </div>
                                                </div>
                                             </div>
                                             <!-- /.product-inner -->
                                          </div>
                                          <!-- /.product-outer -->
                                       </li>
                                       <?php  } }?>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- /.tabs-block -->
                  </div>
                  <!-- /.deals-and-tabs -->
                  <!-- ============================================================= 2-1-2 Product Grid ============================================================= -->
                  <section class="products-carousel-tabs animate-in-view fadeIn animated" data-animation="fadeIn">
                     <h2 class="sr-only">Product Carousel Tabs</h2>
                     <ul class="nav nav-inline text-xs-left" >
                        <?php foreach ($brands as $key => $brand): ?>
                        <li class="nav-item" >
                           <a class="nav-link <?php echo $key == 0 ? 'active':'';?>" href="#brand<?php echo $brand->id; ?>" data-toggle="tab"><?php echo $brand->brand_name; ?></a>
                        </li>
                        <?php  endforeach; ?>  
                     </ul>
                     <!-- /.nav -->
                     <div class="tab-content">
                        <?php foreach ($brands as $key => $brand): ?>
                        <div class="tab-pane <?php echo $key == 0 ? 'active':'';?>" id="brand<?php echo $brand->id; ?>" role="tabpanel">
                           <div class="columns-6">
                              <ul class="products exclude-auto-height products-6">
                                 <?php foreach($products as $pdt): if($brand->id == $pdt->brand_id): ?>
                                 <li class="product">
                                    <div class="product-outer">
                                       <div class="product-inner">
                                          <span class="loop-product-categories"><a href="<?php echo base_url().'welcome/single_product/'.$pdt->id; ?>" rel="tag"></a></span>
                                          <a href="<?php echo base_url().'welcome/single_product/'.$pdt->id; ?>">
                                             <h3><?php echo $pdt->pdt_name ?></h3>
                                             <div class="product-thumbnail">
                                                <img data-echo="<?php echo asset_url();?>images/products/<?php echo $pdt->pdt_image?>" src="assets/images/blank.gif" alt="" >
                                             </div>
                                          </a>
                                          <div class="price-add-to-cart">
                                             <span class="price">
                                             <span class="electro-price">
                                             <ins><span class="amount">₹<?php echo $pdt->new_pdt_cost; ?></span></ins>
                                             <del><span class="amount">₹<?php echo $pdt->old_pdt_cost; ?></span></del>
                                             </span>
                                             </span>
                                             <a rel="nofollow" href="JavaScript:Void(0);" id="add_to_cart_item" class="button add_to_cart_button" data-productid="<?php echo $pdt->id; ?>" data-productname="<?php echo $pdt->pdt_name; ?>" data-price="<?php echo $pdt->new_pdt_cost; ?>" data-image="<?php echo $pdt->pdt_image; ?>">Add to cart</a>
                                          </div>
                                          <!-- /.price-add-to-cart -->
                                          <div class="hover-area">
                                             <div class="action-buttons">
                                                <a href="JavaScript:Void(0);" rel="nofollow" class="add_to_wishlist" data-productidwish="<?php echo $pdt->id; ?>" data-productnamewish="<?php echo $pdt->pdt_name; ?>" data-productpricewish="<?php echo $pdt->new_pdt_cost; ?>" data-productimagewish="<?php echo $pdt->pdt_image; ?>" > Wishlist</a>
                                                 <a href="JavaScript:Void(0);" rel="nofollow" class="add_to_compare add-to-compare-link" data-productidcompare="<?php echo $pdt->id; ?>" data-productnamecompare="<?php echo $pdt->pdt_name; ?>" data-productpricecompare="<?php echo $pdt->new_pdt_cost; ?>" data-productimagecompare="<?php echo $pdt->pdt_image; ?>" data-productspecificationcompare="<?php echo $pdt->pdt_specification; ?>" >Compare</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <?php endif;  endforeach; ?>
                              </ul>
                           </div>
                        </div>
                        <?php endforeach; ?>   
                     </div>
                     <div class="clearfix"> </div>

                     <!-- /.tab-content -->
                  </section>
                  <!-- ============================================================= 2-1-2 Product Grid : End============================================================= -->
                  <section class="section-product-cards-carousel animate-in-view fadeIn animated" data-animation="fadeIn">
                     <header>
                        <h2 class="h1">Best Sellers</h2>
                        <ul class="nav nav-inline">
                           <li class="nav-item active"><span class="nav-link">Top 20</span></li>
                        </ul>
                     </header>
                     <div id="home-v1-product-cards-careousel">
                        <div class="woocommerce home-v1-product-cards-carousel product-cards-carousel owl-carousel">
                           <ul class="products">
                              <?php if(!empty($top_twenty_products)): ?>
                                 <?php foreach ($top_twenty_products as  $ttp):?> 
                              <li class="product product-card ">
                                 <div class="product-outer">
                                    <div class="media product-inner">
                                       <a class="media-left" href="<?php echo base_url().'welcome/single_product/'.$ttp->id; ?>" title="Pendrive USB 3.0 Flash 64 GB">
                                       <img class="media-object wp-post-image img-responsive" src="assets/images/blank.gif" data-echo="<?php echo asset_url();?>images/products/<?php echo $ttp->pdt_image?>" alt="">
                                       </a>
                                       <div class="media-body">
                                          <span class="loop-product-categories">
                                          <a href="#" rel="tag"><?php echo $ttp->brand_name; ?></a>
                                          </span>
                                          <a href="<?php echo base_url(); ?>welcome/single_product/<?php echo $ttp->id; ?>">
                                             <h3><?php echo $ttp->pdt_name; ?></h3>
                                          </a>
                                          <div class="price-add-to-cart">
                                             <span class="price">
                                             <span class="electro-price">
                                             <ins><span class="amount">₹<?php echo $ttp->new_pdt_cost; ?></span></ins>
                                             <del><span class="amount">₹<?php echo $ttp->old_pdt_cost; ?></span></del>
                                             </span>
                                             </span>
                                             <a rel="nofollow" href="JavaScript:Void(0);" id="add_to_cart_item" class="button add_to_cart_button" data-productid="<?php echo $ttp->id; ?>" data-productname="<?php echo $ttp->pdt_name; ?>" data-price="<?php echo $ttp->new_pdt_cost; ?>" data-image="<?php echo $ttp->pdt_image; ?>">Add to cart</a>
                                          </div>
                                          <!-- /.price-add-to-cart -->
                                          <div class="hover-area">
                                             <div class="action-buttons">
                                                <a href="JavaScript:Void(0);" rel="nofollow" class="add_to_wishlist" data-productidwish="<?php echo $ttp->id; ?>" data-productnamewish="<?php echo $ttp->pdt_name; ?>" data-productpricewish="<?php echo $ttp->new_pdt_cost; ?>" data-productimagewish="<?php echo $ttp->pdt_image; ?>" > Wishlist</a>
                                                 <a href="JavaScript:Void(0);" rel="nofollow" class="add_to_compare add-to-compare-link" data-productidcompare="<?php echo $ttp->id; ?>" data-productnamecompare="<?php echo $ttp->pdt_name; ?>" data-productpricecompare="<?php echo $ttp->new_pdt_cost; ?>" data-productimagecompare="<?php echo $ttp->pdt_image; ?>" data-productspecificationcompare="<?php echo $ttp->pdt_specification; ?>" >Compare</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- /.product-inner -->
                                 </div>
                                 <!-- /.product-outer -->
                              </li>
                           <?php endforeach; endif; ?>
                              <!-- /.products -->
                           </ul>
                        </div>
                     </div>
                     <!-- #home-v1-product-cards-careousel -->
                  </section>
                  <div class="home-v1-banner-block animate-in-view fadeIn animated" data-animation="fadeIn">
                     <div class="home-v1-fullbanner-ad fullbanner-ad" style="margin-bottom: 70px">
                        <a href="#"><img src="assets/images/blank.gif" data-echo="assets/images/banner/home-v1-banner.png" class="img-responsive" alt=""></a>
                     </div>
                  </div>
                  <!-- /.home-v1-banner-block -->
                  <section class="home-v1-recently-viewed-products-carousel section-products-carousel animate-in-view fadeIn animated" data-animation="fadeIn">
                     <header>
                        <h2 class="h1">Recently Added</h2>
                        <div class="owl-nav">
                           <a href="#products-carousel-prev" data-target="#recently-added-products-carousel" class="slider-prev"><i class="fa fa-angle-left"></i></a>
                           <a href="#products-carousel-next" data-target="#recently-added-products-carousel" class="slider-next"><i class="fa fa-angle-right"></i></a>
                        </div>
                     </header>
                     <div id="recently-added-products-carousel">
                        <div class="woocommerce columns-6">
                           <div class="products owl-carousel recently-added-products products-carousel columns-6">
                              <?php if(!empty($recently_added)): ?>
                                 <?php foreach ($recently_added as $ra): ?>
                                  
                              <div class="product">
                                 <div class="product-outer">
                                    <div class="product-inner">
                                       <span class="loop-product-categories"><a href="#" rel="tag"><?php echo $ra->brand_name; ?></a></span>
                                       <a href="<?php echo base_url().'welcome/single_product/'.$ra->id; ?>">
                                          <h3><?php echo $ra->pdt_name; ?></h3>
                                          <div class="product-thumbnail">
                                             <img src="assets/images/blank.gif" data-echo="<?php echo asset_url();?>images/products/<?php echo $ra->pdt_image?>" class="img-responsive" alt="">
                                          </div>
                                       </a>
                                       <div class="price-add-to-cart">
                                          <span class="price">
                                                            <span class="electro-price">
                                                            <ins><span class="amount">₹<?php echo $ra->new_pdt_cost; ?></span></ins>
                                                             <del><span class="amount">₹<?php echo $ra->old_pdt_cost; ?></span></del>
                                                             </span>
                                                             </span>
                                          <a rel="nofollow" href="JavaScript:Void(0);" id="add_to_cart_item" class="button add_to_cart_button" data-productid="<?php echo $ra->id; ?>" data-productname="<?php echo $ra->pdt_name; ?>" data-price="<?php echo $ra->new_pdt_cost; ?>" data-image="<?php echo $ra->pdt_image; ?>">Add to cart</a>
                                       </div>
                                       <!-- /.price-add-to-cart -->
                                       <div class="hover-area">
                                          <div class="action-buttons">
                                              <a href="JavaScript:Void(0);" rel="nofollow" class="add_to_wishlist" data-productidwish="<?php echo $ra->id; ?>" data-productnamewish="<?php echo $ra->pdt_name; ?>" data-productpricewish="<?php echo $ra->new_pdt_cost; ?>" data-productimagewish="<?php echo $ra->pdt_image; ?>" > Wishlist</a>
                                             <a href="JavaScript:Void(0);" rel="nofollow" class="add_to_compare add-to-compare-link" data-productidcompare="<?php echo $ra->id; ?>" data-productnamecompare="<?php echo $ra->pdt_name; ?>" data-productpricecompare="<?php echo $ra->new_pdt_cost; ?>" data-productimagecompare="<?php echo $ra->pdt_image; ?>" data-productspecificationcompare="<?php echo $ra->pdt_specification; ?>" >Compare</a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- /.product-inner -->
                                 </div>
                                 <!-- /.product-outer -->
                              </div>
                           <?php endforeach; endif; ?>
                              <!-- /.products -->
                           </div>
                        </div>
                     </div>
                  </section>
               </main>
               <!-- #main -->
            </div>
            <!-- #primary -->
         </div>
         <!-- .container -->
      </div>
      <!-- #content -->
      <section class="brands-carousel">
         <h2 class="sr-only">Brands Carousel</h2>
         <div class="container">
            <div id="owl-brands" class="owl-brands owl-carousel unicase-owl-carousel owl-outer-nav">
               <div class="item">
                  <a href="#">
                     <figure>
                        <figcaption class="text-overlay">
                           <div class="info">
                              <h4>Acer</h4>
                           </div>
                           <!-- /.info -->
                        </figcaption>
                        <img src="assets/images/blank.gif" data-echo="assets/images/brands/1.png" class="img-responsive" alt="">
                     </figure>
                  </a>
               </div>
               <!-- /.item -->
               <div class="item">
                  <a href="#">
                     <figure>
                        <figcaption class="text-overlay">
                           <div class="info">
                              <h4>Apple</h4>
                           </div>
                           <!-- /.info -->
                        </figcaption>
                        <img src="assets/images/blank.gif" data-echo="assets/images/brands/2.png" class="img-responsive" alt="">
                     </figure>
                  </a>
               </div>
               <!-- /.item -->
               <div class="item">
                  <a href="#">
                     <figure>
                        <figcaption class="text-overlay">
                           <div class="info">
                              <h4>Asus</h4>
                           </div>
                           <!-- /.info -->
                        </figcaption>
                        <img src="assets/images/blank.gif" data-echo="assets/images/brands/3.png" class="img-responsive" alt="">
                     </figure>
                  </a>
               </div>
               <!-- /.item -->
               <div class="item">
                  <a href="#">
                     <figure>
                        <figcaption class="text-overlay">
                           <div class="info">
                              <h4>Dell</h4>
                           </div>
                           <!-- /.info -->
                        </figcaption>
                        <img src="assets/images/blank.gif" data-echo="assets/images/brands/4.png" class="img-responsive" alt="">
                     </figure>
                  </a>
               </div>
               <!-- /.item -->
               <div class="item">
                  <a href="#">
                     <figure>
                        <figcaption class="text-overlay">
                           <div class="info">
                              <h4>Gionee</h4>
                           </div>
                           <!-- /.info -->
                        </figcaption>
                        <img src="assets/images/blank.gif" data-echo="assets/images/brands/5.png" class="img-responsive" alt="">
                     </figure>
                  </a>
               </div>
               <!-- /.item -->
               <div class="item">
                  <a href="#">
                     <figure>
                        <figcaption class="text-overlay">
                           <div class="info">
                              <h4>HP</h4>
                           </div>
                           <!-- /.info -->
                        </figcaption>
                        <img src="assets/images/blank.gif" data-echo="assets/images/brands/6.png" class="img-responsive" alt="">
                     </figure>
                  </a>
               </div>
               <!-- /.item -->
               <div class="item">
                  <a href="#">
                     <figure>
                        <figcaption class="text-overlay">
                           <div class="info">
                              <h4>HTC</h4>
                           </div>
                           <!-- /.info -->
                        </figcaption>
                        <img src="assets/images/blank.gif" data-echo="assets/images/brands/3.png" class="img-responsive" alt="">
                     </figure>
                  </a>
               </div>
               <!-- /.item -->
               <div class="item">
                  <a href="#">
                     <figure>
                        <figcaption class="text-overlay">
                           <div class="info">
                              <h4>IBM</h4>
                           </div>
                           <!-- /.info -->
                        </figcaption>
                        <img src="assets/images/blank.gif" data-echo="assets/images/brands/5.png" class="img-responsive" alt="">
                     </figure>
                  </a>
               </div>
               <!-- /.item -->
               <div class="item">
                  <a href="#">
                     <figure>
                        <figcaption class="text-overlay">
                           <div class="info">
                              <h4>Lenova</h4>
                           </div>
                           <!-- /.info -->
                        </figcaption>
                        <img src="assets/images/blank.gif" data-echo="assets/images/brands/2.png" class="img-responsive" alt="">
                     </figure>
                  </a>
               </div>
               <!-- /.item -->
               <div class="item">
                  <a href="#">
                     <figure>
                        <figcaption class="text-overlay">
                           <div class="info">
                              <h4>LG</h4>
                           </div>
                           <!-- /.info -->
                        </figcaption>
                        <img src="assets/images/blank.gif" data-echo="assets/images/brands/1.png" class="img-responsive" alt="">
                     </figure>
                  </a>
               </div>
               <!-- /.item -->
               <div class="item">
                  <a href="#">
                     <figure>
                        <figcaption class="text-overlay">
                           <div class="info">
                              <h4>Micromax</h4>
                           </div>
                           <!-- /.info -->
                        </figcaption>
                        <img src="assets/images/blank.gif" data-echo="assets/images/brands/6.png" class="img-responsive" alt="">
                     </figure>
                  </a>
               </div>
               <!-- /.item -->
               <div class="item">
                  <a href="#">
                     <figure>
                        <figcaption class="text-overlay">
                           <div class="info">
                              <h4>Microsoft</h4>
                           </div>
                           <!-- /.info -->
                        </figcaption>
                        <img src="assets/images/blank.gif" data-echo="assets/images/brands/4.png" class="img-responsive" alt="">
                     </figure>
                  </a>
               </div>
               <!-- /.item -->
            </div>
            <!-- /.owl-carousel -->
         </div>
      </section>
   </div>
   <!-- #page -->

</body>
</html>
<script>
    jQuery(document).ready(function(){
         var base_url = '<?php echo base_url(); ?>';
         var url = base_url+'welcome/addToCart'
         
         jQuery('.add_to_cart_button').click(function(){
             var product_id = jQuery(this).data('productid');
            var product_name = jQuery(this).data('productname');
            var product_price = jQuery(this).data('price');
            var product_image = jQuery(this).data('image');
             var quantity = 1;
             
         
             jQuery.ajax({
                     url: url,
                     type: 'POST',
                     data: {product_id:product_id,product_name:product_name,product_price:product_price,quantity:quantity,product_image:product_image},
                     success: function(data) {

                    alert("Successfully Added Into Cart");
                     location.reload();

                         
         
                     }
             });
         });
     });
</script>
<script>
   jQuery(document).ready(function(){
         var base_url = '<?php echo base_url(); ?>';
         var url = base_url+'welcome/addWishlist'
         
         jQuery('.add_to_wishlist').click(function(){
             var product_id = jQuery(this).data('productidwish');
            var product_name = jQuery(this).data('productnamewish');
            var product_price = jQuery(this).data('productpricewish');
            var product_image = jQuery(this).data('productimagewish');
             var quantity = 1;
             
         
             jQuery.ajax({
                     url: url,
                     type: 'POST',
                     data: {product_id:product_id,product_name:product_name,product_price:product_price,quantity:quantity,product_image:product_image},
                     success: function(data) {
                        if (data)
                         {
                           window.location.href = '<?php echo base_url(); ?>welcome/signIn'

                         }
                        else
                         {
                            alert("Successfully Added Into Wishlist");
                              location.reload();

                         }
         
                     }
             });
         });
     });
</script>
<script>
   jQuery(document).ready(function(){
         var base_url = '<?php echo base_url(); ?>';
         var url = base_url+'welcome/compare'
         
         jQuery('.add_to_compare').click(function(){
             var product_id = jQuery(this).data('productidcompare');
            var product_name = jQuery(this).data('productnamecompare');
            var product_price = jQuery(this).data('productpricecompare');
            var product_image = jQuery(this).data('productimagecompare');
            var product_specification = jQuery(this).data('productspecificationcompare');
            var quantity = 1;
             
         
             jQuery.ajax({
                     url: url,
                     type: 'POST',
                     data: {product_id:product_id,product_name:product_name,product_price:product_price,product_image:product_image,quantity:quantity,product_specification:product_specification},
                     success: function(data) {
                        if (data)
                         {
                              window.location.href = '<?php echo base_url(); ?>welcome/signIn'
                         }
                        else
                         {
                           alert("Successfully Added Into Compare");
                              location.reload();
                         
                         }
         
                     }
             });
         });
     });
</script>