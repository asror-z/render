<?

use zetsoft\dbitem\wdg\MenuItem;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZUrl;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\market\ZMenuWidget;
    /**@var ZView $this*/
$category = Az::$app->market->category->generateDBMenuItems();

if (!isset($category)) {
    $category = new MenuItem();
    $category->label = 'Noutbuk';
}

?>

 <?
  $this->fileJs('/render/navigat/ZCategoryNavigateWidget/asset/main.js');
 ?>
<div class="container all-category sticky-top">
    <div id="categoryContainer" class="row bg-white">
        <? foreach ($category as $key => $value) { ?>
            <div style="min-height: 65px"
                 class="col-2 px-2 d-flex border category-name">
                <a href="#<?= $value->id ?>" class="p-1 text-decoration-none d-flex text-muted align-items-center">
                    <i class="<?= $value->icon ?> fp-20"></i>
                    <h5 class="p-2 mb-0 fp-15"><?= $value->label ?></h5>
                </a>
            </div>
        <? } ?>


    </div>



</div>
<div class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <? foreach ($category as $key => $value) { ?>
                <section id="<?= $value->id ?>" class="category-list  border-bottom py-3 px-5 mt-2">
                    <h3 class="text-success"><?= $value->label ?></h3>
                    <div class="row">
                        <? foreach ($value->items as $_key => $_value) { ?>
                            <div class="col-3">
                                <a href="#" class="text-muted"><?= $_value->label ?></a>
                            </div>
                        <? } ?>
                    </div>
                </section>
            <? } ?>

        </div>
    </div>

</div>



