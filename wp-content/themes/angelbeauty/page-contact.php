<?php
/*
 * Template Name: Page Contact
 */
?>
<?php global $post; ?>
<?php get_header(); ?>
<?php get_sidebar('banner-carousel'); ?> 

<section class="clearfix">
    <?php get_sidebar(); ?>
    <aside class="main-content">
        <span class="bg-top-content"></span>
        <article class="content">
            <section class="content-pages">
                <article class="title-pages">
                    <?php include('breadcrumb.php'); ?>
                </article>
                <article class="main-contact">
                    <?php $aContact = get_field('information_contact', $post->ID); ?>
                    <div class="contact-address">
                        <ul class="clearfix">
                            <?php $index = 0; ?>
                            <?php foreach ($aContact as $aInfoContact) : ?>
                                <li <?php if ($index % 2 == 0) echo "class='item'"; ?>>
                                    <?php echo $aInfoContact['_thong_tin_lien_he']; ?>
                                </li>
                                <?php $index++; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="google-map-contact clearfix">
                        <div class="chi-nhanh">
                            <ul>
                                <?php foreach ($aContact as $aMapContact) : ?>
                                    <?php #$imageContact = $aMapContact['_hinh_anh_ban_do']; ?>
                                    <?php $imageContact = $aMapContact['_hinh_anh_ban_do']; ?>
                                    <li>
                                        <?php echo $aMapContact['_ten_chi_nhanh']; ?>
                                        <input type="hidden" name="info" value="<?php echo $aMapContact['_hinh_anh_ban_do']; ?>" >
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="map-contact">
                            <?php echo do_shortcode($imageContact); ?>
                        </div>
                    </div>
                    <div class="form-contact">
                        <h1 class="your-contact"><?php _e("Ý kiến của bạn"); ?></h1>
                        <?php echo do_shortcode('[contact-form-7 id="26" title="Liên hệ"]'); ?>
                        <h2><span><?php _e("*"); ?></span> ﻿<?php _e("Mục bắt buộc nhập"); ?></h2>
                    </div>
                    <p class="thumb-map">
                        <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(); ?>
                        <?php endif; ?>
                    </p>
                </article>
            </section>
        </article>
        <span class="bg-bottom-content"></span>
    </aside> <!--end of aside.main-content-->
</section>

<?php get_sidebar('customer-gallery'); ?> 
<?php get_footer(); ?>