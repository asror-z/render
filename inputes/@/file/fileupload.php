<?php

use app\models\fileupload;
use yii\widgets\ActiveForm;
use zetsoft\models\core\CoreInput;

?>

<?php
/**
 * @var fileupload
 */
$model = coreinput::find()->all();
$form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?=
    $form->field($model, 'imageFile')->fileInput() ?>

    <button>Submit</button>

<?php ActiveForm::end() ?>


