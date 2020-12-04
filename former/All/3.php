<?php
use zetsoft\former\eyuf\NeedForm;use zetsoft\models\App\eyuf\EyufDocument;
use zetsoft\widgets\former\ZArrayWidget;
use zetsoft\widgets\former\ZDynaSearchWidget;
use zetsoft\widgets\former\ZDynaWidgetD;
use zetsoft\widgets\former\ZExpandableSearchWidget;
use zetsoft\widgets\former\ZExportBtnWidget;

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */
 ?>
    <div class="row" style="margin-top: 50px;">
        <div class="col">  <?php
            echo ZArrayWidget::widget([
                'model' => new NeedForm(),
            ]);


            ?>
        </div>
    </div>


    <div class="row" style="margin-top: 50px;">
        <div class="col">  <?php

            echo ZDynaSearchWidget::widget([]);

            ?>
        </div>
    </div>


    <!--<div class="row" style="margin-top: 50px;">
        <div class="col">  <?php
/*            $model = new Document();

            echo ZDynaWidgetD::widget([
                'model' => $model
            ]);

            */?>
        </div>
    </div>-->

    <div class="row" style="margin-top: 50px;">
        <div class="col">  <?php
            echo ZExpandableSearchWidget::widget([]);


            ?>
        </div>
    </div>

    <div class="row" style="margin-top: 50px;">
        <div class="col">  <?php
            echo ZExportBtnWidget::widget([
                'config' => [
                    'hidden' => true,
                    'action' =>  'export',
                    'modelClassName' => 'Document',
                ]
            ]);


            ?>
        </div>
    </div>
