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


use zetsoft\system\kernels\ZView;
use zetsoft\widgets\action\ZAllUIDropWidget;

use zetsoft\widgets\actions\filepond;
use zetsoft\widgets\actions\ZJqueryResizableWidget;
use zetsoft\widgets\actions\ZeasySelectable;
use zetsoft\widgets\Actions\ZJqueryUISortableWidget;


echo EOL;


/** @var ZView $this */




echo ZeasySelectable::widget([
    'config' => [
        'disabled' => false,
        'contentBefore' => '',
        'selects' => [
            'item',
            2,
            3,
            4,
            5,
            6,
            7,
            'button for save'
        ],
        'theme' => ZeasySelectable::theme['krajee-bs4']


    ]

]);

  




echo ZJqueryUISortableWidget::widget([
    'config' => [
        'axe' => ZJqueryUISortableWidget::Axe['x'],
        'type' => ZJqueryUISortableWidget::type['row']
    ],
    'items' => [
        ['item' => 'item1'],
        ['item' => 'item2'],
        ['item' => 'item3'],
        ['item' => 'item4'],
    ]
]);

echo filepond::widget([


]);




