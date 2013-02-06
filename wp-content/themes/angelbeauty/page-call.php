<?php
/*
 * Template Name: Page Call
 */
get_header();
global $post;
?>
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
                <article class="template-call">
                    <?php
                    echo do_shortcode('[contact-form-7 id="325" title="Đặt cuộc hẹn"]');
                    ?>
                </article>
                <article class="template-call-related">
                    <h2><?php _e("Danh sách dịch vụ"); ?></h2>
                    <?php if (ICL_LANGUAGE_CODE == 'en') { ?>
                    <ul>
                        <?php query_posts("orderby=DESC&showposts=1&taxonomy=category&term=aesthetic-embroidery-spray"); ?>
                        <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>" class="item-post-<?php echo $post->ID; ?>">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('thumb-post-related');
                                }
                                ?>
                                <h2><?php echo angel_trim_title_words(14); ?></h2>
                            </a>
                        </li>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                        
                        <?php query_posts("orderby=DESC&showposts=1&taxonomy=category&term=body-care"); ?>
                        <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>" class="item-post-<?php echo $post->ID; ?>">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('thumb-post-related');
                                }
                                ?>
                                <h2><?php echo angel_trim_title_words(14); ?></h2>
                            </a>
                        </li>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                        
                        <?php query_posts("orderby=DESC&showposts=1&taxonomy=category&term=facials"); ?>
                        <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>" class="item-post-<?php echo $post->ID; ?>">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('thumb-post-related');
                                }
                                ?>
                                <h2><?php echo angel_trim_title_words(14); ?></h2>
                            </a>
                        </li>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                        
                        <?php query_posts("orderby=DESC&showposts=1&taxonomy=category&term=permanent-hair-reduction"); ?>
                        <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>" class="item-post-<?php echo $post->ID; ?>">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('thumb-post-related');
                                }
                                ?>
                                <h2><?php echo angel_trim_title_words(14); ?></h2>
                            </a>
                        </li>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                    </ul>
                    <?php } else { ?>
                    <ul>
                        <?php query_posts("orderby=DESC&showposts=1&taxonomy=category&term=cham-soc-da-mat"); ?>
                        <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>" class="item-post-<?php echo $post->ID; ?>">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('thumb-post-related');
                                }
                                ?>
                                <h2><?php echo angel_trim_title_words(14); ?></h2>
                            </a>
                        </li>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                        
                        <?php query_posts("orderby=DESC&showposts=1&taxonomy=category&term=cham-soc-body"); ?>
                        <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>" class="item-post-<?php echo $post->ID; ?>">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('thumb-post-related');
                                }
                                ?>
                                <h2><?php echo angel_trim_title_words(14); ?></h2>
                            </a>
                        </li>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                        
                        <?php query_posts("orderby=DESC&showposts=1&taxonomy=category&term=phun-theu-tham-my"); ?>
                        <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>" class="item-post-<?php echo $post->ID; ?>">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('thumb-post-related');
                                }
                                ?>
                                <h2><?php echo angel_trim_title_words(14); ?></h2>
                            </a>
                        </li>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                        
                        <?php query_posts("orderby=DESC&showposts=1&taxonomy=category&term=triet-long-vinh-vien"); ?>
                        <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>" class="item-post-<?php echo $post->ID; ?>">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('thumb-post-related');
                                }
                                ?>
                                <h2><?php echo angel_trim_title_words(14); ?></h2>
                            </a>
                        </li>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                    </ul>
                    <?php } ?>
                </article>
            </section>
        </article>
        <span class="bg-bottom-content"></span>
    </aside> <!--end of aside.main-content-->
</section>

<?php get_sidebar('customer-gallery'); ?> 
<?php get_footer(); ?>