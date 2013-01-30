<?php
/**
 * The template for displaying the footer.
 *
 */
if (!defined('HTML_MODE'))
    define('HTML_MODE', (!empty($_GET['htmlmode']) ? '.min' : ''));

global $sTemplateURL;
$sTemplateURL = get_template_directory_uri();
?>


</section>
</div><!-- end #main -->

<footer class="clearfix">
    <section class="container">
        <!-- TODO: render content of footer -->
        <h2 class="online">Online : 22/491120</h2>
        <article class="logo-footer">
            <ul class="clearfix">
                <li class="angelflowers"><a href="#">1</a></li>
                <li class="bacsilanda"><a href="#">1</a></li>
                <li class="angelbeauty"><a href="#">1</a></li>
                <li class="skindoctors"><a href="#">1</a></li>
            </ul>
        </article>
            <!-- AddThis Button BEGIN -->
            <div class="addthis_toolbox addthis_default_style ">
                <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
            </div>
            <!-- AddThis Button END -->
            <span class="coppy-right"> Designed by <a href="#">Angelbeauty</a>. All rights reserved.</span>
    </section>
    
</footer><!-- end footer -->
</div><!-- end #container -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery<?php echo HTML_MODE; ?>.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo $sTemplateURL; ?>/js/vendor/jquery-1.8.3<?php echo HTML_MODE; ?>.js"><\/script>')</script>

<!-- AddThis Button BEGIN -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-507e234541de584e"></script>
<!-- AddThis Button END -->
<!--
<script type="text/javascript" src="<?php echo $sTemplateURL; ?>/js/libs/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo $sTemplateURL; ?>/js/libs/jquery.timepicker.min.js"></script>
<script type="text/javascript" src="<?php echo $sTemplateURL; ?>/js/libs/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="<?php echo $sTemplateURL; ?>/js/libs/jquery.cycle.all.js"></script>
<script type="text/javascript" src="<?php echo $sTemplateURL; ?>/js/libs/jcarousellite_1.0.1.js"></script>
-->
<script type="text/javascript" src="<?php echo $sTemplateURL; ?>/js/libs/all-libs.min.js"></script>
<script type="text/javascript" src="<?php echo $sTemplateURL; ?>/js/plugins.js?v=1"></script>
<script type="text/javascript" src="<?php echo $sTemplateURL; ?>/js/script.js?v=2.2"></script>


<?php wp_footer(); ?>

<script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

</body>
</html>