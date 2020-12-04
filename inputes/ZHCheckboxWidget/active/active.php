<?php


use rmrevin\yii\fontawesome\FA;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZHCheckboxWidget;

$model = $this->modelGet(CoreInput::class, 10);
/** @var ZView $this */

$form = $this->activeBegin();
$this->modelSave($model);
$this->modelPost();

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       // 2 column layout
                'bool_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZHCheckboxWidget::class,
                     'options' => [
                        'config' => [
                            'hasPlace' => true,
                            'hasIcon' => false,
                            'icon' => 'fas fa-'. FA::_USERS,
                         ]
                     ],
                ],
            ]
        ]
    ]
]);

$this->activeEnd();

