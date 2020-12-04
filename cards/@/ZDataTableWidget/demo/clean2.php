    <?php


/** @var ZView $this */
 $this->fileJs('https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js');
 $this->fileCss('https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css');
?>


<script>

    $(document).ready(function() {
        $('#example').DataTable( {
            "paging":   true,
            "ordering": true,
            "info":     false,
        });
    } );

</script>

<?php

use zetsoft\dbitem\shop\ProductItem;
use zetsoft\dbitem\shop\SingleProductItem;
use zetsoft\system\kernels\ZView;use zetsoft\widgets\market\ZInputSpinnerWidget;

if(!isset($item)){

    $item = new SingleProductItem();
    $item->id = 2;
    $item->name = 'Арахисовая паста с медом 200г';
    $item->title = 'Test Desc';
    $item->new_price = 14825920;
    $item->price_old = 188920;
    $item->barcode = 34234234;
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
    $item->cart_amount=1;
    $item->rating = 3.5;
    $item->discount = -10;
    $item->catalogId = 19;
    $item->sale = 'sdadsa';
    $item->is_multi = false;
    $item->in_wish = true;
    $item->in_compare = false;

}


?>
    <link rel="stylesheet" href="./asset/dt_style.css">
    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th class="fp-20 font-weight-light">Название</th>
            <th class="fp-20 font-weight-light">Количество</th>
            <th class="fp-20 font-weight-light">Цена</th>
            <th class="fp-20 font-weight-light">Общая сумма</th>
            <th class="fp-20 font-weight-light">Удалить</th>
        </tr>
        </thead>
        <tbody class="table-basket" style=" background-color: #fafafa;">
        <tr>
            <td class="align-middle d-flex table-basket" style=" background-color: #fafafa;">
                <img class="w-20 img-fluid" src=<?=$item->images[0]?> alt="">
                <div>
                    <a class="text-muted fp-20" <?$item->url?>>
                            <?=$item->name?>
                        </a>

                </div>
            </td>
            <td>
                <div class="w-50">
                    <?php
                    echo ZInputSpinnerWidget::widget([
                        'value' => $item->cart_amount,
                        'config' => [
                            'attr' => "data-catalogid='$item->catalogId ?? 0' data-price='$item->new_price' data-id='$item->id'",
                            'decimals' => '0'
                        ],
                        'event' => [
                            'change' => "inputchange"
                        ]
                    ]);
                    ?>
                </div>

            </td>
            <td>

                <div class="d-flex align-items-center justify-content-center">
                    <h6 class="font-weight-normal text-muted price-format"><?echo $item->new_price?> <?echo $item->currency?></h6>
                </div>
            </td>
            <td>
                <div class="d-flex align-items-center justify-content-center">
                    <h6 class="font-weight-normal text-muted price-format"><?echo $item->new_price?> <?echo $item->currency?></h6>
                </div>
            </td>
            
            <td>
                <div class="p-0" style="width: 22px; height: 30px; position: relative;">
                    <a  data-catalogid="{catalog_id}" class="delete_product_from_cart"><i class="small far fa-trash-alt fp-25 text-success" style="position:absolute; left: 1px"></i>
                    </a>
                </div>
            </td>
        </tr>
        </tbody>
    </table>






