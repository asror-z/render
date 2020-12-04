<?php
use yii\helpers\Html;
use yii\widgets\Pjax;

Pjax::begin(['id' => 'id-pjax']);

Html::beginForm(['site/form-submission'], 'post', ['data-pjax' => '', 'class' => 'form-inline']);
Html::input('text', 'string', Yii::$app->request->post('string'), ['class' => 'form-control']);
Html::submitButton('Hash String', ['class' => 'btn btn-lg btn-primary', 'name' => 'hash-button']);
Html::endForm();

 ?>
<h3><?= $stringHash?></h3>

<?
Pjax::end();
?>
