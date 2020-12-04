<?php

use zetsoft\dbitem\core\WebItem;
use zetsoft\dbitem\shop\ProductItem;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;

/** @var ZView $this */



?>

<div class="d-flex justify-content-center flex-wrap">

    <?

    $actionItem=new WebItem();
    $actionItem->debug=false;

    $items = Az::$app->market->product->getAllProductsByCompany(57, 550);
    //vdd($items);
    
    foreach ($items as $item)
        echo $this->require( '/render/cards/ZVMarketWidget/ready/main.php', [
            'item' => $item
        ]);
        echo $this->require( '/render/cards/ZVMarketWidget/ready/main.php', [
        'item' => $item
        ]);
        echo $this->require( '/render/cards/ZVMarketWidget/ready/main.php', [
        'item' => $item
        ]);
    echo $this->require( '/render/cards/ZVMarketWidget/ready/main.php', [
        'item' => $item
    ]);
    echo $this->require( '/render/cards/ZVMarketWidget/ready/main.php', [
        'item' => $item
    ]);
    echo $this->require( '/render/cards/ZVMarketWidget/ready/main.php', [
        'item' => $item
    ]);
    echo $this->require( '/render/cards/ZVMarketWidget/ready/main.php', [
        'item' => $item
    ]);
    echo $this->require( '/render/cards/ZVMarketWidget/ready/main.php', [
        'item' => $item
    ]);
    echo $this->require( '/render/cards/ZVMarketWidget/ready/main.php', [
        'item' => $item
    ]);





    ?>

</div>
