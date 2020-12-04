<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    
    <?



    use zetsoft\assets\testing\GrapeAsset;

    GrapeAsset::register($this);
    ?>
    <style>
        body, html{ height: 100%; margin: 0;}
    </style>
</head>

<body>

<div id="gjs" style="height:0%; overflow:hidden">
    
</div>


<script type="text/javascript">
    var editor = grapesjs.init({
        height: '500px',
        noticeOnUnload: 0,
        container: '#gjs',
        fromElement: true,

    });
    editor.BlockManager.add('test-block', {
        label: 'Test block',
        attributes: {class: 'fa fa-text'},
        content: {
            script: "alert('Hi'); console.log('the element', this)",
            // Add some style just to make the component visible
            style: {
                width: '100px',
                height: '100px',
                'background-color': 'red',
            }
        }
    });
    
</script>
</body>
</html>
