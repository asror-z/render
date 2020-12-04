/**
 *
 * Author:  Asror Zakirov
 * Created: 6/11/2020 10:18 AM
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 */



var page = 1;
var skip = 0;
var loader = $('#loader_infinity');
var no_content_text = $('#no_content');
var isSend = false;
var footer=$('#main_footer');
var href = $('#toAppend')
loader.hide();

var footer_height=0;

$(document).ready(function () {

    var lS=window.localStorage;
    var zcol=$('.zcol');
    var zlist=$('.zlist');
    var items=$('.appendTo .zcol,.appendTo .zlist');
    var type = '{type}';
    var show_more_btn = $('#show_more');

    zlist.hide();
    $(document).on('ready pjax:success',function () {
    
        lS=window.localStorage;
        zlist.hide();
        function switchToCol() {
            zcol=$('.zcol');
            zlist=$('.zlist');
            items=$('.appendTo .zcol,.appendTo .zlist,.zlist,.zcol');
            zcol.show();
            zlist.hide();
            $('#switch_to_list').addClass('text-success')
            $('#switch_to_list').removeClass('btn-success')
            $('#switch_to_col').removeClass('text-success');
            $('#switch_to_col').addClass('btn-success');
        }

        function switchToList(){
            zcol=$('.zcol');
            zlist=$('.zlist');
            items=$('.appendTo .zcol,.appendTo .zlist,.zlist,.zcol');
            zlist.show();
            zcol.hide();
            $('#switch_to_col').addClass('text-success');
            $('#switch_to_col').removeClass('btn-success');
            $('#switch_to_list').removeClass('text-success');
            $('#switch_to_list').addClass('btn-success');
        }

        if(lS.getItem('grid')==='switch_to_list'){
            switchToList();
        }
        else{
            switchToCol();
        }
        $('#switch_to_list, #switch_to_col').on('click',function () {
            lS.setItem('grid',$(this).attr('id'))
            $(this).removeClass('text-success')
            $(this).addClass('btn-success')
            if ($(this).attr('id')==='switch_to_list'){
                switchToList()
            }
            if ($(this).attr('id')==='switch_to_col'){
                switchToCol();
            }
        })
    })

    function switchToCol() {
        zcol.show();
        zlist.hide();
        $('#switch_to_list').addClass('text-success')
        $('#switch_to_list').removeClass('btn-success')
        $('#switch_to_col').removeClass('text-success');
        $('#switch_to_col').addClass('btn-success');
    }

    function switchToList(){
        zcol.hide();
        zlist.show();
        $('#switch_to_col').addClass('text-success');
        $('#switch_to_col').removeClass('btn-success');
        $('#switch_to_list').removeClass('text-success');
        $('#switch_to_list').addClass('btn-success');
    }

    $('#switch_to_list, #switch_to_col').on('click',function () {

        lS.setItem('grid',$(this).attr('id'))
        zcol=$('.zcol');
        zlist=$('.zlist');
        items=$('.appendTo .zcol,.appendTo .zlist');
        $(this).removeClass('text-success')
        $(this).addClass('btn-success')
        if ($(this).attr('id')==='switch_to_list'){
            switchToList()
        }
        if ($(this).attr('id')==='switch_to_col'){
            switchToCol();
        }
    })



    function checkTabs() {
        lS=window.localStorage;
        items=$('.appendTo .zcol,.appendTo .zlist');
        zcol=$('.zcol');
        zlist=$('.zlist');
        if(lS.getItem('grid')==='switch_to_list'){
            switchToList();
        }
        else{
            switchToCol()
        }
        $('.lds-roller').hide()
    }
                                                     
    checkTabs();

    function infinityAjax() {
    console.log('{url}')
        $.ajax({
            url: '{url}',
            method: '{ajaxMethod}',
            data: {
                'page': page,
                'limit': '{limit}',
                'requireUrl': '{requireUrl}',
                //'itemAttribute':'{itemAttribute}',
                'namespace': '{namespace}',
                'service': '{service}',
                'method': '{method}',
                'test': '{test}',
                'args': '{args}',
                //'args': '{args}|' + page + '|{limit}',
                'isCommon': '{isCommon}'
            },
            beforeSend: function (data) {
                show_more_btn.hide()
                loader.show();
                no_content_text.hide();
            },
            success: function (data) {
                page++;
                loader.hide();
                if (!data) {
                    no_content_text.show();
                    show_more_btn.hide();
                } else {
                    $('.{appendTo}').append(data);
                    show_more_btn.show();
                }
                checkTabs();
            },
            error: function () {
                loader.hide();
                no_content_text.show();
                href.hide()
            }
        })
    }

    if (page === 1){
   
        var i = 1;
        infinityAjax();

    }

    if ($('#main_footer').length){
        footer_height=footer.height();
    }
              
    if (type === 'scroll')
        $('body').scroll(function () {
           
            if (($('body').scrollTop() + $('body').height() >= $(document).height() - footer_height) && no_content_text.css('display') === 'none') {
                infinityAjax();
            }
        });

    else{
        show_more_btn.click(function () {
            infinityAjax();
            setTimeout(function() {
                let options = {min: 1, max: 5, step: 2, size: 'lg', emptyStar: '<i class="fa fa-star"></i>', filledStar: '<i class="fas fa-star"></i>'}
                $('.rating-loading').rating(options)

            }, 1000)
        })
    }


    /*$(document).on('pjax:end',function () {
        console.log('infinite')
        infinityAjax();
    })*/
})
