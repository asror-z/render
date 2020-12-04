<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\system\assets\ZColor;
use zetsoft\widgets\themes\ZAdminCardWidget;

echo ZAdminCardWidget::widget([

    'config' => [
        'textPosition' => ZAdminCardWidget::textPosition['textLeft'],
        'isCardHeader' => false,
        'cardTitleBool' => true,
        'headerTitle' => 'headerTitle',
        'bodyTitle' => '463',
        'bodyText' => 'Hujjat kelib tushdi',
        'footerColor' => ZColor::color['orange'],
        'footerText' => 'text',
        'BadgeBgColor' => ZColor::color['stylish-color-dark'],
        'badge' => '20',

        'horizontal_OR_vertical' => 'vertical',
        'cardWidth' => '100%',
        'color' => ZColor::color['primary-color'],
        'icon' => '/render/theme/ZAdminCardWidget/icons/school.png',
    ]
    
]);
