<?php

use yii\widgets\ActiveForm;
use zetsoft\models\core\CoreInput;

$form = ActiveForm::begin([
    'id' => 'test-form',
    'options' => ['class' => 'form-horizontal'],
    'fieldConfig' => [
        'template' => '<div class="col-md-1">{label}</div><div class="col-md-5">{input}</div><div class="col-md-6">{error}</div>',
    ],
]);
$model = $this->modelGet(CoreInput::class, 6);

?>

<?= $form->field($model, 'bool_5')->checkbox(['uncheck' => $model->bool_5, 'value' => $model->bool_5, 'label' => $model->bool_5]);?>

<?php ActiveForm::end(); ?>
