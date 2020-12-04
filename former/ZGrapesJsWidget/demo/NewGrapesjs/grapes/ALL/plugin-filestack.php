<?php
/*
 *
 * Author: Murodova nozima
 * Date:    09/10/2019
 *
 */
use zetsoft\assets\grapes\ZGrapePluginFilestackAsset;
ZGrapePluginFilestackAsset::register($this);
 ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>GrapesJS Newsletter Editor</title>

    <style>
        body, html{ height: 100%; margin: 0;}
    </style>
    <?php

    ?>

</head>
<body>
<h1>Plugin-filestack</h1>
<div id="gjs" style="height:0px; overflow:hidden">
    <img style="margin: 18% 0 0 45%" src="http://artf.github.io/grapesjs/img/grapesjs-logo.png" />
</div>


<script type="text/javascript">
    var host = 'http://artf.github.io/grapesjs/';
    var images = [
        host + 'img/grapesjs-logo.png',
        host + 'img/tmp-blocks.jpg',
        host + 'img/tmp-tgl-images.jpg',
        host + 'img/tmp-send-test.jpg',
        host + 'img/tmp-devices.jpg',
    ];

    var editor = grapesjs.init({
        height: '1000px',
        noticeOnUnload: 0,
        storageManager:{autoload: 0},
        assetManager: {assets: images},
        container : '#gjs',
        fromElement: true,

        plugins: ['gjs-plugin-filestack'],
        pluginsOpts: {
            'gjs-plugin-filestack': { key: 'Ajh5qpZXWQqmcxokCAM0Zz' },
            
        }
    });
    
</script>
</body>
</html>

