<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GrapesJS S3 images editor</title>
    <link href="https://unpkg.com/grapesjs/dist/css/grapes.min.css" rel="stylesheet">
    <link rel="stylesheet" href="
    /publish/grapes/grapesjs-plugin-button-event/dist/grapesjs-plugin-button-event.css">
    <script src="https://unpkg.com/grapesjs"></script>

    <!--
    Error: Button should have eventEmitter <EventEmitter from "events" of javascript> attribute of
    in dist/grapesjs-plugin-button-event/dist/grapesjs-plugin-button-event.min.js
    -->
    <script src="/publish/grapes/grapesjs-plugin-button-event/dist/grapesjs-plugin-button-event.min.js"></script>
</head>

<body>

    <div id="gjs" style="height:100px; overflow:hidden"><img style="margin: 18% 0 0 45%" src="http://artf.github.io/grapesjs/img/grapesjs-logo.png" />
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
                    active: false,
                    data: { message: 'hello from gjs-plugin-button-event'}
                }]
            }
        }
    });
</script>
</body>
</html>
