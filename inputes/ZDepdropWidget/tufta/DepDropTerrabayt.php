<?php

use zetsoft\models\page\PageAction;
use zetsoft\models\page\PageControl;
use zetsoft\models\page\PageModule;
use zetsoft\system\Az;
use zetsoft\widgets\inputes\ZDepdropWidget;
use zetsoft\widgets\inputes\ZDepdropWidgetTerrabayt;

?>

<div class="container">

    <div class="row">

        <div class="col-4">

           <?
           echo ZDepdropWidgetTerrabayt::widget([
               'name' => 'ravshan',
               'id' => 'depend1',
               'data' => Az::$app->smart->widget->getModelArray(PageModule::class),

           ]);
           ?>



        </div>

        <div class="col-4">


            <?
            echo ZDepdropWidgetTerrabayt::widget([
                'name' => 'ravshan1',
                'id' => 'depend2',
                'config' => [
                    'depend' => 'ravshan',
                    'url' => '/api/core/grapes/depdropData3.aspx',
                    'params' => [
                        'dependModel' => PageControl::class,
                        'dependAttr' => 'page_module_id',
                    ]
                ]
            ]);
            ?>

        </div>

        <div class="col-4">


            <?
            echo ZDepdropWidgetTerrabayt::widget([
                'name' => 'ravshan2',
                'id' => 'depend3',
                'config' => [
                    'depend' => 'depend2',
                    'url' => '/api/core/grapes/depdropData3.aspx',
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

