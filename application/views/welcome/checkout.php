<?php //echo '<pre>'; print_r($orders); exit(); ?>
<?php $total_pdt_cost = 0;
foreach ($orders as $key => $value): 
 $pdt_cost = (int)$value['qty']*(float)$value['price'];
$total_pdt_cost += $pdt_cost;
 ?>
<?php endforeach; ?>

<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">

    <body class="page home page-template-default">
        <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
            <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
            <div id="content" class="site-content" tabindex="-1">
                <div class="container">

                    <nav class="woocommerce-breadcrumb"><a href="home.html">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Checkout</nav>

                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <article class="page type-page status-publish hentry">
                                <header class="entry-header"><h1 itemprop="name" class="entry-title">Checkout</h1></header><!-- .entry-header -->

                                <form enctype="multipart/form-data" action="<?php echo base_url(); ?>welcome/checkout" class="checkout woocommerce-checkout" method="post" name="checkout">
                                    <div id="customer_details" class="col2-set">
                                        <div class="col-1">
                                            <div class="woocommerce-billing-fields">

                                                <h3>Billing Details</h3>

                                                <p id="billing_first_name_field" class="form-row form-row form-row-first validate-required"><label class="" for="billing_first_name">First Name <abbr title="required" class="required">*</abbr></label><input type="text" value="" placeholder="" id="billing_first_name" name="billing_first_name" class="input-text " required="true"></p>

                                                <p id="billing_last_name_field" class="form-row form-row form-row-last validate-required"><label class="" for="billing_last_name">Last Name <abbr title="required" class="required">*</abbr></label><input type="text" value="" placeholder="" id="billing_last_name" name="billing_last_name" class="input-text " required="true"></p><div class="clear"></div>

                                                <p id="billing_email_field" class="form-row form-row form-row-first validate-required validate-email"><label class="" for="billing_email">Email Address <abbr title="required" class="required">*</abbr></label><input type="email" value="" placeholder="" id="billing_email" name="billing_email" class="input-text " required="true"></p>

                                                <p id="billing_phone_field" class="form-row form-row form-row-last validate-required validate-phone"><label class="" for="billing_phone">Phone <abbr title="required" class="required">*</abbr></label><input type="tel" value="" placeholder="" id="billing_phone" name="billing_phone" class="input-text " required="true"></p><div class="clear"></div>


                                                <p id="billing_address_1_field" class="form-row form-row form-row-wide address-field validate-required"><label class="" for="billing_address_1">Address <abbr title="required" class="required">*</abbr></label><input type="text" value="" placeholder="Street address" id="billing_address_1" name="billing_address_1" class="input-text " required="true"></p>

                                                <p id="billing_address_2_field" class="form-row form-row form-row-wide address-field"><input type="text" value="" placeholder="Apartment, suite, unit etc. (optional)" id="billing_address_2" name="billing_address_2" class="input-text "></p>

                                                <p id="billing_city_field" class="form-row form-row form-row-wide address-field validate-required" data-o_class="form-row form-row form-row-wide address-field validate-required"><label class="" for="billing_city">Town / City <abbr title="required" class="required">*</abbr></label><input type="text" value="" placeholder="" id="billing_city" name="billing_city" class="input-text " required="true"></p>

                                                <p id="billing_state_field" class="form-row form-row form-row-first validate-required validate-email"><label class="" for="billing_state">State / County <abbr title="required" class="required">*</abbr></label><input type="text" value="" placeholder="" id="billing_state" name="billing_state" class="input-text " required="true"></p>

                                                <p id="billing_postcode_field" class="form-row form-row form-row-last address-field validate-postcode validate-required" data-o_class="form-row form-row form-row-last address-field validate-required validate-postcode"><label class="" for="billing_postcode">Postcode / ZIP <abbr title="required" class="required">*</abbr></label><input type="text" value="" placeholder="" id="billing_postcode" name="billing_postcode" class="input-text " required="true"></p>

                                                <div class="clear"></div>

                                            </div>
                                        </div>

                                        <div class="col-2">
                                            <h3>Shipping Details</h3>
                                            <div class="woocommerce-shipping-fields">
                                                <h3 id="ship-to-different-address">
                                                    <label class="checkbox" for="ship-to-different-address-checkbox">Ship to a different address?</label>
                                                    <input type="checkbox" value="1" name="ship_to_different_address" class="input-checkbox" id="ship-to-different-address-checkbox">
                                                </h3>
                                         
                                                <p id="order_comments_field" class="form-row form-row notes"><label class="" for="order_comments">Order Notes</label><textarea cols="5" rows="2" placeholder="Notes about your order, e.g. special notes for delivery." id="order_comments" class="input-text " name="note"></textarea></p>
                                            </div>
                                        </div>
                                    </div>

                                    <h3 id="order_review_heading">Your order</h3>

                                    <div class="woocommerce-checkout-review-order" id="order_review">
                                        <table class="shop_table woocommerce-checkout-review-order-table">
                                            <thead>
                                                <tr>
                                                    <th class="product-name">Product</th>
                                                    <th class="product-total">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	<?php foreach ($orders as $key => $value): ?>
                                            		
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                        <?php echo $value['name']; ?>&nbsp;
                                                        <input type="hidden" name="name[]" value="<?php echo $value['name']; ?>" >
                                                        <input type="hidden" name="image[]" value="<?php echo $value['image']; ?>" >
                                                        <input type="hidden" name="price[]" value="<?php echo $value['price']; ?>" >
                                                        <input type="hidden" name="pdt_id[]" value="<?php echo $value['id']; ?>" >
                                                        <strong class="product-quantity">× <?php echo $value['qty']; ?></strong>
                                                        <input type="hidden" name="qty[]" value="<?php echo $value['qty']; ?>" >
                                                    </td>
                                                    <td class="product-total">
                                                        <span class="amount">₹<?php echo $value['subtotal']; ?></span>
                                                        <input type="hidden" name="subtotal[]" value="<?php echo $value['subtotal']; ?>" >
                                                    </td>
                                                </tr>
                                            	<?php endforeach; ?>

                                            </tbody>
                                            <tfoot>

                                                <tr class="cart-subtotal">
                                                    <th>Subtotal</th>
                                                    <td><span class="amount">₹<?php echo $total_pdt_cost; ?></span></td>
                                                </tr>

                                                <tr class="shipping">
                                                    <th>Shipping</th>
                                                    <td data-title="Shipping">Flat Rate: <span class="amount">₹100.00</span> <input type="hidden" class="shipping_method" value="international_delivery" id="shipping_method_0" data-index="0" name="shipping_method[0]"></td>
                                                </tr>

                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td><strong><span class="amount">₹<?php echo $total_pdt_cost+100;  ?></span></strong> 
                                                        <input type="hidden" name="total" value="<?php echo $total_pdt_cost+100;  ?>">
                                                    </td>
                                                </tr>

                                            </tfoot>
                                            </tfoot>
                                        </table>

                                        <div class="woocommerce-checkout-payment" id="payment">
                                            <ul class="wc_payment_methods payment_methods methods">
                                                <li class="wc_payment_method payment_method_paypal">
                                                    <input  checked="checked" type="radio" data-order_button_text="Proceed to Stripe" value="stripe" name="payment_method" class="input-radio payment_type" id="payment_method_paypal">
                                                    <label for="payment_method_paypal">Card Payment 
                                                    <img alt="Stripe Acceptance Mark" src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg">
                                                    <a title="What is Stripe?" onclick="javascript:window.open('https://stripe.com/en-in/about','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;" class="about_stripe" href="https://stripe.com/en-in/about">What is Stripe?</a></label>
                                                    <div style="display:block;" class="payment_box payment_method_paypal">
                                                        <p>Pay with your debit / credit card.</p>
                                                    </div>
                                                </li>
                                                <li class="wc_payment_method payment_method_bacs">
                                                    <input type="radio" data-order_button_text="" value="bank" name="payment_method" class="input-radio payment_type" id="payment_method_bacs">
                                                    <label for="payment_method_bacs">Direct Bank Transfer</label>
                                                    <div style="display:none;" class="payment_box payment_method_bacs">
                                                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                    </div>
                                                </li>
                                                <li class="wc_payment_method payment_method_cheque">
                                                    <input type="radio" data-order_button_text="" value="cheque" name="payment_method" class="input-radio payment_type" id="payment_method_cheque">
                                                    <label for="payment_method_cheque">Cheque Payment   </label>
                                                    <div style="display:none;" class="payment_box payment_method_cheque">
                                                        <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                    </div>
                                                </li>
                                                <li class="wc_payment_method payment_method_cod">
                                                    <input type="radio" data-order_button_text="" value="cod" name="payment_method" class="input-radio payment_type" id="payment_method_cod">
                                                    <label for="payment_method_cod">Cash on Delivery</label>
                                                    <div style="display:none;" class="payment_box payment_method_cod">
                                                        <p>Pay with cash upon delivery.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="form-row place-order">
                                                <p class="form-row terms wc-terms-and-conditions">
                                                    <input type="checkbox" id="terms"  class="input-checkbox" required="required">
                                                    <label class="checkbox" for="terms">I’ve read and accept the <a target="_blank" href="terms-and-conditions.html">terms &amp; conditions</a> <span class="required">*</span></label>
                                                </p>
                                                <input type="submit" data-value="Place order" value="Place order" class="button alt" name="submit">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </article>
                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div><!-- .container -->
            </div><!-- #content -->

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
                                        </div><!-- /.info -->
                                    </figcaption>

                                     <img src="assets/images/blank.gif" data-echo="<?php echo asset_url(); ?>images/brands/1.png" class="img-responsive" alt="">

                                </figure>
                            </a>
                        </div><!-- /.item -->


                        <div class="item">

                            <a href="#">

                                <figure>
                                    <figcaption class="text-overlay">
                                        <div class="info">
                                            <h4>Apple</h4>
                                        </div><!-- /.info -->
                                    </figcaption>

                                     <img src="assets/images/blank.gif" data-echo="<?php echo asset_url(); ?>images/brands/2.png" class="img-responsive" alt="">

                                </figure>
                            </a>
                        </div><!-- /.item -->


                        <div class="item">

                            <a href="#">

                                <figure>
                                    <figcaption class="text-overlay">
                                        <div class="info">
                                            <h4>Asus</h4>
                                        </div><!-- /.info -->
                                    </figcaption>

                                     <img src="<?php echo asset_url(); ?>images/blank.gif" data-echo="assets/images/brands/3.png" class="img-responsive" alt="">

                                </figure>
                            </a>
                        </div><!-- /.item -->


                        <div class="item">

                            <a href="#">

                                <figure>
                                    <figcaption class="text-overlay">
                                        <div class="info">
                                            <h4>Dell</h4>
                                        </div><!-- /.info -->
                                    </figcaption>

                                    <img src="assets/images/blank.gif" data-echo="<?php echo asset_url(); ?>images/brands/4.png" class="img-responsive" alt="">

                                </figure>
                            </a>
                        </div><!-- /.item -->


                        <div class="item">

                            <a href="#">

                                <figure>
                                    <figcaption class="text-overlay">
                                        <div class="info">
                                            <h4>Gionee</h4>
                                        </div><!-- /.info -->
                                    </figcaption>

                                    <img src="assets/images/blank.gif" data-echo="<?php echo asset_url(); ?>images/brands/5.png" class="img-responsive" alt="">

                                </figure>
                            </a>
                        </div><!-- /.item -->


                        <div class="item">

                            <a href="#">

                                <figure>
                                    <figcaption class="text-overlay">
                                        <div class="info">
                                            <h4>HP</h4>
                                        </div><!-- /.info -->
                                    </figcaption>

                                    <img src="assets/images/blank.gif" data-echo="<?php echo asset_url(); ?>images/brands/6.png" class="img-responsive" alt="">

                                </figure>
                            </a>
                        </div><!-- /.item -->


                        <div class="item">

                            <a href="#">

                                <figure>
                                    <figcaption class="text-overlay">
                                        <div class="info">
                                            <h4>HTC</h4>
                                        </div><!-- /.info -->
                                    </figcaption>

                                    <img src="assets/images/blank.gif" data-echo="<?php echo asset_url(); ?>images/brands/3.png" class="img-responsive" alt="">

                                </figure>
                            </a>
                        </div><!-- /.item -->


                        <div class="item">

                            <a href="#">

                                <figure>
                                    <figcaption class="text-overlay">
                                        <div class="info">
                                            <h4>IBM</h4>
                                        </div><!-- /.info -->
                                    </figcaption>

                                    <img src="assets/images/blank.gif" data-echo="<?php echo asset_url(); ?>images/brands/5.png" class="img-responsive" alt="">

                                </figure>
                            </a>
                        </div><!-- /.item -->


                        <div class="item">

                            <a href="#">

                                <figure>
                                    <figcaption class="text-overlay">
                                        <div class="info">
                                            <h4>Lenova</h4>
                                        </div><!-- /.info -->
                                    </figcaption>

                                    <img src="assets/images/blank.gif" data-echo="<?php echo asset_url(); ?>images/brands/2.png" class="img-responsive" alt="">

                                </figure>
                            </a>
                        </div><!-- /.item -->


                        <div class="item">

                            <a href="#">

                                <figure>
                                    <figcaption class="text-overlay">
                                        <div class="info">
                                            <h4>LG</h4>
                                        </div><!-- /.info -->
                                    </figcaption>

                                    <img src="assets/images/blank.gif" data-echo="<?php echo asset_url(); ?>images/brands/1.png" class="img-responsive" alt="">

                                </figure>
                            </a>
                        </div><!-- /.item -->


                        <div class="item">

                            <a href="#">

                                <figure>
                                    <figcaption class="text-overlay">
                                        <div class="info">
                                            <h4>Micromax</h4>
                                        </div><!-- /.info -->
                                    </figcaption>

                                    <img src="assets/images/blank.gif" data-echo="<?php echo asset_url(); ?>images/brands/6.png" class="img-responsive" alt="">

                                </figure>
                            </a>
                        </div><!-- /.item -->


                        <div class="item">

                            <a href="#">

                                <figure>
                                    <figcaption class="text-overlay">
                                        <div class="info">
                                            <h4>Microsoft</h4>
                                        </div><!-- /.info -->
                                    </figcaption>

                                    <img src="assets/images/blank.gif" data-echo="<?php echo asset_url(); ?>images/brands/4.png" class="img-responsive" alt="">

                                </figure>
                            </a>
                        </div><!-- /.item -->


                    </div><!-- /.owl-carousel -->

                </div>
            </section>

    </body>
</html>

