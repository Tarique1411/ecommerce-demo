<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<style type="text/css">
    @media (min-width: 992px){
#content #primary{
    left: 0% !important;
    width: 100% !important;

}
}
</style>
    <body class="left-sidebar">
        <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
            <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

            <div id="content" class="site-content" tabindex="-1">
                <div class="container">

                    <nav class="woocommerce-breadcrumb" ><a href="<?php echo base_url(); ?>">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Searched Products</nav>

                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">

                            <section class="section-product-cards-carousel" >
                                <header>
                                    <h2 class="h1">Searched Products</h2>
                                    <div class="owl-nav">
                                        <a href="#products-carousel-prev" data-target="#recommended-product" class="slider-prev"><i class="fa fa-angle-left"></i></a>
                                        <a href="#products-carousel-next" data-target="#recommended-product" class="slider-next"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                </header>

                                <div id="recommended-product">
                                    <div class="woocommerce columns-4">
                                        <div class="products owl-carousel products-carousel columns-4 owl-loaded owl-drag">
                                            <?php foreach ($products as $key => $product):?>
                                                <?php //echo '<pre>'; print_r($product);  ?>
                                            <div class="product">
                                                <div class="product-outer">
                                                    <div class="product-inner">
                                                        <span class="loop-product-categories"><a href="JavaScript:Void(0);" rel="tag"><?php echo $product->brand_name; ?></a></span>
                                                        <a href="<?php echo base_url().'welcome/single_product/'.$product->id; ?>">
                                                            <h3><?php echo $product->pdt_name; ?></h3>
                                                              <div class="product-thumbnail">
                                                                <img src="assets/images/blank.gif" data-echo="<?php echo asset_url();?>images/products/<?php echo $product->pdt_image?>" class="img-responsive" alt="" >
                                                            </div>
                                                        </a>

                                                        <div class="price-add-to-cart">
                                                            <span class="price">
                                                            <span class="electro-price">
                                                            <ins><span class="amount">₹<?php echo $product->new_pdt_cost; ?></span></ins>
                                                             <del><span class="amount">₹<?php echo $product->old_pdt_cost; ?></span></del>
                                                             </span>
                                                             </span>
                                                            <a rel="nofollow" href="JavaScript:Void(0);" id="add_to_cart_item" class="button add_to_cart_button" data-productid="<?php echo $product->id; ?>" data-productname="<?php echo $product->pdt_name; ?>" data-price="<?php echo $product->new_pdt_cost; ?>" data-image="<?php echo $product->pdt_image; ?>">Add to cart</a>
                                                        </div><!-- /.price-add-to-cart -->

                                                        <div class="hover-area">
                                                            <div class="action-buttons">
                                                                <a href="JavaScript:Void(0);" rel="nofollow" class="add_to_wishlist" data-productidwish="<?php echo $product->id; ?>" data-productnamewish="<?php echo $product->pdt_name; ?>" data-productpricewish="<?php echo $product->new_pdt_cost; ?>" data-productimagewish="<?php echo $product->pdt_image; ?>" > Wishlist</a>
                                                                 <a href="JavaScript:Void(0);" rel="nofollow" class="add_to_compare add-to-compare-link" data-productidcompare="<?php echo $product->id; ?>" data-productnamecompare="<?php echo $product->pdt_name; ?>" data-productpricecompare="<?php echo $product->new_pdt_cost; ?>" data-productimagecompare="<?php echo $product->pdt_image; ?>" data-productspecificationcompare="<?php echo $product->pdt_specification; ?>" >Compare</a>
                                                            </div>
                                                        </div>

                                                    </div><!-- /.product-inner -->
                                                </div><!-- /.product-outer -->
                                            </div><!-- /.products -->
                                        <?php endforeach; ?>

                                        </div>
                                    </div>
                                </div>
                            </section>

                        </main><!-- #main -->
                    </div><!-- #primary -->

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
