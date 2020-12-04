<?php


use kartik\builder\Form;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZCKEditorWidget;
use zetsoft\widgets\inputes\ZTimeZoneWidget;

/** @var ZView $this ll*/

echo ZTimeZoneWidget::widget([

           'config'=>[
               'sCountry'=>'UZT',
               'sZonename'=>'zonename',
               'sTimezone'=>'Asia/Samarkand',
               'class'=>'timezone-picker',
               'jDefaultValueList'=>[
                   'value' => 'UZT',
                   'attribute' => 'zonename' ],
               'jQuickLink'=>[
                   'UZT' => 'UZT',
                   'MSK' => 'MSK'
           ]
       ]
]);

