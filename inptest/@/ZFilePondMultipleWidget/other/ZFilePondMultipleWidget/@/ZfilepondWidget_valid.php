<?php

use kartik\builder\Form;
use rmrevin\yii\fontawesome\FA;
use zetsoft\models\place\PlaceCountry;use zetsoft\models\App\eyuf\EyufScholar;use zetsoft\service\forms\Modelz;
use zetsoft\system\assets\ZColor;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\former\ZViewWidget;use zetsoft\widgets\inputes\ZFileInputWidget;
use zetsoft\widgets\inputes\ZFileInputWidget_JK;
use zetsoft\widgets\inptest\ZFilepondWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\themes\ZCardWidget;


$this->title = "FilePond Widget";
$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var \zetsoft\system\kernels\ZView $this */

$form = $this->activeBegin();
$this->modelSave($model);
$model->configs->rulesAll = [
    [validatorFile]
];


echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'jsonb_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZFilepondWidget::class,
                    'options' => [

                    ]

                ],
                 
                
            ]

        ],


    ],


]);

$this->activeEnd();












