<?php
?>
<div class="image-gallery">
    <aside class="thumbnails">
        <a href="#" class="selected thumbnail" data-big="http://placekitten.com/420/600">
            <div class="thumbnail-image" style="background-image: url(http://placekitten.com/420/600)"></div>
        </a>
        <a href="#" class="thumbnail" data-big="http://placekitten.com/450/600">
            <div class="thumbnail-image" style="background-image: url(http://placekitten.com/450/600)"></div>
        </a>
        <a href="#" class="thumbnail" data-big="http://placekitten.com/460/700">
            <div class="thumbnail-image" style="background-image: url(http://placekitten.com/460/700)"></div>
        </a>
    </aside>

    <main class="primary" style="background-image: url('http://placekitten.com/420/600');"></main>
</div>

</div>
<style>
    .wrapper {
        margin: 0 auto;
        width: 80%;
        text-align: center;
    }

    .image-gallery {
        margin: 0 auto;
        display: table;
    }

    .primary,
    .thumbnails {
        display: table-cell;
    }

    .thumbnails {
        width: 300px;

    }

    .primary {
        width: 600px;
        height: 400px;
        background-color: #cccccc;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
    }

    .thumbnail:hover .thumbnail-image, .selected .thumbnail-image {
        border: 4px solid red;
    }

    .thumbnail-image {
        width: 100px;
        height: 100px;
        margin: 20px auto;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        border: 4px solid transparent;
    }
</style>
<script >
    $('.thumbnail').on('click', function() {
        var clicked = $(this);
        var newSelection = clicked.data('big');
        var $img = $('.primary').css("background-image","url(" + newSelection + ")");
        clicked.parent().find('.thumbnail').removeClass('selected');
        clicked.addClass('selected');
        $('.primary').empty().append($img.hide().fadeIn('slow'));
    });
</script>
