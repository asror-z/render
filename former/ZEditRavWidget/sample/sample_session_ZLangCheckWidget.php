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
use zetsoft\system\Az;
use zetsoft\widgets\former\ZEditKartikWidget;
use zetsoft\widgets\former\ZEditRavWidget;
use zetsoft\widgets\former\ZEditRavWidgetD;
use zetsoft\widgets\inputes\ZImgCheckboxWidget;
use zetsoft\widgets\inputes\ZCurrencyRadioWidget;
use zetsoft\widgets\inputes\ZLangCheckWidget;
use zetsoft\widgets\inputes\ZLangCheckWidgetAzimjon;

echo ZEditRavWidgetD::widget([
    'name' => 'currency',
    'config' => [
        'session' => true,
        'widgetClass' => ZLangCheckWidget::class,
        'emptyValueText' => Az::l('Язык'),
        'options' => [
            'config' => [
                'url' => ZLangCheckWidget::imageUrl['checkbox'],
                'checkMarkPosition' => ZLangCheckWidget::checkMarkPosition['top-right'],
                'checkMarkSize' => '15px',
            ]
        ]
    ]
]);
