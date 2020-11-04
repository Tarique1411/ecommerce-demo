<!DOCTYPE html>
<?php //echo '<pre>'; print_r($filter_products); exit(); ?>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
    <body class="left-sidebar">
        <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
            <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

            <div id="content" class="site-content" tabindex="-1">
                <div class="container">

                    <nav class="woocommerce-breadcrumb" ><a href="<?php echo base_url(); ?>">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Smart Phones &amp; Gadgets</nav>

                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">

                            <section class="section-product-cards-carousel" >
                                <header>
                                    <h2 class="h1">Special Offers Products</h2>
                                    <div class="owl-nav">
                                        <a href="#products-carousel-prev" data-target="#recommended-product" class="slider-prev"><i class="fa fa-angle-left"></i></a>
                                        <a href="#products-carousel-next" data-target="#recommended-product" class="slider-next"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                </header>

                                <div id="recommended-product">
                                    <div class="woocommerce columns-4">
                                        <div class="products owl-carousel products-carousel columns-4 owl-loaded owl-drag">
                                       <?php if (!empty($product_details)): ?>
                                        <?php foreach ($product_details as  $best_offer):?>
                                        <?php if($best_offer->spl_offer_pdt == 'yes'): ?>
                                             <div class="product">
                                                <div class="product-outer">
                                                    <div class="product-inner">
                                                        <span class="loop-product-categories"><a href="#" rel="tag"><?php echo $best_offer->brand_name; ?></a></span>
                                                        <a href="<?php echo base_url().'welcome/single_product/'.$best_offer->id; ?>">
                                                            <h3><?php echo $best_offer->pdt_name; ?></h3>
                                                            <div class="product-thumbnail">
                                                                <img src="assets/images/blank.gif" data-echo="<?php echo asset_url();?>images/products/<?php echo $best_offer->pdt_image?>" class="img-responsive" alt="" >
                                                            </div>
                                                        </a>

                                                        <div class="price-add-to-cart">
                                                            <span class="price">
                                                            <span class="electro-price">
                                                            <ins><span class="amount">₹<?php echo $best_offer->new_pdt_cost; ?></span></ins>
                                                             <del><span class="amount">₹<?php echo $best_offer->old_pdt_cost; ?></span></del>
                                                             </span>
                                                             </span>
                                                            <a rel="nofollow" href="JavaScript:Void(0);" id="add_to_cart_item" class="button add_to_cart_button" data-productid="<?php echo $best_offer->id; ?>" data-productname="<?php echo $best_offer->pdt_name; ?>" data-price="<?php echo $best_offer->new_pdt_cost; ?>" data-image="<?php echo $best_offer->pdt_image; ?>">Add to cart</a>
                                                        </div><!-- /.price-add-to-cart -->

                                                        <div class="hover-area">
                                                            <div class="action-buttons">
                                                                <a href="JavaScript:Void(0);" rel="nofollow" class="add_to_wishlist" data-productidwish="<?php echo $best_offer->id; ?>" data-productnamewish="<?php echo $best_offer->pdt_name; ?>" data-productpricewish="<?php echo $best_offer->new_pdt_cost; ?>" data-productimagewish="<?php echo $best_offer->pdt_image; ?>" > Wishlist</a>
                                                                <a href="JavaScript:Void(0);" rel="nofollow" class="add_to_compare add-to-compare-link" data-productidcompare="<?php echo $best_offer->id; ?>" data-productnamecompare="<?php echo $best_offer->pdt_name; ?>" data-productpricecompare="<?php echo $best_offer->new_pdt_cost; ?>" data-productimagecompare="<?php echo $best_offer->pdt_image; ?>" data-productspecificationcompare="<?php echo $best_offer->pdt_specification; ?>" >Compare</a>
                                                            </div>
                                                        </div>

                                                    </div><!-- /.product-inner -->
                                                </div><!-- /.product-outer -->
                                            </div><!-- /.products -->
                                            <?php endif; endforeach; endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <header class="page-header">
                                <h1 class="page-title">Smart Phones &amp; Gadgets</h1>
                                <!-- <p class="woocommerce-result-count">Showing 1&ndash;15 of 20 results</p> -->
                            </header>

                            <div class="shop-control-bar">
                                <form class="woocommerce-ordering" method="get">
                                    <select name="orderby" class="orderby">
                                        <option value="menu_order"  selected='selected'>Default sorting</option>
                                        <option value="popularity" >Sort by popularity</option>
                                        <option value="rating" >Sort by average rating</option>
                                        <option value="date" >Sort by newness</option>
                                        <option value="price" >Sort by price: low to high</option>
                                        <option value="price-desc" >Sort by price: high to low</option>
                                    </select>
                                </form>
                                <form class="form-electro-wc-ppp"><select name="ppp" onchange="this.form.submit()" class="electro-wc-wppp-select c-select"><option value="15"  selected='selected'>Show 15</option><option value="-1" >Show All</option></select></form>
                                <nav class="electro-advanced-pagination">
                                    <form method="post" class="form-adv-pagination"><input id="goto-page" size="2" min="1" max="2" step="1" type="number" class="form-control" value="1" /></form> of 2<a class="next page-numbers" href="#">&rarr;</a>         <script>
                                    jQuery(document).ready(function($){
                                        $( '.form-adv-pagination' ).on( 'submit', function() {
                                            var link        = '#',
                                            goto_page   = $( '#goto-page' ).val(),
                                            new_link    = link.replace( '%#%', goto_page );

                                            window.location.href = new_link;
                                            return false;
                                        });
                                    });
                                    </script>
                                </nav>
                            </div>

                            <div class="tab-content">
                                        <div id="allproducts">
                                        </div>
                            </div>
                            <div class="shop-control-bar-bottom">
                                <form class="form-electro-wc-ppp">
                                    <select class="electro-wc-wppp-select c-select" onchange="this.form.submit()" name="ppp"><option selected="selected" value="15">Show 15</option><option value="-1">Show All</option></select>
                                </form>
                                <p class="woocommerce-result-count">Showing 1&ndash;15 of 20 results</p>
                                <nav class="woocommerce-pagination">
                                    <ul class="page-numbers">
                                        <li><span class="page-numbers current">1</span></li>
                                        <li><a href="#" class="page-numbers">2</a></li>
                                        <li><a href="#" class="next page-numbers">→</a></li>
                                    </ul>
                                </nav>
                            </div>

                        </main><!-- #main -->
                    </div><!-- #primary -->

                    <div id="sidebar" class="sidebar" role="complementary">
                        <aside class="widget widget_electro_products_filter">
                            <h3 class="widget-title">Filters</h3>
                            <aside class="widget woocommerce widget_layered_nav">
                                <h3 class="widget-title">Brands</h3>
                                <ul>
                                    <?php if (!empty($filter_by_brand)):?> 
                                        <?php foreach ($filter_by_brand as $key => $fbb): ?> 
                                        
                                    
                                    <li style=""><a href="JavaScript:Void(0);" class="filter_by_brand" id="filter_by_brand" data-productbrand="<?php echo $fbb->brand; ?>" ><?php echo $fbb->brand; ?></a></li>
                                <?php  endforeach; endif; ?>
                                </ul>
                                <!-- <p class="maxlist-more"><a href="#">+ Show more</a></p> -->
                            </aside>
                            <aside class="widget woocommerce widget_layered_nav">
                                <h3 class="widget-title">Color</h3>
                                <ul>
                                    <li style=""><a href="#">Black</a> <span class="count">(4)</span></li>
                                    <li style=""><a href="#">Black Leather</a> <span class="count">(2)</span></li>
                                    <li style=""><a href="#">Turquoise</a> <span class="count">(2)</span></li>
                                    <li style=""><a href="#">White</a> <span class="count">(4)</span></li>
                                    <li style=""><a href="#">Gold</a> <span class="count">(4)</span></li>
                                </ul>
                                <p class="maxlist-more"><a href="#">+ Show more</a></p>
                            </aside>
                            <aside class="widget woocommerce widget_price_filter">
                                <h3 class="widget-title">Price</h3>
                                <form action="#">
                                    <div class="price_slider_wrapper">
                                        <div style="" class="price_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div>
                                            <span tabindex="0" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></span>
                                            <span tabindex="0" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></span>
                                        </div>
                                        <div class="price_slider_amount">
                                            <a href="#" class="button">Filter</a>
                                            <div style="" class="price_label">Price: <span class="from">$428</span> &mdash; <span class="to">$3485</span></div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </form>
                            </aside>
                        </aside>
                        <aside class="widget widget_products">
                            <h3 class="widget-title">Latest Products</h3>
                            <ul class="product_list_widget">
                                <?php if(!empty($recently_added)): ?>
                                 <?php foreach ($recently_added as $ra): ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>welcome/single_product/<?php echo $ra->id; ?>" title="Notebook Black Spire V Nitro  VN7-591G">
                                        <img width="180" height="180" src="<?php echo asset_url();?>images/products/<?php echo $ra->pdt_image?>" class="wp-post-image" alt=""/><span class="product-title"><?php echo $ra->pdt_name; ?></span>
                                    </a>
                                    <span class="electro-price"><ins><span class="amount">₹<?php echo $ra->new_pdt_cost; ?></span></ins> <del><span class="amount">₹<?php echo $ra->new_pdt_cost; ?></span></del></span>
                                </li>
                           <?php endforeach; endif; ?>

                            </ul>
                        </aside>
                    </div>

                </div><!-- .container -->
            </div><!-- #content -->

        </div><!-- #page -->

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
<script>

    jQuery(document).ready(function(){
         var base_url = '<?php echo base_url(); ?>';
         var url = base_url+'welcome/fetch';
         load_data();
         function load_data(query)
         {
             jQuery.ajax({
                 url:url,
                 method:"POST",
                 data:{query:query},
                 success:function(data){
                     jQuery('#allproducts').html(data);
                 }
             })
         }
       jQuery('.filter_by_brand').click(function(){
           var search = jQuery(this).data('productbrand');
           if(search !='')
           {
              load_data(search);

           }
           else
           {
            load_data();
           }

       });
         
     });
</script>