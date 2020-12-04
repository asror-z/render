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

// Basic horizontal slider with ActiveForm. Check the model validation for values
// > 5 or < 1. You can also use arrow keys to navigate.
echo $form->field($form, 'rating')->widget(Slider::classname(), [
    'pluginOptions'=>[
        'min'=>0,
        'max'=>20,
        'step'=>1
    ]
]);

// Style your slider selection and handle colors and choose your handle type.
// Set a preselected value. Set the tooltip to be always displayed.
echo Slider::widget([
    'name'=>'rating_1',
    'value'=>7,
    'sliderColor'=>Slider::TYPE_GREY,
    'handleColor'=>Slider::TYPE_DANGER,
    'pluginOptions'=>[
        'handle'=>'triangle',
        'tooltip'=>'always'
    ]
]);

// A disabled slider input with a square handle.
echo Slider::widget([
    'name'=>'rating_2',
    'value'=>3,
    'pluginOptions'=>[
        'handle'=>'square'
    ],
    'options'=>['disabled'=>true]
]);

// A range select. Value must be passed as a delimited list separated by a `,` (comma).
// If your value is passed as a single number, and you have set `pluginOptions['range']`
// to `true`, then `max` will be used for second value.
echo '<b class="badge">$10</b> ' . Slider::widget([
        'name'=>'rating_3',
        'value'=>'250,650',
        'sliderColor'=>Slider::TYPE_GREY,
        'pluginOptions'=>[
            'min'=>10,
            'max'=>1000,
            'step'=>5,
            'range'=>true
        ],
    ]) . ' <b class="badge">$1,000</b>';

// Change orientation to vertical and create multiple sliders of various colors. Reverse the slider values.
// and ALWAYS show tooltip. Change handle to square. Set precision for incremented/decremented values and step to 0.01.
$sep = '<span style="margin-right:50px">&nbsp;</span>';
echo Slider::widget([
    'name'=>'rating_4',
    'value'=>7.427, // Slider will instantiate showing 7.43 due to specified precision
    'sliderColor'=>Slider::TYPE_PRIMARY,
    'handleColor'=>Slider::TYPE_PRIMARY,
    'pluginOptions'=>[
        'precision'=>2,
        'orientation'=>'vertical',
        'handle'=>'square',
        'step'=>0.01,
        'reversed'=>true,
        'tooltip'=>'always'
    ],
]);
echo $sep;
echo Slider::widget([
    'name'=>'rating_4a',
    'value'=>5.95,
    'sliderColor'=>Slider::TYPE_SUCCESS,
    'handleColor'=>Slider::TYPE_SUCCESS,
    'pluginOptions'=>[
        'precision'=>2,
        'orientation'=>'vertical',
        'handle'=>'square',
        'step'=>0.01,
        'reversed'=>true,
        'tooltip'=>'always'
    ],
]);
echo $sep;
echo Slider::widget([
    'name'=>'rating_4b',
    'value'=>4.04,
    'sliderColor'=>Slider::TYPE_WARNING,
    'handleColor'=>Slider::TYPE_WARNING,
    'pluginOptions'=>[
        'precision'=>2,
        'orientation'=>'vertical',
        'handle'=>'square',
        'step'=>0.01,
        'reversed'=>true,
        'tooltip'=>'always'
    ],
]);
echo $sep;
echo Slider::widget([
    'name'=>'rating_4c',
    'value'=>2.54,
    'sliderColor'=>Slider::TYPE_DANGER,
    'handleColor'=>Slider::TYPE_DANGER,
    'pluginOptions'=>[
        'precision'=>2,
        'orientation'=>'vertical',
        'handle'=>'square',
        'step'=>0.01,
        'reversed'=>true,
        'tooltip'=>'always'
    ],
]);
echo $sep;
echo Slider::widget([
    'name'=>'rating_4d',
    'value'=>1.02,
    'sliderColor'=>Slider::TYPE_INFO,
    'handleColor'=>Slider::TYPE_INFO,
    'pluginOptions'=>[
        'precision'=>2,
        'orientation'=>'vertical',
        'handle'=>'square',
        'step'=>0.01,
        'reversed'=>true,
        'tooltip'=>'always'
    ],
]);

// Setting your own custom tooltips.
echo Slider::widget([
    'name'=>'rating_5',
    'value'=>3,
    'pluginOptions'=>[
        'min'=>0,
        'max'=>20,
        'step'=>1,
        'tooltip'=>'always',
        'formatter'=>new yii\web\JsExpression("function(val) { 
            if (val < 5) {
                return 'Poor';
            }
            if (val < 10) {
                return 'Fair';
            }
            if (val < 15) {
                return 'Good';
            }
            if (val <= 20) {
                return 'Excellent';
            }
        }")
    ]
]);
