<?
/** @var ZView $this */

use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;

Az::$app->controller->layout = 'bozorMain';

$this->fileJs('https://cdn.jsdelivr.net/npm/xzoom@1.0.14/dist/xzoom.min.js');
$this->fileCss('/render/market/ZZoomWidget/asset/xzoom.css');
?>
<div class="container">
    <div class="xzoom-container">
        <img
                class="xzoom"
                src="/render/market/ZZoomWidget/image/gallery/preview/02_o_car.jpg"
                xoriginal="/render/market/ZZoomWidget/image/gallery/original/02_o_car.jpg"
        >

        <div class="xzoom-thumbs">

            <a href="/render/market/ZZoomWidget/image/gallery/original/02_o_car.jpg"><!-- original image -->
                <img
                        class="xzoom-gallery" width="80"
                        src="/render/market/ZZoomWidget/image/gallery/thumbs/02_o_car.jpg"
                        title="The title goes here"
                        xpreview="/render/market/ZZoomWidget/image/gallery/preview/02_o_car.jpg"
                >
            </a>

            <a href="/render/market/ZZoomWidget/image/gallery/original/03_r_car.jpg"><!-- original image -->
                <img
                        class="xzoom-gallery" width="80"
                        src="/render/market/ZZoomWidget/image/gallery/thumbs/03_r_car.jpg"
                        title="The title goes here"
                        xpreview="/render/market/ZZoomWidget/image/gallery/preview/03_r_car.jpg"
                >
            </a>

            <a href="/render/market/ZZoomWidget/image/gallery/original/04_g_car.jpg"><!-- original image -->
                <img
                        class="xzoom-gallery" width="80"
                        src="/render/market/ZZoomWidget/image/gallery/thumbs/04_g_car.jpg"
                        title="The title goes here"
                        xpreview="/render/market/ZZoomWidget/image/gallery/preview/04_g_car.jpg"
                >
            </a>


        </div>
    </div>
</div>


<script>
    $('.xzoom, .xzoom-gallery').xzoom({

        position: 'right', //top, left, right, bottom, inside, lens, fullscreen, #ID
        mposition: 'inside', //inside, fullscreen
        rootOutput: true,
        Xoffset: 0,
        Yoffset: 0,
        fadeIn: true,
        fadeTrans: true,
        fadeOut: true,
        smooth: true,
        smoothZoomMove: 3,
        smoothLensMove: 1,
        smoothScale: 6,
        defaultScale: 0, //from -1 to 1, that means -100% till 100% scale
        scroll: true,
        tint: '#ccc', //'#color'
        tintOpacity: .8,
        lens: false, //'#color'
        lensOpacity: 0.5,
        lensShape: 'circle', //'box', 'circle'
        zoomWidth: 'auto',
        zoomHeight: 'auto',
        sourceClass: 'xzoom-source',
        loadingClass: 'xzoom-loading',
        lensClass: 'xzoom-lens',
        zoomClass: 'xzoom-preview',
        activeClass: 'xactive',
        hover: false,
        adaptive: true,
        lensReverse: false,
        adaptiveReverse: false,
        title: false,
        titleClass: 'xzoom-caption',
        bg: true //zoom image output as background

    });
</script>



