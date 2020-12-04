<?php


use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;

use zetsoft\widgets\inputes\ZKStarRatingWidget;

$model = $this->modelGet(CoreInput::class, 7);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       // 2 column layout
                'string_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => \zetsoft\widgets\inputes\ZKStarRatingWidget_1::class,
                    'options' => [
                        'config' => [
                            'hasIcon' => true
                        ],

                    ]
                ],

            ]
        ],
        /* [
             'attributes' => [       // 2 column layout
                 'string_4' => [
                     'type' => Form::INPUT_WIDGET,
                     'widgetClass' => ZKStarRatingWidget::class,
                     'options'=>[
                         'value' => 1,
                     ]
                 ],

             ]
         ]*/


    ]
]);


$this->activeEnd();

