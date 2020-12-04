<?php

use zetsoft\system\actives\ZAjaxForm;
use zetsoft\system\Az;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\navigat\ZLiloAccordionWidgetM;



echo ZLiloAccordionWidgetM::widget([
    'config' => [
        'title' => Az::l('Опции Виджета  '),
        'content' => ZFormWidget::class,
    ]
]);


