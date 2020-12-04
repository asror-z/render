<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>GrapesJS Plugin Boilerplate</title>

    <link href="https://unpkg.com/grapesjs/dist/css/grapes.min.css" rel="stylesheet">
    <script src="https://unpkg.com/grapesjs@0.14.57/dist/grapes.js"></script>
    <script src="<?=Cdn ?>/publish/grapes/grapesjs-knowde-plugin-master/dist/grapesjs-knowde-plugin.min.js"></script>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }
    </style>
</head>
<body>
<div id="gjs" style="height:0px; overflow:hidden">

    <div class="container">
        <latest-brands>
        </latest-brands>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <simple-counter start="0" end="1290" decimals="2" groupingSeparator="," decimalSeparator="."
                                duration="7" useGrouping="true" prefix="" suffix=""></simple-counter>
            </div>
            <div class="col">
            </div>
            <div class="col">
            </div>
            <div class="col">
            </div>
            <div class="col">
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    var editor = grapesjs.init({
        autorender: false,
        height: '1000px',
        showOffsets: 1,
        noticeOnUnload: 0,
        container: '#gjs',
        fromElement: true,
        plugins: ['grapesjs-knowde-plugin'],
        pluginsOpts: {
            'grapesjs-knowde-plugin': {
                blocks: {},
                blockCategories: {},
                labels: {},
                gridDevicesPanel: false
            }
        },
        canvas: {
            styles: [
                'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',
                'dist/grapesjs-knowde-plugin.css'
            ],
            scripts: [
                'https://code.jquery.com/jquery-3.3.1.slim.min.js',
                'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js',
                'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'
            ]
        },
        storageManager: {
            id: 'cms-',             // Prefix identifier that will be used on parameters
            autosave: true,
            type: 'local',
            stepsBeforeSave: 1,
            urlStore: 'https://jsonplaceholder.typicode.com/posts',
            urlLoad: 'https://jsonplaceholder.typicode.com/posts',
            contentTypeJson: true,
            //Enable/Disable components model (JSON format)
            storeComponents: 1,
            //Enable/Disable styles model (JSON format)
            storeStyles: 1,
            //Enable/Disable saving HTML template
            storeHtml: 1,
            //Enable/Disable saving CSS template
            storeCss: 1,
            // ONLY FOR REMOTE STORAGE
            // Custom parameters to pass with the remote storage request, eg. csrf token
            params: {},
            // Custom headers for the remote storage request
            headers: {},
        },
        assetManager: {
            multiUpload: false,
            autoAdd: 1,
            embedAsBase64: 0,
            // Upload endpoint, set `false` to disable upload, default `false`
            upload: 0, // 'https://staging.knowde.com/api/v1/companies/request_access_from_competitor',
            // The name used in POST to pass uploaded files, default: `'files'`
            uploadName: 'files',
            credentials: 'omit'
        },
    });
    window.editor = editor;
    // editor.on('storage:load', e => {
    //     console.log('Store Loaded ', e);
    // });
    // save
    editor.on('storage:store', e => {
        // const components = editor.DomComponents.getComponents();
        // console.log('getComponents()', components);
        console.log('Stored ...', e);
        // console.log('components', JSON.parse(e).styles);
    });
    editor.on('storage:start:store', (objectToStore) => {
        console.log('object to store,', objectToStore)
    });
    editor.render();
    editor.Panels.getButton('views', 'open-blocks').set('active', true); // open block manager by default
    editor.Commands.run('sw-visibility'); // switch grind visibility on by default
</script>
</body>
</html>