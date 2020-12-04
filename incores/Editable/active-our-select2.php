<?php


use kartik\builder\Form;
use kartik\editable\Editable;
use kartik\helpers\Html;
use kartik\select2\Select2;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZHFileInputWidget;
use zetsoft\widgets\inputes\ZHInputGroupWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inputes\ZKEditableWidget;
use zetsoft\widgets\inputes\ZKSelect2NewWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();

if (isset($_POST['hasEditable'])) {
    // use Yii's response format to encode output as JSON
    \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

    // read your posted model attributes
    if ($model->load($_POST)) {

        // read or convert your posted information
        $value = $model->zkselect2widget;

        $model->save();
        // return JSON encoded output in the below format
        return ['output' => $value, 'message' => ''];

        // alternatively you can return a validation error
        // return ['output'=>'', 'message'=>'Validation error'];
    }
    // else if nothing to do always return an empty JSON encoded output

    return ['output' => '', 'message' => ''];
}


/*
echo Editable::widget([
    'model' => $model,
    'attribute' => 'zkselect2widget',
    'type' => 'primary',
    'size'=> 'lg',
    'inputType' => Editable::INPUT_WIDGET,
    'widgetClass' => ZKSelect2NewWidget::class,
    'options' => [
        'data' => $items
    ]
]);*/

$editable = Editable::begin([
    'model' => $model,
    'attribute' => 'zinputwidget',
    'asPopover' => true,
    'size' => 'md',
    'displayValue' => '15th Main, OK, 10322',
    'options' => ['placeholder' => 'Enter location...']
]);
$form = $editable->formObject();
echo Html::hiddenInput('kv-complex', '1');
$editable->afterInput =
    $form->field($model, 'zinputwidget')->widget(Select2::classname(), [

        'options' => [
            'placeholder' => 'Enter state...',
            'data' => [
                'jhgkjgvbjkg',
                'jhgkjgvbjkg',
                'jhgkjgvbjkg',
            ], // any list of values
        ],
        'pluginOptions' => ['allowClear' => true]
    ]) . "\n" .
    $form->field($model, 'zinputwidget')->textInput(['placeholder' => 'Enter zip code...']);
Editable::end();

/*
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



