<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <?
    /**
     * Author: Asadbek Ruzmetov
     */
    use zetsoft\assets\grapes\ZGrapePluginCarouselAsset;

    ZGrapePluginCarouselAsset::register($this);
    ?>
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
        noticeOnUnload: 0,
        storageManager: {autoload: 0},
        container: '#gjs',
        fromElement: true,
        plugins: ['grapesjs-plugin-carousel'],
        pluginsOpts: {
            'grapesjs-plugin-carousel': {
                prefixName:"bst-carousel",
                gridcategory:"Extra",
                autoplay:"true",
                interval:"5000"
            }
        }
    });
    window.editor = editor;
</script>
</body>
</html>
