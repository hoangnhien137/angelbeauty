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
                <article class="question-and-answer">
                    <div class="conten-q-a">
                        <ul class="list-q-a">
                            <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                            <?php $sAnswer = get_field('_answer', $post->ID); ?>
                            <?php if (!empty($sAnswer)) : ?>
                                <li class="q-a-<?php echo $post->ID; ?>"> 
                                    <div class="format-question">
                                        <?php the_content(); ?>
                                    </div>
                                    <div class="format-send clearfix">
                                        <p class="time-send">
                                            <label><?php _e("Gửi ngày: ") ?></label>
                                            <span><?php the_date('d/m/Y'); ?></span>
                                        </p>
                                        <p class="author-send">
                                            <label><?php _e("bởi: ") ?></label>
                                            <span><?php the_title(); ?></span>
                                        </p>
                                        <div class="email-send">
                                            <label style="padding-right: 5px;"><?php _e("Email:") ?></label>
                                            <?php the_excerpt(); ?>
                                        </div>
                                    </div>
                                    <div class="admin-answer">
                                        <?php echo $sAnswer; ?>
                                    </div>
                                </li>
                                <?php endif; ?>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="form-question">
                        <?php if (empty($_REQUEST['reload'])) : ?>
                        <form id="new_post"<?php do_action('post_edit_form_tag'); ?> name="new_q_a" method="post" action="" class="">
                            <?php endif; ?>
                            <p class="question-name clearfix">
                                <label><?php _e("Họ tên") ?></label>
                                <input name="post_name_type" class="post-name" type="text" required="required" placeholder="<?php _e('Name');?>" value=""/>
                            </p>
                            <p class="question-email clearfix">
                                <label><?php _e("Email") ?></label>
                                <input name="post_email_type" class="post-email" type="text" required="required" placeholder="<?php _e('Email');?>" value=""/>
                            </p>
                            <p class="question-message clearfix">
                                <label><?php _e("Câu hỏi") ?></label>
                                <textarea name="post_message_type" class="post-email" type="" required="required" placeholder="<?php _e('Message');?>" value=""/></textarea>
                            </p>
                            <div id="button-submit">
                                <input type="submit" class="upload" name="submit" value="Gửi"/>
                                <input id="post_id" name="post_id" value="" type="hidden" />
                            </div>
                            <?php wp_nonce_field('new-post'); ?>
                            <?php if (empty($_REQUEST['reload'])) : ?>
                        </form>
                        <?php endif; ?>
                    </div>
                </article>
            </section>
        </article>
        <span class="bg-bottom-content"></span>
    </aside> <!--end of aside.main-content-->
</section>

<?php get_sidebar('customer-gallery'); ?> 
<?php get_footer(); ?>