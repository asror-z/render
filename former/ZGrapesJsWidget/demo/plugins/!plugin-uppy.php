<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <?

    /**
     * Author: Asadbek Ruzmetov
     */

    use zetsoft\assets\grapes\ZGrapePluginSocialAsset;
    use zetsoft\assets\grapes\ZGrapePluginUppyAsset;

    ZGrapePluginUppyAsset::register($this);
    ?>
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
        storageManager:{autoload: 0},
        assetManager: {assets: images},
        container : '#gjs',
        fromElement: true,
        plugins: ['gjs-plugin-uppy'],
        pluginsOpts: {
            'gjs-plugin-uppy': {
                
            }
        }
    });
</script>
</body>
</html>
