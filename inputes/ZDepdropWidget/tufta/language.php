<?php


use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZEditKartikWidget;
use zetsoft\models\core\CoreInput;
use zetsoft\widgets\inputes\ZSelect2Widget;

$model = $this->modelGet(CoreInput::class, 3);
/** @var ZView $this */

$value = $this->sessionGet('jsonb_4') ?? 'ru';

echo ZEditKartikWidget::widget([
    'model' => $model,
    'attribute' => 'jsonb_4',
    'config' => [
        'showButtons' => false,
        'displayValue' => '<img class="imagesFlags" style="width:50px; height:50px" src="/render/asrorz/flags/' . $value . '.png"/>',
        'widgetClass' => ZSelect2Widget::class,
        'options' => [
            'data' => [
                'ru' => 'РУССКИЙ ',
                'en' => 'ENGLISH ',
                'uz' => "O'ZBEKCHA",
                'uzk' => 'ЎЗБЕКЧА ',
            ],
            'value' => $value,
            'config' => [
                'enableEvent' => true,
                'placeholder' => '123',
                'imagePath' => true,
            ],

        ],

    ],
    'event' => [
        'editableSubmit' => <<<JS
        function() {
          
           location.reload();
          
        }
JS,

    ]

]);
