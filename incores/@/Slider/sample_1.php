<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * Created By :ElnurController Suyunov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\inputes\ZClockpickerWidgetOld;
use zetsoft\widgets\inputes\ZInputMaskWidget;

use kartik\slider\Slider;

// Style your slider selection and handle colors and choose your handle type.
// Set a preselected value. Set the tooltip to be always displayed.
echo Slider::widget([
    'name' => 'rating_1',
    'value' => 7,
    'sliderColor' => Slider::TYPE_GREY,
    'handleColor' => Slider::TYPE_DANGER,
    'pluginOptions' => [
        'handle' => 'triangle',
        'tooltip' => 'always'
    ]
]);
