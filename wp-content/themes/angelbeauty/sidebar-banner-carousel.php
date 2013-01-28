<aside id="banner">
    <ul class="slide-banner">
        <?php $iID = get_page_by_path('trang-chu')->ID; ?>
        <?php $iFlash = get_field('_flash_banner', $iID) ?>
        <li><a href="<?php echo home_url(); ?>"><embed width="963" height="370" menu="false" wmode="transparent" type="application/x-shockwave-flash" pluginspage="#" quality="high" src="<?php echo $iFlash; ?>"></a></li>
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