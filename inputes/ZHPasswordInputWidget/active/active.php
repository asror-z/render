<?php


use kartik\builder\Form;
use rmrevin\yii\fontawesome\FA;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZHPasswordInputWidget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
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
                'string_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZHPasswordInputWidget::class,
                     'options' => [
                         'config' => [
                             'hasIcon' => true,
                             'icon' =>'fas fa-'. FA::_USERS
                         ]
                     ]
                ],
            ]
        ],
    ],


]);

$this->activeEnd();

