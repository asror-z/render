<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>GrapesJS Editable Areas Webpage</title>

    
    <link href="https://unpkg.com/grapesjs/dist/css/grapes.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/grapesjs/0.15.8/grapes.min.js"></script>
    
    <script src="<?= Cdn. '/publish/grapes/GrapesJS-Editable-Areas/dist/grapesjs-editable-area.min.js'?>"></script>



    <div id="gjs">
        <div>This is not editable</div>
        <div data-editable="true">
            <div style="color: red">This is editable</div>
        </div>
    </div>

    <script type="text/javascript">
        var editor = grapesjs.init({
            container : '#gjs',
                plugins: ['editable-area'],
            pluginsOpts: {
            'editable-area': {
                editableAreattribute: true
            }
        }
        });
    </script>

