<?php


use zetsoft\models\page\PageAction;
use zetsoft\models\page\PageControl;
use zetsoft\models\page\PageModule;
use zetsoft\system\Az;
use zetsoft\widgets\inputes\ZSelect2Widget;
use zetsoft\widgets\inputes\ZDepdropWidgetM;

?>

<div class="container">

    <div class="row">

        <div class="col-4">

            <?
            echo \zetsoft\widgets\inputes\ZDepdropWidgetM::widget([
                'name' => 'ravshan',
                'id' => 'depend1',
                'data' => Az::$app->smart->widget->getModelArray(PageModule::class),
                'config' => [
                    'placeholder' => '',
                ]

            ]);
            ?>


        </div>

        <div class="col-4">


            <?
            echo \zetsoft\widgets\inputes\ZDepdropWidgetM::widget([
                'name' => 'ravshan1',
                'id' => 'depend2',
                'config' => [
                    'depend' => 'depend1',
                    'placeholder' => 'sas1asdiesasd',
                    'url' => '/api/depdrop/depdrop.aspx',
                    'params' => [
                        'dependModel' => PageControl::class,
                        //'dependAttr' => 'page_module_id',
                    ]
                ]
            ]);
            ?>

        </div>

        <div class="col-4">


            <?
            echo \zetsoft\widgets\inputes\ZDepdropWidgetM::widget([
                'name' => 'ravshan2',
                'id' => 'depend3',
                'config' => [
                    'depend' => 'depend2',
                    'url' => '/api/depdrop/depdrop.aspx',
                    'placeholder' => 'sasasd12iesasd',
                    'params' => [
                        'dependModel' => PageAction::class,
                        'dependAttr' => 'page_control_id',
                    ]
                ]
            ]);
            ?>

        </div>

    </div>

</div>


<?php


?>

