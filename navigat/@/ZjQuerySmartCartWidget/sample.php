<?php


use rmrevin\yii\fontawesome\FA;
use rmrevin\yii\fontawesome\FAS;
use zetsoft\system\assets\ZColor;
use zetsoft\system\helpers\ZUrl;

// use zetsoft\widgets\navigat\ZButtonWidgetX;
use zetsoft\widgets\former\ZAjaxWidget;
use zetsoft\widgets\navigat\ZButtonWidgetX;
use zetsoft\widgets\themes\ZColWidget;
use zetsoft\widgets\themes\ZRowWidget;

?>

    <input type="text" id="input">
    <div class="res"></div>
    <div class="cooler"></div>

<?php
echo ZButtonWidgetX::widget([
    'config' => [
        'target' => ZButtonWidgetX::target['_blank'],
        'btnStyle' => ZButtonWidgetX::btnStyle['btn-outline-dark'],
        'btnType' => ZButtonWidgetX::btnType['submit'],
        'text' => 'send ajax',
        'btnRounded' => false,
        'btnPaddingLeft' => ZButtonWidgetX::btnScale['default'],
        'btnPaddingRight' => ZButtonWidgetX::btnScale['default'],
        'btnPaddingTop' => ZButtonWidgetX::btnScale['default'],
        'btnPaddingBottom' => ZButtonWidgetX::btnScale['default'],
        'btnIconSize' => ZButtonWidgetX::btnScale['default'],
        'btnFontSize' => ZButtonWidgetX::btnScale['default'],
        'btnHeight' => ZButtonWidgetX::btnScale['default'],
        'btnIconPadding' => ZButtonWidgetX::btnScale['default'],
        'btnSize' => ZButtonWidgetX::btnSize['btn-micro'],
        
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


echo ZButtonWidgetX::widget([
    'config' => [
        'target' => ZButtonWidgetX::target['_blank'],
        'btnStyle' => ZButtonWidgetX::btnStyle['btn-primary'],
        'btnType' => ZButtonWidgetX::btnType['sweetBtn'],
        'text' => 'blank',
        'btnRounded' => false,
        'hasIcon' => true,
        'cooler' => true,
        'url' => '/core/tester/ajaxify/content.aspx',
        'ic-target' => '.cooler',
        'btnSize' => ZButtonWidgetX::btnSize['btn-manual'],
        'btnPaddingLeft' => ZButtonWidgetX::btnScale['2.5'],        
        'btnPaddingRight' => ZButtonWidgetX::btnScale['default'],
        'btnPaddingTop' => ZButtonWidgetX::btnScale['default'],
        'btnPaddingBottom' => ZButtonWidgetX::btnScale['default'],
        'btnIconSize' => ZButtonWidgetX::btnScale['default'],
        'btnFontSize' => ZButtonWidgetX::btnScale['2.5'],
        'btnHeight' => ZButtonWidgetX::btnScale['default'],
        'btnIconPadding' => ZButtonWidgetX::btnScale['default'],
    ]
]);

