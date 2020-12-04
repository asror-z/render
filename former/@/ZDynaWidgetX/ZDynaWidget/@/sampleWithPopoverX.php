<?php


use kartik\grid\DataColumn;
use rmrevin\yii\fontawesome\FA;
use zetsoft\models\place\PlaceCountry;
use zetsoft\models\ALL\Lang;
use zetsoft\models\App\eyuf\EyufScholar;
use zetsoft\system\actives\ZData;
use zetsoft\system\assets\ZColor;
use zetsoft\system\column\ZKDataColumn;
use zetsoft\system\column\ZKEditableColumn;
use zetsoft\widgets\former\ZKDynaGridNew2Widget;
use zetsoft\widgets\former\ZKDynaGridNewWidget;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidgetTwo;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\notifier\ZPopoverXWidget;

$model = new EyufScholar();

/*$content = ZKDynaGridNewWidget::widget([
    'model' => $model,
    'config' => [
        'columnID' => true,
        'columnSerial' => true,
        'columnAction' => true,
        'columnCheckbox' => true,
        'columnExpand' => false,
        'columnFormula' => false,
        'columnRelation' => true,

    ]
]);*/

$model->configs->before = [
    'user_id' => [
        [
            'class' => ZKDataColumn::class,
            'label' => 'settings',
            'format' => 'raw',
            'value' => function (EyufScholar $model, $key, $index, DataColumn $dataColumn) {
                return ZPopoverXWidget::widget([
                    'config' => [
                        'visible' => true,
                        'placement' => ZPopoverXWidget::placement['bottom'],
                        'buttonIcon' => 'fa fa-' . FA::_COGS,
                        'titleColor' => ZColor::color['primary-color'],
                        'size' => ZPopoverXWidget::size['md'],
                        'titleHeader' => 'Title',
                        
                    ]
                ]);
            }
        ],
    ],


];

echo ZKDynaGridNewWidget::widget([
    'model' => $model
]);
