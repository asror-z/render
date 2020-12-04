<?php


use zetsoft\models\page\PageAction;
use zetsoft\models\user\UserCompany;
use zetsoft\models\core\CoreContacts;
use zetsoft\models\place\PlaceCountry;
use zetsoft\models\user\ChatGroup;
use zetsoft\models\core\CoreInput;
use zetsoft\models\faqs\FaqsManual;
use zetsoft\models\news\News;
use zetsoft\models\user\User;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZUrl;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZCheckButtonWidget;
use zetsoft\widgets\former\ZCheckConfirmWidget2OLD;
use zetsoft\widgets\former\ZDynaCheckBtnWidget2;
use zetsoft\widgets\former\ZDynaWidget;

/** @var ZView $this */

$action->title = Azl . 'No Confirm and Rename';

$action->icon = 'fa fa-crop';
$action->icon =true;
$action->type = WebItem::type['html'];


$model = new PlaceCountry();
$model->configs->filter = false;

/** @var ZView $this */
echo ZDynaWidget::widget([
    'id' => 'asd',
    'model' => $model,
    'config' => [
        'toolbar' => [
            'dynacheck' => [
                'content' => ZCheckButtonWidget::widget([
                        'config' => [
                            'text' => 'Button',
                            'url' => '/core/tester/asror/main.aspx?path=render%5Cformer%5CZCheckButtonWidget%5Ctest3&modelClassName=CoreGroup',
                            'class' => 'simple-asd',
                            'message' => Az::l('Вы хотите клонировать этот элемент(ы)?'),
                            'confirm' => false,
                            'timeout' => 2000
                        ]
                    ]),
                'options' => ['class' => 'btn-group p-0 mr-2']
            ],
        ]
    ]
]);










