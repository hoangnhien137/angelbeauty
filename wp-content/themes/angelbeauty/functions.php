<?php
/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
    $content_width = 584;

/**
 * Tell WordPress to run html5blp_setup() when the 'after_setup_theme' hook is run.
 */
add_action( 'after_setup_theme', 'html5blp_setup' );

if ( ! function_exists( 'html5blp_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * To override html5blp_setup() in a child theme, add your own html5blp_setup to your child theme's
 * functions.php file.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To style the visual editor.
 * @uses add_theme_support() To add support for post thumbnails, automatic feed links, and Post Formats.
 * @uses register_nav_menus() To add support for navigation menus.
 * @uses add_custom_background() To add support for a custom background.
 * @uses add_custom_image_header() To add support for a custom header.
 * @uses register_default_headers() To register the default custom header images provided with the theme.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since Twenty Eleven 1.0
 */
function html5blp_setup() {

    /* Make Twenty Eleven available for translation.
     * Translations can be added to the /languages/ directory.
     * If you're building a theme based on Twenty Eleven, use a find and replace
     * to change 'html5blp' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'html5blp', TEMPLATEPATH . '/languages' );

    $locale = get_locale();
    $locale_file = TEMPLATEPATH . "/languages/{$locale}.php";
    if ( is_readable( $locale_file ) )
        require_once( $locale_file );

    // This theme styles the visual editor with editor-style.css to match the theme style.
    add_editor_style();

    // Load up our theme options page and related code.
    #require( dirname( __FILE__ ) . '/inc/theme-options.php' );

    // Grab Twenty Eleven's Ephemera widget.
    require( dirname( __FILE__ ) . '/inc/widgets.php' );

    // Add default posts and comments RSS feed links to <head>.
    add_theme_support( 'automatic-feed-links' );

    // This theme uses wp_nav_menu() in one location.
    #register_nav_menu( 'primary', __( 'Primary Menu', 'html5blp' ) );

    // Add support for a variety of post formats
    #add_theme_support( 'post-formats', array( 'aside', 'link', 'gallery', 'status', 'quote', 'image' ) );

    // Add support for custom backgrounds
    #add_custom_background();

    // This theme uses Featured Images (also known as post thumbnails) for per-post/per-page Custom Header images
    add_theme_support( 'post-thumbnails' );

    // The next four constants set how Twenty Eleven supports custom headers.

    // The default header text color
    define( 'HEADER_TEXTCOLOR', '000' );

    // By leaving empty, we allow for random image rotation.
    define( 'HEADER_IMAGE', '' );

    // The height and width of your custom header.
    // Add a filter to html5blp_header_image_width and html5blp_header_image_height to change these values.
    define( 'HEADER_IMAGE_WIDTH', apply_filters( 'html5blp_header_image_width', 960 ) );
    define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'html5blp_header_image_height', 300 ) );

    #set_post_thumbnail_size( 290, 295, true );
    #add_image_size( 'slider-530x400', 530, 400, true );
	
	/* Register nav menus using register_nav_menu() or register_nav_menus() here. */
	#function base_theme_register_menus() {
		#register_nav_menu( 'top-menu', __( 'Top Menu', 'html5blp' ) );
	#}
	/* Add your nav menus function to the 'init' action hook. */
	#add_action( 'init', 'base_theme_register_menus' );
	
}
endif; // html5blp_setup

if ( ! function_exists( 'html5blp_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @since Twenty Eleven 1.0
 */
function html5blp_header_style() {

    // If no custom options for text are set, let's bail
    // get_header_textcolor() options: HEADER_TEXTCOLOR is default, hide text (returns 'blank') or any hex value
    if ( HEADER_TEXTCOLOR == get_header_textcolor() )
        return;
    // If we get this far, we have custom styles. Let's do this.
    ?>
    <style type="text/css">
    <?php
        // Has the text been hidden?
        if ( 'blank' == get_header_textcolor() ) :
    ?>
        #site-title,
        #site-description {
            position: absolute !important;
            clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
            clip: rect(1px, 1px, 1px, 1px);
        }
    <?php
        // If the user has set a custom color for the text use that
        else :
    ?>
        #site-title a,
        #site-description {
            color: #<?php echo get_header_textcolor(); ?> !important;
        }
    <?php endif; ?>
    </style>
    <?php
}
endif; // html5blp_header_style

if ( ! function_exists( 'html5blp_admin_header_style' ) ) :
/**
 * Styles the header image displayed on the Appearance > Header admin panel.
 *
 * Referenced via add_custom_image_header() in html5blp_setup().
 *
 * @since Twenty Eleven 1.0
 */
function html5blp_admin_header_style() {
?>
    <style type="text/css">
    .appearance_page_custom-header #headimg {
        border: none;
    }
    #headimg h1,
    #desc {
        font-family: "Helvetica Neue", Arial, Helvetica, "Nimbus Sans L", sans-serif;
    }
    #headimg h1 {
        margin: 0;
    }
    #headimg h1 a {
        font-size: 32px;
        line-height: 36px;
        text-decoration: none;
    }
    #desc {
        font-size: 14px;
        line-height: 23px;
        padding: 0 0 3em;
    }
    <?php
        // If the user has set a custom color for the text use that
        if ( get_header_textcolor() != HEADER_TEXTCOLOR ) :
    ?>
        #site-title a,
        #site-description {
            color: #<?php echo get_header_textcolor(); ?>;
        }
    <?php endif; ?>
    #headimg img {
        max-width: 1000px;
        height: auto;
        width: 100%;
    }
    </style>
