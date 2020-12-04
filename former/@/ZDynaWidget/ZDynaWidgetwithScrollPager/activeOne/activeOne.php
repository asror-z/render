<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\dbitem\data\FormDb;
use zetsoft\models\core\CoreInput;
use zetsoft\models\user\User;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZHTextareaWidget;
use zetsoft\widgets\inputes\ZInputWidget;

$action->title = Azl . 'Список Пользователь';
$action->icon = 'fa fa-birthday-cake';

$model = new CoreInput();

$model->configs->nameOn = [
    'string_1',
];

$model->configs->rulesAll = [
    [validatorEmail]
];
/*
$model->configs->replace = [

    'string_1' => static function (FormDb $column) {

        $column->widget = ZHTextareaWidget::className();
        $column->filterWidget = ZInputWidget::class;
        $column->rules = [
            [validatorEmail]
        ];
        return $column;
    },
];*/



/** @var ZView $this */
echo ZDynaWidget::widget([
    'model' => $model,
]);
