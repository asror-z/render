<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <?

    /**
     * Author: Asadbek Ruzmetov
     */
    use zetsoft\assets\grapes\ZGrapePluginCarouselAsset;
    use zetsoft\assets\grapes\ZGrapeblocksBasicAsset;

    ZGrapeblocksBasicAsset::register($this);
    ?>
</head>
<body>

<div id="gjs" style="height:0px; overflow:hidden">
</div>


<script type="text/javascript">
    var editor = grapesjs.init({
        height: '1000px',
        noticeOnUnload: 0,
        storageManager:{autoload: 0},
        container : '#gjs',
        fromElement: true,

        plugins: ['gjs-blocks-basic'],
        pluginsOpts: {
            'gjs-blocks-basic': {}
        }
    });

    window.editor = editor;
</script>
</body>
</html>
