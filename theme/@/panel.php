<?php

use \zetsoft\widgets\themes\ZPanelWidget;

?>
<div class="row bg-light">
    <div class="col-sm-4">
        <?php
            echo ZPanelWidget::widget([
                'config' => [
                    'titleIcon' => ZPanelWidget::icon['fa-history'],
                    'title' => 'Panel header text',
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco. 
            Consectetur adipisicing elit, sed do eiusmod. Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
            sed do eiusmod tempor incidtation ullamco. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do 
            eiusmod tempor incidtation ullamco. Consectetur adipisicing elit, sed do eiusmod. Lorem ipsum dolor sit amet, 
            consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco.',
                    'isMinusButton' => true,
                    'isRefreshButton' => true,
                    'isSettingsButton' => true,
                    'isCloseButton' => true,
                    'isHeaderIcon' => true,
                    'headerColor' => ZPanelWidget::color['orange'],
                    'bodyColor' => ZPanelWidget::color['white'],
                    'border' => ZPanelWidget    ::borderPosition['none']
                ]
            ]);
        echo ZPanelWidget::widget([
            'config' => [
                'titleIcon' => ZPanelWidget::icon['fa-history'],
                'title' => '',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco. 
            Consectetur adipisicing elit, sed do eiusmod. Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
            sed do eiusmod tempor incidtation ullamco. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do 
            eiusmod tempor incidtation ullamco. Consectetur adipisicing elit, sed do eiusmod. Lorem ipsum dolor sit amet, 
            consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco.',
                'isMinusButton' => true,
                'isRefreshButton' => true,
                'isSettingsButton' => true,
                'isCloseButton' => true,
                'isHeaderIcon' => false,
                'headerColor' => ZPanelWidget::color['white'],
                'bodyColor' => ZPanelWidget::color['white'],
                'border' => ZPanelWidget    ::borderPosition['top'],
                'headerTextColor' => ZPanelWidget::textColor['text-dark']
            ]
        ]);
        echo ZPanelWidget::widget([
            'config' => [
                'titleIcon' => ZPanelWidget::icon['fa-history'],
                'title' => 'Panel header text',
                'content' => '<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco. 
            Consectetur adipisicing elit, sed do eiusmod. Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
            sed do eiusmod tempor incidtation ullamco. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do 
            eiusmod tempor incidtation ullamco. Consectetur adipisicing elit, sed do eiusmod. Lorem ipsum dolor sit amet, 
            consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco.</p>',
                'isMinusButton' => true,
                'isRefreshButton' => true,
                'isSettingsButton' => true,
                'isCloseButton' => true,
                'isHeaderIcon' => true,
                'headerColor' => ZPanelWidget::color['blue darken-2'],
                'bodyColor' => ZPanelWidget::color['blue darken-2'],
                'border' => ZPanelWidget    ::borderPosition['none'],
                'headerTextColor' => ZPanelWidget::textColor['text-white']
            ]
        ]);
        ?>
    </div>
    <div class="col-sm-4">
        <?php
        echo ZPanelWidget::widget([
            'config' => [
                'titleIcon' => ZPanelWidget::icon['fa-history'],
                'title' => '',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco. 
            Consectetur adipisicing elit, sed do eiusmod. Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
            sed do eiusmod tempor incidtation ullamco. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do 
            eiusmod tempor incidtation ullamco. Consectetur adipisicing elit, sed do eiusmod. Lorem ipsum dolor sit amet, 
            consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco.',
                'isMinusButton' => true,
                'isRefreshButton' => true,
                'isSettingsButton' => true,
                'isCloseButton' => true,
                'isHeaderIcon' => false,
                'headerColor' => ZPanelWidget::color['white'],
                'bodyColor' => ZPanelWidget::color['white'],
                'border' => ZPanelWidget    ::borderPosition['none'],
                'headerTextColor' => ZPanelWidget::textColor['text-dark']
            ]
        ]);
        echo ZPanelWidget::widget([
            'config' => [
                'titleIcon' => ZPanelWidget::icon['fa-history'],
                'title' => '',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco. 
            Consectetur adipisicing elit, sed do eiusmod. Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
            sed do eiusmod tempor incidtation ullamco. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do 
            eiusmod tempor incidtation ullamco. Consectetur adipisicing elit, sed do eiusmod. Lorem ipsum dolor sit amet, 
            consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco.',
                'isMinusButton' => true,
                'isRefreshButton' => true,
                'isSettingsButton' => true,
                'isCloseButton' => true,
                'isHeaderIcon' => false,
                'headerColor' => ZPanelWidget::color['white'],
                'bodyColor' => ZPanelWidget::color['white'],
                'border' => ZPanelWidget    ::borderPosition['left'],
                'headerTextColor' => ZPanelWidget::textColor['text-dark']
            ]
        ])
        ?>
    </div>

</div>
