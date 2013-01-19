<?php
/**
 * The main template file.
 */
get_header();
global $sTemplateURL;
?>
<aside id="banner">
    <ul class="slide-banner">
        <li><embed width="963" height="368" menu="false" wmode="transparent" type="application/x-shockwave-flash" pluginspage="#" quality="high" src="<?php echo $sTemplateURL; ?>/images/banner-1.swf"></li>
    </ul>
</aside> <!--end of aside#banner-->
<aside class="gallery-carousel">
    <ul class="galery clearfix">
        <li>
            <img src="<?php echo $sTemplateURL; ?>/images/galery-1.png">
        </li>
        <li>
            <img src="<?php echo $sTemplateURL; ?>/images/galery-2.png">
        </li>
        <li>
            <img src="<?php echo $sTemplateURL; ?>/images/galery-3.png">
        </li>
        <li>
            <img src="<?php echo $sTemplateURL; ?>/images/galery-4.png">
        </li>
        <li>
            <img src="<?php echo $sTemplateURL; ?>/images/galery-5.png">
        </li>
    </ul>
</aside>

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

<aside class="customer-gallery">
    <h1>Khach hang</h1>
    <ul class="customer clearfix">
        <li>
            <a href="#"><img src="<?php echo $sTemplateURL; ?>/images/galery-1.png"></a>
        </li>
        <li>
            <a href="#"><img src="<?php echo $sTemplateURL; ?>/images/galery-2.png"></a>
        </li>
        <li>
            <a href="#"><img src="<?php echo $sTemplateURL; ?>/images/galery-3.png"></a>
        </li>
        <li>
            <a href="#"><img src="<?php echo $sTemplateURL; ?>/images/galery-4.png"></a>
        </li>
    </ul>
</aside>
<?php get_footer(); ?>