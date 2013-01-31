/*
* Author: Mr Rony (LIKIPE DIGITAL).
*/
jQuery(document).ready(function($){
 
    
    $('div#zoom-1').cycle({
        fx: 'zoom',
        sync: 0,
        delay: -4000
    });

    $('div#zoom-2').cycle();

    $('div#zoom-3').cycle({
        fx: 'curtainX',
        sync: false,
        delay: -2000
    });
 
    $('div#zoom-4').cycle({
        fx: 'turnDown',
        delay: -6000
    });

    
    $('div#zoom-5').cycle({
        fx: 'custom',
        cssBefore: {
            left: 115,
            top: 115,
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
            width: 177,
            height: 184
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
    
    $('div#customer-carousel').jCarouselLite({
        vertical: false,
        visible: 5,
        auto: 3000,
        speed: 2000
    });
    
    $(".show-img-post").colorbox({rel:'show-img-post', transition:"none", width:"75%", height:"75%"});
    
    $( ".fix-datepicker" ).datepicker();
    
    $('.timepicker').timepicker({ 'scrollDefaultNow': true });
    
    $('ul#flash-to-banner').cycle({
        fx: 'fade',
        speed: '7000',
        timeout: 3000,
        auto: true
    });
    
    $(".carousellite-hoidap").jCarouselLite({
        vertical: true,
        visible: 10,
        auto: 3000,
        speed: 1000
    });
    

});