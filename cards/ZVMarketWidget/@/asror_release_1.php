<?php

use zetsoft\dbitem\shop\ProductItem;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */


/** @var ZView $this */

?>

<div class="card-group">

    <?

    $items = Az::$app->market->product->allProducts(549);

    
    foreach ($items as $item)
        echo $this->require( '/render/cards/ZVMarketWidget/demo/asror/clean_1.php', [
            'item' => $item
        ]);




    ?>

</div>
