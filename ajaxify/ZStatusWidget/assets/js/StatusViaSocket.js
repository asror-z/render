//site is in active tab default true
var conn = new WebSocket('ws://' + window.location.hostname + ':7777');
var user_id = 234;
var awayTime = 10000;           //make away after this
var awayTimer = setTimeout(changeStatusToAway, awayTime);
var isActive = true; //connect to websocket

$(document).on('select2:select', '#val', function () {
    if ($(this).val() === 'dnd' || $(this).val() === 'lunch') {
        conn.send(JSON.stringify({status: $(this).val(), id: user_id,}))
        localStorage.setItem('test', $(this).val());
    }

    if ($(this).val() === 'online') {
        localStorage.setItem('test', $(this).val());
        status();
    }

});


function status() {

    $(window).on("blur focus", function (e) {                //check if site is in active tab
        var prevType = $(this).data("prevType");

        if (prevType !== e.type) {   //  reduce double fire issues
            switch (e.type) {
                case "blur":
                    isActive = false;
                    break;
                case "focus":
                    isActive = true;
                    break;
            }
        }
        $(this).data("prevType", e.type);
    })

    conn.onopen = () => {                     //do smth on open websocket
        data = JSON.stringify({status: 'online', id: user_id,})
        conn.send(data)

    };


    $(document).ready(function () {
        $('body').bind('mousemove mousedown keydown touchstart', function (event) {
            if (localStorage.getItem('test') !== null) {
                clearTimeout(awayTimer);
            } else {
                isOpen(conn)
                conn.send(JSON.stringify({status: 'online', id: user_id,}))
                clearTimeout(awayTimer);
                awayTimer = setTimeout(changeStatusToAway, awayTime);
            }
        });
    });

    conn.onmessage = function (data) {
        switch (data.data) {

            case 'online':

                $('#status').removeClass('badge-dark');
                $('#status').removeClass('badge-warning');
                $('#status').addClass('badge-success');
                break;

            case 'away':

                $('#status').removeClass('badge-dark');
                $('#status').removeClass('badge-success');
                $('#status').addClass('badge-warning');
                break;
            case 'offline':
                $('#status').removeClass('badge-success');
                $('#status').removeClass('badge-warning');
                $('#status').addClass('badge-dark');
                break;

        }
        $('#status').text();
    }

    function isOpen(ws) {
        return ws.readyState === ws.OPEN
    }

}


function changeStatusToAway() {
    conn.send(JSON.stringify({status: 'away', id: user_id,}))
}
