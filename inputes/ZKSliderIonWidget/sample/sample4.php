<?php
/**
 * @author Muminov Umid
 */

use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZKSliderIonWidget;


echo ZKSliderIonWidget::widget([
        'config' => [
            'inputs_show' => true,
            'type' => 'double',
            'skin' => 'big',
            "max" => "150",
            "from" => "40",
            "to" => "120",
            'prefix' => ''
        ],
]);
