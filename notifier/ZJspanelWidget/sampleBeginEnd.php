<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\notifier\ZJspanelWidget;

ZJspanelWidget::begin([
    'config' => [
        'id' => 'jspanel',
        'begin' => true
    ]
]);

?>

<iframe src="/seller/main/index.aspx" frameborder="0" width="100%" height="600" scrolling="no"></iframe>
    
<?php


ZJspanelWidget::end();
?>

<button id="buttonJS">
button
</button>

<script>

    $('#buttonJS').click(() => {
        $('#jspanel').toggle();
    })

</script>
