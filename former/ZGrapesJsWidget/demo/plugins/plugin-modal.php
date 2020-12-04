<?php

/**
 * Author: Doniyor Saidmurodov
 */
 
use zetsoft\assets\blocks\ZGrapesPluginModalAsset;

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>GrapesJS Plugin Boilerplate</title>

    <?php
        ZGrapesPluginModalAsset::register($this);
    ?>

    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }
    </style>
</head>
<body>

<div id="gjs" style="height:0%; overflow:hidden"></div>

<script type="text/javascript">
    var editor = grapesjs.init({
        height: '1000px',
        showOffsets: 1,
        noticeOnUnload: 0,
        storageManager: {autoload: 0},
        container: '#gjs',
        fromElement: true,
        // We need that setting cause the create modal cmd needs to add script tags.
        allowScripts: 1,
        plugins: ['gjs-blocks-basic', 'gjs-plugin-forms', 'gjs-modal'],
        pluginsOpts: {
            'gjs-modal': {
                'includeExternalLinks' : true
            },
            'gjs-blocks-basic': {
                flexGrid: 1
            }
        }
    });
    window.editor = editor;
</script>
</body>
</html>
