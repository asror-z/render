<?php


use zetsoft\models\page\PageAction;
use zetsoft\models\user\UserCompany;
use zetsoft\models\core\CoreContacts;
use zetsoft\models\user\ChatGroup;
use zetsoft\models\core\CoreInput;
use zetsoft\models\faqs\FaqsManual;
use zetsoft\models\ALL\LangNationality;
use zetsoft\models\news\News;
use zetsoft\models\user\User;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZUrl;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZCheckButtonWidget;
use zetsoft\widgets\former\ZCheckConfirmWidget2OLD;
use zetsoft\widgets\former\ZDynaWidget;

/** @var ZView $this */

$action->title = Azl . 'No Confirm and Rename';

$action->icon = 'fa fa-crop';
$action->icon =true;
$action->type = WebItem::type['html'];


$group = new ChatGroup();
$group->configs->filter = false;

/** @var ZView $this */

?>

<div class="row">
    <div class="col-6">
        <?
        echo ZDynaWidget::widget([
            'id' => 'asd',
            'model' => $group,
            'config' => [
                'toolbar' => [
                    'update' => [
                        'content' => '{update} ' . ZCheckButtonWidget::widget([
                                'config' => [
                                    'icon' => 'fa fa-cog',
                                    'url' => '/core/tester/asror/main.aspx?path=render%5Cformer%5CZCheckButtonWidget%5CtwoDynaServerSide&modelClassName=CoreGroup',
                                    'class' => 'simple-asd',
                                    'message' => Az::l('Вы хотите клонировать этот элемент(ы)?'),
                                    'confirm' => false
                                ]
                            ]),
                        'options' => ['class' => 'btn-group p-0 mr-2']
                    ],
                ]
            ]
        ]);

        ?>
    </div>

    <div class="col-6">
        <?
        $nationality = new LangNationality();
        echo ZDynaWidget::widget([
            'id' => 'asd',
            'model' => $nationality,
            'config' => [
                'toolbar' => [
                    'update' => [
                        'content' => '{update} ' . ZCheckButtonWidget::widget([
                                'config' => [
                                    'icon' => 'fa fa-cog',
                                    'url' => '/core/tester/asror/main.aspx?path=render%5Cformer%5CZDynaCheckBoxWidget%5CtwoDynaServerSide&modelClassName=CoreNationality',
                                    'class' => 'simple-asd',
                                    'message' => Az::l('Вы хотите клонировать этот элемент(ы)?'),
                                    'confirm' => false
                                ]
                            ]),
                        'options' => ['class' => 'btn-group p-0 mr-2']
                    ],
                ]
            ]
        ]);
        ?>
    </div>
</div>









