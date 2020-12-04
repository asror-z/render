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
use zetsoft\system\kernels\ZView;
use yii\widgets\Pjax;

echo HTML::beginTag('div', ['class' => 'col-xs-12']);


?>

<?php
$script = <<< JS
/*
$(document).ready(function() {
    setInterval(function(){ $("#refreshButton").click(); }, 3000);
});*/

JS;
/** @var ZView $this */
$this->registerJs($script);
?>
    <span id="formsection">

    </span>

<?= Az::$app->cores->date->dateTimeFull() ?>
    <a href="<?= Az::$app->request->url ?>" class="hello">adada</a>


<?php
Pjax::widget([
    'id' => 'formsection',  // response goes in this element
    'enablePushState' => false,
    'enableReplaceState' => false,
    'formSelector' => '#options-form',// this form is submitted on change
    'submitEvent' => 'change',
]);

Pjax::widget(['id' => 'formsection', 'linkSelector' => 'a.hello']);


echo HTML::endTag('div');
