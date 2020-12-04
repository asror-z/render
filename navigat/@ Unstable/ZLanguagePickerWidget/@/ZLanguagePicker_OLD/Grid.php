<?php


use zetsoft\models\vade\Lang;
use zetsoft\models\vade\Html;
use zetsoft\system\Az;
use kartik\builder\Form;
use zetsoft\system\helpers\ZHTML;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\themes\ZLanguagePickerWidget;


$model = Lang::findOne(1);
if (Az::$app->request->isPost) {
    $request = Az::$app->request->post();
    $model->load($request);
    $model->save();
}

$form = $this->activeBegin();

/*echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
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
                'input' => array(
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZLanguagePickerWidget::class,
                    //'options'=>[],
                ),

            ]
        ],


    ]
]);
 */
$this->activeEnd();
echo ZKSelect2Widget::widget([]) ;
//echo ZLanguagePickerWidget::widget();
