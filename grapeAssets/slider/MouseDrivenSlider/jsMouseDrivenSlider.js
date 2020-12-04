$(document).ready(function(){
    var docWidth = $('.mds-container').width(),
        $wrap = $('#wrap'),
        $images = $('#wrap .hb'),
        slidesWidth = $wrap.width();

    $(window).on('resize', function(){
        docWidth = $('.mds-container').width();
        slidesWidth = $wrap.width();
    })

    $(document).mousemove(function(e) {
        var mouseX = e.pageX,
            offset = mouseX / docWidth * slidesWidth - mouseX / 2;

        $images.css({
            '-webkit-transform': 'translate3d(' + -offset + 'px,0,0)',
            'transform': 'translate3d(' + -offset + 'px,0,0)'
        });
    });
})
