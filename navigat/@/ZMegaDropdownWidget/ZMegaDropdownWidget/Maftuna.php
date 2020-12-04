<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * Date:    16.07.2019
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */


use zetsoft\assets\navigs\ZMegaDropdownAsset;
use zetsoft\widgets\navigat\ZMegaDropdownWidget;

ZMegaDropdownAsset::register($this);


$data = [
    [
        '111111111111',
        'Desc-111111111111',
        'http://zetsoft.uz/render/mega-dropdown/'
    ],
    [
        '2222222222222',
        'Desc-2222222222222',
        'http://zetsoft.uz/render/mega-dropdown/'
    ],
    [
        '3333333333333333',
        'Desc-3333333333333333',
        'http://zetsoft.uz/render/mega-dropdown/'
    ],
    [
        '4444444444444',
        'Desc-4444444444444',
        'http://zetsoft.uz/render/mega-dropdown/'
    ],

];

echo ZMegaDropdownWidget::widget([
    'title' => 'Maftuna',
    'sSearch' => 'Поиск',
    'data' => $data
]);

?>
