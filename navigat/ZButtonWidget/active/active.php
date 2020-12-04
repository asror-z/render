<?php


use zetsoft\models\page\PageAction;
use zetsoft\models\core\CoreInput;
use zetsoft\system\assets\ZColor;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\helpers\ZUrl;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\navigat\ZButtonWidget1;


$model = $this->modelGet(PageAction::class, 20);
/** @var ZView $this */
$items = $this->modelData();
$form = $this->activeBegin();
$this->modelSave($model);
$urlActive = ZUrl::to([
    'setActive',
    'dyna_config_id' => '123',
    'url' => 'asd'
]);
echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'link' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZButtonWidget1::class,
                    'options' => [
                        'config' => [
                            'text' => Az::l('Активировать'),
                            //'icon' => 'fas fa-edit',
                            'btnType' => ZButtonWidget1::btnType['link'],
                            'btnRounded' => false,
                            'btnSize' => ZColor::btnSize['btn-md'],
                            'hasIcon' => false,
                            'hasConfirm' => true,
                            'confirm' => Az::l('Вы уверены?'),
                            'pointer-events' => 'none',
                            'readonly'=> true,
                        ],
                        'event' => [
                            'confirmEvent' => <<<JS
             
                     window.location.href = '$urlActive';
      
JS,

                        ]
                    ]
                ],
            ]
        ]
    ]
]);

$this->activeEnd();
