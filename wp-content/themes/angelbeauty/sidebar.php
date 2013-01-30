<?php
/**
 * The Sidebar containing the main widget area.
 */
global $sTemplateURL, $post;
?>
<aside class="side-bar-left">
    <span class="bg-top-sidebar"></span>
    <article class="cat-spa">
        <?php $catSpa = get_category_by_slug('spa'); ?>
        <h1><a href="<?php echo get_category_link( $catSpa->cat_ID ); ?>"><?php echo $catSpa->name; ?></a></h1>
    </article>
    <article class="cat-dichvu">
        <h1><?php _e("Dòch vuï ñieàu trò");?></h1>
        <?php
        $catDichVu = array(
            'theme_location' => 'catdichvu',
            'items_wrap' => '</span><ul class="categories">%3$s</ul></span>'
        );
        wp_nav_menu($catDichVu);
        ?> 
    </article>
    <article class="cat-giaiphau">
        <h1><?php _e("Giaûi phaåu thaåm myõ");?></h1>
        <?php
        $catGiaiPhau = array(
            'theme_location' => 'catgiaiphau',
            'items_wrap' => '</span><ul class="categories">%3$s</ul></span>'
        );
        wp_nav_menu($catGiaiPhau);
        ?>
    </article>
    <article class="cat-congnghe">
        <h1><?php _e("Coâng ngheä maùy moùc");?></h1>
        <?php
        $catCongNghe = array(
            'theme_location' => 'catcongnghe',
            'items_wrap' => '</span><ul class="categories">%3$s</ul></span>'
        );
        wp_nav_menu($catCongNghe);
        ?>
    </article>
    <article class="cat-hotro">
        <h1><?php _e("Hoã trôï tröïc tuyeán");?></h1>
        <ul class="info-cantact">
            <li class="yahoo">
                <a href="ymsgr:sendim?thienthansacdep196"><?php _e("Tư vấn viên");?></a>
            </li>
            <li class="skype">
                <a href="skype:thienthansacdep196?chat"><?php _e("Tư vấn viên");?></a>
            </li>
        </ul>

    </article>
    <article class="cat-datcuochen">
        <img src="<?php echo $sTemplateURL; ?>/images/icon_phone.png">
        <?php
        global $wpdb;
        $idCall = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = 'call' and post_type='page'");
        $postCall = get_post($idCall);
        $postCallLink = $postCall->guid;
        ?>
        <a href="<?php echo $postCallLink; ?>"><?php _e("Ñaët cuoäc heïn");?></a>
    </article>
    <article class="cat-thoitrang">
        <h1><?php _e("Thời trang"); ?></h1>
        <ul class="thoitrang">
            
            <?php query_posts("orderby=DESC&showposts=5&taxonomy=category&term=thoi-trang"); ?>
            <?php while (have_posts()) : the_post(); ?>
            <li class="post-item-<?php echo $post->ID; ?>">
                <a href="<?php the_permalink(); ?>">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('thumb-cat-mini');
                        }
                        ?></a>
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            </li>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>

        </ul>
    </article>
    <article class="cat-lamdep">
        <h1><?php _e("Làm đẹp"); ?></h1>
        <ul class="lamdep">
            <?php query_posts("orderby=DESC&showposts=5&taxonomy=category&term=lam-dep"); ?>
            <?php while (have_posts()) : the_post(); ?>
            <li class="post-item-<?php echo $post->ID; ?>">
                <a href="<?php the_permalink(); ?>">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('thumb-cat-mini');
                        }
                        ?></a>
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            </li>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>

        </ul>
    </article>
    <article class="cat-hoidap">
        <h1><?php _e("Hỏi đáp"); ?></h1>
        <ul class="hoidap">
            <li class="post-item">
                <a href="#">tri mun tai tham my vien em nghe noi la khong het se hoan tien, </a>
            </li>
            <li class="post-item">
                <a href="#">tri mun tai tham my vien em nghe noi la khong het se hoan tien, </a>
            </li>
            <li class="post-item">
                <a href="#">tri mun tai tham my vien em nghe noi la khong het se hoan tien, </a>
            </li>
            <li class="post-item">
                <a href="#">tri mun tai tham my vien em nghe noi la khong het se hoan tien, </a>
            </li>
            <li class="post-item">
                <a href="#">tri mun tai tham my vien em nghe noi la khong het se hoan tien, </a>
            </li>
            <li class="post-item">
                <a href="#">tri mun tai tham my vien em nghe noi la khong het se hoan tien, </a>
            </li>
        </ul>
    </article>
    <span class="bg-bottom-sidebar"></span>
</aside> <!--end of aside.side-bar-left-->