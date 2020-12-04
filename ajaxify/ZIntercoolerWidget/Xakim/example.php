<?php

use zetsoft\system\Az;

$this->title = 'example intercooler';
Az::$app->controller->layout = 'test2';

?>
<button ic-post-to="/cores/main/index.aspx"
        ic-replace-target="true"
        ic-select-from-response="#content">
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



<script src="https://cdn.jsdelivr.net/npm/intercooler@1.2.3/dist/intercooler.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-mockjax@2.5.0/dist/jquery.mockjax.min.js"></script>
