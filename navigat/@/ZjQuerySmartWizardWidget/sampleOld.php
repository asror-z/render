<?php


use rmrevin\yii\fontawesome\FA;
use rmrevin\yii\fontawesome\FAS;
use zetsoft\system\assets\ZColor;
use zetsoft\system\helpers\ZUrl;
// use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\navigat\ZButtonWidgetX;
use zetsoft\widgets\themes\ZColWidget;
use zetsoft\widgets\themes\ZRowWidget;



echo ZButtonWidgetX::widget([
    'config' => [
        'btnType' => ZButtonWidgetX::btnType['link'],
        'target' => ZButtonWidgetX::target['_blank'],
        'btnStyle' => ZButtonWidgetX::btnStyle['btn-primary'],
        'text' => 'blank',
        'btnRounded' => true,
        'url' => 'https://www.php.net/manual/en/function.str-replace.php',
        'btnSize' => ZButtonWidgetX::btnSize['btn-micro'],
        'btnPaddingLeft' => ZButtonWidgetX::btnScale['2'],
        'btnPaddingRight' => ZButtonWidgetX::btnScale['2'],
        'btnPaddingTop' => ZButtonWidgetX::btnScale['0.7'],
        'btnPaddingBottom' => ZButtonWidgetX::btnScale['0.7'],
        'btnIconSize' => ZButtonWidgetX::btnScale['0.5'],
        'btnFontSize' => ZButtonWidgetX::btnScale['0.8'],
        'btnHeight' => ZButtonWidgetX::btnScale['2.5'],
        'btnIconPadding' => ZButtonWidgetX::btnScale['0'],
          
    ],
]);

echo ZButtonWidgetX::widget([
    'config' => [
        'target' => ZButtonWidgetX::target['_blank'],
        'btnStyle' => ZButtonWidgetX::btnStyle['btn-primary'],
        'text' => 'blank',
        'btnRounded' => true,
        'cooler' => true,
        'url' => '/core/tester/ajaxify/sample_3.aspx',
        'btnSize' => ZButtonWidgetX::btnSize['btn-mini']
    ],
]);
