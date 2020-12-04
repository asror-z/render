<?php

use kartik\depdrop\DepDrop;
use yii\helpers\Url;
use zetsoft\system\kernels\ZView;

/** @var ZView $this */

echo \zetsoft\widgets\inputes\ZKSelect2Widget::widget([
    'id' => 'model-id',
    'data' => Az::$app->smart->migra->scan(true),
    'name' => 'model'
]);


echo DepDrop::widget([
    'name' => 'attribute',
    'options' => [
        'id' => 'attribute-id',
    ],
    'pluginOptions' => [
        'depends' => ['model-id'],
        'placeholder' => 'Select attribute...',
        'url' => Url::to(['/core/grapes/getWidget2'])
    ]
]);
