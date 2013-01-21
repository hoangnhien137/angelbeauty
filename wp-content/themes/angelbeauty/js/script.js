/* 
 * Author: Mr Rony (LIKIPE DIGITAL).
*/
jQuery(document).ready(function($){
 
    
    $('div#zoom').cycle({ 
        fx:    'zoom', 
        sync:  0, 
        delay: -4000 
    });

    $('div#gallery-2').cycle();

    $('div#gallery-3').cycle({ 
        fx:    'curtainX', 
        sync:  false, 
        delay: -2000 
    });
 
    $('div#gallery-4').cycle({ 
        fx:      'turnDown', 
        delay:   -6000 
    });

    
    $('div#gallery-5').cycle({ 
        fx:      'custom', 
        cssBefore: {  
            left: 115,  
            top:  115,  
            width: 0,  
            height: 0,  
            opacity: 1, 
            display: 'block' 
        }, 
        animOut: {  
            opacity: 0  
        }, 
        animIn: {  
            left: 0,  
            top: 0,  
            width: 200,  
            height: 200  
        }, 
        cssAfter: {  
            zIndex: 0 
        }, 
        delay: -3000 
    });
    
    $('div#content-banner-1').cycle({
        delay: -2000
    });
    
    $('div#content-banner-2').cycle({
        delay: -4000
    });
    
    $('div#content-banner-3').cycle({
        delay: -6000
    });
    
    $('div#content-banner-4').cycle({
        delay: -6000
    });
    
    $('div#content-banner-5').cycle({
        delay: -4000
    });
    
    $('div#content-banner-6').cycle({
        delay: -2000
    });
    
    $('div#carousellite').jCarouselLite({
        vertical: false,
        visible: 4,
        auto: 3000,
        speed: 2000
    });

});
