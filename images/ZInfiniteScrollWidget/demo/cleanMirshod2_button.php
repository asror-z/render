<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>
<div class="grid are-images-unloaded">
    <div class="grid__col-sizer"></div>
    <div class="grid__gutter-sizer"></div>
    <div class="grid__item grid__item--height2"></div>
    <div class="grid__item grid__item--width2">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg" alt="orange tree"/>
    </div>
    <div class="grid__item grid__item--height3"></div>
    <div class="grid__item grid__item--height1"></div>
    <div class="grid__item grid__item--height2"></div>
    <div class="grid__item">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/look-out.jpg" alt="look out">
    </div>

    <div class="grid__item grid__item--height1"></div>
    <div class="grid__item grid__item--height3"></div>
    <div class="grid__item grid__item--height1"></div>
    <div class="grid__item grid__item--height3"></div>
    <div class="grid__item grid__item--height1"></div>
    <div class="grid__item grid__item--height1"></div>
    <div class="grid__item grid__item--width2">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/raspberries.jpg" alt="rasberries">
    </div>
    <div class="grid__item grid__item--height2"></div>
    <div class="grid__item grid__item--height2"></div>
    <div class="grid__item grid__item--height3"></div>
    <div class="grid__item grid__item--height1"></div>
    <div class="grid__item grid__item--height2"></div>
</div>
<div class="test">

<div class="page-load-status">
    <div class="loader-ellips infinite-scroll-request">
        <span class="loader-ellips__dot"></span>
        <span class="loader-ellips__dot"></span>
        <span class="loader-ellips__dot"></span>
        <span class="loader-ellips__dot"></span>
    </div>
    <p class="infinite-scroll-last">End of content</p>
    <p class="infinite-scroll-error">No more pages to load</p>
</div>

<p>
    <button class="view-more-button">View more</button>
</p>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
<script>
    var $grid = $('.grid').masonry({
        itemSelector: 'none', // select none at first
        columnWidth: '.grid__col-sizer',
        gutter: '.grid__gutter-sizer',
        percentPosition: true,
        stagger: 30,
        // nicer reveal transition
        visibleStyle: {transform: 'translateY(0)', opacity: 1},
        hiddenStyle: {transform: 'translateY(100px)', opacity: 0},
    });


    var msnry = $grid.data('masonry');

    $grid.imagesLoaded(function () {
        $grid.removeClass('are-images-unloaded');
        $grid.masonry('option', {itemSelector: '.grid__item'});
        var $items = $grid.find('.grid__item');
        $grid.masonry('appended', $items);
    });

    function getPenPath() {

        return "/core/tester/asror/main.aspx?path=render/images/ZInfiniteScrollWidget/clean/demo/cleanMirshod2.php";

    }

    var nextPenSlugs = [
        '3d9a3b8092ebcf9bc4a72672b81df1ac',
        '2cde50c59ea73c47aec5bd26343ce287',
        'd83110c5f71ea23ba5800b6b1a4a95c4',
    ];

    function getPenPath() {
        var slug = nextPenSlugs[this.loadCount];
        if (slug) {
            return 'https://s.codepen.io/desandro/debug/' + slug;
        }
    }

    //-------------------------------------//
    // init Infinite Scroll

    $('.grid').infiniteScroll({
        path: getPenPath,
        append: '.grid__item',
        button: '.view-more-button',
        // using button, disable loading on scroll
        scrollThreshold: false,
        status: '.page-load-status',
        
    });                   


    $grid.infiniteScroll({
        checkLastPage: false,
        path: getPenPaths,       // url for next page
        append: '.grid__item',  // disabled, false,
        prefill: false,
        responseType: 'document',  // text
        outlayer: msnry,           // iso, pckry
        scrollThreshold: false,       // number or false
        status: '.page-load-status',
        elementScroll: false,    //true, parent element's class
        loadOnScroll: true,          //false
        history: false,      // replaceState, pushState
        historyTitle: false,   // true
        debug: false,       // {true} error correction on the console


    });


</script>
</body>
</html>
