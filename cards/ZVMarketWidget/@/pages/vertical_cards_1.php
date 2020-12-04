<?php

use zetsoft\dbitem\core\WebItem;
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

$actionItem=new WebItem();
$actionItem->debug=false;

?>

<div class="container">
    <div class="row">
            <?

            $actionItem=new WebItem();
            $actionItem->debug=false;

            $items = Az::$app->market->product->allProducts();

            //vdd($items);

            foreach ($items as $item)
                echo $this->require( '/render/cards/ZVMarketWidget/ready/main.php', [
                    'item' => $item
                ]);
            ?>
    </div>
</div>
