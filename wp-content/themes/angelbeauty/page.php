<?php
/**
 * The template for displaying all pages.
 */
get_header();
?>
<?php get_sidebar('banner-carousel'); ?> 

<section class="clearfix">
    <?php get_sidebar(); ?>
    <aside class="main-content">
        <span class="bg-top-content"></span>
        <article class="content">
            <section>
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post();?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </section>
        </article>
        <span class="bg-bottom-content"></span>
    </aside> <!--end of aside.main-content-->
</section>

<?php get_sidebar('customer-gallery'); ?> 
<?php get_footer(); ?>