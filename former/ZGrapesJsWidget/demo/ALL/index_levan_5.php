<?php
$page = file_get_contents(  '../Maps/leaflet/leaflet.html');
?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>GrapesJS Preset Webpage</title>
    <link href="https://unpkg.com/grapesjs/dist/css/grapes.min.css" rel="stylesheet">
    <link href="dist/grapesjs-preset-webpage.min.css" rel="stylesheet">
    <script src="https://unpkg.com/grapesjs"></script>
    <script src="dist/grapesjs-preset-webpage.min.js"></script>
    <script src="/publish/yarner/grapesjs-custom-code/dist/grapesjs-custom-code.min.js"></script>
    <script src="/publish/yarner/jquery/dist/jquery.js"></script>
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
    echo $page
    ?>

</div>


<script type="text/javascript">

    var editor = grapesjs.init({


        // Style prefix
        stylePrefix: 'gjs-',

        // HTML string or object of components
        components: '',

        // CSS string or object of rules
        style: '',

        // If true, will fetch HTML and CSS from selected container
        fromElement: 0,

        // Show an alert before unload the page with unsaved changes
        noticeOnUnload: true,

        // Show paddings and margins
        showOffsets: true,

        // Show paddings and margins on selected component
        showOffsetsSelected: false,

        // On creation of a new Component (via object), if the 'style' attribute is not
        // empty, all those roles will be moved in its new class
        forceClass: true,


        // Width for the editor container
        width: '100%',

        // Type of logs to print with the logger (by default is used the devtool console).
        // Available by default: debug, info, warning, error
        // You can use `false` to disable all of them or `true` to print all of them
        log: ['warning', 'error'],

        // By default Grapes injects base CSS into the canvas. For example, it sets body margin to 0
        // and sets a default background color of white. This CSS is desired in most cases.
        // use this property if you wish to overwrite the base CSS to your own CSS. This is most
        // useful if for example your template is not based off a document with 0 as body margin.
        baseCss: `
    * {
      box-sizing: border-box;
    }
    html, body, #wrapper {
      min-height: 100%;
    }
    body {
      margin: 0;
      height: 100%;
      background-color: #fff
    }
    #wrapper {
      overflow: auto;
      overflow-x: hidden;
    }

    * ::-webkit-scrollbar-track {
      background: rgba(0, 0, 0, 0.1)
    }

    * ::-webkit-scrollbar-thumb {
      background: rgba(255, 255, 255, 0.2)
    }

    * ::-webkit-scrollbar {
      width: 10px
    }
  `,

        // CSS that could only be seen (for instance, inside the code viewer)
        protectedCss: '* { box-sizing: border-box; } body {margin: 0;}',

        // CSS for the iframe which containing the canvas, useful if you need to custom something inside
        // (eg. the style of the selected component)
        canvasCss: '',

        // Default command
        defaultCommand: 'select-comp',

        // Show a toolbar when the component is selected
        showToolbar: 1,

        // Allow script tag importing
        allowScripts: 0,

        // If true render a select of available devices
        showDevices: 1,

        // When enabled, on device change media rules won't be created
        devicePreviewMode: 0,

        // THe condition to use for media queries, eg. 'max-width'
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

        //Configurations for Asset Manager
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

        //Configurations for Canvas
        canvas: {
            stylePrefix: 'cv-',

            /*
             * Append external scripts to the `<head>` of the iframe.
             * Be aware that these scripts will not be printed in the export code
             * @example
             * scripts: [ 'https://...1.js', 'https://...2.js' ]
             */
            scripts: [
                'https://unpkg.com/leaflet@1.6.0/dist/leaflet.js'
            ],

            /*
             * Append external styles to the `<head>` of the iframe
             * Be aware that these styles will not be printed in the export code
             * @example
             * styles: [ 'https://...1.css', 'https://...2.css' ]
             */
            styles: [],

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

            /**
             * When some textable component is selected and focused (eg. input or text component) the editor
             * stops some commands (eg. disables the copy/paste of components with CTRL+C/V to allow the copy/paste of the text).
             * This option allows to customize, by a selector, which element should not be considered textable
             */
            notTextable: ['button', 'a', 'input[type=checkbox]', 'input[type=radio]']
        },

        //Configurations for Layers
        layers: {},

        //Configurations for Storage Manager
        storageManager: {
            // Prefix identifier that will be used inside storing and loading
            id: 'gjs-',

            // Enable/Disable autosaving
            autosave: 1,

            // Indicates if load data inside editor after init
            autoload: 1,

            // Indicates which storage to use. Available: local | remote
            type: 'local',

            // If autosave enabled, indicates how many steps (general changes to structure)
            // need to be done before save. Useful with remoteStorage to reduce remote calls
            stepsBeforeSave: 1,

            //Enable/Disable components model (JSON format)
            storeComponents: 1,

            //Enable/Disable styles model (JSON format)
            storeStyles: 1,

            //Enable/Disable saving HTML template
            storeHtml: 1,

            //Enable/Disable saving CSS template
            storeCss: 1,

            // ONLY FOR LOCAL STORAGE
            // If enabled, checks if browser supports Local Storage
            checkLocal: 1,

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

        //Configurations for Rich Text Editor
        richTextEditor: {
            stylePrefix: 'rte-',

            // If true, moves the toolbar below the element when the top canvas
            // edge is reached
            adjustToolbar: 1,

            // Default RTE actions
            actions: ['bold', 'italic', 'underline', 'strikethrough', 'link']

        },

        //Configurations for DomComponents
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

        //Configurations for Panels
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

        //Configurations for Commands
        commands: {
            stylePrefix: 'com-',

            // Default array of commands
            defaults: [],

            // If true, stateful commands (with `run` and `stop` methods) can't be runned multiple times.
            // So, if the command is already active, running it again will not execute the `run` method
            strict: 1
        },

        //Configurations for Css Composer
        cssComposer: {
            // Style prefix
            stylePrefix: 'css-',

            // Custom CSS string to render on top
            staticRules: '',

            // Default CSS style
            rules: []
        },

        //Configurations for Selector Manager
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

        //Configurations for Device Manager
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

        //Configurations for Style Manager
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




        // Configurations for Trait Manager
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

        // Texts
        textViewCode: 'Code',

        // Keep unused styles within the editor
        keepUnusedStyles: 0,

        // TODO
        multiFrames: 0,


        height: '100%',

     /*   container: '#gjs',
        fromElement: true,*/
        i18n: {},

     /*   layers: {},
        modal: {},
        codeManager: {
            // Style prefix
            stylePrefix: 'cm-',

            inlineCss: false
        },*/

        
        // Configurations for Block Manager
        blockManager: {
            // Specify the element to use as a container, string (query) or HTMLElement
            // With the empty value, nothing will be rendered
            appendTo: '',

            // Append blocks to canvas on click
            appendOnClick: 0,

            blocks: []
        },



        container: '#gjs',


        plugins: [
            'gjs-preset-webpage',
            /*'grapesjs-touch',*/
            'grapesjs-tooltip',
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

        },

    });

    const blockManager = editor.BlockManager;

    blockManager.add('some-block-id', {
        label: `<div>
      <img src="https://picsum.photos/70/70"/>
      <div class="my-label-block">Widgets</div>
    </div>`,
        content: '<div></div>',
        category: 'zetsoft',
        render: ({model, className}) => `<div class="${className}__my-wrap">
      Before label
      ${model.get('label')}
      After label
    </div>`,
    });
</script>
<script>

    $(document).ready(function () {
        $('button').click(function () {
            console.log('HERE');
            var a = document.getElementsByTagName('iframe')[0];
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
