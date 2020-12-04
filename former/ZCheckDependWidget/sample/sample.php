<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\former\shop\ProductItemForm;

use zetsoft\system\Az;
use zetsoft\widgets\former\ZArrayWidget;
use zetsoft\widgets\former\ZCheckDependWidget;
use zetsoft\widgets\former\ZCheckSelectNewWidget;
use zetsoft\widgets\former\ZCheckSelectWidget;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\incores\ZMCheckboxGroupWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inputes\ZSelect2Widget;

$model = new \zetsoft\models\shop\ShopOffer();

echo ZInputWidget::widget([
    'name' => 'name',
    'id' => 'data2-input',
    'modelClassName' => $model->className,
]);

$select  = ZCheckDependWidget::widget([
     'config' => [
         'modelClassName' => $model->className,
         'dependId' => 'data2-input',
         'dependAttr' => 'data2',
         'attr' => 'data',
         'value' => 'Data',
     ]
]);



echo ZDynaWidget::widget([
    'model' => $model,
    'leftBtn' => [
        'check' => [
            'content' => $select,
            'options' => [
                'class' => ' '
            ]
        ]
    ]
]);

