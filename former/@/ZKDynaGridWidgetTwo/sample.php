<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */


use zetsoft\models\place\PlaceCountry;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidgetOne;
use zetsoft\widgets\former\ZDynaWidgetTwo;

echo ZDynaWidgetTwo::widget([
    'model' => PlaceCountry::class,
]);
