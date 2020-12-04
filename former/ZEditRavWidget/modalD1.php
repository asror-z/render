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
use zetsoft\former\shop\SizeForm;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\former\ZEditKartikWidget;
use zetsoft\widgets\former\ZEditRavWidget;
use zetsoft\widgets\images\ZImageWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\inputes\ZSelect2Widget;
use zetsoft\widgets\market\ZImagesZoomWidget;
use zetsoft\widgets\values\ZFormViewWidget;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 3);


echo \zetsoft\widgets\former\ZEditRavWidgetD1::widget([
    'model' => $model,
    'attribute' => 'string_1',
    'config' => [
        'displayValue' => ZImageWidget::class,
        'displayValueConfig' => [
            'config' => [
                'url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/220px-Image_created_with_a_mobile_phone.png'
            ]
        ]
    ]

]);






