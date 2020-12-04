<?php


use kartik\builder\Form;
use kartik\datetime\DateTimePicker;
use kartik\select2\Select2;
use unclead\multipleinput\MultipleInput;
use zetsoft\former\test\TestLaptopForm;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZCKEditorWidget;
use zetsoft\widgets\inputes\ZRadioButtonGroup;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZMultiWidget;

//$model = $this->modelGet(CoreInput::class, 7);
$model = new TestLaptopForm();
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();

echo ZMultiWidget::widget([
  'config' => [
      'max' => 10,
      'cloneButton' => true,
      'allApp' => $model,
  ]
]);

/*echo $form->field($model, 'ZMultiWidgetNew')->widget(ZMultiWidgetNew::className(), [
    'config' => [
        'max' => 10,
        'cloneButton' => true,
        'columns' => [
            [
                'name'  => 'product_id',
                'type'  => Select2::className(),
                'title' => 'Special Products',
                'defaultValue' => 1,
                'items' => [
                    1 => 'id: 1, price: $19.99, title: product1',
                    2 => 'id: 2, price: $29.99, title: product2',
                    3 => 'id: 3, price: $39.99, title: product3',
                    4 => 'id: 4, price: $49.99, title: product4',
                    5 => 'id: 5, price: $59.99, title: product5',
                ],
            ],
            [
                'name'  => 'time',
                'type'  => DateTimePicker::className(),
                'title' => 'due date',
                'defaultValue' => date('d-m-Y h:i')
            ],
            [
                'name'  => 'count',
                'title' => 'Count',
                'defaultValue' => 1,
                'enableError' => true,
                'options' => [
                    'type' => 'number',
                    'class' => 'input-priority',
                ]
            ]
        ]
    ]
])->label(false);*/


