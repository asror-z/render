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

use rmrevin\yii\fontawesome\FA;
use yii\bootstrap\Html;
use zetsoft\system\helpers\ZUrl;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\themes\ZCardWidget;
use zetsoft\widgets\themes\ZCardWidget;

echo HTML::beginTag('div', ['class' => 'col-xs-12']);

?>
<?php

ZCardWidget::begin();

echo ZButtonWidget::widget([
    'id' => 'zGrid',
    'config' => [
        'btnSize' => ZButtonWidget::btnSize['btn-sm'],
        'icon' => FA::_SYNC,
        'color' => ZButtonWidget::color['none'],
        'url' => ZUrl::current(),
    ]
]);

echo ZButtonWidget::widget([
    'id' => 'zGrid2',
    'config' => [
        'btnSize' => ZButtonWidget::btnSize['btn-sm'],
        'icon' => FA::_SYNC,
        'color' => ZButtonWidget::color['none'],
        'url' => 'http://eyuf.zoft.uz/admin/core-control.aspx',
    ]
]);

/** @var ZView $this */
Az::$app->forms->zPjax->linkSelector = 'a';
Az::$app->forms->zPjax->begin();


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
Az::$app->forms->zPjax->end();
ZCardWidget::end();
?>
    <h1>Current time: <?= date('H:i:s') ?></h1>
<?php
echo HTML::endTag('div');
