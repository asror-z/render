<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\incores\ZMCheckboxGroupWidget;
use zetsoft\widgets\inputes\ZCKeditorJsWidget;
use zetsoft\widgets\inputes\ZCKEditorWidget;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZHTextareaWidget;
use zetsoft\widgets\inputes\ZIconPickerWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\navigat\ZSlimScrollWidget;


echo ZSlimScrollWidget::widget([
    'config' => [
        'content' =>    ZButtonWidget::widget() .
                        ZHTextareaWidget::widget() .
                       ZHTextareaWidget::widget() .
                       ZHTextareaWidget::widget() .
                        ZHInputWidget::widget() .
                        ZHInputWidget::widget() .
                        ZIconPickerWidget::widget(),
                        ZIconPickerWidget::widget(),
        'functionName' => 'scrollTo'
    ],
]);

echo ZButtonWidget::widget([
    'config' => [
        'text' => 'scrollTo'
    ],
    'event' => [
        'click' => 'scrollTo'
    ]
]);
