<?php
/**
 * The Template for displaying all single posts.
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
                
                <?php $aCat = get_the_category($post->ID); ?>
                <?php foreach ($aCat as $oCat) {
                        if (count($aCat) > 1) {
                            if (0 != $oCat->category_parent) {
                                $slug = $oCat->slug;
                                }
                        } else {
                            $slug = $oCat->slug;
                        }
                    } ?>
                
                
                
                <?php if ( 'hinh-anh' == $slug || 'images' == $slug ) { ?>
					<?php $aListImg = get_field('_hoat_dong_hinh_anh', $post->ID); ?>
					<?php $sOldAlbum = get_field('_old_album',$post->ID); ?>
                    <?php if (!empty($aListImg)): ?>

                        <article class="list-img-post">
							
                            <ul class="clearfix">
                                <?php $iCount = 0; ?>
                                <?php if (have_posts()) : ?>
                                <?php while (have_posts()) : the_post(); ?>
									<?php foreach ($aListImg as $listImg) : ?>
										<li <?php if ($iCount % 4 == 0) echo 'class="li-no-margin"'; ?>>
											<a class="show-img-post" href="<?php echo $listImg['_hinh_anh']; ?>"><img src="<?php echo $listImg['_hinh_anh']; ?>" alt="<?php the_title(); ?>" ></a>
										</li>
										<?php $iCount++; ?>
									<?php endforeach; ?>	
								<?php endwhile; ?>
								<?php endif; ?>
                            </ul>
                        </article>
					<?php elseif(!empty($sOldAlbum)): ?>
						<?php $aOldAlbum = json_decode($sOldAlbum); ?>
						<article class="list-img-post">
							<ul class="clearfix">
								<?php $iCount = 0; ?>
								<?php foreach($aOldAlbum as $sImgUrl ): ?>
                                <li <?php if ($iCount % 4 == 0) echo 'class="li-no-margin"'; ?>>
									<a class="show-img-post" href="<?php echo $sImgUrl; ?>">
									<!--
									<img src="<?php bloginfo('template_directory'); ?>/public/timthumb.php&src=<?php echo $sImgUrl; ?>&h=30&w=50" alt="img" >
									-->
									<img src="<?php bloginfo('stylesheet_directory'); ?>/includes/timthumb.php?src=<?php echo $sImgUrl?>&w=150&h=150" border="0" />
									
									</a>
								</li>
								<?php $iCount++; ?>
								<?php endforeach; ?>
							</ul>
                        </article>
					<?php endif; ?>
                
                <?php } elseif ('video' == $slug ) { ?>
                
                <?php $aListVideo = get_field('_link_of_video_clip', $post->ID); ?>
                    <?php if (!empty($aListVideo)) { ?>
                
                    <article class="list-video-post">
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                            <h1><?php the_title(); ?></h1>
                            <div class="show-video">
                                <?php echo $aListVideo; ?>
                            </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <h2><?php _e("Các video khác") ?></h2>
                        <?php $iIndex = 0; ?>
                        <ul class="cat-video-related clearfix">
                            <?php query_posts("orderby=DESC&showposts=-1&taxonomy=category&term={$slug}"); ?>
                            <?php if (have_posts()) : ?>
                                <?php while (have_posts()) : the_post(); ?>
                            <li class="item-post-<?php echo $post->ID; ?> <?php if ($iIndex % 4 == 0) echo 'no-margin'; ?>">
                                <?php $iIndex++; ?>
                                <a href="<?php the_permalink(); ?>" class="thumbnail-post">
                                    <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('thumb-view-post');
                                        }
                                        ?>
                                    <h1><?php the_title(); ?></h1>
                                </a>
                            </li>
                            <?php endwhile; ?>
                            <?php endif; ?>
                            <?php wp_reset_query(); ?>
                        </ul>
                     </article>
                    <?php } ?>
                
                <?php } else { ?>
                
                <article class="view-single-post">
                    <div class="addthis-social">
                        <!-- AddThis Button BEGIN -->
                        <div class="addthis_toolbox addthis_default_style ">
                            <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                            <a class="addthis_button_tweet"></a>
                            <a class="addthis_button_pinterest_pinit"></a>
                            <a class="addthis_counter addthis_pill_style"></a>
                        </div>
                        <!-- AddThis Button END -->
                    </div>
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </article>
                <article class="comment-single">
                    <?php comments_template(); ?>
                </article>
                <?php $aCat = get_the_category($post->ID); ?>
                <?php foreach ($aCat as $oCat) {
                        if (count($aCat) > 1) {
                            if (0 != $oCat->category_parent) {
                                $slug = $oCat->slug;
                                }
                        } else {
                            $slug = $oCat->slug;
                        }
                    } ?>
                <article class="dich-vu-lien-quan clearfix">
                    <h1><?php _e("Dịch vụ liên quan") ?></h1>
                    <ul class="list-dich-vu">
                        <?php query_posts("orderby=DESC&showposts=10&taxonomy=category&term={$slug}"); ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </li>
                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                    </ul>
                </article>
                
                <?php } ?>
                
                
            </section>
        </article>
        <span class="bg-bottom-content"></span>
    </aside> <!--end of aside.main-content-->
</section>

<?php get_sidebar('customer-gallery'); ?> 
<?php get_footer(); ?>