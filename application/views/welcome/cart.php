<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<?php //echo '<pre>'; print_r($cartItems);exit; ?>
    

    <body class="page home page-template-default">
        <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
            <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

            <div id="content" class="site-content" tabindex="-1">
            	<div class="container">

            		<nav class="woocommerce-breadcrumb"><a href="<?php echo base_url();?>">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Cart</nav>

            		<div id="primary" class="content-area">
            			<main id="main" class="site-main">
            				<article class="page type-page status-publish hentry">
            					<header class="entry-header"><h1 itemprop="name" class="entry-title">Cart</h1></header><!-- .entry-header -->

            					<form method="post" action="<?php base_url(); ?>order" >

                                    <table class="shop_table shop_table_responsive cart">
                                        <thead>
                                            <tr>
                                                <th class="product-remove">&nbsp;</th>
                                                <th class="product-thumbnail">&nbsp;</th>
                                                <th class="product-name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-quantity">Quantity</th>
                                                <th class="product-subtotal">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php  $total_pdt_cost =0; ?>
                                             <?php if(!empty($cartItems)): ?>
                                                    <?php foreach ($cartItems as $key => $item):?>

                                            <tr class="cart_item">
                                               

                                                <td class="product-remove">
                                                    <a class="remove" href="<?php echo base_url().'welcome/removeCartItem/'.$item['rowid']; ?>" onclick="return confirm('Are you Sure?')">×</a>
                                                    <input type="hidden" name="rowid[]" value="<?php echo $item['rowid']; ?>">
                                                    <input type="hidden" name="id[]" value="<?php echo $item['id']; ?>">
                                                </td>

                                                <td class="product-thumbnail">
                                                    <a href="single-product.html"><img width="180" height="180" src="<?php echo asset_url();?>images/products/<?php echo $item['image']; ?>" alt=""></a>
                                                    <input type="hidden" name="image[]" value="<?php echo $item['image']; ?>">
                                                </td>

                                                <td data-title="Product" class="product-name">
                                                    <a href="single-product.html"><?php echo $item['name']; ?></a>
                                                    <input type="hidden" name="name[]" value="<?php echo $item['name']; ?>">
                                                </td>

                                                <td data-title="Price" class="product-price">
                                                    <span class="amount">₹<?php echo $item['price']; ?></span>
                                                </td>

                                               <td data-title="Quantity" class="product-quantity">
                                                    <div class="quantity buttons_added">
                                                        <input type="button" class="minus" value="-">
                                                        <input type="button" class="plus" value="+">
                                                        <label>Quantity:</label>
                                                        <input type="number" size="4" class="input-text qty text pdt_qnty"  value="<?php echo $item['qty']; ?>" name="pdt_qty[]" max="30"  min="1" required="required" step="1" id="cart_plus">
                                                    </div>
                                                </td>
 <?php  
             $total_pdt_cost += $item['price'];
                   ?>
                                                <td data-title="Total" class="product-subtotal">
                                                    <span class="tot_pdt_amnt">₹<?php echo $item['subtotal']; ?></span>
                                                        <input type="hidden" name="subtotal[]" value="<?php echo $total_pdt_cost; ?>">

                                                </td>
                                            </tr>
                                            <?php endforeach; endif; ?>

                                            <tr>
                                                <td class="actions" colspan="6">

                                                    <div class="coupon">

                                                        <label for="coupon_code">Coupon:</label> <input type="text" placeholder="Coupon code" value="" id="coupon_code" class="input-text" name="coupon_code"> <input type="submit" value="Apply Coupon" name="apply_coupon" class="button">

                                                    </div>

                                                    <a href="<?php echo base_url(); ?>" value="" name="" class="button">Continue Shopping</a>

                                                    <div class="wc-proceed-to-checkout">
                                                        
                                                        
                                                        


                                                        <button value="checkout" name="checkout" class="checkout-button button alt wc-forward" type="submit" id="cart_button">Proceed to Checkout</button>
                                                    </div>

                                                    <input type="hidden" value="1eafc42c5e" name="_wpnonce"><input type="hidden" value="/electro/cart/" name="_wp_http_referer">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
            					<div class="cart-collaterals">

                                    <div class="cart_totals ">

                                        <h2>Cart Totals</h2>

                                        <table class="shop_table shop_table_responsive">

                                            <tbody>
                                                <tr class="cart-subtotal">
                                                    <th>Subtotal</th>
                                                    <td data-title="Subtotal"><span class="sub_amount">₹<?php echo $total_pdt_cost; ?></span></td>
                                                </tr>


                                                <tr class="shipping">
                                                    <th>Shipping</th>
                                                    <td data-title="Shipping">Flat Rate: <span class="amount">₹ 00.00</span> <input type="hidden" class="shipping_method" value="international_delivery" id="shipping_method_0" data-index="0" name="shipping_method[0]">

                                                       
                                                    </td>
                                                </tr>

                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td data-title="Total"><strong><span class="sub_amount">₹<?php echo $total_pdt_cost; ?></span></strong> </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="wc-proceed-to-checkout">

                                            <a class="checkout-button button alt wc-forward" href="checkout.html">Proceed to Checkout</a>
                                        </div>
                                    </div>
                                </div>
            				</article>
            			</main><!-- #main -->
            		</div><!-- #primary -->
            	</div><!-- .container -->
            </div><!-- #content -->


        </div><!-- #page -->

    </body>
</html>

<script>
    jQuery('.plus').click(function(){ 
     jQuery(this).next().next().val(parseInt(jQuery(this).next().next().val())+1)
     pdt_qnty =  parseInt(jQuery(this).next().next().val());
     pdt_cost = parseFloat(jQuery(this).closest('tr').find('.product-price').find('.amount').text().substr(1))
    total_pdt_cost = pdt_cost*pdt_qnty;
    total_pdt_cost = total_pdt_cost.toFixed(2);
    jQuery(this).closest('tr').find('.product-subtotal').find('.tot_pdt_amnt').text('₹'+total_pdt_cost) 
    total()
 })
    jQuery('.minus').click(function(){ 
    jQuery(this).next().next().next().val(parseInt(jQuery(this).next().next().next().val())-1)
    pdt_qnty = parseInt(jQuery(this).next().next().next().val());
    pdt_cost = parseFloat(jQuery(this).closest('tr').find('.product-price').find('.amount').text().substr(1))
    total_pdt_cost = pdt_cost*pdt_qnty;
    total_pdt_cost = total_pdt_cost.toFixed(2);
    jQuery(this).closest('tr').find('.product-subtotal').find('.tot_pdt_amnt').text('₹'+total_pdt_cost)
    total() 
 })
    function total(){
    var sub_total = 0; 
    jQuery('.tot_pdt_amnt').each(function(){  
        sub_total += parseFloat(jQuery(this).text().substr(1));  
    }); 
    sub_total = parseFloat(sub_total.toFixed(2));
    shipping_amnt = parseInt(jQuery('.shipping_amnt').text().substr(1))
    total_amount = shipping_amnt+sub_total;
    console.log(total_amount)
    // total_amount = total_amount.toFixed(2);
    jQuery('.total_amount').text('₹'+total_amount)
    jQuery('.sub_amount').text('₹'+sub_total)
}

</script>