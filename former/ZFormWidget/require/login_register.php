<?php


use zetsoft\system\kernels\ZView;

$action->title = Azl . 'Вход в систему';

$action->icon =false;
$action->type = WebItem::type['html'];

$login = require Root.'/webhtm/eyuf/cores/auth/login.php';
$register = require Root.'/webhtm/eyuf/cores/auth/register.php';

echo $login;
echo $register;
