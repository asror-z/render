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


echo ZButtonWidget::widget([
    'config' => [
        'title' => 'Ссылка',
        'icon' => 'fas fa-external-link-alt',
        'pjax' => 0,
        'url' => '#',
        'btnRounded' => false,
        'btn' => false,
        'hasIcon' => true,
    ],
    'event' => [
        'click' => <<<JS
function(event){console.log('ZButtonWidget | click')}
JS,
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
