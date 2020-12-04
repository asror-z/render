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
use zetsoft\widgets\blocks\ZNProgressWidget;
use zetsoft\widgets\blocks\ZRefreshWidget;
use zetsoft\widgets\themes\ZCardWidget;
use zetsoft\widgets\themes\ZCardWidget;

echo HTML::beginTag('div', ['class' => 'col-xs-12']);


echo ZNProgressWidget::widget([

]);




$script = <<< JS

$(document).ready(function() {
   setInterval(function(){ $("#zGrid").click(); }, 1000);
});


var asrorz = function() {
    
};

       
 jQuery(document).on('pjax:end', function () {

    console.log('Pjax End Started | ' + $.AsrorZ.zDate());

    if ($.AsrorZ.refresh)
        $.AsrorZ.zRefreshMethod();
});


JS;
// $this->registerJs($script);


?>


<?php

echo ZRefreshWidget::widget([
    'config' => [
        'type' => ZRefreshWidget::type['pjax'],
        'interval' => 1000,
        'stopBlock' => 'div#page',
        'pjaxButton' => '#zGrid'
    ]
]);



Pjax::begin([
    'id' => 'formsection',
    'linkSelector' => '#zGrid'
]);


ZCardWidget::begin();

echo Html::a("Refresh", Az::$app->request->url, [
    'class' => 'btn btn-lg btn-primary',
    'id' => 'zGrid',
    'data-pjax' => 1
]);
?>


    <h1>Current time: <?= date('H:i:s') ?></h1>
    <h1>Current time: <?= date('H:i:s') ?></h1>
    <h1>Current time: <?= date('H:i:s') ?></h1>
    <h1>Current time: <?= date('H:i:s') ?></h1>
    <h1>Current time: <?= date('H:i:s') ?></h1>
    <h1>Current time: <?= date('H:i:s') ?></h1>
    <h1>Current time: <?= date('H:i:s') ?></h1>
    <h1>Current time: <?= date('H:i:s') ?></h1>
    <h1>Current time: <?= date('H:i:s') ?></h1>
    <h1>Current time: <?= date('H:i:s') ?></h1>
    <h1>Current time: <?= date('H:i:s') ?></h1>
    <h1>Current time: <?= date('H:i:s') ?></h1>
    <h1>Current time: <?= date('H:i:s') ?></h1>
    <h1>Current time: <?= date('H:i:s') ?></h1>
    <h1>Current time: <?= date('H:i:s') ?></h1>


<?php


ZCardWidget::end();


?>


    <h1>Current time: <?= date('H:i:s') ?></h1>

<?php
Pjax::end();
?>

<?



echo HTML::endTag('div');
