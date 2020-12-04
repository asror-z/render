<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\dbitem\shop\ProductItem;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\market\ZSVGWidget;


/** @var ZView $this */


if (!isset($product)) {
    $rand = random_int(1, 100);

    $item = new ProductItem();
    $item->name = 'Арахисовая паста с медом 200г' . $rand;
    $item->title = 'Test Desc' . $rand;
    $item->price = '14890';
    $item->price_old = '18890';
    $item->barcode = '34234234';
    $item->exists = ProductItem::exists['not'];
}


?>




<?
$this->fileCss('/render/cards/ZVMarketWidget/asset/test.css');
//$this->fileJs('/render/cards/ZVMarketWidget/asset/test.css');
?>

<>

<div class="card m-2">


    <div class="card-body">
        <div class="d-flex justify-content-between">
            <div class="fe-12"><?= $item->name ?></div>
            <div class="d-flex mt-1">
                <i class="far fa-heart grey-text mr-2 h5"></i>
                <i class="fa fa-chart-bar grey-text h5"></i>
            </div>
        </div>

        <div class="d-flex justify-content-between">

            <?
            echo ZKSelect2Widget::widget([
                'name' => 'test',
                'data' => [
                    'test1'
                ],

            ]);
            ?>

        </div>


    </div>
</div>
<a href="#" class="btn button-bg-color text-white">Добавить в корзину</a>
</div>

