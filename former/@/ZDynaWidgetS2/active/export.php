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


use zetsoft\models\drag\DragConfig;
use zetsoft\models\place\PlaceCountry;
use zetsoft\models\shop\PaysCurrency;
use zetsoft\models\govs\GovsDegree;
use zetsoft\models\menu\Menu;
use zetsoft\models\auto\ChatPrivate;
use zetsoft\models\App\eyuf\EyufDocument;
use zetsoft\models\App\eyuf\EyufScholar;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidgetNew;

$model = new PlaceCountry();

echo ZDynaWidget::widget([
    'model' => $model
]);
