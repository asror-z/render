<?php


use kartik\builder\Form;
use unclead\multipleinput\MultipleInput;
use yii\bootstrap\Html;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZCKEditorWidget;

$model = $this->modelGet(CoreInput::class, 7);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);


echo $form->field($model, 'emails')->widget(MultipleInput::className(), [
        'max' => 5,
        'allowEmptyList' => true
    ])
    ->label(false);
