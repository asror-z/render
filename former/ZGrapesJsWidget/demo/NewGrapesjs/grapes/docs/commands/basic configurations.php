<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>GrapesJS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/grapesjs/0.12.17/css/grapes.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/grapesjs/0.12.17/grapes.min.js"></script>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }
    </style>
</head>

<body>
<div id="gjs" style="height:0px; overflow:hidden;">
    <div class="panel">
        <h1 class="welcome">Welcome to</h1>
        <div class="big-title">
            <svg class="logo" viewBox="0 0 100 100">
                <path d="M40 5l-12.9 7.4 -12.9 7.4c-1.4 0.8-2.7 2.3-3.7 3.9 -0.9 1.6-1.5 3.5-1.5 5.1v14.9 14.9c0 1.7 0.6 3.5 1.5 5.1 0.9 1.6 2.2 3.1 3.7 3.9l12.9 7.4 12.9 7.4c1.4 0.8 3.3 1.2 5.2 1.2 1.9 0 3.8-0.4 5.2-1.2l12.9-7.4 12.9-7.4c1.4-0.8 2.7-2.2 3.7-3.9 0.9-1.6 1.5-3.5 1.5-5.1v-14.9 -12.7c0-4.6-3.8-6-6.8-4.2l-28 16.2"/>
            </svg>
            <span>GrapesJS</span>
        </div>
        <div class="title">
            This is a demo content from index.html. For the development, you shouldn't edit this file, instead you can
            copy and rename it to _index.html, on next server start the new file will be served, and it will be ignored
            by git.
        </div>
    </div>
    <style>
        .panel {
            width: 90%;
            max-width: 700px;
            border-radius: 3px;
            padding: 30px 20px;
            margin: 150px auto 0px;
            background-color: #d983a6;
            box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.25);
            color: rgba(255, 255, 255, 0.75);
            font: caption;
            font-weight: 100;
        }

        .welcome {
            text-align: center;
            font-weight: 100;
            margin: 0px;
        }

        .logo {
            width: 70px;
            height: 70px;
            vertical-align: middle;
        }

        .logo path {
            pointer-events: none;
            fill: none;
            stroke-linecap: round;
            stroke-width: 7;
            stroke: #fff
        }

        .big-title {
            text-align: center;
            font-size: 3.5rem;
            margin: 15px 0;
        }

        .title {
            text-align: justify;
            font-size: 1rem;
            line-height: 1.5rem;
        }
    </style>
</div>

