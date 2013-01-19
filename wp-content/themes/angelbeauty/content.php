<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <?php if ( is_sticky() ) : ?>
                <hgroup>
                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'html5blp' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                    <h3 class="entry-format"><?php _e( 'Featured', 'html5blp' ); ?></h3>
                </hgroup>
            <?php else : ?>
            <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'html5blp' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
            <?php endif; ?>

            <?php if ( 'post' == get_post_type() ) : ?>
            <div class="entry-meta">
                <?php html5blp_posted_on(); ?>
            </div><!-- .entry-meta -->
            <?php endif; ?>

            <?php if ( comments_open() && ! post_password_required() ) : ?>
            <div class="comments-link">
                <?php comments_popup_link( '<span class="leave-reply">' . __( 'Reply', 'html5blp' ) . '</span>', _x( '1', 'comments number', 'html5blp' ), _x( '%', 'comments number', 'html5blp' ) ); ?>
            </div>
            <?php endif; ?>
        </header><!-- .entry-header -->

        <?php if ( is_search() ) : // Only display Excerpts for Search ?>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div><!-- .entry-summary -->
        <?php else : ?>
        <div class="entry-content">
            <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'html5blp' ) ); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'html5blp' ) . '</span>', 'after' => '</div>' ) ); ?>
        </div><!-- .entry-content -->
        <?php endif; ?>

        <footer class="entry-meta">
            <?php $show_sep = false; ?>
            <?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
            <?php
                /* translators: used between list items, there is a space after the comma */
                $categories_list = get_the_category_list( __( ', ', 'html5blp' ) );
                if ( $categories_list ):
            ?>
            <span class="cat-links">
                <?php printf( __( '<span class="%1$s">Posted in</span> %2$s', 'html5blp' ), 'entry-utility-prep entry-utility-prep-cat-links', $categories_list );
                $show_sep = true; ?>
            </span>
            <?php endif; // End if categories ?>
            <?php
                /* translators: used between list items, there is a space after the comma */
                $tags_list = get_the_tag_list( '', __( ', ', 'html5blp' ) );
                if ( $tags_list ):
                if ( $show_sep ) : ?>
            <span class="sep"> | </span>
                <?php endif; // End if $show_sep ?>
            <span class="tag-links">
                <?php printf( __( '<span class="%1$s">Tagged</span> %2$s', 'html5blp' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list );
                $show_sep = true; ?>
            </span>
            <?php endif; // End if $tags_list ?>
            <?php endif; // End if 'post' == get_post_type() ?>

            <?php if ( comments_open() ) : ?>
            <?php if ( $show_sep ) : ?>
            <span class="sep"> | </span>
            <?php endif; // End if $show_sep ?>
            <span class="comments-link"><?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'html5blp' ) . '</span>', __( '<b>1</b> Reply', 'html5blp' ), __( '<b>%</b> Replies', 'html5blp' ) ); ?></span>
            <?php endif; // End if comments_open() ?>

            <?php edit_post_link( __( 'Edit', 'html5blp' ), '<span class="edit-link">', '</span>' ); ?>
        </footer><!-- #entry-meta -->
    </article><!-- #post-<?php the_ID(); ?> -->
