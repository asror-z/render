<?php
    /* vdd($data);*/
?>

<div class="wrapper d-flex" >
    <div class="img-selection">
    <?foreach ($data as $image) :?>
        <div class="img-thumbnail selected">
            <img src="<?=$image?>" width="100%">
        </div>
      <?endforeach;?>
    </div>
    <div class="big-img">
        <img src="<?= $data[0]?>" class="display-img">
    </div>
</div>

<style>
    @media (min-width: 481px) and (max-width: 767px) {
        .big-img{
            order: 2;
        }
        .img-selection{
            order: 99;
        }
    }
    @media (min-width: 320px) and (max-width: 480px) {
        .big-img{
            order: 2;
        }
        .img-selection{
            order: 99;
        }
    }
    .wrapper{
        position: relative;
        margin: 0;
        width: 60vh;
        padding-left: 80px;
    }

    .img-selection{
        position: absolute;
        left: 0;
        top: 0;
        width: 50px;
    }

    .img-thumbnail:first-of-type{
        margin-top: 0;
    }

    .img-thumbnail{
        margin-top: 10px;
        height: auto;
        border: 1px solid #ddd;
        cursor: pointer;
        transition: .3s ease;
        opacity: .5 ;
    }

    .img-thumbnail:hover{
        opacity: 1;
    }

    .img-thumbnail.selected{
        opacity: 1;
    }

    .big-img{
        position: relative;
        height: auto;
        border: 1px solid #ddd;
        cursor: zoom-in;
        overflow: hidden;
        max-height: 70vh;
      /*  background: url("http://vignette1.wikia.nocookie.net/overwatch/images/b/b7/CuteSprayAvatars-Tracer.png/revision/latest?cb=20160511194930");
        background-size: contain;*/
    }

    .big-img img.zoom{
        position: absolute;
        transition: width 0.2s ease-out, opacity 0.2s ease-out 0.2s;
    }

    .display-img{
        width: 100%;
    }
</style>
<script>
    var thumbs = $('.img-selection').find('img');

    thumbs.click(function(){
        var src = $(this).attr('src');
        var dp = $('.display-img');
        var img = $('.zoom');
        dp.attr('src', src);
        img.attr('src', src);
    });

    $(".img-thumbnail").click(function(){
        $('.img-thumbnail').removeClass('selected');
        $(this).addClass('selected');
    });

    var zoom = $('.big-img').find('img').attr('src');
    $('.big-img').append('<img class="zoom" src="'+zoom+'">');
    $('.big-img').mouseenter(function(){
        $(this).mousemove(function(event){
            var offset = $(this).offset();
            var left = event.pageX - offset.left;
            var top = event.pageY - offset.top;

            $(this).find('.zoom').css({
                width: '200%',
                opacity: 1,
                left: -left,
                top: -top,
            });
        });
    });

    $('.big-img').mouseleave(function(){
        $(this).find('.zoom').css({
            width: '100%',
            opacity: 0,
            left: 0,
            top: 0,
        });
    });
</script>
