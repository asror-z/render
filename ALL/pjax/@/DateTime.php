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
use yii\widgets\Pjax;

echo HTML::beginTag('div', ['class' => 'col-xs-12']);

?>

<?php Pjax::begin([
    
]); ?>
<?= Html::a("Show Time", Az::$app->request->url, ['class' => 'btn btn-lg btn-primary']) ?>
<?= Html::a("Show Date", Az::$app->request->url, ['class' => 'btn btn-lg btn-success']) ?>


<?php Pjax::end(); ?>

<?


echo HTML::endTag('div');
