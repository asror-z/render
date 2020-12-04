<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>GrapesJS CKEditor</title>

<?
use zetsoft\assets\testing\GrapeAsset;
use zetsoft\assets\testing\GrapesInitAsset;
use zetsoft\assets\testing\ZGrapesJsAsset;

ZGrapesJsAsset::register($this);
GrapeAsset::register($this);

?>

    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }
        .cke_chrome {
            border: none !important;
        }
        .cke_toolgroup {
            border: none !important;
            background: transparent !important;
            box-shadow: none !important;
        }
    </style>
</head>
<body>

<div id="gjs" style="height:0px; overflow:hidden">

    
</div>


<script>
    var editor = grapesjs.init({
        height: '1000px',
        noticeOnUnload: 0,
        storageManager: { autoload: 0 },
        container: '#gjs',
        fromElement: true,

        plugins: ['gjs-plugin-ckeditor'],
        pluginsOpts: {
            'gjs-plugin-ckeditor': {
                position: 'center',
                options: {
                    language: 'en',
                    //skin: 'moono-dark',
                }
            }
        }
    });
</script>
</body>
</html>
