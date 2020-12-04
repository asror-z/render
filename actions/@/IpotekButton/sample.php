<?php

use zetsoft\widgets\actions\IpotekButton;

echo IpotekButton::widget([
    'config' => [
        'type' => IpotekButton::type['button'],
        'isSticky' => true,
    ]
]);

?>
