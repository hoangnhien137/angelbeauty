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
                    <?php $aCatImg = get_the_category(); ?>
                    <?php $aCatMayMoc = get_category_by_slug('cong-nghe-may-moc'); ?>
                    <?php $aCatMayMocEng = get_category_by_slug('machinery-technology'); ?>
                    
                    <?php
                    if (!empty($aCatMayMoc)) {
                        $iCatID = $aCatMayMoc->cat_ID;
                    } elseif (!empty($aCatMayMocEng)) {
                        $iCatID = $aCatMayMoc->cat_ID;
                    }
                    ?>
                    <?php foreach ($aCatImg as $oCatImg) {
                        $iCatParent = $oCatImg->category_parent;
                    } ?>
                    <?php if ( $iCatID == $iCatParent ) { ?>
                        
                    <ul class="view-list-post cat-cong-nghe clearfix">
                        <?php $index = 0; ?>
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                        <li class="item-post-<?php echo $post->ID; ?> <?php if ($index % 2 == 0) echo 'no-margin'; ?>">
                            <?php $index++; ?>
                            <?php $sCustomThumb3 = get_field("_custom_thumbnail", $post->ID); ?>
                            <a href="<?php the_permalink(); ?>" class="thumbnail-post">
                                <div>
                                    <?php if (empty($sCustomThumb3)) { ?>
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('thumb-view-post');
                                    }
                                    ?>
                                    <?php } else { ?>
                                    <img width="200" height="170" class="wp-post-image-<?php echo $post->ID; ?>" src="<?php echo $sCustomThumb3; ?>">
                                    <?php } ?>
                                </div>
                                <h1><?php echo angel_trim_title_words(8); ?></h1>    
                            </a>
                        </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                    
                    
                    <?php } else { ?>
                    
                        <ul class="view-list-post">
                            <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                            <li class="item-post-<?php echo $post->ID; ?> clearfix">
                                <?php $sCustomThumb4 = get_field("_custom_thumbnail", $post->ID); ?>
                                <a href="<?php the_permalink(); ?>" class="thumbnail-post">
                                    <?php if (empty($sCustomThumb4)) { ?>
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('thumb-view-post');
                                    }
                                    ?>
                                    <?php } else { ?>
                                    <img width="60" height="50" class="wp-post-image-<?php echo $post->ID; ?>" src="<?php echo $sCustomThumb4; ?>">
                                    <?php } ?>
                                </a>
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
                    
                    <?php } ?>
                    
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