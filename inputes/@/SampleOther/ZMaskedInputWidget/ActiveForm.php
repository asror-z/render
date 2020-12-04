<?php
use kartik\helpers\Html;
use yii\widgets\ActiveForm;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;

$model = $this->modelGet(CoreInput::class, 2);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

$form = ActiveForm::begin([
    'id' => 'widgetform',
    'options' => ['class' => 'form-horizontal'],
]) ?>
<?= $form->field($model, 'zmaskedinputwidget') ?>

<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
    </div>
</div>
<?php ActiveForm::end() ?>




