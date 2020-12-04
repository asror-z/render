function(model) {

    var target = model.target;
    let className = target.get('name');
    var parentEl = $(target.getEl());
    var configs = parentEl.find('[config]').attr('config');

    if (className === '')
        className = parentEl.find('[widget]').attr('widget');

    if (className) {

        let file = 'getWidget';
        let htmlClass = 'zwidget';

        if (className.includes('zetsoft/blocks')) {
            file = 'getBlocks';
            htmlClass = 'template-block';
        }

        var ajaxable = parentEl.attr('ajaxable');
        var content = target.get('content');

        if (ajaxable === 'true')
            $.ajax({
                method: "GET",
                url: '/kernel/grapes/' + file + '.aspx?param=' + className + '&configs=' + configs,
                success: function(response) {
                    parentEl.html(response);
                    target.attributes.content = response;
                },
            });
        else
            parentEl.html(content);

        if (!parentEl.hasClass(htmlClass))
            parentEl.addClass(htmlClass + ' parent-div');

    }


}