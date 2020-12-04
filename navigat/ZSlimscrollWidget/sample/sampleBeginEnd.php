<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\models\shop\ShopCategory;
use zetsoft\widgets\incores\ZMCheckboxGroupWidget;
use zetsoft\widgets\inputes\ZCKeditorJsWidget;
use zetsoft\widgets\inputes\ZCKEditorWidget;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZHTextareaWidget;
use zetsoft\widgets\inputes\ZIconPickerWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\navigat\ZNestable2Widget;
use zetsoft\widgets\navigat\ZSlimScrollWidget;


ZSlimScrollWidget::begin([
    'config' => [
        'functionName' => 'scrollTo',
        'width' => '700px',
        'height' => 'auto',
        'begin' => true,
        'scrollTo' => '550px'
    ],
]);

echo ZIconPickerWidget::widget();
echo ZIconPickerWidget::widget();
echo ZIconPickerWidget::widget();
echo ZIconPickerWidget::widget();


echo ZNestable2Widget::widget([
    'config' => [
        'modelClassName' => ShopCategory::class,
        'parentAttribute' => 'parent_id',
        'sortAttribute' => 'sort',
    ]
]);

ZSlimScrollWidget::end();


echo ZButtonWidget::widget([
    'config' => [
        'text' => 'scrollTo'
    ],
    'event' => [
        'click' => 'scrollTo'
    ]
]);
