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
use zetsoft\models\user\User;
use zetsoft\widgets\former\ZViewWidget;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWizardWidget;

/** @var ZView $this */
$action = new WebItem();

$action->title = Azl . 'Просмотр  Пользователь';
$action->icon = 'fa fa-birthday-cake';

$id = $this->httpGet('id');
$model = User::findOne($id);

echo ZViewWidget::widget([
    'model' => $model,
    
]);
