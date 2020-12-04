<?php

use kartik\builder\Form;
use zetsoft\service\forms\Ajaxer;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\module\Models;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZCheckboxGroupWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\notifier\ZModalWidgetD;
use zetsoft\widgets\notifier\ZModalWidgetRavshan;
use zetsoft\system\control\ZCoreTrait;
use zetsoft\widgets\audios\ZPlyrWidgetDilmurod;


ZModalWidgetD::begin([
'config' => [
    'width' => '800px'
]

]);

echo ZPlyrWidgetDilmurod::widget([
    'config' => [
        'type' => ZPlyrWidgetDilmurod::type['audio']
    ]
]);
ZModalWidgetD::end();
//echo \zetsoft\widgets\former\ZKEditableWidgetNorm::widget([
//
//]);

