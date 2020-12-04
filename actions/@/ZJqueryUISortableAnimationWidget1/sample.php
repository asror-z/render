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


use zetsoft\widgets\action\ZAllUIDropWidget;
use zetsoft\widgets\actions\ZDroppableWidget;
use zetsoft\widgets\actions\ZJqueryResizableWidget;
use zetsoft\widgets\Actions\ZJqueryUISortableAnimationWidget;


echo EOL;

echo ZJqueryUISortableAnimationWidget::widget([
    'config' => [
        'axe' => ZJqueryUISortableAnimationWidget::Axe['x'],
        'type' => ZJqueryUISortableAnimationWidget::type['row']
    ],
    'items' => [
        ['item' => 'item1'],
        ['item' => 'item2'],
        ['item' => 'item3'],
        ['item' => 'item4'],
       
    ]
]);






