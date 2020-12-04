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
use zetsoft\dbitem\shop\SingleProductItem;
use zetsoft\widgets\ajaxify\ZCardSwitcherWidget;

$item = new SingleProductItem();
$item->id = 2;
$item->name = 'Арахисовая паста с медом 200г';
$item->title = 'Test Desc';
$item->new_price = '14825920';
$item->old_price = '188920';
$item->barcode = '34234234';
$item->exist = ProductItem::exists['not'];
$item->images = [
    'https://images.pexels.com/photos/1095550/pexels-photo-1095550.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
    'https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
    'https://previews.123rf.com/images/veneratio/veneratio1511/veneratio151100044/48203428-landscape-iamge-of-river-flowing-through-lush-green-forest-in-summer.jpg',
    'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRVDh2D2fzRSBYnwaA-70G74wjOeeZWbRnEVBMxfu1jVqcP9fMv&usqp=CAU',
];
$item->currency = 'сум';
$item->currencyType = 'after';
$item->measure = 'шт';
$item->rating = 3.5;
$item->discount = -10;
$item->catalogId = 19;
$item->sale = 'sdadsa';
$item->is_multi = false;
$item->in_wish = true;
$item->in_compare = false;

$data[]=$item;
$data[]=$item;
$data[]=$item;
$data[]=$item;
$data[]=$item;

$this->fileCss('/render/asrorz/css/loader.css');
?>

<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>

<div class="row">
    <?php

    echo ZCardSwitcherWidget::widget([
        'config' => [
            'first_data'=>$data,
            'second_data'=>$data,
            'tab_position'=>ZCardSwitcherWidget::position['right'],
            'icon_first'=>'fa-th-large',
            'icon_second'=>'fa-eye',
            'local_storage_key'=>'obdev'
        ]
    ]);
    ?>
</div>
