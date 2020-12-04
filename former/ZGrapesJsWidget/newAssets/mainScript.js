var editor = grapesjs.init({
    allowScripts: 1,
    height: '100%',
    showOffsets: 1,
    noticeOnUnload: 0,
    container: '#gjs',
    fromElement: true,
    showToolbar: 1,
    showDevices: 1,
    devicePreviewMode: 0,
    mediaCondition: 'max-width',
    tagVarStart: '{[ ',
    tagVarEnd: ' ]}',
    keepEmptyTextNodes: 0,
    jsInHtml: true,
    nativeDnD: 1,
    multipleSelection: 1,
    exportWrapper: 0,
    wrapperIsBody: 1,
    avoidInlineStyle: 1,
    avoidDefaults: 1,
    clearStyles: 0,
    dragMode: 0,
    el: '',
    undoManager: {},
    commands: {
        defaults: [
            {
                id: 'grapes-clone',
                run() {

                    const domComponents = editor.DomComponents;
                    let model = editor.getSelected();
                    let parentEl = $(model.getEl());
                    let className = model.get('name');

                    if (className === '')
                        className = parentEl.find('[widget]').attr('widget');

                    let file = 'getWidget';
                    let htmlClass = 'zwidget';

                    if (className.includes('zetsoft/blocks')) {
                        file = 'getBlocks';
                        htmlClass = 'template-block';
                    }

                    var configs = parentEl.find('[config]').attr('config');

                    $.ajax({
                        method: "GET",
                        url: '/kernel/grapes/' + file + '.aspx?param=' + className + '&configs=' + configs,
                        success: function (response) {

                            var newComp = domComponents.addComponent({
                                removable: true,
                                draggable: true,
                                highlightable: true,
                                copyable: true,
                                content: response,
                            });

                            var newEl = $(newComp.getEl());
                            newEl.addClass(htmlClass + ' parent-div');
                            newEl.html(response);

                            parentEl.after(newComp);
                            //model.attributes.content = response;

                        },

                    });

                },
            },
            {id: 'clear'},
            {id: 'go-to-page'},
            {
                id: 'save-file',
                run() {
                    alert()
                    saveContentPhp("ajax");
                }
            },
            {
                id: 'grapes-clean',
                run() {
                    Swal.fire({
                        title: 'Вы уверены?',
                        text: "Вы действительно хотите очистить содержимое Canvas?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Oчистить',
                        cancelButtonText: 'Отмена'
                    }).then((result) => {
                        if (result.value) {

                            cleanCanvas();

                            editor.runCommand('open-blocks');
                            $(editor.Canvas.getDocument().body).find('#wrapper').empty();
                            $('.gjs-toolbar').empty();

                            Swal.fire({
                                icon: 'success',
                                title: 'Очищено!',
                                timer: 1000,
                                showConfirmButton: false,
                            })
                            $('.gjs-traits-label').empty();
                            $('#search_grape').show();
                        }
                    });
                }
            }
        ]
    },
    assetManager: {
        assets: [],
        noAssets: '',
        stylePrefix: 'am-',
        upload: 0,
        uploadName: 'files',
        headers: {},
        params: {},
        credentials: 'include',
        multiUpload: true,
        //  ]
        // }
        autoAdd: {autoAdd}, //1

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
        dropzone: {dropzone}, //0

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
    
        ].concat({styles}),


        scripts: [

        ].concat({scripts}),

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
            draggable: true,
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

                id: 'myNewPanel',
                visible: true,

            },

        ],

        // Editor model
        em: null,

        // Delay before show children buttons (in milliseconds)
        delayBtnsShow: 300,

        buttons: []

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

        //Enable/Disable
        //
        // model (JSON format)
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
    layerManager: {},
    styleManager: {
        clearProperites: true,
        sectors: [

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
            }
        ]
    },
    traitManager: {
        stylePrefix: 'trt-',

        // Specify the element to use as a container, string (query) or HTMLElement
        // With the empty value, nothing will be rendered
        appendTo: '',

        // label: 'Выбранный элемент',
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
    i18n: {
        locale: 'en', // default locale
        detectLocale: true, // by default, the editor will detect the language
        localeFallback: 'en', // default fallback
        messages: {
            en: {langGrapes}
        },
    },
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
        'gjs-plugin-ckeditor',
        'grapesjs-blocks-avance',
        'grapesjs-tabs',
        'grapesjs-lory-slider',
        'grapesjs-plugin-social',
        // 'grapesjs-plugin-forms',
        // 'grapesjs-plugin-header',
        // 'grapesjs-blocks-bootstrap4',
        // 'grapesjs-blocks-flexbox-fork',
        // 'grapesjs-custom-blocks',
        // 'grapesjs-style-filter',
        // 'grapesjs-style-gradient',
    ],
    pluginsOpts: {
        'grapesjs-blocks-avance': {
            blocks: ['grid-items', 'list-items', 'header', 'section', 'footer', 'iframe', 'link-block', 'quote', 'text-basic', 'button', 'progress-bar'],

            //prefixName: 'blocks-advanced',

            //gridsCategory: `Marketing`,

            //containerCategory: `Containers`,

            //avanceCategory: `Avance`,

        },

        'grapesjs-lory-slider': {


            // Pass a falsy value to avoid adding the block
            sliderBlock: {category: 'Extra'},

            // Object to extend the default slider properties, eg. `{ name: 'My Slider', draggable: false, ... }`
            sliderProps: {},

            // Object to extend the default slider frame properties
            frameProps: {},

            // Object to extend the default slides properties
            slidesProps: {},

            // Object to extend the default slide properties
            slideProps: {},

            // Object to extend the default previous nav properties
            prevProps: {},

            // Object to extend the default next nav properties
            nextProps: {},

            // Default slides
            slideEls: `
     <div class="gjs-lory-slide"></div>
     <div class="gjs-lory-slide"></div>
     <div class="gjs-lory-slide"></div>
   `,
//
            // Previous nav element string, as for example, an HTML string
            prevEl: `<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 501.5 501.5">
       <g><path fill="#2E435A" d="M302.67 90.877l55.77 55.508L254.575 250.75 358.44 355.116l-55.77 55.506L143.56 250.75z"/></g>
     </svg>`,
//
            // Next nav element string, as for example, an HTML string
            nextEl: `<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 501.5 501.5">
        <g><path fill="#2E435A" d="M199.33 410.622l-55.77-55.508L247.425 250.75 143.56 146.384l55.77-55.507L358.44 250.75z"/></g>
      </svg>`,
//
            // Class name for the slider frame
            classFrame: 'gjs-lory-frame',
//
            // Class name for slides container
            classSlides: 'gjs-lory-slides',

            // Class name for slides container
            classSlide: 'gjs-lory-slide',

            // Class name for slider previous control
            classPrev: 'gjs-lory-prev',
//
            // Class name for slider next control
            classNext: 'gjs-lory-next',

            // Script to load dynamically in case no lory instance was found
            script: 'https://cdnjs.cloudflare.com/ajax/libs/lory.js/2.3.4/lory.min.js',

        },

        'gjs-plugin-ckeditor': {
            position: 'top',
            options: {
                language: 'ru',
                /*toolbar: [
                    { name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source', '-', 'Save', 'NewPage', 'Preview', 'Print', '-', 'Templates' ] },
                    { name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
                    { name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ], items: [ 'Find', 'Replace', '-', 'SelectAll', '-', 'Scayt' ] },
                    { name: 'forms', items: [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ] },
                    '/',
                    { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'CopyFormatting', 'RemoveFormat' ] },
                    { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language' ] },
                    { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
                    { name: 'insert', items: [ 'Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe' ] },
                    '/',
                    { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
                    { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
                    { name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] },
                    { name: 'others', items: [ '-' ] },
                    { name: 'about', items: [ 'About' ] }
                ],*/
            }
        },
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
            style: 'style-tooltip',

            // Additional CSS styles
            styleAdditional: '',

            // Make all tooltip relative classes private
            privateClasses: 0,

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

            // icon used in the component toolbar
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
            labelTraitAction: 'Action',
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
            trait_action: 'Action',
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

        'grapesjs-tabs': {
            tabsBlock: {category: 'Extra'},
            tabsProps: {},

            // Object to extend the default tab properties
            tabProps: {},

            // Object to extend the default tab content properties
            tabContentProps: {},

            // Object to extend the default tab container properties
            tabContainerProps: {},

            // Default class to use on tab
            classTab: 'tab',

            // Class used on tabs when active
            classTabActive: 'tab-active',

            // Default class to use on tab content
            classTabContent: 'tab-content',

            // Default class to use on tab container
            classTabContainer: 'tab-container',

            // The attribute used inside tabs as a selector for tab contents
            selectorTab: 'href',

            templateTabContent: `<div>New Tab Content</div>`,

            style: `
      .tab {
        text-decoration: none;
        color: inherit;
        padding: 7px 14px;
        transition: opacity 0.3s;
        display: inline-block;
        border-radius: 3px;
        margin-right: 10px;
      }
      .tab.tab-active {
        background-color: #0d94e6;
        color: white;
      }
      .tab-content {
        padding: 6px 12px;
        min-height: 100px;
        animation: fadeEffect 1s;
      }
      @keyframes fadeEffect {
        from {opacity: 0;}
        to {opacity: 1;}
      }
    `

        },


    },
});



    
    