<script type="text/javascript">
    function init() {
        var blkStyle =
            '.blk-row::after{ content: ""; clear: both; display: block;} .blk-row{padding: 10px;}';
        var editor = grapesjs.init({
            allowScripts: 1,
            showOffsets: 1,
            autorender: 0,
            noticeOnUnload: 0,
            container: "#gjs",
            height: "700px",
            fromElement: true,
            clearOnRender: 0,

            storageManager: {
                autoload: 0
            },

           


        });

        editor.on('change:changesCount', (model) => {
            console.log('changed');
        });

        editor.on('load', function(){
            editor.setComponents('<div data-gjs-type="pcBox" data-title="ABC" frameborder="0" data-title=""><div class="c1678"><h4></h4></div></div>');
            editor.setStyle("#header h1 a{display: block; width: 300px; height: 80px;}");
            editor.UndoManager.clear();
        });
        var pnm = editor.Panels;
        pnm.addButton("options", [{
            id: "undo",
            className: "fa fa-undo icon-undo",
            command: function command(editor, sender) {
                sender.set("active", 0);
                editor.UndoManager.undo(1);
            },
            attributes: {
                title: "Undo (CTRL/CMD + Z)"
            }
        },

         {
            id: "redo",
            className: "fa fa-repeat icon-redo",
            command: function command(editor, sender) {
                sender.set("active", 0);
                editor.UndoManager.redo(1);
            },
            attributes: {
                title: "Redo (CTRL/CMD + Y)"
            }
        },

            {
                id: "alert",
                className: "fa fa-envelope",
                command: function command(editor, sender) {
                    sender.set("active", 0);
                    Alert('asd');
                },
                attributes: {
                    title: "Undo (CTRL/CMD + Z)"
                }
            },
            {
                id: "modal",
                className: "fa fa-phone",
                command: function command(editor, sender) {
                    editor.Modal.open({
                        title: 'Modal example',
                        content: 'My content',
                    });
                },
                attributes: {
                    title: "Model"
                }
            }
            ]);

        editor.render();
        var comps = editor.DomComponents;
        var defaultType = comps.getType('text');
        var defaultModel = defaultType.model;
        var defaultView = defaultType.view;
        createPCBoxComp(editor, comps, defaultModel, defaultView);
        addBlock(editor, getPCBoxBlock());

    }

    function getPCBoxBlock() {
        return [{
            id: "cust-sliderbox",
            label: "PC Box",
            category: "Layout",
            attributes: {
                class: "gjs-block fa fa-slideshare",
            },
            content: {
                type: "pcBox",
                activeOnRender: 1
            }
        }];
    }

    function addBlock(editor, blocks) {
        $.each(blocks, function (index, item) {
            editor.BlockManager.add(item.id, item);
        });
    }

    function createPCBoxComp(editor, comps, defaultModel, defaultView) {

        comps.addType('pcBox', {
            // Define the Model
            model: defaultModel.extend({
                // Extend default properties
                defaults: Object.assign({}, defaultModel.prototype.defaults, {
                    droppable: false,
                    draggable : true,
                    type: 'pcBox',
                    tagName: 'div',
                    void: 0,
                    title: '',
                    attributes: {
                        frameborder: 0,
                    },
                    traits: [{
                        type: 'text',
                        label: 'Title',
                        name: 'title',
                        placeholder: 'eg. Lorem Ipsum',
                        changeProp: 1
                    }]
                }),
                getAttrToHTML: function getAttrToHTML() {
                    for (var _len3 = arguments.length, args = Array(_len3), _key3 = 0; _key3 < _len3; _key3++) {
                        args[_key3] = arguments[_key3];
                    }

                    var attr = defaultModel.prototype.getAttrToHTML.apply(this, args);
                    attr["data-title"] = this.get('title');
                    return attr;
                },
                updateInitialValues: function updateInitialValues() {
                    this.set('title', this.attributes.attributes["data-title"])
                },
                init: function init() {},
                initialize: function initialize(o) {
                    defaultModel.prototype.initialize.apply(this, arguments);
                    this.updateInitialValues();
                    this.listenTo(this, 'change:title', this.updateTitle);

                },
                updateAll: function updateAll() {
                    this.updateTitle();
                },

                updateTitle: function updateTitle() {
                    var linkModel = this.get("components").at(0);
                    if (linkModel && linkModel.get("components").length > 0) {
                        var h4Model = linkModel.get("components").at(0);
                        var title = this.get('title');
                        h4Model.set("content", title);
                    }
                }
            }, {
                isComponent: function isComponent(el) {
                    if (el.getAttribute && el.getAttribute('data-gjs-type') == 'pcBox') {
                        return {
                            type: 'pcBox'
                        };
                    }
                }
            }),

            // Define the View
            view: defaultView.extend({

                tagName: 'div',
                events: {
                    'dblclick': 'openModal',
                    'click': 'openSettings'
                },

                openSettings: function openSettings(e) {

                    this.el.click();

                    var openBlocksBtn = editor.Panels.getButton('views', 'open-blocks');
                    openBlocksBtn && openBlocksBtn.set('active', 0);

                    var openTMBtn = editor.Panels.getButton('views', 'open-tm');
                    openTMBtn && openTMBtn.set('active', 1);
                },
                initialize: function initialize(o) {
                    defaultView.prototype.initialize.apply(this, arguments);
                    this.listenTo(this.model, 'change:title', this.updateTitle);

                },

                updateTitle: function updateTitle() {
                    $(this.el).find('h4').html(this.model.get("title"));
                },

                openModal: function openModal(e) {
                    var em = this.opts.config.em;
                    var editor = em ? em.get('Editor') : '';

                    if (editor) {
                        editor.runCommand('open-assets', {
                            target: this.model,
                            onSelect: function onSelect() {
                                editor.Modal.close();

                                editor.AssetManager.setTarget(null);
                            }
                        });
                    }
                    this.el.click();
                },
                disableClick: function disableClick() {
                    this.preventDefault();
                },
                render: function render() {
                    this.updateAttributes();
                    this.el.innerHTML = "<div style=\"height:100px;background-color:red\"><h4>"+ (this.model.get("title") ? this.model.get("title") : "TEST CONTENT") +"</h4></div>";
                    this.model.updateAll();
                    return this;
                }
            })
        });
    }




    init();

</script>
</body>
</html>
