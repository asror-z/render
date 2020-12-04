<?php

/**
 *
 *
 * Author:  Doniyor
 *
 */

use zetsoft\assets\grapes\ZGrapePluginSproutvideoAsset;
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>GrapesJS Plugin Boilerplate</title>
    <link href="https://unpkg.com/grapesjs/dist/css/grapes.min.css" rel="stylesheet">
    <?php
        ZGrapePluginSproutvideoAsset::register($this);
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


<div id="gjs" style="height:0px; overflow:hidden">
    <div style="margin:100px 100px 25px; padding:25px; font:caption">
        This is a demo content from index.html. For the development, you shouldn't edit this file, instead you can
        copy and rename it to _index.html, on next server start the new file will be served, and it will be ignored by git.
    </div>
</div>


<script type="text/javascript">
    var editor = grapesjs.init({
        height: '1000px',
        showOffsets: 1,
//        noticeOnUnload: 0,
//        storageManager: { autoload: 1 },
        container: '#gjs',
        fromElement: true,
        plugins: ['gjs-blocks-basic', 'gjs-sproutvideo'],
        pluginsOpts: {
            'gjs-blocks-basic': {},
            'gjs-sproutvideo': {}
        }
    });
    window.editor = editor;
</script>
</body>
</html>
