/**
 *
 * Author:  Asror Zakirov
 * Created: 4/28/2020 10:17 AM
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 */


$('#search_grape').hide();
$('#search_grape').hide();




$('.fa-th-large,.fa-bars,.fa-cog,.fa-paint-brush').click(function (e) {
    let bar = $('#search_grape');
    if ($(this).hasClass('gjs-pn-active') && $(this).hasClass('fa-th-large')) {
        bar.show();
    } else {
        bar.hide();
    }
});

$(".fa-download").remove();
$(".fa-code").remove();


$(".fa-undo").attr('title', 'Undo');

$(".fa-repeat").attr('title', 'Repeat');

//$(".fa-download").attr('title','Download');

$(".fa-trash").attr('title', 'Delete');

 $('.fa-desktop').on('click', function () {
     $('.fa-desktop').addClass('gjs-pn-active');
     $('.fa-tablet').removeClass('gjs-pn-active');
     $('.fa-mobile').removeClass('gjs-pn-active');
     $('.gjs-frame').width('100%');
 });

 $('.fa-tablet').on('click', function () {
     $('.fa-tablet').addClass('gjs-pn-active');
     $('.fa-desktop').removeClass('gjs-pn-active');
     $('.fa-mobile').removeClass('gjs-pn-active');
     $('.gjs-frame').width('992px');
 });


/* $('.gjs-pn-btn.fa.fa-trash').click(function() {
     $('#yii-debug-toolbar').remove();
     console.log(editor.Panels.getButton());
     $(editor.Canvas.getDocument().body).find('#wrapper').html('');
 });*/

$('.fa-mobile').on('click', function () {
    $('.fa-mobile').addClass('gjs-pn-active');
    $('.fa-tablet').removeClass('gjs-pn-active');
    $('.fa-desktop').removeClass('gjs-pn-active');
    $('.gjs-frame').width('576px');
});










$('.fa-square-o').click();


// ctrl+s
$(document).keydown(function (event) {
    if (!(String.fromCharCode(event.which).toLowerCase() == 's' && event.ctrlKey) && !(event.which == 19)) return true;
    saveContentPhp()
    event.preventDefault();
    return false;
});

// Connect to socket
var conn = new WebSocket('ws://localhost:1997');
conn.onmessage = function (e) {
    $('#saveFile').show()
    $('.spinner-border').remove()
};

const panelManager = editor.Panels;
const desktopButton = panelManager.getButton('devices-c', 'set-device-desktop');
const tabletButton = panelManager.getButton('devices-c', 'set-device-tablet');
const mobileButton = panelManager.getButton('devices-c', 'set-device-mobile');

const deleteButton = panelManager.getButton('options', 'canvas-clear');
deleteButton.attributes.command = function () {
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
            $(editor.Canvas.getDocument().body).find('#wrapper').html('');
            Swal.fire({
                icon: 'success',
                title: 'Очищено!',
                timer: 1000,
                showConfirmButton: false,
            })
        }
    });
};
$('.gjs-pn-buttons .fa-cogs').on('click', function () {
    console.log(asdsad)
})


