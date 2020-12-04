<?php


use kartik\builder\Form;
use yii\helpers\Url;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZFileInputWidget;
use zetsoft\widgets\inputs\ZHFileInputWidget;
use zetsoft\widgets\inputs\ZHInputGroupWidget;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inputs\ZTelInputWidget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 5);
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
                'jsonb_7' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZFileInputWidget::class,
                    'options'=>[
                        'config' => [
                            'placeholder'=>'json_2',
                            'hasIcon' => true,
                            'icon'=>'fas fa-user',
                            'uploadUrl' => Url::to(['/site/gg']),

                        ]
                    ],
                ],
            ]
        ],
    ],
]);

$this->activeEnd();

