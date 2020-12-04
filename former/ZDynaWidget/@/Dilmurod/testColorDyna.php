<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use kartik\grid\DataColumn;
use zetsoft\models\drag\DragFormDb;
use zetsoft\models\shop\ShopCategory;
use zetsoft\models\user\User;
use zetsoft\system\Az;
use zetsoft\system\column\ZKDataColumn;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\audios\ZPlyrWidgetDilmurod;
use zetsoft\widgets\notifier\ZModalWidgetD;

//$model->configs->nameOn = [
//    'icon',
//    'shop_brand_ids',
//    'shop_review_option_ids',
//    'shop_option_type',
//];

//$model->configs->after = [
//    'icon' => [
//        [
//            'class' => ZKDataColumn::class,
//            'label' => Az::l('Перейти к настройкам Виджетов'),
//            'width' => '50px',
//            'value' => function ($model, $key, $index, DataColumn $dataColumn) {
//
//                ob_start();
//                ZModalWidgetD::begin([
//                    'config' => [
//                        'width' => '800px'
//                    ]
//
//                ]);
//
//                echo ZPlyrWidgetDilmurod::widget([
//                    'config' => [
//                        'type' => ZPlyrWidgetDilmurod::type['audio']
//                    ]
//                ]);
//                ZModalWidgetD::end();
//                $return = ob_get_clean();
//                return $return;
//            }
//        ],
//    ]
//];

$model = new \zetsoft\models\calls\CallsCdr();
echo ZDynaWidget::widget([
    'model' => $model
]);
