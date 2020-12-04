
var conn = new WebSocket('ws://' + window.location.hostname + ':7777'); //connect to websocket
var user_id = 234;
var awayTime = 10000;           //make away after this
var awayTimer = setTimeout(changeStatusToAway, awayTime);
var isActive = true;            //site is in active tab default true
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
        isOpen(conn)
            conn.send(JSON.stringify({status: 'online', id: user_id,})  )
        clearTimeout(awayTimer);
        awayTimer = setTimeout(changeStatusToAway, awayTime);
    });
});

conn.onmessage = function (data) {

    $('#status').text(data.data)
}

function isOpen(ws) {
    return ws.readyState === ws.OPEN
}

function changeStatusToAway() {
    conn.send(JSON.stringify({status : 'away', id:  user_id,}))
}
