<title>Lazysizes</title>
<link href="/render/ajaxify/ZLazySizesWidget/asset/tidy.css" rel="stylesheet">
<style>
    .intrinsic {
        position: relative;
        padding-bottom: 75%;
        height: 0;
    }
    .intrinsic img,
    .intrinsic iframe,
    .intrinsic .lazyload {
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        border: none;
        overflow: hidden;
    }


    .scroll-item .thumbnail img {
        width: 100%;
        height: auto;
    }


</style>

<div class="container">
    <div id="examples">
        <div class="row">
            <div class="col-sm-12">
                <div class="thumbnail">
                    <div class="intrinsic">
                        <img alt="" src="/render/ajaxify/ZLazySizesWidget/asset/image/8248153196_7a7664e147_b.jpg"
                             data-src="https://farm9.staticflickr.com/8200/8248153196_7a7664e147_b.jpg"
                             class=" ls-is-cached lazyloaded">
                    </div>

                    <div class="caption">
                        <h3>Image with LQIP technique</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="thumbnail">
                    <div class="intrinsic">
                        <img alt="Desert Road" data-src="https://i.picsum.photos/id/1071/1920/1440.jpg"
                             class="no-src ls-is-cached lazyloaded" src="/render/ajaxify/ZLazySizesWidget/asset/image/1071-1920x1440.jpg">
                    </div>

                    <div class="caption">
                        <h3>Normal lazy image</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="thumbnail">
                    <div class="intrinsic">
                        <img sizes="(min-width: 1000px) 930px, 90vw" data-sizes="auto"
                             data-src="https://farm5.staticflickr.com/4078/5441060528_31db7838ba_z.jpg" data-srcset="https://farm5.staticflickr.com/4078/5441060528_31db7838ba_m.jpg 240w,
	https://farm5.staticflickr.com/4078/5441060528_31db7838ba_n.jpg 320w,
	https://farm5.staticflickr.com/4078/5441060528_31db7838ba.jpg 500w,
	https://farm5.staticflickr.com/4078/5441060528_31db7838ba_z.jpg 640w,
	https://farm5.staticflickr.com/4078/5441060528_31db7838ba_b.jpg 1024w" class="lazyload no-src">
                    </div>
                    <div class="caption">
                        <h3>responsive image with srcset and sizes attribute</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="thumbnail">
                    <div class="intrinsic">
                        <picture>
                            <!--[if IE 9]>
                            <audio><![endif]-->
                            <source data-srcset="https://i.picsum.photos/id/1048/1200/900.jpg"
                                    media="(max-width: 990px)">
                            <source data-srcset="https://i.picsum.photos/id/1055/1440/1080.jpg"
                                    media="(max-width: 1024px)">

                            <source data-srcset="https://i.picsum.photos/id/103/1440/1080.jpg">
                            <!--[if IE 9]></audio><![endif]-->
                            <img class="lazyload" data-src="https://i.picsum.photos/id/1055/1440/1080.jpg"
                                 alt="image with artdirection">
                        </picture>
                    </div>

                    <div class="caption">
                        <h3>responsive image with the <code>picture</code> element</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="autosizes-example">
            <div class="col-sm-12">
                <div class="thumbnail">
                    <div class="intrinsic">
                        <img alt="" data-sizes="auto" src="/render/ajaxify/ZLazySizesWidget/asset/image/8248153196_7a7664e147_m.jpg"
                             data-src="https://farm9.staticflickr.com/8200/8248153196_7a7664e147.jpg" data-srcset="https://farm9.staticflickr.com/8200/8248153196_7a7664e147_m.jpg 240w,
https://farm9.staticflickr.com/8200/8248153196_7a7664e147_n.jpg 320w,
https://farm9.staticflickr.com/8200/8248153196_7a7664e147.jpg 500w,
https://farm9.staticflickr.com/8200/8248153196_7a7664e147_c.jpg 800w,
https://farm9.staticflickr.com/8200/8248153196_7a7664e147_b.jpg 1024w" class="lazyload">
                    </div>

                    <div class="caption">
                        <h3>responsive image with srcset and <strong>automatic sizes</strong> attribute</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/lazysizes-umd@3.0.1/lazysizes.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lazysizes@5.2.1-rc2/lazysizes.min.js" async=""></script>
<script>
    window.lazySizesConfig = window.lazySizesConfig || {};
    window.lazySizesConfig.init = false;
</script>
<script>
    lazySizes.init();
</script>
