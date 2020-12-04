function componentAdd(model) {

    const visibility = panelManager.getButton('options', 'sw-visibility');
    visibility.set('active', 1);

    let parentDiv = $(model.getEl());

    let className = model.get('name');

    if (className) {

        let file = 'getWidget';
        let assetsFile = 'getAssets';
        let htmlClass = 'zwidget';

        if (className.includes('zetsoft/blocks')) {
            file = 'getBlocks';
            assetsFile = 'getBlockAssets';
            htmlClass = 'template-block';
        }

        if (className.includes('zetsoft')) {

            $.ajax({
                method: 'GET',
                url: '/kernel/grapes/' + assetsFile + '.aspx?param=' + className,
                success: function (response) {
                    getAssets(model, response);
                },
            });

            $.ajax({
                method: 'GET',
                url: '/kernel/grapes/' + file + '.aspx?param=' + className,
                success: function (response) {

                    setTimeout(function () {

                        parentDiv.html(response);

                        let parentId = parentDiv.find('[parent-id]').attr('parent-id');
                        parentDiv.addClass('parent-div ' + parentId + ' ' + htmlClass);
                        parentDiv.attr('data-id', parentId);
                        parentDiv.attr('data-css', '');

                    }, 500);
                },
            });

        }


    }
}

function componentDrag(model) {


}

function componentSelected(model) {

    $('.gjs-traits-label').empty();
    grape_search();

    let panelManager = editor.Panels;
    let settingsBtn = panelManager.getButton('views', 'open-tm');
    settingsBtn.set('active', 1);

    $('#search_grape').hide();
    let selected = editor.getSelected();
    let selectedEl = $(selected.getEl());
    let parentDiv = selectedEl;

    let isAll = false;
    let blockName = '';
    let configs = {};
    let file = 'getOptions';

    if (!selectedEl.hasClass('parent-div'))
        parentDiv = selectedEl.closest('.parent-div');

    if (parentDiv.hasClass('zwidget')) {
        blockName = parentDiv.find('[widget]').attr('widget');
        configs = parentDiv.find('[config]').attr('config');
    } else {
        blockName = parentDiv.find('[widget]').attr('widget');
        configs = {};
        file = 'selected';
    }

    if (blockName)
        if (blockName.includes('zetsoft')) {

            if (blockName.match(/zetsoft\/blocks\/.*\/ALL/g))
                isAll = true;

            $.ajax({
                url: '/kernel/grapes/' + file + '.aspx?param=' + blockName + '&configs=' + configs + '&isAll=' + isAll,
                type: 'GET',
                async: false,
                success: function (response) {
                    $('.gjs-traits-label').html(response);
                    $('.gjs-trt-traits').empty();
                },
            });

            let blockId = parentDiv.attr('data-id');

            $('#sendOptions').click(function () {

                $.ajax({
                    method: "GET",
                    url: '/kernel/grapes/getWidget.aspx?' + $('#activeFormGrapes').serialize()
                        + '&param=' + blockName
                        + '&blockId=' + blockId,
                    success: function (response) {
                        parentDiv.html(response);
                        model.attributes.content = response;
                    },
                });
            });

        }

}

