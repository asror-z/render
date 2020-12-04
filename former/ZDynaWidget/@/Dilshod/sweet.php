<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\models\place\PlaceCountry;
use zetsoft\widgets\former\ZDynaCreateWidget;

echo ZDynaCreateWidget::widget([
    'id' => '$this->modelClassName',
    'model' => new PlaceCountry(),
    'config' => [
        'title' => 'wdef',
        'icon' => 'fa fa-edit'
    ]
]);
