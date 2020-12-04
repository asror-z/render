<link href="https://unpkg.com/grapesjs/dist/css/grapes.min.css" rel="stylesheet"/>
<script src="https://unpkg.com/grapesjs"></script>
<script src="<?=Cdn ?>/publish/grapes/grapesjs-Plugin-Call-Save/grapesjs-plugin-call-save.min.js"></script>

<div id="gjs"></div>

<script type="text/javascript">
    var editor = grapesjs.init({
        container : '#gjs',
        plugins: ['grapesjs-plugin-call-save'],
        pluginsOpts: {
            'grapesjs-plugin-call-save': {
            
             }
        }
    });

    // You can also call the command wherever you want in this way
    editor.runCommand('gjs-export-zip');
</script>
