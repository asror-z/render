
<?php


use kartik\builder\Form;
use kartik\validators\EmailValidator;
use zetsoft\system\Az;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZTextAreaWidget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

$model->configs->rulesAll = [
  [validatorEmail],
];

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'string_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZTextAreaWidget::class,
                    'options'=>[
                        'config' => [
                            'hasIcon' => true,


                        ]
                    ],
                ],
            ]
        ],
    ],
]);

$this->activeEnd();

