<link href="https://unpkg.com/grapesjs/dist/css/grapes.min.css" rel="stylesheet"/>
<script src="https://unpkg.com/grapesjs"></script>
<script src="https://cdn.jsdelivr.net/npm/grapesjs-plugin-forms@1.0.5/dist/grapesjs-plugin-forms.min.js"></script>

<div id="gjs">

</div>

<script type="text/javascript">
    var editor = grapesjs.init({
        container: '#gjs',

        plugins: ['grapesjs-plugin-forms'],
        pluginsOpts: {
            'grapesjs-plugin-forms': {
                blocks: ['form', 'input', 'textarea', 'select', 'button', 'label', 'checkbox', 'radio'],
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
                category: 'Forms'
            }
        }
    });
</script>