<?php
}
endif; // html5blp_admin_header_style

if ( ! function_exists( 'html5blp_admin_header_image' ) ) :
/**
 * Custom header image markup displayed on the Appearance > Header admin panel.
 *
 * Referenced via add_custom_image_header() in html5blp_setup().
 *
 * @since Twenty Eleven 1.0
 */
function html5blp_admin_header_image() { ?>
    <div id="headimg">
        <?php
        if ( 'blank' == get_theme_mod( 'header_textcolor', HEADER_TEXTCOLOR ) || '' == get_theme_mod( 'header_textcolor', HEADER_TEXTCOLOR ) )
            $style = ' style="display:none;"';
        else
            $style = ' style="color:#' . get_theme_mod( 'header_textcolor', HEADER_TEXTCOLOR ) . ';"';
        ?>
        <h1><a id="name"<?php echo $style; ?> onclick="return false;" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
        <div id="desc"<?php echo $style; ?>><?php bloginfo( 'description' ); ?></div>
        <?php $header_image = get_header_image();
        if ( ! empty( $header_image ) ) : ?>
            <img src="<?php echo esc_url( $header_image ); ?>" alt="" />
        <?php endif; ?>
    </div>
<?php }
endif; // html5blp_admin_header_image

/**
 * Sets the post excerpt length to 40 words.
 *
 * To override this length in a child theme, remove the filter and add your own
 * function tied to the excerpt_length filter hook.
 */
function html5blp_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'html5blp_excerpt_length' );

/**
 * Returns a "Continue Reading" link for excerpts
 */
function html5blp_continue_reading_link() {
    #return ' <a href="'. esc_url( get_permalink() ) . '">' . __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'html5blp' ) . '</a>';
    return '';
}

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and html5blp_continue_reading_link().
 *
 * To override this in a child theme, remove the filter and add your own
 * function tied to the excerpt_more filter hook.
 */
function html5blp_auto_excerpt_more( $more ) {
    return ' &hellip;' . html5blp_continue_reading_link();
}
add_filter( 'excerpt_more', 'html5blp_auto_excerpt_more' );

/**
 * Adds a pretty "Continue Reading" link to custom post excerpts.
 *
 * To override this link in a child theme, remove the filter and add your own
 * function tied to the get_the_excerpt filter hook.
 */
function html5blp_custom_excerpt_more( $output ) {
    if ( has_excerpt() && ! is_attachment() ) {
        $output .= html5blp_continue_reading_link();
    }
    return $output;
}
add_filter( 'get_the_excerpt', 'html5blp_custom_excerpt_more' );

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 */
function html5blp_page_menu_args( $args ) {
    $args['show_home'] = true;
    return $args;
}
add_filter( 'wp_page_menu_args', 'html5blp_page_menu_args' );

/**
 * Register our sidebars and widgetized areas. Also register the default Epherma widget.
 *
 * @since Twenty Eleven 1.0
 */
function html5blp_widgets_init() {

    register_widget( 'Twenty_Eleven_Ephemera_Widget' );
    
    
}
add_action( 'widgets_init', 'html5blp_widgets_init' );

/**
 * Display navigation to next/previous pages when applicable
 */
function html5blp_content_nav( $nav_id ) {
    global $wp_query;

    if ( $wp_query->max_num_pages > 1 ) : ?>
        <nav id="<?php echo $nav_id; ?>">
            <h3 class="assistive-text"><?php _e( 'Post navigation', 'html5blp' ); ?></h3>
            <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'html5blp' ) ); ?></div>
            <div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'html5blp' ) ); ?></div>
        </nav><!-- #nav-above -->
    <?php endif;
}

/**
 * Return the URL for the first link found in the post content.
 *
 * @since Twenty Eleven 1.0
 * @return string|bool URL or false when no link is present.
 */
function html5blp_url_grabber() {
    if ( ! preg_match( '/<a\s[^>]*?href=[\'"](.+?)[\'"]/is', get_the_content(), $matches ) )
        return false;

    return esc_url_raw( $matches[1] );
}

