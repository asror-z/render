<?php

use yii\bootstrap\ActiveForm;
use unclead\multipleinput\TabularInput;
use yii\helpers\Html;
use \unclead\multipleinput\examples\models\Item;
use unclead\multipleinput\examples\models\ExampleModel;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use unclead\multipleinput\MultipleInput;
// use zetsoft\widgets\inputes\ZCKEditorWidget;
// use vova07\fileapi\behaviors\UploadBehavior;

$model = $this->modelGet(CoreInput::class, 7);

$items = $this->modelData();
$form = $this->activeBegin();
$this->modelSave($model);
$form = ActiveForm::begin([
     'enableAjaxValidation'      => true,
     'enableClientValidation'    => false,
     'validateOnChange'          => false,
     'validateOnSubmit'          => true,
     'validateOnBlur'            => false,
]);

echo $form->field($model, 'schedule')->widget(MultipleInput::className(), [
    'rendererClass' => \unclead\multipleinput\renderers\ListRenderer::class,
    'addButtonPosition' => MultipleInput::POS_ROW, // show add button inside of the row
    'extraButtons' => function ($model, $index, $context) {
        if ($index === 0) {
            return Html::tag('div', 'Add object', ['class' => 'mi-after-add']);
        }

        return Html::tag('div','Remove object', ['class' => 'mi-after-remove']);
    },
    'layoutConfig' => [
        'offsetClass' => 'col-md-offset-2',
        'labelClass' => 'col-md-2',
        'wrapperClass' => 'col-md-6',
        'errorClass' => 'col-md-offset-2 col-md-6',
        'buttonActionClass' => 'col-md-offset-1 col-md-2',
    ]]);
ActiveForm::end();
?>
