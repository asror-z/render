<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>GrapesJS Plugin Boilerplate</title>
    <?php
    use zetsoft\assets\testing\GrapeAsset;
    GrapeAsset::register($this);
    ?>
    <style>
        body,
        html {
            height: 500px;
            margin: 0;
        }
    </style>
</head>
<body>

<div id="gjs">
    <form action="index.html" method="post" style="padding: 50px;">
        <input type="hidden" name="hidden-input" value="someval">
        <div class="row">
            <label>Name</label>
            <input type="text" name="text-input" value="">
        </div>
        <div class="row">
            <label>Messagge</label>
            <textarea name="textarea-input"></textarea>
        </div>
        <div class="row">
            <label>Options</label>
            <select name="select-input">
                <option value="">- Select -</option>
                <option value="1">Value 1</option>
                <option value="2">Value 2</option>
                <option value="3">Value 3</option>
            </select>
        </div>
        <div class="row">
            <input type="checkbox" name="checkbox-input" value="1"> Test
        </div>
        <div class="row">
            <input type="radio" name="radio-input" value="1"> 1
            <input type="radio" name="radio-input" value="2"> 2
            <input type="radio" name="radio-input" value="3"> 3
        </div>
        <button type="button" class="btn btn-success" name="button-name">Send</button>
    </form>
</div>


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
    

    editor.DomComponents.addType('input', {
        isComponent: el => el.tagName == 'INPUT',
        model: {
            defaults: {
                traits: [
                    // Strings are automatically converted to text types
                    'name', // Same as: { type: 'text', name: 'name' }
                    'placeholder',
                    {
                        type: 'select', // Type of the trait
                        label: 'Type', // The label you will see in Settings
                        name: 'type', // The name of the attribute/property to use on component
                        options: [
                            { id: 'text', name: 'Text'},
                            { id: 'email', name: 'Email'},
                            { id: 'password', name: 'Password'},
                            { id: 'number', name: 'Number'},
                        ]
                    }, {
                        type: 'checkbox',
                        name: 'required',
                    }],
                // As by default, traits are binded to attributes, so to define
                // their initial value we can use attributes
                attributes: { type: 'text', required: true },
            },
        },
    });


    
</script>

</body>
</html>
