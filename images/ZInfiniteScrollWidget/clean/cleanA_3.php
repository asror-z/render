<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <style>
       /* external css: flickity.css */

       * { box-sizing: border-box; }

       body { font-family: sans-serif; }

       .carousel {
           background: #EEE;
       }

       .carousel-cell {
           width: 28%;
           height: 200px;
           margin-right: 10px;
           background: #8C8;
           border-radius: 5px;
           counter-increment: carousel-cell;
       }

       .carousel-cell.is-selected {
           background: #ED2;
       }

       /* cell number */
       .carousel-cell:before {
           display: block;
           text-align: center;
           content: counter(carousel-cell);
           line-height: 200px;
           font-size: 80px;
           color: white;
       }
   </style>
</head>
<body>
<h1>Flickity - groupCells</h1>

<!-- Flickity HTML init -->
<div class="carousel" data-flickity='{ "groupCells": true }'>
    <div class="carousel-cell"></div>
    <div class="carousel-cell"></div>
    <div class="carousel-cell"></div>
    <div class="carousel-cell"></div>
    <div class="carousel-cell"></div>
    <div class="carousel-cell"></div>
    <div class="carousel-cell"></div>
    <div class="carousel-cell"></div>
    <div class="carousel-cell"></div>
    <div class="carousel-cell"></div>
    <div class="carousel-cell"></div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>


<!--<script>

    // external js: masonry.pkgd.js

    var $grid = $('.grid').masonry({
        itemSelector: '.grid-item',
        columnWidth: '.grid-sizer',
        gutter: '.gutter-sizer',
        horizontalOrder: true, // new!
        percentPosition: true,
    });

    var isHorOrder = true;
    var $status = $('.status');

    // toggle horizontalOrder on click
    $('.hor-order-button').on( 'click', function() {
        isHorOrder = !isHorOrder;
        $grid.masonry({
            horizontalOrder: isHorOrder
        });
        var message = 'horizontalOrder ' +
            ( isHorOrder ? 'enabled' : 'disabled' );
        $status.text( message );
    });
</script>-->
</body>
</html>
