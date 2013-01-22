<?php
/**
 * The template for displaying all product.
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
            <section class="content-pages">
                <article class="shopping_bag">
                    <?php woo_nav_before(); ?>
                </article>
                <article class="title-pages">
                    <?php include('breadcrumb.php'); ?>
                </article>
                <article class="category-products">
                    <ul class="products">
                        <?php while (have_posts()) : the_post(); ?>
                        <?php global $product; ?>
                        <li class="product">
                            <a class="item" href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                                <div class="background-thumbnail-product"> 
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('thumb-products-cat');
                                    }
                                    ?>
                                </div>
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
                    </ul>
                </article>
                <div class="pagingbox clearfix"> 
                    <?php
                    if (function_exists('wp_pagenavi'))
                        wp_pagenavi();
                    ?>
                </div> <!--end of div.pagingbox-->
            </section>
        </article>
        <span class="bg-bottom-content"></span>
    </aside> <!--end of aside.main-content-->
</section>

<?php get_sidebar('customer-gallery'); ?> 
<?php get_footer(); ?>