<?php


use rmrevin\yii\fontawesome\FA;
use rmrevin\yii\fontawesome\FAS;
use zetsoft\system\assets\ZColor;
use zetsoft\system\helpers\ZUrl;

// use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\former\ZAjaxWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\themes\ZColWidget;
use zetsoft\widgets\themes\ZRowWidget;

?>

    <input type="text" id="input">
    <div class="res"></div>
    <div class="cooler"></div>

<?php
echo ZButtonWidget::widget([
    'config' => [
        'target' => ZButtonWidget::target['_blank'],
        'btnStyle' => ZButtonWidget::btnStyle['btn-outline-dark'],
        'btnType' => ZButtonWidget::btnType['submit'],
        'text' => 'send ajax',
        'class' => 'send ajax',
        'btnRounded' => false,
        'btnPaddingLeft' => ZButtonWidget::btnScale['default'],
        'btnPaddingRight' => ZButtonWidget::btnScale['default'],
        'btnPaddingTop' => ZButtonWidget::btnScale['default'],
        'btnPaddingBottom' => ZButtonWidget::btnScale['default'],
        'btnIconSize' => ZButtonWidget::btnScale['default'],
        'btnFontSize' => ZButtonWidget::btnScale['default'],
        'btnHeight' => ZButtonWidget::btnScale['default'],
        'btnIconPadding' => ZButtonWidget::btnScale['default'],
        'btnSize' => ZButtonWidget::btnSize['btn-micro'],
    ],
    'event' => [
        'click' => <<<JS
    function (){
            ajaxtest('/core/tester/umid/serverside.aspx?value=' + $('#input').val())   
    }
JS
    ]
]);

echo ZAjaxWidget::widget([
    'config' => [
        'func' => 'ajaxtest'
    ],
    'event' => [
        'complete' => <<<JS
    function(data) {
         $('.res').append(data.responseText);
    }
JS,
    ]
]);


echo ZButtonWidget::widget([
    'config' => [
        'target' => ZButtonWidget::target['_blank'],
        'btnStyle' => ZButtonWidget::btnStyle['btn-primary'],
        'btnType' => ZButtonWidget::btnType['link'],
        'text' => 'blank',
        'btnRounded' => false,
        'hasIcon' => true,
        'cooler' => true,
        'url' => '/core/tester/ajaxify/content.aspx',
        'ic-target' => '.cooler',
        'btnSize' => ZButtonWidget::btnSize['btn-manual'],
        'btnPaddingLeft' => ZButtonWidget::btnScale['2.5'],
        'btnPaddingRight' => ZButtonWidget::btnScale['default'],
        'btnPaddingTop' => ZButtonWidget::btnScale['default'],
        'btnPaddingBottom' => ZButtonWidget::btnScale['default'],
        'btnIconSize' => ZButtonWidget::btnScale['default'],
        'btnFontSize' => ZButtonWidget::btnScale['2.5'],
        'btnHeight' => ZButtonWidget::btnScale['default'],
        'btnIconPadding' => ZButtonWidget::btnScale['default'],
    ]
]);

