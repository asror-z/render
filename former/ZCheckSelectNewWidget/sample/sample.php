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
use zetsoft\widgets\former\ZCheckSelectNewWidget;
use zetsoft\widgets\former\ZCheckSelectWidget;
use zetsoft\widgets\former\ZDynaCheckWidget;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\incores\ZMCheckboxGroupWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inputes\ZSelect2Widget;

$model = new \zetsoft\models\shop\ShopOrder();

$select  = ZDynaCheckWidget::widget([
     'config' => [
         'modelClassName' => $model->className,
         'inputAttr' => 'data',
        /* 'attr' => 'data',
         'value' => 'Name o\'zgartirildi!',*/
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

