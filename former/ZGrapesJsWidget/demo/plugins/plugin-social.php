<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <?

    /**
     * Author: Asadbek Ruzmetov
     */
    
    use zetsoft\assets\grapes\ZGrapePluginSocialAsset;

    ZGrapePluginSocialAsset::register($this);
    ?>
</head>
<body>

<div id="gjs" style="height:0px; overflow:hidden">

</div>


<script type="text/javascript">
    var editor = grapesjs.init({
        height: '1000px',
        showOffsets: 1,
        noticeOnUnload: 0,
        storageManager: { autoload: 0 },
        container: '#gjs',
        fromElement: true,
        plugins: ['gjs-blocks-basic', 'gjs-social'],
        pluginsOpts: {
            'gjs-social': {},
            'gjs-blocks-basic': {
                gridFlex:1
            }
        }
    });
    window.editor = editor;
</script>
</body>
</html>
