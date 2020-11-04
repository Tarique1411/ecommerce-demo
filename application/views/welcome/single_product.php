<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
 

    <body class="single-product full-width extended">
        <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
            <a class="skip-link screen-reader-text" href="#content">Skip to content</a>


            <div id="content" class="site-content" tabindex="-1">
                <div class="container">

                    <nav class="woocommerce-breadcrumb">
                        <a href="<?php echo base_url(); ?>">Home</a>
                        <span class="delimiter"><i class="fa fa-angle-right"></i>
                        </span>
                        <a href="">Accessories</a>
                        <span class="delimiter"><i class="fa fa-angle-right"></i>
                        </span>
                        <a href="">Headphones</a>
                        <span class="delimiter"><i class="fa fa-angle-right"></i>
                        </span><?php echo $single_product->pdt_name;  ?>
                    </nav>

                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <div class="product">
                                <div class="single-product-wrapper">
                                    <div class="product-images-wrapper">
                                        <span class="onsale">Sale!</span>
                                        <div class="images electro-gallery">
                                            <div class="thumbnails-single owl-carousel">
                                                <?php if(!empty($multiple_images)): ?>
                                                <?php foreach ($multiple_images as $key => $mi):?> 

                                                <a href="assets/images/single-product/s1-1.jpg" class="zoom" title="" data-rel="prettyPhoto[product-gallery]"><img id="gallery_image" src="assets/images/blank.gif" data-echo="<?php echo asset_url();?>images/products/<?php echo $mi->multi_pdt_image?>"
                                                 class="wp-post-image" alt=""></a>
                                            <?php endforeach; endif; ?>
                                            <a href="assets/images/single-product/s1-1.jpg" class="zoom" title="" data-rel="prettyPhoto[product-gallery]"><img id="gallery_image" src="assets/images/blank.gif" data-echo="<?php echo asset_url();?>images/products/<?php echo $single_product->pdt_image;?>" class="wp-post-image" alt=""></a>
                                            </div><!-- .thumbnails-single -->
                                            <div class="thumbnails-all columns-5 owl-carousel">
                                                <?php if(!empty($multiple_images)): ?>
                                                <?php foreach ($multiple_images as $key => $mi):?> 
                                                <a href="assets/images/single-product/single-thumb1.jpg" class="first" title=""><img src="assets/images/blank.gif" data-echo="<?php echo asset_url();?>images/products/<?php echo $mi->multi_pdt_image?>" class="wp-post-image" alt=""></a>
                                            <?php endforeach; endif; ?>
                                            <a href="assets/images/single-product/single-thumb1.jpg" class="first" title=""><img src="assets/images/blank.gif" data-echo="<?php echo asset_url();?>images/products/<?php echo $single_product->pdt_image;?>" class="wp-post-image" alt=""></a>
                                            </div><!-- .thumbnails-all -->
                                        </div><!-- .electro-gallery -->
                                    </div><!-- /.product-images-wrapper -->

                                    <div class="summary entry-summary">
                                        <span class="loop-product-categories">
                                            <a href="product-category.html" rel="tag"><?php echo $single_product->brand_name; ?></a>
                                        </span><!-- .loop-product-categories -->

                                        <h1 itemprop="name" class="product_title entry-title"><?php echo $single_product->pdt_name; ?></h1>

                                        <div class="woocommerce-product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                                            <div class="star-rating" title="Rated 4.33 out of 5">
                                                <span style="width:86.6%"><strong itemprop="ratingValue" class="rating">4.33</strong> out of<span itemprop="bestRating">5</span>based on<span itemprop="ratingCount" class="rating">3</span> customer ratings</span>
                                            </div>
                                            <a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<span itemprop="reviewCount" class="count">3</span> customer reviews)</a>
                                        </div><!-- .woocommerce-product-rating -->

                                        <div itemprop="description">
                                            <ul>
                                            <?php echo $single_product->pdt_specification;  ?>

                                            </ul>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                            <p><strong>SKU</strong>: <?php echo $single_product->pdt_sku; ?></p>
                                        </div><!-- /description -->

                                    </div><!-- .summary -->
                                    <div class="product-actions-wrapper">
                                        <div class="product-actions">
                                            <div class="availability in-stock">Availablity: <span><?php echo $single_product->pdt_stk; ?></span></div><!-- /.availability -->

                                            <div itemprop="offers">

                                                <p class="price">
                                                    <span class="electro-price">
                                                   <ins><span class="amount">₹<?php echo $single_product->new_pdt_cost; ?></span></ins>
                                                   <del><span class="amount">₹<?php echo $single_product->old_pdt_cost; ?></span></del>
                                                   <span class="amount"> </span>
                                                   </span>
                                                </p>

                                            </div>

                                            <form class="variations_form cart" method="post">

                                                <table class="variations">
                                                    <tbody>
                                                        <tr>
                                                            <td class="label"><label for="pa_color">Color</label></td>
                                                            <td class="value">
                                                                <select id="pa_color" class="" name="attribute_pa_color" data-attribute_name="attribute_pa_color">
                                                                    <option value="">Choose an option</option>
                                                                    <?php if(!empty($product_color)): ?>
                                                                    <option value="black-with-red" ><?php echo $product_color->pdt_color;  ?></option>
                                                                <?php endif; ?>
                                                                    <?php if(empty($product_color)): ?>
                                                                <option value="black-with-red" ><?php echo $single_product->pdt_color; ?></option>
                                                                <?php endif; ?>
                                                                </select><a class="reset_variations" href="#">Clear</a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <div class="single_variation_wrap">
                                                    <div class="woocommerce-variation single_variation"></div>
                                                    <div class="woocommerce-variation-add-to-cart variations_button">
                                                        <a rel="nofollow" href="<?php echo base_url();?>welcome/cart" id="add_to_cart_item" class="button single_add_to_cart_button" data-productid="<?php echo $single_product->id; ?>" data-productname="<?php echo $single_product->pdt_name; ?>" data-price="<?php echo $single_product->new_pdt_cost; ?>" data-image="<?php echo $single_product->pdt_image; ?>">Add to cart</a>
                                                        <input type="hidden" name="add-to-cart" value="2439" />
                                                        <input type="hidden" name="product_id" value="2439" />
                                                        <input type="hidden" name="variation_id" class="variation_id" value="0" />
                                                    </div>
                                                </div>
                                            </form><!-- /.variations_form -->

                                            <div class="action-buttons">
                                                <a href="JavaScript:Void(0);" rel="nofollow" class="add_to_wishlist" data-productidwish="<?php echo $single_product->id; ?>" data-productnamewish="<?php echo $single_product->pdt_name; ?>" data-productpricewish="<?php echo $single_product->new_pdt_cost; ?>" data-productimagewish="<?php echo $single_product->pdt_image; ?>" > Wishlist</a>
                                                 <a href="JavaScript:Void(0);" rel="nofollow" class="add_to_compare add-to-compare-link" data-productidcompare="<?php echo $single_product->id; ?>" data-productnamecompare="<?php echo $single_product->pdt_name; ?>" data-productpricecompare="<?php echo $single_product->new_pdt_cost; ?>" data-productimagecompare="<?php echo $single_product->pdt_image; ?>" data-productspecificationcompare="<?php echo $single_product->pdt_specification; ?>" >Compare</a>
                                            </div><!-- /.action-buttons -->
                                        </div><!-- /.product-actions -->
                                    </div><!-- /.product-actions-wrapper -->

                                </div><!-- /.single-product-wrapper -->

                                <div class="electro-tabs electro-tabs-wrapper wc-tabs-wrapper">

                                    <div class="electro-tab" id="tab-description">
                                        <div class="container">
                                            <div class="tab-content">
                                                <ul class="ec-tabs">
                                                    <li class="description_tab active">
                                                        <a href="#tab-description">Description</a>
                                                    </li>
                                                    <li class="specification_tab">
                                                        <a href="#tab-specification">Specification</a>
                                                    </li>
                                                    <li class="reviews_tab">
                                                        <a href="#tab-reviews">Reviews</a>
                                                    </li>
                                                </ul>

                                                <div class="electro-description">

                                                    <h3>Perfectly Done</h3>
                                                    <p>Praesent ornare, ex a interdum consectetur, lectus diam sodales elit, vitae egestas est enim ornare nisl. Nullam in lectus nec sem semper viverra. In lobortis egestas massa. Nam nec massa nisi. Suspendisse potenti. Quisque suscipit vulputate dui quis volutpat. Ut id elit facilisis, feugiat est in, tempus lacus. Ut ultrices dictum metus, a ultricies ex vulputate ac. Ut id cursus tellus, non tempor quam. Morbi porta diam nisi, id finibus nunc tincidunt eu.</p>
                                                    <table class="layout">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <h3>Wireless</h3>
                                                                    <p>Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim eros tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel est ut mollis. Donec luctus condimentum ante et euismod.</p>
                                                                    <h3>Fresh Design</h3>
                                                                    <p>Integer bibendum aliquet ipsum, in ultrices enim sodales sed. Quisque ut urna vitae lacus laoreet malesuada eu at massa. Pellentesque nibh augue, pellentesque nec dictum vel, pretium a arcu. Duis eu urna suscipit, lobortis elit quis, ullamcorper massa.</p>
                                                                    <h3>Fabolous Sound</h3>
                                                                    <p>Cras rutrum, nibh a sodales accumsan, elit sapien ultrices sapien, eget semper lectus ex congue elit. Nullam dui elit, fermentum a varius at, iaculis non dolor. In hac habitasse platea dictumst.
                                                                </td>

                                                                <td>
                                                                    <img class="alignright" data-echo="<?php echo asset_url();?>images/products/<?php echo $single_product->pdt_image?>" src="assets/images/blank.gif" alt="">
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <table class="layout">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <img class="alignnone" data-echo="<?php echo asset_url();?>images/products/<?php echo $single_product->pdt_image?>" src="assets/images/blank.gif" alt="">
                                                                </td>

                                                                <td>
                                                                    <h3 style="text-align: right;">Inteligent Bass</h3>
                                                                    <p style="text-align: right;">Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim eros tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel est ut mollis. Donec luctus condimentum ante et euismod.</p>
                                                                    <h3 style="text-align: right;">Battery Life</h3>
                                                                    <p style="text-align: right;">Integer bibendum aliquet ipsum, in ultrices enim sodales sed. Quisque ut urna vitae lacus laoreet malesuada eu at massa. Pellentesque nibh augue, pellentesque nec dictum vel, pretium a arcu. Duis eu urna suscipit, lobortis elit quis, ullamcorper massa.</p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div><!-- /.electro-description -->

                                                <div class="product_meta">
                                                    <span class="sku_wrapper">SKU: <span class="sku" itemprop="sku">FW511948218</span></span>

                                                    <span class="posted_in">Category:
                                                        <a href="product-category.html" rel="tag">Headphones</a>
                                                    </span>

                                                    <span class="tagged_as">Tags:
                                                        <a href="product-category.html" rel="tag">Fast</a>,
                                                        <a href="product-category.html" rel="tag">Gaming</a>, <a href="product-category.html" rel="tag">Strong</a>
                                                    </span>

                                                </div><!-- /.product_meta -->
                                            </div>
                                        </div>
                                    </div><!-- /.electro-tab -->


                                    <div class="electro-tab" id="tab-specification">
                                        <div class="container">
                                            <div class="tab-content">
                                                <ul class="ec-tabs">
                                                    <li class="description_tab">
                                                        <a href="#tab-description">Description</a>
                                                    </li>
                                                    <li class="specification_tab active">
                                                        <a href="#tab-specification">Specification</a>
                                                    </li>
                                                    <li class="reviews_tab">
                                                        <a href="#tab-reviews">Reviews</a>
                                                    </li>
                                                </ul>

                                                <h3>Technical Specifications</h3>
                                                <ul>
                                                         <?php echo $single_product->pdt_specification;  ?>
                                                </ul>

                                            </div>
                                        </div>
                                    </div><!-- /.electro-tab -->

                                    <div class="electro-tab" id="tab-reviews">
                                        <div class="container">
                                            <div class="tab-content">
                                                <ul class="ec-tabs">
                                                    <li class="description_tab">
                                                        <a href="#tab-description">Description</a>
                                                    </li>
                                                    <li class="specification_tab">
                                                        <a href="#tab-specification">Specification</a>
                                                    </li>
                                                    <li class="reviews_tab active">
                                                        <a href="#tab-reviews">Reviews</a>
                                                    </li>
                                                </ul>

                                                <div id="reviews" class="electro-advanced-reviews">
                                                    <div class="advanced-review row">
                                                        <div class="col-xs-12 col-md-6">
                                                            <h2 class="based-title">Based on 3 reviews</h2>
                                                            <div class="avg-rating">
                                                                <span class="avg-rating-number">4.3</span> overall
                                                            </div>

                                                            <div class="rating-histogram">
                                                                <div class="rating-bar">
                                                                    <div class="star-rating" title="Rated 5 out of 5">
                                                                        <span style="width:100%"></span>
                                                                    </div>
                                                                    <div class="rating-percentage-bar">
                                                                        <span style="width:33%" class="rating-percentage">

                                                                        </span>
                                                                    </div>
                                                                    <div class="rating-count">1</div>
                                                                </div><!-- .rating-bar -->

                                                                <div class="rating-bar">
                                                                    <div class="star-rating" title="Rated 4 out of 5">
                                                                        <span style="width:80%"></span>
                                                                    </div>
                                                                    <div class="rating-percentage-bar">
                                                                        <span style="width:67%" class="rating-percentage"></span>
                                                                    </div>
                                                                    <div class="rating-count">2</div>
                                                                </div><!-- .rating-bar -->

                                                                <div class="rating-bar">
                                                                    <div class="star-rating" title="Rated 3 out of 5">
                                                                        <span style="width:60%"></span>
                                                                    </div>
                                                                    <div class="rating-percentage-bar">
                                                                        <span style="width:0%" class="rating-percentage"></span>
                                                                    </div>
                                                                    <div class="rating-count zero">0</div>
                                                                </div><!-- .rating-bar -->

                                                                <div class="rating-bar">
                                                                    <div class="star-rating" title="Rated 2 out of 5">
                                                                        <span style="width:40%"></span>
                                                                    </div>
                                                                    <div class="rating-percentage-bar">
                                                                        <span style="width:0%" class="rating-percentage"></span>
                                                                    </div>
                                                                    <div class="rating-count zero">0</div>
                                                                </div><!-- .rating-bar -->

                                                                <div class="rating-bar">
                                                                    <div class="star-rating" title="Rated 1 out of 5">
                                                                        <span style="width:20%"></span>
                                                                    </div>
                                                                    <div class="rating-percentage-bar">
                                                                        <span style="width:0%" class="rating-percentage"></span>
                                                                    </div>
                                                                    <div class="rating-count zero">0</div>
                                                                </div><!-- .rating-bar -->
                                                            </div>
                                                        </div><!-- /.col -->

                                                        <div class="col-xs-12 col-md-6">
                                                            <div id="review_form_wrapper">
                                                                <div id="review_form">
                                                                    <div id="respond" class="comment-respond">
                                                                        <h3 id="reply-title" class="comment-reply-title">Add a review
                                                                            <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a>
                                                                            </small>
                                                                        </h3>

                                                                        <form action="#" method="post" id="commentform" class="comment-form">
                                                                            <p class="comment-form-rating">
                                                                                <label>Your Rating</label>
                                                                            </p>

                                                                            <p class="stars">
                                                                                <span><a class="star-1" href="#">1</a>
                                                                                    <a class="star-2" href="#">2</a>
                                                                                    <a class="star-3" href="#">3</a>
                                                                                    <a class="star-4" href="#">4</a>
                                                                                    <a class="star-5" href="#">5</a>
                                                                                </span>
                                                                            </p>

                                                                            <p class="comment-form-comment">
                                                                                <label for="comment">Your Review</label>
                                                                                <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                                                            </p>

                                                                            <p class="form-submit">
                                                                                <input name="submit" type="submit" id="submit" class="submit" value="Add Review" />
                                                                                <input type='hidden' name='comment_post_ID' value='2452' id='comment_post_ID' />
                                                                                <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                                                            </p>

                                                                            <input type="hidden" id="_wp_unfiltered_html_comment_disabled" name="_wp_unfiltered_html_comment_disabled" value="c7106f1f46" />
                                                                            <script>(function(){if(window===window.parent){document.getElementById('_wp_unfiltered_html_comment_disabled').name='_wp_unfiltered_html_comment';}})();</script>
                                                                        </form><!-- form -->
                                                                    </div><!-- #respond -->
                                                                </div>
                                                            </div>

                                                        </div><!-- /.col -->
                                                    </div><!-- /.row -->

                                                    <div id="comments">

                                                        <ol class="commentlist">
                                                            <li itemprop="review" class="comment even thread-even depth-1">

                                                                <div id="comment-390" class="comment_container">

                                                                    <img alt='' src="assets/images/blog/avatar.jpg" class='avatar' height='60' width='60' />
                                                                    <div class="comment-text">

                                                                        <div class="star-rating" title="Rated 4 out of 5">
                                                                            <span style="width:80%"><strong itemprop="ratingValue">4</strong> out of 5</span>
                                                                        </div>


                                                                        <p class="meta">
                                                                            <strong>John Doe</strong> &ndash;
                                                                            <time itemprop="datePublished" datetime="2016-03-03T14:13:48+00:00">March 3, 2016</time>:
                                                                        </p>



                                                                        <div itemprop="description" class="description">
                                                                            <p>Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim eros tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel est ut mollis. Donec luctus condimentum ante et euismod.
                                                                            </p>
                                                                        </div>


                                                                        <p class="meta">
                                                                            <strong itemprop="author">John Doe</strong> &ndash; <time itemprop="datePublished" datetime="2016-03-03T14:13:48+00:00">March 3, 2016</time>
                                                                        </p>

                                                                    </div>
                                                                </div>
                                                            </li><!-- #comment-## -->

                                                            <li class="comment odd alt thread-odd thread-alt depth-1">

                                                                <div class="comment_container">

                                                                    <img alt='' src="assets/images/blog/avatar.jpg" class='avatar' height='60' width='60' />
                                                                    <div class="comment-text">

                                                                        <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="star-rating" title="Rated 5 out of 5">
                                                                            <span style="width:100%"><strong itemprop="ratingValue">5</strong> out of 5</span>
                                                                        </div>

                                                                        <p class="meta">
                                                                            <strong>Anna Kowalsky</strong> &ndash;
                                                                            <time itemprop="datePublished" datetime="2016-03-03T14:14:47+00:00">March 3, 2016</time>:
                                                                        </p>


                                                                        <div itemprop="description" class="description">
                                                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse eget facilisis odio. Duis sodales augue eu tincidunt faucibus. Etiam justo ligula, placerat ac augue id, volutpat porta dui.
                                                                            </p>
                                                                        </div>

                                                                        <p class="meta">
                                                                            <strong itemprop="author">Anna Kowalsky</strong> &ndash; <time itemprop="datePublished" datetime="2016-03-03T14:14:47+00:00">March 3, 2016</time>
                                                                        </p>

                                                                    </div>
                                                                </div>
                                                            </li><!-- #comment-## -->

                                                            <li class="comment odd alt thread-odd thread-alt depth-1">

                                                                <div class="comment_container">

                                                                    <img alt='' src="assets/images/blog/avatar.jpg" class='avatar' height='60' width='60' />
                                                                    <div class="comment-text">

                                                                        <div itemprop="reviewRating" class="star-rating" title="Rated 5 out of 5">
                                                                            <span style="width:100%"><strong itemprop="ratingValue">5</strong> out of 5</span>
                                                                        </div>

                                                                        <p class="meta">
                                                                            <strong>Anna Kowalsky</strong> &ndash;
                                                                            <time itemprop="datePublished" datetime="2016-03-03T14:14:47+00:00">March 3, 2016</time>:
                                                                        </p>


                                                                        <div itemprop="description" class="description">
                                                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse eget facilisis odio. Duis sodales augue eu tincidunt faucibus. Etiam justo ligula, placerat ac augue id, volutpat porta dui.
                                                                            </p>
                                                                        </div>

                                                                        <p class="meta">
                                                                            <strong itemprop="author">Anna Kowalsky</strong> &ndash; <time itemprop="datePublished" datetime="2016-03-03T14:14:47+00:00">March 3, 2016</time>
                                                                        </p>

                                                                    </div>
                                                                </div>
                                                            </li><!-- #comment-## -->
                                                        </ol><!-- /.commentlist -->

                                                    </div><!-- /#comments -->

                                                    <div class="clear"></div>
                                                </div><!-- /.electro-advanced-reviews -->

                                            </div>
                                        </div>
                                    </div><!-- /.electro-tab -->
                                </div><!-- /.electro-tabs -->

                                <div class="related products">
                                    <h2>Related Products</h2>

                                    <ul class="products columns-5">
                                        <?php foreach ($related_pdts as $key => $rp): ?>

                                        <li class="product">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="" rel="tag"><?php echo $rp->brand_name; ?></a></span>
                                                    <a href="<?php echo base_url().'welcome/single_product/'.$rp->id; ?>">
                                                        <h3><?php echo $rp->pdt_name; ?></h3>
                                                        <div class="product-thumbnail">
                                                                <img src="assets/images/blank.gif" data-echo="<?php echo asset_url();?>images/products/<?php echo $rp->pdt_image?>" class="img-responsive" alt="" >
                                                            </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                            <ins><span class="amount">₹<?php echo $rp->new_pdt_cost; ?></span></ins>
                                                             <del><span class="amount">₹<?php echo $rp->old_pdt_cost; ?></span></del>
                                                             </span>
                                                             </span>
                                                          <a rel="nofollow" href="JavaScript:Void(0);" id="add_to_cart_item" class="button add_to_cart_button" data-productid="<?php echo $rp->id; ?>" data-productname="<?php echo $rp->pdt_name; ?>" data-price="<?php echo $rp->new_pdt_cost; ?>" data-image="<?php echo $rp->pdt_image; ?>">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                           <a href="JavaScript:Void(0);" rel="nofollow" class="add_to_wishlist" data-productidwish="<?php echo $rp->id; ?>" data-productnamewish="<?php echo $rp->pdt_name; ?>" data-productpricewish="<?php echo $rp->new_pdt_cost; ?>" data-productimagewish="<?php echo $rp->pdt_image; ?>" > Wishlist</a>
                                                          <a href="JavaScript:Void(0);" rel="nofollow" class="add_to_compare add-to-compare-link" data-productidcompare="<?php echo $rp->id; ?>" data-productnamecompare="<?php echo $rp->pdt_name; ?>" data-productpricecompare="<?php echo $rp->new_pdt_cost; ?>" data-productimagecompare="<?php echo $rp->pdt_image; ?>" data-productspecificationcompare="<?php echo $rp->pdt_specification; ?>" >Compare</a>
                                                        </div>
                                                    </div>
                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                    <?php endforeach; ?>

                                    
                                    </ul><!-- /.products -->
                                </div><!-- /.related -->
                            </div><!-- /.product -->
                        </main><!-- /.site-main -->
                    </div><!-- /.content-area -->
                </div><!-- /.container -->
            </div><!-- /.site-content -->


        </div><!-- #page -->

    </body>
</html>
<script>
    jQuery(document).ready(function(){
         var base_url = '<?php echo base_url(); ?>';
         var url = base_url+'welcome/addToCart'
         
         jQuery('.single_add_to_cart_button').click(function(){
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

                         
         
                     }
             });
         });
     });
</script>
<script type="text/javascript">
jQuery(function() {
jQuery("#gallery_image").elevateZoom();
});
</script>
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