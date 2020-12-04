<?

use zetsoft\dbitem\wdg\MenuItem;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZUrl;
use zetsoft\widgets\market\ZMenuWidget;
$category = Az::$app->market->category->generateDBMenuItems();
//vdd($category);
if(!isset($category)){
    $category = new MenuItem();
    $category->label= 'Noutbuk';
}

?>

<?php
$this->fileJs('https://cdn.jsdelivr.net/npm/jquery.scrollto@2.1.2/jquery.scrollTo.min.js');
?>


<div class="container all-category">
    <div id="categoryContainer" class="row sticky-top bg-white">
    <? foreach (array_slice($category, 0, 12)  as $key => $value) {
        if($key == array_key_last(array_slice($category, 0, 12))) { ?>
            <div style="min-height: 65px" class="col-2 px-2 d-flex border category-name" data-container="<?=$value->id?>">
                <a class="p-1 text-decoration-none d-flex text-muted align-items-center">
                    <i class="fas fa-ellipsis-h fp-20"></i>
                    <h5 class="p-2 mb-0 fp-15">Другие категории</h5>
                </a>
            </div>
        <? } else {?>
        <div style="min-height: 65px" data-container="<?= $value->id?>" class="col-2 px-2 d-flex border category-name">
            <a class="p-1 text-decoration-none d-flex text-muted align-items-center">
                <i class="fas fa-heart fp-20"></i>
                <h5 class="p-2 mb-0 fp-15"><?= $value->label?></h5>
            </a>
        </div>
    <?} } ?>


    </div>
    <?foreach ($category as $key => $value) {?>
    <div id="<?= $value->id ?>" class="category-list border-bottom py-3 px-5 mt-2">
        <h3  class="text-success"><?= $value->label?></h3>
        <div class="row">
            <? foreach ($value->items as $_key => $_value) {?>
            <div class="col-3">
                <a href="#" class="text-muted"><?= $_value->label?></a>
            </div>
            <? } ?>
        </div>
    </div>
    <?}?>


</div>
<script>
$(document).ready(function () {
    $("#categoryContainer > div").click(function () {
        $("div").removeClass('border-success');
        $("div > a").removeClass('text-success');
        $(this).addClass('border-success');
        $(this).children('a').addClass('text-success');
        var dataContainer = $(this).attr('data-container');
        var cont = $('.all-category');
        var target = $("#" + dataContainer );

        console.log(dataContainer);
        /*$("#" + dataContainer).scrollIntoView();*/
        if( target.length ) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top - (130)
            }, 1000);

            console.log(target)
        }
    });
})

</script>


