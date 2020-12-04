<?php


use kartik\builder\Form;
use zetsoft\models\core\CoreInput;
use zetsoft\models\test\TestFile2;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\former\ZMultiFormWidget;
use zetsoft\widgets\former\ZMultiWidget;
use zetsoft\widgets\inputes\ZFileInputWidget;
use zetsoft\widgets\inputs\ZHFileInputWidget;
use zetsoft\widgets\inputs\ZHInputGroupWidget;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inputs\ZTelInputWidget;

//$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 5);
$model = $this->modelGet(TestFile2::class, 3);
//$model = new TestFile2();
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
                'cbu' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZFormWidget::class,
                    'options'=>[
                        'config' => [
                            'formClass' => 'zetsoft\\former\\deps\\DepsDropForm',

                        ]
                    ],
                ],
            ]
        ],
    ],
]);

$this->activeEnd();

