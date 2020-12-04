<?php


use rmrevin\yii\fontawesome\FA;
use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZCountryPickerWidgetOld;
use zetsoft\widgets\inputes\ZCheckboxButtonGroup;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZKSwitchInputWidget1;


/** @var CoreInput $model */
$model = $this->modelGet(CoreInput::class, 6);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelPost();
$this->modelSave($model);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       // 2 column layout
                'bool_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSwitchInputWidget1::class,
                    'options' => [
                        'config'=>[
                            'hasIcon'=>true,
                            'icon' => 'fas fa-'. FA::_USERS,
                        ]
                    ]
                ],
            ]
        ]
    ]
]);

$this->activeEnd();

