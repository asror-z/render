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
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\inputes\ZSelect2Widget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);


echo Editable::widget([
    'model'=>$model,
    'attribute' => 'int_1',
    /*'header' => 'User Rating',
    'asPopover' => true,
    'type'=>'success',
    'size'=>'lg',
    'displayValueConfig'=>[
        1=>'One Star',
        2=>'Two Stars',
        3=>'Three Stars',
        4=>'Four Stars',
        5=>'Five Stars',
    ],*/
    'inputType'=>Editable::INPUT_WIDGET,
    'widgetClass' => ZKStarRatingWidget::class,
    //'editableValueOptions'=>['class'=>'text-success h2']
]);




