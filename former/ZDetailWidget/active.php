<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */


use kartik\builder\Form;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\models\core\CoreInput;
use zetsoft\widgets\former\ZDetailWidget;

$model = $this->modelGet(CoreInput::class, 7);
/** @var ZView $this */

//$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);
/*
echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'jsonb_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZDetailWidget::class,
                    'options' => [
                        'model' => new \zetsoft\models\core\CoreMenu()
                    ]
                ],
            ]
        ],
    ],
]);*/


echo ZDetailWidget::widget([
    'model' => new \zetsoft\models\menu\Menu(),
    'config' => [
        'mode' => ZDetailWidget::mode['edit'],
    ],
]);

$this->activeEnd();
