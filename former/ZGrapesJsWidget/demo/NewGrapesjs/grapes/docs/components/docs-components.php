<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <?

    /**
     * Author: Asadbek Ruzmetov
     */

    use zetsoft\assets\testing\GrapeAsset;

    GrapeAsset::register($this);
    ?>
    <style>
        body, html{ height: 100%; margin: 0;}
    </style>
</head>

<body>

<div id="gjs" style="height:0%; overflow:hidden">
    <img style="margin: 18% 0 0 45%" src="http://artf.github.io/grapesjs/img/grapesjs-logo.png" />
</div>


<script type="text/javascript">

    var editor = grapesjs.init({
        height: '1000px',
        noticeOnUnload: 0,
        container: '#gjs',
        fromElement: true,
        components: {
            tagName: 'div',
            components: [
                {
                    type: 'image',
                    attributes: { src: 'C:\\Users\\asad\\Desktop\\photo_2018-06-14_20-55-13.jpg' },
                }, {
                    tagName: 'span',
                    type: 'text',
                    attributes: { title: 'foo' },
                    components: [{
                        type: 'textnode',
                        content: 'Hello wdsforld!!!'
                    }]
                }
            ]
        },
        style: '.txt-red{color: red}',

    });
    const myNewComponentTypes = editor => {
    editor.DomComponents.addType('my-input-type', {
        // Make the editor understand when to bind `my-input-type`
        isComponent: el => el.tagName === 'INPUT',

        // Model definition
        model: {
            // Default properties
            defaults: {
                tagName: 'input',
                draggable: 'form, form *', // Can be dropped only inside `form` elements
                droppable: false, // Can't drop other elements inside
                attributes: { // Default attributes
                    type: 'text',
                    name: 'default-name',
                    placeholder: 'Insert text here',
                },
                traits: [
                    'name',
                    'placeholder',
                    { type: 'checkbox', name: 'required' },
                ],
            }
        }
        view: {
            // Be default, the tag of the element is the same of the model
            tagName: 'div',

            // Add easily component specific listeners with `events`
            // Being component specific (eg. you can't attach here listeners to window)
            // you don't need to care about removing them when the component is removed,
            // they will be managed automatically by the editor
            events: {
                click: 'clickOnElement',
                // You can also make use of event delegation
                // and listen to events bubbled from some inner element
                'dblclick .inner-el': 'innerElClick',
            },

            innerElClick(ev) {
                ev.stopPropagation();
                // ...

                // If you need you can access the model from any function in the view
                this.model.components('Update inner components');
            },

            // On init you can create listeners, like in the model, or start some other
            // function at the beginning
            init({model}) {
                // Do something in view on model property change
                this.listenTo(model, 'change:prop', this.handlePropChange);

                // If you attach listeners on outside objects remember to unbind
                // them in `removed` function in order to avoid memory leaks
                this.onDocClick = this.onDocClick.bind(this);
                document.addEventListener('click', this.onDocClick)
            },

            // Callback triggered when the element is removed from the canvas
            removed() {
                document.removeEventListener('click', this.onDocClick)
            },

            // Do something with the content once the element is rendered.
            // The DOM element is passed as `el` in the argument object,
            // but you can access it from any function via `this.el`
            onRender({el}) {
                const btn = document.createElement('button');
                btn.value = '+';
                // This is just an example, AVOID adding events on inner elements,
                // use `events` for these cases
                btn.addEventListener('click', () => {
                });
                el.appendChild(btn);
            },

            // Example of async content
            async onRender({el, model}) {
                const asyncContent = await fetchSomething({
                    someDataallApp: model.get('someData'),
                });
                // Remember, these changes exist only inside the editor canvas
                // None of the DOM change is stored in your template data,
                // if you need to store something, update the model properties
                el.appendChild(asyncContent);
            }

        },
    })};


</script>
</body>
</html>
