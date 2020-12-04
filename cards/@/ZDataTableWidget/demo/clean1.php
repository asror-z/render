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
            "info":     false
        } );
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
        'https://images.pexels.com/photos/1095550/pexels-photo-1095550.jpeg?
        auto=compress&cs=tinysrgb&dpr=1&w=500',
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



<table id="example" class="display" style="width:100%">
    <thead>
    <tr>
        <th>Name</th>
        <th>Position</th>
        <th>Office</th>
        <th>Age</th>
        <th>Start date</th>
        <th>Salary</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Tiger Nixon</td>
        <td>System Architect</td>
        <td>Edinburgh</td>
        <td>61</td>
        <td>2011/04/25</td>
        <td>$320,800</td>
    </tr>
    <tr>
        <td>Garrett Winters</td>
        <td>Accountant</td>
        <td>Tokyo</td>
        <td>63</td>
        <td>2011/07/25</td>
        <td>$170,750</td>
    </tr>
    <tr>
        <td>Ashton Cox</td>
        <td>Junior Technical Author</td>
        <td>San Francisco</td>
        <td>66</td>
        <td>2009/01/12</td>
        <td>$86,000</td>
    </tr>
    <tr>
        <td>Cedric Kelly</td>
        <td>Senior Javascript Developer</td>
        <td>Edinburgh</td>
        <td>22</td>
        <td>2012/03/29</td>
        <td>$433,060</td>
    </tr>
    </tbody>
</table>




<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<table id="examp" class="display align-middle table">
    <thead>
    <tr>
        <th></th>
        <th>Название</th>
        <th>Количество</th>
        <th>Цена</th>
        <th>Всего</th>
        <th>Сумма Доставки</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <tr>
       <td colspan="6">
            Market
       </td>
    </tr>
    <tr >
        <td class="w-25 align-middle">
            <img class="w-50 img-fluid" src=<?=$item->images[0]?> alt="">
        </td>
        <td>
            <div>
                <h6 class="mt-1"><a href=<?$item->url?>>
                        <?=$item->name?>
                    </a>
                </h6>
            </div>
            <div class="d-flex align-items-center justify-content-center">
            <h6 class="font-weight-medium price-format"><?$item->new_price?> <?$item->currency?></h6>
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
                <!--<span class="mb-2 mr-1">{currency_left}</span>-->
                <h6 class="font-weight-medium">
                    <span id="total{id}" class="totals price-format"><?=$item->new_price?></span>
                    <?=$item->currency?>
                </h6>
            </div><!---->
        </td>
        <td>
            <div class="d-flex align-items-center justify-content-center">
                <!--<span class="mb-2 mr-1">{currency_left}</span>-->
                <h6 class="font-weight-medium">
                    <span id="total{id}" class="totals price-format"><?=$item->new_price?></span>
                    <?=$item->currency?>
                </h6>
            </div><!---->
        </td>
        <td>
            <div class="p-0" style="width: 22px; height: 30px; position: relative;">
                <a  data-catalogid="{catalog_id}" class="delete_product_from_cart"><i class="small far fa-trash-alt fp-25 text-success" style="position:absolute; left: 1px"></i>
                </a>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            Общий
        </td>
        <td colspan="3" class="text-right">
            788 990 000.0
        </td>
    </tr>
    </tbody>
</table>






