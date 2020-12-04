/**
 *
 * Author:  Asror Zakirov
 * Created: 7/15/2020 12:46 PM
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 */

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

// Connect to socket
{webSocket}

function saveContentPhp(type) {

    $('.gjs-pn-btn.fa-eye').before('<span class="spinner-border text-primary" role="status" style="position: absolute; right: -17px;"><span class="sr-only">Loading...</span></span>');
    let wrapper = $(editor.Canvas.getDocument().body).find('#wrapper');
    let content = $(wrapper).clone();
    let styles = content.find('.parent-div');
    let divs = content.find('div');

    content.find('.widgetsWrap').unwrap('.parent-div');

    let css = `{css}`;

    let splitedCss = css.split('}');
    const canvas = editor.DomComponents.getWrapper();
    const componentsParent = canvas.find('.parent-div');

    componentsParent.forEach(function(parent) {

        var element = $(parent.getEl());
        let kla='';
        if (JSON.stringify(parent.getStyle())!=='{}') {

            if (!css.includes(element.data('id'))){
                for (let object in parent.getStyle()){
                    kla=kla+object+":"+parent.getStyle()[object]+";";
                }
                css += '#' + element.data('id') + "{"+kla+"}";
            }
            else{
                let others='';
                let important='';
                let class1='';
                let index=css.indexOf(element.data('id'));
                let pos=element.data('id').length+1;
                /*css=[css.slice(0,index+pos), class1.substring(1,class1.length-1), css.slice(index+pos)].join('');*/

                let aaa=css.substring(index);
                let interval=aaa.substring(0,aaa.indexOf('}')+1);
                if (index===0) {
                    important=aaa.substring(aaa.indexOf('}')+1);

                }
                else {
                    others=css.substring(0,index-1)+css.substring(index+interval.length) ;

                };

                interval=interval.slice(interval.indexOf('{')+1,interval.lastIndexOf('}'));

                let array=interval.split(';');
                let counter=[];
                let count=0;


                for(let object in parent.getStyle()){

                    array= array.filter(item => !item.includes(object))

                }

                for(let object in parent.getStyle()){
                    array.push(object+":"+parent.getStyle()[object])
                }


                let final="."+element.data('id')+"{";
                array.forEach(function(item) {


                    final=final+item+";"

                })
                final=final+"}";

                others=others+final;
                css = others;

            }
        }
    });


    css = '<style>' + css + '</style>';
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
                'file': '{saveFile}',
                'content':  content.html(),
                //'actionId': '{actionId}',
                'css': css,
            },
            success: function() {
                $('.spinner-border').remove()

                Swal.fire({
                    icon: 'success',
                    title: 'Сохранено в файл',
                    text: '{saveFile}!',
                    timer: 1000,
                    showConfirmButton: false,
                })
            },
            error: function(e) {
                alert("error --- " + e.status + "  statusText:" + e.statusText)
                $('.spinner-border').remove()
            }
        });
    }
    else{
        var save_content = JSON.stringify({content : content.html(), actionId:  "{actionId}", config:  "{saveFile}"});
        conn.send(save_content);
    }
}
