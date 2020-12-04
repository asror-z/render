<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

use kartik\detail\DetailView;
use rmrevin\yii\fontawesome\FA;
use yii\helpers\Url;
use zetsoft\models\App\eyuf\EyufDocument;
use zetsoft\models\App\eyuf\EyufReport;
use zetsoft\models\cpas\CpasOffer;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZUrl;
use zetsoft\widgets\navigat\ZButtonWidget;

$model = CpasOffer::findOne(1);


$columns = [];


foreach ($model->columns as $key => $formDb) {

    if (!$formDb->showDetail)
        continue;

    $widgetOptions = ZArrayHelper::merge([
        'class' => $formDb->widget
    ], $formDb->options);


    $columns[] = [
        'attribute' => $key,
        'type' => DetailView::INPUT_WIDGET,
        'widgetOptions' => $widgetOptions,
    ];
}

$button = ZButtonWidget::widget([
    'config' => [
        'icon' => 'fas fa-' . FA::_TRASH_ALT,
        'type' => ZButtonWidget::btnType['button'],
        'btnStyle' => ZButtonWidget::btnStyle['btn-transparent'],
        'class' => 'text-white',
        'btnFloating' => false,
        'btn' => false,
        'hasIcon' => true,
        'iconColor' => '#ffffff',
        'url' => ZUrl::to([
            '/core/tester/detail-view/delete-detail',
            'id' => $model->id,
            'modelClass' => 'Report',

        ]),
    ],
]);

// View file rendering the widget
echo DetailView::widget([
    'model' => $model,
    'attributes' => $columns,
    'mode' => 'view',
    'bordered' => true,
    'striped' => true,
    'condensed' => true,
    'responsive' => true,
    'hover' => true,
    'buttons1' => "{update} {delete}",
    'panel' => [
        'type' => DetailView::TYPE_DANGER,
    ],
    'updateOptions' => [

        'params' => ['model' => $this->model],
    ],
    'saveOptions' => [

        'params' => ['model' => $this->model],
    ],
    'deleteOptions' => [
        /*'url' => ZUrl::to([
            '/core/tester/detail-view/detail-view',
            'id' => $model->id
        ]),*/
        //'params' => ['id' => $model->id],
    ],
    // 'container' => ['id' => 'kv-asset'],
    'formOptions' => [
        'action' => ZUrl::to([
            '/core/tester/detail-view/detail-view',
            'id' => 3
        ])
    ]
]);

