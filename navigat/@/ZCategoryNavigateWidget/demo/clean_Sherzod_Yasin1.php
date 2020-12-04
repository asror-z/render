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
/**
 *
 *
 * @author: SherzodMangliyev
 *
 */
?>


<div class="container all-category">
    <div id="categoryContainer" class="row sticky-top bg-white">
    <? foreach ($category  as $key => $value) {?>
        <div style="min-height: 65px" data-container="<?= $value->id?>" class="col-2 px-2 d-flex border category-name">
            <a class="p-1 text-decoration-none d-flex text-muted align-items-center">
                <i class="<?= $value->icon?> fp-20"></i>
                <h5 class="p-2 mb-0 fp-15"><?= $value->label?></h5>
            </a>
        </div>
    <?}  ?>


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
        var target = $("#" + dataContainer );

        console.log(dataContainer);

        /*$(window).scrollTo($('#' + dataContainer), 800);*/

        /*$("#" + dataContainer).scrollIntoView();*/


        if( target.length ) {
        console.log(target.offset())
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 1000);

            console.log(target)
        }
    });
})

</script>


