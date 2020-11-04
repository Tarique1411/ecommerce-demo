<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title> OutlookMobiles</title>
      <script type="text/javascript" src="<?php echo asset_url();?>js/jquery.min.js"></script>
      <script type="text/javascript" src="<?php echo asset_url();?>js/tether.min.js"></script>
      <script type="text/javascript" src="<?php echo asset_url();?>js/bootstrap.min.js"></script>
      <script type="text/javascript" src="<?php echo asset_url();?>js/bootstrap-hover-dropdown.min.js"></script>
      <script type="text/javascript" src="<?php echo asset_url();?>js/owl.carousel.min.js"></script>
      <script type="text/javascript" src="<?php echo asset_url();?>js/echo.min.js"></script>
      <script type="text/javascript" src="<?php echo asset_url();?>js/wow.min.js"></script>
      <script type="text/javascript" src="<?php echo asset_url();?>js/jquery.easing.min.js"></script>
      <script type="text/javascript" src="<?php echo asset_url();?>js/jquery.waypoints.min.js"></script>
      <script type="text/javascript" src="<?php echo asset_url();?>js/electro.js"></script>
      <script type="text/javascript" src="<?php echo asset_url();?>js/jquery.validate.js"></script>
      <script type="text/javascript" src="<?php echo asset_url();?>js/jquery.validate.min.js"></script>
      <script type="text/javascript" src="<?php echo asset_url();?>js/jquery.elevatezoom.min.js"></script>
      
      <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/bootstrap.min.css" media="all" />
      <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/font-awesome.min.css" media="all" />
      <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/animate.min.css" media="all" />
      <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/font-electro.css" media="all" />
      <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/owl-carousel.css" media="all" />
      <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/style.css" media="all" />
      <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/colors/yellow.css" media="all" />
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,700italic,800,800italic,600italic,400italic,300italic' rel='stylesheet' type='text/css'>
      <link rel="shortcut icon" href="<?php echo asset_url();?>images/it_logo.png">
   </head>
   <style type="text/css">
      .header-v1 + .navbar-primary {
      background: aliceblue;
      }

   </style>
   <body>
      <div class="top-bar hidden-md-down">
         <div class="container">
            <nav>
               <ul id="menu-top-bar-left" class="nav nav-inline pull-left animate-dropdown flip">
                  <li class="menu-item animate-dropdown"><a title="Welcome to Worldwide Electronics Store" href="#">Welcome to Outlook Mobiles</a></li>
               </ul>
            </nav>
            <nav>
               <ul id="menu-top-bar-right" class="nav nav-inline pull-right animate-dropdown flip">
                  <li class="menu-item animate-dropdown"><a title="Track Your Order" href="<?php echo base_url(); ?>welcome/track_order"><i class="ec ec-transport"></i>Track Your Order</a></li>
                   <?php if(isset($_SESSION['first_name']) && !empty($_SESSION['first_name'])): ?>
                  <li class="menu-item animate-dropdown"><a title="" href="<?php echo base_url().'welcome/user_account'; ?>"><i class="ec ec-user"></i><?php echo 'Welcome '.$_SESSION['first_name'] ?></a></li>
                  <li class="menu-item animate-dropdown"><a title="My Account" href="<?php echo base_url().'welcome/user_logout'; ?>"><i class="ec ec-user"></i>Log Out</a></li>
                  <?php else: ?>
                  <li class="menu-item animate-dropdown"><a title="My Account" href="<?php echo base_url().'welcome/signIn'; ?>"><i class="ec ec-user"></i>Log In</a></li>
                  <?php endif; ?>
               </ul>
            </nav>
         </div>
      </div>
      <!-- /.top-bar -->
      <header id="masthead" class="site-header header-v1">
         <div class="container hidden-md-down">
            <div class="row">
               <!-- ============================================================= Header Logo ============================================================= -->
               <div class="header-logo">
                  <a href="<?php echo base_url();?>" class="header-logo-link">
                  <img src="<?php echo asset_url();?>images/it_logo.png" alt="logo" style="width: 200px;height: 200px;">
                  </a>
               </div>
               <!-- ============================================================= Header Logo : End============================================================= -->
               <form class="navbar-search" method="get" action="<?php echo base_url(); ?>welcome/search_products">
                  <label class="sr-only screen-reader-text" for="search">Search for:</label>
                  <div class="input-group">
                     <input type="text" name="keyword" id="search" class="form-control search-field" dir="ltr" value=""  placeholder="Search for products" />
                     <div id="result"></div>
                     <div class="input-group-addon search-categories">
                        <select name='product_cat' id='product_cat' class='postform resizeselect' >
                           <option value='0' selected='selected'>All Categories</option>
                           <?php if (!empty($brands)): ?>
                              <?php foreach($brands as $key => $brand): ?>

                           <option class="level-0" value="<?php echo $brand->id; ?>"><?php echo $brand->brand_name; ?></option>
                        <?php  endforeach; endif; ?>
                          
                        </select>
                     </div>
                     <div class="input-group-btn">
                        <input type="hidden" id="search-param" name="post_type" value="product" />
                        <button type="submit" class="btn btn-secondary"><i class="ec ec-search"></i></button>
                     </div>
                  </div>
               </form>
               <?php 
                  $tot_cost = 0;
                  if(!empty($cartItems)){
                     foreach($cartItems as $ci){ 
                         $podt_cost = (int)$ci['qty']*$ci['price'];
                          $tot_cost += $podt_cost;
                      }
                  }
                  
                  ?>
               <ul class="navbar-mini-cart navbar-nav animate-dropdown nav pull-right flip">
                  <li class="nav-item dropdown cart">
                     <a href="cart.html" class="nav-link" data-toggle="dropdown">
                     <i class="ec ec-shopping-bag"></i>
                     <span class="cart-items-count count remove_cart" id="cart_count">
                     <?php if(!empty($cartItems)): ?>
                     <?php echo count($cartItems); ?>
                     <?php endif; ?>
                     </span>
                     <span class="cart-items-total-price total-price"><span class="amount">₹<?php echo $tot_cost;?></span></span>
                     </a>
                     <ul class="dropdown-menu dropdown-menu-mini-cart">
                        <li>
                           <div class="widget_shopping_cart_content">
                              <ul class="cart_list product_list_widget ">
                                 <?php 
                                    $total_cost = 0; 
                                    if(!empty($cartItems)): foreach($cartItems as $key => $ci):
                                    $pdt_cost = (int)$ci['qty']*(float)$ci['price'];
                                        $total_cost += $pdt_cost;
                                        ?>
                                 <li class="mini_cart_item">
                                    <a title="Remove this item" class="remove remove_pdt" href="JavaScript:Void(0);" data-cost="<?php echo $pdt_cost; ?>" data-id="<?php echo $ci['rowid']; ?>">×</a>
                                    <a href="<?php echo base_url().'welcome/single_product/'.$ci['id']; ?>">
                                    <img class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="<?php echo asset_url().'/images/products/'.$ci['image'] ;?>" alt="" style="width: 150px; height: 150px;" ><?php
                                       echo $ci['name']; ?>&nbsp;
                                    </a>
                                    <span class="quantity"><?php echo $ci['qty']; ?> × <span class="amount">₹<?php echo $ci['price']; ?></span></span>
                                 </li>
                                 <?php endforeach; endif;?>
                              </ul>
                              <!-- end product list -->
                              <p class="buttons">
                                 <a class="button wc-forward" href="<?php echo base_url(); ?>welcome/cart">View Cart</a>
                                 <a class="button checkout wc-forward" href="<?php echo base_url(); ?>welcome/checkout">Checkout</a>
                              </p>
                           </div>
                        </li>
                     </ul>
                  </li>
               </ul>
               <ul class="navbar-mini-cart navbar-nav animate-dropdown nav pull-right flip">
                  <li class="nav-item dropdown">
                     <a href="cart.html" class="nav-link" data-toggle="dropdown">
                     <i class="ec ec-favorites"></i>
                     <span class="cart-items-count count remove_cart" id="cart_count" style="background:violet;color: white;">
                     <?php if(!empty($wishItems)): ?>
                     <?php echo count($wishItems); ?>
                     <?php endif; ?>
                     </span>
                     </a>
                     <ul class="dropdown-menu dropdown-menu-mini-cart">
                        <li>
                           <div class="widget_shopping_cart_content">
                              <ul class="cart_list product_list_widget ">
                                 <?php 
                                    $total_cost = 0; 
                                    if(!empty($wishItems)): foreach($wishItems as $key => $wi):
                                        ?>
                                 <li class="mini_cart_item">
                                    <a href="<?php echo base_url().'welcome/single_product/'.$wi->pdt_id; ?>">
                                    <img class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="<?php echo asset_url().'/images/products/'.$wi->pdt_image;?>" alt="" style="width: 150px; height: 150px;" ><?php
                                       echo $wi->pdt_name; ?></br>
                                    </a>
                                    <span class="amount">₹<?php echo $wi->pdt_cost; ?></span>
                                 </li>
                                 <?php endforeach; endif;?>
                              </ul>
                              <!-- end product list -->
                              <p class="buttons">
                                 <a class="button wc-forward" href="<?php echo base_url(); ?>welcome/wishlist">View Wishlist</a>
                              </p>
                           </div>
                        </li>
                     </ul>
                  </li>
               </ul>
               <ul class="navbar-mini-cart navbar-nav animate-dropdown nav pull-right flip">
                  <li class="nav-item dropdown">
                     <a href="cart.html" class="nav-link" data-toggle="dropdown">
                     <i class="ec ec-compare"></i>
                     <span class="cart-items-count count remove_cart" id="cart_count" style="background:green;color: white;">
                     <?php if(!empty($compareItems)): ?>
                     <?php echo count($compareItems); ?>
                     <?php endif; ?>
                     </span>
                     </a>
                     <ul class="dropdown-menu dropdown-menu-mini-cart">
                        <li>
                           <div class="widget_shopping_cart_content">
                              <ul class="cart_list product_list_widget ">
                                 <?php 
                                    if(!empty($compareItems)): foreach($compareItems as $key => $item):
                                        ?>
                                 <li class="mini_cart_item">
                                    <a href="<?php echo base_url().'welcome/single_product/'.$item->pdt_id; ?>">
                                    <img class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="<?php echo asset_url().'/images/products/'.$item->pdt_image;?>" alt="" style="width: 150px; height: 150px;" ><?php
                                       echo $item->pdt_name; ?></br>
                                    </a>
                                    <span class="amount">₹<?php echo $item->pdt_cost; ?></span>
                                 </li>
                                 <?php endforeach; endif;?>
                              </ul>
                              <!-- end product list -->
                              <p class="buttons">
                                 <a class="button wc-forward" href="<?php echo base_url(); ?>welcome/compare">View Compare</a>
                              </p>
                           </div>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
            <!-- /.row -->
         </div>
         <div class="container hidden-lg-up">
            <div class="handheld-header">
               <div class="handheld-navigation-wrapper">
                  <div class="handheld-navbar-toggle-buttons clearfix"> 
                     <button class="navbar-toggler navbar-toggle-hamburger hidden-lg-up pull-right flip" type="button"> 
                     <i class="fa fa-bars" aria-hidden="true"></i> 
                     </button> 
                     <button class="navbar-toggler navbar-toggle-close hidden-lg-up pull-right flip" type="button"> 
                     <i class="ec ec-close-remove"></i> 
                     </button>
                  </div>
                  <div class="handheld-navigation hidden-lg-up" id="default-hh-header">
                     <span class="ehm-close">Close</span>
                     <ul id="menu-all-departments-menu-1" class="nav nav-inline yamm">
                        <li class="highlight menu-item animate-dropdown ">
                           <a title="Value of the Day" href="home-v2.html">Value of the Day</a>
                        </li>
                        <li class="highlight menu-item animate-dropdown ">
                           <a title="Top 100 Offers" href="home-v3.html">Top 100 Offers</a>
                        </li>
                        <li class="highlight menu-item animate-dropdown ">
                           <a title="New Arrivals" href="home-v3-full-color.html">New Arrivals</a>
                        </li>
                        <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown">
                           <a title="Computers &amp; Accessories" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Computers &amp; Accessories</a>
                           <ul role="menu" class=" dropdown-menu">
                              <li class="menu-item animate-dropdown ">
                                 <div class="yamm-content">
                                    <div class="col-sm-6">
                                       <ul>
                                          <li class="nav-title">Computers &amp; Accessories</li>
                                          <li><a href="#">All Computers &amp; Accessories</a></li>
                                          <li><a href="#">Laptops, Desktops &amp; Monitors</a></li>
                                          <li><a href="#">Pen Drives, Hard Drives &amp; Memory Cards</a></li>
                                          <li><a href="#">Printers &amp; Ink</a></li>
                                          <li><a href="#">Networking &amp; Internet Devices</a></li>
                                          <li><a href="#">Computer Accessories</a></li>
                                          <li><a href="#">Software</a></li>
                                          <li class="nav-divider"></li>
                                          <li>
                                             <a href="#">
                                             <span class="nav-text">All Electronics</span>
                                             <span class="nav-subtext">Discover more products</span>
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="col-sm-6">
                                       <ul>
                                          <li class="nav-title">Office &amp; Stationery</li>
                                          <li><a href="#">All Office &amp; Stationery</a></li>
                                          <li><a href="#">Pens &amp; Writing</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </li>
                        <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown">
                           <a title="Cameras, Audio &amp; Video" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Cameras, Audio &amp; Video</a>
                           <ul role="menu" class=" dropdown-menu">
                              <li class="menu-item animate-dropdown">
                                 <div class="yamm-content">
                                    <div class="col-sm-6">
                                       <ul>
                                          <li class="nav-title">Cameras &amp; Photography</li>
                                          <li><a href="#">All Cameras &amp; Photography</a></li>
                                          <li><a href="#">Digital SLRs</a></li>
                                          <li><a href="#">Point &amp; Shoot Cameras</a></li>
                                          <li><a href="#">Lenses</a></li>
                                          <li><a href="#">Camera Accessories</a></li>
                                          <li><a href="#">Security &amp; Surveillance</a></li>
                                          <li><a href="#">Binoculars &amp; Telescopes</a></li>
                                          <li><a href="#">Camcorders</a></li>
                                          <li class="nav-divider"></li>
                                          <li>
                                             <a href="#">
                                             <span class="nav-text">All Electronics</span>
                                             <span class="nav-subtext">Discover more products</span>
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="col-sm-6">
                                       <ul>
                                          <li class="nav-title">Audio &amp; Video</li>
                                          <li><a href="#">All Audio &amp; Video</a></li>
                                          <li><a href="#">Headphones &amp; Speakers</a></li>
                                          <li><a href="#">Home Entertainment Systems</a></li>
                                          <li><a href="#">MP3 &amp; Media Players</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </li>
                        <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown">
                           <a title="Mobiles &amp; Tablets" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Mobiles &amp; Tablets</a>
                           <ul role="menu" class=" dropdown-menu">
                              <li class="menu-item animate-dropdown ">
                                 <div class="yamm-content">
                                    <div class="col-sm-6">
                                       <ul>
                                          <li class="nav-title">Mobiles &amp; Tablets</li>
                                          <li><a href="#">All Mobile Phones</a></li>
                                          <li><a href="#">Smartphones</a></li>
                                          <li><a href="#">Android Mobiles</a></li>
                                          <li><a href="#">Windows Mobiles</a></li>
                                          <li><a href="#">Refurbished Mobiles</a></li>
                                          <li class="nav-divider"></li>
                                          <li><a href="#">All Mobile Accessories</a></li>
                                          <li><a href="#">Cases &amp; Covers</a></li>
                                          <li><a href="#">Screen Protectors</a></li>
                                          <li><a href="#">Power Banks</a></li>
                                          <li class="nav-divider"></li>
                                          <li>
                                             <a href="#">
                                             <span class="nav-text">All Electronics</span>
                                             <span class="nav-subtext">Discover more products</span>
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="col-sm-6">
                                       <ul>
                                          <li class="nav-title"></li>
                                          <li><a href="#">All Tablets</a></li>
                                          <li><a href="#">Tablet Accessories</a></li>
                                          <li><a href="#">Landline Phones</a></li>
                                          <li><a href="#">Wearable Devices</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </li>
                        <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown">
                           <a title="Movies, Music &amp; Video Games" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Movies, Music &amp; Video Games</a>
                           <ul role="menu" class=" dropdown-menu">
                              <li class="menu-item animate-dropdown ">
                                 <div class="yamm-content">
                                    <div class="col-sm-6">
                                       <ul>
                                          <li class="nav-title">Movies &amp; TV Shows</li>
                                          <li><a href="#">All Movies &amp; TV Shows</a></li>
                                          <li><a href="#">Blu-ray</a></li>
                                          <li><a href="#">All English</a></li>
                                          <li><a href="#">All Hindi</a></li>
                                          <li class="nav-divider"></li>
                                          <li class="nav-title">Video Games</li>
                                          <li><a href="#">All Consoles, Games &amp; Accessories</a></li>
                                          <li><a href="#">PC Games</a></li>
                                          <li><a href="#">Pre-orders &amp; New Releases</a></li>
                                          <li><a href="#">Consoles</a></li>
                                          <li><a href="#">Accessories</a></li>
                                       </ul>
                                    </div>
                                    <div class="col-sm-6">
                                       <ul>
                                          <li class="nav-title">Music</li>
                                          <li><a href="#">All Music</a></li>
                                          <li><a href="#">International Music</a></li>
                                          <li><a href="#">Film Songs</a></li>
                                          <li><a href="#">Indian Classical</a></li>
                                          <li><a href="#">Musical Instruments</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </li>
                        <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown">
                           <a title="TV &amp; Audio" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">TV &amp; Audio</a>
                           <ul role="menu" class=" dropdown-menu">
                              <li class="menu-item animate-dropdown">
                                 <div class="yamm-content">
                                    <div class="col-sm-6">
                                       <ul>
                                          <li class="nav-title">Audio &amp; Video</li>
                                          <li><a href="#">All Audio &amp; Video</a></li>
                                          <li><a href="#">Televisions</a></li>
                                          <li><a href="#">Headphones</a></li>
                                          <li><a href="#">Speakers</a></li>
                                          <li><a href="#">Home Entertainment Systems</a></li>
                                          <li><a href="#">MP3 &amp; Media Players</a></li>
                                          <li><a href="#">Audio &amp; Video Accessories</a></li>
                                          <li class="nav-divider"></li>
                                          <li>
                                             <a href="#">
                                             <span class="nav-text">Electro Home Appliances</span>
                                             <span class="nav-subtext">Available in select cities</span>
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="col-sm-6">
                                       <ul>
                                          <li class="nav-title">Music</li>
                                          <li><a href="#">Televisions</a></li>
                                          <li><a href="#">Headphones</a></li>
                                          <li><a href="#">Speakers</a></li>
                                          <li><a href="#">Media Players</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </li>
                        <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown">
                           <a title="Watches &amp; Eyewear" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Watches &amp; Eyewear</a>
                           <ul role="menu" class=" dropdown-menu">
                              <li class="menu-item animate-dropdown">
                                 <div class="yamm-content">
                                    <div class="col-sm-6">
                                       <ul>
                                          <li class="nav-title">Watches</li>
                                          <li><a href="#">All Watches</a></li>
                                          <li><a href="#">Men&#8217;s Watches</a></li>
                                          <li><a href="#">Women&#8217;s Watches</a></li>
                                          <li><a href="#">Premium Watches</a></li>
                                          <li><a href="#">Deals on Watches</a></li>
                                       </ul>
                                    </div>
                                    <div class="col-sm-6">
                                       <ul>
                                          <li class="nav-title">Eyewear</li>
                                          <li><a href="#">Men&#8217;s Sunglasses</a></li>
                                          <li><a href="#">Women&#8217;s Sunglasses</a></li>
                                          <li><a href="#">Spectacle Frames</a></li>
                                          <li><a href="#">All Sunglasses</a></li>
                                          <li><a href="#">Amazon Fashion</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </li>
                        <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown">
                           <a title="Car, Motorbike &amp; Industrial" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Car, Motorbike &amp; Industrial</a>
                           <ul role="menu" class=" dropdown-menu">
                              <li class="menu-item animate-dropdown">
                                 <div class="yamm-content">
                                    <div class="col-sm-6">
                                       <ul>
                                          <li class="nav-title">Car &amp; Motorbike</li>
                                          <li><a href="#">All Cars &amp; Bikes</a></li>
                                          <li><a href="#">Car &amp; Bike Care</a></li>
                                          <li><a href="#">Lubricants</a></li>
                                          <li class="nav-divider"></li>
                                          <li class="nav-title">Shop for Bike</li>
                                          <li><a href="#">Helmets &amp; Gloves</a></li>
                                          <li><a href="#">Bike Parts</a></li>
                                          <li class="nav-title">Shop for Car</li>
                                          <li><a href="#">Air Fresheners</a></li>
                                          <li><a href="#">Car Parts</a></li>
                                          <li><a href="#">Tyre Accessories</a></li>
                                       </ul>
                                    </div>
                                    <div class="col-sm-6">
                                       <ul>
                                          <li class="nav-title">Industrial Supplies</li>
                                          <li><a href="#">All Industrial Supplies</a></li>
                                          <li><a href="#">Lab &amp; Scientific</a></li>
                                          <li><a href="#">Janitorial &amp; Sanitation Supplies</a></li>
                                          <li><a href="#">Test, Measure &amp; Inspect</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </li>
                        <li class="menu-item menu-item-has-children animate-dropdown dropdown">
                           <a title="Accessories" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Accessories</a>
                           <ul role="menu" class=" dropdown-menu">
                              <li class="menu-item animate-dropdown ">
                                 <a title="Cases" href="product-category.html">Cases</a>
                              </li>
                              <li class="menu-item animate-dropdown ">
                                 <a title="Chargers" href="product-category.html">Chargers</a>
                              </li>
                              <li class="menu-item animate-dropdown ">
                                 <a title="Headphone Accessories" href="product-category.html">Headphone Accessories</a>
                              </li>
                              <li class="menu-item animate-dropdown ">
                                 <a title="Headphone Cases" href="product-category.html">Headphone Cases</a>
                              </li>
                              <li class="menu-item animate-dropdown ">
                                 <a title="Headphones" href="product-category.html">Headphones</a>
                              </li>
                              <li class="menu-item animate-dropdown ">
                                 <a title="Computer Accessories" href="product-category.html">Computer Accessories</a>
                              </li>
                              <li class="menu-item animate-dropdown ">
                                 <a title="Laptop Accessories" href="product-category.html">Laptop Accessories</a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- #masthead -->
      <nav class="navbar navbar-primary navbar-full hidden-md-down">
         <div class="container">
            <ul class="nav navbar-nav departments-menu animate-dropdown">
               <li class="nav-item dropdown ">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="departments-menu-toggle" >Shop by Department</a>
                  <ul id="menu-vertical-menu" class="dropdown-menu yamm departments-menu-dropdown">
                     <li class="highlight menu-item animate-dropdown active"><a title="Value of the Day" href="product-category.html">Value of the Day</a></li>
                     <li class="highlight menu-item animate-dropdown"><a title="Top 100 Offers" href="home-v3.html">Top 100 Offers</a></li>
                     <li class="highlight menu-item animate-dropdown"><a title="New Arrivals" href="home-v3-full-color-background.html">New Arrivals</a></li>
                     <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2584 dropdown">
                        <a title="Computers &amp; Accessories" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Computers &#038; Accessories</a>
                        <ul role="menu" class=" dropdown-menu">
                           <li class="menu-item animate-dropdown menu-item-object-static_block">
                              <div class="yamm-content">
                                 <div class="vc_row row wpb_row vc_row-fluid bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                    <div class="wpb_column vc_column_container vc_col-sm-12 col-sm-12">
                                       <div class="vc_column-inner ">
                                          <div class="wpb_wrapper">
                                             <div class="wpb_single_image wpb_content_element vc_align_left">
                                                <figure class="wpb_wrapper vc_figure">
                                                   <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="540" height="460" src="assets/images/megamenu-2.png" class="vc_single_image-img attachment-full" alt="megamenu-2"/></div>
                                                </figure>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="vc_row row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
                                       <div class="vc_column-inner ">
                                          <div class="wpb_wrapper">
                                             <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                   <ul>
                                                      <li class="nav-title">Computers &amp; Accessories</li>
                                                      <li><a href="#">All Computers &amp; Accessories</a></li>
                                                      <li><a href="#">Laptops, Desktops &amp; Monitors</a></li>
                                                      <li><a href="#">Pen Drives, Hard Drives &amp; Memory Cards</a></li>
                                                      <li><a href="#">Printers &amp; Ink</a></li>
                                                      <li><a href="#">Networking &amp; Internet Devices</a></li>
                                                      <li><a href="#">Computer Accessories</a></li>
                                                      <li><a href="#">Software</a></li>
                                                      <li class="nav-divider"></li>
                                                      <li><a href="#"><span class="nav-text">All Electronics</span><span class="nav-subtext">Discover more products</span></a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
                                       <div class="vc_column-inner ">
                                          <div class="wpb_wrapper">
                                             <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                   <ul>
                                                      <li class="nav-title">Office &amp; Stationery</li>
                                                      <li><a href="#">All Office &amp; Stationery</a></li>
                                                      <li><a href="#">Pens &amp; Writing</a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </li>
                     <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2585 dropdown">
                        <a title="Cameras, Audio &amp; Video" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Cameras, Audio &#038; Video</a>
                        <ul role="menu" class=" dropdown-menu">
                           <li class="menu-item animate-dropdown menu-item-object-static_block">
                              <div class="yamm-content">
                                 <div class="vc_row row wpb_row vc_row-fluid bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                    <div class="wpb_column vc_column_container vc_col-sm-12 col-sm-12">
                                       <div class="vc_column-inner ">
                                          <div class="wpb_wrapper">
                                             <div class="wpb_single_image wpb_content_element vc_align_left">
                                                <figure class="wpb_wrapper vc_figure">
                                                   <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="540" height="460" src="assets/images/megamenu-2.png" class="vc_single_image-img attachment-full" alt="megamenu-2"/></div>
                                                </figure>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="vc_row row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
                                       <div class="vc_column-inner ">
                                          <div class="wpb_wrapper">
                                             <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                   <ul>
                                                      <li class="nav-title">Computers &amp; Accessories</li>
                                                      <li><a href="#">All Computers &amp; Accessories</a></li>
                                                      <li><a href="#">Laptops, Desktops &amp; Monitors</a></li>
                                                      <li><a href="#">Pen Drives, Hard Drives &amp; Memory Cards</a></li>
                                                      <li><a href="#">Printers &amp; Ink</a></li>
                                                      <li><a href="#">Networking &amp; Internet Devices</a></li>
                                                      <li><a href="#">Computer Accessories</a></li>
                                                      <li><a href="#">Software</a></li>
                                                      <li class="nav-divider"></li>
                                                      <li><a href="#"><span class="nav-text">All Electronics</span><span class="nav-subtext">Discover more products</span></a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
                                       <div class="vc_column-inner ">
                                          <div class="wpb_wrapper">
                                             <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                   <ul>
                                                      <li class="nav-title">Office &amp; Stationery</li>
                                                      <li><a href="#">All Office &amp; Stationery</a></li>
                                                      <li><a href="#">Pens &amp; Writing</a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </li>
                     <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2586 dropdown">
                        <a title="Mobiles &amp; Tablets" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Mobiles &#038; Tablets</a>
                        <ul role="menu" class=" dropdown-menu">
                           <li class="menu-item animate-dropdown menu-item-object-static_block">
                              <div class="yamm-content">
                                 <div class="vc_row row wpb_row vc_row-fluid bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                    <div class="wpb_column vc_column_container vc_col-sm-12 col-sm-12">
                                       <div class="vc_column-inner ">
                                          <div class="wpb_wrapper">
                                             <div class="wpb_single_image wpb_content_element vc_align_left">
                                                <figure class="wpb_wrapper vc_figure">
                                                   <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="540" height="460" src="assets/images/megamenu-2.png" class="vc_single_image-img attachment-full" alt="megamenu-2"/></div>
                                                </figure>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="vc_row row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
                                       <div class="vc_column-inner ">
                                          <div class="wpb_wrapper">
                                             <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                   <ul>
                                                      <li class="nav-title">Computers &amp; Accessories</li>
                                                      <li><a href="#">All Computers &amp; Accessories</a></li>
                                                      <li><a href="#">Laptops, Desktops &amp; Monitors</a></li>
                                                      <li><a href="#">Pen Drives, Hard Drives &amp; Memory Cards</a></li>
                                                      <li><a href="#">Printers &amp; Ink</a></li>
                                                      <li><a href="#">Networking &amp; Internet Devices</a></li>
                                                      <li><a href="#">Computer Accessories</a></li>
                                                      <li><a href="#">Software</a></li>
                                                      <li class="nav-divider"></li>
                                                      <li><a href="#"><span class="nav-text">All Electronics</span><span class="nav-subtext">Discover more products</span></a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
                                       <div class="vc_column-inner ">
                                          <div class="wpb_wrapper">
                                             <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                   <ul>
                                                      <li class="nav-title">Office &amp; Stationery</li>
                                                      <li><a href="#">All Office &amp; Stationery</a></li>
                                                      <li><a href="#">Pens &amp; Writing</a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </li>
                     <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2587 dropdown">
                        <a title="Movies, Music &amp; Video Games" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Movies, Music &#038; Video Games</a>
                        <ul role="menu" class=" dropdown-menu">
                           <li class="menu-item animate-dropdown menu-item-object-static_block">
                              <div class="yamm-content">
                                 <div class="vc_row row wpb_row vc_row-fluid bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                    <div class="wpb_column vc_column_container vc_col-sm-12 col-sm-12">
                                       <div class="vc_column-inner ">
                                          <div class="wpb_wrapper">
                                             <div class="wpb_single_image wpb_content_element vc_align_left">
                                                <figure class="wpb_wrapper vc_figure">
                                                   <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="540" height="460" src="assets/images/megamenu-2.png" class="vc_single_image-img attachment-full" alt="megamenu-2"/></div>
                                                </figure>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="vc_row row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
                                       <div class="vc_column-inner ">
                                          <div class="wpb_wrapper">
                                             <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                   <ul>
                                                      <li class="nav-title">Computers &amp; Accessories</li>
                                                      <li><a href="#">All Computers &amp; Accessories</a></li>
                                                      <li><a href="#">Laptops, Desktops &amp; Monitors</a></li>
                                                      <li><a href="#">Pen Drives, Hard Drives &amp; Memory Cards</a></li>
                                                      <li><a href="#">Printers &amp; Ink</a></li>
                                                      <li><a href="#">Networking &amp; Internet Devices</a></li>
                                                      <li><a href="#">Computer Accessories</a></li>
                                                      <li><a href="#">Software</a></li>
                                                      <li class="nav-divider"></li>
                                                      <li><a href="#"><span class="nav-text">All Electronics</span><span class="nav-subtext">Discover more products</span></a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
                                       <div class="vc_column-inner ">
                                          <div class="wpb_wrapper">
                                             <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                   <ul>
                                                      <li class="nav-title">Office &amp; Stationery</li>
                                                      <li><a href="#">All Office &amp; Stationery</a></li>
                                                      <li><a href="#">Pens &amp; Writing</a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </li>
                     <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2588 dropdown">
                        <a title="TV &amp; Audio" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">TV &#038; Audio</a>
                        <ul role="menu" class=" dropdown-menu">
                           <li class="menu-item animate-dropdown menu-item-object-static_block">
                              <div class="yamm-content">
                                 <div class="vc_row row wpb_row vc_row-fluid bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                    <div class="wpb_column vc_column_container vc_col-sm-12 col-sm-12">
                                       <div class="vc_column-inner ">
                                          <div class="wpb_wrapper">
                                             <div class="wpb_single_image wpb_content_element vc_align_left">
                                                <figure class="wpb_wrapper vc_figure">
                                                   <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="540" height="460" src="assets/images/megamenu-2.png" class="vc_single_image-img attachment-full" alt="megamenu-2"/></div>
                                                </figure>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="vc_row row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
                                       <div class="vc_column-inner ">
                                          <div class="wpb_wrapper">
                                             <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                   <ul>
                                                      <li class="nav-title">Computers &amp; Accessories</li>
                                                      <li><a href="#">All Computers &amp; Accessories</a></li>
                                                      <li><a href="#">Laptops, Desktops &amp; Monitors</a></li>
                                                      <li><a href="#">Pen Drives, Hard Drives &amp; Memory Cards</a></li>
                                                      <li><a href="#">Printers &amp; Ink</a></li>
                                                      <li><a href="#">Networking &amp; Internet Devices</a></li>
                                                      <li><a href="#">Computer Accessories</a></li>
                                                      <li><a href="#">Software</a></li>
                                                      <li class="nav-divider"></li>
                                                      <li><a href="#"><span class="nav-text">All Electronics</span><span class="nav-subtext">Discover more products</span></a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
                                       <div class="vc_column-inner ">
                                          <div class="wpb_wrapper">
                                             <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                   <ul>
                                                      <li class="nav-title">Office &amp; Stationery</li>
                                                      <li><a href="#">All Office &amp; Stationery</a></li>
                                                      <li><a href="#">Pens &amp; Writing</a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </li>
                     <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2589 dropdown">
                        <a title="Watches &amp; Eyewear" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Watches &#038; Eyewear</a>
                        <ul role="menu" class=" dropdown-menu">
                           <li class="menu-item animate-dropdown menu-item-object-static_block">
                              <div class="yamm-content">
                                 <div class="vc_row row wpb_row vc_row-fluid bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                    <div class="wpb_column vc_column_container vc_col-sm-12 col-sm-12">
                                       <div class="vc_column-inner ">
                                          <div class="wpb_wrapper">
                                             <div class="wpb_single_image wpb_content_element vc_align_left">
                                                <figure class="wpb_wrapper vc_figure">
                                                   <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="540" height="460" src="assets/images/megamenu-2.png" class="vc_single_image-img attachment-full" alt="megamenu-2"/></div>
                                                </figure>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="vc_row row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
                                       <div class="vc_column-inner ">
                                          <div class="wpb_wrapper">
                                             <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                   <ul>
                                                      <li class="nav-title">Computers &amp; Accessories</li>
                                                      <li><a href="#">All Computers &amp; Accessories</a></li>
                                                      <li><a href="#">Laptops, Desktops &amp; Monitors</a></li>
                                                      <li><a href="#">Pen Drives, Hard Drives &amp; Memory Cards</a></li>
                                                      <li><a href="#">Printers &amp; Ink</a></li>
                                                      <li><a href="#">Networking &amp; Internet Devices</a></li>
                                                      <li><a href="#">Computer Accessories</a></li>
                                                      <li><a href="#">Software</a></li>
                                                      <li class="nav-divider"></li>
                                                      <li><a href="#"><span class="nav-text">All Electronics</span><span class="nav-subtext">Discover more products</span></a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
                                       <div class="vc_column-inner ">
                                          <div class="wpb_wrapper">
                                             <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                   <ul>
                                                      <li class="nav-title">Office &amp; Stationery</li>
                                                      <li><a href="#">All Office &amp; Stationery</a></li>
                                                      <li><a href="#">Pens &amp; Writing</a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </li>
                     <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2590 dropdown">
                        <a title="Car, Motorbike &amp; Industrial" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Car, Motorbike &#038; Industrial</a>
                        <ul role="menu" class=" dropdown-menu">
                           <li class="menu-item animate-dropdown menu-item-object-static_block">
                              <div class="yamm-content">
                                 <div class="vc_row row wpb_row vc_row-fluid bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                    <div class="wpb_column vc_column_container vc_col-sm-12 col-sm-12">
                                       <div class="vc_column-inner ">
                                          <div class="wpb_wrapper">
                                             <div class="wpb_single_image wpb_content_element vc_align_left">
                                                <figure class="wpb_wrapper vc_figure">
                                                   <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="540" height="460" src="assets/images/megamenu-2.png" class="vc_single_image-img attachment-full" alt="megamenu-2"/></div>
                                                </figure>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="vc_row row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
                                       <div class="vc_column-inner ">
                                          <div class="wpb_wrapper">
                                             <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                   <ul>
                                                      <li class="nav-title">Computers &amp; Accessories</li>
                                                      <li><a href="#">All Computers &amp; Accessories</a></li>
                                                      <li><a href="#">Laptops, Desktops &amp; Monitors</a></li>
                                                      <li><a href="#">Pen Drives, Hard Drives &amp; Memory Cards</a></li>
                                                      <li><a href="#">Printers &amp; Ink</a></li>
                                                      <li><a href="#">Networking &amp; Internet Devices</a></li>
                                                      <li><a href="#">Computer Accessories</a></li>
                                                      <li><a href="#">Software</a></li>
                                                      <li class="nav-divider"></li>
                                                      <li><a href="#"><span class="nav-text">All Electronics</span><span class="nav-subtext">Discover more products</span></a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
                                       <div class="vc_column-inner ">
                                          <div class="wpb_wrapper">
                                             <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                   <ul>
                                                      <li class="nav-title">Office &amp; Stationery</li>
                                                      <li><a href="#">All Office &amp; Stationery</a></li>
                                                      <li><a href="#">Pens &amp; Writing</a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </li>
                     <li class="menu-item animate-dropdown"><a title="Accessories" href="product-category.html">Accessories</a></li>
                     <li class="menu-item animate-dropdown"><a title="Printers &amp; Ink" href="product-category.html">Printers &#038; Ink</a></li>
                     <li class="menu-item animate-dropdown"><a title="Software" href="product-category.html">Software</a></li>
                     <li class="menu-item animate-dropdown"><a title="Office Supplies" href="product-category.html">Office Supplies</a></li>
                     <li class="menu-item animate-dropdown"><a title="Computer Components" href="product-category.html">Computer Components</a></li>
                     <li class="menu-item animate-dropdown"><a title="Car Electronic &amp; GPS" href="product-category.html">Car Electronic &#038; GPS</a></li>
                     <li class="menu-item animate-dropdown"><a title="Accessories" href="product-category.html">Accessories</a></li>
                     <li class="menu-item animate-dropdown"><a title="Printers &amp; Ink" href="product-category.html">Printers &#038; Ink</a></li>
                  </ul>
               </li>
            </ul>
         </div>
      </nav>
         <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f8f66dafd4ff5477ea791e1/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
   </body>

   <script>
     var base_url = '<?php echo base_url(); ?>';
         var url = base_url+'welcome/removeCartItem/'
         
         
         jQuery('.remove_pdt').click(function(){
             jQuery(this).closest('li').remove();
             
             var cart_id = jQuery(this).data('id');
             var pdt_cost = parseFloat(jQuery(this).data('cost'));
             
         
             jQuery.ajax({
                     url: url+cart_id,
                     type: 'GET',
                     success: function(res) {
                         var pdt_count = parseInt(jQuery('#cart_count').text())-1;
                         var total_cost = parseFloat(jQuery('#total_cost').text());
                         var cost = total_cost-pdt_cost;
                         jQuery('#total_cost').text(cost);
                         jQuery('#cart_count').text(pdt_count);
                         jQuery('.nav-item.dropdown.cart').addClass('open');
         
                     }
             });
         })
   </script>
   