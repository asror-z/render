<?php

?>



<div id="container-all" class="w-100">
    <div class="container-selection">
        <label onclick='changePreviewProduct("https://static.wixstatic.com/media/3ad43d_19c2cbed826e472f87aedd1d1753f339~mv2.jpg")'><img src="https://static.wixstatic.com/media/3ad43d_19c2cbed826e472f87aedd1d1753f339~mv2.jpg"></label>
        <label onclick='changePreviewProduct("https://static.wixstatic.com/media/3ad43d_113b8078487f409b94910930f52cd7ab~mv2.jpg")'><img src="https://static.wixstatic.com/media/3ad43d_113b8078487f409b94910930f52cd7ab~mv2.jpg"></label>
        <label onclick='changePreviewProduct("https://static.wixstatic.com/media/3ad43d_d390a437d59b4fd0a3ebd763b93e6565~mv2.jpg")'><img src="https://static.wixstatic.com/media/3ad43d_d390a437d59b4fd0a3ebd763b93e6565~mv2.jpg"></label>
    </div>

    <div class="container">
        <div class="row">
            <article class="col-md-12">
                <div class="thumbnail">
                    <div class="ex-thumbnail-zoom">
                        <div class="ex-thumbnail-zoom-img" data-scale="3" data-image="https://static.wixstatic.com/media/3ad43d_19c2cbed826e472f87aedd1d1753f339~mv2.jpg"></div>
                    </div>
                </div>
            </article>
        </div>
    </div>

</div>
<style>
    .container-selection{
        height:auto;
        width: 98px;
        display: block;
    }

    .container{
        margin: 0;
        padding: 0;
    }

    .container-selection img{
        padding: 10px 10px 0 10px;
        width: 100%;
        height: auto;
    }

    #container-all{
        display: flex;
    }

    .container-zoom img{
        height: 200px;
        width: auto;
    }






    .ex-thumbnail-zoom {
        cursor: crosshair;
        position: relative;
        top: 0;
        left: 0;
        width: 100%;
        height: 400px;
        margin-top: 10px;
    }

    .ex-thumbnail-zoom-img {
        position: relative;
        float: left;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .ex-zoom-photo {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        transition: transform .8s ease-out;
    }

    .thumbnail{
        padding: 0 !important;
    }



</style>
<script>
    function changePreviewProduct(img){
        document.getElementById("img").style.backgroundImage = "url("+img+")";
    }

    var elementThumbnailPhoto = 'ex-thumbnail-zoom-img';
    var elementPhoto = 'ex-zoom-photo';

    $('.' + elementThumbnailPhoto)
        // tile mouse actions
        .on('mouseover', function() {
            $(this).children('.' + elementPhoto).css({
                'transform': 'scale(' + $(this).attr('data-scale') + ')'
            });
        })
        .on('mouseout', function() {
            $(this).children('.' + elementPhoto).css({
                'transform': 'scale(1)'
            });
        })
        .on('mousemove', function (event) {
            $(this).children('.' + elementPhoto).css({
                'transform-origin': ((e.pageX - $(this).offset().left) / $(this).width()) * 100 + '% ' + ((e.pageY - $(this).offset().top) / $(this).height()) * 100 + '%'
            });
        })
        // tiles set up
        .each(function() {
            $(this)
                // add a photo container
                .append('<div id="img" class="' + elementPhoto + '"></div>')
                // set up a background image for each tile based on data-image attribute
                .children('.' + elementPhoto).css({
                'background-image': 'url(' + $(this).attr('data-image') + ')'
            });
        })
</script>
