<?php

/**
 *
 *
 * Author:  Asror Zakirov
 *
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */


use zetsoft\system\Az;
use yii\bootstrap\Html;
use zetsoft\widgets\blocks\ZBoxV2Widget;
use yii\widgets\Pjax;

?>
<?php Pjax::begin(); ?>
<?= Html::beginForm(Az::$app->request->url, 'post', ['data-pjax' => '', 'class' => 'form-inline']); ?>
<?= Html::input('text', 'string', Yii::$app->request->post('string'), ['class' => 'form-control']) ?>
<?= Html::submitButton('Hash String', ['class' => 'btn btn-lg btn-primary', 'name' => 'hash-button']) ?>
<?= Html::endForm() ?>
    <h3><?= $stringHash ?></h3>
<?php Pjax::end(); ?>

<?


ZBoxV2Widget::end();

echo HTML::endTag('div');
