
<?php


use kartik\builder\Form;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\former\ZMultiWidget;
use zetsoft\widgets\former\ZMultiWidgetD;
use zetsoft\widgets\inputes\ZCrlcuMultiselectWidget;

/*$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);*/

/** @var ZView $this */

/*$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);
*/
echo ZFormWidget::widget([ 
    //'model' => $model,
    //'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'jsonb_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZMultiWidgetD::class,
                    'options' => [
                        'formClass' => 'zetsoft\\former\\deps\\DepDropForm'
                    ]

                ],
            ]
        ],
    ],
]);


//$this->activeEnd();

