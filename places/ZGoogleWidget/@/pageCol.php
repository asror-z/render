<?php


use zetsoft\former\ALL\Location;
use zetsoft\models\core\CoreAdress2;
use zetsoft\models\core\CoreLocation;
use zetsoft\models\user\User;
use zetsoft\service\forms\Active;
use zetsoft\system\assets\ZColor;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\themes\ZCardWidget;

$this->title = Az::l('Добавить Адресс');

$model = new CoreAdress2();
$model->address_type = CoreAdress2::address_type['order'];

$model->configs->nameOnHide = [
    'address_type',
    'id',
];

$model->configs->nameOnEx = [

    'location',

];


/** @var ZView $this */

/*if ($this->modelForm($model))
    $this->modelPost();*/

if ($this->modelSave($model)) {


    /** @var User $user */
    $user = User::findOne(1);
    $ids = $user->core_adress_ids;
    $ids[] = $model->id;
    $user->core_adress_ids = $ids;
    $user->save();

    /*$this->urlRedirect(['/customer/main/check-out']);*/
}

?>


<div class="container">


    <div class="row my-3">

        <div class="col-md-6 col-6 ">

            <?

            $active = new Active();
            $active->id = 'sendLocation';

            $form = $this->activeBegin($active);


            ZCardWidget::begin([
                'config' => [
                    'title' => $this->title,
                    'type' => ZCardWidget::type['dynCard'],
                    'classHeadColor' => 'bg-success',
                    'classBorderColor' => 'border-light',

                ]
            ]);

            echo ZFormWidget::widget([
                'model' => $model,
                'form' => $form,
                'config' => [
                    'topBtn' => false,
                    'botBtn'
                ],

            ]);


            ZCardWidget::end();
            ?>

        </div>

        <div class="col-6 col-md-6">
            <?
            ZCardWidget::begin([
                'id' => 'locationMap',
                'config' => [
                    'title' => Az::l('Посмотрите ваш адресс'),
                    'type' => ZCardWidget::type['dynCard'],
                    'classHeadColor' => 'bg-success',
                    'classBorderColor' => 'border-light',
                ]
            ]);

            $model = new CoreAdress();

            $model->configs->nameOn = [

                'location',
            ];

            $model->columns();

            echo ZFormWidget::widget([
                'model' => $model,
                'form' => $form,
                'config' => [
                    'topBtn' => false,
                    'botBtn' => true,
                ]
            ]);

            ZCardWidget::end();


            $this->activeEnd();
            ?>

        </div>

    </div>


</div>