if ( ! function_exists( 'html5blp_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 * Create your own html5blp_posted_on to override in a child theme
 *
 * @since Twenty Eleven 1.0
 */
function html5blp_posted_on() {
    printf( __( '<span class="sep">Posted on </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a><span class="by-author"> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>', 'html5blp' ),
        esc_url( get_permalink() ),
        esc_attr( get_the_time() ),
        esc_attr( get_the_date( 'c' ) ),
        esc_html( get_the_date() ),
        esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
        sprintf( esc_attr__( 'View all posts by %s', 'html5blp' ), get_the_author() ),
        esc_html( get_the_author() )
    );
}
endif;

/**
 * Adds two classes to the array of body classes.
 * The first is if the site has only had one author with published posts.
 * The second is if a singular post being displayed
 *
 * @since Twenty Eleven 1.0
 */
function html5blp_body_classes( $classes ) {

    if ( ! is_multi_author() ) {
        $classes[] = 'single-author';
    }

    if ( is_singular() && ! is_home() && ! is_page_template( 'showcase.php' ) && ! is_page_template( 'sidebar-page.php' ) )
        $classes[] = 'singular';
    
    if( !empty($_SERVER['HTTP_USER_AGENT']) ) {
        $userAgent = $_SERVER['HTTP_USER_AGENT'];
        if(preg_match('#Gecko\/(\d+) (Firefox)\/(\d+)#si', $userAgent, $match)) {
            $classes[] = "ff ff{$match[3]}";
        } else if(preg_match('#(Chrome)\/(\d+)#si', $userAgent, $match)) {
            $classes[] = "chr chr{$match[2]}";
        } else if(preg_match('#(Safari)\/(\d+)#si', $userAgent, $match)) {
            $classes[] = "sf sf{$match[2]}";
        } else if(preg_match('#(MSIE) (\d)#si', $userAgent, $match)) {
            $classes[] = "ie ie{$match[2]}";
        } else if(preg_match('#(Opera)(.*)(Version)\/(\d+)#si', $userAgent, $match)) {
            $classes[] = "op op{$match[4]}";
        }
    }
    
    return $classes;
}
add_filter( 'body_class', 'html5blp_body_classes' );

/**
 * Mr. Henry Nguyen: Begin add function to move all javascript from header to footer
 */
function wp_head_start() {
    @ob_start();
}
add_action('wp_head', 'wp_head_start', 0);

function wp_head_end() {
    $html = @ob_get_clean();
    $GLOBAL['wp_head_js'] = array();
    if(preg_match_all('#\<script(.*)\>\<\/script\>#si', $html, $GLOBAL['wp_head_js']) ) {
        $html = preg_replace('#\<script(.*)\>\<\/script\>#si', '', $html);
    }
    echo $html;
}
add_action('wp_head', 'wp_head_end', 9999);

function move_javascript_to_wp_footer() {
    if(empty($GLOBAL['wp_head_js']) || empty($GLOBAL['wp_head_js'][0])) return;
    $jquery = "<script type='text/javascript' src='".get_option('siteurl')."/wp-includes/js/jquery/jquery.js?ver=1.6.1'></script>";
    
    $js = array('');
    foreach($GLOBAL['wp_head_js'][0] as $k=>$v) {
        $js = array_merge($js, explode("</script>\n", $v));
    }
    $jquery = '';
    foreach($js as $k=>$v) {
        if(preg_match('#jquery\/jquery\.js#si', $v, $m)) {
            $jquery = $js[$k];
            unset($js[$k]);
        } else {
            $js[$k] .= "</script>";
        }
    }
    echo implode("\n", $js);
}
add_action('wp_footer', 'move_javascript_to_wp_footer', 9999);

/**
 * Mr. Henry Nguyen: End add function to move all javascript from header to footer
 */


function disable_browser_upgrade_warning() {
    remove_meta_box( 'dashboard_browser_nag', 'dashboard', 'normal' );
    remove_action( 'activity_box_end', 'wp_dashboard_quota' );
}


function disable_browser_notice($notice, $response) {
    return '';
}


function dump($mix, $exit=true) {
    echo '<pre>';
    var_dump($mix);
    echo '<pre>';
    if( $exit ) exit;
}

function html5blp_remove_dashboard_widgets() {
 	global $wp_meta_boxes;

	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);	
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    //unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    //unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
}
add_action('wp_dashboard_setup', 'html5blp_remove_dashboard_widgets' );

 
function filter_after_admin_init() {
    remove_action('admin_notices', 'akismet_warning');
    remove_action('admin_notices', 'aioseop_activation_notice');
    remove_action('rightnow_end', 'akismet_rightnow');
    remove_action('rightnow_end', 'typepadantispam_rightnow');
    remove_action ('load-update-core.php', 'wp_update_plugins');
    add_filter ('pre_site_transient_update_plugins', create_function ('$a', "return null;"));
    add_filter( 'browse-happy-notice', 'disable_browser_notice', 1000, 2);
    
    add_action( 'wp_dashboard_setup', 'disable_browser_upgrade_warning' );
    
    remove_action( 'admin_notices', 'update_nag', 3);
    remove_action( 'admin_notices', 'maintenance_nag' );
    #dump($GLOBALS['wp_filter']['admin_notices']);
}
add_action( 'admin_init', 'filter_after_admin_init');

function wp_trim_words_length($sText, $iNumberWords, $sMore, $iLength = -1) {
    $sText = wp_trim_words($sText, $iNumberWords, '');
    if( $iLength > 0 ) { 
        $fnLen = 'strlen';
        if( function_exists('mb_strlen') )
            $fnLen = 'mb_strlen';
        while( $fnLen($sText) > $iLength && $iNumberWords > 0 ) {
            $iNumberWords --;
            $sText = wp_trim_words($sText, $iNumberWords, '');
        }
        $sText .= $sMore;
    } else {
        $sText .= $sMore;
    }
    return $sText;
}



if (!function_exists('html5blp_comment')) :

    function html5blp_comment($comment, $args, $depth) {
        $GLOBALS['comment'] = $comment;
        switch ($comment->comment_type) :
            case 'pingback' :
            case 'trackback' :
    ?>
                    <li class="post pingback">
                        <p><?php _e('Pingback:', 'html5blp'); ?> <?php comment_author_link(); ?><?php edit_comment_link(__('Edit', 'html5blp'), '<span class="edit-link">', '</span>'); ?></p>
                <?php
                break;
            default :
                ?>
                    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
                        <article id="comment-<?php comment_ID(); ?>" class="comment">
                            <footer class="comment-meta">
                                <div class="comment-author vcard">
                <?php
                $avatar_size = 68;
                if ('0' != $comment->comment_parent)
                    $avatar_size = 39;

                echo get_avatar($comment, $avatar_size);

                /* translators: 1: comment author, 2: date and time */
                printf(__('%1$s on %2$s <span class="says">said:</span>', 'html5blp'), sprintf('<span class="fn">%s</span>', get_comment_author_link()), sprintf('<a href="%1$s"><time pubdate datetime="%2$s">%3$s</time></a>', esc_url(get_comment_link($comment->comment_ID)), get_comment_time('c'),
                                /* translators: 1: date, 2: time */ sprintf(__('%1$s at %2$s', 'html5blp'), get_comment_date(), get_comment_time())
                        )
                );
                ?>
                                        
                <?php edit_comment_link(__('Edit', 'html5blp'), '<span class="edit-link">', '</span>'); ?>
                                </div><!-- .comment-author .vcard -->
                                    
                <?php if ($comment->comment_approved == '0') : ?>
                                        <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.', 'html5blp'); ?></em>
                                        <br />
                <?php endif; ?>
                                    
                            </footer>
                                
                            <div class="comment-content"><?php comment_text(); ?></div>
                                
                            <div class="reply">
                <?php comment_reply_link(array_merge($args, array('reply_text' => __('Reply <span>&darr;</span>', 'html5blp'), 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
                            </div><!-- .reply -->
                        </article><!-- #comment-## -->
                            
                <?php
                break;
        endswitch;
    }

endif; // ends check for html5blp_comment()


function handle_login_logo_url() { 
    return get_bloginfo( 'url' ); 
}
add_filter( 'login_headerurl', 'handle_login_logo_url' );
 
function handle_login_logo_url_title() {
    return 'Angel Beauty';
}
add_filter( 'login_headertitle', 'handle_login_logo_url_title' );

function handle_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_bloginfo( 'template_directory' ) ?>/images/logo.png);
            background-size: 451px 200px;
            height: 200px;
        }
    </style>
<?php }

add_action( 'login_enqueue_scripts', 'handle_login_logo' );

register_nav_menus(array(
    'header' => 'Menu Header'
));


add_filter( 'woocommerce_currencies', 'add_my_currency' );
 
function add_my_currency( $currencies ) {
     $currencies['Đồng'] = __( 'Viet Nam Dong (VND)', 'woocommerce' );
     return $currencies;
}
 
add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);
 
function add_my_currency_symbol( $currency_symbol, $currency ) {
     switch( $currency ) {
          case 'Đồng': $currency_symbol = ' VND'; break;
     }
     return $currency_symbol;
}

if (function_exists('add_image_size')) {
    add_image_size('thumb-products', 201, 250, false); //(no cropped)
}


