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


$script = <<< JS
$(document).ready(function() {
    setInterval(function(){ $("#zGrid").click(); }, 1000);
});



JS;
$this->registerJs($script);
?>


<?php

Pjax::begin([
    'id' => 'formsection',
    'linkSelector' => '#zGrid'
]);

?>

    <h1>Current time: <?= date('H:i:s') ?></h1>

<?php Pjax::end(); ?>

<?

echo Html::a("Refresh", Az::$app->request->url, [
    'class' => 'btn btn-lg btn-primary',
    'id' => 'zGrid',
    'data-pjax' => 1
]);


echo HTML::endTag('div');
