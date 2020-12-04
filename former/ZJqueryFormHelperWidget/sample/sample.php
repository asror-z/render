<?php

use zetsoft\widgets\former\ZBootstrapModalWidget;
use zetsoft\widgets\former\ZIframeWidget;

use zetsoft\widgets\places\ZAmchart4New2Widget;

$this->grape=true;


ZIframeWidget::begin([
    
]);

require Root . '/webhtm/eyuf/cores/auth/register.php';

ZIframeWidget::end();

