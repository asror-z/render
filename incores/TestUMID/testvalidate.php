<?php


use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\system\validate\ZCoreControlValidator;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\system\Az;

$model = $this->modelGet(CoreInput::class, 6);
/*$model->configs->rules = [
    [ZCoreControlValidate::class]
];*/
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);


?>
<div class="row">
    <div class="col-8 mx-auto">
        <?php
        echo ZFormWidget::widget([
            'model' => $model,
            'form' => $form,
            'config'=> [
                'topBtn' => false,
                'botBtn' => true,
            ],
            'rows' => [
                [
                    'attributes' => [
                        'string_2' => [
                            'widgetClass' => ZInputWidget::class,
                            'type' => Form::INPUT_WIDGET,
                            'options' => [
                                'config' => [
                                    'hasIcon' => false,
                                    'placeholder' => 'Value',
                                    'changeSubmit' => true,
                                    'type' => ZInputWidget::type['text'],
                                ]
                            ]
                        ],
                    ]
                ],
            ]
        ]);
        ?>
    </div>
</div>

<?php
$this->activeEnd();
?>
