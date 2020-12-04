<?php


use zetsoft\models\page\PageControl;
use zetsoft\models\page\PageModule;
use zetsoft\system\Az;use zetsoft\widgets\inputes\ZSelect2Widget;
use zetsoft\widgets\inputes\ZDepdropWidget;

?>

<div class="container">

    <div class="row">

        <div class="col-4">

           <?
           echo ZSelect2Widget::widget([
               'name' => 'ravshan',
               'id' => 'depend1',
               'data' => Az::$app->smart->migra->scan(true),
           ]);
           ?>



        </div>

        <div class="col-4">


            <?
            echo ZDepdropWidget::widget([
                'name' => 'ravshan',
                'id' => 'depend2',
                'config' => [
                    'depend' => 'depend1',
                    'url' => '/api/core/grapes/getFilter.aspx',
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
            echo ZDepdropWidget::widget([
                'name' => 'ravshan',
                'config' => [
                    'depend' => 'depend2',
                    'url' => '/api/core/grapes/depdropData.aspx',
                ]
            ]);
            ?>

        </div>

    </div>

</div>



<?php


?>

