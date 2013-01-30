<aside id="banner">
    <ul id="flash-to-banner" class="slide-banner">
        <?php $iID = get_page_by_path('trang-chu')->ID; ?>
        <?php $aFlash = get_field('_start_banner', $iID) ?>
        <?php foreach ($aFlash as $aFieldBanner) : ?>
        <li><a href="<?php echo home_url(); ?>"><img width="963" height="370" alt="Angel Beauty" src="<?php echo $aFieldBanner['_images_banner']; ?>" ></a></li>
        <?php endforeach; ?>
    </ul>
</aside> <!--end of aside#banner-->

<aside class="gallery-carousel">
    <ul class="galery clearfix">
        <?php $index = 0; ?>
        <?php $aGalleryTop = get_field('_gallery_images_top', $iID) ?>
        <?php foreach ($aGalleryTop as $aField) : ?>
        <?php $index++; ?>
        <li>
            <div id="zoom-<?php echo $index; ?>" class="pics">
                <?php foreach ($aField as $aImg) : ?>
                <?php foreach ($aImg as $aImages) : ?>
                <img style="width: 177px; height: 184px;" src="<?php echo $aImages['_images']; ?>">
                <?php endforeach; ?>
                <?php endforeach; ?>
            </div>
        </li>
        <?php endforeach; ?>
        
    </ul>
</aside> <!-- end of aside.gallery-carousel -->