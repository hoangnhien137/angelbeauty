<?php
/**
 * The template for displaying Category Archive pages.
 */
?>
<?php
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
                <article class="view-all-cat">
                    <ul class="view-list-post">
                        <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <li class="item-post-<?php echo $post->ID; ?> clearfix">
                            <a href="<?php the_permalink(); ?>" class="thumbnail-post">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('thumb-view-post');
                                }
                                ?></a>
                            <div class="main-post">
                                <a href="<?php the_permalink(); ?>" class="title-post"><h2><?php the_title(); ?></h2></a>
                                <div class="content-post">
                                    <?php the_excerpt(); ?> 
                                </div>
                                <a href="<?php the_permalink(); ?>" class="more-link"><?php _e("Xem thêm"); ?></a>
                            </div>
                        </li> 
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                    <div class="pagingbox clearfix"> 
                        <?php
                        if (function_exists('wp_pagenavi'))
                            wp_pagenavi();
                        ?>
                </div> <!--end of div.pagingbox-->
                </article>
            </section>
        </article>
        <span class="bg-bottom-content"></span>
    </aside> <!--end of aside.main-content-->
</section>

<?php get_sidebar('customer-gallery'); ?> 
<?php get_footer(); ?>