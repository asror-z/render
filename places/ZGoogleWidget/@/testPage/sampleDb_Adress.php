<?php

use kartik\builder\Form;
use yii\helpers\ArrayHelper;
use zetsoft\models\place\PlaceAdress;
use zetsoft\models\shop\ShopBrand;
use zetsoft\models\shop\ShopCategory;
use zetsoft\models\user\User;
use zetsoft\service\forms\Active;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\places\ZGoogleDb9Widget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\themes\ZCardWidget;


$model = $this->modelGet(\zetsoft\models\place\PlaceAdress::class, 7);
/** @var ZView $this */
$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

$action->title = Azl . 'Веб-действия';

$this->modelPost();

?>
<div class="container">

    <div class="row">

        <div class="col-md-6 col-6">

            <?

            echo ZFormWidget::widget([
                'model' => $model,
                'form' => $form,
            ]);
            $active = new Active();
            $active->id = 'sendLocation';

            $form = $this->activeBegin($active);


            ZCardWidget::begin([
                'config' => [
                    'title' => $this->title,
                    'type' => ZCardWidget::type['dynCard'],
                ]
            ]);

            echo ZFormWidget::widget([
                'model' => $model,
                'form' => $form,
                'config' => [
                    'topBtn'   => false,
                    'botBtn' => false,
                ],
                'event' => [
                    'formChange' => <<<JS
        
JS,
                ]
            ]);


            ZCardWidget::end();
               ZCardWidget::begin([
                'id' => 'locationMap',
                'config' => [
                    'title' => Az::l('Посмотрите ваш адресс'),
                    'type' => ZCardWidget::type['dynCard'],
                ]
            ]);

            $model = new PlaceAdress();

            $model->configs->nameOn = [
                'place',
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


$this->activeEnd();
?>