function componentDragEnd(model) {

    clearBodyCanvas();

    let target = model.target;
    let className = target.get('name');
    let parentEl = $(target.getEl());

    let configs = parentEl.find('[config]').attr('config');

    if (className === '')
        className = parentEl.find('[widget]').attr('widget');

    if (className) {

        let file = 'getWidget';
        let htmlClass = 'zwidget';

        if (className.includes('zetsoft/blocks')) {
            file = 'getBlocks';
            htmlClass = 'template-block';
        }

        let ajaxable = parentEl.attr('ajaxable');
        let content = target.get('content');

        //if (ajaxable === 'true')
        parentEl.empty();
        $.ajax({
            method: "GET",
            url: '/kernel/grapes/' + file + '.aspx?param=' + className + '&configs=' + configs,
            success: function (response) {
                parentEl.html(response);
            },
        });
        /*else
            parentEl.html(content);*/

        if (!parentEl.hasClass(htmlClass))
            parentEl.addClass(htmlClass + ' parent-div');

    }


}
/*By Ravshan Davlatov*/
function loadEditor() {

    grape_search();
    clearBodyCanvas();

    const wrapper = editor.DomComponents.getWrapper();

    const componentsParent = wrapper.find('.zwidget');
    componentsParent.forEach(function (zwidget) {

        let widget = zwidget.getEl();
        let parent = $(widget).closest('.template-block');

        zwidget.attributes.content = $(widget).html();

        if (parent.hasClass('template-block'))
            $(widget).removeClass('parent-div');

    });

    const categoriess = editor.BlockManager.getCategories();
    categoriess.each(category => {
        category.set('open', false)
    })

    const components = wrapper.find('[data-gjs-type]');
    components.forEach(function (component) {

        const componentEl = component.getEl();
        component.set({
            'editable': false,
            'copyable': false,
            'droppable': false,
            'draggable': false,
            'hoverable': false,
            'selectable': false,
            'stylable': false,
            'highlightable': false,
            'badgable': false,
            'layerable': false,
            'ajaxable': true,
        });


        if ($(componentEl).hasClass('parent-div')
            || $(componentEl).hasClass('col'))
            component.set({
                'copyable': true,
                'ajaxable': true,
                'droppable': false,
                'stylable': true,
                'draggable': '.col',
                'hoverable': true,
                'selectable': true,
                'highlightable': true,
                'layerable': true,
            });

        if ($(componentEl).hasClass('col'))
            component.set({
                'droppable': true,
            });


        if (component.get('type') === 'text')
            component.set({
                'editable': true
            });

    });


    $('.fa-desktop').attr('data-original-title', 'Desktop');
    $('.fa-tablet').attr('data-original-title', 'Tablet');
    $('.fa-mobile').attr('data-original-title', 'Mobile');

    const body = editor.Canvas.getDocument().body;
    let child = $(body)[0].children[1]
    $(child).hide();

    let wrapper1 = $(editor.Canvas.getDocument().body).find('#wrapper')
    wrapper1.addClass('parent-div');

//Loader options start

    setTimeout(function () {
        $('.preloader').hide();
        $('#gjs').removeClass('d-none');
    }, 1500);

//Loader options end


    editor.CssComposer.getAll().reset();
    const swv = panelManager.getButton('options', 'sw-visibility');

    $('#search_grape').attr('type', 'search');

    $('#search_grape').on('keyup', function () {
        $(this).value;
    });

    blockManager.remove([
        'column1',
        'column2',
        'column3',
        'column3-7',
    ]);


}

function componentStyleUpdate(model) {
    let parentEl = $(model.getEl());
    let parentId = parentEl.attr('data-id');
    let styles = model.getStyle();
    let css = null;
    let newCss = '';
    //let elements = importCss.split('{').join('').split('}');

    let elements = importCss.split('}');
    let isContain = false;
    let info = null;

    console.log(elements)

    elements.map((key, k) =>
        key.includes(parentId) ? equalize(true, k) : ''
    )

    function equalize(bool, int) {
        info = int;
        isContain = bool;
    }


    if (styles !== '' && parentEl.hasClass('parent-div')) {
        /*if (isContain){
            let el = elements[info];
            elements[info]+=JSON.stringify(styles).split('{').join('').split('}').join('').split(',')[0]+';}';
        }
        else{*/
        if (parentId !== undefined)
            newCss = '.' + parentId + JSON.stringify(styles);
        else {
            if (parentEl[0].id)
                newCss = '#' + parentEl[0].id + JSON.stringify(styles);
            else
                newCss = '.' + parentId.id + JSON.stringify(styles);
        }
        //}

        /*if (newCss!==''){
            console.log(newCss);
            elements.push(newCss);
            //importCss = importCss.join(newCss);
            console.log(elements);
            elements.map((key,k)=>
                css+=key
            )
            importCss=css;
            console.log(importCss);
        }
        else
            console.log(elements[info])*/

        if (parentEl.hasClass('parent-div'))
            parentEl.attr('data-css', newCss);
    }
}

function componentRemove(model) {
    const openBl = panelManager.getButton('views', 'open-blocks');
    openBl.set('active', 1)
}

