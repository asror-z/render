<?php

use zetsoft\widgets\notifier\ZIframeWidget;

?>



<script>
    function resizeIframe(obj) {
        obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + 'px';
    }
</script>



<iframe src="/admin/core-control/table.aspx" height="750" width="100%"
        class="border-0" onload="resizeIframe(this)"></iframe>
