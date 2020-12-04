<?php

use zetsoft\assets\testing\GrapeAsset;
use zetsoft\assets\blocks\ZGrapesPluginFormAsset;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>GrapesJS Plugin Forms</title>
    <link href="">


    <?php

     
    ZGrapesPluginFormAsset::register($this);
    ?>
    <style>                          
        body, html {
            height: 100%;
            margin: 0;
        }

        .gjs-block-svg {
            width: 61%;
        }

        .gjs-block-svg-path {
            fill: white;
        }
    </style>
</head>
<body>

<div id="gjs" style="height:0px; overflow:hidden">
    <form action="index.html" method="post" style="padding: 50px;">
        <input type="hidden" name="hidden-input" value="someval">
        <div class="row">
            <label>Name</label>
            <input type="text" name="text-input" value="">
        </div>
        <div class="row">
            <label>Messagge</label>
            <textarea name="textarea-input"></textarea>
        </div>
        <div class="row">
            <label>Options</label>
            <select name="select-input">
                <option value="">- Select -</option>
                <option value="1">Value 1</option>
                <option value="2">Value 2</option>
                <option value="3">Value 3</option>
            </select>
        </div>
        <div class="row">
            <input type="checkbox" name="checkbox-input" value="1"> Test
        </div>
        <div class="row">
            <input type="radio" name="radio-input" value="1"> 1
            <input type="radio" name="radio-input" value="2"> 2
            <input type="radio" name="radio-input" value="3"> 3
        </div>
        <button type="button" class="btn btn-success" name="button-name">Send</button>
    </form>
        <style>
    </style>
</div>


<script type="text/javascript">
    var editor = grapesjs.init({
        height: '1000px',
        noticeOnUnload: 0,
        storageManager: {autoload: 0},
        container: '#gjs',
        fromElement: true,
        plugins: ['grapesjs-plugin-forms'],
        pluginsOpts: {
            'grapesjs-plugin-forms': {
                blocks: ['form', 'input', 'textarea', 'select', 'button', 'label', 'checkbox', 'radio'],
                labelTraitMethod: 'Method',

            }
        }
    });
</script>
</body>
</html>
