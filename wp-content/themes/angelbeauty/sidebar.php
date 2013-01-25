<?php
/**
 * The Sidebar containing the main widget area.
 */
global $sTemplateURL;
?>
<aside class="side-bar-left">
    <span class="bg-top-sidebar"></span>
    <article class="cat-spa">
        <h1><a href="#">Spa</a></h1>
    </article>
    <article class="cat-dichvu">
        <h1><?php _e("Dịch vụ điều trị");?></h1>
        
        <?php
        $catDichVu = array(
            'theme_location' => 'catdichvu',
            'items_wrap' => '</span><ul class="categories">%3$s</ul></span>'
        );
        wp_nav_menu($catDichVu);
        ?> 
    </article>
    <article class="cat-giaiphau">
        <h1>Giai phau tham my</h1>
        <ul class="categories">
            <li class="cat-item">
                <a href="#">Phau thuat mui</a>
            </li>
            <li class="cat-item">
                <a href="#">Nang nguc</a>
            </li>
            <li class="cat-item">
                <a href="#">Hut mo</a>
            </li>
            <li class="cat-item">
                <a href="#">Tham my mat</a>
            </li>
            <li class="cat-item">
                <a href="#">Phau thuat khuon mat</a>
            </li>
        </ul>
    </article>
    <article class="cat-congnghe">
        <h1>Cong nghe may moc</h1>
        <ul class="categories">
            <li class="cat-item">
                <a href="#">Cong nghe moi</a>
            </li>
            <li class="cat-item">
                <a href="#">RF hien dai</a>
            </li>
            <li class="cat-item">
                <a href="#">Dien tro SH</a>
            </li>
            <li class="cat-item">
                <a href="#">Phan tich da</a>
            </li>
            <li class="cat-item">
                <a href="#">Laser</a>
            </li>
            <li class="cat-item">
                <a href="#">Sieu am</a>
            </li>
            <li class="cat-item">
                <a href="#">Song dien tu</a>
            </li>
            <li class="cat-item">
                <a href="#">Anh sang</a>
            </li>
            <li class="cat-item">
                <a href="#">Oxy gen</a>
            </li>
        </ul>
    </article>
    <article class="cat-hotro">
        <h1>Ho tro truc tuyen</h1>
        <ul class="info-cantact">
            <li class="yahoo">
                <a href="ymsgr:sendim?thienthansacdep196">Tu van vien</a>
            </li>
            <li class="skype">
                <a href="skype:thienthansacdep196?chat">Tu van vien</a>
            </li>
        </ul>

    </article>
    <article class="cat-datcuochen">
        <img src="<?php echo $sTemplateURL; ?>/images/icon_phone.png">
        <h1>Dat cuoc hen</h1>
    </article>
    <article class="cat-thoitrang">
        <h1>Thoi trang</h1>
        <ul class="thoitrang">
            <li class="post-item">
                <a href="#"><img src="<?php echo $sTemplateURL; ?>/images/thumb.jpg"></a>
                <h1><a href="#">Cong nghe moi</a></h1>
            </li>
            <li class="post-item">
                <a href="#"><img src="<?php echo $sTemplateURL; ?>/images/thumb.jpg"></a>
                <h1><a href="#">Cong nghe moi</a></h1>
            </li>
            <li class="post-item">
                <a href="#"><img src="<?php echo $sTemplateURL; ?>/images/thumb.jpg"></a>
                <h1><a href="#">Cong nghe moi</a></h1>
            </li>
            <li class="post-item">
                <a href="#"><img src="<?php echo $sTemplateURL; ?>/images/thumb.jpg"></a>
                <h1><a href="#">Cong nghe moi Cong nghe moi</a></h1>
            </li>
            <li class="post-item">
                <a href="#"><img src="<?php echo $sTemplateURL; ?>/images/thumb.jpg"></a>
                <h1><a href="#">Cong nghe moi</a></h1>
            </li>

        </ul>
    </article>
    <article class="cat-lamdep">
        <h1>Lam dep</h1>
        <ul class="lamdep">
            <li class="post-item">
                <a href="#"><img src="<?php echo $sTemplateURL; ?>/images/thumb.jpg"></a>
                <h1><a href="#">Cong nghe moi</a></h1>
            </li>
            <li class="post-item">
                <a href="#"><img src="<?php echo $sTemplateURL; ?>/images/thumb.jpg"></a>
                <h1><a href="#">Cong nghe moi</a></h1>
            </li>
            <li class="post-item">
                <a href="#"><img src="<?php echo $sTemplateURL; ?>/images/thumb.jpg"></a>
                <h1><a href="#">Cong nghe moi</a></h1>
            </li>
            <li class="post-item">
                <a href="#"><img src="<?php echo $sTemplateURL; ?>/images/thumb.jpg"></a>
                <h1><a href="#">Cong nghe moi</a></h1>
            </li>
            <li class="post-item">
                <a href="#"><img src="<?php echo $sTemplateURL; ?>/images/thumb.jpg"></a>
                <h1><a href="#">Cong nghe moi</a></h1>
            </li>

        </ul>
    </article>
    <article class="cat-hoidap">
        <h1>Hoi dap</h1>
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