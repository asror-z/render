<?php
$page = file_get_contents('../Maps/leaflet/leaflet.html');
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
    <script src="/publish/yarner/grapesjs-tui-image-editor/dist/grapesjs-tui-image-editor.min.js"></script>
    <script src="/publish/yarner/grapesjs-tooltip/dist/grapesjs-tooltip.min.js"></script>
    <script src="/publish/yarner/grapesjs-typed/dist/grapesjs-typed.min.js"></script>
    <script src="/publish/yarner/grapesjs-plugin-forms/dist/grapesjs-plugin-forms.min.js"></script>
    <script src="/publish/yarner/grapesjs-blocks-bootstrap4/dist/grapesjs-blocks-bootstrap4.min.js"></script>
    <script src="/publish/yarner/grapesjs-blocks-flexbox-fork/dist/grapesjs-blocks-flexbox-fork.min.js"></script>
    <script src="/publish/yarner/grapesjs-style-filter/dist/grapesjs-style-filter.min.js"></script>
    <script src="/publish/yarner/grapesjs-style-gradient/dist/grapesjs-style-gradient.min.js"></script>
    <script src="/publish/yarner/grapesjs-tabs/dist/grapesjs-tabs.min.js"></script>
    <script src="/publish/yarner/grapesjs-custom-code/dist/grapesjs-custom-code.min.js"></script>
    <script src="/publish/yarner/grapesjs-touch/dist/grapesjs-touch.min.js"></script>
    <script src="/publish/yarner/grapesjs-plugin-ckeditor/dist/grapesjs-plugin-ckeditor.min.js"></script>
    <script src="/publish/yarner/grapesjs-plugin-header/dist/grapesjs-plugin-header.min.js"></script>
    <script src="/publish/yarner/grapesjs-custom-blocks/dist/grapesjs-custom-blocks.min.js"></script>
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
        allowScripts: 1,
        height: '100%',
        showOffsets: 1,
        noticeOnUnload: 0,
        storageManager: {autoload: 0},
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
        notTextable: ['button', 'a', 'input[type=checkbox]', 'input[type=radio]']
    },
        layers: {},
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
        richTextEditor: {
            stylePrefix: 'rte-',

            // If true, moves the toolbar below the element when the top canvas
            // edge is reached
            adjustToolbar: 1,

            // Default RTE actions
            actions: ['bold', 'italic', 'underline', 'strikethrough', 'link']

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
            'grapesjs-tooltip':{
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
            'grapesjs-tui-image-editor':{
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
                onApplyButton: () => {},
                
            },
            'grapesjs-typed':{
                block: {},
                
                props: i => i,
            },
            'grapesjs-plugin-forms':{
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
            'grapesjs-blocks-bootstrap4':{
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
                container: 'Container',
                row: 'Row',
                column: 'Column',
                column_break: 'Column Break',
                media_object: 'Media Object',
                // COMPONENTS
                alert: 'Alert',
                tabs: 'Tabs',
                tab: 'Tab',
                tabPane: 'Tab Pane',
                badge: 'Badge',
                button: 'Button',
                button_group: 'Button Group',
                button_toolbar: 'Button Toolbar',
                card: 'Card',
                card_container: 'Card Container',
                collapse: 'Collapse',
                dropdown: 'Dropdown',
                dropdown_menu: 'Dropdown Menu',
                dropdown_item: 'Dropdown Item',
                // TYPOGRAPHY
                text: 'Text',
                header: 'Header',
                paragraph: 'Paragraph',
                // BASIC
                image: 'Image',
                link: 'Link',
                list: 'Simple List',
                // FORMS
                form: 'Form',
                input: 'Input',
                file_input: 'File',
                input_group: 'Input group',
                textarea: 'Textarea',
                select: 'Select',
                select_option: '- Select option -',
                option: 'Option',
                label: 'Label',
                checkbox: 'Checkbox',
                radio: 'Radio',
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
            'grapesjs-blocks-flexbox-fork':{
                flexboxBlock: {},

                // Classes prefix
                stylePrefix: '',

                // Row label
                labelRow: 'Row',

                // Column label
                labelColumn: 'Column',
            },
            'grapesjs-style-filter':{
                inputFilterType: {},

                // Extend the default filter strength input, eg. `{ name: 'Blur', defaults: 50, ... }`
                inputFilterStrength: {},

                // Customize the filter strength input when it should be updated. The option
                // is a function, which receive the current object type and returns a new one
                filterStrengthChange: type => type,
            },
            'grapesjs-style-gradient':{
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
        canvas: {
            styles: [],
            scripts: [
                'https://unpkg.com/leaflet@1.6.0/dist/leaflet.js'
            ]
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
