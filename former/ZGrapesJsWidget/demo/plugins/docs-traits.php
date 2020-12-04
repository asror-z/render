<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>GrapesJS Plugin Boilerplate</title>
    <?php
    use zetsoft\assets\grapes\ZGrapePluginSocialAsset;
    use zetsoft\assets\grapes\ZGrapePluginUppyAsset;

    ZGrapePluginUppyAsset::register($this);
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
    <a href="#">Link 1</a>
    <br/>
    <br/>
    <br/>
    <a href="#">Link 2</a>
</div>


<script type="text/javascript">
    const hrefNextTrait = (editor) => {
        // Update default link component
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
            noLabel: true,

            // Return a simple HTML string or an HTML element
            createInput({ trait }) {
                // Here we can decide to use properties from the trait
                const traitOpts = trait.get('options') || [];
                const options = traitOpts.lenght ? traitOpts : [
                    { id: 'url', name: 'URL' },
                    { id: 'email', name: 'Email' },
                ];

                // Create a new element container add some content
                const el = document.createElement('div');
                el.innerHTML = `
      <select class="href-next__type">
        ${options.map(opt =>
                    `<option value="${opt.id}">${opt.name}</option>`)
                    .join('')}
      </select>
      <div class="href-next__url-inputs">
        <input class="href-next__url" placeholder="Insert URL"/>
      </div>
      <div class="href-next__email-inputs">
        <input class="href-next__email" placeholder="Insert email"/>
        <input class="href-next__email-subject" placeholder="Insert subject"/>
      </div>
    `;
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

            // Update the component based element changes
            onEvent({ elInput, component }) {
                // `elInput` is the result HTMLElement you get from `createInput`
                const inputType = elInput.querySelector('.href-next__type');
                let href = '';

                switch (inputType.value) {
                    case 'url':
                        const valUrl = elInput.querySelector('.href-next__url').value;
                        href = valUrl;
                        break;
                    case 'email':
                        const valEmail = elInput.querySelector('.href-next__email').value;
                        const valSubj = elInput.querySelector('.href-next__email-subject').value;
                        href = `mailto:${valEmail}${valSubj ? `?subject=${valSubj}` : ''}`;
                        break;
                }

                component.addAttributes({ href });
            },

            onUpdate({ elInput, component }) {
                const href = component.getAttributes().href || '';
                const inputType = elInput.querySelector('.href-next__type');
                let type = 'url';

                if (href.indexOf('mailto:') === 0) {
                    const inputEmail = elInput.querySelector('.href-next__email');
                    const inputSubject = elInput.querySelector('.href-next__email-subject');
                    const mailTo = href.replace('mailto:', '').split('?');
                    const email = mailTo[0];
                    const params = (mailTo[1] || '').split('&').reduce((acc, item) => {
                        const items = item.split('=');
                        acc[items[0]] = items[1];
                        return acc;
                    }, {});
                    type = 'email';

                    inputEmail.value = email || '';
                    inputSubject.value = params.subject || '';
                } else {
                    elInput.querySelector('.href-next__url').value = href;
                }

                inputType.value = type;
                inputType.dispatchEvent(new CustomEvent('change'));
            },
        });
    };

    const editor = grapesjs.init({
        container: '#gjs',
        height: '500px',
        fromElement: true,
        storageManager: false,
        plugins: [hrefNextTrait],
    });
    
</script>

</body>
</html>
