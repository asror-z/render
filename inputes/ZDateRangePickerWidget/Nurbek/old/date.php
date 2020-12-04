<?php

use kartik\daterange\DateRangePicker;
use kartik\form\ActiveForm;

use kartik\builder\Form;
use rmrevin\yii\fontawesome\FA;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZKDateRangePickerWidgetNurbek;


$addon = <<< HTML
<div class="input-group-append">
    <span class="input-group-text">
        <i class="fas fa-calendar-alt"></i>
    </span>
</div>
HTML;
echo '<label class="control-label">Date Range</label>';
echo '<div class="input-group drp-container">';
echo DateRangePicker::widget([
        'name'=>'date_range_1',
        'value'=>'01-Jan-14 to 20-Feb-14',
        'convertFormat'=>true,
        'useWithAddon'=>true,
        'pluginOptions'=>[
            'locale'=>[
                'format'=>'d-M-y',
                'separator'=>' to ',
            ],
            'opens'=>'left'
        ]
    ]) . $addon;
echo '</div>';



