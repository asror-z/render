
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>grapesjs-components-farmer demo</title>
    <?
    /**
     * Author: Asadbek Ruzmetov
     */
    use zetsoft\assets\grapes\ZGrapePluginCarouselAsset;
    use zetsoft\assets\grapes\ZGrapesjsComponentsFarmerAsset;

    ZGrapesjsComponentsFarmerAsset::register($this);
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/grapesjs@0.14.57/dist/grapes.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/ckeditor@4.11.3/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/grapesjs-plugin-ckeditor@0.0.9/dist/grapesjs-plugin-ckeditor.min.js" integrity="sha256-ZdRvgbDq8uHl2r1BkwNCCkPtEV/ARCRIiIs/2b8xVPQ=" crossorigin="anonymous"></script>
    <style>
        html, body {
            margin: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-light bg-light justify-content-between">
    <a class="navbar-brand" href="https://github.com/niiknow/grapesjs-components-farmer">GrapesJs Components Farmer-View on Github</a>
    <iframe src="https://ghbtns.com/github-btn.html?user=niiknow&repo=grapesjs-components-farmer&type=star&count=true&size=large" frameborder="0" scrolling="0" width="160px" height="30px"></iframe>
</nav>
<a href="?css=bootstrap4" class="btn btn-primary">bootstrap 4 css</a>
<a href="?css=foundation" class="btn btn-primary">foundation css</a>
<a href="?css=materialize" class="btn btn-primary">materializecss</a>
<div id="gjs" style="height: 100vh; display: block"></div>
<script src="dist/app/index.js"></script>
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

