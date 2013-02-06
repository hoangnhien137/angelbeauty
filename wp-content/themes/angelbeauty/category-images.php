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
                  
                    
                    <ul class="view-list-post cat-images clearfix">
                        <?php $index = 0; ?>
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                        <li class="item-post-<?php echo $post->ID; ?> <?php if ($index % 3 == 0) echo 'no-margin'; ?>">
                            <?php $index++; ?>
                            <?php $sCustomThumb = get_field("_custom_thumbnail", $post->ID); ?>
                            <a href="<?php the_permalink(); ?>" class="thumbnail-post">
                                <div>
                                    <?php if (empty($sCustomThumb)) { ?>
                                        <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('thumb-view-post');
                                        }
                                        ?>
                                    <?php } else { ?>
                                    <img width="150" height="150" class="wp-post-image-<?php echo $post->ID; ?>" src="<?php echo $sCustomThumb; ?>">
                                    <?php } ?>
                                </div>
                                <h1><?php echo angel_trim_title_words(4); ?></h1>    
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