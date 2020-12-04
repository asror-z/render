<?php

use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormBuildWidgetA;

$model = $this->modelGet(CoreInput::className(), 2);

/** @var ZView $this */
$this->modelSave($model);

echo ZFormBuildWidgetA::widget([
    'model' => new \zetsoft\models\menu\Menu(),
]);
?>
