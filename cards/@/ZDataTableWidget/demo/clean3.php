<?php

use zetsoft\dbitem\shop\ProductItem;
use zetsoft\dbitem\shop\SingleProductItem;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZPriceFormatWidget1;
use zetsoft\widgets\market\ZInputSpinnerWidget;

/** @var ZView $this */
$this->fileJs('https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js');
$this->fileJs('https://cdn.datatables.net/rowgroup/1.1.2/js/dataTables.rowGroup.min.js');
$this->fileJs('https://rawcdn.githack.com/shaack/bootstrap-input-spinner/661ee7a1424acd10985b87b4d64ed1b93b61a85a/src/bootstrap-input-spinner.js');
$this->fileCss('https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css');
?>


<script>

    $(document).ready(function () {
        $('#example').DataTable({
            "paging": true,
            "ordering": true,
            "info": false,
            order: [[2, 'asc']],
            rowGroup: {
                dataSrc: 2
            },
        });
    });


    <?
    echo ZPriceFormatWidget1::widget([])

    ?>

    calculateTotals();

    function calculateTotals() {
        var total = 0;
        let parsed = 0;
        $.each($(".totals"), function (key, value) {
            total += Number(value.innerHTML);
            parsed = parseFloat(total);
        });
        $("#subtotals").html(parsed);
        $("#totalsum").html(+10000);
        $(".{class}").inputSpinner();
    }

    $(".delete_product_from_cart").on("click", function () {
        var catalog_id = $(this).data('catalogid');
        console.log(catalog_id);
        var el = $(this);
        $.ajax({
            method: "GET",
            url: "/core/product/setToCart.aspx",
            data: {
                catalog_id: catalog_id,
                amount: 0,
            },
            success: function (data) {
                el.parents(".product_item:first").remove();
                calculateTotals();
            },
            error: function () {
                alert('error');
            }
        });
    });

    /*$("#cartReview").remove();*/
    function inputchange() {
        var newValue = $(this).val();
        var price = $(this).data('price');

        $('#total' + $(this).data('id')).html(newValue * price);
        var total = 0;
        var catalog_id = $(this).data('catalogid');

        $.each($(".totals"), function (key, value) {
            total += Number(value.innerHTML);
        });
        let parsed = parseFloat(total);

        $("#subtotals").html(parsed);
        $("#totalsum").html(Number($("#shipping").html()) + Number($("#subtotals").html()));

        $.ajax({
            method: "GET",
            url: "/core/product/setToCart.aspx",
            data: {
                catalog_id: catalog_id,
                amount: newValue,
            },
            success: function (data) {
                $(".wishCount").html(data);
            },
            error: function () {
                alert('error');
            }
        });
    }

    $("#totalsum").html(Number($("#shipping").html()) + Number($("#subtotals").html()));

    $('#showCartBtn').on('click', function (e) {
        onclick = $(this).attr('onclick');
        $(this).attr('onclick', '');
        showConfirm(onclick);
        return false;
    });

</script>

<?php


if (!isset($item)) {

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
    $item->cart_amount = 1;
    $item->rating = 3.5;
    $item->discount = -10;
    $item->catalogId = 19;
    $item->sale = 'sdadsa';
    $item->is_multi = false;
    $item->in_wish = true;
    $item->in_compare = false;

}


?>

<table id="example" class="display w-100">
    <thead>
    <tr>
        <th>Название</th>
        <th>Количество</th>
        <th>Цена</th>
        <th>Общая сумма</th>
        <th>Удалить</th>
    </tr>
    </thead>
    <tbody>
    <tr class="product_item">
        <td class="align-middle">
            <img class="w-50 img-fluid" src=<?= $item->images[0] ?> alt="">
            <div>
                <h6 class="mt-1"><a href=<? $item->url ?>>
                        <?= $item->name ?>
                    </a>
                </h6>
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
                <h6 class="font-weight-medium price-format"><? echo $item->new_price ?><? echo $item->currency ?></h6>
            </div>
        </td>
        <td>
            <div class="d-flex align-items-center justify-content-center">

                <h6 class="font-weight-medium"> <span id="total{id}" class="
                   totals price-format"><? echo $item->currency ?></span></h6>
            </div>
        </td>
        <td>
            <div class="p-0" style="width: 22px; height: 30px; position: relative;">
                <a data-catalogid="{catalog_id}" class="delete_product_from_cart"><i
                            class="small far fa-trash-alt fp-25 text-success" style="position:absolute; left: 1px"></i>
                </a>
            </div>
        </td>
    </tr>
    <tr>
        <td class="align-middle">
            <img class="w-50 img-fluid" src=<?= $item->images[0] ?> alt="">
            <div>
                <h6 class="mt-1"><a href=<? $item->url ?>>
                        <?= $item->name ?>
                    </a>
                </h6>
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
                <h6 class="font-weight-medium price-format"><? echo $item->new_price ?><? echo $item->currency ?></h6>
            </div>
        </td>
        <td>
            <div class="d-flex align-items-center justify-content-center">
                <h6 class="font-weight-medium price-format"><? echo $item->new_price ?><? echo $item->currency ?></h6>
            </div>
        </td>
        <td>
            <div class="p-0" style="width: 22px; height: 30px; position: relative;">
                <a data-catalogid="{catalog_id}" class="delete_product_from_cart"><i
                            class="small far fa-trash-alt fp-25 text-success" style="position:absolute; left: 1px"></i>
                </a>
            </div>
        </td>
    </tr>
    </tbody>
</table>






