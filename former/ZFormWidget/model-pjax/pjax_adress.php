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


use rmrevin\yii\fontawesome\FA;
use zetsoft\dbitem\core\WebItem;
use zetsoft\dbitem\data\ALLData;
use zetsoft\former\place\PlaceDepend;
use zetsoft\former\shop\ShopFilterForm;
use zetsoft\former\test\TestLaptopForm;
use zetsoft\former\test\TestNurbekForm;
use zetsoft\former\test\TestNurbekFormThree;
use zetsoft\former\test\TestNurbekFormTwo;
use zetsoft\models\place\PlaceAdress;
use zetsoft\models\test\TestAsror;
use zetsoft\models\test\TestAsror2;
use zetsoft\models\test\TestAsror3;
use zetsoft\models\test\TestOrder;
use zetsoft\service\forms\Active;
use zetsoft\service\forms\ZPjax;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormBuildWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\themes\ZCardWidget;


/** @var ZView $this */
$action = new WebItem();

$action->title = Azl . 'Опыт работы';
$action->icon = 'fa fa-rocket rss';

$model = $this->modelGet(PlaceAdress::class, 111);
$model->configs->changeSave = true;
$model->configs->changeReloadPjax = ALLData::changeReloadType['pjax'];
/*$model->configs->order = [
    'id' => SORT_ASC
];*/

///$this->paramSet('redirect', true);

if ($this->modelSave($model)) {
    //  vdd($model->attributes);
}

/*return $this->redirect(['/user'], 200);

Yii::$app->response->getHeaders()->set('X-PJAX-Url',Url::to(['wall/show','id' => 2]));
*/

?>

<div class="row">
    <div class="col-6">

        <?

        /*    $model->load($this->httpPost());
            $model->kernel();*/

        $modelClassName = bname($model::className());
        $modelId = $model->id;

        ZCardWidget::begin([
            'config' => [
                'title' => $this->title,
                'type' => ZCardWidget::type['dynCard'],
            ]
        ]);

        $this->pjaxBegin(function (ZPjax $active) {
            $active->id = 'ravshan-pjax';
            return $active;
        });


        $active = new Active();
        $active->id = 'edit-form';

        $form = $this->activeBegin($active);


        $model->cards = [
            [
                'title' => Az::l('Первый этап'),
                'shows' => true,
                'items' => [
                    [
                        'title' => Az::l('Форма'),
                        'shows' => true,
                        'items' => [
                            [
                                'name',
                                'number',
                                'email',
                            ],
                            [
                                'region',
                            ],
                        ],
                    ],
                ],
            ],
        ];

        $this->paramSet(paramChangeReloadId, 'ravshan-pjax');
        $model->configs->changeReload = true;

        $model->columns();


        echo ZFormWidget::widget([
            'model' => $model,
            'form' => $form,
            'config' => [
              //  'changeFormAjax' => true,
            ],
            'active' => [
                'click' => false,
                'change' => true,
            ],
        ]);


        
        $this->activeEnd();
        $this->pjaxEnd();

        ZCardWidget::end();

        ?>

    </div>


</div>
