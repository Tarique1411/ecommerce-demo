<!DOCTYPE html>
<?php //echo '<pre>'; print_r($compareItems); exit(); ?>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
   

    <body class="page home page-template-default">
        <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
            <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

            <div tabindex="-1" class="site-content" id="content">
                <div class="container">

                    <nav class="woocommerce-breadcrumb"><a href="<?php echo base_url(); ?>">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Compare</nav>
                    <div class="content-area" id="primary">
                        <main class="site-main" id="main">
                            <article class="post-2917 page type-page status-publish hentry" id="post-2917">
                                <div itemprop="mainContentOfPage" class="entry-content">
                                    <div class="table-responsive">
                                        <table class="table table-compare compare-list">
                                            <tbody>
                                                <tr>
                                                    <th>Product</th>
                                                    <?php if(!empty($compareItems)): ?>
                                                    <?php foreach ($compareItems as $key => $item):?>
                                                        
                                                    <td>
                                                        <a class="product" href="<?php echo base_url(); ?>welcome/single_product/<?php echo $item->pdt_id; ?>">
                                                            <div class="product-image">
                                                                <div class="">
                                                                    <img width="250" height="232" alt="1" class="wp-post-image" src="<?php echo asset_url(); ?>/images/products/<?php echo $item->pdt_image; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <h3 class="product-title"><?php echo $item->pdt_name; ?></h3>

                                                            </div>
                                                        </a><!-- /.product -->
                                                    </td>
                                                <?php endforeach; endif; ?>
                                                    
                                                </tr>
                                                <tr>
                                                    <th>Price</th>
                                                    <?php if(!empty($compareItems)): ?>
                                                    <?php foreach ($compareItems as $key => $item):?>
                                                    <td>
                                                        <div class="product-price price"><span class="electro-price"><span class="amount">₹<?php echo $item->pdt_cost; ?></span></span></div>
                                                    </td>
                                                    <?php endforeach; endif; ?>
                                                </tr>
                                                <!-- <tr>
                                                    <th>Availability</th>
                                                    <td><span class="in-stock">In stock</span></td>
                                                    <td><span class="in-stock">In stock</span></td>
                                                    <td><span class="in-stock">In stock</span></td>
                                                </tr> -->
                                                <tr>
                                                    <th>Description</th>
                                                    <?php if(!empty($compareItems)): ?>
                                                    <?php foreach ($compareItems as $key => $item):?>
                                                    <td>
                                                        <ul style="text-align:left; margin-bottom: 0;">
                                                            <span class="a-list-item"><?php echo $item->pdt_specification; ?></span>
                                                        </ul>
                                                    </td>
                                                    <?php endforeach; endif; ?>
                                                </tr>
                                                <tr>
                                                    <th>Add to cart</th>
                                                    <?php if(!empty($compareItems)): ?>
                                                    <?php foreach ($compareItems as $key => $item):?>
                                                    <td>
                                                        <a rel="nofollow" href="JavaScript:Void(0);" id="add_to_cart_item" class="button add_to_cart_button" data-productid="<?php echo $item->pdt_id; ?>" data-productname="<?php echo $item->pdt_name; ?>" data-price="<?php echo $item->pdt_cost; ?>" data-image="<?php echo $item->pdt_image; ?>">Add to cart</a>
                                                    </td>
                                                    <?php endforeach; endif; ?>
                                                </tr>
                                                <tr>
                                                    <th>&nbsp;</th>
                                                    <?php if(!empty($compareItems)): ?>
                                                    <?php foreach ($compareItems as $key => $item):?>
                                                    <td class="text-center">
                                                        <a href="<?php echo base_url(); ?>welcome/remove_compare/<?php echo $item->pdt_id; ?>" title="Remove" class="remove-icon"><i class="fa fa-times"></i></a>
                                                    </td>
                                                    <?php endforeach; endif; ?>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!-- /.table-responsive -->
                                </div><!-- .entry-content -->
                            </article><!-- #post-## -->
                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div><!-- .col-full -->
            </div>
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
