$(document).ready(function(){
    initGallery('#gallery-bw');
    initGallery('#gallery-color');
    
    if(!$.browser.msie){
        $('#gallery-bw a')
        .mouseenter(function(){
            $('img', this).fadeOut('middle');
        })
        .mouseleave(function(){
            $('img', this).stop(true, true).fadeIn('middle');
        });
    }
    else{
        $('#gallery-bw a')
        .mouseenter(function(){
            $('img', this).hide();
        });
        $('#gallery-color a')
        .mouseleave(function(){
            var i = $('#gallery-color a').index(this);
            $('#gallery-bw a:eq('+i+') img').show();
        });
    }
});

function initGallery(container_selector){
    var $container = $(container_selector),
    $imgs = $container.find('img').hide(),
    totalImgs = $imgs.length,
    cnt = 0;

    $imgs.each(function(i) {
        var $img = $(this);
        $('<img/>').load(function() {
                ++cnt;
                if( cnt === totalImgs ) {
                        $imgs.show();
                        $container.montage({
                                margin : 4,
                                minw: 180,
                                minh: 225,
                                maxh: 180,
                                minsize: 180,
                                fillLastRow : false,
                                fixedHeight: 205,
                                alternateHeight : false
                        }).show();
                }
        }).attr('src',$img.attr('src'));
    });    
}