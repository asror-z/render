<?php

use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\widgets\images\ZHImgWidget;
use zetsoft\widgets\market\ZDilshodBoxWidget;
use zetsoft\widgets\market\ZMiniCardWidget;
use zetsoft\widgets\market\ZProductTabsWidget;
use zetsoft\widgets\themes\ZCardWidget;
use zetsoft\widgets\themes\ZCardWidgetA;

/*
echo zetsoft\widgets\market\ZProductTabsWidget::widget(['model' => Az::$app->market->product->allProducts($this->httpGET('id')),
  'config' => [
      'pager'=>ZProductTabsWidget::type['scroll'],
      'widget' => zetsoft\widgets\market\ZProductCardWidget::class,
  ]]);
?> */
$m = Az::$app->market->product->allProducts();

?>
<div class="container">
    <div class="row">
        <?php
        foreach ($m as $item) {

            ?>

            <div class="col-md-3">
                <a href="<?= $item->url ?>">
                  
                   <?php

                    echo ZCardWidgetA::widget([
                        'config' => [
                            'type' => ZCardWidget::type['mdbCard'],
                            'title' => $item->name,
                            'content' => ZHImgWidget::widget([
                                'config' => [
                                    'url' => ZArrayHelper::getValue($item->images, 0),
                                    'alt' => ''
                                ],

                            ]),
                        ]
                    ]);
                    ?>
                </a>
            </div>

            <?php
        }
        ?>
    </div>
</div>
