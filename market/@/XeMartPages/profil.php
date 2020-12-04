<?php

use zetsoft\dbitem\shop\ProductItem;
use zetsoft\former\ALL\AzimForm;
use zetsoft\system\actives\ZAjaxForm;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\incores\ZGrapesCheckboxWidget;
use zetsoft\widgets\inptest\ZMaterialCheckboxWidget;
use zetsoft\widgets\inputes\ZKRangeWidget;
use zetsoft\widgets\market\ZMarketCardsWidget;
use zetsoft\widgets\market\ZMyCardWidget;
use zetsoft\widgets\navigat\ZAccLayWidget;
use zetsoft\widgets\navigat\ZBreadCrumbWidget;
use zetsoft\widgets\themes\ZCardWidget;
use zetsoft\widgets\themes\ZInterPillWidget;
use zetsoft\widgets\themes\ZPillWidget;
use zetsoft\widgets\themes\ZTabWidget;

$model = new AzimForm();

echo ZBreadCrumbWidget::widget([])
?>
<div class="container">
    <h1 class="text-uppercase">Мой профиль</h1>
    <?php
    $form = ZAjaxForm::begin([
        'formConfig' => [
            'showLabels' => false
        ]
    ]);
    echo ZTabWidget::widget([
        'data' => [
            'Изменить профиль' => '<br><br>' . ZFormWidget::widget([
                'model' => $model,
                'form' => $form,
                'config' => [
                    'topBtn' => false,
                ]
            ]),
            'Мои заказы' => 'Второй',
            'Сообшения' => '',
        ],
        'config' => [
            'type' => ZTabWidget::Type['md'],
            'mdTabColor' => ZTabWidget::MdTabColor['blue'],
            'classicTabColor' => ZTabWidget::ClassicTabColor['tabs-primary'],
            'mdPills' => true,
            'tabPanelId' => 'tab-panel-id',
            'contentPanelId' => 'content-panel-id',
        ]
    ]);
    ZAjaxForm::end();
    ?>
</div>

<style>
    .tab-pane.active{
        overflow: hidden;
    }
</style>

