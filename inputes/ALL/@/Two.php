<?php

use zetsoft\models\core\CoreInput;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZKColorInputWidget;
use zetsoft\widgets\inputes\ZKDatecontrolWidget;
use zetsoft\widgets\inputes\ZKDatepickerWidget;
use zetsoft\widgets\inputes\ZKDateRangePickerWidget;
use zetsoft\widgets\inputes\ZKDateTimePickerWidget;
use zetsoft\widgets\inputes\ZFileInputWidget;
use zetsoft\widgets\inputes\ZKLabelInplaceWidget;
use zetsoft\widgets\inputes\ZKNumberWidget;
use zetsoft\widgets\inputes\ZKPasswordInputWidget;
use zetsoft\widgets\inputes\ZKRangeInputWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZKSliderWidget;
use zetsoft\widgets\inputes\ZKSortableInputWidget;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\inputes\ZKSwitchInputWidget;
use zetsoft\widgets\inputes\ZKTimePickerWidget;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\inputes\ZPeriodPickerWidget;

$model = $this->modelGet(CoreInput::class, 1);

$items = $this->modelData();
$form = $this->activeBegin();
$this->modelSave($model);


//   for ZAccordionInputWidget
//$dataZAccordionInputWidget = array_flip(ZLang::lang);
//$dataZAccordionInputWidget = $model->accordioninputwidget;
// end

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'names' => [
        //'ZFileInputWidget',
        'zknumberwidget',
        'string_1',
        'string_2',
        'zkselect2widget',
        //'zksliderwidget',
        'string_3',
        'string_4',
        'zkswitchinputwidget',
        'zktimepickerwidget',
        'zktouchspinwidget',
        'zktypeaheadbasicwidget',
        //'ZMultiWidgetNew',
        'zperiodpickerwidget',
        //'zrecaptchawidget',
        'zselectablewidget',
        'ztimezonepickerwidget',
        /*




        */
    ]

]);

$this->activeEnd();


