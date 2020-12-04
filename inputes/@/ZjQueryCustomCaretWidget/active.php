<?php


use kartik\builder\Form;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;


use zetsoft\widgets\inputes\ZjQueryCustomCaretWidget;
use zetsoft\widgets\inputes\ZJqueryEmojiareaJsWidget;





$model = $this->modelGet(CoreInput::class, 7);
/** @var ZView $this */

$items = \zetsoft\system\Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'string_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZjQueryCustomCaretWidget::class,
                    'options' => [
                    ]
                ],

            ]
        ],
    ],
]);

$this->activeEnd();


