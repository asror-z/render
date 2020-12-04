<?php


use zetsoft\models\page\PageAction;
use zetsoft\models\user\UserCompany;
use zetsoft\models\core\CoreContacts;
use zetsoft\models\user\ChatGroup;
use zetsoft\models\core\CoreInput;
use zetsoft\models\faqs\FaqsManual;
use zetsoft\models\news\News;
use zetsoft\models\user\User;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZStringHelper;
use zetsoft\system\helpers\ZUrl;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZCheckButtonWidget;
use zetsoft\widgets\former\ZCheckConfirmWidget2OLD;
use zetsoft\widgets\former\ZDynaWidget;

/** @var ZView $this */

//$action->title = Azl . 'Контакты';

$action->icon = 'fa fa-crop';
$action->icon =true;
$action->type = WebItem::type['html'];


$modelClassName = $this->httpGet('modelClassName');
$modelClass = $this->bootFull($modelClassName);
$keys = $this->httpPost('keys');
//vdd($keys);

$keysExp = explode('|', $keys);
$something = '_something';
$lastID = 0;

if ($keysExp)
    foreach ($keysExp as $id) {
        if ($id) {
            $oldModel = $modelClass::findOne($id);
            $oldModel->name .= $something;
            $oldModel->save();
        }
    }

$this->notifySuccess('Данные успешно клонированы!', $keys);

return $this->urlRedirect($this->urlGetBack());










