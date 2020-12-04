<?php

use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZKStarRatingWidget;



$product = Az::$app->market->product->getAllProductsByCompany(57, 549);

/** @var ZView $this */
?>
<div class="d-flex">
<?php
foreach ($product as $item) {
  echo $this->require( '/render/cards/ZVMarketWidget/ready/main.php',['item' => $item]);
}
?>
</div>
                                
