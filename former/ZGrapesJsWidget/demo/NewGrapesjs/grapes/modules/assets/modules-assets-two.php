<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>GrapesJS CKEditor</title>

    <?

    use zetsoft\assets\testing\GrapesInitAsset;
    use zetsoft\assets\testing\ZGrapesJsAsset;

    /*ZGrapesJsAsset::register($this);
    GrapesInitAsset::register($this);*/

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

    <?

    $content = file_get_contents(Root. '/exweb/vade/widgets.html');
    echo $content;
    ?>
</div>


<script>
    var editor = grapesjs.init({
        assetManager: {
            assets: [...],
            ...
        }
        },
        // Default assets
        // eg. [
        //  'https://...image1.png',
        //  'https://...image2.png',
        //  {type: 'image', src: 'https://...image3.png', someOtherCustomProp: 1},
        //  ..
        // ]
        assets: [],

        // Content to add where there is no assets to show
        // eg. 'No <b>assets</b> here, drag to upload'
        noAssets: '',

        // Upload endpoint, set `false` to disable upload
        // upload: 'https://endpoint/upload/assets',
        // upload: false,
        upload: 0,

        // The name used in POST to pass uploaded files
        uploadName: 'files',

        // Custom headers to pass with the upload request
        headers: {},

        // Custom parameters to pass with the upload request, eg. csrf token
        params: {},

        // The credentials setting for the upload request, eg. 'include', 'omit'
        credentials: 'include',

        // Allow uploading multiple files per request.
        // If disabled filename will not have '[]' appended
        multiUpload: true,

        // If true, tries to add automatically uploaded assets.
        // To make it work the server should respond with a JSON containing assets
        // in a data key, eg:
        // {
        //  data: [
        //    'https://.../image.png',
        //    ...
        //    {src: 'https://.../image2.png'},
        //    ...
        //  ]
        // }
        autoAdd: 1,

        // Text on upload input
        uploadText: 'Drop files here or click to upload',

        // Label for the add button
        addBtnText: 'Add image',

        // Custom uploadFile function
        // @example
        // uploadFile: (e) => {
        //   var files = e.dataTransfer ? e.dataTransfer.files : e.target.files;
        //   // ...send somewhere
        // }
        uploadFile: '',

        // Handle the image url submit from the built-in 'Add image' form
        // @example
        // handleAdd: (textFromInput) => {
        //   // some check...
        //   editor.AssetManager.add(textFromInput);
        // }
        handleAdd: '',

        // Enable an upload dropzone on the entire editor (not document) when dragging
        // files over it
        dropzone: 1,

        // Open the asset manager once files are been dropped via the dropzone
        openAssetsOnDrop: 1,

        // Any dropzone content to append inside dropzone element
        dropzoneContent: '',

        // Default title for the asset manager modal
        modalTitle: 'Select Image',
        height: '100%',
        showOffsets: 1,
        noticeOnUnload: 0,
        storageManager: { autoload: 0 },
        container: '#gjs',
        fromElement: true,
        showDevices: false,
        plugins: ['grapesjs-blocks-bootstrap4'],
        pluginsOpts: {
            'grapesjs-blocks-bootstrap4': {
                blocks: {},
                blockCategories: {},
                labels: {},
                gridDevicesPanel: true,
                formPredefinedActions: [
                    {name: 'Contact', value: '/contact'},
                    {name: 'landing', value: '/landing'},
                ]
            }
        },
        canvas: {
            styles: [
                'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'
            ],
            scripts: [
                'https://code.jquery.com/jquery-3.3.1.slim.min.js',
                'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js',
                'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'
            ],
        }
    });
    window.editor = editor;
   
    var editor = grapesjs.init({
        container: '#gjs',

        plugins: ['grapesjs-blocks-bootstrap4'],
        pluginsOpts: {
            'grapesjs-blocks-bootstrap4': {
                blocks: {
                    default: true,
                    text: true,
                    link: true,
                    image: true,
                    text: true,
                    text: true,
                    text: true,
                    text: true,
                    text: true,
                },
                blockCategories: {
                    layout:true,
                    layout:true,
                    layout:true,
                    layout:true,
                    layout:true,

                },
                labels: {
                    // ...
                },
                gridDevices: true,
                gridDevicesPanel: true,

            }
        },
        canvas: {
            styles: [
                'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'
            ],
            scripts: [
                'https://code.jquery.com/jquery-3.3.1.slim.min.js',
                'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js',
                'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'
            ],
        }
    });
</script>
</body>
</html>
