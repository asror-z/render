<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    
    <?

    /**
     * Author: Sardor Elmurodov
     */

    use zetsoft\assets\grapes\ZGrapePluginButtonEventAsset;
    use zetsoft\assets\grapes\ZGrapePluginCarouselAsset;

    ZGrapePluginButtonEventAsset::register($this);
    ?>
    <style>
        body, html{ height: 100%; margin: 0;}
    </style>
</head>

<body>

<div id="gjs" style="height:0%; overflow:hidden">
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
        height: '100%',
        noticeOnUnload: 0,
        storageManager: { autoload: 0 },
        assetManager: { assets: images },
        container: '#gjs',
        fromElement: true,
        plugins: ['gjs-plugin-button-event'],
        pluginsOpts: {
            'gjs-plugin-button-event': {
                buttons: [{
                    name: 'signOut',
                    panel: 'options',
                    eventName: 'gjs-signOut',
                    icon: 'fa fa-sign-out',
                    active:false,
                    data: { message: 'hello from gjs-plugin-button-event'}
                    eventEmitter: new EventEmitter()  
                }]
            }
        }
    });
</script>

<link href="path/to/grapes.min.css" rel="stylesheet"/>
<link href="path/to/grapesjs-plugin-button-event.css" rel="stylesheet"/>

<script src="path/to/grapes.min.js"></script>
<script src="path/to/grapesjs-plugin-button-event.min.js"></script>

<div id="gjs"></div>

<script type="text/javascript">
    var editor = grapesjs.init({
        container : '#gjs',
        plugins: ['gjs-plugin-button-event'],
        pluginsOpts: {
            'gjs-plugin-button-event': {

            
            /* ...options */}
        }
    });
</script>
</body>
</html>
