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

        plugins: [
            'gjs-preset-webpage',
            'grapesjs-tooltip',
            'grapesjs-tui-image-editor',
            'grapesjs-typed',
            'grapesjs-plugin-forms',
            'grapesjs-blocks-bootstrap4',
            'grapesjs-blocks-flexbox-fork',
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
