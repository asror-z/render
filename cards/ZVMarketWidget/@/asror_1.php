<?php

use zetsoft\dbitem\shop\ProductItem;
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

    $rand = random_int(1, 100);
    $item = new ProductItem();
    $item->name = 'Арахисовая паста с медом 200г' . $rand;
    $item->title = 'Test Desc' . $rand;
    $item->price = '14890';
    $item->price_old = '18890';
    $item->barcode = '34234234';
    $item->exists = ProductItem::exists['not'];

    echo $this->require( '/render/cards/ZVMarketWidget/demo/asror/clean_1.php', [
        'item' => $item
    ]);


    $item = new ProductItem();
    $item->name = 'xxxxxxxxxx 200г' . $rand;
    $item->title = 'xxxxxxxx Desc' . $rand;
    $item->price = '14890';
    $item->price_old = '18890';
    $item->barcode = '34234234';
    $item->exists = ProductItem::exists['yes'];

    echo $this->require( '/render/cards/ZVMarketWidget/demo/asror/clean_1.php', [
        'item' => $item
    ]);

    $item = new ProductItem();
    $item->name = '35666666666666666666 200г' . $rand;
    $item->title = 'sdfg Desc' . $rand;
    $item->price = '14890';
    $item->price_old = '18890';
    $item->barcode = '34234234';
    $item->exists = ProductItem::exists['yes'];


    echo $this->require( '/render/cards/ZVMarketWidget/demo/asror/clean_1.php', [
        'item' => $item,
      
    ]);

    echo $this->require( '/render/cards/ZVMarketWidget/demo/asror/clean_1.php', [
        'item' => $item
    ]);

    echo $this->require( '/render/cards/ZVMarketWidget/demo/asror/clean_1.php', [
        'item' => $item
    ]);


    ?>

</div>
