<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <body class="page home page-template-default">
        <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
            <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

            <div id="content" class="site-content" tabindex="-1">
                <div class="container">

                    <nav class="woocommerce-breadcrumb" ><a href="http://demo2.transvelo.in/electro">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Smart Phones &amp; Tablets</nav>

                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">

                            <header class="page-header">
                                <h1 class="page-title">Smart Phones &amp; Tablets</h1>
                                <p class="woocommerce-result-count">Showing 1&ndash;15 of 20 results</p>
                            </header>

                            <div class="shop-control-bar product-filters-widgets">
                                <div class="sidebar">
                                    <div id="dropdown-menu" class="row filter-dropdown-menu" style="display: block;">
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                                            <aside class="widget widget_price_filter">
                                                <h3 class="widget-title">Filter By Price</h3>
                                                <form action="#" method="get">
                                                    <div class="price_slider_wrapper">
                                                        <div style="" class="price_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                                            <div style="left: 0%; width: 100%;" class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                                            <span style="left: 0%;" tabindex="0" class="ui-slider-handle ui-state-default ui-corner-all"></span>
                                                            <span style="left: 100%;" tabindex="0" class="ui-slider-handle ui-state-default ui-corner-all"></span>
                                                        </div>
                                                        <div class="price_slider_amount">
                                                            <input type="hidden" id="hidden_minimum_price" value="0" />
                                                            <input type="hidden" id="hidden_maximum_price" value="150000" />
                                                            <button class="button" type="submit">Filter</button>
                                                            <p id="price_show" class="price_label" >₹1000 - ₹150000</p>
                                                            <div id="price_range" ></div>
                                                            <div class="clear"></div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </aside>

                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                                            <aside class="widget widget_layered_nav">
                                                <h3 class="widget-title">Filter By Brand</h3>
                                                    <?php foreach ($brands->result_array() as $row) { ?>
                                                        <label><input type="checkbox" class="common_selector brand" value="<?php echo $row['brand']; ?>">&nbsp;&nbsp;<?php echo $row['brand']; ?></label></br>
                                                   <?php } ?>
                                            </aside>

                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                                            <aside class="widget widget_layered_nav">
                                                <h3 class="widget-title">Filter By Color</h3>
                                               <?php foreach ($colors->result_array() as $row) { ?>
                                                        <label><input type="checkbox" class="common_selector color" value="<?php echo $row['pdt_color']; ?>">&nbsp;&nbsp;<?php echo $row['pdt_color']; ?></label></br>
                                                   <?php } ?>
                                            </aside>

                                        </div>

                                        <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                                            <aside class="widget widget_layered_nav" id="woocommerce_layered_nav-11">
                                                <h3 class="widget-title">Filter By Size</h3>
                                                <ul style="list-style: none; padding: 0;">
                                                    <li><a href="#">L</a> <span class="count">(4)</span></li>
                                                    <li><a href="#">M</a> <span class="count">(4)</span></li>
                                                    <li><a href="#">S</a> <span class="count">(4)</span></li>
                                                </ul>
                                            </aside>

                                        </div> -->

                                    </div>
                                </div>
                            </div>

                            <div class="shop-control-bar">
                                <div align="center" id="pagination_link">
                                    
                                </div>
                               <!--  <ul class="shop-view-switcher nav nav-tabs" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" title="Grid View" href="#grid"><i class="fa fa-th"></i></a></li>
                                    <li class="nav-item"><a class="nav-link " data-toggle="tab" title="Grid Extended View" href="#grid-extended"><i class="fa fa-align-justify"></i></a></li>
                                    <li class="nav-item"><a class="nav-link " data-toggle="tab" title="List View" href="#list-view"><i class="fa fa-list"></i></a></li>
                                    <li class="nav-item"><a class="nav-link " data-toggle="tab" title="List View Small" href="#list-view-small"><i class="fa fa-th-list"></i></a></li>
                                </ul> -->

                               <!--  <form class="woocommerce-ordering" method="get">
                                    <select name="orderby" class="orderby">
                                        <option value="menu_order"  selected='selected'>Default sorting</option>
                                        <option value="popularity" >Sort by popularity</option>
                                        <option value="rating" >Sort by average rating</option>
                                        <option value="date" >Sort by newness</option>
                                        <option value="price" >Sort by price: low to high</option>
                                        <option value="price-desc" >Sort by price: high to low</option>
                                    </select>
                                </form> -->

                               <!--  <form class="form-electro-wc-ppp"><select name="ppp" onchange="this.form.submit()" class="electro-wc-wppp-select c-select"><option value="15"  selected='selected'>Show 15</option><option value="-1" >Show All</option></select></form>
                                <nav class="electro-advanced-pagination">
                                    <form method="post" class="form-adv-pagination"><input id="goto-page" size="2" min="1" max="2" step="1" type="number" class="form-control" value="1" /></form> of 2<a class="next page-numbers" href="#">&rarr;</a>			<script>
                                    jQuery(document).ready(function($){
                                        $( '.form-adv-pagination' ).on( 'submit', function() {
                                            var link 		= '#',
                                            goto_page 	= $( '#goto-page' ).val(),
                                            new_link 	= link.replace( '%#%', goto_page );

                                            window.location.href = new_link;
                                            return false;
                                        });
                                    });
                                    </script>
                                </nav> -->
                            </div>
                            <div class="row filter_data" >
                                
                            </div>

                            
                         <!--    <div class="shop-control-bar-bottom">
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
                            </div> -->

                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div><!-- .container -->
            </div><!-- #content -->
        </div><!-- #page -->
    </body>
</html>
<style>
    #loading
    {
        text-align: center;
        background: url('<?php echo asset_url(); ?>images/it_logo.png') no-repeat center;
        height: 150px;
    }
</style>
<script>
    jQuery(document).ready(function(){
        filter_data(1);

        function filter_data(page)
        {
            jQuery('#filter_data').html("<div id='loading'></div>");
            var action = 'fetch_data';
            var minimum_price = jQuery('#hidden_minimum_price');
            var maximum_price = jQuery('#hidden_maximum_price');
            var brand = get_filter('brand');
            var color = get_filter('color');
            jQuery.ajax({
                url:"<?php base_url(); ?>welcome/fetch_products"+page,
                method:"POST",
                dataType:"JSON",
                data:{action:action,minimum_price:minimum_price,maximum_price:maximum_price,brand:brand,color:color},
                success:function(data)
                {
                    jQuery('.filter_data').html(data.product_list);
                    jQuery('#pagination_link').html(data.pagination_link);
                }
            })
        }
        function get_filter(class_name)
        {
            var filter = [];
            jQuery('.'+class_name+':checked').each(function(){
                filter.push(jQuery(this).val());
            });
            return filter;
        }
    });
</script>