function setOptions() {

    const wrapper = editor.DomComponents.getWrapper();
    const components = wrapper.find('[data-gjs-type]');
    components.forEach(function (component) {

        const componentEl = component.getEl();
        component.set({
            'editable': false,
            'copyable': false,
            'droppable': false,
            'draggable': false,
            'hoverable': false,
            'selectable': false,
            'stylable': false,
            'highlightable': false,
            'badgable': false,
            'layerable': false,
            'ajaxable': true,
        });


        if ($(componentEl).hasClass('parent-div')
            || $(componentEl).hasClass('col'))
            component.set({
                'copyable': true,
                'ajaxable': true,
                'droppable': false,
                'stylable': true,
                'draggable': '.col',
                'hoverable': true,
                'selectable': true,
                'highlightable': true,
                'layerable': true,
            });

        if ($(componentEl).hasClass('col'))
            component.set({
                'droppable': true,
            });


        if (component.get('type') === 'text')
            component.set({
                'editable': true
            });

    });

}

let arrayAssets = [];

function getAssets(model, response) {

    model.attributes.content = response;

    const responseDom = $.parseHTML(response, document, true);
    const canvasHead = editor.Canvas.getDocument().head;

    $(responseDom).each(function (i, el) {

        const src = $(el).attr("src");
        const href = $(el).attr("href");
        if (src && !arrayAssets.includes(src)) {
            const script = document.createElement("script");
            script.src = src;
            script.type = "text/javascript";
            canvasHead.append(script);
            arrayAssets.push(src);
        }

        if (href && !arrayAssets.includes(href)) {
            const link = document.createElement("link");
            link.href = href;
            link.rel = "stylesheet";
            canvasHead.append(link);
            arrayAssets.push(href);
        }
    });

}

function cleanCanvas() {

    const comps = editor.DomComponents;
    comps.clear();

    clearBodyCanvas();

    var blocksButton = panelManager.getButton('views', 'open-blocks');
    blocksButton.set('active', 1);

}


function clearBodyCanvas() {

    let bodyHtml = $(body).html();
    let children = $(body).children();

    children.each(function (key, value) {

        let className = $(value).attr('class');

        if (className) {
            if (!className.includes('gjs-') && $(value).attr('id') !== 'wrapper')
                value.remove()
        }

    });

}

function grape_search() {

    let bm = editor.BlockManager;
    let pn = editor.Panels;
    let bs = editor.BlockManager.getAll();
    let titles = bs.models;
    let parentBlocks = bm.getAll();
    let searchBlocks = document.createElement('input');
    let searchBlocksTitle=document.getElementsByClassName("gjs-block-category");
    searchBlocks.classList.add('form-control');
    searchBlocks.placeholder = 'Поиск...';
    searchBlocks.id = 'search_grape';

    searchBlocks.onkeyup = function () {
        let search_value = searchBlocks.value;
        let search_item = document.getElementsByClassName('gjs-block');
        for (let c=0;c<searchBlocksTitle.length;c++){
            let count=0;
            let sbt=searchBlocksTitle[c];
            let sbt_title=searchBlocksTitle[c].children[0];
            let sbt_items=searchBlocksTitle[c].children[1];
            for (let b = 0; b < sbt_items.children.length; b++) {
                let el = $(sbt_items.children[b]).find('.gjs-block-label').text();
                let normal = sbt_items.children[b].getAttribute('title');
                let lower = el.toLowerCase();
                let up = el.toUpperCase();
                if (lower.includes(search_value) || el.includes(search_value) || up.includes(search_value)) {
                    $(sbt_items.children[b]).show();
                    count++;
                } else if (search_value.length === 0) {
                    $(sbt_items.children[b]).show();
                    count++;
                } else if (search_value.length > 0)
                    $(sbt_items.children[b]).hide();
            }
            if (count>0)
                sbt_title.classList.remove("d-none");
            else
                sbt_title.classList.add("d-none");

            bm.getCategories().each(category => {
                category.set('open', true)
            })
        }

        if (search_value.length === 0) {
            $(this).trigger("change");
            console.log('empty');
            bm.getCategories().each(category => {
                category.set('open', false)
            })
        }
    };

    $('.gjs-pn-views-container').prepend(searchBlocks);
}
