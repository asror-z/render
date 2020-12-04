<?php

use PhpOffice\PhpSpreadsheet\Shared\OLE\PPS\Root;
use zetsoft\system\Az;use zetsoft\system\kernels\ZView;

/** @var ZView $this */


/*use zetsoft\widgets\market\ZMarketCardsOnlyWidget;

echo ZMarketCardsOnlyWidget::widget([

]);*/

?>





<div class="container-fluid" style="height: 200vh">
    <div class="row">
        <div class="col-md-2 col-sm-6 border-right pr-0">
            <?/*
            echo zetsoft\widgets\market\ZMenuWidgetOtabek::widget([
                'config' => [
                    'open' => false,
                    'name' => 'Категории',
                ],
            ]);
            */?>
        </div>
        <div class="col-md-8 mt-2 d-lg-block d-md-block d-sm-none d-none">
            <?php
             echo zetsoft\widgets\market\ZCategoryListWidget::widget([
                'data'=>Az::$app->market->product->allCompanies(),
             ]);
            ?>
        </div>
        <div class="col-md-2 col-sm-6">
                <?
               /* echo zetsoft\widgets\market\ZMenuWidgetOtabek::widget([
                    'name' => '123',
                    'config' => [
                        'open' => false,
                        'name' => 'Категория',
                    ],
                ]); */
                ?>
        </div>
    </div>

</div>

