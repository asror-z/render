<?php
// $page = file_get_contents('../Maps/leaflet/leaflet.html');
$page = file_get_contents('../../../Places/Maps/leaflet/leaflet.html');
?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>GrapesJS Preset Webpage</title>
    <link rel="stylesheet" href="/publish/navigs/Grapes/css/toastr.min.css">
    <link rel="stylesheet" href="/publish/yarner/grapesjs/dist/css/grapes.min.css">
    <link rel="stylesheet" href="/publish/yarner/grapesjs-preset-webpage/dist/grapesjs-preset-webpage.min.css">
    <link rel="stylesheet" href="/publish/navigs/Grapes/css/tooltip.css">
    <link rel="stylesheet" href="/publish/yarner/grapesjs-plugin-filestack/dist/grapesjs-plugin-filestack.css">
    <link rel="stylesheet" href="/publish/navigs/Grapes/css/demos.css">

    <script src="/publish/yarner/analytics.js/analytics.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <script src="/publish/navigs/Grapes/js/toastr.min.js"></script>

    <script src="/publish/yarner/grapesjs/dist/grapes.min.js"></script>

    <script src="/publish/yarner/grapesjs-preset-webpage/dist/grapesjs-preset-webpage.min.js"></script>

    <script src="/publish/yarner/grapesjs-lory-slider/dist/grapesjs-lory-slider.min.js"></script>

    <script src="/publish/yarner/grapesjs-tabs/dist/grapesjs-tabs.min.js"></script>

    <script src="/publish/yarner/grapesjs-custom-code/dist/grapesjs-custom-code.min.js"></script>

    <script src="/publish/yarner/grapesjs-touch/dist/grapesjs-touch.min.js"></script>

    <script src="/publish/yarner/grapesjs-parser-postcss/dist/grapesjs-parser-postcss.min.js"></script>

    <script src="/publish/yarner/grapesjs-tooltip/dist/grapesjs-tooltip.min.js"></script>

    <script src="/publish/yarner/grapesjs-tui-image-editor/dist/grapesjs-tui-image-editor.min.js"></script>

    <script src="/publish/yarner/grapesjs-typed/dist/grapesjs-typed.min.js"></script>

    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }

        .submit_button {
            position: absolute;
            z-index: 9999;
            transform: translate(-76%, 50%);
            top: 50%;
            background: #28a745;
            border: 0;
            padding: 5px 29px;
            border-radius: 0 5px 5px 0;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
            transition: 0.5s;
        }

        .submit_button:hover {
            transform: translate(0, 50%);
        }

    </style>
</head>
<body>


<button class="submit_button">Submit</button>

<div id="gjs" style="height:0px; overflow:hidden">

    <?php
/*    echo $page*/
    ?>

</div>


