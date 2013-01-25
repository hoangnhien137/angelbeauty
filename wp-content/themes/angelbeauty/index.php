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
        <article class="content startpage-home">
            <section>
                <ul class="banner-startpage">
                    <li>
                        <div id="content-banner-1" class="pics">
                            <img style="width: 645px; height: 290px;" src="<?php echo $sTemplateURL; ?>/images/banner-2.jpg">
                            <img style="width: 645px; height: 290px;" src="<?php echo $sTemplateURL; ?>/images/banner-3.jpg">
                            <img style="width: 645px; height: 290px;" src="<?php echo $sTemplateURL; ?>/images/banner-4.jpg">
                        </div>
                    </li>
                    <li>
                        <div id="content-banner-2" class="pics">
                            <img style="width: 645px; height: 290px;" src="<?php echo $sTemplateURL; ?>/images/banner-2.jpg">
                            <img style="width: 645px; height: 290px;" src="<?php echo $sTemplateURL; ?>/images/banner-3.jpg">
                            <img style="width: 645px; height: 290px;" src="<?php echo $sTemplateURL; ?>/images/banner-4.jpg">
                        </div>
                    </li>
                    <li>
                        <div id="content-banner-3" class="pics">
                            <img style="width: 645px; height: 290px;" src="<?php echo $sTemplateURL; ?>/images/banner-2.jpg">
                            <img style="width: 645px; height: 290px;" src="<?php echo $sTemplateURL; ?>/images/banner-3.jpg">
                            <img style="width: 645px; height: 290px;" src="<?php echo $sTemplateURL; ?>/images/banner-4.jpg">
                        </div>
                    </li>
                </ul>
                <div class="product-startpage">
                    <div id="carousellite">
                        <ul class="products clearfix">
                            <?php query_posts("orderby=DESC&post_type=product&post_status=publish&showposts=10"); ?>
                            <?php while (have_posts()) : the_post(); ?>
                            <?php global $product; ?>
                            <li class="product">
                                <a class="item" href="<?php the_permalink(); ?>">
                                    <div class="background-thumbnail"> 
                                        <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('thumb-products');
                                        }
                                        ?>
                                    </div>
                                    <h3><?php the_title(); ?></h3>
                                    <?php if ($price_html = $product->get_price_html()) : ?>
                                    <span class="price"><?php _e("Giá bán: ") ?><?php echo $price_html; ?></span>
                                    <?php endif; ?>
                                </a>
                                <?php
                                $link = $product->add_to_cart_url();
                                $label = apply_filters('add_to_cart_text', __('Buy', 'woocommerce'));

                                $link = add_query_arg('variation_id', $variation->variation_id, $link);

                                printf('<a href="%s" rel="nofollow" data-product_id="%s" class="button add_to_cart_button product_type_%s">%s</a>', esc_url($link), $product->id, $product->product_type, $label);
                                ?>
                            </li>
                             <?php endwhile; ?>
                            <?php wp_reset_query(); ?>
                        </ul>
                    </div>
                </div>
               <ul class="banner-startpage">
                    <li>
                        <div id="content-banner-4" class="pics">
                            <img style="width: 645px; height: 290px;" src="<?php echo $sTemplateURL; ?>/images/banner-2.jpg">
                            <img style="width: 645px; height: 290px;" src="<?php echo $sTemplateURL; ?>/images/banner-3.jpg">
                            <img style="width: 645px; height: 290px;" src="<?php echo $sTemplateURL; ?>/images/banner-4.jpg">
                        </div>
                    </li>
                    <li>
                        <div id="content-banner-5" class="pics">
                            <img style="width: 645px; height: 290px;" src="<?php echo $sTemplateURL; ?>/images/banner-2.jpg">
                            <img style="width: 645px; height: 290px;" src="<?php echo $sTemplateURL; ?>/images/banner-3.jpg">
                            <img style="width: 645px; height: 290px;" src="<?php echo $sTemplateURL; ?>/images/banner-4.jpg">
                        </div>
                    </li>
                    <li>
                        <div id="content-banner-6" class="pics">
                            <img style="width: 645px; height: 290px;" src="<?php echo $sTemplateURL; ?>/images/banner-2.jpg">
                            <img style="width: 645px; height: 290px;" src="<?php echo $sTemplateURL; ?>/images/banner-3.jpg">
                            <img style="width: 645px; height: 290px;" src="<?php echo $sTemplateURL; ?>/images/banner-4.jpg">
                        </div>
                    </li>
                </ul>
            </section>
        </article>
        <span class="bg-bottom-content"></span>
    </aside> <!--end of aside.main-content-->
</section>

<?php get_sidebar('customer-gallery'); ?> 
<?php get_footer(); ?>