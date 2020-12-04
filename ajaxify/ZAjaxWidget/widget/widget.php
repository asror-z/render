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


use zetsoft\former\files\ClassForm;

use zetsoft\models\core\CoreInput;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\themes\ZCardWidget;


/** @var ZView $this */
$action = new WebItem();
$this->title = 'Виджеты';
$this->type = WebItem::type['ajax'];

$className = $this->httpGet('widgetClass');
               vdd($className);

if ($className === null)
    $className = 'zetsoft\widgets\inputes\ZInputWidget';

ZCardWidget::begin([
    'config' => [
        'title' => $this->title,
        'type' => ZCardWidget::type['dynCard'],
    ]
]);

$class = new $className();
$dbType = $class->dbType;

$model = new CoreInput();
$attribute = $dbType . '_2';

echo $className::widget([
    'model' => $model,
    'attribute' => $attribute,

]);

ZCardWidget::end();
