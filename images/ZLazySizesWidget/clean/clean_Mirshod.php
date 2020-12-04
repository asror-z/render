<!DOCTYPE html>
<html>
<head lang="en">
<style>
    *,
    *:before,
    *:after {
        box-sizing: border-box;
    }

    .imagecontainer {
        position: relative;
        border: 3px solid #ccc;
        overflow: hidden;
        transform: translateZ(0);
    }

    .imagecontainer:before {
        display: block;
        width: 100%;
        content: "";
        padding-bottom: 100%;
        height: 0;
    }

    .imagecontainer-img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
        transition: 400ms transform;
    }

    .is-contain.imagecontainer .imagecontainer-img {
        object-fit: contain;
        font-family: "parent-fit: contain, object-fit: contain";
    }

    .is-cover.imagecontainer .imagecontainer-img {
        object-fit: cover;
        font-family: "parent-fit: cover, object-fit: cover";
    }

    .imagecontainer.is-round {
        border-radius: 50%;
        border: none;
    }

    .imagecontainer:hover .imagecontainer-img {
        transform: scale(1.1);
    }

    .group {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }

    .group-item {
        width: 33%;
        padding: 10px
    }

</style>
    <script src="https://cdn.rawgit.com/scottjehl/picturefill/3.0.2/dist/picturefill.min.js"></script>
    <script src="https://afarkas.github.io/lazysizes/plugins/parent-fit/ls.parent-fit.min.js"></script>
    <script src="https://afarkas.github.io/lazysizes/plugins/object-fit/ls.object-fit.min.js"></script>
    <script src="https://afarkas.github.io/lazysizes/lazysizes.min.js" async=""></script>
</head>
<body>
<div class="group-item">
    <div class="imagecontainer is-contain">
        <picture>
            <img class="imagecontainer-img lazyload" data-sizes="auto" src="https://picsum.photos/800/1200?image=1070">
        </picture>
    </div>
</div>

<div class="group">

    <div class="group-item">

        <div class="imagecontainer ">
            <picture>

                <img class="imagecontainer-img lazyload" data-sizes="auto"
                     src="https://picsum.photos/800/1200?image=1072">
            </picture>
        </div>
    </div>

    <div class="group-item">
        <div class="imagecontainer is-contain">
            <picture>
                <img class="imagecontainer-img lazyload" data-sizes="auto"
                     src="/render/images/ZLazySizesWidget/clean/img/industrial_2.jpg">
            </picture>
        </div>
    </div>

    <div class="group-item">
        <div class="imagecontainer is-cover">
            <picture>
                <img class="imagecontainer-img lazyload" data-sizes="auto"
                     src="/render/images/ZLazySizesWidget/clean/img/city_2.jpg">
            </picture>

        </div>
    </div>


    <div class="group-item">
        <div class="imagecontainer is-contain is-round">
            <picture>
                <img class="imagecontainer-img lazyload" data-sizes="auto"
                     src="/render/images/ZLazySizesWidget/clean/img/city_1.jpg">
            </picture>
        </div>
    </div>

    <div class="group-item">
        <div class="imagecontainer is-cover is-round">
            <picture>

                <img class="imagecontainer-img lazyload" data-sizes="auto"
                     src="/render/images/ZLazySizesWidget/clean/img/city_3.jpg">
            </picture>

        </div>
    </div>
</div>

<img sizes="(min-width: 40em) 80vw, 100vw"
     src="/render/images/ZLazySizesWidget/clean/img/industrial_1.jpg">
</body>
</html>
