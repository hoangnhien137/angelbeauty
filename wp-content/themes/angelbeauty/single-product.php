<?php
/**
 * The template for displaying all simple product.
 */
get_header();
?>
<?php get_sidebar('banner-carousel'); ?> 

<section class="clearfix">
    <?php get_sidebar(); ?>
    <aside class="main-content">
        <span class="bg-top-content"></span>
        <article class="content">
            <section class="content-pages">
                <?php
                if (is_tax('product_cat')) {
                    $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
                }
                ?> 
                <article class="shopping_bag">
                    <?php woo_nav_before(); ?>
                </article>
                <article class="title-pages">
                    <?php include('breadcrumb.php'); ?>
                </article>
                <?php while (have_posts()) : the_post(); ?>
                <?php global $product; ?>
                <?php $thumbID = $product->product_custom_fields['_thumbnail_id'][0]; ?>
                <article class="main-product-detail">
                    <section class="clearfix">
                        <div class="images">
                            <a class="zoom" title="buddha-plexi" rel="thumbnails" href="<?php echo wp_get_attachment_url($thumbID); ?>" itemprop="image">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('shop_single');
                                }
                                ?>
                            </a>
                        </div>
                        <div class="summary">
                            <div class="addthis-title clearfix">
                                <h1 class="product_title entry-title"><?php the_title(); ?></h1>
                                <a class="addthis_button" href="http://www.addthis.com/bookmark.php?v=300&amp;pubid=ra-507e234541de584e"><img src="http://s7.addthis.com/static/btn/v2/lg-share-en.gif" width="125" height="16" alt="Bookmark and Share" style="border:0"/></a>
                            </div>
                            <?php if ($price_html = $product->get_price_html()) : ?>
                            <span class="price" itemprop="price"><?php _e("Giá bán: ") ?><?php echo $price_html; ?></span>
                            <?php endif; ?>
                            <div class="cart-shopping">
                                <?php
                                $link = $product->add_to_cart_url();
                                $label = apply_filters('add_to_cart_text', __('Buy', 'woocommerce'));

                                $link = add_query_arg('variation_id', $variation->variation_id, $link);

                                printf('<a href="%s" rel="nofollow" data-product_id="%s" class="button add_to_cart_button product_type_%s">%s</a>', esc_url($link), $product->id, $product->product_type, $label);
                                ?>
                            </div>
                            <!-- AddThis Button BEGIN -->
                            <div class="addthis_toolbox addthis_default_style ">
                                <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                <a class="addthis_button_tweet"></a>
                                <a class="addthis_button_pinterest_pinit"></a>
                                <a class="addthis_counter addthis_pill_style"></a>
                            </div>
                            <!-- AddThis Button END -->
                        </div>
                    </section>
                    <div class="information_detail">
                        <?php the_content(); ?>
                    </div>
                    <div class="comment-products">
                        <?php comments_template(); ?>
                    </div>
                </article>
                <?php endwhile; ?>
                <article class="related-products">
                    <h1><?php _e("Các sản phẩm khác") ?></h1>
                    <div class="list-related-products">
                        <ul class="products">
                            <?php query_posts("orderby=DESC&post_type=product&post_status=publish&showposts=-1&taxonomy=product_cat&term={$term->slug}"); ?>
                            <?php $index = 0; ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <?php global $product; ?>
                                <li class="product<?php if ($index % 3 == 0) echo ' item-left'; ?>">
                                    <?php $index++; ?>
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
                            <?php wp_reset_query(); ?>    
                        </ul>
                    </div>
                </article>
            </section>
        </article>
        <span class="bg-bottom-content"></span>
    </aside> <!--end of aside.main-content-->
</section>

<?php get_sidebar('customer-gallery'); ?> 
<?php get_footer(); ?>