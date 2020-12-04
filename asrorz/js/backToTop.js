/*  <div class="back-to-top text-center">
        <img src="images/backtotop.png" alt="" class="img-fluid">
    </div>

    .footer-btm .back-to-top {
  background: #eeeeee;
  position: fixed;
  bottom: 80px;
  right: 40px;
  width: 45px;
  height: 45px;
  border: 1px solid #dddddd;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
  z-index: 999;
  padding-top: 10px;
  display: none;
  cursor: pointer;
  -webkit-transition: 0.2s ease;
  -moz-transition: 0.2s ease;
  -ms-transition: 0.2s ease;
  -o-transition: 0.2s ease;
  transition: 0.2s ease;
}

.footer-btm .back-to-top:hover {
  background: #fff;
}


    */

/***** Back To Top *****/
$(window).scroll(function () {
    if ($(this).scrollTop() > 700) {
        $(".back-to-top").fadeIn();
    } else {
        $(".back-to-top").fadeOut();
    }
});
$(".back-to-top").on('click', function () {
    $("html, body").animate({scrollTop: 0}, 700);
});
