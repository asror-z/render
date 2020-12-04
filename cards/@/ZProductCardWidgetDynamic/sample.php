<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\cards\ZProductCardWidgetDynamic;


?>
<div class="row">
<div class="col-lg-3">
<?php

echo ZProductCardWidgetDynamic::widget([
    'config' => [
        'theme' => ZProductCardWidgetDynamic::themes['lightBlue'],
        
    ]
]);

?>

