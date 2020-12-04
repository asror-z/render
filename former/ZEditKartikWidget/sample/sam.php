<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use kartik\editable\Editable;
use kartik\grid\Demo;
use kartik\widgets\DepDrop;
use yii\helpers\Html;
use yii\helpers\Url;
use zetsoft\models\core\CoreInput;
use zetsoft\models\test\TestD;
use zetsoft\models\test\TestEdit;
use zetsoft\widgets\former\ZEditKartikWidget;
use zetsoft\system\Az;
use zetsoft\widgets\former\ZEditKartikWidgetShahzod;
use zetsoft\widgets\inputes\ZKSwitchInputWidget;

$agentId = $this->userIdentity()->id;
$model   = $this->modelGet(\zetsoft\models\user\User::class , $agentId);


echo ZEditKartikWidgetShahzod::widget([
    'model' => $model,
    'attribute' => 'autodial',
    'config' => [
        'inputType' => Editable::INPUT_WIDGET,
        'widgetClass' => ZKSwitchInputWidget::class,
        'emptyValueText' => Az::l('Режим оператора'),
        'format' => ZEditKartikWidget::format['link'],
        'placement' => ZEditKartikWidget::placement['ALIGN_AUTO_BOTTOM'],
        'asPopover' => true,
        'displayValueConfig' => [
            false  => Az::l('Автообзвон отключен'),
            true  => Az::l('Автообзвон включен'),
        ],
    ],
    'event' => [
        'editableSuccess' => 'function(event, val, form, data) {  
                  location.reload()    
            }',
    ]

]);




