<?php


use zetsoft\models\page\PageAction;
use zetsoft\models\core\CoreInput;
use zetsoft\system\assets\ZColor;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\navigat\ZButtonWidget_2;
use zetsoft\widgets\navigat\ZButtonWidgetX;
use zetsoft\widgets\navigat\ZButtonWidget;


$model = $this->modelGet(PageAction::class, 20);
/** @var ZView $this */
$this->type = WebItem::type['ajax'];
$items = $this->modelData();
$form = $this->activeBegin();
$this->modelSave($model);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'link' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZButtonWidget_2::class,
                    'options' => [
                        'config' => [
                            'title' => 'Ссылка',
                            'icon' => 'fas fa-external-link-alt',
                            'pjax' => 0,
                            'btnRounded' => false,
                            'btn' => true,
                            'hasIcon' => true,
                            'text' => 'asdaksdkjak',
                            'btnSize' => ZColor::btnSize['btn-mini']
                        ],
                        'event' => [
                            'click' => 'function (event){e.preventDefault(); window.open(this.href, "_blank")}',
                        ],
                    ]
                ],
            ]
        ]
    ]
]);

$this->activeEnd();
