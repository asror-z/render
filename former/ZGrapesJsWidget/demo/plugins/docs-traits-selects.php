<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>GrapesJS Plugin Boilerplate</title>

    <?

    use zetsoft\assets\testing\GrapeAsset;

    GrapeAsset::register($this);
    ?>
    <style>
        body,
        html {
            height: 100px;
            margin: 0;
        }
    </style>
</head>
<body>

<div class="container" id="gjs" style="height:0%; overflow:hidden">
    <div style="margin:100px 100px 25px; padding:25px; font:caption">
        This is a demo content from index.html. For the development, you shouldn't edit this file, instead you can
        copy and rename it to _index.html, on next server start the new file will be served, and it will be ignored by git.
    </div>
</div>


<script type="text/javascript">
    const editor = grapesjs.init({
        container: '#gjs',
        height: '500px',
        fromElement: true,
        storageManager: false,
        plugins: [hrefNextTrait],
    });


    editor.DomComponents.addType('link', {
        model: {
            defaults: {
                traits: [
                    {
                        type: 'href-next',
                        name: 'href',
                        label: 'New href',
                    },
                ]
            }
        }
    });

    editor.TraitManager.addType('href-next', {
        // Expects as return a simple HTML string or an HTML element
        createInput({ trait }) {
            // Here we can decide to use properties from the trait
            const traitOpts = trait.get('options') || [];
            const options = traitOpts.lenght ? traitOpts : [
                { id: 'url', name: 'URL' },
                { id: 'email', name: 'Email' },
            ];

            // Create a new element container and add some content
            const el = document.createElement('div');
            el.innerHTML = `
      <select class="href-next__type">
        ${options.map(opt => `<option value="${opt.id}">${opt.name}</option>`).join('')}
      </select>
      <div class="href-next__url-inputs">
        <input class="href-next__url" placeholder="Insert URL"/>
      </div>
      <div class="href-next__email-inputs">
        <input class="href-next__email" placeholder="Insert email"/>
        <input class="href-next__email-subject" placeholder="Insert subject"/>
      </div>
    `;

            // Let's make our content interactive
            const inputurl = el.querySelector('.href-next__url-inputs');
            const inputsEmail = el.querySelector('.href-next__email-inputs');
            const inputType = el.querySelector('.href-next__type');
            inputType.addEventListener('change', ev => {
                switch (ev.target.value) {
                    case 'url':
                        inputurl.style.display = '';
                        inputsEmail.style.display = 'none';
                        break;
                    case 'email':
                        inputurl.style.display = 'none';
                        inputsEmail.style.display = '';
                        break;
                }
            });

            return el;
        },
    });
    
    
</script>
</body>
</html>
