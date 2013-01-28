<?php
/**
 * The main template file.
 */
get_header();
?>

<?php get_sidebar('banner-carousel'); ?> 

<section class="clearfix">
    <?php get_sidebar(); ?>
    <aside class="main-content">
        <span class="bg-top-content"></span>
        <article class="content startpage-home">
            <section>
                <?php $iID = get_page_by_path('trang-chu')->ID; ?>
                <ul class="banner-startpage">
                    <?php $index1 = 0; ?>
                    <?php $aBannerTop = get_field('_gallery_images_content_top', $iID) ?>
                    <?php foreach ($aBannerTop as $aFieldTop) : ?>
                    <?php $index1++; ?>
                    <li>
                        <div id="content-banner-<?php echo $index1; ?>" class="pics">
                            <?php foreach ($aFieldTop as $aImgTop) : ?>
                            <?php foreach ($aImgTop as $aImagesTop) : ?>
                            <img style="width: 645px; height: 290px;" src="<?php echo $aImagesTop['_images_content_top']; ?>">
                            <?php endforeach; ?>
                            <?php endforeach; ?>
                        </div>
                    </li>
                    
                    <?php endforeach; ?>
                    
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
                    <?php $index2 = 3; ?>
                    <?php $aBannerBottom = get_field('_gallery_images_content_bottom', $iID) ?>
                    <?php foreach ($aBannerBottom as $aFieldBottom) : ?>
                    <?php $index2++; ?>
                    <li>
                        <div id="content-banner-<?php echo $index2; ?>" class="pics">
                            <?php foreach ($aFieldBottom as $aImgBottom) : ?>
                            <?php foreach ($aImgBottom as $aImagesBottom) : ?>
                            <img style="width: 645px; height: 290px;" src="<?php echo $aImagesBottom['_images_content_bottom']; ?>">
                            <?php endforeach; ?>
                            <?php endforeach; ?>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </section>
        </article>
        <span class="bg-bottom-content"></span>
    </aside> <!--end of aside.main-content-->
</section>

<?php get_sidebar('customer-gallery'); ?> 
<?php get_footer(); ?>