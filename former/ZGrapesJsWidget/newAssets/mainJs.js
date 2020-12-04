var editor  = grapesjs.init({
    avoidInlineStyle: 1,
    height: '100%',
    container : '#gjs',
    fromElement: 1,
    allowScripts: true,
    showOffsets: 1,
    assetManager: {
        embedAsBase64: 1,
    },
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

                },
            },
            {
                id: 'save-file',
                run() {
                    alert()
                    saveContentPhp('ajax');
                }
            },
            {
                id: 'save-block',
                run() {
                    alert()
                    saveContentPhp('ajax');
                }
            },
        ]
    },
    selectorManager: { componentFirst: true },
    storageManager: {
        id: 'gjs-',
        type: 'local',
        autosave: false,
        autoload: false,
        stepsBeforeSave: 0,
    },
    styleManager: { clearProperties: 1 },
    canvas: {
        stylePrefix: 'cv-',
        styles: [

        ].concat({links}),
        scripts: [

        ].concat({scripts}),
        customBadgeLabel: '',
        autoscrollLimit: 50,
        notTextable: ['button', 'a', 'input[type=checkbox]', 'input[type=radio]']
    },
    plugins: [
        'grapesjs-lory-slider',
        'grapesjs-tabs',
        'grapesjs-custom-code',
        'grapesjs-touch',
        'grapesjs-parser-postcss',
        'grapesjs-tooltip',
        'grapesjs-tui-image-editor',
        'grapesjs-typed',
        'grapesjs-style-bg',
        'gjs-preset-webpage',
    ],
    pluginsOpts: {
        'grapesjs-lory-slider': {
            sliderBlock: {
                category: 'Extra'
            }
        },
        'grapesjs-tabs': {
            tabsBlock: {
                category: 'Extra'
            }
        },
        'grapesjs-typed': {
            block: {
                category: 'Extra',
                content: {
                    type: 'typed',
                    'type-speed': 40,
                    strings: [
                        'Text row one',
                        'Text row two',
                        'Text row three',
                    ],
                }
            }
        },
        'gjs-preset-webpage': {
            modalImportTitle: 'Import Template',
            modalImportLabel: '<div style="margin-bottom: 10px; font-size: 13px;">Paste here your HTML/CSS and click Import</div>',
            modalImportContent: function(editor) {
                return editor.getHtml() + '<style>'+editor.getCss()+'</style>'
            },
            filestackOpts: null,
            aviaryOpts: false,
            blocksBasicOpts: { flexGrid: 1 },

        },
    },
});
