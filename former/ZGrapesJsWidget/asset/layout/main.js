blockManager.add('{blockId}', {
    category: '{category}',
    label: `<div><i class="fa-2x {icon}"></i> 
              <div class="gjs-block-label">{label}</div>
            </div>`,
    attributes: {
        class:'widgets grapes-tooltip',
        'data-tooltip-content': '#{title}-tooltip'
    },
    content: {
        type: '{type}',
        name: '{ajaxName}', //'zetsoft/widgets/inptest/ZKSelect2AjaxWidget'
        removable: {removable},         //true
        draggable: {draggable},      // true
        droppable: {droppable},      // true
        badgable: {badgable},        // true
        stylable: {stylable},        // true
        isAll:{isAll},        // true
        'stylable-require': [],
        unstylable:{unstylable},    //[]  ,
        'style-signatur': [],
        highlightable:{highlightable},      // true
        copyable:{copyable},        // true
        resizable:{resizable},      // false //https://github.com/artf/grapesjs/blob/master/src/utils/Resizer.js
        layerable: {layerable},         //true
        selectable: {selectable},       //true
        hoverable: {hoverable},         //true
        editable:{editable},        //false
        content: `{content}`,
        style: {},
        void: {void},       //true
        toolbar: [{tbItem}],
        icon:'{icon}', //'fas fa-car'
        script:function() {
            {script}
        }
    },

});