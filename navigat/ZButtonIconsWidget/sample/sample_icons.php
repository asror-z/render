<?php

use zetsoft\widgets\navigat\ZButtonIconsWidget;


echo ZButtonIconsWidget::widget([
    'config' => [
    'gapSize' => ZButtonIconsWidget::gapSize['8'],
    'iconSize' => ZButtonIconsWidget::iconSize['2x'],
    'gridSize' => ZButtonIconsWidget::gridSize['50']
    ]
    ]);