<script type="text/javascript">

    var editor = grapesjs.init({
        allowScripts: 1,
        height: '100%',
        showOffsets: 1,
        noticeOnUnload: 0,
        container: '#gjs',
        fromElement: true,
        // Show a toolbar when the component is selected
        showToolbar: 1,
        // If true render a select of available devices
        showDevices: 1,
        // When enabled, on device change media rules won't be created
        devicePreviewMode: 0,
        // Comes handy for mobile-first cases
        mediaCondition: 'max-width',
        // Starting tag for variable inside scripts in Components
        tagVarStart: '{[ ',

        // Ending tag for variable inside scripts in Components
        tagVarEnd: ' ]}',
        // When false, removes empty text nodes when parsed, unless they contain a space
        keepEmptyTextNodes: 0,

        // Return JS of components inside HTML from 'editor.getHtml()'
        jsInHtml: true,
        // Enable native HTML5 drag and drop
        nativeDnD: 1,

        // Enable multiple selection
        multipleSelection: 1,
        // Show the wrapper component in the final code, eg. in editor.getHtml()
        exportWrapper: 0,

        // The wrapper, if visible, will be shown as a `<body>`
        wrapperIsBody: 1,
        // Usually when you update the `style` of the component this changes the
        // element's `style` attribute. Unfortunately, inline styling doesn't allow
        // use of media queries (@media) or even pseudo selectors (eg. :hover).
        // When `avoidInlineStyle` is true all styles are inserted inside the css rule
        // @deprecated Don't use this option, we don't support inline styling anymore
        avoidInlineStyle: 1,
        // Avoid default properties from storable JSON data, like `components` and `styles`.
        // With this option enabled your data will be smaller (usefull if need to
        // save some storage space)
        avoidDefaults: 1,
        // (experimental)
        // The structure of components is always on the screen but it's not the same
        // for style rules. When you delete a component you might leave a lot of styles
        // which will never be used again, therefore they might be removed.
        // With this option set to true, styles not used from the CSS generator (so in
        // any case where `CssGenerator.build` is used) will be removed automatically.
        // But be careful, not always leaving the style not used mean you wouldn't
        // use it later, but this option comes really handy when deal with big templates.
        clearStyles: 0,
        // Specify the global drag mode of components. By default, components are moved
        // following the HTML flow. Two other options are available:
        // 'absolute' - Move components absolutely (design tools way)
        // 'translate' - Use translate CSS from transform property
        // To get more about this feature read: https://github.com/artf/grapesjs/issues/1936
        dragMode: 0,

        // Dom element
        el: '',
        // Configurations for Undo Manager
        undoManager: {},
        assetManager: {
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

            // Style prefix
            stylePrefix: 'am-',

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

            // To upload your assets, the module uses Fetch API, with this option you
            // overwrite it with something else.
            // It should return a Promise
            // @example
            // customFetch: (url, options) => axios(url, { data: options.body }),
            customFetch: '',

            // Custom uploadFile function.
            // Differently from the `customFetch` option, this gives a total control
            // over the uploading process, but you also have to emit all `asset:upload:*` events
            // by yourself (if you need to use them somewhere)
            // @example
            // uploadFile: (e) => {
            //   var files = e.dataTransfer ? e.dataTransfer.files : e.target.files;
            //   // ...send somewhere
            // }
            uploadFile: '',

            // In the absence of 'uploadFile' or 'upload' assets will be embedded as Base64
            embedAsBase64: 1,

            // Handle the image url submit from the built-in 'Add image' form
            // @example
            // handleAdd: (textFromInput) => {
            //   // some check...
            //   editor.AssetManager.add(textFromInput);
            // }
            handleAdd: '',

            // Enable an upload dropzone on the entire editor (not document) when dragging
            // files over it
            // If active the dropzone disable/hide the upload dropzone in asset modal,
            // otherwise you will get double drops (#507)
            dropzone: 0,

            // Open the asset manager once files are been dropped via the dropzone
            openAssetsOnDrop: 1,

            // Any dropzone content to append inside dropzone element
            dropzoneContent: '',

            // Default title for the asset manager modal
            modalTitle: 'Select Image',

            //Default placeholder for input
            inputPlaceholder: 'http://path/to/the/image.jpg',

            //method called before upload, on return false upload is canceled.
            // @example
            // beforeUpload: (files) => {
            //   // logic...
            //   var stopUpload = true;
            //   if(stopUpload) return false;
            // }
            beforeUpload: null
        },
        canvas: {
            stylePrefix: 'cv-',

            /*
             * Append external scripts to the `<head>` of the iframe.
             * Be aware that these scripts will not be printed in the export code
             * @example
             * scripts: [ 'https://...1.js', 'https://...2.js' ]
             */
            /*
             * Append external styles to the `<head>` of the iframe
             * Be aware that these styles will not be printed in the export code
             * @example
             * styles: [ 'https://...1.css', 'https://...2.css' ]
             */
            styles: [
            '/vendors/kartik-v/yii2-widget-select2/src/assets/css/select2-krajee-bs4.min.css',
            '/vendors/kartik-v/yii2-widget-select2/src/assets/css/select2-addl.min.css',
            '/vendors/kartik-v/yii2-widget-select2/src/assets/css/select2-bootstrap.min.css',
            'render/inputes/ZFileInputWidget/assets/css/fileinput.css',

    ],


            scripts: [
                'https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js',
                'https://unpkg.com/leaflet@1.6.0/dist/leaflet.js',
                '/vendors/kartik-v/yii2-widget-select2/src/assets/js/select2-krajee.js',
                '/vendors/select2/select2/dist/js/select2.full.js',
                '/vendors/select2/select2/dist/js/select2.min.js',
                /*'/publish/inputs/grapJsMusoxon/assets/index.js',*/
                'https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js',
                'https://cdn.jsdelivr.net/npm/piexifjs@1.0.6/piexif.js',
                'https://cdn.jsdelivr.net/npm/sortablejs@1.10.2/Sortable.js',
                'https://cdn.jsdelivr.net/npm/purify@3.4.0/src/purify.js',
                '/publish/inputs/grapJsMusoxon/assets/fileinput.js',
                'https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.js',
                'https://cdn.jsdelivr.net/npm/bootstrap-fileinput@5.0.8/themes/explorer-fas/theme.js',

            ],

            /**
             * Add custom badge naming strategy
             * @example
             * customBadgeLabel: function(component) {
             *  return component.getName();
             * }
             */
            customBadgeLabel: '',
            /**
             * Indicate when to start the auto scroll of the canvas on component/block dragging (value in px )
             */
            autoscrollLimit: 50,
            notTextable: ['button', 'a', 'input[type=checkbox]', 'input[type=radio]']
        },
        layers: {},
        richTextEditor: {
            stylePrefix: 'rte-',

            // If true, moves the toolbar below the element when the top canvas
            // edge is reached
            adjustToolbar: 1,

            // Default RTE actions
            actions: ['bold', 'italic', 'underline', 'strikethrough', 'link']

        },
        domComponents: {
            stylePrefix: 'comp-',

            wrapperId: 'wrapper',

            wrapperName: 'Body',

            // Default wrapper configuration
            wrapper: {
                removable: false,
                copyable: false,
                draggable: false,
                components: [],
                traits: [],
                stylable: [
                    'background',
                    'background-color',
                    'background-image',
                    'background-repeat',
                    'background-attachment',
                    'background-position',
                    'background-size'
                ]
            },

            // Could be used for default components
            components: [],

            // If the component is draggable you can drag the component itself (not only from the toolbar)
            draggableComponents: 1,

            // Generally, if you don't edit the wrapper in the editor, like
            // custom attributes, you don't need the wrapper stored in your JSON
            // structure, but in case you need it you can use this option.
            // If you have `config.avoidInlineStyle` disabled the wrapper will be stored
            // as we need to store inlined style.
            storeWrapper: 0,

            /**
             * You can setup a custom component definiton processor before adding it into the editor.
             * It might be useful to transform custom objects (es. some framework specific JSX) to GrapesJS component one.
             * This custom function will be executed on ANY new added component to the editor so make smart checks/conditions
             * to avoid doing useless executions
             * By default, GrapesJS supports already elements generated from React JSX preset
             * @example
             * processor: (obj) => {
             *  if (obj.$$typeof) { // eg. this is a React Element
             *     const gjsComponent = {
             *      type: obj.type,
             *      components: obj.props.children,
             *      ...
             *     };
             *     ...
             *     return gjsComponent;
             *  }
             * }
             */
            processor: 0,

            // List of void elements
            voidElements: [
                'area',
                'base',
                'br',
                'col',
                'embed',
                'hr',
                'img',
                'input',
                'keygen',
                'link',
                'menuitem',
                'meta',
                'param',
                'source',
                'track',
                'wbr'
            ]
        },

        //Configurations for Modal Dialog
        modal: {},

        //Configurations for Code Manager
        codeManager: {},

        panels: {
            stylePrefix: 'pn-',

            // Default panels fa-sliders for features
            defaults: [
                {
                    id: 'commands',
                    buttons: [{}]
                },
                /*   {
                       id: 'options',
                       buttons: [
                           {
                               active: true,
                               id: swv,
                               className: 'fa fa-square-o',
                               command: swv,
                               context: swv,
                               attributes: {title: 'View components'}
                           },
                           {
                               id: prv,
                               className: 'fa fa-eye',
                               command: prv,
                               context: prv,
                               attributes: {title: 'Preview'}
                           },
                           {
                               id: ful,
                               className: 'fa fa-arrows-alt',
                               command: ful,
                               context: ful,
                               attributes: {title: 'Fullscreen'}
                           },
                           {
                               id: expt,
                               className: 'fa fa-code',
                               command: expt,
                               attributes: {title: 'View code'}
                           }
                       ]
                   },
                   {
                       id: 'views',
                       buttons: [
                           {
                               id: osm,
                               className: 'fa fa-paint-brush',
                               command: osm,
                               active: true,
                               togglable: 0,
                               attributes: {title: 'Open Style Manager'}
                           },
                           {
                               id: otm,
                               className: 'fa fa-cog',
                               command: otm,
                               togglable: 0,
                               attributes: {title: 'Settings'}
                           },
                           {
                               id: ola,
                               className: 'fa fa-bars',
                               command: ola,
                               togglable: 0,
                               attributes: {title: 'Open Layer Manager'}
                           },
                           {
                               id: obl,
                               className: 'fa fa-th-large',
                               command: obl,
                               togglable: 0,
                               attributes: {title: 'Open Blocks'}
                           }
                       ]
                   }*/
            ],

            // Editor model
            em: null,

            // Delay before show children buttons (in milliseconds)
            delayBtnsShow: 300
        },
        cssComposer: {
            // Style prefix
            stylePrefix: 'css-',

            // Custom CSS string to render on top
            staticRules: '',

            // Default CSS style
            rules: []
        },
        storageManager: {
            // Prefix identifier that will be used inside storing and loading
            id: 'gjs-',

            // Enable/Disable autosaving
            autosave: 0,

            // Indicates if load data inside editor after init
            autoload: 0,

            // Indicates which storage to use. Available: local | remote
            type: 'local',

            // If autosave enabled, indicates how many steps (general changes to structure)
            // need to be done before save. Useful with remoteStorage to reduce remote calls
            stepsBeforeSave: 0,

            //Enable/Disable components model (JSON format)
            storeComponents: 0,

            //Enable/Disable styles model (JSON format)
            storeStyles: 0,

            //Enable/Disable saving HTML template
            storeHtml: 0,

            //Enable/Disable saving CSS template
            storeCss: 0,

            // ONLY FOR LOCAL STORAGE
            // If enabled, checks if browser supports Local Storage
            checkLocal: 0,

            // ONLY FOR REMOTE STORAGE
            // Custom parameters to pass with the remote storage request, eg. csrf token
            params: {},

            // Custom headers for the remote storage request
            headers: {},

            // Endpoint where to save all stuff
            urlStore: '',

            // Endpoint where to fetch data
            urlLoad: '',

            //Callback before request
            beforeSend(jqXHR, settings) {
            },

            //Callback after request
            onComplete(jqXHR, status) {
            },

            // set contentType paramater of $.ajax
            // true: application/json; charset=utf-8'
            // false: 'x-www-form-urlencoded'
            contentTypeJson: true,

            credentials: 'include',

            // Pass custom options to fetch API (remote storage)
            // You can pass a simple object: { someOption: 'someValue' }
            // or a function wich returns and object to add:
            // currentOpts => {
            //  return currentOpts.method === 'post' ?  { method: 'patch' } : {};
            // }
            fetchOptions: ''
        },
        selectorManager: {
            // Style prefix
            stylePrefix: 'clm-',

            // Specify the element to use as a container, string (query) or HTMLElement
            // With the empty value, nothing will be rendered
            appendTo: '',

            // Default selectors
            selectors: [],

            // Label for selectors
            label: 'Classes',

            // Label for states
            statesLabel: '- State -',

            selectedLabel: 'Selected',

            // States
            states: [
                {name: 'hover', label: 'Hover'},
                {name: 'active', label: 'Click'},
                {name: 'nth-of-type(2n)', label: 'Even/Odd'}
            ],

            // Custom selector name escaping strategy, eg.
            // name => name.replace(' ', '_')
            escapeName: 0
        },
        deviceManager: {
            devices: [
                {
                    id: 'desktop',
                    name: 'Desktop',
                    width: ''
                },
                {
                    id: 'tablet',
                    name: 'Tablet',
                    width: '768px',
                    widthMedia: '992px'
                },
                {
                    id: 'mobileLandscape',
                    name: 'Mobile landscape',
                    width: '568px',
                    widthMedia: '768px'
                },
                {
                    id: 'mobilePortrait',
                    name: 'Mobile portrait',
                    width: '320px',
                    widthMedia: '480px'
                }
            ],
            deviceLabel: 'Device'
        },
        styleManager: {
            sectors: [
                {
                    name: 'General',
                    open: false,
                    buildProps: [
                        'float',
                        'display',
                        'position',
                        'top',
                        'right',
                        'left',
                        'bottom'
                    ]
                },
                {
                    name: 'Flex',
                    open: false,
                    buildProps: [
                        'flex-direction',
                        'flex-wrap',
                        'justify-content',
                        'align-items',
                        'align-content',
                        'order',
                        'flex-basis',
                        'flex-grow',
                        'flex-shrink',
                        'align-self'
                    ]
                },
                {
                    name: 'Dimension',
                    open: false,
                    buildProps: [
                        'width',
                        'height',
                        'max-width',
                        'min-height',
                        'margin',
                        'padding'
                    ]
                },
                {
                    name: 'Typography',
                    open: false,
                    buildProps: [
                        'font-family',
                        'font-size',
                        'font-weight',
                        'letter-spacing',
                        'color',
                        'line-height',
                        'text-align',
                        'text-shadow'
                    ],
                    properties: [
                        {
                            property: 'text-align',
                            list: [
                                {value: 'left', className: 'fa fa-align-left'},
                                {value: 'center', className: 'fa fa-align-center'},
                                {value: 'right', className: 'fa fa-align-right'},
                                {value: 'justify', className: 'fa fa-align-justify'}
                            ]
                        }
                    ]
                },
                {
                    name: 'Decorations',
                    open: false,
                    buildProps: [
                        'border-radius-c',
                        'background-color',
                        'border-radius',
                        'border',
                        'box-shadow',
                        'background'
                    ]
                },
                {
                    name: 'Extra',
                    open: false,
                    buildProps: ['transition', 'perspective', 'transform']
                }
            ]
        },
        traitManager: {
            stylePrefix: 'trt-',

            // Specify the element to use as a container, string (query) or HTMLElement
            // With the empty value, nothing will be rendered
            appendTo: '',

            labelContainer: 'Component settings',

            // Placeholder label for text input types
            labelPlhText: 'eg. Text here',

            // Placeholder label for href input
            labelPlhHref: 'eg. https://google.com',

            // Default options for the target input
            optionsTarget: [
                {value: '', name: 'This window'},
                {value: '_blank', name: 'New window'}
            ],

            // Text to show in case no element selected
            textNoElement: 'Select an element before using Trait Manager'
        },
        textViewCode: 'Code',
        // Keep unused styles within the editor
        keepUnusedStyles: 0,
        // TODO
        multiFrames: 0,
        i18n: {},
        blockManager: {
            // Specify the element to use as a container, string (query) or HTMLElement
            // With the empty value, nothing will be rendered
            appendTo: '',

            // Append blocks to canvas on click
            appendOnClick: 0,

            blocks: []
        },

        plugins: [
            'gjs-preset-webpage',
            'grapesjs-tabs',
            'grapesjs-custom-code',
            'grapesjs-touch',
            'grapesjs-tooltip',
            'grapesjs-tui-image-editor',
            'grapesjs-typed',
            'grapesjs-plugin-forms',
            'grapesjs-plugin-header',
            'grapesjs-blocks-bootstrap4',
            'grapesjs-blocks-flexbox-fork',
            'grapesjs-custom-blocks',
            'grapesjs-style-filter',
            'grapesjs-style-gradient',
        ],
        pluginsOpts: {
            'gjs-preset-webpage': {
                blocks: ['link-block', 'quote', 'text-basic'],
                modalImportTitle: 'Import',
                modalImportButton: 'Import',
                modalImportLabel: '',
                modalImportContent: '',
                importViewerOptions: {},
                textCleanCanvas: 'Are you sure to clean the canvas?',
                showStylesOnChange: true,
                textGeneral: 'General',
                textLayout: 'Layout',
                textTypography: 'Typography',
                textDecorations: 'Decorations',
                textExtra: 'Extra',
                customStyleManager: [],
                blocksBasicOpts: {},
                navbarOpts: {},
                countdownOpts: {},
                formsOpts: {},
                exportOpts: {},
                aviaryOpts: false,
                filestackOpts: false,
            },
            'grapesjs-tooltip': {
                id: 'tooltip',

                // Label of the tooltip. Used for the block and component name
                labelTooltip: 'Tooltip',

                // Object to extend the default tooltip block, eg. { label: 'Tooltip', category: 'Extra', ... }.
                // Pass a falsy value to avoid adding the block
                blockTooltip: {},

                // Object to extend the default tooltip properties, eg. `{ name: 'Tooltip', droppable: false, ... }`
                propsTooltip: {},

                // A function which allows to extend default traits by receiving the original array and returning a new one
                extendTraits: traits => traits,

                // Tooltip attribute prefix
                attrTooltip: 'data-tooltip',

                // Tooltip class prefix
                classTooltip: 'tooltip-component',

                // Custom CSS styles, this will replace the default one
                style: '',

                // Additional CSS styles
                styleAdditional: '',

                // Make all tooltip relative classes private
                privateClasses: 1,

                // Indicate if the tooltip can be styled. You can also pass an array
                // of which proprties can be styled. Eg. `['color', 'background-color']`
                stylableTooltip: [
                    'background-color',
                    'padding',
                    'padding-top',
                    'padding-right',
                    'padding-bottom',
                    'padding-left',
                    'font-family',
                    'font-size',
                    'font-weight',
                    'letter-spacing',
                    'color',
                    'line-height',
                    'text-align',
                    'border-radius',
                    'border-top-left-radius',
                    'border-top-right-radius',
                    'border-bottom-left-radius',
                    'border-bottom-right-radius',
                    'border',
                    'border-width',
                    'border-style',
                    'border-color',
                ],

                // If true, force the tooltip to be shown
                showTooltipOnStyle: 1,
            },
            'grapesjs-tui-image-editor': {
                config: {},

                // Pass the editor constructor. By default, the `tui.ImageEditor` will be called
                constructor: '',

                // Label for the image editor (used in the modal)
                labelImageEditor: 'Image Editor',

                // Label used on the apply button
                labelApply: 'Apply',

                // Default editor height
                height: '650px',

                // Default editor width
                width: '100%',

                // Id to use to create the image editor command
                commandId: 'tui-image-editor',

                // Icon used in the component toolbar
                // Hide the default editor header
                hideHeader: 1,

                // By default, GrapesJS takes the modified image, adds it to the Asset Manager and update the target.
                // If you need some custom logic you can use this custom 'onApply' function
                // eg.
                // onApply: (imageEditor, imageModel) => {
                //   const dataUrl = imageEditor.toDataURL();
                //   editor.AssetManager.add({ src: dataUrl }); // Add it to Assets
                //   imageModel.set('src', dataUrl); // Update the image component
                // }
                onApply: 0,

                // If no custom `onApply` is passed and this option is `true`, the result image will be added to assets
                addToAssets: 1,

                // If no custom `onApply` is passed, on confirm, the edited image, will be passed to the AssetManager's
                // uploader and the result (eg. instead of having the dataURL you'll have the URL) will be
                // passed to the default `onApply` process (update target, etc.)
                upload: 0,

                // The apply button (HTMLElement) will be passed as an argument to this function, once created.
                // This will allow you a higher customization.
                onApplyButton: () => {
                },

            },
            'grapesjs-typed': {
                block: {},

                props: i => i,
            },
            'grapesjs-plugin-forms': {
                blocks: ['form', 'input', 'textarea', 'select',
                    'button', 'label', 'checkbox', 'radio'],
                labelTraitMethod: 'Method',
                labelTraitAction: paramAction,
                labelTraitState: 'State',
                labelTraitId: 'ID',
                labelTraitFor: 'For',
                labelInputName: 'Input',
                labelTextareaName: 'Textarea',
                labelSelectName: 'Select',
                labelCheckboxName: 'Checkbox',
                labelRadioName: 'Radio',
                labelButtonName: 'Button',
                labelTraitName: 'Name',
                labelTraitPlaceholder: 'Placeholder',
                labelTraitValue: 'Value',
                labelTraitRequired: 'Required',
                labelTraitType: 'Type',
                labelTraitOptions: 'Options',
                labelTraitChecked: 'Checked',
                labelTypeText: 'Text',
                labelTypeEmail: 'Email',
                labelTypePassword: 'Password',
                labelTypeNumber: 'Number',
                labelTypeSubmit: 'Submit',
                labelTypeReset: 'Reset',
                labelTypeButton: 'Button',
                labelNameLabel: 'Label',
                labelForm: 'Form',
                labelSelectOption: '- Select option -',
                labelOption: 'Option',
                labelStateNormal: 'Normal',
                labelStateSuccess: 'Success',
                labelStateError: 'Error',
                category: 'Forms',
            },
            'grapesjs-blocks-bootstrap4': {
                default: true,
                text: true,
                link: true,
                image: true,
                // LAYOUT
                container: true,
                row: true,
                column: true,
                column_break: true,
                media_object: true,
                // COMPONENTS
                alert: true,
                tabs: true,
                badge: true,
                button: true,
                button_group: true,
                button_toolbar: true,
                card: true,
                card_container: true,
                collapse: true,
                dropdown: true,
                // TYPOGRAPHY
                header: true,
                paragraph: true,
                // BASIC
                list: true,
                // FORMS
                form: true,
                input: true,
                form_group_input: true,
                input_group: true,
                textarea: true,
                select: true,
                label: true,
                checkbox: true,
                radio: true,
                // COMPONENTS
                tab: 'Tab',
                tabPane: 'Tab Pane',
                dropdown_menu: 'Dropdown Menu',
                dropdown_item: 'Dropdown Item',
                // FORMS
                file_input: 'File',
                select_option: '- Select option -',
                option: 'Option',
                trait_method: 'Method',
                trait_enctype: 'Encoding Type',
                trait_multiple: 'Multiple',
                trait_action: paramAction,
                trait_state: 'State',
                trait_id: 'ID',
                trait_for: 'For',
                trait_name: 'Name',
                trait_placeholder: 'Placeholder',
                trait_value: 'Value',
                trait_required: 'Required',
                trait_type: 'Type',
                trait_options: 'Options',
                trait_checked: 'Checked',
                type_text: 'Text',
                type_email: 'Email',
                type_password: 'Password',
                type_number: 'Number',
                type_date: 'Date',
                type_hidden: 'Hidden',
                type_submit: 'Submit',
                type_reset: 'Reset',
                type_button: 'Button',
                'layout': true,
                'components': true,
                'typography': true,
                'basic': true,
                'forms': true,
            },
            'grapesjs-blocks-flexbox-fork': {
                flexboxBlock: {},

                // Classes prefix
                stylePrefix: '',

                // Row label
                labelRow: 'Row',

                // Column label
                labelColumn: 'Column',
            },
            'grapesjs-style-filter': {
                inputFilterType: {},

                // Extend the default filter strength input, eg. `{ name: 'Blur', defaults: 50, ... }`
                inputFilterStrength: {},

                // Customize the filter strength input when it should be updated. The option
                // is a function, which receive the current object type and returns a new one
                filterStrengthChange: type => type,
            },
            'grapesjs-style-gradient': {
                grapickOpts: {},

                // Custom color picker, check Grapick's repo to get more about it
                // If you leave it empty the native color picker will be used.
                // You can use 'default' string to get the one used by Grapesjs (which
                // is spectrum at the moment of writing)
                colorPicker: '',

                // Show gradient direction input under picker, you can pass an object
                // as a model
                inputDirection: 1,

                // Show gradient type input under picker, you can pass an object as
                // a model
                inputType: 1,
            },

        },



    });
    var comps = editor.DomComponents;
    var model = document.querySelector('.gjs-block');
    const keymaps = editor.Keymaps;

    editor.on('component:add', function (e) {
        console.log('ZGrapesJs | component:add');
        console.log('found id: ' + e.ccid);
        alert(e.ccid);

//       e.set('content', '1111111111');

    });


    editor.on('storage:load', function (e) {
        /*console.log('Loaded ', e);*/
    });

    editor.on('storage:store', function (e) {
        /*console.log('Stored ', e)*/
    });

    editor.on('component:clone', function (e) {
        console.log('ZGrapesJs | component:clone');
        /*console.log(e);*/
    });

    editor.on('component:update', function (e) {
        console.log('ZGrapesJs | component:update');
        /*console.log(e);*/
    });

    editor.on('component:update:{propertyName}', function (e) {
        console.log('ZGrapesJs | component:update:{propertyName}');
        /*console.log(e);*/
    });

    editor.on('component:styleUpdate', function (e) {
        console.log('ZGrapesJs | component:styleUpdate');
        /*console.log(e);*/
    });
    editor.on('component:styleUpdate:{propertyName}', function (e) {
        console.log('ZGrapesJs | component:styleUpdate:{propertyName}');
        /*console.log(e);*/
    });
    editor.on('component:selected', function (e) {
        console.log('ZGrapesJs | component:selected');
        /*console.log(e);*/
    });
    editor.on('component:toggled', function (e) {
        console.log('ZGrapesJs | component:toggled');
        /*console.log(e);*/
    });

    // Blocks
    editor.on('block:add', function (e) {
        console.log('ZGrapesJs | block:add');
        
    });
    editor.on('block:remove', function (e) {
        console.log('ZGrapesJs | block:remove');
        /*console.log(e);*/
    });
    editor.on('block:drag:start', function (e) {
        console.log('ZGrapesJs | block:drag:start');
        console.log(event.get('type'));
        /*console.log(e);*/
    });
    editor.on('block:drag', function (e) {
        console.log('ZGrapesJs | block:drag');
        console.log(event.get('type'));
        /*console.log(e);*/
    });
    editor.on('block:drag:stop', function (e) {
        console.log('ZGrapesJs | block:drag:stop');
        /*console.log(e);*/
    });

    const blockManager = editor.BlockManager;

    blockManager.add('some-block-id', {
        label: `<div><img src="https://picsum.photos/70/70"/> <div class="my-label-block">Widgets</div></div>`,
        content: '<div></div>',
        category: 'zetsoft',


    });




    blockManager.add('select-block', {

        label: `<div>
            <img src="https://picsum.photos/70/70"/>
            <div class="my-label-block">select2</div>
        </div>`,

        content:`<div class="highlight-addon row field-coreinput-zhinputwidget">

<div class="col-md-12">
<div class="input-group s2-input-group input-group-lg group-coreinput-zhinputwidget" data-select2-id="4"><div class="input-group-prepend"></div><select id="coreinput-zhinputwidget" class="form-control md-form select2-hidden-accessible" name="CoreInput[zhinputwidget]" data-s2-options="s2options_e9bc2761" data-krajee-select2="select2_697f07d1" style="width: 1px; height: 1px; visibility: hidden;" data-select2-id="coreinput-zhinputwidget" tabindex="-1" aria-hidden="true">
<option value="" data-select2-id="2">Zhinputwidget</option>
<option value="green" data-select2-id="8">green</option>
<option value="red" data-select2-id="9">red</option>
<option value="blue" data-select2-id="10">blue</option>
<option value="orange" data-select2-id="11">orange</option>
<option value="white" data-select2-id="12">white</option>
<option value="black" data-select2-id="13">black</option>
<option value="purple" data-select2-id="14">purple</option>
<option value="cyan" data-select2-id="15">cyan</option>
<option value="teal" data-select2-id="16">teal</option>

</select><span class="select2 select2-container select2-container--krajee-bs4 select2-container--below" dir="ltr" data-select2-id="1" style="width: 1px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-coreinput-zhinputwidget-container"><span class="select2-selection__rendered" id="select2-coreinput-zhinputwidget-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Zhinputwidget</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span><div class="input-group-append"></div></div>

<div class="help-block invalid-feedback"></div>
</div>
</div>`
        ,
        category: 'select2',

    });

    blockManager.add('bootstrapInput-block11', {

        label: `<div>
            <img src="https://picsum.photos/70/70"/>
            <div class="my-label-block">fileInput</div>
        </div>`,

        content: {
            content:`<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-fileinput@5.0.8/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.12.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-fileinput@5.0.8/themes/explorer-fas/theme.css" rel="stylesheet" type="text/css">


        <div class="container my-4">
    <form enctype="multipart/form-data">
        <div class="file-loading">
            <input id="kv-explorer" type="file" multiple>
        </div>
        <div class="file-name" id="file-name">

        </div>
        <div class="file-inputs" id="file-inputs">

        </div>
        <br>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-outline-secondary">Reset</button>
        <button type="button" class="btn btn-success" id="plus">+</button>
        <button type="button" class="btn btn-warning" id="minus">-</button>
    </form>
</div>`
            ,
            script:function() {
            $(document).ready(function () {
                $("#kv-explorer").fileinput({
                    language: 'en',
                    showCaption: true,
                    showBrowse: true,
                    showPreview: true,
                    showRemove: true,
                    showUpload: true,
                    showUploadStats: true,
                    showCancel: true,
                    showPause: true,
                    showClose: true,
                    showUploadedThumbs: true,
                    showConsoleLogs: true,
                    browseOnZoneClick: true,
                    autoReplace: true,
                    autoOrientImage: function () { // applicable for JPEG images only and non ios safari
                        var ua = window.navigator.userAgent, webkit = !!ua.match(/WebKit/i),
                            iOS = !!ua.match(/iP(od|ad|hone)/i), iOSSafari = iOS && webkit && !ua.match(/CriOS/i);
                        return !iOSSafari;
                    },
                    autoOrientImageInitial: true,
                    required: false,
                    rtl: false,
                    hideThumbnailContent: false,
                    encodeUrl: true,
                    generateFileId: null,
                    previewClass: '',
                    captionClass: '',
                    frameClass: 'krajee-default',
                    mainClass: 'file-caption-main',
                    mainTemplate: null,
                    purifyHtml: true,
                    fileSizeGetter: null,
                    initialCaption: '',
                    initialPreview: [],
                    initialPreviewDelimiter: '*$$*',
                    initialPreviewAsData: true,
                    initialPreviewFileType: 'image',
                    initialPreviewConfig: [],
                    initialPreviewThumbTags: [],
                    previewThumbTags: {},
                    initialPreviewShowDelete: true,
                    initialPreviewDownloadUrl: '',
                    removeFromPreviewOnError: false,
                    deleteUrl: "/core/tester/asror/delete-file.aspx?model=CoreInput&attribute=zfileinputwidget&id=3",
                    deleteExtraData: {},
                    overwriteInitial: false,
                    previewZoomButtonIcons: {
                        prev: '<i class="fa fa-arrow-left"></i>',
                        next: '<i class="fa fa-arrow-right"></i>',
                        toggleheader: '<i class="fa fa-angle-up"></i>',
                        fullscreen: '<i class="fa fa-arrows-alt"></i>',
                        borderless: '<i class="fas fa-external-link-square-alt"></i>',
                        close: '<i class="fa fa-times"></i>'
                    },
                    previewZoomButtonClasses: {
                        prev: 'btn btn-navigate',
                        next: 'btn btn-navigate',
                        toggleheader: 'btn btn-sm btn-kv btn-default btn-outline-secondary',
                        fullscreen: 'btn btn-sm btn-kv btn-default btn-outline-secondary',
                        borderless: 'btn btn-sm btn-kv btn-default btn-outline-secondary',
                        close: 'btn btn-sm btn-kv btn-default btn-outline-secondary'
                    },
                    previewTemplates: {},
                    previewContentTemplates: {},
                    preferIconicPreview: false,
                    preferIconicZoomPreview: false,
                    allowedFileTypes: null,
                    allowedFileExtensions: null,
                    allowedPreviewTypes: undefined,
                    allowedPreviewMimeTypes: null,
                    allowedPreviewExtensions: null,
                    disabledPreviewTypes: undefined,
                    disabledPreviewExtensions: ['msi', 'exe', 'com', 'zip', 'rar', 'app', 'vb', 'scr'],
                    disabledPreviewMimeTypes: null,
                    defaultPreviewContent: null,
                    customLayoutTags: {},
                    customPreviewTags: {},
                    previewFileIcon: '<i class="fas fa-trash"></i>',
                    previewFileIconClass: 'file-other-icon',
                    previewFileIconSettings: {},
                    previewFileExtSettings: {},
                    buttonLabelClass: 'hidden-xs',
                    browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>' +
                        '&nbsp;',
                    browseClass: 'btn btn-primary',
                    removeIcon: '<i class="fas fa-trash"></i>',
                    removeClass: 'btn btn-default btn-secondary',
                    cancelIcon: '<i class="fas fa-trash"></i>',
                    cancelClass: 'btn btn-default btn-secondary',
                    pauseIcon: '<i class="glyphicon glyphicon-pause"></i>',
                    pauseClass: 'btn btn-default btn-secondary',
                    uploadIcon: '<i class="fas fa-upload"></i>',
                    uploadClass: 'btn btn-default btn-secondary',
                    uploadUrl: "/core/tester/asror/upload.aspx?model=CoreInput&attribute=zfileinputwidget",
                    uploadUrlThumb: "",
                    uploadAsync: false,
                    uploadParamNames: {
                        chunkCount: 'chunkCount',
                        chunkIndex: 'chunkIndex',
                        chunkSize: 'chunkSize',
                        chunkSizeStart: 'chunkSizeStart',
                        chunksUploaded: 'chunksUploaded',
                        fileBlob: 'fileBlob',
                        fileId: 'fileId',
                        fileName: 'fileName',
                        fileRelativePath: 'fileRelativePath',
                        fileSize: 'fileSize',
                        retryCount: 'retryCount'
                    },
                    maxAjaxThreads: 5,
                    processDelay: 100,
                    queueDelay: 10, // must be lesser than process delay
                    progressDelay: 0, // must be lesser than process delay
                    enableResumableUpload: false,
                    resumableUploadOptions: {
                        fallback: null,
                        testUrl: null, // used for checking status of chunks/ files previously / partially uploaded
                        chunkSize: 2 * 1024, // in KB
                        maxThreads: 4,
                        maxRetries: 3,
                        showErrorLog: true
                    },
                    uploadExtraData: {},
                    zoomModalHeight: 480,
                    minImageWidth: null,
                    minImageHeight: null,
                    maxImageWidth: null,
                    maxImageHeight: null,
                    resizeImage: false,
                    resizePreference: 'width',
                    resizeQuality: 0.92,
                    resizeDefaultImageType: 'image/jpeg',
                    resizeIfSizeMoreThan: 0, // in KB
                    minFileSize: 0,
                    maxFileSize: 0,
                    maxFilePreviewSize: 25600, // 25 MB
                    minFileCount: 0,
                    maxFileCount: 50,
                    validateInitialCount: false,
                    msgValidationErrorClass: 'text-danger',
                    msgValidationErrorIcon: '<i class="fa fancybox-error"></i>',
                    msgErrorClass: 'file-error-message',
                    progressThumbClass: 'progress-bar progress-bar-striped active',
                    progressClass: 'progress-bar bg-success progress-bar-success progress-bar-striped active',
                    progressInfoClass: 'progress-bar bg-info progress-bar-info progress-bar-striped active',
                    progressCompleteClass: 'progress-bar bg-success progress-bar-success',
                    progressPauseClass: 'progress-bar bg-primary progress-bar-primary progress-bar-striped active',
                    progressErrorClass: 'progress-bar bg-danger progress-bar-danger',
                    progressUploadThreshold: 99,
                    previewFileType: 'image',
                    elCaptionContainer: null,
                    elCaptionText: null,
                    elPreviewContainer: null,
                    elPreviewImage: null,
                    elPreviewStatus: null,
                    elErrorContainer: null,
                    slugCallback: null,
                    dropZoneEnabled: true,
                    dropZoneTitleClass: 'file-drop-zone-title',
                    fileActionSettings: {
                        removeIcon: '<i class="fas fa-trash"></i>',
                        uploadIcon: '<i class="fas fa-upload"></i>',
                        uploadRetryIcon: '<i class="fas fa-redo-alt"></i>',
                        downloadIcon: '<i class="fas fa-download"></i>',
                        zoomIcon: '<i class="fas fa-search-plus"></i>',
                        dragIcon: '<i class="fas fa-arrows-alt"></i>',
                        indicatorNew: '<i class="fas fa-plus-circle text-warning"></i>',
                        indicatorSuccess: '<i class="fas fa-check-circle text-success"></i>',
                        indicatorError: '<i class="fas fa-exclamation-circle text-danger"></i>',
                        indicatorLoading: '<i class="fas fa-hourglass text-muted"></i>',
                        indicatorPaused: '<i class="fa fa-pause text-info"></i>',
                    },
                    otherActionButtons: '',
                    textEncoding: 'UTF-8',
                    ajaxSettings: {},
                    ajaxDeleteSettings: {},
                    showAjaxErrorDetails: true,
                    mergeAjaxCallbacks: false,
                    mergeAjaxDeleteCallbacks: false,
                    retryErrorUploads: true,
                    reversePreviewOrder: false,

                    usePdfRenderer: function () {
                        //noinspection JSUnresolvedVariable
                        var isIE11 = !!window.MSInputMethodContext && !!document.documentMode;
                        return !!navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/i) || isIE11;
                    },
                    pdfRendererUrl: '',

                })
                    .on('change', function (event) {
                        console.log("change");
                        console.log("ZFileInputWidget | 'change'");
                        console.log(event);
                    })
                    .on('fileselect', function (event, numFiles, label,) {
                        console.log("fileselect");
                        console.log("ZFileInputWidget | 'fileselect'");
                        console.log(numFiles);


                    })
                    .on('fileselectnone', function (event) {
                        console.log("Huh! No files were selected.");
                        console.log("ZFileInputWidget | 'fileselectnone'");
                        console.log(event);
                    })

                    .on('filebatchselected', function (event, files) {
                        console.log('File batch selected triggered');
                        console.log("ZFileInputWidget | 'filebatchselected'");
                        console.log(event, files);
                        for (var i = 0; i < files.length; i++) {
                            var name = files[i].name;
                            var inputs = "<input type='text' value='" + name + "' class='" + name + "'>";
                            $('.file-inputs').append(inputs);
                            console.log('appended');
                        }
                    })

                    .on('fileclear', function (event) {
                        console.log("fileclear");
                        console.log("ZFileInputWidget | 'fileclear'");
                        console.log(event);
                    })

                    .on('filecleared', function (event) {
                        console.log("filecleared");
                        console.log("ZFileInputWidget | 'filecleared'");
                        console.log(event);
                        $('.file-inputs').empty();


                    })
                    .on('filebeforeload', function (event, file, index, reader) {
                        // perform your validations based on the 'file' or other parameters
                        if (file.name === 'UNAPPROVED_FILE.txt') {
                            return false; // will abort the file loading for the selected file
                        }
                        console.log("ZFileInputWidget | 'filebeforeload'");
                        console.log(event, file, index, reader);
                    })
                    .on('fileloaded', function (event, file, previewId, index, reader) {
                        console.log("fileloaded");
                        console.log("ZFileInputWidget | 'fileloaded'");
                        console.log(event, file, previewId, index, reader);

                    })
                    .on('filereset', function (event) {
                        console.log("filereset");
                        console.log("ZFileInputWidget | 'filereset'");
                        console.log(event);
                    })
                    .on('fileimageloaded', function (event, previewId) {
                        console.log("fileimageloaded");
                        console.log("ZFileInputWidget | 'fileimageloaded'");
                        console.log(event, previewId);
                    })
                    .on('fileimagesloaded', function (event) {
                        console.log("fileimagesloaded");
                        console.log("ZFileInputWidget | 'fileimagesloaded'");
                        console.log(event);
                    })
                    .on('fileimageresized', function (event, previewId, index) {
                        console.log("fileimageresized");
                        console.log("ZFileInputWidget | 'fileimageresized'");
                        console.log(event, previewId, index);
                    })
                    .on('fileimagesresized', function (event) {
                        console.log("fileimagesresized");
                        console.log("ZFileInputWidget | 'fileimagesresized'");
                        console.log(event);
                    })
                    .on('filebrowse', function (event) {
                        console.log("File browse triggered.");
                        console.log("ZFileInputWidget | 'filebrowse'");
                        console.log(event);
                    })
                    .on('filelock', function (event, filestack, extraData) {
                        var fstack = [];
                        $.each(filestack, function (fileId, file) {
                            if (file) {
                                fstack.push(file);
                            }
                        });
                        console.log('Files selected - ' + fstack.length);
                        console.log("ZFileInputWidget | 'filelock'");
                        console.log(event, filestack, extraData);
                    })
                    .on('filepreremove', function (event, id, index) {
                        console.log('id = ' + id + ', index = ' + index);
                        console.log("ZFileInputWidget | 'filepreremove'");
                        console.log(event, id, index);

                    })
                    .on('fileremoved', function (event, id, index) {
                        console.log('id = ' + id + ', index = ' + index);
                        console.log("ZFileInputWidget | 'fileremoved'");
                        console.log(event, id, index);

                    })
                    .on('filebeforedelete', function (event, key, data) {
                        console.log('Key = ' + key);
                        console.log("ZFileInputWidget | 'filebeforedelete'");
                        console.log(event, key, data);
                    })
                    .on('filepredelete', function (event, key, jqXHR, data) {
                        console.log('Key = ' + key);
                        console.log("ZFileInputWidget | 'filepredelete'");
                        console.log(event, key, jqXHR, data);
                    })
                    .on('filedeleted', function (event, key, jqXHR, data) {
                        console.log('Key = ' + key);
                        console.log("ZFileInputWidget | 'filedeleted'");
                        console.log(event, key, jqXHR, data);
                    })
                    .on('filepreajax', function (event, previewId, index) {
                        console.log('File pre ajax triggered');
                        console.log("ZFileInputWidget | 'filepreajax'");
                        console.log(event, previewId, index);
                    })
                    .on('filepreupload', function (event, data, previewId, index) {
                        var form = data.form, files = data.files, extra = data.extra,
                            response = data.response, reader = data.reader;
                        console.log('File pre upload triggered');
                        console.log("ZFileInputWidget | 'filepreupload'");
                        console.log(event, data, previewId, index);
                    })
                    .on('fileuploaded', function (event, previewId, index, fileId) {
                        console.log("ZFileInputWidget | 'fileuploaded'");
                        console.log(event, previewId, index, fileId);
                    })
                    .on('fileuploaded', function (event, data, previewId, index) {
                        var form = data.form, files = data.files, extra = data.extra,
                            response = data.response, reader = data.reader;
                        console.log('File uploaded triggered');
                        console.log("ZFileInputWidget | 'fileuploaded'");
                        console.log(event, data, previewId, index);
                    })
                    .on('flebatchpreupload', function (event, data) {
                        var form = data.form, files = data.files, extra = data.extra,
                            response = data.response, reader = data.reader;
                        console.log('File batch pre upload');
                        console.log("ZFileInputWidget | 'flebatchpreupload'");
                        console.log(event, data);
                    })
                    .on('filebatchuploadsuccess', function (event, data) {
                        var form = data.form, files = data.files, extra = data.extra,
                            response = data.response, reader = data.reader;
                        console.log('File batch upload success');
                        console.log("ZFileInputWidget | 'filebatchuploadsuccess'");
                        console.log(event, data);
                    })
                    .on('filebatchuploadcomplete', function (event, preview, config, tags, extraData) {
                        console.log("ZFileInputWidget | 'filebatchuploadcomplete'");
                        console.log(event, preview, config, tags, extraData);
                    })
                    .on('filebatchuploadcomplete', function (event, files, extra) {
                        console.log('File batch upload complete');
                        console.log("ZFileInputWidget | 'filebatchuploadcomplete'");
                        console.log(event, files, extra);
                    })
                    .on('filesuccessremove', function (event, id) {
                        if (some_processing_function(id)) {
                            console.log('Uploaded thumbnail successfully removed');
                        } else {
                            return false; // abort the thumbnail removal
                        }
                        console.log("ZFileInputWidget | 'filesuccessremove'");
                        console.log(event, id);
                    })
                    .on('filedisabled', function (event) {
                        console.log("ZFileInputWidget | 'filedisabled'");
                        console.log(event);
                    })
                    .on('fileenabled', function (event) {
                        console.log("ZFileInputWidget | 'fileenabled'");
                        console.log(event);
                    })
                    .on('filesorted', function (event, params) {
                        console.log("ZFileInputWidget | 'filesorted'");
                        console.log(event, params.previewId, params.oldIndex, params.newIndex, params.stack);
                    })
                    .on('filezoomshow', function (event, params) {
                        console.log("ZFileInputWidget | 'filezoomshow'");
                        console.log(event, params.sourceEvent, params.previewId, params.modal);
                    })
                    .on('filezoomshown', function (event, params) {
                        console.log("ZFileInputWidget | 'filezoomshown'");
                        console.log(event, params.sourceEvent, params.previewId, params.modal);
                    })
                    .on('filezoomhide', function (event, params) {
                        console.log("ZFileInputWidget | 'filezoomhide'");
                        console.log(event, params.sourceEvent, params.previewId, params.modal);
                    })
                    .on('filezoomhidden', function (event, params) {
                        console.log("ZFileInputWidget | 'filezoomhidden'");
                        console.log(event, params.sourceEvent, params.previewId, params.modal);
                    })
                    .on('filezoomloaded', function (event, params) {
                        console.log("ZFileInputWidget | 'filezoomloaded'");
                        console.log(event, params.sourceEvent, params.previewId, params.modal);
                    })
                    .on('filezoomprev', function (event, params) {
                        console.log("ZFileInputWidget | 'filezoomprev'");
                        console.log(event, params.previewId, params.modal);
                    })
                    .on('filezoomnext', function (event, params) {
                        console.log("ZFileInputWidget | 'filezoomnext'");
                        console.log(event, params.previewId, params.modal);
                    })
                    .on('filechunkbeforesend', function (event, previewId, index, retry, fm, rm, data) {
                        console.log("ZFileInputWidget | 'filechunkbeforesend'");
                        console.log(event, previewId, index, retry, fm, rm, data);
                    })
                    .on('filechunksuccess', function (event, previewId, index, retry, fm, rm, data) {
                        console.log("ZFileInputWidget | 'filechunksuccess'");
                        console.log(event, previewId, index, retry, fm, rm, data);
                    })
                    .on('filechunkerror', function (event, previewId, index, retry, fm, rm, data) {
                        console.log("ZFileInputWidget | 'filechunkerror'");
                        console.log(event, previewId, index, retry, fm, rm, data);
                    })
                    .on('filechunkajaxerror', function (event, previewId, index, retry, fm, rm, data) {
                        console.log("ZFileInputWidget | 'filechunkajaxerror'");
                        console.log(event, previewId, index, retry, fm, rm, data);
                    })
                    .on('filechunkcomplete', function (event, previewId, index, retry, fm, rm, data) {
                        console.log("ZFileInputWidget | 'filechunkcomplete'");
                        console.log(event, previewId, index, retry, fm, rm, data);
                    })

                    .on('filetestbeforesend', function (event, fileId, fm, rm, data) {
                        console.log("ZFileInputWidget | 'filetestbeforesend'");
                        console.log(event, fileId, fm, rm, data);
                    })
                    .on('filetestsuccess', function (event, fileId, fm, rm, data) {
                        console.log("ZFileInputWidget | filetestsuccess");
                        console.log(event, fileId, fm, rm, data);
                    })
                    .on('filetesterror', function (event, fileId, fm, rm, data) {
                        console.log("ZFileInputWidget | filetesterror");
                        console.log(event, fileId, fm, rm, data);
                    })
                    .on('filetestajaxerror', function (event, fileId, fm, rm, data) {
                        console.log("ZFileInputWidget | filetestajaxerror");
                        console.log(event, fileId, fm, rm, data);
                    })
                    .on('filetestcomplete', function (event, fileId, fm, rm, data) {
                        console.log("ZFileInputWidget | filetestcomplete");
                        console.log(event, fileId, fm, rm, data);
                    })
                    .on('fileerror', function (event, data, msg) {
                        console.log("ZFileInputWidget | fileerror");
                        console.log(event, data, msg);
                    })
                    .on('fileduplicateerror', function (event, file, fileId, caption, size, id, index) {
                        console.log(file);
                        console.log(fileId);
                        console.log(size);
                        console.log(id);
                        console.log(index);
                        console.log(caption);
                        console.log("ZFileInputWidget | 'fileduplicateerror'");
                        console.log(event, file, fileId, caption, size, id, index);
                    })

                    .on('fileimageresizeerror', function (event, data, msg) {
                        console.log(data.id);
                        console.log(data.index);
                        // get message
                        alert(msg);
                        console.log("ZFileInputWidget | 'fileimageresizeerror'");
                        console.log(event, data, msg);
                    })
                    .on('fileuploaderror', function (event, data, msg) {
                        console.log("ZFileInputWidget | 'fileuploaderror'");
                        console.log(event, data, msg);
                    })
                    .on('fileuploaderror', function (event, data, msg) {
                        var form = data.form, files = data.files, extra = data.extra,
                            response = data.response, reader = data.reader;
                        console.log('File upload error');
                        // get message
                        alert(msg);
                        console.log("ZFileInputWidget | 'fileuploaderror'");
                        console.log(event, data, msg);
                    })

                    .on('filebatchuploaderror', function (event, data, msg) {
                        var form = data.form, files = data.files, extra = data.extra,
                            response = data.response, reader = data.reader;
                        console.log('File batch upload error');
                        // get message
                        alert(msg);
                        console.log("ZFileInputWidget | 'filebatchuploaderror'");
                        console.log(event, data, msg);
                    })
                    .on('filedeleteerror', function (event, data, msg) {
                        console.log('File delete error');
                        // get message
                        alert(msg);
                        console.log("ZFileInputWidget | 'filedeleteerror'");
                        console.log(event, data, msg);
                    })
                    .on('filefoldererror', function (event, folders, msg) {
                        console.log('File folder dropped error');
                        // get message
                        alert(msg);
                        console.log("ZFileInputWidget | 'filefoldererror'");
                        console.log(event, folders, msg);
                    })
                    .on('filecustomerror', function (event, params, msg) {
                        console.log(params.id);
                        console.log(params.index);
                        console.log(params.data);
                        // get message
                        alert(msg);
                        console.log("ZFileInputWidget | 'filecustomerror'");
                        console.log(event, params, msg);
                    })
                    .on('filepreupload', function (event, data, previewId, index, jqXHR) {
                        // do your validation and return an error like below
                        if (customValidationFailed) {
                            return {
                                message: 'You are not allowed to do that',
                                data: {key1: 'Key 1', detail1: 'Detail 1'}
                            };
                        }
                        console.log("ZFileInputWidget | 'filepreupload'");
                        console.log(event, data, previewId, index, jqXHR);
                    });
            })},
        },
        category: 'accardion',


    });


    blockManager.add('accardion-block11', {

        label: `<div>
            <img src="https://picsum.photos/70/70"/>
            <div class="my-label-block">selection</div>
        </div>`,

        content: {
            content:`<link rel="stylesheet" href="/testing/Former/Icheck/css/ablmolodoy.css"/>

        <button class="abl_molodoyacc">Section 1</button>
        <div class="abl_molodoypanel">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

        <button class="abl_molodoyacc">Section 1</button>
        <div class="abl_molodoypanel">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>`
            ,
            script:function() {
                var acc = document.getElementsByClassName("abl_molodoyacc");
                var i;

                for (i = 0; i < acc.length; i++) {
                    acc[i].addEventListener("click", function () {
                        this.classList.toggle("active");
                        var panel = this.nextElementSibling;
                        if (panel.style.maxHeight) {
                            panel.style.maxHeight = null;
                        } else {
                            panel.style.maxHeight = panel.scrollHeight + "px";
                        }
                    });
                }
            },
        },
        category: 'accardion',


    });


</script>










<script>

    $(document).ready(function () {
        $('button').click(function () {
            console.log('HERE');
            var a = document.getElementsByTagName('iframe')[0]
            var pcontent = a.contentDocument.getElementById('wrapper').innerHTML;
            $.ajax({
                url: '/grapes/save1.php',
                type: "POST",
                data: {"pcontent": pcontent}
            });
            return false;
        })

    });
</script>


</body>
</html>
