<?php


use kartik\editable\Editable;
use zetsoft\former\shop\SizeForm;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\former\ZKFormWidget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */


$items = Az::$app->forms->modelz->data();
/*
if (isset($_POST['hasEditable'])) {
    // use Yii's response format to encode output as JSON
    \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

    // read your posted model attributes
    if ($model->load($_POST)) {
        // read or convert your posted information
        $value = $model->string_3;

        $model->save();
        // return JSON encoded output in the below format
        return ['output' => $value, 'message' => ''];

        // alternatively you can return a validation error
        // return ['output'=>'', 'message'=>'Validation error'];
    }
    // else if nothing to do always return an empty JSON encoded output

    return ['output' => '', 'message' => ''];
}*/


echo Editable::widget([
    'model' => $model,
    'attribute' => 'jsonb_6',
    'type' => 'primary',
    'size' => 'lg',
    'formOptions' => [
        'method' => 'post',
        'action' => [
            'editable',
            'modelClassName' => 'CoreInput',
            'id' => $model->id,
        ],
    ],
    'inputType' => Editable::INPUT_WIDGET,
    'widgetClass' => ZFormWidget::class,
    'options' => [
        'config' => [
            'formClass' => "zetsoft\\former\\shop\\SizeForm",
        ]
    ]
]);


/*
 * 
echo Editable::widget([
    'model' => $model,
    'attribute' => 'zinputwidget',
    'type' => 'primary',
    'size'=> 'lg',
    'inputType' => Editable::INPUT_TEXT,
]);

echo Editable::widget([
    'model' => $model,
    'attribute' => 'zkselect2widget',
    'type' => 'primary',
    'size'=> 'lg',
    'inputType' => Editable::INPUT_WIDGET,
    'widgetClass' => ZKSelect2Widget::class,
]);
*/



