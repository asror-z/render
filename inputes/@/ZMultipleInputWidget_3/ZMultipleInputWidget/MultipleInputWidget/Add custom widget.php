<?php


use kartik\builder\Form;
use kartik\datetime\DateTimePicker;
use kartik\select2\Select2;
use unclead\multipleinput\MultipleInput;
use yii\web\JsExpression;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZCKEditorWidget;
use zetsoft\widgets\inputes\ZRadioButtonGroup;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZLeafletOldWidget;
use zetsoft\widgets\testing\ZPrettyCheckboxWidget;

$model = $this->modelGet(CoreInput::class, 7);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

/* echo  $form->field($model, 'ZMultiWidgetNew')->widget(MultipleInput::className(), [
    'min' => 0,
    'max' => 4,
    'columns' => [
       

        [
            'name'  => 'user_id',
            'type'  => ZKSelect2Widget::className(),
            'title' => 'User',
            'defaultValue' => 1,
            'value' => [
                1 => 'User 1',
                2 => 'User 2'
            ]
            
        ],


        [
            'name'  => 'birth',
            'type'  => \kartik\date\DatePicker::className(),
            'title' => 'Birth',
           

            'options' => [
                'pluginOptions' => [
                    'format' => 'dd.mm.yyyy',
                    'todayHighlight' => true
                ]
            ]
        ],

    ]
    ])->label(false); */





   
    echo $form->field($model, 'ZMultiWidgetNew')->widget(MultipleInput::className(), [
        'max' => 4,
        'columns' => [
            


            [
                'name' => 'phoneid',
                'title' => 'Select2',
                'type' => \kartik\widgets\Select2::className(),
                'options' => [
                    'pluginOptions' => [
                        'allowClear' => true,
                        'minimumInputLength' => 7,
                        'ajax' => ['url' => \yii\helpers\Url::to(['phone/mobile-phone-list'])],
                        'dataType' => 'json',
                        'data' => [1,2,3],
                        'escapeMarkup' => new JsExpression('function (markup) { return markup; }'),
                        'templateResult' => new JsExpression('function(city) { return city.text; }'),
                        'templateSelection' => new JsExpression('function (city) { return city.text; }'),
                    ],
                ],
            ],


            [
                'name' => 'phoneid',
                'title' => 'Select2',
                'type' => \kartik\widgets\Select2::className(),
                'options' => [
                    'pluginOptions' => [
                        'allowClear' => true,
                        'minimumInputLength' => 7,
                        'ajax' => ['url' => \yii\helpers\Url::to(['phone/mobile-phone-list'])],
                        'dataType' => 'json',
                        'data' => [1,2,3],
                        'escapeMarkup' => new JsExpression('function (markup) { return markup; }'),
                        'templateResult' => new JsExpression('function(city) { return city.text; }'),
                        'templateSelection' => new JsExpression('function (city) { return city.text; }'),
                    ],
                ],
            ],



            [
                'name' => 'phoneid',
                'title' => 'Select2',
                'type' => ZKSelect2Widget::className(),
                'options' => [
                    'pluginOptions' => [
                        'allowClear' => true,
                        'minimumInputLength' => 7,
                        'ajax' => ['url' => \yii\helpers\Url::to(['phone/mobile-phone-list'])],
                        'dataType' => 'json',
                        'data' => [1,2,3],
                        'escapeMarkup' => new JsExpression('function (markup) { return markup; }'),
                        'templateResult' => new JsExpression('function(city) { return city.text; }'),
                        'templateSelection' => new JsExpression('function (city) { return city.text; }'),
                    ],
                ],
            ],







            [
                'name'  => 'time',
                'type'  => DateTimePicker::className(),
                'title' => 'due date',
                'defaultValue' => date('d-m-Y h:i')
            ],
        ]
     ]);



$this->activeEnd();

