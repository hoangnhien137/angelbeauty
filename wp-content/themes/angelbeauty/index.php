<?php
/**
 * The main template file.
 */
get_header();
global $sTemplateURL;
?>
<?php get_sidebar('banner-carousel'); ?> 

<section class="clearfix">
    <?php get_sidebar(); ?>
    <aside class="main-content">
        <span class="bg-top-content"></span>
        <article class="content">
            <section>
                <ul class="banner-startpage">
                    <li><img src="<?php echo $sTemplateURL; ?>/images/banner-2.jpg"></li>
                    <li><img src="<?php echo $sTemplateURL; ?>/images/banner-3.jpg"></li>
                    <li><img src="<?php echo $sTemplateURL; ?>/images/banner-4.jpg"></li>
                </ul>
                <div class="product-startpage">
                    <ul class="products">
                        <li class="product">
                            <a class="item" href="#">
                                <div class="background-thumbnail"> 
                                    <img src="<?php echo $sTemplateURL; ?>/images/product.jpg">
                                </div>
                                <h3>Younger Hands</h3>
                                <span class="price">
                                    Gia ban: <span class="amount">1.848.000 VND</span>
                                </span>
                            </a>
                            <a class="button add_to_cart_button product_type_simple added" rel="nofollow" href="#">Buy</a>
                        </li>
                        <li class="product">
                            <a class="item" href="#">
                                <div class="background-thumbnail"> 
                                    <img src="<?php echo $sTemplateURL; ?>/images/product.jpg">
                                </div>
                                <h3>Younger Hands</h3>
                                <span class="price">
                                    Gia ban: <span class="amount">1.848.000 VND</span>
                                </span>
                            </a>
                            <a class="button add_to_cart_button product_type_simple added" rel="nofollow" href="#">Buy</a>
                        </li>
                        <li class="product">
                            <a class="item" href="#">
                                <div class="background-thumbnail"> 
                                    <img src="<?php echo $sTemplateURL; ?>/images/product.jpg">
                                </div>
                                <h3>Younger Hands</h3>
                                <span class="price">
                                    Gia ban: <span class="amount">1.848.000 VND</span>
                                </span>
                            </a>
                            <a class="button add_to_cart_button product_type_simple added" rel="nofollow" href="#">Buy</a>
                        </li>
                    </ul>
                </div>
                <ul class="banner-startpage">
                    <li><img src="<?php echo $sTemplateURL; ?>/images/banner-5.jpg"></li>
                    <li><img src="<?php echo $sTemplateURL; ?>/images/banner-6.jpg"></li>
                    <li><img src="<?php echo $sTemplateURL; ?>/images/banner-7.jpg"></li>
                </ul>
            </section>
        </article>
        <span class="bg-bottom-content"></span>
    </aside> <!--end of aside.main-content-->
</section>

<?php get_sidebar('customer-gallery'); ?> 
<?php get_footer(); ?>