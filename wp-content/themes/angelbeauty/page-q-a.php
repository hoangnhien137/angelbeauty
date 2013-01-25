<?php

/*
 * Template Name: Question and Answer
 */
?>
<?php
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
                <article class="question-and-answer">
                    
<!--                    <form id="new_post"<?php #do_action('post_edit_form_tag'); ?> name="new_q_a" method="post" action="" class="">
                        <input name="post_title_type" id="post_title" class="post-title" type="text" required="required" placeholder="<?php _e('Title'); 
                          ?>" value=""/>
                        <div id="button-submit">
                            <input type="submit" class="upload" name="submit" value="Gui"/>
                            <input id="post_id" name="post_id" value="" type="hidden" />
                        </div>
                    </form>-->
                    
                    <?php
                    /*
                                              var_dump($_POST);
                    if ('POST' == $_SERVER['REQUEST_METHOD'] && $_POST['action'] == "new_q_a") {
                        $postData = array(
                            'post_title' => $_POST['post_title_type'],
                            'post_content' => '',
                            'post_status' => 'publish', // Choose: publish, preview, future, draft, etc.
                            'post_type' => 'question-and-answer'
                        );

                        wp_insert_post($postData);
                    }*/
                    ?>
                </article>
            </section>
        </article>
        <span class="bg-bottom-content"></span>
    </aside> <!--end of aside.main-content-->
</section>

<?php get_sidebar('customer-gallery'); ?> 
<?php get_footer(); ?>