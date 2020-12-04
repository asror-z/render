<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GrapesJS S3 images editor</title>
    <link href="https://unpkg.com/grapesjs/dist/css/grapes.min.css" rel="stylesheet">
    <link href="/publish/grapes/grapesjs-plugin-s3//grapesjs-plugin-s3.css" rel="stylesheet">
    <script src="https://unpkg.com/grapesjs"></script>
    <script src="/publish/grapes/grapesjs-plugin-s3/grapesjs-plugin-s3.min.js"></script>
    <style>
        body, html{ height: 100%; margin: 0;}
    </style>
</head>

<body>

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
        storageManager: { autoload: 0 },
        assetManager: { assets: images },
        container: '#gjs',
        fromElement: true,
        plugins: ['gjs-plugin-s3'],
        pluginsOpts: {
            'gjs-plugin-s3': {
                imgFormats: ["png", "jpeg", "jpg"],
                bucketName: "bodylesscms",
                prefix: "content/img/",
                acceskeyId: '<AWS Access key Id>',
                secretAcceskey: '<Aws secret access key>',
                sessionToken: '<AWS Sessions Token>'
            }
        }
    });
</script>
</body>
</html>
