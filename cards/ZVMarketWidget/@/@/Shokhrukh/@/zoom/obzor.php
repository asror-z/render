<?php

?>



<div id="container-all" class="w-100">
    <div class="container-selection">
        <label onclick='changePreviewProduct("https://youtu.be/Rc6KG1_e33o")'><img src="https://static.wixstatic.com/media/3ad43d_19c2cbed826e472f87aedd1d1753f339~mv2.jpg"></label>
        <label onclick='changePreviewProduct("https://static.wixstatic.com/media/3ad43d_113b8078487f409b94910930f52cd7ab~mv2.jpg")'><img src="https://static.wixstatic.com/media/3ad43d_113b8078487f409b94910930f52cd7ab~mv2.jpg"></label>
        <label onclick='changePreviewProduct("https://static.wixstatic.com/media/3ad43d_d390a437d59b4fd0a3ebd763b93e6565~mv2.jpg")'><img src="https://static.wixstatic.com/media/3ad43d_d390a437d59b4fd0a3ebd763b93e6565~mv2.jpg"></label>
    </div>

    <div class="container">
        <div class="row">
            <article class="col-md-12">
                <div class="thumbnail">
                    <div class="ex-thumbnail-zoom">
                        <div class="ex-thumbnail-zoom-img" data-scale="3" data-video="https://youtu.be/Rc6KG1_e33o"></div>
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
        height: 100px;
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

    



</style>
<script>
    function changePreviewProduct(img){
        document.getElementById("img").style.backgroundImage = "url("+img+")";
    }

    var elementThumbnailPhoto = 'ex-thumbnail-zoom-img';
    var elementPhoto = 'h-100';

    $('.' + elementThumbnailPhoto)

        .each(function() {
            $(this)
                // add a photo container
                .append('<div id="img" class="' + elementPhoto + '"></div>')
                // set up a background image for each tile based on data-image attribute
                .children('.' + elementPhoto).css({
                'background-video': 'url(' + $(this).attr('data-video') + ')'
            });
        })
</script>
