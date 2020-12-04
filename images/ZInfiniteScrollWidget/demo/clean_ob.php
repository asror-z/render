<?php
/** @var ZView $this */

use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;

$this->fileJs('https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.js');
$this->fileJs('https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js');

//if($parentClass!==null && $targetClass!==null){
$parentClass = 'obdevParent';
$targetClass = 'target';
//}

?>
<div class="<?= $parentClass ?> row">

    <?php


    $products = Az::$app->market->product->allProducts();

    foreach ($products as $product) {
        echo "<div class='$targetClass col-md-3'>";
        echo $this->require( '/render/cards/ZListViewWidget/demo/vertical_horizontal.php', [
            'item' => $product,
            'col' => 12
        ]);
        echo "</div>";

    }

    ?>

</div>
<div class="test">

</div>

<div class="page-load-status da-block">
    <div class="loader-ellips infinite-scroll-request">
        <span class="loader-ellips__dot"></span>
        <span class="loader-ellips__dot"></span>
        <span class="loader-ellips__dot"></span>
        <span class="loader-ellips__dot"></span>
    </div>
    <p class="infinite-scroll-last">End of content</p>
    <p class="infinite-scroll-error">No more pages to load</p>
</div>
<script>
    var $grid = $('.<?=$parentClass?>').masonry({
        itemSelector: 'none', // select none at first
        percentPosition: true,
        stagger: 30,
        // nicer reveal transition
        visibleStyle: {transform: 'translateY(0)', opacity: 1},
        hiddenStyle: {transform: 'translateY(100px)', opacity: 0},
    });


    var msnry = $grid.data('masonry');

    /*$grid.imagesLoaded( function() {
        $grid.removeClass('are-images-unloaded');
        $grid.masonry( 'option', { itemSelector: '.grid__item' });
        var $items = $grid.find('.grid__item');
        $grid.masonry( 'appended', $items );
    });*/

    function getPenPath() {
        return "/core/tester/asror/main.aspx?path=render/images/ZInfiniteScrollWidget/clean/demo/clean_ob.php";
    }

    $grid.infiniteScroll({
        checkLastPage: false,
        path: getPenPath,       // url for next page
        //append: '.grid__item',  // disabled, false,
        append: '.<?=$targetClass?>',  // disabled, false,
        prefill: false,
        responseType: 'document',  // text
        outlayer: msnry,           // iso, pckry
        scrollThreshold: 400,       // number or false
        status: '.page-load-status',
        elementScroll: false,    //true, parent element's class
        loadOnScroll: true,          //true

    });
</script>
