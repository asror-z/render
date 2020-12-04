<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use FontLib\Table\Type\name;
use zetsoft\dbitem\shop\ProductItem;
use zetsoft\dbitem\shop\PropertyItem;
use zetsoft\system\Az;



$product_id = $this->httpGet('id');
/** @var ProductItem[] $product */
$product = Az::$app->market->product->product($product_id);

/** @var PropertyItem[] $productProperty */
$productProperty = Az::$app->market->product->product($product_id)->AllProperties;

?>

<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <div><h4>Общие характеристики</h4></div>
            <?php
                foreach ($productProperty as $key => $value){  ?>
                    <div class="d-flex justify-content-between fp-18">
                        <span class="fp-16"><?= $value->name?></span>
                        <span class="fp-16">
                            <?foreach ($value->items as $_key => $_value) {
                                 if (count($value->items) > 1 && !($_key === array_key_first($value->items))) {
                                     echo '/';
                                     }
                                     echo $_value;
                                 }
                                 ?>
                        </span>
                    </div>
                    <? } ?>
        </div>
    </div>
</div>


