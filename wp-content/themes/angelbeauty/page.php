<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
get_header();
?>
<?php #get_sidebar('sidebar-name'); ?>
    <aside id="page-center">
        <?php the_post(); ?>

        <?php #get_template_part( 'content', 'page' ); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class( $post->post_name ); ?>>
            <h1 class="entry-title"><?php the_title(); ?></h1>

            <div class="entry-content">
                <?php the_content(); ?>
                <?php #wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'html5blp' ) . '</span>', 'after' => '</div>' ) ); ?>
            </div><!-- .entry-content -->
            
        </article><!-- #post-<?php the_ID(); ?> -->

        <?php #comments_template( '', true ); ?>
    </aside>
<?php #get_sidebar('sidebar-name'); ?>
<?php 
get_footer(); 
?>