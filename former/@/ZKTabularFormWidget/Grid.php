<?php


use zetsoft\models\Computer;
use zetsoft\models\core\CoreInput;
use zetsoft\widgets\former\ZFormWidget;
use yii\helpers\ArrayHelper;


$req = Computer::find()->select('id,name')->limit(9)->all();

$items = ArrayHelper::map($req, 'id', 'name' );

$model = new CoreInput();

$formModel = new Computer();

$dataProvider = $formModel->search(\Yii::$app->request->queryParams);

$form = $this->activeBegin();

$this->modelSave($model);




echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    /*'rows' => [
        [
            'attributes' => [
                'actions' => [
                    'type' => Form::INPUT_RAW,
                    'value' => '<div style="text-align: right; margin-top: 20px">' .
                        ZHtml::resetButton('Reset', [
                            'class' => 'btn btn-secondary',
                            ''
                        ]) . ' ' .
                        ZHtml::submitButton('Submit', [
                            'class' => 'btn btn-primary',
                            'id' => 'submitButton',
                        ]) .
                        '</div>'
                ],
            ],
        ],
        [
            'attributes' => [       // 2 column layout
                'name' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKTabularFormWidget::class,
                    'options'=> [
                        'dataProvider'=>$dataProvider,
                        'attributes'=>[
                            'name' => [
                                'type' => Form::INPUT_WIDGET,
                                'widgetClass' => 'zetsoft\widgets\inputes\ZKTimePickerWidget',
                            ]
                            ],
                             'data' => $items
                        ],

                    ],

                ],
            ],

    ]*/
]);

$this->activeEnd();

