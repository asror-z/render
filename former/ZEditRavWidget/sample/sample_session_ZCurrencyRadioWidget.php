<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\models\shop\ShopCatalog;
use zetsoft\widgets\former\ZEditKartikWidget;
use zetsoft\widgets\former\ZEditRavWidget;
use zetsoft\widgets\former\ZEditRavWidgetD;
use zetsoft\widgets\inputes\ZImgCheckboxWidget;
use zetsoft\widgets\inputes\ZCurrencyRadioWidget;

$core_catalog = new ShopCatalog();

echo ZEditRavWidgetD::widget([
    'name' => 'currency',
    'config' => [
        'session' => true,
        'widgetClass' => ZCurrencyRadioWidget::class,
        'options' => [
            'data' => $core_catalog->_currency,
            'config' => [
                'url' => ZCurrencyRadioWidget::imageUrl['checkbox'],
                'checkMarkPosition' => ZCurrencyRadioWidget::checkMarkPosition['top-right'],
                'checkMarkSize' => '15px',
            ]
        ]
    ]
]);
