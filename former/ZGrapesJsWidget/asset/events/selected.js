function(model) {
    $('.gjs-traits-label').html('');



    var settingsBtn = panelManager.getButton('views', 'open-tm');
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
                success :  function(response) {
                    $('.gjs-traits-label').html(response);
                    $('.gjs-trt-traits').html('');
                },
            });

            let blockId = parentDiv.attr('data-id');
            $('#sendOptions').click(function() {
                $.ajax({
                    method: "GET",
                    url: '/kernel/grapes/getWidget.aspx?' + $('#activeForm').serialize() + '&param=' + blockName + '&blockId=' + blockId,
                    success: function(response) {
                        parentDiv.html(response);
                        model.attributes.content = response;
                    },
                });
            });

        }

}