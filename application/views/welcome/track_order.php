<div id="content" class="site-content" tabindex="-1">
    <div class="container">

        <nav class="woocommerce-breadcrumb" >
            <a href="<?php echo base_url(); ?>welcome">Home</a>
            <span class="delimiter"><i class="fa fa-angle-right"></i></span>Track your Order
        </nav><!-- .woocommerce-breadcrumb -->
        <div id="primary" class="content-area">
            <main id="main" class="site-main">

            <?php if(empty($orders)): ?>
                <article id="post-2181" class="post-2181 page type-page status-publish hentry">

                    <header class="entry-header">
                        <h1 class="entry-title" itemprop="name">Track your Order</h1>
                    </header><!-- .entry-header -->

                    <div class="entry-content" itemprop="mainContentOfPage">
                        <div class="woocommerce">
                            <form action="<?php echo base_url(); ?>welcome/track_order" method="get" class="track_order">

                                <p>To track your order please enter your Order ID in the box below and press the "Track" button. This was given to you on your receipt and in the confirmation email you should have received.</p>

                                <p class="form-row form-row-first">
                                    <label for="orderid">Order ID</label>
                                    <input class="input-text" type="text" name="orderid" id="orderid" placeholder="Found in your order confirmation email." />
                                </p>

                                <!-- <p class="form-row form-row-last">
                                    <label for="order_email">Billing Email</label>
                                    <input class="input-text" type="text" name="order_email" id="order_email" placeholder="Email you used during checkout." />
                                </p> -->

                                <div class="clear"></div>

                                <p class="form-row">
                                    <input type="submit" name="submit" class="button"/>
                                </p>
                            </form>
                        </div>
                    </div><!-- .entry-content -->

                </article><!-- #post-## -->
            <?php endif; ?>
            <?php if(!empty($orders)): 
                // echo '<pre>'; print_r($orders); die;
                ?>
                <article id="post-2181" class="post-2181 page type-page status-publish hentry">

                    <header class="entry-header">
                        <h1 class="entry-title" itemprop="name">Hello,<?php echo $customers->last_name; ?></h1>
                    </header><!-- .entry-header -->

                    <div class="entry-content" itemprop="mainContentOfPage">
                        <div class="woocommerce">
                                <?php if($orders->payment_status == 'succeeded'): ?>
                                    <h6>Your payment is succesfull and Your order has been placed successfully.
                                    Your order ID is <strong><?php echo $orders->order_id; ?></strong>. To track your order please enter your Order ID.</p>
                                    <?php elseif($orders->payment_mode == 'cod'): ?>
                                <h6>Your payment is pending and Your order will be shipped.Please do cash on delivery.
                                    Your order ID is <strong><?php echo $orders->order_id; ?></strong>. To track your order please check your mail.</p>
                                <?php elseif($orders->payment_status == 'pending'): ?>
                                <h6>Your payment is pending and Your order will be shipped as soon as funds is cleared into our bank account.
                                    Your order ID is <strong><?php echo $orders->order_id; ?></strong>. To track your order please enter your Order ID.</p>
                                <?php else: ?>
                                <h6>Your payment is failed and Your order has not been placed successfully.
                                    Your order ID is <strong><?php echo $orders->order_id; ?></strong>. To track your order please enter your Order ID.</p>
                                <?php endif; ?>
                                <?php if($orders->shipment_status == 'shipped'): ?>
                                    <p style="text-align: center;">Your order has been shipped successfully.</p>
                                <?php endif; ?>
                        </div>
                    </div><!-- .entry-content -->

                </article><!-- #post-## -->
            <?php endif; ?>
            </main><!-- #main -->
        </div><!-- #primary -->


    </div><!-- .col-full -->
</div><!-- #content -->