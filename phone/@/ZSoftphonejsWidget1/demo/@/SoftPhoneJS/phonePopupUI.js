var is_show_popup = false;
var is_load_popup = false;

(function(){
//popup part
//    var btn_popup = document.getElementById("btn_popup");
    var popup = document.getElementById("popup");
    var popup_bar = document.getElementById("popup_bar");
    var btn_close = document.getElementById("btn_close");

    var offset = {x: 0, y: 0};

    popup_bar.addEventListener('mousedown', mouseDown, false);
    window.addEventListener('mouseup', mouseUp, false);

    function mouseUp()
    {
        window.removeEventListener('mousemove', popupMove, true);
    }

    function mouseDown(e) {
        offset.x = e.clientX - popup.offsetLeft;
        offset.y = e.clientY - popup.offsetTop;
        window.addEventListener('mousemove', popupMove, true);
    }

    function popupMove(e) {
        popup.style.position = 'fixed';
        var top = e.clientY - offset.y;
        var left = e.clientX - offset.x;
        popup.style.top = top + 'px';
        popup.style.left = left + 'px';
    }

    window.onkeydown = function (e) {
        if (e.keyCode == 27) { // if ESC key pressed
            btn_close.click(e);
        }
    }

//    btn_popup.onclick = function (e) {
//        // reset div position
//        popup.style.top = Math.round($(window).height() * 30 / 100) + "px";
//        popup.style.left = Math.round($(window).width() * 70 / 100) + "px";
//        popup.style.width = "230px";
//        popup.style.height = "240px";
//        popup.style.display = "block";
//        // register
//        //register();
//    }

    btn_close.onclick = function (e) {
        popup.style.display = "none";
        is_show_popup = false;
    }

}());

function show_hide_popup(){
    if (is_show_popup === false){
        popup.style.top = Math.round($(window).height() * 30 / 100) + "px";
        popup.style.left = Math.round($(window).width() * 70 / 100) + "px";
        popup.style.width = "230px";
        popup.style.height = "280px";
        popup.style.display = "block";
        is_show_popup = true;
        if (is_load_popup === false){
            init_phone();
        }
        is_load_popup = true;
    } else {
        popup.style.display = "none";
        is_show_popup = false;
    }
}
