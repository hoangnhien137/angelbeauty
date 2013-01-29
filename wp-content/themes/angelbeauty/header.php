<?php
/**
 * The Header for our theme.
 *
 */
global $sTemplateURL;
$sTemplateURL = get_template_directory_uri();

define('HTML_MODE', (!empty($_GET['htmlmode']) ? '' : '.min'));
?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js gt-ie8" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title><?php
/*
 * Print the <title> tag based on what is being viewed.
 */
global $page, $paged;

wp_title('|', true, 'right');

// Add the blog name.
bloginfo('name');

// Add the blog description for the home/front page.
$site_description = get_bloginfo('description', 'display');
if ($site_description && ( is_home() || is_front_page() ))
    echo " | {$site_description}";

// Add a page number if necessary:
if ($paged >= 2 || $page >= 2)
    echo ' | ' . sprintf(__('Page %s', 'twentyeleven'), max($paged, $page));
?></title>
        <meta name="description" content="" />
        <meta name="author" content="" />

        <meta name="viewport" content="width=device-width" />

<?php /* <link rel="shortcut icon" type="image/png" href="<?php echo $sTemplateURL; ?>/favicon.png" /> */ ?>
        <link rel="shortcut icon" href="<?php echo $sTemplateURL; ?>/favicon.ico" />

        <link rel="profile" href="http://gmpg.org/xfn/11" /> 
        
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo $sTemplateURL; ?>/css/jquery-ui.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo $sTemplateURL; ?>/css/jquery.timepicker.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo $sTemplateURL; ?>/css/colorbox.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>?v=1.1" />

<?php $class = !empty($_GET['debug']) ? ' debug' : '';
if ($class != '') :
    ?>
            <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/css/debug.css?v=1" />
        <?php endif; ?>

        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <script src="<?php echo get_bloginfo('stylesheet_directory'); ?>/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>

<?php
/* We add some JavaScript to pages with the comment form
 * to support sites with threaded comments (when in use).
 */
if (is_singular() && get_option('thread_comments'))
    wp_enqueue_script('comment-reply');

/* Always have wp_head() just before the closing </head>
 * tag of your theme, or you will break many plugins, which
 * generally use this hook to add elements to <head> such
 * as styles, scripts, and meta tags.
 */
wp_head();
?>
    </head>

    <body <?php body_class($class); ?>>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <div id="container">
            <header class="clearfix">
                <section class="container">
                    <!-- TODO: render content of header -->
                    <aside id="logo">
                        <div><embed width="850" height="200" menu="false" wmode="transparent" type="application/x-shockwave-flash" pluginspage="#" quality="high" src="<?php echo $sTemplateURL; ?>/images/intro2.swf"></div>
                    </aside> <!--end of aside#logo-->
                    <aside class="language clearfix">
                        <ul class="clearfix">
                            <?php language_selector_flags(); ?>
                        </ul>
                        
                    </aside>
                     
                    <?php
                    $menuHeader = array(
                        'theme_location' => 'header',
                        'container' => 'nav',
                        'container_id' => 'header-menu',
                        'items_wrap' => '</span><ul class="clearfix">%3$s</ul></span>'
                    );
                    wp_nav_menu($menuHeader);
                    ?> 
                    <!--end of nav#top-menu-->
                </section>
            </header><!-- end header -->

            <div id="main" role="main" class="clearfix">
                <section class="container">
                    <!-- TODO: render content of #main -->
