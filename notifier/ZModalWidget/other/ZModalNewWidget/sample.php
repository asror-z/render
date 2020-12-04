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


use rmrevin\yii\fontawesome\FA;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\notifier\ZModalNewWidget;
use zetsoft\widgets\notifier\ZModalWidget;
use zetsoft\widgets\themes\ZCardWidget;


ZModalNewWidget::begin([
     'id' => 'dilshod',
]);

echo ZCardWidget::widget([
    'config' => [
        'type' => ZCardWidget::type['dynCard']
    ]
]);

ZModalNewWidget::end();

ZModalNewWidget::begin([
    'id' => 'w21',
]);

echo ZCardWidget::widget([
    'config' => [
        'type' => ZCardWidget::type['dynCard']
    ]
]);

ZModalNewWidget::end();

echo ZButtonWidget::widget([
     'event' => [
        'click' => 'function() { $(dilshod).modal(\'show\') }'
     ]
]);

echo ZButtonWidget::widget([
    'event' => [
        'click' => 'function() { $(w21).modal(\'show\') }'
    ]
]);




    echo ZButtonWidget::widget([
        'config' => [
            'text' => 'Регистрация',
            'icon' => 'fas fa-' . FA::_USER,
            'btnStyle' => ZButtonWidget::btnStyle['btn-primary'],
            'class' => 'text-white'
        ],
        'event' => [
            'click' => 'function(){$(registration).modal(\'show\')}'
        ]
    ]);

ZModalNewWidget::begin([
    'id' => 'registration',
    'config' => [
        'title' => 'Регистрация в системе',
        'size'=> ZModalNewWidget::size['lg']
    ]
]);



ZModalNewWidget::end();


?>
