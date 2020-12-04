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

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);


echo ZEditKartikWidget::widget([
      'name' => 'currency',
      'config' => [
          'session' => true
      ]
]);




