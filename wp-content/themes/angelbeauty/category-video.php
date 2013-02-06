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
                    
                    
                    <?php $iIndex = 0; ?>
                    <ul class="view-list-post cat-video clearfix">
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                        <li class="item-post-<?php echo $post->ID; ?> <?php if ($iIndex % 4 == 0) echo 'no-margin'; ?>">
                            <?php $iIndex++; ?>
                            <?php $sCustomThumb2 = get_field("_custom_thumbnail", $post->ID); ?>
                            <a href="<?php the_permalink(); ?>" class="thumbnail-post">
                                <?php if (empty($sCustomThumb2)) { ?>
                                <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('thumb-view-post');
                                    }
                                    ?>
                                <?php } else { ?>
                                <img width="145" height="150" class="wp-post-image-<?php echo $post->ID; ?>" src="<?php echo $sCustomThumb2; ?>">
                                <?php } ?>
                                <h1><?php the_title(); ?></h1>
                            </a>
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