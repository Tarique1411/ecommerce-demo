<!DOCTYPE html>
<?php //echo '<pre>'; print_r($user); exit(); ?>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">

    <body class="page home page-template-default">
        <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
            <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
            <div tabindex="-1" class="site-content" id="content">
                <div class="container">

                    <nav class="woocommerce-breadcrumb"><a href="home.html">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Wishlist</nav>
                    <div class="content-area" id="primary">
                        <main class="site-main" id="main">
                            <article class="page type-page status-publish hentry">
                                <div itemprop="mainContentOfPage" class="entry-content">
                                    <div id="yith-wcwl-messages"></div>
                                    <form class="woocommerce" method="post" id="yith-wcwl-form">

                                        <input type="hidden" value="68bc4ab99c" name="yith_wcwl_form_nonce" id="yith_wcwl_form_nonce"><input type="hidden" value="/electro/wishlist/" name="_wp_http_referer">
                                        <!-- TITLE -->
                                        <div class="wishlist-title ">
                                            <h2><?php echo $user->first_name; ?>' wishlist</h2>
                                        </div>

                                        <!-- WISHLIST TABLE -->
                                        <table data-token="" data-id="" data-page="1" data-per-page="5" data-pagination="no" class="shop_table cart wishlist_table">

                                            <thead>
                                                <tr>

                                                    <th class="product-remove"></th>

                                                    <th class="product-thumbnail"></th>

                                                    <th class="product-name">
                                                        <span class="nobr">Product Name</span>
                                                    </th>

                                                    <th class="product-price">
                                                        <span class="nobr">Price</span>
                                                    </th>
                                                    <th class="product-add-to-cart"></th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php if(!empty($wishItems)): ?>
                                                        <?php foreach ($wishItems as $key => $wi): ?>
                                                <tr>
                                                    
                                                    <td class="product-remove">
                                                        <div>
                                                            <a title="Remove this product" class="remove remove_from_wishlist" href="<?php echo base_url(); ?>welcome/remove_wishlist/<?php echo $wi->pdt_id; ?>">×</a>
                                                        </div>
                                                    </td>

                                                    <td class="product-thumbnail">
                                                        <a href="single-product.html"><img width="180" height="180" alt="1" class="wp-post-image" src="<?php echo asset_url(); ?>/images/products/<?php echo $wi->pdt_image; ?>"></a>
                                                    </td>

                                                    <td class="product-name">
                                                        <a href="single-product.html"><?php echo $wi->pdt_name; ?></a>
                                                    </td>

                                                    <td class="product-price">
                                                        <span class="electro-price"><span class="amount">₹ <?php echo $wi->pdt_cost; ?></span></span>
                                                    </td>

                                                    <td class="product-add-to-cart">
                                                        <!-- Date added -->

                                                        <!-- Add to cart button -->
                                                         <a rel="nofollow" href="<?php echo base_url(); ?>welcome/addToCart_wishItems/<?php echo $wi->pdt_id; ?> " class="button add_to_cart_button">Add to cart</a>
                                                        <!-- Change wishlist -->

                                                        <!-- Remove from wishlist -->
                                                    </td>
                                                </tr>
                                                <?php endforeach; endif; ?>

                                            </tbody>

                                            <tfoot>
                                                <tr>
                                                    <td colspan="6"></td>
                                                </tr>
                                            </tfoot>

                                        </table>

                                    </form>

                                </div><!-- .entry-content -->

                            </article><!-- #post-## -->

                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div><!-- .col-full -->
            </div>

        </div><!-- #page -->

    </body>
</html>

