<?php


use rmrevin\yii\fontawesome\FA;
use rmrevin\yii\fontawesome\FAS;
use zetsoft\system\assets\ZColor;
use zetsoft\system\helpers\ZUrl;

// use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\ajaxify\ZAjaxWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\themes\ZColWidget;
use zetsoft\widgets\themes\ZRowWidget;


echo ZButtonWidget::widget([
    'config' => [
        'title' => 'Ссылка',
        'icon' => 'fas fa-external-link-alt',
        'pjax' => 0,
        'btnRounded' => false,
        'btn' => false,
        'hasIcon' => true,
    ],
    'event' => [
        'click' => 'function (event){e.preventDefault(); window.open(this.href, "_blank")}',
    ],
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

