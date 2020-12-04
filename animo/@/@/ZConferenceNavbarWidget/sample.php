<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * Created By:ElnurController Suyunov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\system\Az;
use zetsoft\widgets\animo\ZConferenceNavbarWidget;
echo EOL;
Az::$app->controller->layout = 'test2';


echo ZConferenceNavbarWidget::widget([
'config' => [
    'type' => ZConferenceNavbarWidget::type['main'],
    'tlgTitle' => 'Telegram',
    'telTitle' => '+998 98 9988122',
    'smsTitle' => 'conference@eyuf.uz',
    'siteTitle' => 'www.eyuf.uz',
    'chatTitle' => 'Биз билан алоқа',
    'confontsize' => '25px',
    'isSticky' => false,
    'view' => ZConferenceNavbarWidget::type['main'],
]
]);




