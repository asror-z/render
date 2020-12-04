
function Wavwan(model) {
    let parentEl = $(model.getEl());
    let parentId = parentEl.attr('data-id');
    let styles = model.getStyle();
    let css;

    if (styles !== '')
        css = '.' + parentId + JSON.stringify(styles);

    if (parentEl.hasClass('parent-div'))
        parentEl.attr('data-css', css);
}