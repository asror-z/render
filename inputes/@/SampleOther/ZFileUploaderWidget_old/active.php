<?php

use zetsoft\service\forms\Modelz;
use \zetsoft\widgets\inputes\ZFileInputWidgetTerrabayt;
use zetsoft\widgets\inputes\ZFileUploaderWidget;

$this->title = "FileInput Widget";
$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 3);
/** @var \zetsoft\system\kernels\ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);


Az::$app->forms->modelz->post();


echo \zetsoft\widgets\former\ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'zfileuploaderwidget' => [
                    'type' => \kartik\builder\Form::INPUT_WIDGET,
                    'widgetClass' => ZFileUploaderWidget::class,
                ],
            ]

        ],


    ]
]);

$this->activeEnd();
