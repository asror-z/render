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


use zetsoft\models\user\User;
use zetsoft\widgets\chates\ZFriendAddWidget;
use zetsoft\widgets\message\chates\ZFriendWidget;

echo ZFriendAddWidget::widget([
    'config' => [
        'src' => 'https://lh3.googleusercontent.com/-qf_Bx5KD1kc/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rc45vwjwxT2Z-oCHie6C0dSuFsCug/photo.jpg?sz=328',
        'fullname'=>'Asror Zokirov',
        'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        'data' => '12 June 11:00'
    ]
]);
