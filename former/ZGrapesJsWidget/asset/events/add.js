panelManager.addButton('options', {
    id: 'saveFile',
    tagName: 'span',
    attributes: {
        title: 'Save to file',
        id: 'saveFile',
    },
    className: 'saveFile fas fa-save btn btn-outline-success',
    command: function() {
        saveContentPhp("ajax");
    }
});

$(document).ready(function(){

    $(".fa-save, .fa-arrows-alt, .fa-trash, .fa-square-o, .fa-undo, .fa-redo, .fa-eye, .fa-desktop," +
        ".fa-tablet, .fa-mobile, .fa-palette, .fa-layer-group, .fa-location-arrow").tooltip({
        placement : 'bottom'
    });

    // $(".fa-undo").attr('title', 'Назад');
    // $(".fa-redo").attr('title', 'Вперёд');
    // //$(".fa-repeat").attr('title', 'Вперёд');   
    // $(".fa-square-o").attr('title', 'Посмотреть код');
    // $(".fa-eye").attr('title', 'Предварительный просмотр'); 
    // $(".fa-trash").attr('title', 'Очистить');
    // $(".fa-arrows-alt").attr('title', 'Полный экран');
    // $(".fa-save").attr('title', 'Сохранить');
    // $(".fa-desktop").attr('title', 'Настольная версия');
    // $(".fa-tablet").attr('title', 'Версия для планшета');
    // $(".fa-mobile").attr('title', 'Мобильная версия');
    // $(".fa-palette").attr('title', 'Виджеты');
    // $(".fa-layer-group").attr('title', 'Шаблоны');
    // $(".fa-location-arrow").attr('title', 'Перейти на страницу');
});


// Connect to socket
var conn = new WebSocket('ws://localhost:1997');
conn.onmessage = function (data) {
    $('#saveFile').show();
    $('.spinner-border').remove();
    if (data){
        //alert('success');
        //toast.success('Successfully saved!');
    }else{
        //toast.error('Something went wrong!');
    }
};
// save content
setInterval(function(){
    if (conn.readyState === WebSocket.OPEN)
        saveContentPhp() }, 3000);

//Retry connection
conn.onclose = function(e) {
    console.log('Socket is closed. Reconnect will be attempted in 1 second.', e.reason);
    setTimeout(function() {
        var conn = new WebSocket('ws://localhost:1997');
    }, 1000);
};
//Retry connection
function saveContentPhp(type) {
    $('.gjs-pn-btn.fa-eye').before('<span class="spinner-border text-primary" role="status" style="position: absolute; right: -17px;"><span class="sr-only">Loading...</span></span>');
    let wrapper = $(editor.Canvas.getDocument().body).find('#wrapper');
    //let wrapper=editor.getHtml();
    let content = $(wrapper).clone();
    let styles = content.find('.parent-div');
    let divs = content.find('div');

    content.find('.widgetsWrap').unwrap('.parent-div');

    let css = '';
    /*  styles.each(function(k, styles) {
          css += $(styles).attr('data-css');
      });
      */
    const canvas = editor.DomComponents.getWrapper();
    const componentsParent = canvas.find('.parent-div');

    componentsParent.forEach(function(parent) {

        var element = $(parent.getEl());
        css += '.' + element.data('id') + JSON.stringify(parent.getStyle());

    });


    css = '<style>' + css + '</style>';
    console.log(editor.Canvas.getDocument().head);
    divs.each(function(key, v) {
        v.getAttributeNames().forEach(function(attr) {
            if (attr !== 'class')
                $(v).removeAttr(attr);
        });
    });

    if(type === "ajax") {

        $.ajax({
            method: 'post',
            url: '/kernel/grapes/save.aspx',
            data: {
                'file': '{$this->_config['saveFile']}',
                'content':  content.html(),
                'actionId': '{$actionId}',
                'css': css,
            },
            success: function() {
                $('.spinner-border').remove()
            },
            error: function(e) {
                alert("error --- " + e.status + "  statusText:" + e.statusText)
                $('.spinner-border').remove()
            }
        });



    }
    else{
        var save_content = JSON.stringify({content : content.html(), actionId:  "{$actionId}", config:  "{$this->_config['saveFile']}"});
        conn.send(save_content);
    }
}

let undoBtn = document.querySelector('.fa-undo');
let redoBtn = document.querySelector('.fa-repeat');
undoBtn.className = 'gjs-pn-btn fa fa-undo btn btn-outline-primary';
redoBtn.className = 'gjs-pn-btn fa fa-redo btn btn-outline-primary';
undoBtn.onclick = function() {
    this.className = 'gjs-pn-btn fa fa-undo btn btn-outline-primary';
};
redoBtn.onclick = function() {
    redoBtn.className = 'gjs-pn-btn fa fa-redo btn btn-outline-primary';
};

// end save content
// end connection to socket