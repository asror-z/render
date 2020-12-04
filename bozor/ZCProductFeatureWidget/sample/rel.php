<?php

use zetsoft\dbitem\shop\ProductItem;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;

/** @var ZView $this */



?>


<div class="row">

    <?
    $items = Az::$app->market->product->allProducts();

    /*vdd($items);*/

    foreach ($items as $item)

        echo $this->require( '/render/bozor/ZCProductFeatureWidget/clean1.php', [
            'item' => $item
        ]);
    ?>
</div>

