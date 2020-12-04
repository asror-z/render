<link href="path/to/grapes.min.css" rel="stylesheet"/>
<script src="path/to/grapes.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/grapesjs-plugin-ckeditor@0.0.9/dist/grapesjs-plugin-ckeditor.min.js"></script>

<div id="gjs"></div>

<script type="text/javascript">
    var editor = grapesjs.init({
        container : '#gjs',
        plugins: ['gjs-plugin-ckeditor'],
        pluginsOpts: {
            'gjs-plugin-ckeditor': {/* ...options */}
        s
    });
</script>
