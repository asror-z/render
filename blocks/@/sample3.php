<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\blocks\ZPanelWidget;

echo ZPanelWidget::widget([
        'config' => [
            'title' => 'Title',
            'subtitle' => 'subtitle',
            'width' => 100,  // 50   \  75   \   100
            'text' => 'Text content',
            'headerTitle' => 'Header title',
            'footerTitle' => 'Footer title',
            'titleTag' => 'h2',
            'links' => [],
            'navTabs' => [],
            'linkUrl' => '#',
            'textTag' => 'blockquote',  //  p  |  blockquote
            'textClass' => '', //    blockquote  |  card-text
            'listGroup' => [],
            'isHeader' => true,
            'isSubtitle' => false,
            'isListGroup' => false,
            'isFooter' => true,
            'isCentered' => false,
            'isNavTabs' => true,
            'isBordered' => true,
            'center' => '',  //   text-right    \   text-left
            'bgType' => ZPanelWidget::Theme['light'],
            'navType' => ZPanelWidget::Nav['tabs'],
            'btnStyle' => ZPanelWidget::Button['warning'],
            'borderType' => ZPanelWidget::Border['primary'],
        ]


]);
