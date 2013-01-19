<?php
/**
 * The Template for displaying all single posts.
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
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1 class="entry-title"><?php the_title(); ?></h1>

            <div class="entry-content">
                <?php the_content(); ?>
                <span class="clear"></span>
            </div><!-- .entry-content -->
        </article><!-- #post-<?php the_ID(); ?> -->

        <?php #comments_template( '', true ); ?>
    </aside>
<?php #get_sidebar('sidebar-name'); ?>
<?php 
get_footer(); 
?>