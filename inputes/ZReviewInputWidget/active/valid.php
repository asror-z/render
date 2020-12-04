<?php

use kartik\builder\Form;
use zetsoft\models\core\CoreAdvancedItem;
use zetsoft\system\Az;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZDynaWidgetJaxongir;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\inputes\ZReviewInputWidget;
use zetsoft\widgets\navigat\ZButtonWidget;


$model = $this->modelGet(CoreInput::class, 7);
/** @var ZView $this */

// start|MuminovUmid|2020-10-09
$model->configs->rule = [
    ['zetsoft\\system\\validate\\ZRequiredValidator']
];
// end|MuminovUmid|2020-10-09

//vdd($model->attributes['jsonb_2']);
$form = $this->activeBegin();
$this->modelSave($model);
$this->modelPost();
echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'jsonb_2' => [
                    'type' => Form::INPUT_WIDGET,
                   'widgetClass' => ZReviewInputWidget::class,
                    'options' => [
                        'data' => [
                            '1option'=>$model->attributes['jsonb_2'][0],
                            '2option'=>$model->attributes['jsonb_2'][1],
                            '3option'=>$model->attributes['jsonb_2'][2],
                        ],

                    ],
                ],
            ]
        ],
    ]
]);




$this->activeEnd();
