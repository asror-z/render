<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */
 ?>

<img id="img_01" src="/render/images/ZJqueryLazyWidget/demo/img/city_1.jpg" data-zoom-image="/render/images/ZJqueryLazyWidget/demo/img/city_1.jpg"/>

<div id="gal1">

    <a href="#" data-image="/render/images/ZJqueryLazyWidget/demo/img/city_2.jpg" data-zoom-image="/render/images/ZJqueryLazyWidget/demo/img/city_2.jpg">
        <img id="img_01" src="/render/images/ZJqueryLazyWidget/demo/img/city_2.jpg" />
    </a>

    <a href="#" data-image="/render/images/ZJqueryLazyWidget/demo/img/city_3.jpg" data-zoom-image="/render/images/ZJqueryLazyWidget/demo/img/city_3.jpg">
        <img id="img_01" src="/render/images/ZJqueryLazyWidget/demo/img/city_3.jpg" />
    </a>

    <a href="#" data-image="/render/images/ZJqueryLazyWidget/demo/img/industrial_1.jpg" data-zoom-image="/render/images/ZJqueryLazyWidget/demo/img/industrial_1.jpg">
        <img id="img_01" src="/render/images/ZJqueryLazyWidget/demo/img/industrial_1.jpg" />
    </a>

    <a href="#" data-image="/render/images/ZJqueryLazyWidget/demo/img/industrial_2.jpg" data-zoom-image="/render/images/ZJqueryLazyWidget/demo/img/industrial_2.jpg">
        <img id="img_01" src="/render/images/ZJqueryLazyWidget/demo/img/industrial_2.jpg" />
    </a>

</div>


<script>
    $("#zoom_03").elevateZoom({constrainType:"height", constrainSize:274, zoomType: "lens", containLensZoom: true, gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: "active"});

    //pass the images to Fancybox
    $("#zoom_03").bind("click", function (event) {
        var ez =   $('#zoom_03').data('elevateZoom');
        $.fancybox(ez.getGalleryList());
        return false;
    });
</script>
