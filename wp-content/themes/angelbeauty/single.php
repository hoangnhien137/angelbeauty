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
                    </ul>
                </article>
            </section>
        </article>
        <span class="bg-bottom-content"></span>
    </aside> <!--end of aside.main-content-->
</section>

<?php get_sidebar('customer-gallery'); ?> 
<?php get_footer(); ?>