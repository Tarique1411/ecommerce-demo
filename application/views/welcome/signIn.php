<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">

    <body class="page full-width">
        <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
            <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

            <div id="content" class="site-content" tabindex="-1">
                <div class="container">

                    <nav class="woocommerce-breadcrumb" >
                        <a href="<?php echo base_url(); ?>">Home</a>
                        <span class="delimiter"><i class="fa fa-angle-right"></i></span>
                        Sign In
                    </nav><!-- .woocommerce-breadcrumb -->

                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">

                            <article class="hentry">

                                <header class="entry-header">
                                    <h1 class="entry-title">Sign In</h1>
                                </header><!-- .entry-header -->

                                <div class="entry-content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div role="form" class="wpcf7">
                                                <div class="screen-reader-response"></div>
                                                <form action="#" method="post" class="wpcf7-form">

                                                    <div class="form-group row">

                                                         <div class="col-xs-12 col-md-6">
                                                            <label>Email*</label><br />
                                                            <span class="wpcf7-form-control-wrap last-name">
                                                                <input type="email" name="email" value="" size="40" class="wpcf7-form-control input-text" aria-required="true" aria-invalid="false" />
                                                            </span>
                                                        </div>
                                                         <div class="col-xs-12 col-md-6">
                                                            <label>Password*</label><br />
                                                            <span class="wpcf7-form-control-wrap last-name">
                                                                <input type="password" name="password" value="" size="40" class="wpcf7-form-control input-text" aria-required="true" aria-invalid="false" />
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <p><input type="submit" name="submit" value="Sign In" class="wpcf7-form-control wpcf7-submit" />&nbsp; <a class="button" href="<?php echo base_url(); ?>welcome/signUp" >Sign Up</a></p>
                                                    </div>
                                                </form>
                                            </div>
                                        </div><!-- .col -->

                                    </div><!-- .row -->
                                </div><!-- .entry-content -->

                            </article><!-- #post-## -->

                        </main><!-- #main -->
                    </div><!-- #primary -->

                </div><!-- .col-full -->
            </div><!-- #content -->

        </div><!-- #page -->

    </body>
</html>