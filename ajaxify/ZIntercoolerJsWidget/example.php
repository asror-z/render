<?php

use zetsoft\system\Az;

$this->title = 'example intercooler';
Az::$app->controller->layout = 'test2';

?>
<button
    ic-get-from="/core/tester/ajaxify/content.aspx"
    ic-target="#content"
    ic-push-url="true"
>
    show news!
</button>

<!--not allowed
<div class="row">
    <div class="col-2"></div>
    <div id="news" class="col-10">

    </div>
</div>
<div class="row">
    <div class="col-2"></div>
    <div id="address" class="col-10">

    </div>
</div>-->




