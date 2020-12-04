<?php

use PhpOffice\PhpSpreadsheet\Shared\OLE\PPS\Root;
use zetsoft\models\shop\ShopCatalog;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZMImageRadioGroupWidget;
use zetsoft\widgets\inputes\ZMImageRadioGroupWidgetAzimjon;
use zetsoft\widgets\inputes\ZSelect2Widget;

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */ ?>
<style>
    [type=radio]:checked, [type=radio]:not(:checked){
        opacity: 1;
        pointer-events: auto;
    }
</style>
<?php


//$current_currency = Az::$app->cores->session->get('currency');
$core_catalog = new ShopCatalog();

echo ZMImageRadioGroupWidgetAzimjon::widget([
    'data' => $core_catalog->_currency,
    'event' => [
        'onclick' => <<<JS
            function () {
                var inputValue = $('input[type="radio"]').val();
                console.log(inputValue)
                $.ajax({
                    method: "GET",
                    url: "/core/product/setCurrencyRadio.aspx",
                    data: {
                        currency: inputValue,
                    },
                    success: function(data){
                        console.log(data);
                    },
                    error:  function() {
                        //alert('error');
                    }
                })
            }
JS,
    ]
]);

/** @var ZView $this */
$this->require( '/webhtm/eyuf/shop/user/common/commonAzimjon.php')

/*echo ZSelect2Widget::widget([
    'config' => [
        'placeholder' => 'Выберите Валюту',
        'allowClear' => true,
        'theme' => ZSelect2Widget::theme['bootstrap'],
        'isHideSearch' => true,
        'selectColor' => '#f2faf2',
        'selectedColor' => '#e8e8e8',
        'size' => ZSelect2Widget::size['lg'],
        'imagePath' => false,
    ],
    'name' => 'currency',
    'data' => $core_catalog->_currency,
    'value' => $current_currency,
    'event' => [
        'select' => <<<JS
                function () {
                    var selectC = $(this);
                    $.ajax({
                        method: "GET",
                        url: "/core/product/setCurrency.aspx",
                        data: {
                        currency: selectC.val(),
                        },
                        success: function(data){
                        console.log(data);
                        },
                        error:  function() {
                        //alert('error');
                        }
                    })
                }
                            
JS,

    ]
]);*/
?>

