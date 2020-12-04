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

use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZGrapesJsWidget;
use zetsoft\widgets\inptest\ZInputUniverseWidget;
use zetsoft\widgets\inputes\ZCheckRadioListWidget;
use zetsoft\widgets\inputes\ZCKeditorJsWidget1;
use zetsoft\widgets\inputes\ZCKEditorWidget;
use zetsoft\widgets\inputes\ZClockPickerWidget;
use zetsoft\widgets\inputes\ZFileInputWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inputes\ZJqueryTextareaLibraryWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;

/** @var ZView $this */
$this->title = Az::l('Конструктор сайтов');

$page = '';
$path = Az::$app->App->eyuf->grapes->getPath($this->httpGet('path'));

if(file_exists($path))
    $page = $this->renderAjaxFile($path);

ZGrapesJsWidget::begin([
    'config' => [
        'widgets' => [
            \zetsoft\widgets\inputes\ZCheckRadioListWidget::class,
            \zetsoft\widgets\inputes\ZCKeditorJsWidget1::class,
            \zetsoft\widgets\inputes\ZClockPickerWidget::class,
            \zetsoft\widgets\inputes\ZFileInputWidget::class,
            \zetsoft\widgets\inputes\ZFontAwesomeIconPickerWidget::class,
            \zetsoft\widgets\inputes\ZHCheckboxButtonGroupWidget::class,
            \zetsoft\widgets\inputes\ZHCheckboxWidget::class,
            \zetsoft\widgets\inputes\ZHHiddenInputWidget::class,
            \zetsoft\widgets\inputes\ZHInputWidget::class,
            \zetsoft\widgets\inputes\ZHPasswordInputWidget::class,
            \zetsoft\widgets\inputes\ZHRadioButtonGroupWidget::class,
            \zetsoft\widgets\inputes\ZHTextareaWidget::class,
            \zetsoft\widgets\inputes\ZIconPickerWidget::class,
            \zetsoft\widgets\inputes\ZImageCheckboxWidget::class,
            \zetsoft\widgets\inputes\ZInputLatinWidget::class,
            \zetsoft\widgets\inputes\ZInputMaskWidget::class,
            ZInputUniverseWidget::class,
            \zetsoft\widgets\inputes\ZInputWidget::class,
            \zetsoft\widgets\inputes\ZjQueryCustomCaretWidget::class,
            \zetsoft\widgets\inputes\ZJqueryEmojiareaJsWidget::class,
            \zetsoft\widgets\inputes\ZJqueryTextareafullscreenWidget::class,
            ZJqueryTextareaLibraryWidget::class,
            \zetsoft\widgets\inputes\ZKCheckboxXWidget::class,
            \zetsoft\widgets\inputes\ZKColorInputWidget::class,
            \zetsoft\widgets\inputes\ZKDatecontrolWidget::class,
            \zetsoft\widgets\inputes\ZKDatepickerWidget::class,
            \zetsoft\widgets\inputes\ZKDateRangePickerWidget::class,
            \zetsoft\widgets\inputes\ZKDateTimePickerWidget::class,
            \zetsoft\widgets\inputes\ZKDepDropWidget::class,
            \zetsoft\widgets\inputes\ZKNumberWidget::class,
            \zetsoft\widgets\inputes\ZKPasswordInputWidget::class,
            \zetsoft\widgets\inputes\ZKRangeInputWidget::class,
            \zetsoft\widgets\inputes\ZKSelect2Widget::class,
            \zetsoft\widgets\inputes\ZKSortableInputWidget::class,
            \zetsoft\widgets\inputes\ZKStarRatingWidget::class,
            \zetsoft\widgets\inputes\ZKSortableWidget::class,
            \zetsoft\widgets\inputes\ZKSwitchInputWidget::class,
            \zetsoft\widgets\inputes\ZKTouchSpinWidget::class,
            \zetsoft\widgets\inputes\ZKTimePickerWidget::class,
            \zetsoft\widgets\inputes\ZKTouchSpinWidget::class,
            \zetsoft\widgets\inputes\ZKTreeInputWidget::class,
            \zetsoft\widgets\inputes\ZKTypeaheadWidget::class,
            \zetsoft\widgets\inputes\ZMultiJsWidget::class,
            \zetsoft\widgets\inputes\ZPeriodPickerWidget::class,
            \zetsoft\widgets\inputes\ZPrettyCheckboxWidget::class,
            \zetsoft\widgets\inputes\ZRadioButtonGroup::class,
            \zetsoft\widgets\inputes\ZRadioListWidget::class,
            \zetsoft\widgets\inputes\ZSelect2Widget::class,
            \zetsoft\widgets\inputes\ZSimpleCountableWidget::class,
            \zetsoft\widgets\inputes\ZTelInputWidget::class,
            \zetsoft\widgets\inputes\ZTextAreaWidget::class,
            \zetsoft\widgets\inputes\ZTinyCloudWidget::class,
        ],
    ]
]);

echo $page;

ZGrapesJsWidget::end();
