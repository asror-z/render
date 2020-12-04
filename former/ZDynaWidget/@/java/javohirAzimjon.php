<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */


use zetsoft\models\shop\ShopOrder;
use zetsoft\models\test\TestDilshod;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZUrl;
use zetsoft\widgets\former\ZCheckButtonWidget;
use zetsoft\widgets\former\ZCheckButtonWidgetD;
use zetsoft\widgets\former\ZCheckButtonWidgetJavohir;
use zetsoft\widgets\former\ZCheckSelectWidget;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidgetA;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZSelect2Widget;
use zetsoft\widgets\navigat\ZButtonWidget;

$model = new TestDilshod();


$button = ZCheckSelectWidget::widget([
    'config' => [
        'text' => 'Buttons',
        'class' => 'simple-Report',
        'url' => ZUrl::to([
            '/api/core/app/check',
            'modelClassName' => $model->className,
        ]),
        'widgetClass' => ZSelect2Widget::class,
        'widgetOptions' => [
            'id' => 'statusCall',
            'data' => [
                'new' => Az::l('Новый'),
                'ring' => Az::l('Обзвон'),

                'approved' => Az::l('Одобрен'),
                'cancel' => Az::l('Отказ'),
                'not_ordered' => Az::l('Не заказывал'),
                'double' => Az::l('Дубль'),

                'incorrect' => Az::l('Некорректный'),
                'on_performance' => Az::l('На исполнении'),
                'check' => Az::l('Проверка'),
            ]
        ],
        'attribute' => 'data',
        'modelClassName' => $model->className,
    ],
    'event' => [
        'ajaxSuccess' => <<<JS
function() {
    $('#{$model->className}_Grid_Reset').click();
}
JS,

    ]
]);


echo ZDynaWidget::widget([
    'model' => $model,
    'id' => 'Report',
    'button' => [
        'toolbarButtons' => [
            'content' => $button,
            'options' => ['class' => '']

        ],
    ]
]);
