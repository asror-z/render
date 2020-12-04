<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <?

    /**
     * Author: Sardor Elmurodov
     */

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
        height: '1000px',
        noticeOnUnload: 0,
        container: '#gjs',
        fromElement: true,
        commands: {
            defaults: [
                {
                    // id and run are mandatory in this case
                    id: 'my-command-id',
                    run() {
                        alert('This is my command');
                    },
                }, {
                    id: '...',
                    // ...
                }
            ],
        }
    });
</script>
</body>
</html>
