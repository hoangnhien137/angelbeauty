/* 
 * Author: Mr Rony (LIKIPE DIGITAL).
*/

function mycarousel_initCallback(carousel) {
    jQuery('#mycarousel-next').bind('click', function() {
        carousel.next();
        return false;
    });

    jQuery('#mycarousel-prev').bind('click', function() {
        carousel.prev();
        return false;
    });
};

jQuery(document).ready(function($){
	$('ul.slide-banner').cycle({ 
        fx:     'fade', 
        speed:  '700', 
        timeout: 3000, 
        auto: true
    });

    $('ul.products-jcarousel').jcarousel({
        scroll: 1,
        animation: 500,
        initCallback: mycarousel_initCallback,
        // This tells jCarousel NOT to autobuild prev/next buttons
        buttonNextHTML: null,
        buttonPrevHTML: null
    });

    

});
