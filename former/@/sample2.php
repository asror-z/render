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

use kartik\builder\Form;
use yii\helpers\Json;
use zetsoft\models\place\PlaceCountry;
use zetsoft\models\shop\PaysCurrency;
use zetsoft\models\core\CoreInput;
use zetsoft\models\user\User;
use zetsoft\models\App\eyuf\EyufDocument;
use zetsoft\models\App\eyuf\EyufReport;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZDetailNewWidget;
use zetsoft\widgets\former\ZDetailWidget;
use zetsoft\widgets\inputes\ZCKeditorJsWidget1;

$model = EyufDocument::findOne(14);

echo ZDetailNewWidget::widget([
    'model' => $model,
    'data' => Yii::$app->request->post(),
]);
