<?

/**
 *
 *
 * https://github.com/artf/grapesjs-plugin-export
 *
 *
 * Aziza  
 * 
 */

 

use zetsoft\assets\grapes\ZGrapesPluginExportAsset ;
use zetsoft\assets\testing\GrapeAsset;
ZGrapesPluginExportAsset::register($this);
GrapeAsset::register($this);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>GrapesJS Plugin Export</title>

</head>
<style>
    body, html{ height: 100%; margin: 0;}
</style>
<body>
<div id="gjs" style="height:0px; overflow:hidden">
    <div class="red">Test content</div>
    <style>.red {color: red}</style>
</div>
<script type="text/javascript">
    var editor = grapesjs.init({
        noticeOnUnload: 0,
        container : '#gjs',
        height: '1000px',

        fromElement: 1,
        storageManager: { autoload: 0 },
        plugins: ['grapesjs-plugin-export'],
        pluginsOpts: {
            'grapesjs-plugin-export': {
                addExportBtn: true,
                btnLabel: 'Export to ZIP',
                filenamePfx: 'grapesjs_template',
                filename: null,

            }
        }
    });
</script>

</body>
</html>

