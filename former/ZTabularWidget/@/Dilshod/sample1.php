<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\models\place\PlaceAdress;
use zetsoft\widgets\former\ZTabularWidget;
use zetsoft\widgets\former\ZTabularWidgetD1;

$model = new PlaceAdress();
$form = $this->activeBegin();
echo ZTabularWidget::widget([
    'form'=>$form,
    'model'=>$model,
    'config' => [

    ]

]);
$this->activeEnd();
