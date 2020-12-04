<?php

use zetsoft\dbitem\shop\ProductItem;
use zetsoft\widgets\market\ZZoomWpWidget;

if (!isset($item)) {

    $item = new ProductItem();
    $item->id = 2;
    $item->name = 'Арахисовая паста с медом 200г';
    $item->title = 'Test Desc';
    $item->new_price = '14825920';
    $item->price_old = 12354 ;
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
    $item->catalogId = 12163;
    $item->max_price = 2155632;
    $item->sale = 'sdadsa';
    $item->is_multi = false;
    $item->min_price = 'adssad';
    $item->in_wish = true;
    $item->in_compare = false;
    $item->cart_amount = 0;
    $item->amount = 3;
    

}
?>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>

<button type="button" class="btn btn-light quick-look">Быстрий просмотр</button>

<div id="bootboxContent" class="container d-none">
    <div class="row">
        <div class="col-7">
            <?php

            echo ZZoomWpWidget::widget([
                "config" => [
                    "width" => "50px",
                    "height" => "50px"
                ]
            ]);
            ?>
        </div>
        <div class="col-5">

        </div>
    </div>
</div>

<script>
    $('.quick-look').on("click",  function (event) {
        var content = $('#bootboxContent');
        $(content).removeClass('d-none');
        bootbox.dialog({
            title: '<h1><?= $item->name ?></h1>',
            message: content,
            size: 'large',
            onEscape: true,
            backdrop: true,
            centerVertical: true,
            buttons: {
                fee: {
                    label: 'Fee',
                    className: 'btn-primary',
                    callback: function(){

                    }
                },
                fi: {
                    label: 'Fi',
                    className: 'btn-info',
                    callback: function(){

                    }
                },
                fo: {
                    label: 'Fo',
                    className: 'btn-success',
                    callback: function(){

                    }
                },
                fum: {
                    label: 'Fum',
                    className: 'btn-danger',
                    callback: function(){

                    }
                }
            }
        })
    });
</script>
