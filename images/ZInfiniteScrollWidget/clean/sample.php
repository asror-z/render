<?php

/**
 *
 *
 * Author:  Dilmurod Axmadov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\models\place\PlaceCountry;
use zetsoft\widgets\actions\ZEasySelectableWidget;
use zetsoft\widgets\animo\ZImagehoverWidget;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\iconers\ZAuthIconWidget;
use zetsoft\widgets\images\ZInfiniteScrollWidget;
use zetsoft\widgets\images\ZLazySizesWidget;
use zetsoft\widgets\inputes\ZClockPickerWidget;
use zetsoft\widgets\inputes\ZIconPickerWidget;
use zetsoft\widgets\market\ZIconCardWidget;
use zetsoft\widgets\market\ZMiniCardWidget;
use zetsoft\widgets\market\ZProductTabsOnlyWidget;


echo ZInfiniteScrollWidget::widget([

    'data' => [
        1 => ZEasySelectableWidget::widget([
            'model' => new PlaceCountry()
        ]),
        /*2 => ZAuthIconWidget::widget(),
        3 => ZIconCardWidget::widget(),
        4 => ZEasySelectableWidget::widget(),*/
    ],

]);
