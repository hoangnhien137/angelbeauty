<?php
/*
 * Template Name: Page Call
 */
get_header();
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
                    
                </article>
            </section>
        </article>
        <span class="bg-bottom-content"></span>
    </aside> <!--end of aside.main-content-->
</section>

<?php get_sidebar('customer-gallery'); ?> 
<?php get_footer(); ?>