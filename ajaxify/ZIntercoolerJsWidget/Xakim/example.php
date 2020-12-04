<?php

use zetsoft\system\Az;

$this->title = 'example intercooler';
Az::$app->controller->layout = 'test2';

?>
<button ic-post-to="/render/ajaxify/ZIntercoolerJsWidget/levon/bootstrap-dialog.js"
        ic-replace-target="true"
        ic-select-from-response="#content">
    show news!
</button>





<script src="https://cdn.jsdelivr.net/npm/intercooler@1.2.3/dist/intercooler.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-mockjax@2.5.0/dist/jquery.mockjax.min.js"></script>
