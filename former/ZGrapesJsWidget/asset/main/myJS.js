/**
 *
 * Author:  Asror Zakirov
 * Created: 4/28/2020 10:17 AM
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 */

/*

let wow = new WOW({
    boxClass:     'wow',      // default
    animateClass: 'animated', // default
    offset:       0,          // default
    mobile:       true,       // default
    live:         true        // default
});
wow.init();



$('.gjs-pn-options').attr('data-wow-duration','0.4s');
$('.gjs-pn-options').attr('data-wow-delay','0.8s');
$('.gjs-pn-options').addClass('wow slideInLeft');

*/
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




// ctrl+s
$(document).keydown(function (event) {
    if (!(String.fromCharCode(event.which).toLowerCase() == 's' && event.ctrlKey) && !(event.which == 19)) return true;
    saveContentPhp("ajax")
    event.preventDefault();
    return false;
});

// Connect to socket
// var conn = new WebSocket('ws://localhost:1997');
// conn.onmessage = function (e) {
//     $('#saveFile').show()
//     $('.spinner-border').remove()
// };

const panelManager = editor.Panels;
const desktopButton = panelManager.getButton('devices-c', 'set-device-desktop');
const tabletButton = panelManager.getButton('devices-c', 'set-device-tablet');
const mobileButton = panelManager.getButton('devices-c', 'set-device-mobile');
const openBlocks=panelManager.getButton('views','open-blocks');

function cleanCanvas() {

    const comps = editor.DomComponents;
    comps.clear();

    var blocksButton = panelManager.getButton('views', 'open-blocks');
    blocksButton.set('active', 1);

}

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

            cleanCanvas();

            editor.runCommand('open-blocks');
            $(editor.Canvas.getDocument().body).find('#wrapper').empty();
            $('.gjs-toolbar').empty();

            Swal.fire({
                icon: 'success',
                title: 'Очищено!',
                timer: 1000,
                showConfirmButton: false,
            })
            $('.gjs-traits-label').empty();
            $('#search_grape').show();
        }
    });
};
