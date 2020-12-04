<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\dbitem\data\ALLApp;
use zetsoft\dbitem\data\ConfigDB;
use zetsoft\dbitem\data\Form;
use zetsoft\dbitem\shop\SingleProductItem;
use zetsoft\service\forms\Active;
use zetsoft\system\Az;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\incores\ZMCheckboxGroupWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inputes\ZMImageRadioGroupWidget;
use zetsoft\widgets\market\ZZoomWpWidget;


if (!isset($product)) {
    $product_id = 309;
    $product = Az::$app->market->product->product($product_id, null, true);
}


$configs = new ConfigDB();
$configs->columnCount = 2;
$active = new Active();
$active->id = 'formModal';
$active->childClass = 'px-2 form-child fp-20 ';
$active->class = 'row my-3 d-flex justify-content-between flex-wrap';
$form = $this->activeBegin($active);
$app = new ALLApp();
$app->configs = $configs;

foreach ($product->properties as $key => $property_group) {
    $string_n = [];
    $column1 = new Form();
    $column1->title = $property_group->name;
    $column1->widget = ZMCheckboxGroupWidget::class;
    $column1->options = [
        'data' => $string_n,
        'config' => [
            /*'url' => ZMCheckboxGroupWidget::imageUrl['radio'],
            'checkMarkPosition' => ZMCheckboxGroupWidget::checkMarkPosition['top-left'],
            'checkMarkSize' => '12px',
            'display' => ZMCheckboxGroupWidget::display['inline-block'],
            'imageSize' => '', //only pixel*/
            'title' => $property_group->name,
            'type' => ZMCheckboxGroupWidget::type['MaterialRadioButton'],
        ],

           /* 'event' => [
                'onclick' => <<<JS
        function() {
             $(this).submit();
        }
    JS,

            ]*/
    ];
    $array[] = $property_group->items;


    foreach ($property_group->items as $option) {
        $string_n[] = $option;
    }

    $column1->value = array_key_first($property_group->items);
    $column1->data = $property_group->items;
    $column1->rules = [[validatorRequired]];
    $app->columns['key' . $key] = $column1;

}

$column = new Form();
$column->title = $product->id;
$column->widget = ZInputWidget::class;
$column->options = [
    'config' => [
        'type' => ZInputWidget::type['hidden']
    ]
];
$column->value = $product->id;
$catalogId = $product->id;
$app->columns['product_id'] = $column;
$app->cards = [];
$model = Az::$app->forms->former->model($app);
echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,

    'config' => [
        'topBtn' => false,
        'botBtn' => false,
    ],
    'event' => [
        'formChange' => <<<JS
                        function (event) {
                           
                            $.ajax({
                                method: 'POST',
                                url: '/core/product/getCompanyD.aspx',
                                data: $('#formModal').serialize(),
                                beforeSend:function(){
                                    $('.lds-roller').show();
                                },
                                success: function(response) {
                                     $('#market').html(response);
                                     $('.lds-roller').hide();
                                     if (response.length>189){
                                        $('html ,body').animate({
                                            scrollTop: $("#market").offset().top -143
                                        }, 1000);}
                                     
                                                                      
                                }
                            });
                          
                        }
JS
    ]
]);

$this->activeEnd();

?>
<style>
    .form-child {
        margin-right: 23px;
    }

    .form-child .form-check {
        padding-left: 0;
    }
    .lds-roller {
        position: absolute;
        margin-top:50px;
        margin-left:-15px;
        padding: 10% 10%;
        z-index:99999999999999;
        width: 100%;
        height: 100%;
        background-color: rgba(255,255,255, 0.84);
    }
    .lds-roller div {
        animation: lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
        transform-origin: 40px 40px;
    }
    .lds-roller div:after {
        content: " ";
        display: block;
        position: absolute;
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: green;
        margin: -4px 0 0 -4px;
    }
    .lds-roller div:nth-child(1) {
        animation-delay: -0.036s;
    }
    .lds-roller div:nth-child(1):after {
        top: 63px;
        left: 63px;
    }
    .lds-roller div:nth-child(2) {
        animation-delay: -0.072s;
    }
    .lds-roller div:nth-child(2):after {
        top: 68px;
        left: 56px;
    }
    .lds-roller div:nth-child(3) {
        animation-delay: -0.108s;
    }
    .lds-roller div:nth-child(3):after {
        top: 71px;
        left: 48px;
    }
    .lds-roller div:nth-child(4) {
        animation-delay: -0.144s;
    }
    .lds-roller div:nth-child(4):after {
        top: 72px;
        left: 40px;
    }
    .lds-roller div:nth-child(5) {
        animation-delay: -0.18s;
    }
    .lds-roller div:nth-child(5):after {
        top: 71px;
        left: 32px;
    }
    .lds-roller div:nth-child(6) {
        animation-delay: -0.216s;
    }
    .lds-roller div:nth-child(6):after {
        top: 68px;
        left: 24px;
    }
    .lds-roller div:nth-child(7) {
        animation-delay: -0.252s;
    }
    .lds-roller div:nth-child(7):after {
        top: 63px;
        left: 17px;
    }
    .lds-roller div:nth-child(8) {
        animation-delay: -0.288s;
    }
    .lds-roller div:nth-child(8):after {
        top: 56px;
        left: 12px;
    }
    @keyframes lds-roller {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }

</style>

