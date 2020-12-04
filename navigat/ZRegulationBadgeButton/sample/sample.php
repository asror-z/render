<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\navigat\ZRegulationBadgeButton;

echo ZRegulationBadgeButton::widget([
    'config' => [
        'main' => 'main',
        'iconSource' => 'https://regulation.gov.uz/img/housing.png',
        'badge' => 375,
        'text' => 'some text here',
        'url' => '',
    ]
]);
?>

